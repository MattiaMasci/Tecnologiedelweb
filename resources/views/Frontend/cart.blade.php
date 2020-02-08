<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xenomod | Carrello</title>

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">

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
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Nome prodotto</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Nome prodotto</a></h4>
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
                  <li><a href="{{url('product')}}">...tutto l'abbigliamento</a></li>
                  <li><a href="{{url('product')}}">T-shirt & Polo</a></li>
                  <li><a href="{{url('product')}}">Camicie</a></li>
                  <li><a href="{{url('product')}}">Giacche</a></li>
                  <li><a href="{{url('product')}}">Pantaloni</a></li>
                  <li><a href="{{url('product')}}">Maglieria & Felpe</a></li>
                  <li><a href="{{url('product')}}">Jeans</a></li>
                  <li><a href="{{url('product')}}">Completi & Cravatte</a></li>
                  <li><a href="{{url('product')}}">Abbigliamento sportivo</a> </li>
                </ul>
              </li>
              <li><a href="#">Donna <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{url('product')}}">...tutto l'abbigliamento</a></li>
                  <li><a href="{{url('product')}}">Vestiti</a></li>
                  <li><a href="{{url('product')}}">T-Shirt & Top</a></li>
                  <li><a href="{{url('product')}}">Pantaloni</a></li>
                  <li><a href="{{url('product')}}">Camicie</a></li>
                  <li><a href="{{url('product')}}">Giacche</a></li>
                  <li><a href="{{url('product')}}">Maglieria & Felpe</a></li>
                  <li><a href="{{url('product')}}">Jeans</a></li>
                  <li><a href="{{url('product')}}">Gonne</a></li>
                  <li><a href="{{url('product')}}">Abbigliamento sportivo</a></li>
                  <li><a href="{{url('product')}}">Abbigliamento premium</a></li>
                </ul>
              </li>
              <li><a href="#">Bambini<span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="#">Bambino<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('product')}}">... tutte le categoorie</a></li>
                      <li><a href="{{url('product')}}">T-Shirt & Top</a></li>
                      <li><a href="{{url('product')}}">Pullover & Cardigan</a></li>
                      <li><a href="{{url('product')}}">Giacche</a></li>
                      <li><a href="{{url('product')}}">Pantaloni</a></li>
                      <li><a href="{{url('product')}}">Camicie</a></li>
                      <li><a href="{{url('product')}}">Abbigliamento sportivo</a></li>
                      <li><a href="{{url('product')}}">Per la notte</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Bambina<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{url('product')}}">... tutte le categorie</a></li>
                      <li><a href="{{url('product')}}">Vestiti</a></li>
                      <li><a href="{{url('product')}}">T-shirt & Top</a></li>
                      <li><a href="{{url('product')}}">Cardigan</a></li>
                      <li><a href="{{url('product')}}">Giacche</a></li>
                      <li><a href="{{url('product')}}">Pantaloni</a></li>
                      <li><a href="{{url('product')}}">Gonne</a></li>
                      <li><a href="{{url('product')}}">Abbigliamento sportivo</a></li>
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
    </div>
  </section>
  <!-- / menu -->

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Carrello</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('home')}}">Home</a></li>
          <li class="active">Carello</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-1.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$250</td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>$250</td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-2.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$150</td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>$150</td>
                      </tr>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="img/man/polo-shirt-3.png" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">Polo T-Shirt</a></td>
                        <td>$50</td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>$50</td>
                      </tr>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Applica Coupon">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Aggiorna il carrello">
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Totale carrello</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Totale parziale</th>
                     <td>$450</td>
                   </tr>
                   <tr>
                     <th>Totale</th>
                     <td>$450</td>
                   </tr>
                 </tbody>
               </table>
               <a href="{{url('checkout')}}" class="aa-cart-view-btn">Procedi al newsCheckout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
    <!-- To Slider JS -->
    <script src="js/sequence.js"></script>
    <script src="js/sequence-theme.modern-slide-in.js"></script>
    <!-- Product view slider -->
    <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
    <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="js/slick.js"></script>
    <!-- Price picker slider -->
    <script type="text/javascript" src="js/nouislider.js"></script>
    <!-- Custom js -->
    <script src="js/custom.js"></script>

  </body>
</html>
