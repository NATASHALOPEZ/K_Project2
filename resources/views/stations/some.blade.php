
@extends('layouts.template')

@section('content')
<!-- Map
============================================ -->
<?php
$supportedLangs = array('en', 'fr');
$languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
foreach($languages as $lang)
{
  if(in_array($lang, $supportedLangs))
  {
                // Set the page locale to the first supported language found
    $page->setLocale($lang);

                break;

  }
    
}
$data = json_encode($data,true);
echo '<div id= "data">' . $data . '</div>';

?>


<div class="map-container home-map-container margin-bottom-100" >

  <div id="map"></div>
  <!-- Map Lock & Unlock -->
  <span class="map-unlock"></span>
  <!-- Location Search -->

  <div class="location-search-float">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="location-search fix">
            <h5 style="text-transform: uppercase;"><b>{{ __('homeContent.make_a_search')}}</b></h5>
            <form id="testForm"  method="POST" action="{{'userLocation'}}">
              {{ csrf_field() }}
              
              <div class="input-kayword" ><input type="text" id="search" placeholder="search keywords" /></div>
              <!-- <div class="input-location"><input type="text" id="search_city" placeholder="all location" /></div> -->
               <ul class="list-group" id="result"></ul>
              
              <div style="" class="input-location" class="">              
              <i><h4  style="display:inline-block;text-transform: uppercase;margin-top: 10px;padding-top: 0">{{ __('homeContent.laundries_near_you')}}</h4></i></div>
               <span style=" position:relative;display:inline-block;float:right;right:60px;" id="mySearch" type="submit" onclick="submitform();" class="cat-icon icon-place float-right">icon</span>
       
              <input type="hidden"  id="latitude" name="latitude" value="" ></>
             <input type="hidden" id="longitude" name="longitude" value="" ></>

             
        <!--   <input type="submit" name=""> -->
        
              <div style="" class="input-range orange" >
                <p>Radius:  <span></span></p>
                <input type="range" name="radius" id="radius" value="40" min="0" max="180" />
          
</div>

             <!--  <div class="input-submit" >
                <button><i class="fa fa-search"></i> search</button>
  
            </div> -->
             
            </form>
          <form id="test2"  method="POST" action="{{'wall'}}">
            {{ csrf_field() }}
            <input type="hidden"  id="lat" name="lat" value="" ></>
             <input type="hidden" id="lon" name="lon" value="" ></>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 <script type="text/javascript">
 
</script>     
         
          
        
      
 
<!-- Google Map APi
============================================ -->
<script src="/js/map-script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4&libraries=places&callback=initMap"></script>
</script>
<!-- <script src="/js/map-script.js"></script> -->
<!-- Main JS
============================================ -->
@endsection

<div class="carousel-inner" role="listbox">
                  <?php  foreach($img as $img)
                  {

                    ?>
                  <div class="item">
                  <img id="imgban" src="{{ URL::asset('storage/'.$img->filename) }}" class="img responsive" alt="<?php echo $img['filename'];?>" />
                  </div>
                  <?php
                }
                ?>

                </div>
                <a href="left carousel-control" href="#main-banner" role="button" data-slide="prev"></a>
                <a href="right carousel-control" href="#main-banner" role="button" data-slide="next"></a>
<script type="text/javascript">
  document.ready(function(e)
  {
    $('.carousel-indicators li:nth-child(1)').addClass('active')
    $('.item:nth-child(1)').addClass('active');
  });
 
 
</script>