
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<html class="no-js" lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Laundries</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laundries') }}</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  
  <!-- Bootstrap CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Icon Font CSS
  ============================================ -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- Mean Menu CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/meanmenu.min.css">
  <!-- Owl Carousel CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/owl.carousel.css">
  <!-- Montserrat fonts CSS
  ============================================ -->
  <link rel="stylesheet" href="/fonts/font-style.css">
   
<!--   <link rel="stylesheet" href="/fonts/font-style.css"> -->
<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <!-- Magnific Popup CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <!-- Default Style CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/default.css">
  <!-- Style CSS
  ============================================ -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- Responsive CSS 
  ============================================ -->
  <link rel="stylesheet" href="/css/responsive.css">
  <!-- Modernizer JS
  ============================================ -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="{{ asset('/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
   

<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/B2E59CDC-2AC6-E046-B621-E6E592DB2D09/main.js" charset="UTF-8"></script>
  <script src="/js/modernizr-2.8.3.min.js"></script>
  
</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
  <div class="loading-center">
    <div class="loading-center-absolute">
      <div class="object object_one"></div>
      <div class="object object_two"></div>
      <div class="object object_three"></div>
    </div>
  </div>
</div>
<!-- Header
============================================ -->
<div class="header">
  <!-- Header Top -->
  <div class="header-top">
    <div class="container">
      <div class="row">
        <!-- Header Top Left -->
        <div class="header-top-left col-md-8 col-xs-12">
          <p><i class="fa fa-phone"></i>{{ __('homeContent.Call')}} +49 1234 5678 9</p>
          <p><i class="fa fa-caret-right"></i><a href="#">{{ __('homeContent.support')}}</a></p>
          <div class="header-search float-left">
            <form action="#">
              <input type="text" placeholder="search something" />
              <button><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
        <!-- Header Top Right Social -->
        <div class="header-right col-md-4 col-xs-12 fix">
          <div class="header-social float-right">
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
  </div>
  <!-- Header Bottom -->
  <div class="header-bottom"  >
    <div class="container" >
      <div class="row">
        <div class="col-xs-12">
          <div class="header-bottom-wrap" >
            <!-- Logo -->
            <div class="header-logo float-left">
              <a href="index.html">&nbsp;</a>
            </div>
           
            <!-- Header Link -->
            <div class="header-link float-right hidden-sm hidden-xs">
 <h5 style="text-transform: uppercase;">own a Laundry?</h5>
              <a style="text-decoration: none;" href="{{ route('login') }}" class="button blue icon">{{ __('homeContent.sign_in')}} <i class="fa fa-angle-right"></i></a>
              <a style="text-decoration: none;" href="{{ route('register') }}" class="button">{{ __('homeContent.register')}}</a>
            </div>
            <!-- Main Menu -->
            <div class="main-menu float-right hidden-sm hidden-xs main-banner " >
              <nav id="main-banner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" >
                  @for($i=0;$i<=count($img);$i++)
            <li data-target="#main-banner" data-slide-to="{{$i}}" class=""></li>
            @endfor
           
                </ol>
                <div class="carousel-inner" role="listbox">
                  <?php
                      $isFirst = true;
                      foreach($img as $img)
                     {

                    ?>
                  <div  class="item{{{ $isFirst ? ' active' : '' }}}">
                  <img id="imgban" src="{{ URL::asset('storage/'.$img->filename) }}" class="img responsive" alt="<?php echo $img->filename?>" />
                  <div class="carousel-caption">
                  </div>
                  </div>

                  <?php
                      $isFirst = false;
                      }
                  ?>
                 </div>
               
                 <a class="floatLeft" href="left carousel-control" href=".main-banner" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="floatRight" href="right carousel-control" href=".main-banner" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
           
                <!--   <li class="active"><a href="/">{{ __('homeContent.home')}}</a></li>
                  <li><a href="/wall">{{ __('homeContent.wall')}}</a></li>
                  <li><a href="offer.html">{{ __('homeContent.offers')}}</a></li>
                  <li><a href="business.html">{{ __('homeContent.business')}}</a></li>
                  <li><a href="blog.html">{{ __('homeContent.blog')}}</a></li>
                  <li><a href="#">{{ __('homeContent.pages')}}<i class="fa fa-caret-down"></i></a>
                    <ul class="submenu">
                      <li><a href="blog.html">blog</a></li>
                      <li><a href="blog-details.html">blog details</a></li>
                      <li><a href="contact.html">contact</a></li>
                      <li><a href="login.html">login</a></li>
                      <li><a href="message.html">message</a></li>
                      <li><a href="business.html">my business</a></li>
                      <li><a href="business-details.html">my business details</a></li>
                      <li><a href="offer.html">offer</a></li>
                      <li><a href="photo.html">photo</a></li>
                      <li><a href="profile.html">profile</a></li>
                      <li><a href="register.html">register</a></li>
                      <li><a href="wall.html">wall</a></li>
                      <li><a href="wall-collection.html">wall collection</a></li>
                      <li><a href="404.html">404</a></li>
                    </ul>
                  </li>
                  <li> --> 

              </nav>
            </div>
            <!-- Mobile Menu -->
  <div class="mobile-menu hidden-lg hidden-md">
              <nav  >
                <ul class="header-link float-right">
                  <a style="text-decoration: none;" href="{{ route('login') }}" class="button blue icon">{{ __('homeContent.sign_in')}} <i class="fa fa-angle-right"></i></a>
                   <a style="text-decoration: none;" href="{{ route('register') }}" class="button">{{ __('homeContent.register')}}</a>
                 
                </ul>
              </nav>
            </div>
           
             
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@yield('content') 
   
 
<!-- Footer Top
============================================ -->
<div class="footer-top">
  <div class="container">
    <div class="row">
      <!-- Footer About -->
      <div class="sin-footer footer-about col-md-2 col-sm-6 col-xs-12">
        <h3>{{ __('homeContent.about_us')}}</h3>
        <p>Lorem ipsum dolor sit amet, consetetur sascing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
      </div>
      <!-- Footer Contact -->
      <div class="sin-footer footer-contact col-md-3 col-sm-6 col-xs-12">
        <h3>{{ __('homeContent.contact_info')}}</h3>
        <p><span>Address</span>12 Baker Street, NYQ´C 54412</p>
        <p><span>Phone</span>+49 012 454 213 789</p>
        <p><span>Fax</span>+49 012 454 213 789</p>
        <p><span>E-Mail</span><a href="#">info@wyzi.com</a></p>
      </div>
      <!-- Footer Twitter -->
      <div class="sin-footer footer-twitter col-md-2 col-sm-6 col-xs-12">
        <h3>{{ __('homeContent.twitter_feed')}}</h3>
        <div class="twitter-feed">
          <p><a href="#">@TWITTER</a> consetetur sadipscing elitr, sed diam nonumy...</p>
          <span># 2 hours ago</span>
        </div>
      </div>
      <!-- Footer Payment -->
      <div class="sin-footer footer-payment col-md-2 col-sm-6 col-xs-12">
        <h3>{{ __('homeContent.payment_methods')}}</h3>
        <img src="/images/payment-method.png" alt="" />
      </div>
      <div class="sin-footer footer-owner col-md-3 col-sm-6 col-xs-12">
        <h3>{{ __('homeContent.own_a_laundry_service')}}</h3>
        <a  href="/register_admin" style="text-transform: uppercase;text-decoration: none;">{{ __('homeContent.register')}}</a> 
        <p style="color: white">{{ __('homeContent.please_register_here')}}</p>
        
      </div>
    </div>
  </div>
