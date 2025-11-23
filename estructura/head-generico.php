<?php $sitio_web = "https://alayag82.kesug.com/val-de-loire"; ?>
<head>
  <!-- ✅ Título -->
  <title><?= $nombreLugar ?> | Valle del Loira</title>

  <!-- ✅ Meta básicos -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?= $descripcion ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <meta name="language" content="Spanish">
  <meta name="author" content="Adrián Laya García">
  <meta name="rating" content="General">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

  <!-- ✅ Canonical y multilenguaje -->
  <link rel="canonical" href="<?= $sitio_web; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">
  <link rel="alternate" hreflang="es" href="<?= $sitio_web; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">
  <link rel="alternate" hreflang="fr" href="<?= $sitio_web; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">
  <link rel="alternate" hreflang="en" href="<?= $sitio_web; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">

  <!-- ✅ Favicon -->
  <link rel="icon" href="<?= $sitio_web; ?>/assets/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $sitio_web; ?>/assets/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $sitio_web; ?>/assets/logo.png">
  <link rel="apple-touch-icon" href="<?= $sitio_web; ?>/assets/logo.png">

  <!-- ✅ Preload de recursos -->
  <link rel="preload" as="image" href="<?= $imagenHero ?>">
  <link rel="preload" as="font" href="/fonts/tu-font.woff2" type="font/woff2" crossorigin="anonymous">

  <!-- ✅ Open Graph / Facebook / LinkedIn -->
  <meta property="og:title" content="<?= $nombreLugar ?> | Valle del Loira">
  <meta property="og:description" content="<?= $descripcion ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $sitio_web; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">
  <meta property="og:image" content="<?= $sitio_web; ?>/assets/logo.png">
  <meta property="og:site_name" content="Valle del Loira Turismo">
  <meta property="og:locale" content="es_ES">

  <!-- ✅ Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= $nombreLugar ?> | Valle del Loira">
  <meta name="twitter:description" content="<?= $descripcion ?>">
  <meta name="twitter:image" content="<?= $imagenHero ?>">
  <meta name="twitter:site" content="<?= $twitter ?>">
  <meta name="twitter:creator" content="<?= $twitter ?>">

  <!-- ✅ TailwindCSS y Heroicons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- ✅ FontAwesome y Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <!-- ✅ Generador / Editor -->
  <meta name="generator" content="VS Code">

  <!-- ✅ Estilo adicional -->
  <style>
    html { scroll-behavior: smooth; }
  </style>

  <!-- ✅ Script adicional / tracking -->
  <script data-noptimize="1" data-cfasync="false" data-wpfc-render="false">
    (function () {
      var script = document.createElement("script");
      script.async = 1;
      script.src = 'https://tp-em.com/NDc0MTU3.js?t=474157';
      document.head.appendChild(script);
    })();
  </script>
</head>
