<?php
// Château de Gien — Página avanzada
$nombreLugar = "Château de Gien";
$slug = "chateau-de-gien";
$ciudad = "Gien";
$descripcion = "El Château de Gien, situado a orillas del río Loira, destaca por su legado histórico como residencia real y su museo dedicado a la caza. Una referencia en el Valle del Loira.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/4/40/Chateau_de_Gien_-_Fa%C3%A7ade_sur_la_Loire.jpg";
$web_oficial = "https://es.wikipedia.org/wiki/Ch%C3%A2teau_de_Gien";
$latitude = 47.6919;
$longitude = 2.6064;
$direccion = "Place Jean Jaurès, 45500 Gien, Francia";
$horario_apertura = "10:00";
$horario_cierre = "18:00";
$keywords = "Château de Gien, Gien, castillo Loira, museo de la caza, Valle del Loira";

function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= esc($nombreLugar) ?> — <?= esc($ciudad) ?></title>
  <meta name="description" content="<?= esc($descripcion) ?>">
  <meta name="keywords" content="<?= esc($keywords) ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://www.tusitioweb.com/val-de-loire/chateaux/<?= esc($slug) ?>.php">

  <!-- Open Graph / Social -->
  <meta property="og:title" content="<?= esc($nombreLugar) ?>">
  <meta property="og:description" content="<?= esc($descripcion) ?>">
  <meta property="og:image" content="<?= esc($imagenHero) ?>">
  <meta property="og:url" content="https://www.tusitioweb.com/val-de-loire/chateaux/<?= esc($slug) ?>.php">
  <meta property="og:type" content="place">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@TuCuentaTwitter">

  <!-- Estilos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>
    body { background:#f7fafc; font-family:Inter, ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
    .container { max-width:1100px; margin:0 auto; padding:24px; }
  </style>
</head>
<body>
<main class="container">

  <!-- Hero -->
  <header class="bg-white rounded-2xl p-6 shadow mb-6 flex flex-col lg:flex-row items-center gap-6">
    <img src="<?= esc($imagenHero) ?>" alt="<?= esc($nombreLugar) ?>" class="w-full lg:w-1/2 h-64 object-cover rounded-md shadow-sm">
    <div class="lg:w-1/2">
      <h1 class="text-3xl font-bold text-emerald-700 mb-2"><?= esc($nombreLugar) ?></h1>
      <p class="text-gray-600 mb-4"><?= esc($descripcion) ?></p>
      <div class="text-sm text-gray-500">
        <svg class="inline-block h-5 w-5 text-emerald-600 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.866 0-7 3.134-7 7 0 1.657.67 3.157 1.757 4.243S9.343 20 11 20s3.157-.67 4.243-1.757S17 16.657 17 15c0-3.866-3.134-7-7-7z"/>
        </svg>
        <?= esc($direccion) ?>
      </div>
    </div>
  </header>

  <!-- Introducción -->
  <section class="bg-white rounded-2xl p-6 shadow mb-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">Introducción</h2>
    <p class="text-gray-700 leading-relaxed"><?= esc($descripcion) ?></p>
  </section>

  <!-- Historia & Arquitectura -->
  <section class="grid lg:grid-cols-2 gap-6 mb-6">
    <div class="bg-white rounded-2xl p-6 shadow">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">📜 Historia</h3>
      <p class="text-gray-700 leading-relaxed">
        El castillo tiene orígenes medievales y fue completamente transformado en estilo renacentista.  
        Su ubicación a orillas del Loira lo convirtió en pieza estratégica y residencia real durante los siglos XVI y XVII.
      </p>
    </div>
    <div class="bg-white rounded-2xl p-6 shadow">
      <h3 class="text-xl font-semibold text-gray-800 mb-2">🏛 Arquitectura</h3>
      <p class="text-gray-700 leading-relaxed">
        Fachada monumental, muros de sillería, torres elevadas y grandes ventanales renacentistas.  
        En su interior se aprecia una decoración clásica y colecciones dedicadas al arte de la caza.
      </p>
    </div>
  </section>

  <!-- Galería -->
  <section class="bg-white rounded-2xl p-6 shadow mb-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">📸 Galería</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php foreach($figuras as $f): ?>
        <figure class="bg-gray-50 rounded-lg p-2">
          <img src="<?= esc($f['src']) ?>" alt="<?= esc($f['alt']) ?>" class="w-full h-48 object-cover rounded-md">
          <figcaption class="text-xs text-gray-500 mt-2"><?= esc($f['pie']) ?> — Fuente: <a href="<?= esc($f['fuente']) ?>" class="underline hover:text-emerald-600" target="_blank" rel="noopener noreferrer"><?= esc($f['fuente_texto']) ?></a></figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Información práctica -->
  <section class="bg-white rounded-2xl p-6 shadow mb-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">ℹ️ Información práctica</h2>
    <ul class="list-inside list-disc space-y-2 text-gray-700">
      <li><strong>Dirección:</strong> <?= esc($direccion) ?></li>
      <li><strong>Horario:</strong> <?= esc($horario_apertura) ?> – <?= esc($horario_cierre) ?></li>
      <li><strong>Web oficial:</strong> <a href="<?= esc($web_oficial) ?>" class="underline hover:text-emerald-600" target="_blank" rel="noopener noreferrer"><?= esc($web_oficial) ?></a></li>
      <li><strong>Cómo llegar:</strong> Desde Gien centro o estación de tren; aparcamiento disponible cerca.</li>
    </ul>
  </section>

  <!-- Consejos -->
  <section class="bg-white rounded-2xl p-6 shadow mb-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">📌 Consejos</h2>
    <ul class="list-inside list-disc space-y-2 text-gray-700">
      <li>Visita temprano para aprovechar la luz del atardecer sobre el Loira.</li>
      <li>Combina con un paseo ribereño por el río para disfrutar del entorno.</li>
      <li>Consulta el horario del museo de la caza antes de planificar tu visita.</li>
    </ul>
  </section>

  <!-- Enlaces oficiales adicionales -->
  <section class="bg-white rounded-2xl p-6 shadow mb-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-3">🔗 Enlaces oficiales</h2>
    <ul class="space-y-2 text-gray-700">
      <li><a href="https://www.loirevalley.net/chateau-de-gien" class="underline hover:text-emerald-600" target="_blank" rel="noopener noreferrer">Sitio oficial Valle del Loira – Château de Gien</a></li>
      <li><a href="https://www.gien.fr/fr/le-chateau" class="underline hover:text-emerald-600" target="_blank" rel="noopener noreferrer">Ayuntamiento de Gien – Información sobre el castillo</a></li>
    </ul>
  </section>

  <!-- Footer -->
  <footer class="text-center text-sm text-gray-500 mt-12 mb-8">
    <p>© <?= date('Y') ?> — Página informativa no oficial. Fuente principal: <a href="<?= esc($web_oficial) ?>" class="underline hover:text-emerald-600"><?= parse_url(esc($web_oficial), PHP_URL_HOST) ?></a>.</p>
  </footer>

</main>

<!-- JSON-LD para SEO Avanzado -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Place",
  "name": "<?= esc($nombreLugar) ?>",
  "description": "<?= esc($descripcion) ?>",
  "image": [
    "<?= esc($imagenHero) ?>"
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?= esc($direccion) ?>",
    "addressLocality": "<?= esc($ciudad) ?>",
    "addressCountry": "FR"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": <?= $latitude ?>,
    "longitude": <?= $longitude ?>
  },
  "url": "https://www.tusitioweb.com/val-de-loire/chateaux/<?= esc($slug) ?>.php",
  "sameAs": [
    "<?= esc($web_oficial) ?>",
    "https://www.loirevalley.net/chateau-de-gien",
    "https://www.gien.fr/fr/le-chateau"
  ],
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
    "opens": "<?= esc($horario_apertura) ?>",
    "closes": "<?= esc($horario_cierre) ?>"
  }
}
</script>

</body>
</html>
