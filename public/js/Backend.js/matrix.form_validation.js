$(document).ready(function(){

    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        $.ajax({
            type:'get',
            url:'/ProgettoTdWpersonale/public/admin/check-pwd',
            data:{current_pwd : current_pwd},
            success:function(resp){
                if (resp == "false") {
                    $("#chkPwd").html("<font color='red'>Current Password is Incorrect</font>")
                } else {
                    if (resp == "true") {
                        $("#chkPwd").html("<font color='green'>Current Password is Correct</font>")
                    }
                }
            }, error:function(){
                alert("Error");
            }
            });
    });

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();

	$('select').select2();

	// Form Validation
    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    //Add Categories
    $("#add_category").validate({
        rules:{
            category_reference:{
                required:true
            },
            category_name:{
                required:true
            },
            gender_name:{
                required:true
            },
            description:{
                required:true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Edit Categories
    $("#edit_category").validate({
        rules:{
            category_reference:{
                required:true
            },
            category_name:{
                required:true
            },
            description:{
                required:true,
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Add Products
    $("#add_product").validate({
        rules:{
            category_id:{
                required:true
            },
            brand_id:{
                required:true
            },
            collection_id:{
                required:true
            },
            style_id:{
                required:true
            },
            product_name:{
                required:true
            },
            description:{
                required:true
            },
            MainImage:{
                required:true
            },
            SecondImage:{
                required:true
            },
            ThirdImage:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Edit Products
    $("#edit_product").validate({
        rules:{
            category_id:{
                required:true
            },
            brand_id:{
                required:true
            },
            collection_id:{
                required:true
            },
            style_id:{
                required:true
            },
            product_name:{
                required:true
            },
            description:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    /*
    //Add Images
    $("#add_images").validate({
        rules:{
            MainImage:{
                required:true
            },
            SecondImage:{
                required:true
            },
            ThirdImage:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
     */

    //Add Image Collection
    $("#add_collection").validate({
        rules:{
            MainImage:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

    //Add Image Brand
    $("#add_brand").validate({
        rules:{
            MainImage:{
                required:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	$("#password_validate").validate({
		rules:{
            current_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

    $(".deleteRecord").click(function(){
        var id = $(this).attr('rel');
        var deleteFunction = $(this).attr('rel1');
        swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn-btn-success',
                cancelButtonClass: 'btn-btn-danger',
                buttonsStyling: false,
                reverseButtons: true
        },
            function() {
            if(deleteFunction == 'delete-pieces'){
                window.location.href= "../"+deleteFunction+"/"+id;
            }
            else window.location.href= "../admin/"+deleteFunction+"/"+id;
        });

        return false;
    });

    /*
    $("#delCat").click(function(){
        if(confirm('Are you sure you want to delete this Category?')){
            return true;
        }
        return false;
    });


    $("#delProd").click(function(){
        if(confirm('Are you sure you want to delete this Product?')){
            return true;
        }
        return false;
    });
    */

    $(document).ready(function(){
        $(function(){
            if($('body').is('.addPiecesPage')){
                var maxField = 10; //Input fields increment limitation
                var addButton = $('.add_button'); //Add button selector
                var wrapper = $('.field_wrapper'); //Input field wrapper
                var colors_dropdown = '';
                var sizes_dropdown = '';
                var categoria_id = $('input#forcategory_id').val();
                $.ajax({
                    type:'get',
                    async: false,
                    data: {categoria_id : categoria_id},
                    url:'/ProgettoTdWpersonale/public/admin/sizesdropdown',
                    success:function(resp){
                        sizes_dropdown = resp;
                    }, error:function(){
                        alert("Error");
                    }
                });
                $.ajax({
                    type:'get',
                    async: false,
                    url:'/ProgettoTdWpersonale/public/admin/colorsdropdown',
                    success:function(resp){
                        colors_dropdown = resp;
                    }, error:function(){
                        alert("Error");
                    }
                });
                var select = '';
                for (i=1;i<=500;i++){
                    select += '<option>'+i+'</option>';
                }
                var fieldHTML = '<div style="margin-left:180px;"><select name="size[]" id="size" style="width:120px; margin-right:3px; margin-top:5px;">'+sizes_dropdown+'</select>' +
                    '<select name="color[]" id="color" style="width:120px; margin-right:3px; margin-top:5px;">'+colors_dropdown+'</select>' +
                    '<select name="quantity[]" id="quantity" style="width: 120px; margin-right:3px; margin-top:5px;">'+select+'</select>' +
                    '<a href="javascript:void(0);" class="remove_button">Close</a></div>'; //New input field html
                var x = 1; //Initial field counter is 1

                //Once add button is clicked
                $(addButton).click(function(){
                    //Check maximum number of input fields
                    if(x < maxField){
                        x++; //Increment field counter
                        $(wrapper).append(fieldHTML); //Add field html
                    }
                });

                //Once remove button is clicked
                $(wrapper).on('click', '.remove_button', function(e){
                    e.preventDefault();
                    $(this).parent('div').remove(); //Remove field html
                    x--; //Decrement field counter
                });

                //Select option
                for(i=1;i<501;i++) {
                    $('#quantity').append($('<option>', {
                        text: i
                    }));
                }
            }
        });
    });

});
