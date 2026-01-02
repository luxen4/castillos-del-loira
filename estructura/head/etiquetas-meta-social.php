
<!-- ✅ Open Graph / Facebook / LinkedIn Meta Tags -->
<meta property="og:title" content="<?= $title ?> | Valle del Loira">
<meta property="og:description" content="<?= $descripcion ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $web_site; ?>/<?= $carpeta; ?>/<?= $slug ?>.php">
<meta property="og:image" content="<?= $web_site; ?>/assets/logo.png">
<meta property="og:image:alt" content="<?= $descripcion; ?>">
<meta property="og:image:width" content="<?= $graph_Meta_Tags_property_image_width; ?>">
<meta property="og:image:height" content="<?= $graph_Meta_Tags_property_image_height; ?>">

<meta property="og:site_name" content="Valle del Loira Turismo">
<meta property="og:locale" content="es_ES">

<meta property="og:author" content="Adrián Laya García">
<meta property="og:updated_time" content="<?= date("Y-m-d"); ?>T08:00:00+01:00" />
<meta property="og:published_time" content="<?= date("Y-m-d"); ?>T08:00:00+01:00" />
<meta property="og:section" content="<?= $graph_Meta_Tags_property_section; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag2; ?>">
<meta property="og:tag" content="<?= $graph_Meta_Tags_property_tag3; ?>">

<!-- Artículo (Open Graph extension) -->
<meta property="article:published_time" content="<?= date("Y-m-d"); ?>T08:00:00+01:00" />
<meta property="article:modified_time" content="<?= date("Y-m-d"); ?>T08:00:00+01:00" />
<meta property="article:author" content="https://www.facebook.com/tu-pagina-o-autor" />
<meta property="article:section" content="Val de Loire"/>
<meta property="article:tag" content="turismo <?= $localidad; ?>, turismo <?= $region; ?>, qué ver en <?= $localidad; ?>" />
<meta property="article:tag" content="monumentos de <?= $localidad; ?>, rutas y naturaleza en <?= $region; ?>, cultura y gastronomía en <?= $localidad; ?>" />