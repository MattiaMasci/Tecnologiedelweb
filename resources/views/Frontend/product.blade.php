@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Acquista su Xenomod</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('home')}}">Torna alla home</a></li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Ordina per</label>
                  <select id="ordinaPer" name="">
                      <option value="1" selected="Default">Default</option>
                      <option value="2">Nome</option>
                      <option value="3">Prezzo</option>
                      <option value="4">Data</option>
                  </select>
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul id="prodotti" class="aa-product-catg">
                <!-- start single product item -->
                  @foreach($products as $product)
                  <li>
                    <figure>
                      <!--"img/women/girl-1.png"-->
                      <a class="aa-product-img" href="{{url("product-details/$genere&&$product->identificativo")}}"><img src="{{url('store-image/fetch-image')}}/{{ $product->identificativo }}" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn" href="#" id="aprimodale" data-toggle2="tooltip"
                         data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../store-image/fetch-image/{{ $product->identificativo }}",
                         "slider1":"../store-image/fetch-altre/{{ $product->slid1 }}", "slider2":"../store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$genere}}", "nome":"{{$product->nome}}", "categoria":"{{$categoria}}" }'
                         data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="{{url("product-details/$genere&&$product->identificativo")}}">{{$product->nome}}</a></h4>
                        <span class="aa-product-price">${{$product->prezzo}}</span>{!! $product->prezzo_normale !!}
                        <p class="aa-product-descrip">{{$product->marca}}</p>
                      </figcaption>
                    </figure>
                    <div class="aa-product-hvr-content">
                        @guest <a class="aggiungiwishlist" data-tooltip="tooltip" href="" data-toggle="modal" data-target="#login-modal" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endguest
                        @auth <a class="aggiungiwishlist" data-id='{ "idphoto":"{{ $product->identificativo }}", "genere":"{{ $genere }}" }' href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a> @endauth
                      <a href="#" id="aprimodale" data-toggle2="tooltip"
                         data-id='{"idphoto":"{{ $product->identificativo }}", "idmodello":"{{ $product->id }}", "id":"../store-image/fetch-image/{{ $product->identificativo }}",
                         "slider1":"../store-image/fetch-altre/{{ $product->slid1 }}", "slider2":"../store-image/fetch-altre/{{ $product->slid2 }}", "slider3":"../store-image/fetch-altre/{{ $product->slid3 }}",
                           "thumbnail1":"../store-image/fetch-altre/{{ $product->thumb1 }}", "thumbnail2":"../store-image/fetch-altre/{{ $product->thumb2 }}",
                            "thumbnail3":"../store-image/fetch-altre/{{ $product->thumb3 }}", "normal2":"../store-image/fetch-altre/{{ $product->norm2 }}",
                             "normal3":"../store-image/fetch-altre/{{ $product->norm3 }}", "prezzo":"{{ $product->prezzo }}", "descrizione":"{{ $product->marca }}",
                             "stock":"{{ $product->stock }}", "genere":"{{$genere}}", "nome":"{{$product->nome}}", "categoria":"{{$categoria}}" }'
                         data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                    </div>
                      {!! $product->sconto !!}
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
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Categorie</h3>
                <input type="hidden" id="categoriavalue" value="{{$categoria}}">
                <input type="hidden" id="generevalue" value="{{$genere}}">
                <input type="hidden" id="collezionevalue" value="{{$collezione}}">
                <input type="hidden" id="marcavalue" value="{{$marca}}">
              <ul class="aa-catg-nav" id="elencocategorie">
              </ul>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Filtra per prezzo</h3>
              <!-- price range -->
                <div class="aa-sidebar-price-range">
                    <form action="">
                        <div id="skipstep" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                        </div>
                        <span id="skip-value-lower" class="example-val">30.00</span>
                        <span id="skip-value-upper" class="example-val">100.00</span>
                        <button class="aa-filter-btn" id="FiltraPerPrezzo" type="submit" onclick="return false">Filtro</button>
                    </form>
                </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Filtra per colore</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" id="filtrapercolore" data-id="Verde" href="javascript:void(0);"></a>
                <a class="aa-color-yellow" id="filtrapercolore" data-id="Giallo" href="javascript:void(0);"></a>
                <a class="aa-color-pink" id="filtrapercolore" data-id="Rosa" href="javascript:void(0);"></a>
                <a class="aa-color-purple" id="filtrapercolore" data-id="Viola" href="javascript:void(0);"></a>
                <a class="aa-color-blue" id="filtrapercolore" data-id="Blu" href="javascript:void(0);"></a>
                <a class="aa-color-orange" id="filtrapercolore" data-id="Arancione" href="javascript:void(0);"></a>
                <a class="aa-color-gray" id="filtrapercolore" data-id="Grigio" href="javascript:void(0);"></a>
                <a class="aa-color-black" id="filtrapercolore" data-id="Nero" href="javascript:void(0);"></a>
                <a class="aa-color-white" id="filtrapercolore" data-id="Bianco" href="javascript:void(0);"></a>
                <a class="aa-color-cyan" id="filtrapercolore" data-id="Ciano" href="javascript:void(0);"></a>
                <a class="aa-color-olive" id="filtrapercolore" data-id="Oliva" href="javascript:void(0);"></a>
                <a class="aa-color-orchid" id="filtrapercolore" data-id="Orchidea" href="javascript:void(0);"></a>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Prodotto più votato</h3>
              <div class="aa-recently-views">
                <ul>
                @foreach($votato as $bestproduct)
                  <li>
                    <a href="{{url("product-details/$genere&&$bestproduct->foto")}}" class="aa-cartbox-img"><img alt="img" src="../store-image/fetch-image/{{ $bestproduct->foto }}" style="width:75px;height:90px;"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="{{url("product-details/$genere&&$bestproduct->foto")}}">{{$bestproduct->nome}}</a></h4>
                      <p>${{$bestproduct->prezzo}}</p>
                    </div>
                  </li>
                @endforeach
                </ul>
              </div>
            </div>
          </aside>
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
            <form method="post" action="{{ url("/product/$genere&&$categoria") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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
