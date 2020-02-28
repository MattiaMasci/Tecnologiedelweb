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
<body>
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
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
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">My Account</a></li>
                  <li class="hidden-xs"><a href="wishlist.html">Wishlist</a></li>
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                  <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
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
                <a href="index.html">
                  <span class="fa fa-shopping-cart"></span>
                  <p>daily<strong>Shop</strong> <span>Your Shopping Partner</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">SHOPPING CART</span>
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
                  <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
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


  <!-- 404 error section -->
  <section id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>404</h2>
            <span>Sorry! Page Not Found</span>
            <p>Sorry this content has been moved Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, amet perferendis, nemo facere excepturi quis.</p>
            <a href="#"> Go to Homepage</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / 404 error section -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
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
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
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
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
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
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
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
