@extends('layouts.login')

@section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="#">soccertipstar</a>
    </div>
    <!-- /.site-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Reset password</p>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group has-feedback">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input 
                    id="password" 
                    type="password" 
                    class="form-control @error('password') is-invalid @enderror"
                    name="password" 
                    required 
                    autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
                <input 
                    id="password-confirm" 
                    type="password" 
                    class="form-control" 
                    name="password_confirmation" 
                    required
                    autocomplete="new-password">

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ __('Reset Password') }}
                    </button>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
