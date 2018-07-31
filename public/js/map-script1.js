    $(document).ready(function() {
      var marker;
        var center_ini = {
        lat: 38.7766664,
        lng: -4.8421095
        };
     map = new google.maps.Map(document.getElementById('map'), {
       center: center_ini,      
       zoom:8,   
       //radius: 100,
       gestureHandling: 'greedy',
      
         });
   var data = JSON.parse(document.getElementById('data').innerHTML);
   console.log(data);
    //showMarkers(data);
for (var i = 0, length = data.length; i < length; i++) {
  var data1 = data[i],
      latLng = new google.maps.LatLng(data1.latitude, data1.longitude); 

  // Creating a marker and putting it on the map
   var image = {
            url: "/images/dot.png",

          
           };
  var marker = new google.maps.Marker({
    position: latLng,
    map: map,
    icon:image,
    title: data1.name
  });
}
 src = "http://127.0.0.1:8000/en/searchList";
     $("#search").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                 response( $.map( data, function( item ) {

                  return {
                            label: item.value  + "| " + item.city,
                            value: item.value + "| " + item.city,
                            latitude: item.latitude,
                            longitude: item.longitude

                        }

}));
            
                 }
            });
           
        },
       
        minLength: 1,
        select: function(e,ui)
        {            
          $("#result").html('');
           var location    =   new google.maps.LatLng(ui.item.latitude,ui.item.longitude);
                    marker =   new google.maps.Marker({
                        map:map,  
                        icon:image                     
                    })                

                    marker.setPosition(location);
                    map.setCenter(location);
                    map.setZoom(13);
                     return false;
   
        }  
         
    });

    
});


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