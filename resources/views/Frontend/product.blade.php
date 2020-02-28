<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xenomod | Home</title>

    <!-- Font awesome -->
    <link href="{{ asset('css/Frontend.css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/Frontend.css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('css/Frontend.css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Frontend.css/jquery.simpleLens.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Frontend.css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Frontend.css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/Frontend.css/theme-color/default-theme.css') }}" rel="stylesheet">
<!--<link id="switcher" href="{{ asset('css/Frontend.css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('css/Frontend.css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('css/Frontend.css/style.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
  <!-- !Important notice -->
  <!-- Only for product page body tag have to added .productPage class -->
  <body class="productPage">
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Caricamento</span>
      </div>
    </div>
    <!-- / wpf loader Two -->
 <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>02 3030 0067</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="{{url('account')}}">Il mio account</a></li>
                  <li class="hidden-xs"><a href="{{url('wishlist')}}">Lista dei desideri</a></li>
                  <li class="hidden-xs"><a href="{{url('cart')}}">Il mio carrello</a></li>
                  <li class="hidden-xs"><a href="{{url('checkout')}}">Checkout</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="home">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Xeno<strong>mod</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRELLO</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{ asset('img/Frontend.img/woman-small-2.jpg') }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{ asset('img/Frontend.img/woman-small-1.jpg') }}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="#">Checkout</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="Cerca qui es. 'uomo' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
   <!-- menu -->
   <section id="menu">
       <div class="container">
           <div class="menu-area">
               <!-- Navbar -->
               <div class="navbar navbar-default" role="navigation">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                   </div>
                   <div class="navbar-collapse collapse">
                       <!-- Left nav -->
                       <ul class="nav navbar-nav">
                           <li><a href="#">Uomo <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   <li><a href="{{url('product/Uomo&&Tutto')}}">... tutto l'abbigliamento</a></li>
                                   <li><a href="{{url('product/Uomo&&T-shirt&Polo')}}">T-shirt & Polo</a></li>
                                   <li><a href="{{url('product/Uomo&&Camicie')}}">Camicie</a></li>
                                   <li><a href="{{url('product/Uomo&&Giacche')}}">Giacche</a></li>
                                   <li><a href="{{url('product/Uomo&&Pantaloni')}}">Pantaloni</a></li>
                                   <li><a href="{{url('product/Uomo&&Maglieria&Felpe')}}">Maglieria & Felpe</a></li>
                                   <li><a href="{{url('product/Uomo&Jeans')}}">Jeans</a></li>
                                   <li><a href="{{url('product/Uomo&&Completi&Cravatte')}}">Completi & Cravatte</a></li>
                                   <li><a href="{{url('product/Uomo&&Sport')}}">Abbigliamento sportivo</a> </li>
                               </ul>
                           </li>
                           <li><a href="#">Donna <span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   <li><a href="{{url('product/Donna&&Tutto')}}">... tutto l'abbigliamento</a></li>
                                   <li><a href="{{url('product/Donna&&vestiti')}}">Vestiti</a></li>
                                   <li><a href="{{url('product/Donna&&T-shirt&Polo')}}">T-shirt & Top</a></li>
                                   <li><a href="{{url('product/Donna&&Pantaloni')}}">Pantaloni</a></li>
                                   <li><a href="{{url('product/Donna&&Camicie')}}">Camicie</a></li>
                                   <li><a href="{{url('product/Donna&&Giacche')}}">Giacche</a></li>
                                   <li><a href="{{url('product/Donna&&Maglieria&Felpe')}}">Maglieria & Felpe</a></li>
                                   <li><a href="{{url('product/Donna&&Jeans')}}">Jeans</a></li>
                                   <li><a href="{{url('product/Donna&&Gonne')}}">Gonne</a></li>
                                   <li><a href="{{url('product/Donna&&Sport')}}">Abbigliamento sportivo</a></li>
                                   <li><a href="{{url('product/Donna&&Premium')}}">Abbigliamento premium</a></li>
                               </ul>
                           </li>
                           <li><a href="#">Bambini<span class="caret"></span></a>
                               <ul class="dropdown-menu">
                                   <li><a href="#">Bambino<span class="caret"></span></a>
                                       <ul class="dropdown-menu">
                                           <li><a href="{{url('product/Bambino&&Tutto')}}">... tutte le categorie</a></li>
                                           <li><a href="{{url('product/Bambino&&T-shirt&Top')}}">T-Shirt & Top</a></li>
                                           <li><a href="{{url('product/Bambino&&Pullover&Cardigan')}}">Pullover & Cardigan</a></li>
                                           <li><a href="{{url('product/Bambino&&Giacche')}}">Giacche</a></li>
                                           <li><a href="{{url('product/Bambino&&Pantaloni')}}">Pantaloni</a></li>
                                           <li><a href="{{url('product/Bambino&&Camicie')}}">Camicie</a></li>
                                           <li><a href="{{url('product/Bambino&&Sport')}}">Abbigliamento sportivo</a></li>
                                           <li><a href="{{url('product/Bambino&&Notte')}}">Per la notte</a></li>
                                       </ul>
                                   </li>
                                   <li><a href="#">Bambina<span class="caret"></span></a>
                                       <ul class="dropdown-menu">
                                           <li><a href="{{url('product/Bambina&&Tutto')}}">... tutte le categorie</a></li>
                                           <li><a href="{{url('product/Bambina&&Vestiti')}}">Vestiti</a></li>
                                           <li><a href="{{url('product/Bambina&&T-shirt&Top')}}">T-shirt & Top</a></li>
                                           <li><a href="{{url('product/Bambina&&Cardigan')}}">Cardigan</a></li>
                                           <li><a href="{{url('product/Bambina&&Giacche')}}">Giacche</a></li>
                                           <li><a href="{{url('product/Bambina&&Pantaloni')}}">Pantaloni</a></li>
                                           <li><a href="{{url('product/Bambina&&Gonne')}}">Gonne</a></li>
                                           <li><a href="{{url('product/Bambina&&Sport')}}">Abbigliamento sportivo</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           </li>
                           <li><a href="{{url('contact')}}">Contatti</a></li>
                       </ul>
                   </div><!--/.nav-collapse -->
               </div>
           </div>
       </div>
   </section>
   <!-- / menu -->

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
                  @php $i = 0; @endphp
                  @foreach($id as $id)
                  <li>
                    <figure>
                      <!--"img/women/girl-1.png"-->
                      <a class="aa-product-img" href="{{url("product-detail/$genere&&$id")}}"><img src="../store-image/fetch-image/{{ $id }}" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">@php echo "$modello[$i]"; @endphp</a></h4>
                        <span class="aa-product-price">$@php echo "$prezzo[$i]"; @endphp</span><span class="aa-product-price"><del>$65.50</del></span>
                        <p class="aa-product-descrip">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam accusamus facere iusto, autem soluta amet sapiente ratione inventore nesciunt a, maxime quasi consectetur, rerum illum.</p>
                      </figcaption>
                    </figure>
                    <div class="aa-product-hvr-content">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                      <a href="#" id="aprimodale" data-toggle2="tooltip"
                         data-id='{"id":"../store-image/fetch-image/{{ $id }}", "slider1":"../store-image/fetch-altre/{{ $slider1[$i] }}",
                          "slider2":"../store-image/fetch-altre/{{ $slider2[$i] }}", "slider3":"../store-image/fetch-altre/{{ $slider3[$i] }}",
                           "thumbnail1":"../store-image/fetch-altre/{{ $thumbnail1[$i] }}", "thumbnail2":"../store-image/fetch-altre/{{ $thumbnail2[$i] }}",
                            "thumbnail3":"../store-image/fetch-altre/{{ $thumbnail3[$i] }}", "normal2":"../store-image/fetch-altre/{{ $normal2[$i] }}",
                             "normal3":"../store-image/fetch-altre/{{ $normal3[$i] }}", "prezzo":"{{ $prezzo[$i] }}"}'
                         data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                    </div>
                    <!-- product badge -->
                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                  </li>
                      @php $i=$i+1; @endphp
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
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                                <span class="aa-product-view-price">$46.98</span>
                              <p class="aa-product-avilability">Disponibilità: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
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
              <h3>Categoria</h3>
              <ul class="aa-catg-nav">
                <li><a href="#">Uomo</a></li>
                <li><a href="">Donna</a></li>
                <li><a href="">Bambini</a></li>
              </ul>
            </div>
            <!-- single sidebar -->
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
                 <button class="aa-filter-btn" type="submit">Filtro</button>
               </form>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Filtra per colore</h3>
              <div class="aa-color-tag">
                <a class="aa-color-green" href="#"></a>
                <a class="aa-color-yellow" href="#"></a>
                <a class="aa-color-pink" href="#"></a>
                <a class="aa-color-purple" href="#"></a>
                <a class="aa-color-blue" href="#"></a>
                <a class="aa-color-orange" href="#"></a>
                <a class="aa-color-gray" href="#"></a>
                <a class="aa-color-black" href="#"></a>
                <a class="aa-color-white" href="#"></a>
                <a class="aa-color-cyan" href="#"></a>
                <a class="aa-color-olive" href="#"></a>
                <a class="aa-color-orchid" href="#"></a>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Visti recentemente</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-2.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-1.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-2.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Prodotto più votato</h3>
              <div class="aa-recently-views">
                <ul>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-2.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
                  <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-1.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
                   <li>
                    <a href="#" class="aa-cartbox-img"><img alt="img" src="{{ asset('img/Frontend.img/woman-small-2.jpg') }}"></a>
                    <div class="aa-cartbox-info">
                      <h4><a href="#">Nome prodotto</a></h4>
                      <p>1 x $250</p>
                    </div>
                  </li>
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
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Inserisci la tua Email">
              <input type="submit" value="Iscriviti">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menù principale</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li><a href="{{url('contact')}}">Contattaci</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Conoscenza di base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Consegna</a></li>
                      <li><a href="#">Reso</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Link utili</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="{{url('contact')}}">Mappa del sito</a></li>
                      <li><a href="#">Cerca</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contattaci</h3>
                    <address>
                      <p>Xenomod SE, Valeska-Gert-Str. 5, 10243 Berlin, Germania</p>
                      <p><span class="fa fa-phone"></span>02 3030 0067</p>
                      <p><span class="fa fa-envelope"></span>xenomod@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-instagram"></span></a>
                      <a href="#"><span class="fa fa-pinterest"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
   <!-- Login Modal -->
   <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-body">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4>Login o Registrazione</h4>
                   <form class="aa-login-form" method="POST" action="{{ route('login') }}">
                       @csrf
                       @error('email')
                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                       @enderror
                       @error('password')
                       <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                       @enderror
                       <label for="email" >{{ __('E-Mail') }}<span>*</span></label>
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                       <label for="password">{{ __('Password') }}<span>*</span></label>
                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                       <button class="aa-browse-btn" type="submit">
                           {{ __('Login') }}
                       </button>


                       <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                           {{ __('Ricordami') }}</label>



                       <p class="aa-lost-password"><a href="{{url('reset-password')}}">
                               {{ __('Hai dimenticato la password?') }}
                           </a></p>


                       <div class="aa-register-now">
                           Non hai un account?<a href="{{url('registration')}}">{{ __('Registrati ora!') }}</a>
                       </div>

                   </form>
               </div>
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div>




  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

   @if (count($errors) > 0)
       <script>
           $( document ).ready(function() {
               $('#login-modal').modal('show');
           });
       </script>
   @endif

    <script>
        $(document).on("click", "#aprimodale", function () {
            var id = $(this).data('id').id;
            var slider1 = $(this).data('id').slider1;
            var thumbnail1 = $(this).data('id').thumbnail1;
            var thumbnail2 = $(this).data('id').thumbnail2;
            var thumbnail3 = $(this).data('id').thumbnail3;
            var normal2 = $(this).data('id').normal2;
            var normal3 = $(this).data('id').normal3;
            var slider2 = $(this).data('id').slider2;
            var slider3 = $(this).data('id').slider3;
            var prezzo = $(this).data('id').prezzo;
            $('#normale1').attr('src', id );
            $('#slider1').attr('data-lens-image', slider1 );
            $('#thumbnail1').attr('src', thumbnail1 );
            $('#thumbnail2').attr('src', thumbnail2 );
            $('#thumbnail3').attr('src', thumbnail3 );
            $('#foto1').attr('data-lens-image', slider1 ).attr('data-big-image', id );
            $('#foto2').attr('data-lens-image', slider2 ).attr('data-big-image', normal2 );
            $('#foto3').attr('data-lens-image', slider3 ).attr('data-big-image', normal3 );
        });
    </script>


   <script>
       $( "#ordinaPer" ).change(function() {
               var val = $(this).val();
               var id = "<?php echo json_encode($photo); ?>";
               var genere = "<?php echo "$genere"; ?>";

               $.ajax({
                   type:'get',
                   url:'/ProgettoTdWpersonale/public/order',
                   data:{valore : val, id : id, genere : genere},
                   success:function(resp){
                           $("#prodotti").html(resp)
                   }, error:function(){
                       alert("Error");
                   }
               });

           });
    </script>



   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="{{ asset('js/Frontend.js/bootstrap.js') }}"></script>
   <!-- SmartMenus jQuery plugin -->
   <script type="text/javascript" src="{{ asset('js/Frontend.js/jquery.smartmenus.js') }}"></script>
   <!-- SmartMenus jQuery Bootstrap Addon -->
   <script type="text/javascript" src="{{ asset('js/Frontend.js/jquery.smartmenus.bootstrap.js') }}"></script>
   <!-- To Slider JS -->
   <script src="{{ asset('js/Frontend.js/sequence.js') }}"></script>
   <script src="{{ asset('js/Frontend.js/sequence-theme.modern-slide-in.js') }}"></script>
   <!-- Product view slider -->
   <script type="text/javascript" src="{{ asset('js/Frontend.js/jquery.simpleGallery.js') }}"></script>
   <script type="text/javascript" src="{{ asset('js/Frontend.js/jquery.simpleLens.js') }}"></script>
   <!-- slick slider -->
   <script type="text/javascript" src="{{ asset('js/Frontend.js/slick.js') }}"></script>
   <!-- Price picker slider -->
   <script type="text/javascript" src="{{ asset('js/Frontend.js/nouislider.js') }}"></script>
   <!-- Custom js -->
   <script src="{{ asset('js/Frontend.js/custom.js') }}"></script>

  </body>
</html>
