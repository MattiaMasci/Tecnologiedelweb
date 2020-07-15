@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
          @foreach ($collections as $collection)
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="../public/store-image/fetch-collection-image/{{ $collection->id }}" />
              </div>
              <div class="seq-title">
                <h2 data-seq>{{ $collection->nome }}</h2>
                <a data-seq href="{{url("collezione/$collection->reference ")}}" class="aa-shop-now-btn aa-secondary-btn">ACQUISTA ORA</a>
              </div>
            </li>
          @endforeach
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start product navigation -->
                  <br>
                 <ul class="nav nav-tabs aa-products-tab">
                     @foreach($active_cat as $cat)
                         {!! $cat->stampa !!}
                     @endforeach
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                      @if($home_one != null)
                      <div class="tab-pane fade in active" id="{{$stampa_categorie[0]}}">
                          <ul class="aa-product-catg aa-{{$stampa_categorie[0]}}-slider">
                              <!-- start single product item -->
                              @foreach($home_one as $product)
                                  <li>
                                      <figure>
                                          <!--"img/women/girl-1.png"-->
                                          <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                              <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                          @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                          <a href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                      </div>
                                      {!! $product->sconto !!}
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      @if($home_two != null)
                      <div class="tab-pane fade" id="{{$stampa_categorie[1]}}">
                          <ul class="aa-product-catg aa-{{$stampa_categorie[1]}}-slider">
                              <!-- start single product item -->
                              @foreach($home_two as $product)
                                  <li>
                                      <figure>
                                          <!--"img/women/girl-1.png"-->
                                          <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                              <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                          @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                          <a href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                      </div>
                                      {!! $product->sconto !!}
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      @if($home_three != null)
                      <div class="tab-pane fade" id="{{$stampa_categorie[2]}}">
                          <ul class="aa-product-catg aa-{{$stampa_categorie[2]}}-slider">
                              <!-- start single product item -->
                              @foreach($home_three as $product)
                                  <li>
                                      <figure>
                                          <!--"img/women/girl-1.png"-->
                                          <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                            data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                              <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                          @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                          <a href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                      </div>
                                      {!! $product->sconto !!}
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      @if($home_four != null)
                      <div class="tab-pane fade" id="{{$stampa_categorie[3]}}">
                          <ul class="aa-product-catg aa-{{$stampa_categorie[3]}}-slider">
                              <!-- start single product item -->
                              @foreach($home_four as $product)
                                  <li>
                                      <figure>
                                          <!--"img/women/girl-1.png"-->
                                          <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                          <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                            data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                          <figcaption>
                                              <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                              <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                          </figcaption>
                                      </figure>
                                      <div class="aa-product-hvr-content">
                                          @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                          @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                          <a href="#" id="aprimodale" data-toggle2="tooltip"
                                             data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"{{$product->name_cat}}" }'
                                             data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                      </div>
                                      {!! $product->sconto !!}
                                  </li>
                              @endforeach
                          </ul>
                      </div>
                  </div>
                    @endif
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
                                                      <a href="javascript:void(0);" class="simpleLens-thumbnail-wrapper"
                                                         id="foto1">
                                                          <img id="thumbnail1">
                                                      </a>
                                                      <a href="javascript:void(0);" class="simpleLens-thumbnail-wrapper"
                                                         id="foto2">
                                                          <img id="thumbnail2">
                                                      </a>

                                                      <a href="javascript:void(0);" class="simpleLens-thumbnail-wrapper"
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
                                              <div class="aa-prod-quantity">
                                                  <select id="size_select" style="width:100px;"></select>
                                              </div>
                                              <h4>Colore</h4>
                                              <div class="aa-prod-quantity">
                                                  <div class="aa-color-tag">
                                                      <select id="colore_select" style="width:100px;"></select>
                                                  </div>
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
                                                  <a href="javascript:void(0);" id="addCart" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                                  <a href="#" id="show_details" class="aa-add-to-cart-btn">Visualizza dettagli</a>
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
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-banner-area">
                @if(isset($home_foto_gen) && isset($home_foto_cat)) <a href="{{url("product/$home_foto_gen->tipo&&$home_foto_cat->reference")}}"><img src="../public/store-image/fetch-fotosito-image/{{ $home_foto->id }}" alt="fashion banner img"></a>
                    @else <a href="javascript:void(0)"><img src="../public/store-image/fetch-fotosito-image/{{ $home_foto->id }}" alt="fashion banner img"></a>@endif
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popolari</a></li>
                <li><a href="#featured" data-toggle="tab">Occasioni</a></li>
                <li><a href="#latest" data-toggle="tab">Ultimi arrivi</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                      @foreach($popular_products as $product)
                          <li>
                              <figure>
                                  <!--"img/women/girl-1.png"-->
                                  <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                  <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                     data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Popolari" }'
                                     data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                  <figcaption>
                                      <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                      <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                  </figcaption>
                              </figure>
                              <div class="aa-product-hvr-content">
                                  @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                  @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                  <a href="#" id="aprimodale" data-toggle2="tooltip"
                                     data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Popolari" }'
                                     data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                              </div>
                              {!! $product->sconto !!}
                          </li>
                      @endforeach
                  </ul>
                </div>
                <!-- / popular product category -->

                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                     @foreach($occasioni_products as $product)
                         <li>
                             <figure>
                                 <!--"img/women/girl-1.png"-->
                                 <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                 <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                    data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Occasioni" }'
                                    data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                 <figcaption>
                                     <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                     <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                 </figcaption>
                             </figure>
                             <div class="aa-product-hvr-content">
                                 @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                 @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                 <a href="#" id="aprimodale" data-toggle2="tooltip"
                                    data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Occasioni" }'
                                    data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                             </div>
                             {!! $product->sconto !!}
                         </li>
                     @endforeach
                 </ul>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                      @foreach($latest_products as $product)
                          <li>
                              <figure>
                                  <!--"img/women/girl-1.png"-->
                                  <a class="aa-product-img" href="{{url("product-details/$product->genere&&$product->identificativo")}}"><img src="../public/store-image/fetch-image/{{ $product->identificativo }}" alt="polo shirt img"></a>
                                  <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                                     data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Ultimi arrivi" }'
                                     data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                                  <figcaption>
                                      <h4 class="aa-product-title"><a href="{{url("product-details/$product->genere&&$product->identificativo")}}">{{ $product->nome }}</a></h4>
                                      <span class="aa-product-price">${{ $product->prezzo }}</span>{!! $product->prezzo_normale !!}
                                  </figcaption>
                              </figure>
                              <div class="aa-product-hvr-content">
                                  @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                                  @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $product->genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                                  <a href="#" id="aprimodale" data-toggle2="tooltip"
                                     data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../public/store-image/fetch-image/{{ $product->identificativo }}", "slider1":"../public/store-image/fetch-altre/{{ $product->slid1 }}",
                          "slider2":"../public/store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../public/store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../public/store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../public/store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../public/store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../public/store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../public/store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$product->genere}}", "nome":"{{$product->nome}}", "categoria":"Ultimi arrivi" }'
                                     data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                              </div>
                              {!! $product->sconto !!}
                          </li>
                      @endforeach
                  </ul>
                </div>
                <!-- / latest product category -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Start Promo section -->
  <section id="aa-promo">
      <div class="container">
          <center><strong><h1 style="font-family: FontAwesome 'Felix Titling'">MARCHE DI TENDENZA</h1></strong></center>
          <div class="row">
              <div class="col-md-12">
                  <div class="aa-promo-area">
                      <div class="row">
                      @if($topBrand != null)
                          <!-- promo left -->
                              <div class="col-md-5 no-padding">
                                  <div class="aa-promo-left">
                                      <div class="aa-promo-banner">
                                          <img src="../public/store-image/fetch-brand-image/{{ $topBrand->id }}" alt="img">
                                          <div class="aa-prom-content">
                                              <h4><a href="{{url("brand/$topBrand->sesso&&$topBrand->reference")}}"></a></h4>
                                              <!-- <span></span> -->
                                          </div>
                                      </div>
                                  </div>
                              </div>
                      @endif
                      @if($brands != null)
                          <!-- promo right -->
                              <div class="col-md-7 no-padding">
                                  <div class="aa-promo-right">
                                      @foreach ($brands as $brand)
                                          <div class="aa-single-promo-right">
                                              <div class="aa-promo-banner">
                                                  <img src="../public/store-image/fetch-brand-image/{{ $brand->id }}" alt="img">
                                                  <div class="aa-prom-content">
                                                      <h4><a href="{{url("brand/$brand->sesso&&$brand->reference ")}}"></a></h4>
                                                      <!-- <span></span> -->
                                                  </div>
                                              </div>
                                          </div>
                                      @endforeach
                                  </div>
                              </div>
                          @endif
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- / Promo section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
           <p> <span style="color: white; font-family: Calibri; font-weight: bold; font-size: 20px">Alcune testimonianze:</span> </p>
          <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Ho ordinato vari prodotti il 31/01, il 3/02 sono già arrivati a casa. Spedizione super veloce e sito ben allestito, con una grande varietà di articoli!</p>
                  <div class="aa-testimonial-info">
                    <p>Giovanni</p>
                    <span>Cliente</span>
                  </div>
                </div>
              </li>
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Ho avuto dei problemi con l'ordine, ma contattando il servizio clienti, ho risolto il mio problema in meno di 5 minuti. Bravi e competenti in materia. Complimenti!</p>
                  <div class="aa-testimonial-info">
                    <p>Mattia</p>
                    <span>Cliente</span>
                  </div>
                </div>
              </li>
               <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Stavo cercando una felpa da acquistare, ma essendo il sito super allestito, non ho potuto fare a meno di acquistare altri prodotti.</p>
                  <div class="aa-testimonial-info">
                    <p>Davide</p>
                    <span>Cliente</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->
  <!-- Subscribe section -->
  <section id="aa-subscribe">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="aa-subscribe-area">
                      <h3>Iscriviti alla nostra newsletter</h3>
                      <form method="post" action="{{ url("/home") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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
<!-- Support section -->
<section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>Spedizione gratuita*</h4>
                <P>Per tutti gli ordini a partire da € 24,90 la spedizione è gratuita. Per quelli il cui importo è inferiore a € 24,90, il costo di spedizione è di € 3,50.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>100 GIORNI PER IL RIMBORSO</h4>
                <P>Hai 100 giorni di tempo per rendere gratuitamente il tuo ordine! Nel caso tu abbia pagato le spese per la spedizione standard e decida di rendere l'ordine per intero, queste ti verranno rimborsate. Se hai pagato il tuo ordine più di 24,90 € ma il valore degli articoli che rendi è inferiore a questa cifra, il reso è comunque gratuito! Gli articoli dovranno essere integri e non usati. Fai attenzione a non strappare le etichette e a non sporcare la merce. Rendi i tuoi acquisti nella loro scatola originale.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORTO 24/7</h4>
                <P>Per ogni problema, non esitare a contattare l'assistenza. Il nostro servizio clienti è pronto ad aiutarti.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->

@endsection
