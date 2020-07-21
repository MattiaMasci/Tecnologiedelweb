@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

    <!-- catg header banner section -->
    <section id="aa-catg-head-banner">
        <img src="../public/store-image/fetch-fotosito-image/{{ $profile_foto->id }}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
            <div class="container">
                <div class="aa-catg-head-banner-content">
                    <h2 style="color: black">Account</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{url('home')}}" style="color: black">Home</a></li>
                        <li class="active" style="color: white">Account</li>
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
                <div class="col-md-6">
                    <div class="aa-myaccount-login">
                  <h4>Aggiorna Dati</h4>
                        @if(Session::has('flash_message_success'))
                            <div id="alert_dati" class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong id="alert_dati_testo">{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                   <form method="POST" action="{{ url("/account") }}" class="aa-login-form">
                       @csrf
                       <input type="text" id="nome" name="nome" placeholder="Nome*" value="{{ $profilo->nomefatturazione }}" class="form-control" required>
                       <span id="info_nome"></span>
                       <input style="margin-top: 10px" type="text" id="cognome" name="cognome" placeholder="Cognome*" value="{{ $profilo->cognomefatturazione }}" class="form-control" required>
                       <span id="info_cognome"></span>
                       <input style="margin-top: 10px" type="text" id="indirizzo" name="indirizzo" placeholder="Indirizzo" value="{{ $profilo->indirizzofatturazione }}" class="form-control">
                       <span id="info_indirizzo"></span>
                       <input type="hidden" id="nazione" value="{{$profilo->nazionefatturazione}}">
                       <div style="margin-top: 3px" class="aa-account-single-bill">
                           <select id="nazionefatturazione" name="nazionefatturazione">
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
                       <input type="text" style="margin-top: 10px" id="citta" name="citta" placeholder="Citta*" value="{{ $profilo->cittafatturazione }}" class="form-control" required>
                       <span id="info_citta"></span>
                       <input type="text" onfocus="(this.type='date')" style="margin-top: 10px; height: 40px" id="data" name="data" placeholder="Data di Nascita*" value="{{ $profilo->datanascita }}" class="form-control" required>
                       <input type="text" style="margin-top: 15px" id="telefono" name="telefono" placeholder="Numero di Telefono" value="{{ $profilo->telefonofatturazione }}" class="form-control">
                       <span id="info_telefono"></span>

                       <div><button type="submit" id="data_validate" class="aa-browse-btn">Aggiorna</button></div>
                        </form>
                       </div>
                     </div>
                            <div class="col-md-6">
                                <div class="aa-myaccount-register">
                                    <h4>Aggiorna Password</h4>
                                    @if(Session::has('flash_message_error'))
                                        <div id="alert_password" class="alert alert-error alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{!! session('flash_message_error') !!}</strong>
                                        </div>
                                    @endif
                                    @if(Session::has('flash_message_success'))
                                        <div id="alert_password" class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{!! session('flash_message_success') !!}</strong>
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ url("/account") }}" class="aa-login-form">
                                        @csrf
                                        <input name="current_password" id="current_password" type="password" placeholder="Password Attuale" class="form-control" required minlength="6">
                                        <span id="chkPwd"></span>
                                        <input style="margin-top: 10px" name="new_password" id="new_password" type="password" placeholder="Nuova Password" class="form-control" required minlength="6">
                                        <input name="confirm_password" id="confirm_password" type="password" placeholder="Conferma Password" class="form-control" required minlength="6">
                                        <span id="confirmPwd"></span>

                                        <div><button type="submit" id="password_validate" class="aa-browse-btn">Aggiorna</button></div>
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

@endsection
