<?php  
$web_site = "https://alayag82.kesug.com/valle-del-loira/";
?>
<!DOCTYPE html>
<html lang="es">

<head>
<title>Naturaleza y Espacios Protegidos del Valle del Loira 🌿 | Reservas y fauna</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Descubre reservas naturales, humedales, rutas verdes, aves migratorias y espacios protegidos del Valle del Loira.">
<meta name="keywords" content="naturaleza Loira, reservas naturales Loira, humedales Loira, aves migratorias, ríos Loira, miradores, parques naturales Francia">
<meta name="robots" content="index, follow">

<link rel="canonical" href="<?= $web_site; ?>naturaleza">

<!-- Open Graph -->
<meta property="og:title" content="Naturaleza y espacios protegidos del Valle del Loira">
<meta property="og:description" content="Reservas naturales, humedales, aves migratorias y rutas verdes del Loira.">
<meta property="og:image" content="https://alayag82.kesug.com/val-de-loira/assets/naturaleza.jpg">
<meta property="og:url" content="<?= $web_site; ?>naturaleza">
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
    <h1 class="text-3xl font-bold">🌿 Naturaleza y espacios protegidos del Valle del Loira</h1>
    <p class="text-emerald-100 mt-1">Humedales, aves migratorias, islas fluviales y reservas naturales</p>
  </div>
</header>

<main class="max-w-5xl mx-auto px-4 py-10">

  <!-- INTRO -->
  <section class="mb-10">
    <h2 class="text-2xl font-bold text-emerald-700 mb-3">Un valle vivo y protegido</h2>
    <p class="text-gray-700 leading-relaxed">
      El Valle del Loira no solo es famoso por sus castillos, también es uno de los ecosistemas fluviales 
      más importantes de Europa. Sus reservas naturales, humedales y bosques ribereños son refugio para 
      cientos de especies, especialmente aves migratorias.
    </p>
  </section>

  <!-- TARJETAS DESTACADAS -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🦆 Humedales del Loira</h3>
      <p class="text-sm text-gray-700">Zonas protegidas con gran biodiversidad y rutas señalizadas para observar fauna.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🦅 Aves migratorias</h3>
      <p class="text-sm text-gray-700">El Loira es uno de los corredores migratorios más importantes del continente.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🌳 Islas y bosques fluviales</h3>
      <p class="text-sm text-gray-700">Pequeñas islas salvajes y rutas verdes perfectas para fotografía y paseos.</p>
    </div>

  </section>

  <!-- SECCIÓN DETALLADA -->
  <section class="space-y-8">

    <div class="p-6 bg-white shadow rounded-xl border">
      <h3 class="text-xl font-semibold text-gray-800">🏞️ Reserva Natural de Saint-Mesmin</h3>
      <p class="text-gray-600 mt-2">Humedales, prados y bosques con rutas señalizadas. Ideal para ver aves y ciervos.</p>
    </div>

    <div class="p-6 bg-white shadow rounded-xl border">
      <h3 class="text-xl font-semibold text-gray-800">🦢 Isla de Oussières</h3>
      <p class="text-gray-600 mt-2">Isla natural accesible en ciertos periodos. Zona de descanso para aves migratorias.</p>
    </div>

    <div class="p-6 bg-white shadow rounded-xl border">
      <h3 class="text-xl font-semibold text-gray-800">🌿 Parque Natural Loire-Anjou-Touraine</h3>
      <p class="text-gray-600 mt-2">Uno de los parques más grandes del Loira, con senderos, miradores y visitas guiadas.</p>
    </div>

  </section>
<div class="mt-4">
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
</div>
</main>

<footer class="bg-gray-900 text-gray-200 text-sm py-8 mt-10">
  <div class="max-w-5xl mx-auto px-4">
    <p>© Valle del Loira — Naturaleza y espacios protegidos</p>
  </div>
</footer>

<!-- JSON-LD (TouristDestination) -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "TouristDestination",
    "name" => "Naturaleza y espacios protegidos del Loira",
    "description" => "Reservas naturales, humedales, aves migratorias y zonas fluviales protegidas.",
    "url" => $web_site . "naturaleza",
    "image" => "https://alayag82.kesug.com/val-de-loira/assets/naturaleza.jpg",
    "touristType" => "Amantes de la naturaleza, fotografía, senderismo y observación de aves",
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.3,
        "longitude" => 0.7
    ],
    "datePublished" => date('c'),
    "dateModified" => date('c')
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

</body>
</html>
