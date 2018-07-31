
@extends('layouts.template')

@section('content')
<!-- Map
============================================ -->
<!-- Breadcrumbs
============================================ -->
<div class="page-title-social">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title float-left"><h2>Login</h2></div>
            </div>
        </div>
    </div>
</div>
<!-- Business Tab Area
============================================ -->
<div class="login-page margin-100">
    <div class="container">
        <div class="row">
            <!-- Title & Search -->
            <div class="section-title col-xs-12 margin-bottom-50">
                <h1>sign in to your account</h1>
            </div>
            <!-- Contact Form -->
            <div class="login-form col-lg-6 col-md-7 col-xs-12 fix">
                <form  method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-two">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address</label>
                             <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="pass">Password</label>
                             <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                </div>
                    <div class="remember-forget-pass fix">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">Remember me!</label>
                        <a href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <button class="button blue icon">sign in <i class="fa fa-angle-right"></i></button>
                    <button class="button social-login facebook"><i class="fa fa-facebook"></i>Sign In with facebook</button>
                    <button class="button social-login twitter"><i class="fa fa-twitter"></i>Sign In with Twitter</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection