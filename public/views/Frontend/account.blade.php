@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

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
                 <h4>Registrazione</h4>
                 <form method="POST" action="{{ route('register') }}" class="aa-login-form">
                     @csrf
                     @error('register_name')
                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                     @enderror
                     @error('register_cognome')
                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                     @enderror
                     @error('register_email')
                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                     @enderror
                     @error('register_password')
                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                     @enderror
                     <label for="">{{ __('Nome') }}<span>*</span></label>
                     <input type="text" id="register_name" placeholder="Nome" class="form-control @error('register_name') is-invalid @enderror" name="register_name" value="{{ old('register_name') }}" required autocomplete="name" autofocus>

                     <label for="">{{ __('Cognome') }}<span>*</span></label>
                     <input type="text" id="register_cognome" placeholder="Cognome" class="form-control @error('register_cognome') is-invalid @enderror" name="register_cognome" value="{{ old('register_cognome') }}" required autocomplete="cognome" autofocus>

                    <label for="">{{ __('E-Mail') }}<span>*</span></label>
                     <input id="register_email" type="text" placeholder="Email" class="form-control @error('register_email') is-invalid @enderror" name="register_email" value="{{ old('register_email') }}" required autocomplete="email">


                    <label for="">{{ __('Password') }}<span>*</span></label>
                     <input id="register_password" type="password" placeholder="Password" class="form-control @error('register_password') is-invalid @enderror" name="register_password" required autocomplete="new-password">


                     <label for="">{{ __('Conferma Password') }}<span>*</span></label>
                     <input id="password-confirm" type="password" placeholder="Conferma Password" class="form-control" name="register_password_confirmation" required autocomplete="new-password">
                     <button type="submit" class="aa-browse-btn">{{ __('Registrati') }}</button>

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
