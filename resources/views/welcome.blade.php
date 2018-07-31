
@extends('layouts.template')

@section('content')
<!-- Map
============================================ -->
<?php
$data = json_encode($data,true);
echo '<div id= "data">' . $data . '</div>';

?>
<div class="map-container home-map-container margin-bottom-100" style="margin-top: 100px;">
  <div id="map"></div>
  <!-- Map Lock & Unlock -->
  <span class="map-unlock"></span>
  <!-- Location Search -->
  <div class="location-search-float">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="location-search fix">
            <h5 style="text-transform: uppercase;">{{ __('homeContent.make_a_search')}}</h5>
            <form id="testForm"  method="POST" action="{{'userLocation'}}">
              {{ csrf_field() }}
              
              <div class="input-kayword" ><input type="text" id="search" placeholder="search keywords" /></div>
             
              <!-- <div class="input-location"><input type="text" id="search_city" placeholder="all location" /></div> -->
              <div >
              <div style="" class="input-location" class="">              
              <h5  style="display:inline-block;text-transform: uppercase;margin-top: 0;padding-top: 0">{{ __('homeContent.laundries_near_you')}}</h5><span style=" display:inline-block;float:right;" id="mySearch" type="submit" onclick="submitform()" class="cat-icon icon-place float-right">icon</span></div></div>

       
              <input type="hidden"  id="latitude" name="latitude" value="" ></>
             <input type="hidden" id="longitude" name="longitude" value="" ></>
        <!--   <input type="submit" name=""> -->
        
              <div class="input-range orange" >
                <p>Radius:  <span></span></p>
                <input type="range" name="radius" id="radius" value="70" min="0" max="180" />
          
</div>

              <div class="input-submit" >
                <button><i class="fa fa-search"></i> search</button>
  
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

window.onload = function() {
  geoFindMe();
};
  function geoFindMe() {


  if (!navigator.geolocation){
   /* output.innerHTML = "<p>Geolocation is not supported by your browser</p>";*/
    return;
  }

  function success(position) {
    var lat  = position.coords.latitude;
    document.getElementById('latitude').value=lat;
  
    var long = position.coords.longitude;
     document.getElementById('longitude').value=long;

   
  }
                
  function error() {
   /* output.innerHTML = "Unable to retrieve your location";*/
  }

  /*output.innerHTML = "<p>Locating…</p>";*/

  navigator.geolocation.getCurrentPosition(success, error);

}
 function submitform()
 
{
     
    document.getElementById('testForm').submit();
     
}
  

/* */

</script>
    
         
          
        
      
 
<!-- Google Map APi
============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4&libraries=places&callback=initialize"></script>
</script>
<script src="/js/map-script.js"></script>
<!-- Main JS
============================================ -->
@endsection