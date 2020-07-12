@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
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
             <form method="post" action="{{ url("/cart") }}" id="add_cart" name="add_cart">
                 @csrf
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Modello</th>
                        <th>Prezzo</th>
                        <th>Quantita</th>
                        <th>Totale</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($carrello as $cart)
                      <tr>
                          <td><a rel="{{$cart->modello_id}}" rel1="delete-cart" href="javascript:" class="remove deleteRecord"><fa class="fa fa-close"></fa></a></td>
                        <input type="hidden" name="modelloid[]" value="{{$cart->modello_id}}">
                        <input type="hidden" name="tagliaid[]" value="{{$cart->taglia_id}}">
                        <input type="hidden" name="coloreid[]" value="{{$cart->colore_id}}">
                        <td><a href="{{url("product-details/$cart->genere&&$cart->idfoto")}}"><img src="{{url('store-image/fetch-image')}}/{{ $cart->idfoto }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="{{url("product-details/$cart->genere&&$cart->idfoto")}}">{{$cart->modello_nome}}</a></td>
                        <td>${{$cart->prezzo}}</td>
                        <td><input class="aa-cart-quantity" name="quantity[]" type="number" min="1" value="{{$cart->quantita}}"></td>
                        <td>${{$cart->prezzo_totale}}</td>
                      </tr>
                    @endforeach
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                            <div class="aa-cart-coupon">
                                <input class="aa-coupon-code CouponField" name="coupon" type="text" placeholder="Coupon">
                                @guest <input class="aa-cart-view-btn ApplyCoupon" type="button" data-toggle="modal" data-target="#login-modal" value="Applica Coupon"> @endguest
                                @auth <input class="aa-cart-view-btn ApplyCoupon" type="submit" value="Applica Coupon"> @endauth
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
                     <td>${{$parziale_totale}}</td>
                   </tr>
                   <tr>
                     <th>Totale</th>
                     <td>${{$totale}}</td>
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
                      <form method="post" action="{{ url("/cart") }}" id="add_subscribe" name="add_subscribe" class="aa-subscribe-form">
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
