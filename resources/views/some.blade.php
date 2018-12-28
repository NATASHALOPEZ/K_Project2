<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title >Laundries</title>

    <link href="/css/style1.css" rel="stylesheet">
    <link href="/css/responsive1.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <link href="/css/scrolling-nav.css" rel="stylesheet">

<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
     <script src="{{ asset('/js/map-script.js') }}"></script>

  </head>
<!-- Wrap all page content here -->
  <?php
$data = json_encode($data,true);
echo '<div id= "data">' . $data . '</div>';
?>
<div id="wrap">
  
<header class="masthead">
    <div class="container">
    <div class="row">
      <div class="header-top-left col-md-8 col-xs-12">
          <p><i class="fa fa-phone"></i>Call us +351 244 812 313</p>
          <p><i class="fa fa-caret-right"></i><a href="#">{{ __('homeContent.support')}}</a></p>
          <div class="header-search float-left">
            <form action="#">
              <input type="text" placeholder="search" />
              <button><i class="fa fa-search my-icon" style="float: right;"></i></button>
            </form>
          </div>
        </div>
    <div class="header-right col-md-4 col-xs-12 fix">
          <div class="header-social float-right" style="float:right">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
    </div>
    </div>
</header>


 <script>
 /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header').height()-$('#nav').height()
      }
}); 

/* highlight the top nav as scrolling occurs */
$('body').scrollspy({ target: '#nav' })

/* smooth scrolling for scroll to top */
$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})

/* smooth scrolling for nav sections */
$('#nav .navbar-nav li>a').click(function(){
  var link = $(this).attr('href');
  var posi = $(link).offset().top+20;
  $('body,html').animate({scrollTop:posi},700);
})

/* google maps */

// enable the visual refresh

</script>
  
 
<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav" >
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav nav-justified">
          <li ><a href="#">{{ __('homeContent.home')}}</a></li>
          <li><a href="#section2">{{ __('homeContent.product')}}</a></li>
          <li><a href="#section3">{{ __('homeContent.brands')}}</a></li>
          
          
          <li><a href="#section4">{{ __('homeContent.about')}}</a></li>
          <li><a href="#section5">{{ __('homeContent.contact')}}</a></li>
         
          
        </ul>

      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
  
<!-- Begin page content -->
<!-- <div class="divider" id="section1"></div> -->
  

<div class="map-container home-map-container margin-bottom-100">
  <div id="map"></div>
  <!-- Map Lock & Unlock -->
  <span class="map-unlock"></span>
  <!-- Location Search -->
  <div class="location-search-float">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="location-search fix">
            <h2>{{ __('homeContent.searchLocation')}}</h2>
            <form action="#">
              <div class="input-kayword"><input type="text" id="search" placeholder="search keywords" /></div>
              <div class="input-location"><input type="text" id="search_city" placeholder="all location" /></div>
              <div class="input-range orange">
                <p>{{ __('homeContent.radius')}}:  <span></span></p>
                <input type="range" value="70" min="0" max="180" />
              </div>
              <div class="input-submit">
                <button><i class="fa fa-search"></i> {{ __('homeContent.search')}}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  

  
<div class="divider"></div>
    
<div class="container" id="section3">
    <div class="col-sm-8 col-sm-offset-2 text-center">
      <h1>Nearby Laundries</h1>
      
      <p>
      Instead of creating a unique version of the webpage for each desktop, mobile &amp; tablet, you can now create one design that works on all devices, browsers &amp; resolutions. Your designs will be future ready when a new table or phone size comes in the market, your designs will adapt itself and fit to the new screen size.
      </p>
      
      <hr>
      
      <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
      
      <hr>
    </div><!--/col
</div><!--/container--> -->

<!-- <div class="divider"></div> -->
  
<section class="bg-3" id="section4">
  <div class="col-sm-6 col-sm-offset-3 text-center"><h2 style="padding:20px;background-color:rgba(5,5,5,.8)">Nearby Laundries</h2></div>
</section>
  
<div class="continer bg-4">
  <div class="row">
     <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div><img src="//placehold.it/450X250/565656/eee" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">News</p>
            <p >120k Followers, 900 Posts</p>
            
            <p>
              <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default" >
          <div class="panel-thumbnail"><img src="//placehold.it/450X250/ffcc33/444" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Wash Stations</p>
            <p>902 Followers, 88 Posts</p>
            
            <p>
              <img src="https://lh5.googleusercontent.com/-AQznZjgfM3E/AAAAAAAAAAI/AAAAAAAAABA/WEPOnkQS_20/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/450X250/f16251/444" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Social Media</p>
            <p>19k Followers, 789 Posts</p>
            
            <p>
              <img src="https://lh4.googleusercontent.com/-eSs1F2O7N1A/AAAAAAAAAAI/AAAAAAAAAAA/caHwQFv2RqI/s28-c-k-no/photo.jpg" width="28px" height="28px">
              <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
  </div><!--/row-->
</div><!--/container-->

<div class="divider" id="section5"></div>

<div class="row">

  <h1 class="text-center">Where In The World?</h1>

  
  
  <hr>
  
  <div class="col-sm-8">
      
      <div class="row form-group">
        <div class="col-xs-3">
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required="">
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" id="middleName" name="firstName" placeholder="Middle Name" required="">
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required="">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>
          <div class="col-xs-5">
          <input type="email" class="form-control" name="phone" placeholder="Phone" required="">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
          <input type="homepage" class="form-control" placeholder="Website URL" required="">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Contact Us</button>
          </div>
      </div>
    
  </div>
  <div class="col-sm-3 pull-right">

      <address>
        <strong>Kitsec,LDA.</strong><br>
        795 Folsom Ave, Suite 600<br>
        Newport, RI 94107<br>
        P: (123) 456-7890
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:#">first.last@example.com</a>
      </address>          
  </div>
  
</div><!--/row-->

<div class="container">
    <div class="col-sm-8 col-sm-offset-2 text-center">
      <h2>Cleanliness is next to Godliness</h2>
      
      <hr>
      <h4>
        We love Laundries.
      </h4>
      <p>Get more free services with premium packages <a href="http://bootply.com"> Playground</a>, Kitsec.</p>
      <hr>
      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/bootply"><img src="/assets/example/soc_fb.png"></a></li>
        <li><a href="http://twitter.com/bootply"><img src="/assets/example/soc_tw.png"></a></li>
        <li><a href="http://google.com/+bootply"><img src="/assets/example/soc_gplus.png"></a></li>
        <li><a href="http://pinterest.com/in1"><img src="/assets/example/soc_pin.png"></a></li>
      </ul>
      
    </div><!--/col-->
</div><!--/container-->
  
</div><!--/wrap-->

<div id="footer">
  <div class="container">
    <p class="text-muted">The Application<a href="http://www.bootply.com">Kitsec,LDA</a></p>
  </div>
</div>

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>
 <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
     @foreach($allCategories as $Category)
                        
                        <li ><label ><input value=" {{ $Category->id }} " type="checkbox" name="category[]" style="margin-right:5px" >{{ $Category->name }}</label></li>
                        @endforeach