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

   <!-- ✅ Verificación de Google -->
  <meta name="google-site-verification" content="64zT14bhNAiyx4jzOrlbe6Wd6efBXIs-UI7WD3frNBM" />

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

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8224668217749275" crossorigin="anonymous"></script>

</head>



<?php /* Esto es lo de las Playas //$url_amigable = isset($rutas) ? $rutas : null; ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Verificación Google Search Console -->
<meta name="google-site-verification" content="O4CyyseatW1WkLbzw9poeIPyF27Eik_tDlqrO0ank4o" />
<meta name="description" content="<?= DESCRIPTION; ?>">
<meta name="keywords" content="<?= KEYWORDS_CONTENT; ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="<?= AUTHOR; ?>">
<meta name="language" content="es">

<!-- Canonical a la página -->
<link rel="canonical" href="<?= PATH_DOMINIO_LUGAR_INTERES_INDEX; ?>" />
  

<!-- Verificación Seobility -->
<meta name="seobility" content="<?= SITE_VERIFICATION_CONTENT ?>" /> 

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?= TITLE; ?>">
<meta property="og:description" content="<?= DESCRIPTION; ?>">
<meta property="og:image" content="<?= $graph_Meta_Tags_property_image; ?>">
<meta property="og:url" content="<?= PATH_DOMINIO_URL; ?>">
<meta property="og:type" content="<?= $graph_Meta_Tags_property_type; ?>">
<meta property="og:site_name" content="<?= NAME_BLOG ?>" />
<meta property="og:locale" content="<?= IDIOMA_LOCAL; ?>">
<meta property="og:image:alt" content="<?= DESCRIPTION; ?>">
<meta property="og:image:width" content="<?= $graph_Meta_Tags_property_image_width; ?>">
<meta property="og:image:height" content="<?= $graph_Meta_Tags_property_image_height; ?>">
<meta property="og:author" content="<?= AUTHOR; ?>">
<meta property="og:updated_time" content="<?= HOY; ?>T08:00:00+01:00" />
<meta property="og:published_time" content="<?= HOY; ?>T08:00:00+01:00" />
<meta property="og:section" content="<?= $graph_Meta_Tags_property_section; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag2; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag3; ?>">

<!-- Artículo (Open Graph extension) -->
<meta property="article:published_time" content="<?= HOY; ?>T08:00:00+01:00" />
<meta property="article:modified_time" content="<?= HOY; ?>T08:00:00+01:00" />
<meta property="article:author" content="https://www.facebook.com/tu-pagina-o-autor" />
<meta property="article:section" content="<?= NAME_BLOG; ?>"/>
<meta property="article:tag" content="turismo <?= $localidad; ?>, turismo <?= $region; ?>, qué ver en <?= $localidad; ?>" />
<meta property="article:tag" content="monumentos de <?= $localidad; ?>, rutas y naturaleza en <?= $region; ?>, cultura y gastronomía en <?= $localidad; ?>" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="<?= SUMARY_LARGE_IMAGE; ?>">   
<meta name="twitter:site" content="<?= CARD_SITE; ?>">
<meta name="twitter:title" content="<?= TITLE; ?>">
<meta name="twitter:description" content="<?= DESCRIPTION; ?>">
<meta name="twitter:image" content="<?= $twitterCards_image; ?>">
<meta name="twitter:url" content="<?= $twitterCards_url;?>">

<!-- Pinterest -->
<meta property="pinterest:card" content="<?= SUMARY_LARGE_IMAGE; ?>">
<meta property="pinterest:title" content="<?= TITLE; ?>">
<meta property="pinterest:description" content="<?= DESCRIPTION; ?>">
<meta property="pinterest:image" content="<?= PATH_DOMINIO_LUGAR_IMAGEN_1; ?>">
<meta name="pinterest-rich-pin" content="true" />
<meta name="pinterest:site" content="<?= CARD_SITE; ?>">
<meta name="pinterest:author" content="<?= AUTHOR; ?>">
<meta name="pinterest:locale" content="<?= IDIOMA_LOCAL; ?>">
<meta name="pinterest:updated_time" content="<?= HOY; ?>T08:00:00+01:00" />
<meta name="pinterest:section" content="<?= $graph_Meta_Tags_property_section; ?>">
<meta name="pinterest:tag" content="<?= $graph_Meta_Tags_property_tag; ?>">
<meta name="pinterest:tag" content="<?= $graph_Meta_Tags_property_tag2; ?>">
<meta name="pinterest:tag" content="<?= $graph_Meta_Tags_property_tag3; ?>">
<!-- Favicon --> */ ?>