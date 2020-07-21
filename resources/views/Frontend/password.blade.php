@extends('layouts.Frontend_layouts.frontend_design')

@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="../public/store-image/fetch-fotosito-image/{{ $request_pass_foto->id }}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Password</h2>
                <ol class="breadcrumb">
                    <li><a href="{{url('home')}}">Home</a></li>
                    <li class="active" style="color: white">Richiedi Password</li>
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
                                <h4>Richiedi Password</h4>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        <strong>{{ session('status') }}</strong>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}" class="aa-login-form">
                                    @csrf
                                    @error('_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
                                    @enderror
                                    <label for="">{{ __('E-Mail') }}<span>*</span></label>
                                    <input id="email" type="text" placeholder="Email" class="form-control @error('_email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                                    <button type="submit" class="aa-browse-btn">
                                        {{ __('Invia') }}
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

@endsection
