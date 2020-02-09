<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xenomod | Home</title>

    <!-- Font awesome -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.simpleLens.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!--<link id="switcher" href="{{ asset('css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
  <body>
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
                <a href="{{url('home')}}">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Xeno<strong>mod</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!--<a href="index.html"><img src="img/logo.jpg" alt="logo img"></a>-->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="{{ url('cart') }}">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRELLO</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
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
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
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
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/1.jpg" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Risparmia fino al 40%</span>
                <h2 data-seq>Collezione uomo scontata</h2>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">ACQUISTA ORA</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/3.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Risparmia fino al 50%</span>
                <h2 data-seq>Collezione donna scontata</h2>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">ACQUISTA ORA</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/4.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Risparmia fino al 30%</span>
                <h2 data-seq>Collezione bambini scontata</h2>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">ACQUISTA ORA</a>
              </div>
            </li>
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
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">
                    <img src="img/promo-banner-1.jpg" alt="img">
                    <div class="aa-prom-content">
                      <span>75% di sconto</span>
                      <h4><a href="#">Per donne</a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="img/promo-banner-3.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>Oggetto esclusivo</span>
                        <h4><a href="#">Per uomini</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="img/promo-banner-2.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>Svendita</span>
                        <h4><a href="#">Sui vestiti</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="img/promo-banner-4.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>Nuovi arrivi</span>
                        <h4><a href="#">Per bambini</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="img/promo-banner-5.jpg" alt="img">
                      <div class="aa-prom-content">
                        <span>25% di sconto</span>
                        <h4><a href="#">Per la notte</a></h4>
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
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#uomo" data-toggle="tab">Uomo</a></li>
                    <li><a href="#donna" data-toggle="tab">Donna</a></li>
                    <li><a href="#bambini" data-toggle="tab">Bambini</a></li>
                    <li><a href="#sports" data-toggle="tab">Sport</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                             <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-5.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-6.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-5.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>

                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-6.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-7.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-5.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-6.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-7.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/sports/sport-8.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                      </ul>
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-1.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-2.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-3.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-4.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-hot" href="#">HOT!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-5.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                           <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-6.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-7.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                           <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                          <span class="aa-badge aa-sale" href="#">SALE!</span>
                        </li>
                        <!-- start single product item -->
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="img/electronics/electronic-8.png" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                              <span class="aa-product-price">$45.50</span>
                            </figcaption>
                          </figure>
                          <div class="aa-product-hvr-content">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                            <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                          </div>
                          <!-- product badge -->
                           <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                        </li>
                      </ul>
                      <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / electronic product category -->
                  </div>
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
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-4.png">
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
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
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
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / Dai un'occhiata modal -->
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
            <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
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
                <li><a href="#featured" data-toggle="tab">In primo piano</a></li>
                <li><a href="#latest" data-toggle="tab">Ultimi arrivi</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                  </ul>
                  <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->

                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                  </ul>
                  <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                     <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-2.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/t-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                      </figure>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                       <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-3.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-4.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="img/women/girl-1.png" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Aggiungi al carrello</a>
                         <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>
                      <div class="aa-product-hvr-content">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Aggiungi alla lista dei desideri"><span class="fa fa-heart-o"></span></a>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Confronta"><span class="fa fa-exchange"></span></a>
                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Dai un'occhiata" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>
                  </ul>
                   <a class="aa-browse-btn" href="#">Sfoglia tutti i prodotti<span class="fa fa-long-arrow-right"></span></a>
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
                  <p>Ho ordinato vari il 31/01, il 3/02 sono già arrivati a casa. Spedizione super veloce e sito ben allestito, con una grande varietà di prodotti!</p>
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
                    <p>Mattia</p>
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
                <h4>Spedizione gratis*</h4>
                <P>*Per tutti gli ordini a partire da € 24,90 la spedizione è gratuita. Per quelli il cui importo è inferiore a € 24,90, il costo di spedizione è di € 3,50.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 GIORNI PER IL RIMBORSO</h4>
                <P>Hai 100 giorni di tempo per rendere gratuitamente il tuo ordine! Nel caso tu abbia pagato le spese per la spedizione standard e decida di rendere l'ordine per intero, queste ti verranno rimborsate. Se hai pagato il tuo ordine più di 24,90 € ma il valore degli articoli che rendi è inferiore a questa cifra, il reso è comunque gratuito! Gli articoli dovranno essere integri e non usati. Ti consigliamo di provare le scarpe su un suolo morbido e pulito per non rovinarle (un tappeto, per esempio). Fai attenzione a non strappare le etichette e a non sporcare la merce. Rendi le tue scarpe nella loro scatola originale.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORTO 24/7</h4>
                <P>Per ogni problema, non esitare a contattare l'assistenza. Il nostrto servizio clienti è pronto ad aiutarti.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
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
                      <a href="https://it-it.facebook.com/"><span class="fa fa-facebook"></span></a>
                      <a href="https://twitter.com/?lang=it"><span class="fa fa-twitter"></span></a>
                      <a href="https://www.instagram.com/?hl=it"><span class="fa fa-instagram"></span></a>
                      <a href="https://www.pinterest.it/"><span class="fa fa-pinterest"></span></a>
                      <a href="https://www.youtube.com/?hl=it&gl=IT"><span class="fa fa-youtube"></span></a>
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


             <label for="rememberme" class="rememberme"><input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
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
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ asset('js/jquery.smartmenus.bootstrap.js') }}"></script>
  <!-- To Slider JS -->
  <script src="{{ asset('js/sequence.js') }}"></script>
  <script src="{{ asset('js/sequence-theme.modern-slide-in.js') }}"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="{{ asset('js/jquery.simpleGallery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>
