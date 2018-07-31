  var map;

   
       var infowindow;
       var coordinates;
       var coord;
       var bound;  
      function initMap() {

      var obj = new Array();
      obj = JSON.parse(contents);    
       var coordinates = obj.loja;
        var coord;   
        var port = {
        lat: 37.568703,
        lng: -12.476412
        };
     map = new google.maps.Map(document.getElementById('map'), {
       center: port,      
       zoom:6,   
       radius: 100,
      styles: [
    
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 33
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f7f7f7"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#deecdb"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": "25"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                    "lightness": "25"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels",
        "stylers": [
            {
                "saturation": "-90"
            },
            {
                "lightness": "25"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e0f1f9"
            }
        ]
    }
]
     });
      
     var infoWindow = new google.maps.InfoWindow();
        for(i in coordinates)
        {    
           
            coord = coordinates[i];            
            var lt = coord.gps;             
            var loc = coord.gps.split(",") 
            var lat = parseFloat(loc[0]);   
            var lng = parseFloat(loc[1]);
            var myLatlng = new google.maps.LatLng(lat,lng);
            var image = {
            url: "/wp-content/uploads/2018/04/Logo-WS_small_3.png",
           scaledSize: new google.maps.Size(30, 30)
           };
           var marker = new google.maps.Marker({
            map: map,
            position: myLatlng,
            animation: google.maps.Animation.DROP,
            title: coord.name ,
            icon: image,
           });
       resize1() ;
        marker.addListener('click', toggleBounce);
           (function (marker, coord) {
            var name = coord.name;
            var wslink = coord.link;
            var url = 'https://maps.google.com?saddr=Current+Location&daddr=';
            var newURl = url + lat + ', '+ lng ;
            var contentString = '<div id="infowindow">'+
            '<div id="infoname" style="font-size:11px;font-weight: bold;color:#4980A9;text-decoration:none;">'+'<a  href="' + wslink + '">'+ name.toUpperCase()  +
            '</a>'+'</div>'+'<div id="infomore">'+
             '<a style="text-decoration:none"  href="' + wslink + '"><img src="/wp-content/uploads/2018/04/info.png" style="position:relative;float:right;height:20px;width:20px;" ></a>'+
            '</div>'+'<div id="infodirection">'+
            '<a  href="' + newURl + '"><img src="/wp-content/uploads/2018/04/direction.png" style="position:relative;float:right;right:2%;height:18px;width:18px;"></a>'+
            
            '</div>'+
            '</div>';
          
            google.maps.event.addListener(marker, "mouseover", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow.setContent(contentString);
                    infoWindow.open(map, marker);
                });
            })(marker, coord);
         
   }

  
  function resize1()
  {
    google.maps.event.addDomListener(window, "resize", function() {
  
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
    map.setZoom(5);
});

  }  

   function resize2()
  {
    google.maps.event.addDomListener(window, "resize", function() {
  
    var center = map.getCenter();
    google.maps.event.trigger(map, "resize");
    map.setCenter(center); 
    map.setZoom(9);
});

  }  
 function toggleBounce() {

        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }



      jQuery(function($)
{
    $("#1").on('click', function ()
    {
      var southWest = new google.maps.LatLng(40.541712,-8.765443800000002);
      var northEast = new google.maps.LatLng(41.054438,-8.248400);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      
      map.fitBounds(bounds);
        
      //map.setZoom(10);
      resize2();
      //map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
    });
  
    $("#2").on('click', function ()
    {
      var southWest = new google.maps.LatLng(40.076803,-9.034601);
      var northEast = new google.maps.LatLng(40.397593,-8.007379);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
        
      //map.setZoom(10);
      resize2();
      //map.setCenter(bounds.getCenter(), map.getBoundsZoomLevel(bounds));
    });
  
    $("#3").on('click', function ()
    {
      var southWest = new google.maps.LatLng(37.077589,-8.793948);
      var northEast = new google.maps.LatLng(37.248316,-8.151248);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
        
     
      resize2();

      
    });
     $("#4").on('click', function ()
    {
      var southWest = new google.maps.LatLng(32.63294520000001,-16.9672461);
      var northEast = new google.maps.LatLng(32.6871381,-16.882095);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(10);
      resize2();
    });
      $("#5").on('click', function ()
    {
      var southWest = new google.maps.LatLng(39.70991799999999,-8.8768517);
      var northEast = new google.maps.LatLng(39.798205,-8.7350657);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
     
      resize2();
    });
       $("#6").on('click', function ()
    {
      var southWest = new google.maps.LatLng(38.6913994,-9.229835599999999);
      var northEast = new google.maps.LatLng(38.7958538,-9.090570899999999);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(11);
      resize2();
    });
        $("#7").on('click', function ()
    {
      var southWest = new google.maps.LatLng(41.1383506,-8.6912939);
      var northEast = new google.maps.LatLng(41.1859353,-8.5526134);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(10);
      resize2();
    });
         $("#8").on('click', function ()
    {
      var southWest = new google.maps.LatLng(39.209374,-8.823605);
      var northEast = new google.maps.LatLng(39.614147,-8.397198);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(10);
      resize2();
    });
          $("#9").on('click', function ()
    {
      var southWest = new google.maps.LatLng(38.474255,-9.103678);
      var northEast = new google.maps.LatLng(38.685745,-8.737009);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(10);
      resize2();
    });
           $("#10").on('click', function ()
    {
     var southWest = new google.maps.LatLng(40.634389,-7.978463);
      var northEast = new google.maps.LatLng(40.676649,-7.882504);
      var bounds = new google.maps.LatLngBounds(southWest,northEast);
      map.fitBounds(bounds);
      //map.setZoom(13);
     resize2();
    });
});



  }



      


