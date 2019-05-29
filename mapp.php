<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      // VARIABLES:
      var searchQuery = "Police"; // Used in service.textSearch()
      var defaultLocation = {coords:{latitude:23.2599 , longitude:77.4126 }}; //Bhopal // Used when geolocation cannot acquire location even when user allowed location access.
      // var defaultLocation = {coords:{latitude:22.7196 , longitude:75.8577 }}; //Indore

      var map;
      var infowindow;

      function getGeolocation() {
        console.log("getGeolocation() Called");
        if (navigator.geolocation) {
          console.log("Geolocation supported");
          var geo_options = {
            enableHighAccuracy: true,
            maximumAge        : 30000,
            timeout           : 27000
            // timeout           : 5000
          };
          navigator.geolocation.getCurrentPosition(initMap,showError,geo_options);
          // navigator.geolocation.getCurrentPosition(initMap,showError);
        } else {
            // x.innerHTML = "Geolocation is not supported by this browser.";
            console.log("Geolocation is not supported by this browser.");
        }
      }


      function showError(error) {
        console.log("showError() Called");
          switch(error.code) {
              case error.PERMISSION_DENIED:
                  console.log("User denied the request for Geolocation.");
                  break;
              case error.POSITION_UNAVAILABLE:
                  console.log("Location information is unavailable.");
                  console.log("Using default location.");
                  initMap(defaultLocation);
                  break;
              case error.TIMEOUT:
                  console.log("The request to get user location timed out.");
                  console.log("Using default location.");
                  initMap(defaultLocation);
                  break;
              case error.UNKNOWN_ERROR:
                  console.log("An unknown error occurred.");
                  console.log("Using default location.");
                  initMap(defaultLocation);
                  break;
          }
      }

      // function initMap() {
      function initMap(position = defaultLocation) {
        console.log("initMap() Called");
        var location = {lat: position.coords.latitude, lng: position.coords.longitude};
        // console.log(location);
        map = new google.maps.Map(document.getElementById('map'), {
          center: location,
          zoom: 15
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);

        // service.nearbySearch({
        //   location: location,
        //   radius: 50000,
        //   type: ['hospital']
        // }, callback);

        service.textSearch({
          location: location,       // Biasing the results to this location
          radius: 50000,             // Biasing the results to specified circulare region (in meters)
          query: searchQuery        // Defind at the top of script for eash acces.
        }, callback);
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ8T2erXxMiPokXEmKwoYaTaAN2kEsFvM&libraries=places&callback=getGeolocation" async defer></script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ8T2erXxMiPokXEmKwoYaTaAN2kEsFvM&libraries=places&callback=initMap" async defer></script>
  </body>
</html>
