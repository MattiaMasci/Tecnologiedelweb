<!DOCTYPE html>
<html lang="en">

<head>
    <title>Matrix Admin</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Backend.css/matrix-login.css') }}" />
    <link href="{{ asset('fonts/Backend.fonts/css/font-awesome.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="loginbox">
    @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
    @endif
    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
    <form id="loginform" class="form-vertical" method="post" action="{{ url('admin') }}">
        @csrf
        <div class="control-group normal_text"> <h3><img src="{{ asset('img/Backend.img/logo.png') }}" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="email"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password"/>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="javascript:void(0);" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
            <span class="pull-right"><input type="submit" value="Login" href="index.html" class="btn btn-success" /></span>
        </div>
    </form>
    <form id="recoverform" method="POST" action="{{ route('password.email') }}" class="form-vertical">
        @csrf
        <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

        @error('email')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span><br>
        @enderror
        <div class="controls">
            <div class="main_input_box">
                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" id="emailrecover" placeholder="E-mail address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            </div>
        </div>

        <div class="form-actions">
            <span class="pull-left"><a href="javascript:void(0);" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
            <span class="pull-right"><button class="btn btn-info" type="submit">{{ __('Submit') }}</button></span>
        </div>
    </form>
</div>

<script src="{{ asset('js/Backend.js/jquery.min.js') }}"></script>
<script src="{{ asset('js/Backend.js/matrix.login.js') }}"></script>
<script src="{{ asset('js/Backend.js/bootstrap.min.js') }}"></script>
</body>

</html>
