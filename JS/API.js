var watchID = null;
$(document).ready(function () {
    var optn = {
        enableHighAccuracy: TrackEvent,
        timeout: Infinity,
        maximumAge: 0
    };
    if (navigator.geolocation)
        navigator.geolocation.watchPosition(success, fail, optn);
    else
        $("p").html("HTML5 Not Supported");
    $("button").click(function () {

        if (watchID)
            navigator.geolocation.clearWatch(watchID);

        watchID = null;
        return false;
    });

});

function success(position) {
    var googleLatLng = new google.maps.LatLng(position.coords.latitude,
        position.coords.longitude);
    var mapOtn = {
        zoom: 16,
        center: googleLatLng,
        mapTypeId: google.maps.MapTypeId.ROAD
    };

    var Pmap = document.getElementById("map");
   
    var map = new google.maps.Map(Pmap, mapOtn);
    addMarker(map, googleLatLng, "CAL.lk",
        "User<br/>");
}

function addMarker(map, googleLatLng, title, content) {
    var markerOptn = {
        position: googleLatLng,
        map: map,
        title: title,
        animation: google.maps.Animation.DROP
    };
    // console.log(googleLatLng);

    

    var marker = new google.maps.Marker(markerOptn);

    var infoWindow = new google.maps.InfoWindow({
        content: content,
        position: googleLatLng
    });
    google.maps.event.addListener(marker, "click", function () {
        infoWindow.open(map);
        $.post("location_ins.php",
        {
          lat: googleLatLng.toJSON().lat,
          lng : googleLatLng.toJSON().lng 
          // position: googleLatLng
        //   var1 = JSON.stringify(latitude),
          // var2 = JSON.stringify(latitude),
        },
        function(data, status){
          alert("Data: " + data + "\nStatus: " + status);
        });
        console.log(googleLatLng.toJSON());
    });
}

function fail(error) {
    var errorType = {
        0: "Unknown Error",
        1: "Permission denied by the user",
        2: "Position of the user not available",
        3: "Request timed out"
    };

    var errMsg = errorType[error.code];

    if (error.code == 0 || error.code == 2) {
        errMsg = errMsg + " - " + error.message;
    }

    $("p").html(errMsg);
}