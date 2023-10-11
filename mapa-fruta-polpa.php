<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>

<head>
  <title>Add Map</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

  <link rel="stylesheet" type="text/css" href="./style.css" />
  <script type="module" src="./index.js"></script>
</head>
<style>
  /* Set the size of the div element that contains the map */
  #map {
    height: 400px;
    /* The height is 400 pixels */
    width: 100%;
    /* The width is the width of the web page */
  }
</style>

<body>
  <h3>My Google Maps Demo</h3>
  <!--The div element for the map -->
  <div id="map"></div>


  <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
  <script>
    // The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to (0,32) to correspond
// to the base of the flagpole.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: -33.9, lng: 151.2 },
  });

  setMarkers(map);
}

// Data for the markers consisting of a name, a LatLng and a zIndex for the
// order in which these markers should display on top of each other.
const beaches = [
  ["Bondi Beach", -33.890542, 151.274856, 4],
  ["Coogee Beach", -33.923036, 151.259052, 5],
  ["Cronulla Beach", -34.028249, 151.157507, 3],
  ["Manly Beach", -33.80010128657071, 151.28747820854187, 2],
  ["Maroubra Beach", -33.950198, 151.259302, 1],
];

function setMarkers(map) {
  // Adds markers to the map.
  // Marker sizes are expressed as a Size of X,Y where the origin of the image
  // (0,0) is located in the top left of the image.
  // Origins, anchor positions and coordinates of the marker increase in the X
  // direction to the right and in the Y direction down.
  const image = {
    url: "https://frutapolpa.com.br/assets/images/icone.png",
    // This marker is 20 pixels wide by 32 pixels high.
    // size: new google.maps.Size(20, 32),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32),
  };
  // Shapes define the clickable region of the icon. The type defines an HTML
  // <area> element 'poly' which traces out a polygon as a series of X,Y points.
  // The final coordinate closes the poly by connecting to the first coordinate.
  const shape = {
    coords: [1, 1, 1, 20, 18, 20, 18, 1],
    type: "poly",
  };

  for (let i = 0; i < beaches.length; i++) {
    const beach = beaches[i];

    new google.maps.Marker({
      position: { lat: beach[1], lng: beach[2] },
      map,
      icon: image,
      shape: shape,
      title: beach[0],
      zIndex: beach[3],
    });
  }
}

window.initMap = initMap;

    // function initMap() {
    //   const map = new google.maps.Map(document.getElementById("map"), {
    //     zoom: 4,
    //     center: { lat: -5.037178, lng: -42.792717 },
    //   });
    //   const image =
    //     "https://frutapolpa.com.br/assets/images/icone.png";
    //   const beachMarker = new google.maps.Marker({
    //     position: { lat: -5.037178, lng: -42.792717 },
    //     map,
    //     icon: image,
    //   });
    // }

    // window.initMap = initMap;
    // // Initialize and add the map
    // function initMap() {
    //   // The location of Uluru
    //   const uluru = { lat: -5.037178, lng: -42.792717 };
    //   // The map, centered at Uluru
    //   const map = new google.maps.Map(document.getElementById("map"), {
    //     zoom: 6,
    //     center: uluru,
    //   });

    //   // The marker, positioned at Uluru
    //   const marker = new google.maps.Marker({
    //     position: uluru,
    //     map: map,
    //   });

    // }

    window.initMap = initMap;
  </script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly"
    defer></script>
</body>

</html>