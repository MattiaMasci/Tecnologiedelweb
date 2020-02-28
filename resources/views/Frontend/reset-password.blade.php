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
                                <li><a href="{{url('/')}}">Torna alla Home</a></li>
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
                <h2>Pagina Account</h2>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li class="active">Account</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-myaccount-area">
                    <div class="row">
                    <!--
                <div class="col-md-6">
                    <div class="aa-myaccount-login">
                  <h4>Login</h4>
                   <form method="POST" action="{{ route('login') }}" class="aa-login-form">
                       @csrf
                        <label for="">{{ __('E-Mail Address') }}<span>*</span></label>
                       <input type="text" placeholder="Email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                       @error('email')
                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                       @enderror
                        <label for="">{{ __('Password') }}<span>*</span></label>
                       <input type="password"id="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                       @error('password')
                        <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                    </span>
                       @enderror
                        <button type="submit" class="aa-browse-btn">{{ __('Login') }}</button>


                      <label class="rememberme" for="rememberme">
                          <input class="form-check-input" type="checkbox" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
                          {{ __('Remember Me') }}</label>
                       <p class="aa-lost-password">
                       @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                               {{ __('Forgot Your Password?') }}
                            </a>
@endif
                        </p>
                     </form>
                   </div>
                 </div> -->
                        <div class="col-md-6">
                            <div class="aa-myaccount-register">
                                <h4>Reset Password</h4>

                                <form method="POST" action="{{ route('password.update') }}" class="aa-login-form">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

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

                                    <label for="">{{ __('E-Mail') }}<span>*</span></label>
                                    <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    <label for="">{{ __('Password') }}<span>*</span></label>
                                    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    <label for="">{{ __('Confirm Password') }}<span>*</span></label>
                                    <input id="password-confirm" type="password" placeholder="Conferma Password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    <button type="submit" class="aa-browse-btn">
                                        {{ __('Reset Password') }}
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->

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
