<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alojamientos | Valle del Loira</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans leading-relaxed">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-6 shadow-md">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">🏨 Alojamientos del Valle del Loira</h1>
      <p class="text-emerald-100 mt-2">Encuentra hoteles, casas rurales y más para tu visita</p>
    </div>
  </header>

  <!-- Main -->
  <main class="container mx-auto px-6 py-12 flex justify-center">
    <section id="alojamientos" class="bg-white rounded-2xl shadow p-8 max-w-4xl w-full">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">🏨 Alojamientos en el Valle del Loira</h2>
      <p class="text-gray-600 text-center mb-8 max-w-3xl mx-auto">
        Descubre opciones de alojamiento en las principales ciudades del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, desde hoteles históricos hasta casas rurales con encanto.
      </p>

      <!-- 🟦 Placeholder de anuncio superior -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center mb-8">
        [Espacio publicitario superior]
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <!-- Columna izquierda -->
        <div>
          <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Oeste</h3>
          <ul class="space-y-3 text-gray-700">
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Nantes</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Angers</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Saumur</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Chinon</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Langeais</a></li>
          </ul>
        </div>

        <!-- Columna derecha -->
        <div>
          <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Este</h3>
          <ul class="space-y-3 text-gray-700">
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Tours</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Amboise</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Blois</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Orleans</a></li>
          </ul>
        </div>
      </div>

      <!-- 🟦 Placeholder de anuncio intermedio -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center my-8">
        [Espacio publicitario intermedio]
      </div>

      <div class="mt-10 text-center text-gray-500 text-sm">
        🏘️ Recomendamos reservar con antelación en temporada alta para asegurar disponibilidad.
      </div>

      <!-- 🔙 Botón Atrás centrado -->
      <div class="mt-6 mb-8 flex justify-center">
        <button 
          onclick="history.back()" 
          class="inline-flex items-center gap-2 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg shadow hover:bg-gray-300 hover:text-gray-900 transition">
          ⬅️ Atrás
        </button>
      </div>

      <!-- 🟦 Placeholder de anuncio inferior -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center mt-8">
        [Espacio publicitario inferior]
      </div>

    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-emerald-700 text-white text-center py-6 mt-10">
    <p>© 2025 Valle del Loira — Encuentra alojamiento y disfruta tu estancia 🇫🇷</p>
  </footer>

</body>
</html>


<?php
/**
 * sitio-alojamientos-val-de-loire.php
 * Plantilla única (PHP + Tailwind CDN) para mostrar alojamientos en el Valle del Loira.
 * - Lee un CSV llamado `alojamientos.csv` colocado en la misma carpeta.
 * - CSV esperado: header: id,name,slug,price,location,src,alt,short_description,amenities,url_affiliate
 * - Incluye: header, buscador, filtros básicos, listado con foreach (lectura CSV), aside con publicidad (Civitatis/Amazon/AdSense), footer.
 * - Instrucciones: subir `alojamientos.csv` y ajustar enlaces de afiliado y claves de AdSense si procede.
 */

// --- Función para leer CSV genérico y devolver array asociativo ---
function leer_csv($ruta) {
    $rows = [];
    if (!file_exists($ruta)) return $rows;
    if (($f = fopen($ruta, 'r')) !== false) {
        $header = fgetcsv($f);
        while (($line = fgetcsv($f)) !== false) {
            // Evitar líneas vacías
            if(count($line) < count($header)) continue;
            $rows[] = array_combine($header, $line);
        }
        fclose($f);
    }
    return $rows;
}

$alojamientos = leer_csv(__DIR__ . '/alojamientos.csv');

// Filtrado simple por búsqueda GET
$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$min_price = isset($_GET['min_price']) ? floatval($_GET['min_price']) : 0;
$max_price = isset($_GET['max_price']) ? floatval($_GET['max_price']) : 0;
$filtered = array_filter($alojamientos, function($a) use ($q, $min_price, $max_price) {
    if ($q) {
        $hay = stripos($a['name'] . ' ' . $a['short_description'] . ' ' . $a['location'], $q) !== false;
        if (!$hay) return false;
    }
    $price = floatval($a['price']);
    if ($min_price && $price < $min_price) return false;
    if ($max_price && $max_price > 0 && $price > $max_price) return false;
    return true;
});

// Paginación simple (client-side can be implemented later)

