<?php
$nombreLugar = "Château de Talcy";
$ciudad = "Talcy";
$slug = "Talcy";
$descripcion = "El Château de Talcy es una elegante residencia renacentista del Valle del Loira, famosa por su arquitectura histórica y su vínculo con la poetisa Marie de Médicis. Sus muros guardan siglos de historia y un encanto rural único.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/5/5b/Chateau_de_Talcy_01.jpg";
$web_oficial = "https://www.chateau-talcy.fr";
$direccion = "Château de Talcy, 41120 Talcy, Francia";
$latitude = 47.6167;
$longitude = 1.5333;
$horario_apertura = "09:00";
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
