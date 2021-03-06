@extends('layouts.template')

@section('content')

<?php 

 $user_ip = getenv('REMOTE_ADDR');
 $geo= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=user_ip"));

  
    ?>
    
<!-- Breadcrumbs
============================================ -->
<div class="page-title-social margin-0 hidden-sm hidden-md hidden-xs ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title float-left"><h2></h2></div>
            </div>
        </div>
    </div>
</div>
<!-- Business Tab Area
============================================ -->
<div class="login-page margin-0">
    <div class="container">
        <div class="row">
            <!-- Title & Search -->
            <div class="section-title text-center col-xs-12 margin-bottom-50">
                <h1></h1>
            </div>
            <!-- Contact Form -->
            <div class="register-form text-center col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-12">
                <form id ="msform" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

            <!-- progressbar -->
            <ul id="progressbar" class="">
                <li class="active">Personal Details</li>
                <li>Laundromat Details</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                 <input type='hidden' name='role_id'  value='2'/>
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
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Laundromat details</h2>
                <div class="input-two space-80">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country">Country</label>
                            <input id="country" type="text" class="form-control" name="country" value="<?php echo $geo["geoplugin_countryName"] ?>" required autofocus>

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                     <div class="input-box">
                            <div class="form-group{{ $errors->has('VAT') ? ' has-error' : '' }}">
                            <label for="VAT">VAT NUMBER</label>
                            <input id="vat" type="text" class="form-control" name="VAT" value="<?php echo $geo["geoplugin_countryCode"] ?>" required autofocus>

                                @if ($errors->has('VAT'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('VAT') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <button class="button green icon" id="button" ">validate <i class="fa fa-angle-right"></i></button>

                    </div>
                    <div  id="loader1"><i class="fa fa-life-ring fa_custom fa-3x"></i></div>
                    <div id="errorid"></div>
                       <div class="input-one space-100">
                        <div class="input-box">
                            <div class="form-group{{ $errors->has('company') ? ' has-error' : '' }}">
                            <label for="company">Company name</label>
                            <input id="company" type="name" readonly="readonly" class="form-control" name="company" value="" required>
                           
                        </div>
                    </div>
                       <div class="input-box">
                            <div class="form-group{{ $errors->has('Address') ? ' has-error' : '' }}">
                            <label for="Address">Company Address</label>
                            <textarea id="Address" type="address" readonly="readonly" class="form-control" name="Address" value="" required></textarea> 
                         
                        </div>
                    </div>
                  
                    </div>
                 <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                
                <button class="button orange icon">sign up <i class="fa fa-angle-right"></i></button>
            </fieldset>
           
      
                  
          
                    
                </form>
            </div>
        </div>
    </div>
</div>  
<script type="text/javascript">
    var readOnlyLength = $('#vat').val().length;

 

$('#vat').on('keypress, keydown', function(event) {
    var $field = $(this);
   
    if ((event.which != 37 && (event.which != 39))
        && ((this.selectionStart < readOnlyLength)
        || ((this.selectionStart == readOnlyLength) && (event.which == 8)))) {
        return false;
    }
});
$('#loader1')
    .hide()  // Hide it initially
    .ajaxStart(function() {
        $(this).show();
    })
    .ajaxStop(function() {
        $(this).hide();
    })
; 
</script>
@endsection