</div>
<!-- Footer Bottom
============================================ -->
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <!-- Footer Menu -->
        <nav class="footer-menu text-center">
          <ul>
            <li><a href="#">{{ __('homeContent.home')}}</a></li>
            <li><a href="#">{{ __('homeContent.about')}}</a></li>
            <li><a href="#">{{ __('homeContent.service')}}</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">{{ __('homeContent.contact')}}</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<!-- JS -->

<!-- jQuery JS
============================================ -->

<!-- Bootstrap JS
============================================ -->
<script src="/js/bootstrap.min.js"></script>
<!-- Mean Menu JS
============================================ -->
<script src="/js/jquery.meanmenu.min.js"></script>
<!-- Owl Carousel JS
============================================ -->
<script src="/js/owl.carousel.min.js"></script>
<!-- ScrollUP JS
============================================ -->
<script src="/js/jquery.scrollup.min.js"></script>
<!-- Range Slider JS
============================================ -->
<script src="/js/rangeslider.min.js"></script>
<!-- Magnific Popup JS
============================================ -->
<script src="/js/jquery.magnific-popup.min.js"></script> 
<!-- Range Slider JS
============================================ -->
<script src="/js/range-active.js"></script>  
<!-- Google Map APi
============================================ -->

<!-- Main JS
============================================ -->
<script src="/js/main.js"></script>
 <script>
 /* affix the navbar after scroll below header */
$('#nav').affix({
      offset: {
        top: $('header-top').height()-$('#nav').height()
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
<script type="text/javascript">
  $(document).ready(function(e)
  {
    $('.carousel-indicators li:nth-child(1)').addClass('active')
    $('.item:nth-child(1)').addClass('active');
  });
 
 
</script>

</body>
</html>
