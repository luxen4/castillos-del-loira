<?php $sitio_web = "https://alayag82.kesug.com/val-de-loire"; ?>
<head>
  <!-- ✅ SEO Avanzado -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title><?= $nombreLugar ?> | Valle del Loira</title>
  <meta name="description" content="<?= $descripcion ?>">
  <meta name="keywords" content="<?= $keywords ?>"><?php /* <meta name="keywords" content="<?= $ciudad ?>, Valle del Loira, turismo, Francia, castillos, visitas">  */ ?>
  <meta name="author" content="TuNombre o TuEmpresa">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">






  <!-- Canonical y multilenguaje -->
  <link rel="canonical" href="<?= $sitio_web; ?>/ciudades/<?= $slug_Mayuscula ?>.php">
  <link rel="alternate" hreflang="es" href="<?= $sitio_web; ?>/ciudades/<?= $slug ?>.php">
  <link rel="alternate" hreflang="fr" href="<?= $sitio_web; ?>/ciudades/<?= $slug ?>.php">
  <link rel="alternate" hreflang="en" href="<?= $sitio_web; ?>/ciudades/<?= $slug ?>.php">


<!-- Favicon clásico -->
<link rel="icon" href="/val-de-loire/assets/favicon.ico" type="image/x-icon">

<!-- Para navegadores modernos -->
<link rel="icon" type="image/png" sizes="32x32" href="/val-de-loire/assets/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="/val-de-loire/assets/favicon.png">

<!-- Para Apple (iPhone/iPad) -->
<link rel="apple-touch-icon" sizes="180x180" href="/val-de-loire/assets/favicon.png">


  <!-- Preload -->
  <link rel="preload" as="image" href="<?= $imagenHero ?>">
  <link rel="preload" as="font" href="/fonts/tu-font.woff2" type="font/woff2" crossorigin="anonymous">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= $nombreLugar ?> | Valle del Loira">
  <meta property="og:description" content="<?= $descripcion ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $sitio_web; ?>/ciudades/<?= $slug ?>.php">
  <meta property="og:image" content="<?= $imagenHero ?>">
  <meta property="og:site_name" content="Valle del Loira Turismo">
  <meta property="og:locale" content="es_ES">


    
    


  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $nombreLugar ?> | Valle del Loira"> <?php /* <meta name="twitter:title" content="<?= $ciudad ?> | Valle del Loira"> */?>
  <meta name="twitter:description" content="<?= $descripcion ?>">
  <meta name="twitter:image" content="<?= $imagenHero ?>">
  <meta name="twitter:site" content="<?= $twitter ?>">
  <meta name="twitter:creator" content="<?= $twitter ?>">



    <!-- ✅ TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ✅ Heroicons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="../img/favicon.png">

<head>



























  <!-- JSON-LD Schema.org -->
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
    "url": "<?= $sitio_web; ?>/ciudades/<?= $slug ?>.php",
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

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
    .hero:hover { transform: scale(1.05); transition: transform 0.5s ease; }
  </style>
</head>