<html>
<head>
<meta charset="UTF-8">
    <title></title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="theme.css" rel="stylesheet">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/docs.min.js"></script>
	<script src="dist/js/ui-bootstrap-0.12.0.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
    <script src="controllers.js"></script>
	<script src="validate.js"</script>
	<link rel="stylesheet" href="dist/css/bootstrap.css"/>

  <!-- BootstrapValidator-->
    <link rel="stylesheet" href="validator/dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="validator/dist/js/bootstrapValidator.min.js"></script>


    <style>
      #map_canvas {
        width: 600px;
        height: 400px;
      }
    </style>
	
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(41.634245,-93.770085),
            zoom: 12,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: true,
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
            },
            scaleControl: true,
            scrollwheel: true,
            panControl: true,
            streetViewControl: true,
            draggable : true,
            overviewMapControl: true,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Dice Holdings', 'Dice is where I work', 'undefined', 'undefined', 'undefined', 41.643995,  -93.784339],['Tasty Tacos', 'Best Tacos Ever', 'undefined', 'undefined', 'undefined', 41.616411,  -93.735630]
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';            bindInfoWindow(marker, map, locations[i][0], description, telephone, email, web, link);
     }
 function bindInfoWindow(marker, map, title, desc, telephone, email, web, link) {
      var infoWindowVisible = (function () {
              var currentlyVisible = false;
              return function (visible) {
                  if (visible !== undefined) {
                      currentlyVisible = visible;
                  }
                  return currentlyVisible;
               };
           }());
           iw = new google.maps.InfoWindow();
           google.maps.event.addListener(marker, 'click', function() {
               if (infoWindowVisible()) {
                   iw.close();
                   infoWindowVisible(false);
               } else {
                   var html= "<div style='color:#000;background-color:#fff;padding:5px;width:150px;'><h4>"+title+"</h4><p>"+desc+"<p></div>";
                   iw = new google.maps.InfoWindow({content:html});
                   iw.open(map,marker);
                   infoWindowVisible(true);
               }
        });
        google.maps.event.addListener(iw, 'closeclick', function () {
            infoWindowVisible(false);
        });
 }
}
</script>
<style>
    #map {
        height:400px;
    }

</style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png" alt="Logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="slideshow.php">Slideshow</a></li>
			<li><a href="location.php">Location</a></li>
			<li><a href="mailer/contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>