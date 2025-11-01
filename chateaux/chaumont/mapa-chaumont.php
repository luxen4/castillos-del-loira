<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Mapa - Chaumont-sur-Loire</title>
<style>
  #map {
    width: 100%;
    height: 350px;
    border-radius: 15px;
    border: 3px solid #059669;
  }
</style>
</head>
<body>

<h2>Chaumont-sur-Loire — Región destacada en el mapa</h2>
<div id="map"></div>

<script>
// ✅ La función debe estar en el scope global
function initMap() {
  const chaumont = { lat: 47.4784, lng: 1.1833 };

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: chaumont,
  });

  // ✅ Coordenadas del contorno (ejemplo aproximado)
  const areaChaumont = [
    { lat: 47.495, lng: 1.150 },
    { lat: 47.485, lng: 1.210 },
    { lat: 47.460, lng: 1.210 },
    { lat: 47.460, lng: 1.150 }
  ];

  const polygon = new google.maps.Polygon({
    paths: areaChaumont,
    strokeColor: "#059669",
    strokeOpacity: 0.9,
    strokeWeight: 3,
    fillColor: "#059669",
    fillOpacity: 0.25,
  });

  polygon.setMap(map);
}
</script>

<!-- ✅ Script actualizado con referrerpolicy -->
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY_AQUI&callback=initMap"
  referrerpolicy="no-referrer-when-downgrade">
</script>

</body>
</html>
