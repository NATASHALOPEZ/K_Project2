@extends('layouts.template')

@section('content')


    
<!-- Breadcrumbs
============================================ -->
<div class="page-title-social margin-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title float-left"><h2>Regsiter</h2></div>
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
            <div class="section-title text-center col-xs-12 margin-bottom-50">
                <h1>sign in to your account</h1>
            </div>
            <!-- Contact Form -->
            <div class="register-form text-center col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-12">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="input-two space-80">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname">First Name</label>
                            <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                     <div class="input-box">
                            <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname">Last Name</label>
                            <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    </div>
                    <div class="input-two space-80">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password"/>
                        </div>
                  
                    </div>
                     <div class="input-two space-80">
                      <div class="input-box">
                     <label for="password-confirm" class="control-label">Confirm Password</label>
                      <input id="password-confirm" type="password"  name="password_confirmation" required>
                            </div>
                        </div>
                    <!--    <div class="input-box">
                            <div class="form-group{{ $errors->has('email-2') ? ' has-error' : '' }}">
                            <label for="email-2">Confirm Email Address</label>
                            <input id="email-2" type="email" class="form-control" name="email-2" value="{{ old('email-2') }}" required>
                            @if ($errors->has('email-2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email-2') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div> -->
           
<!--                    <div class="input-two space-80">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username">User Name</label>
                            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                            @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" id="password"/>
                        </div>
                    </div> -->
                    <!-- <div class="input-two space-80">
                        <div class="input-box">
                            <label for="capture">Enter capture</label>
                            <input type="text" id="capture"/>
                        </div>
                        <div class="input-box">
                            <label class="opacity">capture image</label>
                            <div class="capture-text"><img src="/images/capture.jpg" alt="" /></div>
                        </div>
                    </div> -->
                <!--    <div class="input-box">
                        <label>Subscription</label>
                        <select>
                            <option value="1">category</option>
                            <option value="2">category</option>
                            <option value="3">category</option>
                        </select>
                    </div> -->
                
                    <button class="button orange icon">sign up <i class="fa fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>  
@endsection