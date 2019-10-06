<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cal.lk Locations</title>
    <meta charset="utf-8"/>
    <style>
        /* Always set the map height explicitly to define the size of the div
        * element that contains the map. */
        #map {
            height: 500px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 90%;
            margin: 0;
            padding: 0;
        }
        
    </style>
    <script src="../JS/jquery.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!--<script async defer 
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-v011YwAGUt6GFSk1eTR6Df6OT7Rf8TA&call=success">
        </script>--> 
    <script src="../JS/API.js"></script>
</head>
<body>
<div class="container" role= "main">
    <div class="jumbotron text-center"style="padding-top:40px; padding-bottom:0px; background-color: transparent;" >
        <h2 >Tracker</h2>
    </div>
    <br/>
    <p id="map"></p>
    <!-- <button type="button" id="share-location" data-coor="" class="btn btn-primary" style="padding:10px">Send Current Location</button> -->
    <!-- <button type="button" class="btn btn-danger" style="padding:10px" >Reject</button> -->
    <div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Note : click your current location icon & Press ok
</div>

</div>
</body>
</html>