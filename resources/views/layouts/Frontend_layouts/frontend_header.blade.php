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
                                <p><span class="fa fa-phone"></span>0862 7575</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                @auth <li><a href="http://localhost/ProgettoTdWpersonale/public/account">Il mio account</a></li> @endauth
                                @guest <li><a href="" id="accountcall" data-toggle="modal" data-target="#login-modal">Il mio account</a></li> @endguest
                                @auth <li><a href="http://localhost/ProgettoTdWpersonale/public/order">I miei ordini</a></li> @endauth
                                @guest <li><a href="" id="ordercall" data-toggle="modal" data-target="#login-modal">I miei ordini</a></li> @endguest
                                @auth <li class="hidden-xs"><a href="http://localhost/ProgettoTdWpersonale/public/wishlist">Lista dei desideri</a></li> @endauth
                                @guest <li class="hidden-xs"><a href="" id="wishlistcall" data-toggle="modal" data-target="#login-modal">Lista dei desideri</a></li> @endguest
                                <li class="hidden-xs"><a href="{{url('cart')}}">Il mio carrello</a></li>
                                @guest <li><a href="" id="wishlistuncall" data-toggle="modal" data-target="#login-modal">Login</a></li> @endguest
                                @auth <li><a href="http://localhost/ProgettoTdWpersonale/public/logout" >Logout</a></li> @endauth
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
                                <p>Xeno<strong>mod</strong> <span>Il tuo Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!--<a href="index.html"><img src="img/logo.jpg" alt="logo img"></a>-->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div id="box_carrello" class="aa-cartbox">
                            <a class="aa-cart-link" href="{{ url('cart') }}">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">CARRELLO</span>
                                <span class="aa-cart-notify">{{$numero_prodotti}}</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    @foreach ($carrello as $cart)
                                    <li>
                                        <a class="aa-cartbox-img" href="{{url("product-detail/$cart->genere&&$cart->idfoto")}}"><img src="{{url('store-image/fetch-image')}}/{{ $cart->idfoto }}" alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="{{url("product-detail/$cart->genere&&$cart->idfoto")}}">{{$cart->modello_nome}}</a></h4>
                                            <p>{{$cart->quantita}} x ${{$cart->prezzo}}</p>
                                        </div>
                                        <a rel="{{$cart->modello_id}}" rel1="delete-cart" href="javascript:" class="aa-remove-product deleteRecord"><span class="fa fa-times"></span></a>
                                    </li>
                                    @endforeach
                                    <li>
                                        <span class="aa-cartbox-total-title">Totale</span>
                                        <span class="aa-cartbox-total-price">${{$totale}}</span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="{{ url('checkout') }}">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
