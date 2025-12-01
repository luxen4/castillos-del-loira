<?php  
$web_site = "https://alayag82.kesug.com/valle-del-loira/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
<title>Gastronomía del Valle del Loira 🍽️ | Quesos, vinos y cocina local</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Descubre la gastronomía del Valle del Loira: quesos regionales, vinos, repostería tradicional, platos típicos y mercados locales.">
<meta name="keywords" content="gastronomía Loira, comida Loira, quesos Loira, cocina francesa, mercados Valle del Loira, repostería Loira">
<meta name="robots" content="index, follow">

<link rel="canonical" href="<?= $web_site; ?>gastronomia">

<!-- Open Graph -->
<meta property="og:title" content="Gastronomía del Valle del Loira">
<meta property="og:description" content="Quesos, repostería, vinos y mercados locales del Valle del Loira.">
<meta property="og:image" content="https://alayag82.kesug.com/val-de-loira/assets/gastronomia.jpg">
<meta property="og:url" content="<?= $web_site; ?>gastronomia">
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
    <h1 class="text-3xl font-bold">🍽️ Gastronomía del Valle del Loira</h1>
    <p class="text-emerald-100 mt-1">Quesos locales, vinos, repostería y productos de mercado</p>
  </div>
</header>

<main class="max-w-5xl mx-auto px-4 py-10">

  <!-- INTRO -->
  <section class="mb-10">
    <h2 class="text-2xl font-bold text-emerald-700 mb-3">Sabores auténticos del Loira</h2>
    <p class="text-gray-700 leading-relaxed">
      La gastronomía del Valle del Loira combina **productos frescos**, tradición francesa y una identidad local muy marcada.
      Desde **quesos artesanales** hasta **pescados del Loira**, pasando por la **repostería histórica**, es una región perfecta para el turismo gastronómico.
    </p>
  </section>

  <!-- DESTACADOS -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🧀 Quesos del Loira</h3>
      <p class="text-sm text-gray-700">Incluye el mítico Sainte-Maure-de-Touraine, uno de los mejores quesos de cabra de Francia.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🐟 Pescado del Loira</h3>
      <p class="text-sm text-gray-700">Lucio, carpa, siluro y otras especies locales preparadas con recetas tradicionales.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🥐 Repostería regional</h3>
      <p class="text-sm text-gray-700">Rosquillas de Tours, tartas tradicionales y especialidades de convento.</p>
    </div>

  </section>

   <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

  <!-- LISTA DETALLADA -->
  <section>
    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Productos gastronómicos destacados</h2>

    <div class="space-y-6">

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">🧀 Sainte-Maure-de-Touraine</h3>
        <p class="text-gray-600">Queso de cabra con denominación de origen, uno de los más emblemáticos de Francia.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">🍯 Miel del Loira</h3>
        <p class="text-gray-600">Con notas florales procedentes de los bosques y riberas del valle.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">🐟 Friture du Loire</h3>
        <p class="text-gray-600">Pequeños pescaditos fritos, típicos de los pueblos ribereños.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">🥧 Tarte Tatin</h3>
        <p class="text-gray-600">Nacida en la región, uno de los postres más famosos del mundo.</p>
      </div>

    </div>
  </section>
<div class="mt-4">
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
</div>
</main>

<footer class="bg-gray-900 text-gray-200 text-sm py-8 mt-10">
  <div class="max-w-5xl mx-auto px-4">
    <p>© Valle del Loira — Gastronomía</p>
  </div>
</footer>

<!-- JSON-LD para FoodEstablishment -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "FoodEstablishment",
    "name" => "Gastronomía del Valle del Loira",
    "description" => "Quesos locales, foie, repostería tradicional y productos de mercado.",
    "url" => $web_site . "gastronomia",
    "image" => "https://alayag82.kesug.com/val-de-loire/assets/gastronomia.jpg",
    "servesCuisine" => [
        "Cocina tradicional francesa",
        "Especialidades del Loira"
    ],
    "address" => [
        "@type" => "PostalAddress",
        "addressRegion" => "Centro-Val de Loira",
        "addressCountry" => "FR"
    ],
    "sameAs" => [
        "https://www.valdeloire-france.com",
        "https://www.touraineloirevalley.com/"
    ],
    "datePublished" => date('c'),
    "dateModified" => date('c')
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

</body>
</html>
