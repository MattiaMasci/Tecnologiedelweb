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
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                    @enderror

                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span><br>
                    @enderror

                    <label for="email" >{{ __('E-Mail') }}<span>*</span></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                    <label for="password">{{ __('Password') }}<span>*</span></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                    <button class="aa-browse-btn" type="submit" id="bottone">
                        {{ __('Login') }}
                    </button>


                    <label for="rememberme" class="rememberme"><input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Ricordami') }}</label>



                    <p class="aa-lost-password"><a href="{{url('request-password')}}">
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
