
var map, marker;

window.onload = function() {
  geoFindMe();
  
};
  function geoFindMe() {


  if (!navigator.geolocation){
   /* output.innerHTML = "<p>Geolocation is not supported by your browser</p>";*/
    return;
  }

  function success(position) {
   var  lat  = position.coords.latitude;
    document.getElementById('latitude').value=lat;
  
   var  long = position.coords.longitude;
     document.getElementById('longitude').value=long;
    var myLatLng = new google.maps.LatLng(lat, long); 
     map.setCenter(myLatLng);
     map.setZoom(9);
     var currentLoc = {
            url: "/images/Landmark1.png",

          scaledSize: new google.maps.Size(75, 70)
           };
   var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    animation: google.maps.Animation.DROP,
    icon:currentLoc,
    title: "your location"
  });
  }
                
  function error() {
   /* output.innerHTML = "Unable to retrieve your location";*/
  }

  /*output.innerHTML = "<p>Locating…</p>";*/

  navigator.geolocation.getCurrentPosition(success, error);
 function toggleBounce() {

        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }

}
 function submitform()
 
{
     
    document.getElementById('testForm').submit();
 
    
}



var data = JSON.parse(document.getElementById('data').innerHTML);
console.log(data);

    function initMap() {
     
      
     map = new google.maps.Map(document.getElementById('map'), {
      
       zoom:8,   
       //radius: 100,
       map: map,
       draggable:true
      
         });
   
         
    //showMarkers(data);
for (var i = 0;  i < (data.length); i++) {
  createMarker(data[i]);
}

function createMarker(data) {
  // var data1 = data[i];
  //console.log(data1);
      latLng = new google.maps.LatLng(data.latitude, data.longitude); 

  // Creating a marker and putting it on the map
   var image = {
            url: "/images/dot.png",
          
          
           };
  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    icon:image,
    title: data.name,
    url : 'http://127.0.0.1:8000/en/wall/' + data.id,
  });

      google.maps.event.addListener(marker, "click", function(event) {
    
               window.location.href =marker.url ;

  
             
            });



}

 


  $('#search').autocomplete({
    source:'http://127.0.0.1:8000/en/searchList', 
    minLength:2,
                    success: function(data) {
                 response( $.map( data, function( item ) {

                  return {
                            label: item.value  + "| " + item.city,
                            value: item.value + "| " + item.city,
                           

                        }

}));
            
                 },
    select: function(event,ui){
      var name = ui.item.value + "|" + ui.item.city;
      if(name != '') {
         var location    =   new google.maps.LatLng(ui.item.latitude,ui.item.longitude);
                    marker =   new google.maps.Marker({
                        map:map,  
                        icon:image                     
                    })                

                    marker.setPosition(location);
                    map.setCenter(location);
                    map.setZoom(13);
                  google.maps.event.addListener(marker, "click", function(event) {
                // get lat/lon of click

                var clickLat = ui.item.latitude;
                var clickLon = ui.item.longitude;
                document.getElementById('lat').value = clickLat;
                 document.getElementById('lon').value = clickLon;
                
              document.getElementById('test2').submit();
  
             
            });


      }
      
    },
                // optional
    html: true, 
    // optional (if other layers overlap the autocomplete list)
    open: function(event, ui) {
      $(".ui-autocomplete").css("z-index", 1000);
    }
  });

  }  



/*function showMarkers(data) {
   
    Array.prototype.forEach.call(data, function(data){
         marker = new google.maps.Marker({
          position: new google.maps.LatLng(data.latitude, data.longitude),
          map: map,
          title: data.name
        });
       
    });
    alert(data.name);
} */

