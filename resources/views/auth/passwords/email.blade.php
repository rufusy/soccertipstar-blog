@extends('layouts.login')

@section('content')

<div class="login-box">
    <div class="login-logo">
        <a href="#">soccertipstar</a>
    </div>
    <!-- /.site-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Forgot Password?</p>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group has-feedback">
              <input    id="email" 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email" 
                        autofocus 
                        placeholder="Email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <div class="social-auth-links text-center">
                    <button type="submit" class="btn btn-primary btn-block btn-social  btn-flat">
                        {{ __('Send Password Reset Link') }}
                    </button>
            </div>
        </form>
        <a href="{{ route('login') }}">{{ __('Back to login') }}</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
