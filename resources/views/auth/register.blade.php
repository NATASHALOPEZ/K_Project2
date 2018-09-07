@extends('layouts.template')

@section('content')

   <?php //$json = file_get_contents("http://country.io/names.json");
 $user_ip = getenv('REMOTE_ADDR');
 $geo= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=user_ip"));
    ?> 


<!-- Breadcrumbs
============================================ -->
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
<meta name="_token" content="{{{ csrf_token() }}}"/>
                <form id="msform"  method="POST" action="{{ route('register') }}">
                     <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Laundromat Details</li>
            </ul>

                    {{ csrf_field() }}
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                             <input type='hidden' name='role_id'  value='1'/>

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

                    <div class="input-one space-100">
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
                                
                    </div>                
                  <div class="input-two space-100">
                         <div class="input-box">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password"/>
                        </div>
                            <div class="input-box">
                     <label for="password-confirm" class="control-label">Confirm Password</label>
                      <input id="password-confirm" type="password"  name="password_confirmation" required>
                            </div>
                    
                    </div>
                     <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                   <fieldset>
                     <h2 class="fs-title">Laundromat Details</h2>
                         <div class="input-two space-100">
                            <div class="input-box">
                                <label for="country">Country</label>
                               
                                <input type="text" id="country" value="<?php echo $geo["geoplugin_countryName"] ?>"/>
                           
                            
                            </div>
                        
                    
                        <div class="input-box">
                            <label for="vat" >VAT Number</label>
                          
                            <input type="text" id="vat" name="vat" value="<?php echo $geo["geoplugin_countryCode"] ?>" />
                           
                            <button type="button" id="button" name="submitvat"   class="button green icon">validate <i class="fa fa-angle-right"></i></button>
                             <div  id="errorid" Visible="true"></div>
                        </div>
                    </div>
                     <div class="input-one space-100">
                         <div class="input-box">
                            <label for="name">Name</label>
                            <input readonly="readonly" id="name"/>
                        </div>
                    </div>
                    
                    <div class="input-one space-100">
                         <div class="input-box">
                            <label for="address">Address</label>
                            <input  id="address"/>
                        </div>
                    </div> 
                   <div class="input-two space-100">
         
                  

                    </div>
                     
               
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
               <button class="button orange icon">sign up <i class="fa fa-angle-right"></i></button>
                   </fieldset>
            
              
                
                    
                </form>
            </div>
        </div>
    </div>
</div>



@endsection


</div>
