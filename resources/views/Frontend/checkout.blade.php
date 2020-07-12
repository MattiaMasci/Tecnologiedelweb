@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="{{ asset('img/Frontend.img/fashion/fashion-header-bg-8.jpg') }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Checkout</h2>
        <ol class="breadcrumb">
          <li><a href="{{url('home')}}">Home</a></li>
          <li class="active">Checkout</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form method="post" action="{{ url("/checkout") }}" id="create_order" name="create_order">
              @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Hai un coupon?
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <input type="text" name="coupon" placeholder="Codice Coupon" class="aa-coupon-code CouponField">
                            @guest <input class="aa-browse-btn ApplyCoupon" type="button" data-toggle="modal" data-target="#login-modal" value="Applica Coupon"> @endguest
                            @auth <input class="aa-browse-btn ApplyCoupon" type="submit" value="Applica Coupon"> @endauth
                        </div>
                      </div>
                    </div>
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" id="fatturazione" data-parent="#accordion" href="#collapseThree">
                            Dettagli di fatturazione
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="nomefatturazione" id="nomefatturazione" value="" placeholder="Nome*">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="cognomefatturazione" id="cognomefatturazione" value="" placeholder="Cognome*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="aziendafatturazione" id="aziendafatturazione" value="" placeholder="Nome azienda">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="emailfatturazione" id="emailfatturazione" value="" placeholder="Indirizzo email*">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" name="telefonofatturazione" id="telefonofatturazione" value="" placeholder="Telefono*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="indirizzofatturazione" id="indirizzofatturazione" cols="8" rows="3" placeholder="Indirizzo*"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select id="nazionefatturazione" name="nazionefatturazione">
                                  <option value="0">Seleziona il tuo paese</option>
                                  <option value="1">Australia</option>
                                  <option value="2">Afganistan</option>
                                  <option value="3">Bangladesh</option>
                                  <option value="4">Belgio</option>
                                  <option value="5">Brasile</option>
                                  <option value="6">Canada</option>
                                  <option value="7">Cina</option>
                                  <option value="8">Danimarca</option>
                                  <option value="9">Egitto</option>
                                  <option value="14">Emirati Arabi Uniti</option>
                                  <option value="10">India</option>
                                  <option value="11">Iran</option>
                                  <option value="12">Israele</option>
                                  <option value="13">Messico</option>
                                  <option value="15">Regno Unito</option>
                                  <option value="16">Stati Uniti</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="abitazionefatturazione" id="abitazionefatturazione" value="" placeholder="Appartamento, Suite ecc.">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="cittafatturazione" id="cittafatturazione" value="" placeholder="Città*">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" id="spedizione" data-parent="#accordion" href="#collapseFour">
                            Indirizzo di spedizione
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="nomespedizione" id="nomespedizione" value="" placeholder="Nome*">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="cognomespedizione" id="cognomespedizione" value="" placeholder="Cognome*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="aziendaspedizione" id="aziendaspedizione" value="" placeholder="Nome azienda">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="emailspedizione" id="emailspedizione" value="" placeholder="Indirizzo email*">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" name="telefonospedizione" id="telefonospedizione" value="" placeholder="Telefono*">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="indirizzospedizione" id="indirizzospedizione" cols="8" rows="3" placeholder="Indirizzo*"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select id="nazionespedizione" name="nazionespedizione">
                                    <option value="0">Seleziona il tuo paese</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AF">Afganistan</option>
                                    <option value="BGD">Bangladesh</option>
                                    <option value="BE">Belgio</option>
                                    <option value="BR">Brasile</option>
                                    <option value="CAN">Canada</option>
                                    <option value="CN">Cina</option>
                                    <option value="DK">Danimarca</option>
                                    <option value="EG">Egitto</option>
                                    <option value="EAU">Emirati Arabi Uniti</option>
                                    <option value="IND">India</option>
                                    <option value="IRN">Iran</option>
                                    <option value="IL">Israele</option>
                                    <option value="MX">Messico</option>
                                    <option value="UK">Regno Unito</option>
                                    <option value="USA">Stati Uniti</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="abitazionespedizione" id="abitazionespedizione" value="" placeholder="Appartamento, Suite ecc.">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="cittaspedizione" id="cittaspedizione" value="" placeholder="Città*">
                              </div>
                            </div>
                          </div>
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="notespedizione" cols="8" rows="3" placeholder="Note Speciali"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Sommario dell'ordine</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Prodotto</th>
                          <th>Totale</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($carrello as $cart)
                        <tr>
                          <td>{{$cart->modello_nome}} <strong> x  {{$cart->quantita}}</strong></td>
                          <td>${{$cart->prezzo}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Totale parziale</th>
                          <td>${{$parziale_totale}}</td>
                        </tr>
                         <tr>
                          <th>Tasse</th>
                          <td>${{$tasse}}</td>
                        </tr>
                         <tr>
                          <th>Totale</th>
                             <input type="hidden" name="totale" value="{{$totale1}}">
                          <td>${{$totale1}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Metodo di pagamento</h4>
                  <div class="aa-payment-method">
                    <label for="cashdelivery"><input type="radio" id="cashdelivery" value="1" name="optionsRadios"> Pagamento alla consegna </label>
                    <label for="paypal"><input type="radio" id="paypal" value="2" name="optionsRadios" checked> Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" class="pt" alt="PayPal Acceptance Mark">
                    <input type="submit" id="effettua_ordine" value="Effettua ordine" class="aa-browse-btn">
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

@endsection
