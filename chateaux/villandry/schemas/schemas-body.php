<?php
// Variables requeridas para Villandry
$nombreLugar = "Castillo de Villandry";
$descripcion = "El Castillo de Villandry, famoso por sus jardines renacentistas perfectamente diseñados, es una joya del Valle del Loira.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/6/6b/Villandry_Castle_France.jpg";
$web_oficial = "https://www.chateauvillandry.fr/";
$ciudad = "Villandry";
$direccion = "Place du Château, 37510 Villandry, Francia";
$latitude = 47.3456;
$longitude = 0.6263;
$horario_apertura = "09:00";
$horario_cierre = "18:00";
$slug = "Villandry";
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
  "url": "https://www.tusitioweb.com/val-de-loire/chateaux/<?= $slug ?>.php",
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "sameAs": [
    "<?= $web_oficial ?>",
    "https://www.facebook.com/TuPagina",
    "https://www.instagram.com/TuCuenta"
  ],
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
    ],
    "opens": "<?= $horario_apertura ?>",
    "closes": "<?= $horario_cierre ?>"
  }
}
</script>
