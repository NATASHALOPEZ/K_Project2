<!DOCTYPE html>
<html>

  <head lang="en">
    <meta charset="utf-8">
    <title>Custom Plunker</title>
    
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript">
      
    </script>
  </head>
  <style type="text/css">
    input[type=text] {
    width: 130px;

    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 8px 10px 8px 30px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 80%;
    text-align: center;
}
  </style>
  <body>
    <input type="text" name="search" placeholder="Search..">
    <div id="map" style="height:500px;width:500px;">
     <script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places&callback=initMap&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4"
    async defer>
        </script>
        </div>
        <div  id="name"></div>
        <div  id="link"></div>
        <div  id="gps"></div>
  </body>
          <script>

  
var mydata = "";
$.ajax({
  url: 'js/data.json',
  async: false,
  dataType: 'json',
  success: function (json) {
    mydata = JSON.stringify(json);
  }
});

console.log(mydata);
         

var contents = mydata;
             //alert(contents);
        </script>
  
</html>