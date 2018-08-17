@extends('layouts.template')

@section('content')


    
<!-- Breadcrumbs
============================================ -->
<div class="page-title-social margin-0" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title float-left"><h2>Register</h2></div>
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
            <div class="section-title text-center col-xs-12 margin-bottom-50 margin-top-50">
                <h1>sign in to your account</h1>
            </div>
            <!-- Contact Form -->
            <div class="register-form text-center col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-12">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                   <!--  <input type='hidden' name='role_id'  value='1'/> -->

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
                    <div class="input-one space-100">
                         <div class="input-box">
                            <label for="address">Address</label>
                            <input type="text" id="address"/>
                        </div>
                       
                        
                        
                    </div>
                   <div class="input-three space-80">
                      <div class="input-box">
                            <label for="pinCode">Pin Code</label>
                            <input type="text" id="pincode"/>
                        </div>
                  <div class="input-box">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone"/>
                        </div>
                        <div class="input-box">
                            <label for="vat">VAT</label>
                           <input type="text" id="vat">
                        </div>

                    </div>
                       <div class="input-two space-80">
                         <div class="input-box">
                            <label for="city">City</label>
                            <input type="text" id="city"/>
                        </div>
                         <div class="input-box">
                            <label for="state">State</label>
                            <input type="text" id="state"/>
                        </div>
                    </div>
                   <div class="input-box">
                        <label>Subscription</label>
                        <select>
                            <option value="1">category</option>
                            <option value="2">category</option>
                            <option value="3">category</option>
                        </select>
                    </div>
                
                    <button class="button orange icon">sign up <i class="fa fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>  
@endsection