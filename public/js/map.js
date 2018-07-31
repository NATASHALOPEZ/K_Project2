 var map; 
       var infowindow;
       var coordinates;
       var coord;
       var bound; 
       var infoWindow1; 
       var marker1;
   
      function initMap() { 
       var obj = new Array();
      obj = JSON.parse(contents);
    
      var coordinates = obj.loja;
     //alert(coordinates);
     var coord;  
        var coord;   
        var port = {
        lat: 37.568703,
        lng: -12.476412
        };
     map = new google.maps.Map(document.getElementById('map'), {
       center: port,      
       zoom:5,      
       radius: 1000,
        draggable: true,
      gestureHandling:'greedy'
     
     
     });

 infoWindow1 = new google.maps.InfoWindow();
        for(i in coordinates)
        {    
           
            coord = coordinates[i];            
            var lt = coord.gps;
            var wslink = coord.link;             
            var loc = coord.gps.split(",") 
            var lat = parseFloat(loc[0]);   
            var lng = parseFloat(loc[1]);
            var myLatlng = new google.maps.LatLng(lat,lng);
            var image = {
            url: "images/small_3.png",
            size: new google.maps.Size(30, 30),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),

           scaledSize: new google.maps.Size(25, 25)
           };
           marker1 = new google.maps.Marker({

            map: map,
            position: myLatlng,
            animation: false,
            title: 'duplo clique' ,
            icon: image,
            visible: true,
            url: wslink

           });
       
        marker1.addListener('click', toggleBounce);
           (function (marker1, coord) {
            var name = coord.name;
            var wslink = coord.link;
            var url = 'https://maps.google.com?saddr=Current+Location&daddr=';
            var newURl = url + lat + ', '+ lng ; 
            var contentString = '<div id="infowindow">'+
            '<div id="infoname" style="font-size:11px;font-weight: bold;color:#4980A9;text-decoration:none;">'+'<a   href="' + wslink + '"  target="_blank">'+ name.toUpperCase()  +
            '</a>'+'</div>'+'<div id="infodirection">'+
            '<a  href="' + newURl + '" target="_blank"><img src="" style="position:relative;float:right;right:2%;height:18px;width:18px;"></a>'+
            
            '</div>'+
            '</div>';
          google.maps.event.addListener(marker1, 'dblclick', function () {
          //window.location.href = wslink;
          window.open(wslink, '_blank');
            });
            google.maps.event.addListener(marker1, "mouseover", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow1.setContent(contentString);
                    infoWindow1.open(map, marker1);
                });
             google.maps.event.addListener(marker1, "click", function (e) {
                    //Wrap the content inside an HTML DIV in order to set height and width of InfoWindow.
                    infoWindow1.setContent(contentString);
                    infoWindow1.open(map, marker1);
                });
            })(marker1, coord);
         
   }

 update(); 
}
function toggleBounce() {

        if (marker1.getAnimation() !== null) {
          marker1.setAnimation(null);
        } else {
          marker1.setAnimation(google.maps.Animation.BOUNCE);
        }
      }


function update(){
     $.widget( "custom.catcomplete", $.ui.autocomplete, {
    _renderMenu: function( ul, items ) {
      var that = this,
        currentCategory = "";
      $.each( items, function( index, item ) {
        
        that._renderItemData( ul, item );
      });
    }
  });

  var xhr;
  $( "input" ).catcomplete({

    delay: 0,
    source: function( request, response ) {
      var regex = new RegExp(request.term, 'i');
      if(xhr){
        xhr.abort();
      }
      xhr = $.ajax({
          url: "js/data.json",
          dataType: "json",
          cache: false,
          success: function(data) {
            response($.map(data.loja, function(item) {
              if(regex.test(item.name)){
                return {
                    label: item.name,
                    link:item.link,
                    gps:item.gps
                   
                };
              }
            }));

          }

      });
     
    },
     minLength: 4,
        select: function(e,ui)
        {
          $('#name').val(ui.item.label);
          $('#link').val(ui.item.link);
         $('#gps').val(ui.item.gps);
       // toggleBounce();  
       var name = document.getElementById('name');
       var link = document.getElementById('link');
       var gps = document.getElementById('gps');
       
       var loc = ui.item.gps.split(","); 
            var lat = parseFloat(loc[0]);   
            var lng = parseFloat(loc[1]);
          
       
           var location    =   new google.maps.LatLng(lat,lng);
                    
                    map.setCenter(location);
                    map.setZoom(13);
                  
                   
                     
        }  
  });
  

}

