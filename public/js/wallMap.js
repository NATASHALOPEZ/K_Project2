 
        function initMap() {
            var lat = JSON.parse(document.getElementById('lat').innerHTML);
            var lon = JSON.parse(document.getElementById('lon').innerHTML);
            var image = {
            url: "/images/dot.png",          
           };
           var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<div id="mapBodyContent">'+
            '<img src="/images/laundry.jpg" alt="" />'+      
            '<a href="#" class="button orange">View Details</a>'+        
            '</div>'+
            '</div>';
            var infowindow = new google.maps.InfoWindow({
              content: contentString
             });

            var map;
            var marker;
            var myLatlng = new google.maps.LatLng(lat,lon);
            var myOptions = {
                zoom:12,
                center: myLatlng
            }
            

            map = new google.maps.Map(document.getElementById("map"), myOptions);
            // marker refers to a global variable
           
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon:image
            });
 infowindow.open(map,marker);
           
    }   
