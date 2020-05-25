@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
    <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>T-Shirt</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('home')}}">Home</a></li>
          <li><a href="{{url("product/$genere&&$categoria->reference")}}">Product</a></li>
          <li class="active">T-shirt</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-details">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="aa-product-view-slider">
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container">
                            <a data-lens-image="../store-image/fetch-altre/{{ $slider1 }}" class="simpleLens-lens-image"><img src="../store-image/fetch-image/{{ $id }}" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                          <a data-big-image="../store-image/fetch-image/{{ $id }}" data-lens-image="../store-image/fetch-altre/{{ $slider1 }}" class="simpleLens-thumbnail-wrapper" href="javascript:void(0);">
                            <img src="../store-image/fetch-altre/{{ $thumbnail1 }}">
                          </a>
                          <a data-big-image="../store-image/fetch-altre/{{ $normal2 }}" data-lens-image="../store-image/fetch-altre/{{ $slider2 }}" class="simpleLens-thumbnail-wrapper" href="javascript:void(0);">
                            <img src="../store-image/fetch-altre/{{ $thumbnail2 }}">
                          </a>
                        <a data-big-image="../store-image/fetch-altre/{{ $normal3 }}" data-lens-image="../store-image/fetch-altre/{{ $slider3 }}" class="simpleLens-thumbnail-wrapper" href="javascript:void(0);">
                            <img src="../store-image/fetch-altre/{{ $thumbnail3 }}">
                        </a>
                    </div>
                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>{{$product->nome}}</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">${{$prezzo}}</span>
                      <p class="aa-product-avilability" id="stockparagraph">Disponibilità: <span>{{$stock}}</span></p>
                    </div>
                    <p>{{$product->descrizione}}</p>
                    <h4>Taglia</h4>
                    <div class="aa-prod-view-size">
                        {!! $size !!}
                    </div>
                    <h4>Colore</h4>
                    <div class="aa-color-tag">
                        {!! $colore !!}
                    </div>
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="prod-quantity">
                        </select>
                      </form>
                      <p class="aa-prod-category">
                        Categoria: <a>{{$categoria->name}}</a>
                        <input type="hidden" id="generevalue" value="{{$genere}}">
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn aggiungicarrello" id="add_cart" data-id='{ "idphoto":"{{ $id }}", "genere":"{{ $genere }}" }' href="javascript:void(0);">Aggiungi al carrello</a>
                        @guest <a class="aa-add-to-cart-btn aggiungiwishlist" data-toggle="modal" data-target="#login-modal" href="">Lista dei desideri</a> @endguest
                        @auth <a class="aa-add-to-cart-btn aggiungiwishlist" id="add_wishlist"  data-id='{ "idphoto":"{{ $id }}", "genere":"{{ $genere }}" }' href="javascript:void(0);">Lista dei desideri</a> @endauth
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Descrizione</a></li>
                <li><a href="#review" data-toggle="tab">Recensioni</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <p>{{$product->descrizione1}}</p>
                </div>
                <div class="tab-pane fade" id="review">
                 <div class="aa-product-review-area">
                   <h4>{{$numerorecensioni}} Recensioni per {{$product->nome}}</h4>
                   <ul class="aa-review-nav">
                       @foreach($allrecensioni as $recensioni)
                     <li>
                        <div class="media">
                          <div class="media-body">
                            <h4 class="media-heading"><strong>{{$recensioni->nomeutente}} {{$recensioni->cognomeutente}}</strong> - <span>{{$recensioni->data}}</span></h4>
                            <div class="aa-product-rating">
                             {!! $recensioni->rate !!}
                            </div>
                            <p>{{$recensioni->descrizione}}</p>
                          </div>
                        </div>
                      </li>
                      @endforeach
                   </ul>
                   <h4>Aggiungi una recensione</h4>
                   <div class="aa-your-rating" id="stars">
                     <p>Il tuo voto</p>
                     <a href="javascript:void(0);" data-id="1"><span id="span1" class="fa fa-star-o"></span></a>
                     <a href="javascript:void(0);" data-id="2"><span id="span2" class="fa fa-star-o"></span></a>
                     <a href="javascript:void(0);" data-id="3"><span id="span3" class="fa fa-star-o"></span></a>
                     <a href="javascript:void(0);" data-id="4"><span id="span4" class="fa fa-star-o"></span></a>
                     <a href="javascript:void(0);" data-id="5"><span id="span5" class="fa fa-star-o"></span></a>
                   </div>
                   <!-- review form -->
                   <form method="post" action="{{ url("/product-detail/$genere&&$id") }}" class="aa-review-form" id="add_review" name="add_review">
                       @csrf
                       <input type="hidden" name="rating" id="rating">
                      <div class="form-group">
                        <label for="message">La tua recensione</label>
                        <textarea class="form-control" rows="3" placeholder="Facoltativo" name="message" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                      </div>

                       <button type="submit" class="btn btn-default aa-review-submit">Aggiungi Recensione</button>
                   </form>
                 </div>
                </div>
              </div>
            </div>
              <!-- Related product -->
            <div class="aa-product-related-item">
              <h3>Prodotti Collegati</h3>
                <ul class="aa-product-catg aa-related-item-slider">
                <!-- start single product item -->
                  @foreach($product_related as $prodotto)
                <li>
                  <figure>
                    <a class="aa-product-img" href="{{url("product-detail/$genere&&$prodotto->photoid")}}"><img src="../store-image/fetch-image/{{ $prodotto->photoid }}" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn" href="{{url("product-detail/$genere&&$$prodotto->photoid")}}"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a href="{{url("product-detail/$genere&&$prodotto->photoid")}}">{{$prodotto->nome}}</a></h4>
                      <span class="aa-product-price">${{$prodotto->prezzo}}</span>{!! $prodotto->prezzo_normale !!}
                    </figcaption>
                  </figure>
                  <div class="aa-product-hvr-content">
                      @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                      @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $prodotto->photoid }}", "genere":"{{ $genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                      <a href="#" id="aprimodale" data-toggle2="tooltip"
                         data-id='{"idphoto":"{{ $prodotto->photoid }}", "id":"../store-image/fetch-image/{{ $prodotto->photoid }}", "slider1":"../store-image/fetch-altre/{{ $prodotto->slid1 }}",
                          "slider2":"../store-image/fetch-altre/{{ $prodotto->slid2 }}", "slider3":"../store-image/fetch-altre/{{ $prodotto->slid3 }}",
                           "thumbnail1":"../store-image/fetch-altre/{{ $prodotto->thumb1 }}", "thumbnail2":"../store-image/fetch-altre/{{ $prodotto->thumb2 }}",
                            "thumbnail3":"../store-image/fetch-altre/{{ $prodotto->thumb3 }}", "normal2":"../store-image/fetch-altre/{{ $prodotto->norm2 }}",
                             "normal3":"../store-image/fetch-altre/{{ $prodotto->norm3 }}", "prezzo":"{{ $prodotto->prezzo }}", "descrizione":"{{ $prodotto->descr }}",
                              "stock":"{{ $prodotto->stock }}", "nome":"{{$prodotto->nome}}", "genere":"{{$genere}}", "categoria":"{{$categoria->name}}" }'
                         data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                  </div>
                    {!! $prodotto->sconto !!}
                </li>
                  @endforeach
              </ul>

                <!-- Dai un'occhiata modal -->
                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <div class="row">
                                    <!-- Modal view slider -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="aa-product-view-slider">
                                            <div class="simpleLens-gallery-container" id="demo-1">
                                                <div class="simpleLens-container">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" id="slider1">
                                                            <img id="normale1" class="simpleLens-big-image">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="simpleLens-thumbnails-container">
                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                       id="foto1">
                                                        <img id="thumbnail1">
                                                    </a>
                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                       id="foto2">
                                                        <img id="thumbnail2">
                                                    </a>

                                                    <a href="#" class="simpleLens-thumbnail-wrapper"
                                                       id="foto3">
                                                        <img id="thumbnail3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal view content -->
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="aa-product-view-content">
                                            <h3 id="nome"></h3>
                                            <div class="aa-price-block" id="prezzo">
                                            </div>
                                            <p id="descrizione"></p>
                                            <h4>Taglia</h4>
                                            <div class="aa-prod-view-size" id="size_select">
                                            </div>
                                            <h4>Colore</h4>
                                            <div class="aa-color-tag" id="colore_select">
                                            </div>
                                            <div class="aa-prod-quantity">
                                                <form action="">
                                                    <select name="" id="quantity">
                                                    </select>
                                                </form>
                                                <p class="aa-prod-category">
                                                    Categoria: <a id="categoria"></a>
                                                </p>
                                            </div>
                                            <div class="aa-prod-view-bottom">
                                                <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                                <a href="#" class="aa-add-to-cart-btn">Visualizza dettagli</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- / Dai un'occhiata modal -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


    <!-- Subscribe section -->
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Iscriviti alla nostra newsletter</h3>
                        <form method="post" action="{{ url("/product-detail/$genere&&$id") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
                            @csrf
                            <input type="email" name="emailsubscriber" id="emailsubscriber" placeholder="Inserisci la tua Email" required>
                            <input type="submit" value="Iscriviti">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Subscribe section -->

@endsection
