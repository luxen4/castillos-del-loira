<?php  
$web_site = "https://alayag82.kesug.com/valle-del-loira/";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Ruta Oficial de Vinos del Valle del Loira 🍇 | Bodegas, catas y enoturismo</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta name="description" content="Descubre la Ruta Oficial de Vinos del Valle del Loira: bodegas abiertas, catas de Sauvignon Blanc, Touraine, Anjou, Chinon y recorridos entre viñedos históricos.">
<meta name="keywords" content="Vino Valle del Loira, Ruta de vinos, Enoturismo Francia, Bodegas Loira, Catas Loira, Sauvignon Blanc Loira">
<meta name="robots" content="index, follow">

<!-- Canonical -->
<link rel="canonical" href="<?= $web_site; ?>ruta-de-vinos">

<!-- Open Graph -->
<meta property="og:title" content="Ruta Oficial de Vinos del Valle del Loira">
<meta property="og:description" content="Bodegas, catas, viñedos y recorridos en el corazón del Valle del Loira.">
<meta property="og:image" content="https://alayag82.kesug.com/val-de-loire/assets/vinos-loira.jpg">
<meta property="og:url" content="<?= $web_site; ?>ruta-de-vinos">
<meta property="og:type" content="article">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<style>
html { scroll-behavior: smooth; }
</style>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- HEADER -->
<header class="bg-emerald-600 text-white py-6 shadow-lg">
  <div class="max-w-5xl mx-auto px-4">
    <h1 class="text-3xl font-bold">🍇 Ruta Oficial de Vinos del Valle del Loira</h1>
    <p class="text-emerald-100 mt-1">Descubre las mejores bodegas y catas en el corazón del Loira</p>
  </div>
</header>

<!-- CONTENIDO -->
<main class="max-w-5xl mx-auto px-4 py- mt-10">

  <!-- INTRO -->
  <section class="mb-10">
    <h2 class="text-2xl font-bold text-emerald-700 mb-3">Un recorrido entre viñedos históricos</h2>
    <p class="text-gray-700 leading-relaxed">
      La Ruta Oficial de Vinos del Valle del Loira te lleva a través de los viñedos más hermosos de Francia:
      bodegas familiares, cavas subterráneas, catas guiadas y pueblos medievales donde el vino es tradición viva.
    </p>
  </section>

  <!-- DESTACADOS -->
  <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🍷 Vinos emblemáticos</h3>
      <p class="text-sm text-gray-700">Sauvignon Blanc, Vouvray, Chinon, Anjou, Touraine y más.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏺 Catas & bodegas</h3>
      <p class="text-sm text-gray-700">Visita bodegas abiertas todo el año, algunas en cuevas trogloditas.</p>
    </div>

    <div class="bg-white p-5 shadow rounded-xl border">
      <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏞 Paisajes únicos</h3>
      <p class="text-sm text-gray-700">Rutas entre viñedos, ríos y pueblos medievales del Loira.</p>
    </div>
  </section>

  <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

  <!-- LISTA DE BODEGAS -->
  <section>
    <h2 class="text-2xl font-bold text-emerald-700 mb-4">Bodegas recomendadas 🥂</h2>
    <p class="text-gray-700 mb-8">
    Descubre algunas de las bodegas más emblemáticas del Valle del Loira. Cada una ofrece visitas guiadas, catas de vinos locales
    y una experiencia única entre viñedos históricos y cuevas trogloditas.
    </p>

    <div class="space-y-4">

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Domaine de la Taille aux Loups</h3>
        <p class="text-gray-600">Famosa por su Chenin Blanc y su carácter mineral único.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Caves Ambacia (Amboise)</h3>
        <p class="text-gray-600">Cuevas trogloditas del siglo XV con catas guiadas y gastronomía.</p>
      </div>

      <div class="p-5 bg-white shadow rounded-xl border">
        <h3 class="text-xl font-semibold text-gray-800">Domaine Huet (Vouvray)</h3>
        <p class="text-gray-600">Vinos biodinámicos entre los más prestigiosos del Loira.</p>
      </div>

    </div>
  </section>


<div class="mt-4">
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
</div>

</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-200 text-sm py-8 mt-1">
  <div class="max-w-5xl mx-auto px-4">
    <p>© Valle del Loira — Ruta Oficial de Vinos</p>
  </div>
</footer>

<!-- JSON-LD SEO -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "TouristTrip",
    "name" => "Ruta oficial de vinos del Valle del Loira",
    "description" => "Bodegas abiertas, catas y recorridos enológicos por el Valle del Loira.",
    "url" => $web_site . "ruta-de-vinos",
    "datePublished" => date('c'),
    "dateModified" => date('c'),
    "itemListElement" => [
        [
            "@type" => "Winery",
            "name" => "Ruta oficial de vinos del Valle del Loira",
            "url" => $web_site . "ruta-de-vinos"
        ],
        [
            "@type" => "Winery",
            "name" => "Bourgueil",
            "url" => $web_site . "bourgueil"
        ],
        [
            "@type" => "FoodEstablishment",
            "name" => "Gastronomía del Valle del Loira",
            "url" => $web_site . "gastronomia"
        ]
    ]
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

</body>
</html>
