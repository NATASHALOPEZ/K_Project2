
<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/map-script.js') }}"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
	<script type="text/javascript">
		$(document).ready(function () {
	
    $( "#search" ).autocomplete({
      delay: 0,
      source: "http://127.0.0.1:8000/search"
    });
  } );
	
	</script> 
  <script type="text/javascript">
    
  </script>   

</head>
<style type="text/css">
 .map-content #map {
 
     height: 100%;
     width: 100%;
   

    }
.search-nav{
   margin-left: 6%;
   margin-right: 6%;
   border-radius: 10px;



  background-color:#1565C0;
  height:120px;
}
.map-content{
   margin-left: 6%;
   margin-right: 6%;
   border-style: groove;
   border-radius: 10px;
 
  
  height:800px;
}
/*.ui-autocomplete-brand {
    font-weight: bold;
    padding: .1em .2em;
    margin: .4em 0 .1em;
    line-height: 1;
  }*/
    #custom-search-input {

        border-radius: 25px;
         height: 50px;    
        margin-top: 2px;
        padding-top: 40px;
    }
 
    #custom-search-input .search-query {

        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
    #custom-search-input button {

        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
       
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color:#D9230F;
    }
 
    .search-query:focus + button {
        z-index: 3;   
    }
    .row1{
    padding-top: 30px;
}
#data{
  display: none;
}
#sss{
  font-family: 'Open Sans', sans-serif;
  font-size:14px;
}



</style>
<body id="sss">

<?php
$data = json_encode($data,true);
echo '<div id= "data">' . $data . '</div>'
?>
<p style="font-family: 'Open Sans', sans-serif;font-size:24px;" 
>dfghjk</textarea>>


<div class="row row1">
  
            <div class=" col-xs-10 col-sm-10 col-md-10 search-nav">
            	  <div id="custom-search-input">
                            <div class="input-group col-md-8" >
                                <input type="text" class="search-query form-control" name="search" id="search" placeholder="Search" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
            </div>

      </div>

      <div class="row row1">
      <div class=" col-xs-10 col-sm-10 col-md-10 map-content " id="map">

          <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&libraries=places&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4"
    async defer>
        </script>
      </div>
</div>

</body>
</html>
<?php 

 $user_ip = getenv('REMOTE_ADDR');
 $geo= unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=user_ip"));
 //$currentLat= $geo["geoplugin_latitude"];
 //$currentLong= $geo["geoplugin_longitude"];
  $currentCountry= $geo["geoplugin_countryName"];
  $currentCurrency=$geo["geoplugin_currencySymbol"];
  //echo "city:".$currentLat."</br>";
   //echo "region:".$currentLong."</br>";
    echo "country:".$currentCountry."</br>";
    echo "currency:".$currentCurrency."</br>";
    ?>
