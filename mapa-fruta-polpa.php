<!DOCTYPE html>
<html>

<head>
  <title>Add Map</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <link rel="stylesheet" type="text/css" href="./style.css" />
  <script type="module" src="./index.js"></script>
</head>
<style>
  #map {
    height: 600px;
    width: 100%;
  }
</style>

<body>
  <h3>My Google Maps Demo</h3>
  <div id="map"></div>
  <script>
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 6,
        center: {
          lat: -5.037178,
          lng: -42.792717
        },
      });

      const beaches = [{
          title: "Amapá",
          subtitle: "Estado do Amapá",
          lat: 1.6853618308968827,
          lng: -51.92856612894796,
          zIndex: 7,
        },
        {
          title: "Casa do Cairo",
          subtitle: "Cairo Codes Revendedor de Polpa",
          lat: -5.026852,
          lng: -42.808959,
          zIndex: 7,
        },
      ];


      for (let i = 0; i < beaches.length; i++) {
        const beach = beaches[i];
        const marker = new google.maps.Marker({
          position: {
            lat: beach.lat,
            lng: beach.lng
          },
          map,
          icon: {
            url: "./assets/img/mapicon.png",
            scaledSize: new google.maps.Size(64, 64), // Ajuste o tamanho conforme necessário
          },
          title: beach.title,
          zIndex: beach.zIndex,
        });

        const infowindow = new google.maps.InfoWindow({
          content: `<h3>${beach.title}</h3><p>${beach.subtitle}</p>`,
        });

        marker.addListener("click", () => {
          infowindow.open(map, marker);
        });
      }
    }
 
    window.initMap = initMap;
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet9s5aUCXCW8LCVn3GgnSixUcrXhSANc&callback=initMap&v=weekly" defer></script>
</body>

</html>