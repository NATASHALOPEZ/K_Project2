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
       //radius: 100,
       gestureHandling: 'greedy',
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
            url: "/images/Logo WS_small_3.png",
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
             '<a style="text-decoration:none"  href="' + wslink + '"><img src="/images/info.png" style="position:relative;float:right;height:20px;width:20px;" ></a>'+
            '</div>'+'<div id="infodirection">'+
            '<a  href="' + newURl + '"><img src="/images/direction.png" style="position:relative;float:right;right:2%;height:18px;width:18px;"></a>'+
            
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
    map.setZoom(7);
});

  }  



 function toggleBounce() {

        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }



   


  }



      


