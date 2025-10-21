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
  "url": "https://www.tusitioweb.com/val-de-loire/orleans/<?= $slug ?>.php",
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
