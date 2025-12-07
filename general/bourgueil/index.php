<?php  
$web_site = "https://alayag82.kesug.com/valle-del-loira/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
<title>Bourgueil 🍷 | Cuna del vino tinto del Valle del Loira</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Descubre Bourgueil: bodegas subterráneas, vinos Cabernet Franc y visitas guiadas en uno de los pueblos vitivinícolas más prestigiosos del Valle del Loira.">
<meta name="keywords" content="Bourgueil, vino Bourgueil, vino Loira, Cabernet Franc, bodegas Bourgueil, ruta del vino Francia">
<meta name="robots" content="index, follow">

<link rel="canonical" href="<?= $web_site; ?>bourgueil">

<!-- Open Graph -->
<meta property="og:title" content="Bourgueil — Cuna del vino tinto del Loira">
<meta property="og:description" content="Bodegas subterráneas, Cabernet Franc y rutas vinícolas en Bourgueil.">
<meta property="og:image" content="https://alayag82.kesug.com/val-de-loire/assets/bourgueil.jpg">
<meta property="og:url" content="<?= $web_site; ?>bourgueil">
<meta property="og:type" content="article">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<style>
html { scroll-behavior: smooth; }
</style>
</head>


<body class="bg-gray-50 text-gray-800">

<header class="bg-emerald-700 text-white py-6 shadow-lg">
  <div class="max-w-5xl mx-auto px-4">
    <h1 class="text-3xl font-bold">🍷 Bourgueil</h1>
    <p class="text-emerald-100 mt-1">Cuna del vino tinto del Valle del Loira (Cabernet Franc)</p>
  </div>
</header>

<main class="max-w-5xl mx-auto px-4 py-10">

  <!-- INTRO -->
  <section class="mb-10">
    <h2 class="text-2xl font-bold text-emerald-700 mb-3">Un pueblo dedicado al vino</h2>
    <p class="text-gray-700 leading-relaxed">
      Bourgueil es uno de los nombres más prestigiosos del Valle del Loira.  
      Sus vinos tintos, elaborados principalmente con **Cabernet Franc**, destacan por su elegancia, frescura y carácter frutal.
      El pueblo es conocido por sus **bodegas excavadas en roca tufa**, algunas con más de 1.000 años de historia.
    </p>
  </section>

  <!-- Imprescindibles -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🍇 Vino Cabernet Franc</h3>
      <p class="text-sm text-gray-700">Variedad estrella de Bourgueil, conocida por su sutileza aromática.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏺 Bodegas subterráneas</h3>
      <p class="text-sm text-gray-700">Cuevas trogloditas excavadas desde la Edad Media para crianza.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏞 Paisaje vitivinícola</h3>
      <p class="text-sm text-gray-700">Viñedos ondulados junto al río Loira, perfectos para paseos.</p>
    </div>

  </section>

    <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

  <!-- BODEGAS -->
  <section>
    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Bodegas recomendadas 🍷</h2>

    <div class="space-y-4">

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Domaine de la Butte</h3>
        <p class="text-gray-600">Uno de los productores más reconocidos de Cabernet Franc.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Domaine des Ouches</h3>
        <p class="text-gray-600">Bodega familiar con vinos potentes y expresivos.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Cave de la Dive Bouteille</h3>
        <p class="text-gray-600">Cuevas de tiza impresionantes con degustaciones históricas.</p>
      </div>

    </div>
  </section>
<div class="mt-4">
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
</div>
</main>

<footer class="bg-gray-900 text-gray-200 text-sm py-8 mt-10">
  <div class="max-w-5xl mx-auto px-4">
    <p>© Valle del Loira — Bourgueil</p>
  </div>
</footer>

<!-- JSON-LD para Winery -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "Winery",
    "name" => "Bourgueil",
    "description" => "Cuna del vino tinto del Valle del Loira; bodegas subterráneas y Cabernet Franc.",
    "url" => $web_site . "bourgueil",
    "address" => [
        "@type" => "PostalAddress",
        "addressLocality" => "Bourgueil",
        "addressRegion" => "Centro-Val de Loira",
        "addressCountry" => "FR"
    ],
    "image" => "https://alayag82.kesug.com/val-de-loire/assets/bourgueil.jpg",
    "sameAs" => [
        "https://www.vinsvaldeloire.fr/",
        "https://www.tourisme-bourgueil.fr/"
    ],
    "datePublished" => date('c'),
    "dateModified" => date('c')
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

</body>
</html>
