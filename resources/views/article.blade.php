<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/site.css" rel="stylesheet">
</head>
<body style="font-family:Verdana;">

<div class="nav">
  <h1>Wash Stations</h1>
</div>

<div style="overflow:auto">
  <div class="menu">
    <div class="menuitem">The Drive</div>
    <div class="menuitem">The Walk</div>
    <div class="menuitem">The Return</div>
    <div class="menuitem">The End</div>
  </div>

  <div class="main">
 {{ dd($article->toArray())}}

 <!--    <h2><h1>{{ $article->name }}</h1>
{{ $article->text }}</h2> -->
    
    <img src="images/wash.jpg" style="width:100%;height:100%">

  </div>

  <div class="right">
    <h2>What?</h2>
    <p> mountain that looks like .</p>
    <h2>Where?</h2>
    <p> Norway.</p>
    <h2>Price?</h2>
    <p>The Walk is free!</p>
  </div>
</div>

<footer>washstations</footer>

</body>
</html>
<section id="map_contain" class="map-container home-map-container margin-bottom-100 ">
  <script src="https://maps.googleapis.com/maps/api/js?v=3&callback=initMap&libraries=places&key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4"
    async defer>
        </script>
  <div id="map"></div>
  <!-- Map Lock & Unlock -->
  <span class="map-unlock"></span>
  <!-- Location Search -->
  <div class="location-search-float">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="location-search fix">
            <h2>search your location</h2>
            <form action="#">
              <div class="input-kayword"><input type="text" placeholder="search keywords" /></div>
              <div class="input-location"><input type="text" placeholder="all location" /></div>
              <div class="input-range orange">
                <p>Radius:  <span></span></p>
                <input type="range" value="70" min="0" max="180" />
              </div>
              <div class="input-submit">
                <button><i class="fa fa-search"></i> search</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 