<?php
$nombreLugar = "Château de Chamerolles";
$ciudad = "Chilleurs-aux-Bois"; // localidad exacta del castillo
$slug = "chamerolles";
$descripcion = "El Château de Chamerolles es un elegante castillo renacentista cerca de Orleans, famoso por su arquitectura, jardines y museo del perfume.";
$imagenHero = "URL_DE_LA_IMAGEN_DEL_CASTILLO"; // reemplazar con imagen representativa
$web_oficial = "https://www.chamerolles.fr";
$direccion = "Château de Chamerolles, 45170 Chilleurs-aux-Bois, Francia";
$latitude = 48.032;  // coordenadas GPS aproximadas
$longitude = 2.222;
$horario_apertura = "09:30";
$horario_cierre = "18:00";
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "<?= $nombreLugar ?>",
  "description": "<?= $descripcion ?>",
  "image": "<?= $imagenHero ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= $direccion ?>",
    "addressLocality": "<?= $ciudad ?>",
    "addressCountry": "FR"
  },
  "url": "https://www.alayag82.kesug.com/val-de-loire/chateaux/<?= $slug ?>.php",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "<
