<!DOCTYPE html>
<html>
      	<head>
            <title>Compassion In Need</title>
            <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="bootstrap.css">
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
            <script type="text/javascript" src="bootstrap.js"></script>
            <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
            <link rel="stylesheet" type="text/css" href="style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <style>
              /* Always set the map height explicitly to define the size of the div
               * element that contains the map. */
              #map {
                height: 800px;
                width: 100%;
              }
              /* Optional: Makes the sample page fill the window. */
              html, body {
                height: 100%;
                margin: 0;
                padding: 0;
              }
            </style>
              	
        </head>
        <body onload="initMap()">
<?php
require 'connections/dbconnect.php';
?>
<?php
session_start();

//if user logged in
if(isset($_SESSION["id"]))
{
}
else //user not logged in, redirect them to login
{
header('Location: login.php');
}
?>
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://www.compassioninneed.org" class="navbar-left navbar-brand"><img src="./img/compassion_in_need_logo.png" id="brand-image" alt="Website Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                        <li><a href="donate.php"><i class="fa fa-money" aria-hidden="true"></i> Donate</a></li>
                        <!-- <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Ideas</a></li>
                        <li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> Plans</a></li> -->
                        <li><a href="event.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Create Event</a></li>
                        <li><a href="events.php"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a></li>
                        <li><a href="map.php"><i class="fa fa-globe" aria-hidden="true"></i> Volunteers</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION["id"])) {} else {echo '<li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>';} ?>
                        <?php if(isset($_SESSION["id"])) {} else {echo '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>';} ?>
                        <li><a href="account.php"><i class="fa fa-id-card" aria-hidden="true"></i> Account</a></li>
                        <?php if(isset($_SESSION["id"])) {echo '<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';} ?>
                    </ul>
                </div>
            </div>
        </nav>
            <div class="container">
                <div id="homeContent">
                    <center><h2>Map of Events</h2></center>
                    <div id="map" style="color: black;"></div>
                    <script>

                      function initMap() {
                      var map = new google.maps.Map(document.getElementById('map'), {
                        center: new google.maps.LatLng(<?php echo $_SESSION["lat"]; ?>, <?php echo $_SESSION["lng"]; ?>),
                        zoom: 12
                      });
                      var infoWindow = new google.maps.InfoWindow;

                        // Change this depending on the name of your PHP or XML file
                        downloadUrl('makeEventMap.php', function(data) {
                          var xml = data.responseXML;
                          var markers = xml.documentElement.getElementsByTagName('marker');
                          Array.prototype.forEach.call(markers, function(markerElem) {
                            var num = markerElem.getAttribute('num');
                            var name = markerElem.getAttribute('name');
                            var info = markerElem.getAttribute('info');
                            var user_id = markerElem.getAttribute('user_id');
                            var point = new google.maps.LatLng(
                                parseFloat(markerElem.getAttribute('lat')),
                                parseFloat(markerElem.getAttribute('lng')));

                            var infowincontent = document.createElement('div');
                            var strong = document.createElement('strong');
                            strong.textContent = name
                            infowincontent.appendChild(strong);
                            infowincontent.appendChild(document.createElement('br'));

                            var text = document.createElement('text');
                            text.textContent = info
                            infowincontent.appendChild(text);
                            var marker = new google.maps.Marker({
                              map: map,
                              position: point,
                            });
                            marker.addListener('click', function() {
                              infoWindow.setContent(infowincontent);
                              infoWindow.open(map, marker);
                            });
                          });
                        });
                      }



                    function downloadUrl(url, callback) {
                      var request = window.ActiveXObject ?
                          new ActiveXObject('Microsoft.XMLHTTP') :
                          new XMLHttpRequest;

                      request.onreadystatechange = function() {
                        if (request.readyState == 4) {
                          request.onreadystatechange = doNothing;
                          callback(request, request.status);
                        }
                      };

                      request.open('GET', url, true);
                      request.send(null);
                    }

                    function doNothing() {}
                  </script>
                  <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxIprdLH7pVlHueJWmXA8GP2UvxtSsIJs&callback=initMap">
                  </script>
                </div>
            </div>
        </body>
</html>
