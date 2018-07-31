<?php
/*
* Plugin Name:  ShortCode map_myMap
* Author: Natasha.

*/

// Example 1 : WP Shortcode to display form on any page or post.
function mapPage_creation(){
    
	
?>

        <script>

  
var mydata = "";
$.ajax({
  url: '/wp-content/plugins/shortcode/assets/js/washStation1.js',
  async: false,
  dataType: 'json',
  success: function (json) {
    mydata = JSON.stringify(json);
  }
});

//alert(mydata);
         

var contents = mydata;
        //      alert(contents);
        </script>
<!--  <style>
 .paginanova {
	margin-right: 0px !important;
	margin-top: 40px !important;
	margin-bottom: 20px !important;
	margin-left: 15px !important;

	width: 100vw !important;
	order: 3 !important;
	
	height: 750px !important;
	overflow-y: auto !important;
	/*display: flex !important;
	flex-direction: row !important;
	flex-wrap: wrap !important;*/
	
}
 </style> -->
 <div id="Content" class="paginanova" >


<div class="menudistritos">
	
    <div class="listadomenu" id="1"><a style="cursor: pointer;">AVEIRO</a></div>
    <div class="listadomenu" id="2"><a style="cursor: pointer;">COIMBRA</a></div>
    <div class="listadomenu" id="3"><a style="cursor: pointer;">FARO</a></div>
    <div class="listadomenu" id="4"><a style="cursor: pointer;">FUNCHAL</a></div>
    <div class="listadomenu" id="5"><a style="cursor: pointer;">LEIRIA</a></div>
    <div class="listadomenu" id="6"><a style="cursor: pointer;">LISBOA</a></div>
    <div class="listadomenu" id="7"><a style="cursor: pointer;">PORTO</a></div>
    <div class="listadomenu" id="8"><a style="cursor: pointer;">SANTARÉM</a></div>
    <div class="listadomenu" id="9"><a style="cursor: pointer;">SETÚBAL</a></div>
    <div class="listadomenu" id="10"><a style="cursor: pointer;">VISEU</a></div>
</div>
  <div id="map" style="width:100%;" >
  </div>
</div>
<?php
}
add_shortcode('map7', 'mapPage_creation');

//scripts and styles

function my_custom_mapscripts()
{
    wp_register_style('mapcss',  plugin_dir_url( __FILE__ ) . '/assets/css/main.css', false, '1.0.0' );
    wp_enqueue_style( 'mapcss' );
    
    wp_enqueue_script('mapjquery', plugin_dir_url( __FILE__ ) .  'assets/js/jquery-1.7.2.min.js', array('jquery') );
 
     wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&libraries=places&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4', array( 'jquery' ), '2018-04-18', true );
   
    wp_enqueue_script('mapjscript',  plugin_dir_url( __FILE__ ) . '/assets/js/my-script.js' );
    
}
add_action( 'admin_enqueue_scripts', 'my_custom_mapscripts' );
add_action( 'wp_enqueue_scripts', 'my_custom_mapscripts' );



?>