?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Alojamientos | Valle del Loira</title>
  <meta name="description" content="Alojamientos recomendados en el Valle del Loira: casas rurales, hoteles, chateaux y bed & breakfast cerca de Chenonceau, Chambord y Amboise.">

  <!-- Tailwind CDN (solo para prototipo) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Estilos complementarios */
    .card-image { min-height: 160px; }
    .link-like { text-decoration: underline; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 leading-relaxed">

<header class="bg-white shadow-sm">
  <div class="container mx-auto px-6 py-5 flex items-center justify-between">
    <a href="/val-de-loire/index.php" class="flex items-center gap-3">
      <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain">
      <div>
        <h1 class="text-lg font-bold text-emerald-700">Val de Loire</h1>
        <p class="text-xs text-gray-500">Alojamientos y guía del Valle del Loira</p>
      </div>
    </a>

    <nav class="hidden md:flex gap-4 items-center">
      <a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="text-sm hover:underline">Turismo</a>
      <a href="#alojamientos" class="text-sm hover:underline">🛎️ Alojamientos</a>
      <a href="/val-de-loire/contacto.html" class="text-sm hover:underline">Contacto</a>
    </nav>

    <div class="md:hidden">
      <button id="btn-menu" class="p-2 rounded bg-gray-100">Menu</button>
    </div>
  </div>
</header>

<main class="container mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

  <!-- CONTENIDO PRINCIPAL -->
  <section class="lg:col-span-3">

    <!-- Buscador y filtros -->
    <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
      <form method="get" class="flex flex-col md:flex-row gap-3 items-center">
        <input name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Buscar (nombre, localidad, descripción)" class="flex-1 p-3 border rounded" />
        <input name="min_price" value="<?= isset($_GET['min_price']) ? htmlspecialchars($_GET['min_price']) : '' ?>" type="number" min="0" step="1" placeholder="Precio min (€)" class="w-36 p-3 border rounded" />
        <input name="max_price" value="<?= isset($_GET['max_price']) ? htmlspecialchars($_GET['max_price']) : '' ?>" type="number" min="0" step="1" placeholder="Precio max (€)" class="w-36 p-3 border rounded" />
        <button class="bg-emerald-700 text-white px-4 py-2 rounded">Buscar</button>
      </form>
    </div>

    <!-- Listado de alojamientos -->
    <div id="alojamientos" class="grid grid-cols-1 sm:grid-cols-2 gap-6">

      <?php if (empty($filtered)): ?>
        <div class="col-span-full bg-white p-6 rounded shadow-sm text-center">
          <p class="text-gray-600">No se han encontrado alojamientos. Intenta con otros filtros.</p>
        </div>
      <?php endif; ?>

      <?php foreach ($filtered as $a): ?>
        <article class="bg-white rounded-lg shadow transition hover:shadow-lg overflow-hidden">
          <a href="<?= htmlspecialchars($a['url_affiliate'] ?: '#') ?>" target="_blank" rel="nofollow noopener" class="block">
            <div class="card-image bg-gray-100">
              <img loading="lazy" src="<?= htmlspecialchars($a['src']) ?>" alt="<?= htmlspecialchars($a['alt']) ?>" class="w-full h-40 object-cover">
            </div>
            <div class="p-4">
              <h3 class="font-semibold text-lg text-emerald-700"><?= htmlspecialchars($a['name']) ?></h3>
              <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($a['short_description']) ?></p>

              <div class="mt-3 flex items-center justify-between">
                <div class="text-xs text-gray-500">📍 <?= htmlspecialchars($a['location']) ?></div>
                <div class="text-sm font-bold">€<?= number_format(floatval($a['price']), 0, ',', '.') ?></div>
              </div>

              <div class="mt-3 flex gap-2">
                <?php
                  // Amenities (csv como lista separada por | )
                  $amen = isset($a['amenities']) ? explode('|', $a['amenities']) : [];
                  $amen = array_slice($amen, 0, 4);
                ?>
                <?php foreach ($amen as $it): ?>
                  <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-1 rounded"><?= htmlspecialchars($it) ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </a>
        </article>
      <?php endforeach; ?>

    </div>

  </section>

  <!-- ASIDE IZQUIERDO (pero aquí aparece a la derecha en orden visual en lg) -->
  <aside class="lg:col-span-1">

    <!-- Sticky container -->
    <div class="lg:sticky lg:top-6 space-y-6">

      <!-- CIVITATIS -->
      <div class="bg-white shadow rounded-xl p-4 border border-emerald-100">
        <h4 class="text-md font-semibold text-emerald-700 mb-3">Tours y entradas</h4>
        <a href="TU_ENLACE_AFILIADO_CIVITATIS" target="_blank" rel="nofollow">
          <img src="https://imagenes.civitatis.com/general/banners/freestanding/vertical-300x600-es.png" alt="Tours Valle del Loira" class="w-full rounded">
        </a>
        <p class="text-xs text-gray-500 mt-2">Excursiones y visitas guiadas alrededor de los castillos más famosos.</p>
      </div>

      <!-- AMAZON -- productos relacionados -->
      <div class="bg-white shadow rounded-xl p-4 border border-gray-100">
        <h4 class="text-md font-semibold text-gray-700 mb-3">Recomendados</h4>
        <a href="TU_LINK_AMAZON_1" class="flex gap-3 items-center" target="_blank" rel="nofollow noopener">
          <img src="https://m.media-amazon.com/images/I/71m7+6TSrYL._AC_UF1000,1000_QL80_.jpg" class="w-16 h-20 object-cover rounded shadow" alt="Guía Loira">
          <div class="text-sm">
            <div class="font-semibold">Guía del Valle del Loira</div>
            <div class="text-xs text-gray-500">Rutas y recomendaciones</div>
          </div>
        </a>
      </div>

      <!-- ADSENSE placeholder -->
      <div class="bg-white shadow rounded-xl p-4 border border-blue-100">
        <h4 class="text-md font-semibold text-blue-700 mb-3">Publicidad</h4>
        <!-- Pega aquí tu snippet de AdSense si lo deseas -->
        <div class="bg-gray-50 rounded p-6 text-center text-sm text-gray-400">Anuncio</div>
      </div>

    </div>
  </aside>

</main>

<!-- Footer -->
<footer class="bg-gray-800 text-gray-300 py-8 mt-12">
  <div class="container mx-auto px-6 text-center">
      <p>&copy; <?= date('Y'); ?> Val de Loire | Turismo</p>
      <p class="mt-2">
          <a href="mailto:superlaya50@gmail.com" class="hover:text-white">📧 superlaya50@gmail.com</a>
      </p>

      <ul class="mt-4">
          <li><a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="hover:underline">Oficinas de Turismo</a></li>
      </ul>
  </div>
</footer>

<!-- Pequeño script para menú móvil -->
<script>
  document.getElementById('btn-menu')?.addEventListener('click', function(){
    alert('Implementa aquí tu menú móvil o usa un offcanvas.');
  });
</script>

</body>
</html>
