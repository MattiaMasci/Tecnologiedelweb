/*!
 * jQuery Lens Simple Plugin
 * Copyright (c) 2014 Pietro Simone Di Chiara
 * Version: 1.0.1 (05-APR-2013)
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/mit-license.php
 * Requires: jQuery v1.7.0 or later
 */
(function ($) {
    "use strict";

    var ver = 'simpleLens-1.0.1';

    function debug(message) {
        if (window.console) {
            console.log(message);
        }
    }

    $.fn.simpleLens = function (options) {
        var opts = $.extend({}, $.fn.simpleLens.defaults, options);


        var big_image = {
            init: function (image) {
                this.height = image.height();
                this.width = image.width();
                this.offset = image.offset();
                this.position = image.position();

                this.calc_image_limits();
            },
            calc_image_limits: function(){
                this.limits = {
                    x_left : (this.position.left),
                    x_right : (this.position.left + this.width),
                    y_top : (this.position.top),
                    y_bottom : (this.position.top + this.height)
                }
            },
            calc_view_position: function (e) {
                return {
                    org_x: (e.pageX - this.offset.left),
                    org_y: (e.pageY - this.offset.top)
                }
            }
        };

        var cursor = {
            init: function(parent_anchor, lens_container, ratio, position){
                this.parent_anchor = parent_anchor;
                this.lens_container = lens_container;
                this.ratio = ratio;

                this.cursor_position = {
                    'top': 0,
                    'left': 0
                };

                this.calc_cursor_size();
                this.insert_cursor(position.org_x, position.org_y);
            },
            destroy: function(){
                $('.' + opts.cursor_class).remove();
            },
            calc_cursor_size: function () {
                this.cursor_height = this.lens_container.height() / this.ratio.x;
                this.cursor_width = this.lens_container.width() / this.ratio.y;
                this.height_center = (this.cursor_height / 2);
                this.width_center = (this.cursor_width / 2);
            },
            update_cursor_position: function (x, y) {
                var new_y = (y - this.height_center);
                var new_bottom_y = (y + this.height_center);
                var new_x = (x - this.width_center);
                var new_right_x = (x + this.width_center);

                var limits = big_image.limits;
                if (parseFloat(limits.y_top) > parseFloat(new_y)) {
                    new_y = limits.y_top;
                } else if (parseFloat(new_bottom_y) > parseFloat(limits.y_bottom)) {
                    new_y = limits.y_bottom - this.cursor_height;
                }

                if (parseFloat(limits.x_left) > parseFloat(new_x)) {
                    new_x = limits.x_left;
                } else if (parseFloat(new_right_x) > parseFloat(limits.x_right)) {
                    new_x = limits.x_right - this.cursor_width;
                }

                this.cursor_position = {
                    'top': new_y,
                    'left': new_x,
                    'center_top': new_y + this.height_center,
                    'center_left': new_x + this.width_center
                };

                if (this.cursor !== undefined) {
                    this.cursor.css(this.cursor_position);
                }
            },
            insert_cursor: function (x, y) {
                this.cursor = $('<div>', {'class': opts.cursor_class});
                this.cursor.css({
                    'height': this.cursor_height + 'px',
                    'width': this.cursor_width + 'px'
                });

                this.cursor.appendTo(this.parent_anchor);
                return this.update_cursor_position(x, y);
            }
        };

        var lens = {
            init: function(parent_anchor){
                this.parent_anchor = parent_anchor;
                this.parent_div = parent_anchor.parent(opts.parent_class);
                this.lens_image_url = parent_anchor.attr(opts.lens_image_attr);
                this.lens_container = $('<div>', {'class': opts.lens_class});
                this.lens_image = $('<img>');
                big_image.init(parent_anchor.find(opts.big_image_class));

                if (this.lens_image_url === undefined) {
                    debug('Cannot find lens image. URL: ' + this.lens_image_url);
                    debug(that);
                    debug(parent_anchor);
                    debug(lens_image_url);
                }
            },
            update_lens_position: function (position) {
                this.lens_image.css({
                    'top': position.top,
                    'left': position.left
                });
            },
            calc_lens_position: function(cursor_position){
                return {
                    left: (cursor_position.center_left * this.ratio.x - this.container.width) * -1,
                    top: (cursor_position.center_top * this.ratio.y - this.container.height) * -1
                }
            },
            lens_event_bind: function () {
                var that = this;
                var mouse_callback = function (mouse) {
                    var position = big_image.calc_view_position(mouse);
                    cursor.update_cursor_position(position.org_x, position.org_y);
                    that.update_lens_position(that.calc_lens_position(cursor.cursor_position, that.ratio, that.container));
                };

                this.parent_anchor.mousemove(mouse_callback);
            },
            lens_event_unbind: function(){
                if(this.parent_anchor !== undefined){
                    this.parent_anchor.unbind('mousemove');
                }
            },
            destroy: function(){
                cursor.destroy();

                if(this.lens_container !== undefined && this.lens_container.length > 0){
                    $('.' + opts.lens_class).remove();
                    this.lens_event_unbind();
                }
            },
            load: function(e){
                var that = this;

                this.lens_container.appendTo(this.parent_div);

                var margin_top = (this.lens_container.height() / 2) - 25,
                    loading_image = $('<img>', {'src': opts.loading_image})
                        .css("margin-top", margin_top);
                this.lens_container.html(loading_image);


                this.lens_image.load(function () {
                    that.lens_container.html(that.lens_image);

                    that.container = {
                        width: that.lens_container.width() / 2,
                        height: that.lens_container.height() / 2
                    };

                    that.img_size = {
                        width: that.lens_image.width(),
                        height: that.lens_image.height()
                    };

                    that.ratio = {
                        y: that.lens_image.height() / big_image.height,
                        x: that.lens_image.width() / big_image.width
                    };

                    var position = big_image.calc_view_position(e);
                    cursor.init(that.parent_anchor, that.lens_container, that.ratio, position);
                    that.update_lens_position(that.calc_lens_position(cursor.cursor_position));

                    that.lens_event_bind();
                }).attr('src', this.lens_image_url);
            }
        };

        var init = function (e) {
            var parent_anchor =  $(this);

            lens.init(parent_anchor);
            lens.load(e);
        };

        var destroy = function () {
            lens.destroy();
        };

        $(this).parents(opts.parent_class).on(opts.open_lens_event, opts.anchor_parent_class, init);
        $(this).parents(opts.parent_class).on('mouseleave', opts.anchor_parent_class, destroy);

    };

    $.fn.simpleLens.ver = function () { return ver; };

    $.fn.simpleLens.defaults = {
        anchor_parent_class: '.simpleLens-lens-image',
        lens_image_attr: 'data-lens-image',
        big_image_class: '.simpleLens-big-image',
        parent_class: '.simpleLens-big-image-container',
        lens_class: 'simpleLens-lens-element',
        cursor_class: 'simpleLens-mouse-cursor',
        loading_image: '../img/Frontend.img/view-slider/loading.gif',
        open_lens_event: 'mouseenter'
    };


    $(document).on("click", "#aprimodale", function () {

        $("#quantity").empty();
        var idphoto = $(this).data('id').idphoto;
        var id = $(this).data('id').id;
        var idmodello = $(this).data('id').idmodello;
        var categoria = $(this).data('id').categoria;
        var genere = $(this).data('id').genere;
        var nome = $(this).data('id').nome;
        var slider1 = $(this).data('id').slider1;
        var thumbnail1 = $(this).data('id').thumbnail1;
        var thumbnail2 = $(this).data('id').thumbnail2;
        var thumbnail3 = $(this).data('id').thumbnail3;
        var normal2 = $(this).data('id').normal2;
        var normal3 = $(this).data('id').normal3;
        var slider2 = $(this).data('id').slider2;
        var slider3 = $(this).data('id').slider3;
        var prezzo = $(this).data('id').prezzo;
        var descrizione = $(this).data('id').descrizione;
        var stock = $(this).data('id').stock;
        var colore_select = '';
        var size_select = '';

        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/sizeselect',
            data: {idphoto : idphoto, genere : genere},
            success:function(resp){
                size_select = resp;
            }, error:function(){
                alert("Error");
            }
        });

        $('#size_select').html( size_select );
        if (stock == "Non in stock") {
            $('#quantity').append('<option value="">Non Disponibile</option>');
        }
        else {
            var taglia = $('#size_select').val();
            $.ajax({
                type: 'get',
                url: '/ProgettoTdWpersonale/public/get-quantita',
                data: {taglia: taglia, id : idmodello},
                success: function (resp) {
                    $('#quantity').append(resp);
                }, error: function () {
                    alert("Error");
                }
            });
        }

        $('#size_select').attr('data-id' , idmodello);
        $('#addCart').attr('data-id' , idphoto);

        $('#normale1').attr('src', id );
        $('#slider1').attr('data-lens-image', slider1 );
        $('#thumbnail1').attr('src', thumbnail1 );
        $('#thumbnail2').attr('src', thumbnail2 );
        $('#thumbnail3').attr('src', thumbnail3 );
        $('#foto1').attr('data-lens-image', slider1 ).attr('data-big-image', id );
        $('#foto2').attr('data-lens-image', slider2 ).attr('data-big-image', normal2 );
        $('#foto3').attr('data-lens-image', slider3 ).attr('data-big-image', normal3 );

        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/colorselect',
            data: {idphoto : idphoto, genere : genere},
            success:function(resp){
                colore_select = resp;
            }, error:function(){
                alert("Error");
            }
        });

        $('#prezzo').html( "<span class=\"aa-product-view-price\">$"+prezzo+"</span>" +
            "<p class=\"aa-product-avilability\">Disponibilità: <span>"+stock+"</span></p>" );
        $('#descrizione').html( descrizione );
        $('#colore_select').html( colore_select );
        $('#colore_select').attr('data-id' , idmodello);
        $('#categoria').html( categoria );
        $('#nome').html( nome );

        var link = "";
        if (window.location.href.indexOf("home") > -1) link = "../public/product-details/" + genere + "&&" + idphoto + "";
        else link = "../product-details/" + genere + "&&" + idphoto + "";

        $('#show_details').attr('href' , link);
    });

    //Alert profilo e stock per product-details
    $( document ).ready(function() {
        if (window.location.href.indexOf("product-details") > -1) {
            var stock = $('#stockparagraph').text();

            if (stock == "Disponibilità: Non in stock") {
                $('#prod-quantity').append('<option value="">Non Disponibile</option>');
            }
            else {
                var taglia = $('#tagliaSelected').val();
                var id = $('#prod-quantity').data('id').id;
                $.ajax({
                    type: 'get',
                    url: '/ProgettoTdWpersonale/public/get-quantita',
                    data: {taglia: taglia, id : id},
                    success: function (resp) {
                        $('#prod-quantity').append(resp);
                    }, error: function () {
                        alert("Error");
                    }
                });
            }
        } else if (window.location.href.indexOf("account") > -1) {
            var val = $('#alert_dati_testo').text();
           if (val.includes('Dati')) $('#alert_password').remove();
            else if (val.includes('Password')) $('#alert_dati').remove();
        }
    });

    if($('body').is('.productPage')) {
        var categoria = $('#categoriavalue').val();
        var genere = $('#generevalue').val();
        $.ajax({
            type: 'get',
            url: '/ProgettoTdWpersonale/public/elencocategorie',
            data: {categoria: categoria, genere: genere},
            success: function (resp) {
                $('#elencocategorie').html(resp);
            }, error: function () {
                alert("Error");
            }
        });
    }

    //Filtra prodotti per prezzo
    $( "#FiltraPerPrezzo" ).click(function() {
        var prezzoMinimo = $('#skip-value-lower').text();
        var prezzoMassimo = $('#skip-value-upper').text();
        var categoria = $('#categoriavalue').val();
        var genere = $('#generevalue').val();
        var collezione = $('#collezionevalue').val();
        var marca = $('#marcavalue').val();

        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/filter',
            data:{prezzoMinimo : prezzoMinimo, prezzoMassimo : prezzoMassimo, categoria : categoria, genere : genere, collezione : collezione, marca : marca},
            success:function(resp){
                $('#prodotti').html(resp);
                $('#link_prodotti').empty();
            }, error:function(){
                alert("Error");
            }
        });
    });

    //Ordina prodotti: default, nome, data, prezzo
    $( "#ordinaPer" ).change(function() {
        var val = $(this).val();
        var categoria = $('#categoriavalue').val();
        var genere = $('#generevalue').val();
        var collezione = $('#collezionevalue').val();
        var marca = $('#marcavalue').val();
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/order-products',
            data:{valore : val, categoria : categoria, genere : genere, collezione : collezione, marca : marca},
            success:function(resp){
                $("#prodotti").html(resp);
                $('#link_prodotti').empty();
            }, error:function(){
                alert("Error");
            }
        });
    });

    //Wishlist redirect
    $(document).on("click", "#wishlistcall", function () {
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/wishlistcall',
            success:function(){
            }, error:function(){
                alert("Error");
            }
        });
    });
    $(document).on("click", "#wishlistuncall", function () {
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/wishlistuncall',
            success:function(){
            }, error:function(){
                alert("Error");
            }
        });
    });
    //Account redirect
    $(document).on("click", "#accountcall", function () {
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/accountcall',
            success:function(){
            }, error:function(){
                alert("Error");
            }
        });
    });
    //Ordini redirect
    $(document).on("click", "#ordercall", function () {
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/ordercall',
            success:function(){
            }, error:function(){
                alert("Error");
            }
        });
    });

    //Filtra per colore
    $(document).on("click", "#filtrapercolore", function () {
        var colore = $(this).data('id');
        var categoria = $('#categoriavalue').val();
        var genere = $('#generevalue').val();
        var collezione = $('#collezionevalue').val();
        var marca = $('#marcavalue').val();
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/filtrapercolore',
            data:{colore : colore, categoria : categoria, genere : genere, collezione : collezione, marca : marca},
            success:function(resp){
                $('#prodotti').html(resp);
                $('#link_prodotti').empty();
            }, error:function(){
                alert("Error");
            }
        });
    });

    /*
    //Barra di ricerca
    $( document ).ready(function() {
        var genere = $('#generevalue').val();
        var val = $('#forsearch').val();
        if (val == 'Product' || val == 'Product-Detail') {
            $('#divsearch').html("<form action=\"../product/\" id=\"search\" name=\"search\">" +
                "<input type=\"text\" name=\"barradiricerca\" id=\"barradiricerca\" placeholder=\"Cerca qui es. 'uomo' \">" +
                "<input type=\"hidden\" name=\"gen\" value=\""+genere+"\">" +
                "<button id=\"searchbutton\" type=\"submit\"><span class=\"fa fa-search\"></span></button>" +
                "</form>");
        }
    });
    */

    //Stelle recensioni
    $('#stars a').on('click', function() {
        var onStar = $(this).attr("data-id");

        $('#span1').removeClass('fa fa-star');
        $('#span2').removeClass('fa fa-star');
        $('#span3').removeClass('fa fa-star');
        $('#span4').removeClass('fa fa-star');
        $('#span5').removeClass('fa fa-star');
        $('#span1').addClass('fa fa-star-o');
        $('#span2').addClass('fa fa-star-o');
        $('#span3').addClass('fa fa-star-o');
        $('#span4').addClass('fa fa-star-o');
        $('#span5').addClass('fa fa-star-o');

        if (onStar == '1') {
            $('#span1').removeClass('fa fa-star-o');
            $('#span1').addClass('fa fa-star');
        } else if (onStar == '2') {
            $('#span1').removeClass('fa fa-star-o');
            $('#span2').removeClass('fa fa-star-o');
            $('#span1').addClass('fa fa-star');
            $('#span2').addClass('fa fa-star');
        } else if (onStar == '3') {
            $('#span1').removeClass('fa fa-star-o');
            $('#span2').removeClass('fa fa-star-o');
            $('#span3').removeClass('fa fa-star-o');
            $('#span1').addClass('fa fa-star');
            $('#span2').addClass('fa fa-star');
            $('#span3').addClass('fa fa-star');
        } else if (onStar == '4') {
            $('#span1').removeClass('fa fa-star-o');
            $('#span2').removeClass('fa fa-star-o');
            $('#span3').removeClass('fa fa-star-o');
            $('#span4').removeClass('fa fa-star-o');
            $('#span1').addClass('fa fa-star');
            $('#span2').addClass('fa fa-star');
            $('#span3').addClass('fa fa-star');
            $('#span4').addClass('fa fa-star');
        } else {
            $('#span1').removeClass('fa fa-star-o');
            $('#span2').removeClass('fa fa-star-o');
            $('#span3').removeClass('fa fa-star-o');
            $('#span4').removeClass('fa fa-star-o');
            $('#span5').removeClass('fa fa-star-o');
            $('#span1').addClass('fa fa-star');
            $('#span2').addClass('fa fa-star');
            $('#span3').addClass('fa fa-star');
            $('#span4').addClass('fa fa-star');
            $('#span5').addClass('fa fa-star');
        }
        $('#rating').val(onStar);
    });

    //Login
    $( document ).ready(function() {
        $('[data-tooltip="tooltip"]').tooltip();
        var val = $('#errore').val();
        if (val == '{"email":["Queste credenziali non fanno match con i nostri record."]}' || val.includes('Troppe richieste')) $('#login-modal').modal('show');
    });

    //Delete
    $(document).on('click', '.deleteRecord', function() {
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        var par1 = $(this).attr('rel2');
        var par2 = $(this).attr('rel3');
        Swal.fire({
            title: 'Sei sicuro?',
            text: "Il contenuto andrà perso definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cancella!',
            cancelButtonText: 'No, annulla!',
            reverseButtons: true
        }).then((result) => {
            if (result.value == true) {
                if (window.location.href.indexOf("product") > -1) {
                    if(par1 == null) window.location.href = "../" + deleteFunction + "/" + id;
                    else window.location.href = "../" + deleteFunction + "/" + id + "&&" + par1 + "&&" + par2;
                } else {
                    if(par1 == null) window.location.href = "../public/" + deleteFunction + "/"+ id;
                    else window.location.href = "../public/" + deleteFunction + "/"+ id + "&&" + par1 + "&&" + par2;
                }
            }
        });

        return false;
    });

    /*
    $(".deleteRecord").click(function(){
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        Swal.fire({
            title: 'Sei sicuro?',
            text: "Il contenuto andrà perso definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, cancella!',
            cancelButtonText: 'No, annulla!',
            reverseButtons: true
        }).then((result) => {
            if (result.value == true) {
                if (window.location.href.indexOf("product") > -1) {
                    window.location.href = "../" + deleteFunction + "/" + id;
                } else window.location.href = "../public/" + deleteFunction + "/" + id;
            }
        });

        return false;
    });
    */

    //Carica info checkout
    $( document ).ready(function() {
        if (window.location.href.indexOf("checkout") > -1) {
            $.ajax({
                type:'get',
                url:'/ProgettoTdWpersonale/public/load-info',
                success:function(resp){
                    try {
                        var serveroutputobject = $.parseJSON(resp);
                    } catch (e) {
                        var serveroutputobject = null;
                    }
                    if ( serveroutputobject !== null ) {
                        var array = [];
                        for (var index in serveroutputobject) {
                            array.push(serveroutputobject[index]);
                        }
                        $('#nomefatturazione').val(array[2]);
                        $('#cognomefatturazione').val(array[3]);
                        $('#aziendafatturazione').val(array[4]);
                        $('#emailfatturazione').val(array[5]);
                        $('#telefonofatturazione').val(array[6]);
                        $('#indirizzofatturazione').html(array[7]);
                        var select = document.getElementById("nazionefatturazione");
                        if (array[8] == 'USA') select.options[16].selected = true;
                        else if (array[8] == 'AUS') select.options[1].selected = true;
                        else if (array[8] == 'AF') select.options[2].selected = true;
                        else if (array[8] == 'BGD') select.options[3].selected = true;
                        else if (array[8] == 'BE') select.options[4].selected = true;
                        else if (array[8] == 'BR') select.options[5].selected = true;
                        else if (array[8] == 'CAN') select.options[6].selected = true;
                        else if (array[8] == 'CN') select.options[7].selected = true;
                        else if (array[8] == 'DK') select.options[8].selected = true;
                        else if (array[8] == 'EG') select.options[9].selected = true;
                        else if (array[8] == 'EAU') select.options[10].selected = true;
                        else if (array[8] == 'IND') select.options[11].selected = true;
                        else if (array[8] == 'IRN') select.options[12].selected = true;
                        else if (array[8] == 'IL') select.options[13].selected = true;
                        else if (array[8] == 'MX') select.options[14].selected = true;
                        else if (array[8] == 'UK') select.options[15].selected = true;
                        $('#abitazionefatturazione').val(array[9]);
                        $('#cittafatturazione').val(array[10]);
                    }
                }, error:function(){
                    alert("Error");
                }
            });
        }
    });

    $('#effettua_ordine').click( function () {
        var exit = 0;
        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/check-auth',
            success:function(resp){
                if (resp == 'No')  {
                    exit = 1;
                    Swal.fire({
                        icon: 'warning',
                        title: 'Errore',
                        text: 'Devi autenticarti per effettuare il checkout!',
                    });
                } else if (resp == 'Vuoto')  {
                    exit = 1;
                    Swal.fire({
                        icon: 'warning',
                        title: 'Errore',
                        text: 'Il tuo Carrello è vuoto!',
                    });
                }
            }, error:function(){
                alert("Error");
            }
        });
        if (exit == 1) return false;

        $('#fatturazione').empty();
        $('#spedizione').empty();
        $('#fatturazione').append('Dettagli di fatturazione');
        $('#spedizione').append('Indirizzo di spedizione');

        var nomefatturazione = $('#nomefatturazione').val();
        var cognomefatturazione = $('#cognomefatturazione').val();
        var emailfatturazione = $('#emailfatturazione').val();
        var telefonofatturazione = $('#telefonofatturazione').val();
        var indirizzofatturazione = $('#indirizzofatturazione').val();
        var cittafatturazione = $('#cittafatturazione').val();
        var nomespedizione = $('#nomespedizione').val();
        var cognomespedizione = $('#cognomespedizione').val();
        var emailspedizione = $('#emailspedizione').val();
        var telefonospedizione = $('#telefonospedizione').val();
        var indirizzospedizione = $('#indirizzospedizione').val();
        var cittaspedizione = $('#cittaspedizione').val();

        if (nomefatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(nomefatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Nome non valido</strong></font>");
            return false;
        }
        if (cognomefatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(cognomefatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Cognome non valido</strong></font>");
            return false;
        }
        if (emailfatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailfatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Indirizzo email non valido</strong></font>");
            return false;
        }
        if (telefonofatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(telefonofatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Numero di telefono non valido</strong></font>");
            return false;
        }
        if (indirizzofatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z0-9\s,'-]*$/.test(indirizzofatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Indirizzo non valido</strong></font>");
            return false;
        }
        if (cittafatturazione == '') {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(cittafatturazione)) {

        } else {
            $('#fatturazione').append("<font color='red'><strong>&nbsp;&nbsp;**Città non valida</strong></font>");
            return false;
        }
        if (nomespedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(nomespedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Nome non valido</strong></font>");
            return false;
        }
        if (cognomespedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(cognomespedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Cognome non valido</strong></font>");
            return false;
        }
        if (emailspedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailspedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Indirizzo email non valido</strong></font>");
            return false;
        }
        if (telefonospedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(telefonospedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Numero di telefono non valido</strong></font>");
            return false;
        }
        if (indirizzospedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z0-9\s,'-]*$/.test(indirizzospedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Indirizzo non valido</strong></font>");
            return false;
        }
        if (cittaspedizione == '') {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Compila i campi obbligatori</strong></font>");
            return false;
        }
        if (/^[a-zA-Z ]+$/.test(cittaspedizione)) {

        } else {
            $('#spedizione').append("<font color='red'><strong>&nbsp;&nbsp;**Città non valida</strong></font>");
            return false;
        }
        return true;
    });

    //Validazione dati pagina account
    $('#data_validate').click( function () {
        $('#info_nome').empty();
        $('#info_cognome').empty();
        $('#info_indirizzo').empty();
        $('#info_citta').empty();
        $('#info_telefono').empty();

        var nome = $('#nome').val();
        var cognome = $('#cognome').val();
        var telefono = $('#telefono').val();
        var indirizzo = $('#indirizzo').val();
        var citta = $('#citta').val();

        if (/^[a-zA-Z ]+$/.test(nome)) {

        } else {
            $('#info_nome').append("<font color='red'><strong>**Nome non valido</strong></font>");
            return false;
        }

        if (/^[a-zA-Z ]+$/.test(cognome)) {

        } else {
            $('#info_cognome').append("<font color='red'><strong>**Cognome non valido</strong></font>");
            return false;
        }

        if (/^[a-zA-Z0-9\s,'-]*$/.test(indirizzo)) {

        } else {
            $('#info_indirizzo').append("<font color='red'><strong>**Indirizzo non valido</strong></font>");
            return false;
        }

        if (/^[a-zA-Z ]+$/.test(citta)) {

        } else {
            $('#info_citta').append("<font color='red'><strong>**Città non valida</strong></font>");
            return false;
        }

        if (/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(telefono)) {

        } else {
            $('#info_telefono').append("<font color='red'><strong>**Numero di telefono non valido</strong></font>");
            return false;
        }

        return true;
    });

    //Aggiungi wishlist
    $(document).on('click', "a.aggiungiwishlist", function() {
        var id = $(this).data('id').idphoto;
        var genere = $(this).data('id').genere;
        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/add-wishlist',
            data: {id : id, genere : genere },
            success:function(resp){
                if (resp == 'Si') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successo',
                        text: 'Il prodotto è stato inserito nella tua wishlist!',
                    });
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Errore',
                        text: 'Questo prodotto è già nella tua wishlist.',
                    });
                }
            }, error:function(){
                alert("Error");
            }
        });
    });

    //Agiungi al carrello **product-detail
    $(document).on('click', "a.aggiungicarrello", function() {
        var product = 1;
        var quantita = $("#prod-quantity").val();
        if (quantita == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Errore',
                text: 'Momentaneamente non ci sono pezzi disponibili per la tua selezione.',
            });
            return false;
        }
        var id = $(this).data('id').idphoto;
        var taglia = $('#tagliaSelected').val();
        var colore = $('#coloreSelected').val();
        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/add-cart',
            data: {id : id, quantita : quantita, taglia : taglia, colore : colore, page : product},
            success:function(resp){
                if (resp == 'No') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Errore',
                        text: 'Momentaneamente non ci sono pezzi disponibili per la tua selezione.',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successo',
                        text: 'Il prodotto è stato inserito nel carrello!',
                    });
                    $('#box_carrello').html(resp);
                }
            }, error:function(){
                alert("Error");
            }
        });
    });

    //Check conferma password
    $(document).on('click', "#password_validate", function() {
        var pwd = $("#new_password").val();
        var confirm_pwd = $("#confirm_password").val();
        if (pwd != confirm_pwd) {
            $("#confirmPwd").html("<font color='red'><strong>**Le Password inserite non fanno match</strong></font>")
            return false;
        }
    });

    //Elimina lo span di avviso
    $("#confirm_password").keyup(function(){
        var val = $("#confirmPwd").text();
        if (val != '') $("#confirmPwd").empty();
    });
    $("#new_password").keyup(function(){
        var val = $("#confirmPwd").text();
        if (val != '') $("#confirmPwd").empty();
    });

    //Check password
    $("#current_password").keyup(function(){
        var current_pwd = $("#current_password").val();
        if (current_pwd == '') {
            $("#chkPwd").empty();
        } else {
            $.ajax({
                type:'get',
                url:'/ProgettoTdWpersonale/public/check-pwd',
                data:{current_pwd : current_pwd},
                success:function(resp){
                    if (resp == "false") {
                        $("#chkPwd").html("<font color='red'><strong>**La Password corrente non è corretta</strong></font>")
                    } else {
                        if (resp == "true") {
                            $("#chkPwd").html("<font color='green'><strong>**La Password corrente è corretta</strong></font>")
                        }
                    }
                }, error:function(){
                    alert("Error");
                }
            });
        }
    });

    //Seleziona nazione in account
    $( document ).ready(function() {
        if (window.location.href.indexOf("account") > -1) {
            var val = $('#nazione').val();
            var select = document.getElementById("nazionefatturazione");
            if (val == 'USA') select.options[16].selected = true;
            else if (val == 'AUS') select.options[1].selected = true;
            else if (val == 'AF') select.options[2].selected = true;
            else if (val == 'BGD') select.options[3].selected = true;
            else if (val == 'BE') select.options[4].selected = true;
            else if (val == 'BR') select.options[5].selected = true;
            else if (val == 'CAN') select.options[6].selected = true;
            else if (val == 'CN') select.options[7].selected = true;
            else if (val == 'DK') select.options[8].selected = true;
            else if (val == 'EG') select.options[9].selected = true;
            else if (val == 'EAU') select.options[10].selected = true;
            else if (val == 'IND') select.options[11].selected = true;
            else if (val == 'IRN') select.options[12].selected = true;
            else if (val == 'IL') select.options[13].selected = true;
            else if (val == 'MX') select.options[14].selected = true;
            else if (val == 'UK') select.options[15].selected = true;
        }
    });

    //Agiungi al carrello **product e home
    $(document).on('click', "#addCart", function() {
        var product = 0;
        if (window.location.href.indexOf("product") > -1) {
            product = 1;
        }
        var quantita = $("#quantity").val();
        if (quantita == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Errore',
                text: 'Momentaneamente non ci sono pezzi disponibili per la tua selezione.',
            });
            return false;
        }
        var id = $(this).attr("data-id");
        var taglia = $('#size_select').val();
        var colore = $('#colore_select').val();
        $.ajax({
            type:'get',
            async: false,
            url:'/ProgettoTdWpersonale/public/add-cart',
            data: {id : id, quantita : quantita, taglia : taglia, colore : colore, page : product},
            success:function(resp){
                if (resp == 'No') {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Errore',
                        text: 'Momentaneamente non ci sono pezzi disponibili per la tua selezione.',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Successo',
                        text: 'Il prodotto è stato inserito nel carrello!',
                    });
                    $('#box_carrello').html(resp);
                }
            }, error:function(){
                alert("Error");
            }
        });
    });

    $(".ApplyCoupon").click( function () {
        var valore = $(".CouponField").val();

        if (valore == '') {
            Swal.fire({
                icon: 'warning',
                title: 'Errore',
                text: 'Inserisci un codice Coupon.',
            });
            return false;
        }
    });

    //Seleziona taglia carrello **productDetails
    $( "#tagliaSelected" ).change( function() {
        var val = $(this).val();
        var id = $(this).data('id').id;
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/taglia-selected',
            data:{valore : val, id : id},
            success:function(resp){
                $("#coloreSelected").empty();
                $('#coloreSelected').append(resp);
            }, error:function(){
                alert("Error");
            }
        });
        $.ajax({
            type: 'get',
            url: '/ProgettoTdWpersonale/public/get-quantita',
            data: {taglia: val, id : id},
            success: function (resp) {
                $("#prod-quantity").empty();
                $('#prod-quantity').append(resp);
            }, error: function () {
                alert("Error");
            }
        });
    });

    //Seleziona colore carrello **productDetails
    $( "#coloreSelected" ).change( function() {
        var numero_taglia = $('#tagliaSelected').val();
        var colore = $(this).val();
        var id = $(this).data('id').id;
        $.ajax({
            type: 'get',
            url: '/ProgettoTdWpersonale/public/get-quantita',
            data: {colore: colore, id : id, numero_taglia : numero_taglia},
            success: function (resp) {
                $("#prod-quantity").empty();
                $('#prod-quantity').append(resp);
            }, error: function () {
                alert("Error");
            }
        });
    });

    //Seleziona taglia carrello **product e home
    $( "#size_select" ).change( function() {
        var val = $(this).val();
        var id = $(this).attr("data-id");
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/taglia-selected',
            data:{valore : val, id : id},
            success:function(resp){
                $("#colore_select").empty();
                $('#colore_select').append(resp);
            }, error:function(){
                alert("Error");
            }
        });
        $.ajax({
            type: 'get',
            url: '/ProgettoTdWpersonale/public/get-quantita',
            data: {taglia: val, id : id},
            success: function (resp) {
                $("#quantity").empty();
                $('#quantity').append(resp);
            }, error: function () {
                alert("Error");
            }
        });
    });

    //Seleziona colore carrello **product e home
    $( "#colore_select" ).change( function() {
        var numero_taglia = $('#size_select').val();
        var colore = $(this).val();
        var id = $(this).attr("data-id");
        $.ajax({
            type: 'get',
            url: '/ProgettoTdWpersonale/public/get-quantita',
            data: {colore: colore, id : id, numero_taglia : numero_taglia},
            success: function (resp) {
                $("#quantity").empty();
                $('#quantity').append(resp);
            }, error: function () {
                alert("Error");
            }
        });
    });



})( jQuery );
