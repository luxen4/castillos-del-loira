<?php
/**
 * castillos-val-de-loire.php
 * Plantilla completa (PHP + Tailwind CDN) para listar TODOS los castillos del Valle del Loira.
 * - Lee un CSV llamado `castillos.csv` en la misma carpeta.
 * - CSV esperado (header): id,slug,name,short_description,location,region,year,src,alt,url
 * - Incluye: header (logo + menú), buscador, filtros por región, listado responsive con tarjetas, aside derecho sticky con afiliados, footer.
 * - Buenas prácticas: lazy-loading de imágenes, rel=nofollow en afiliados, evitar CLS.
 *
 * Instrucciones:
 * 1) Crea `castillos.csv` con las columnas indicadas.
 * 2) Coloca imágenes en `assets/` o usa URLs externas en la columna src.
 * 3) Ajusta enlaces de afiliados en el aside.
 */

// --- Función simple para leer CSV y devolver array asociativo ---
function leer_csv($ruta) {
    $rows = [];
    if (!file_exists($ruta)) return $rows;
    if (($f = fopen($ruta, 'r')) !== false) {
        $header = fgetcsv($f);
        while (($line = fgetcsv($f)) !== false) {
            if (empty($line) || count($line) < count($header)) continue;
            $rows[] = array_combine($header, $line);
        }
        fclose($f);
    }
    return $rows;
}

$castillos = leer_csv(__DIR__ . '/castillos.csv');

// Filtros y búsqueda simples
$q = isset($_GET['q']) ? trim($_GET['q']) : '';
$region = isset($_GET['region']) ? trim($_GET['region']) : '';

$regions_available = array_values(array_unique(array_map(function($c){ return $c['region']; }, $castillos)));

$filtered = array_filter($castillos, function($c) use ($q, $region) {
    if ($q) {
        $hay = stripos($c['name'].' '.$c['short_description'].' '.$c['location'], $q) !== false;
        if (!$hay) return false;
    }
    if ($region && $c['region'] !== $region) return false;
    return true;
});

// Orden básico por nombre
usort($filtered, function($a,$b){ return strcmp($a['name'],$b['name']); });

?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Castillos del Valle del Loira | Val de Loire</title>
  <meta name="description" content="Listado de castillos del Valle del Loira: Chenonceau, Chambord, Amboise y muchos más. Guía, fotos y enlaces.">

  <!-- Tailwind CDN (prototipo) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Pequeñas utilidades */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header (importa tu header si lo tienes en otro archivo) -->
<header class="bg-emerald-700 text-white shadow-md relative z-50">
  <div class="container mx-auto px-6 flex justify-between items-center py-4">
    <a href="/val-de-loire" class="flex items-center gap-2">
      <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-8 h-8 object-contain">
      <h1 class="text-xl font-bold">Val de Loire</h1>
    </a>

    <nav class="hidden md:flex md:items-center md:gap-6">
      <a href="/val-de-loire" class="hover:underline">Inicio</a>
      <a href="/val-de-loire/alojamientos-val-de-loire.php" class="hover:underline">Alojamientos</a>
      <a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="hover:underline">Turismo</a>
      <a href="/val-de-loire/contacto.html" class="hover:underline">Contacto</a>
    </nav>

    <div class="md:hidden">
      <button id="btn-menu" class="p-2 rounded bg-emerald-600">Menu</button>
    </div>
  </div>
</header>

<main class="container mx-auto px-6 py-8 grid grid-cols-1 lg:grid-cols-4 gap-8">

  <!-- Contenido principal: listado -->
  <section class="lg:col-span-3">

    <!-- Hero simple -->
    <div class="mb-6">
      <figure class="relative h-[360px] md:h-[460px] rounded-lg overflow-hidden bg-cover bg-center"
              style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Ch%C3%A2teaux_de_la_Loire_-_Karte.jpg/960px-Ch%C3%A2teaux_de_la_Loire_-_Karte.jpg')">
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center">
          <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl text-white font-extrabold">Castillos del Valle del Loira</h2>
            <p class="text-white mt-2 max-w-2xl">Explora nuestra lista completa: fotos, ubicación y enlaces para visitar.</p>
          </div>
        </div>
      </figure>
    </div>

    <!-- Buscador y filtros -->
    <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
      <form method="get" class="flex flex-col md:flex-row gap-3 items-center">
        <input name="q" value="<?= htmlspecialchars($q) ?>" placeholder="Buscar castillos, localidad..." class="flex-1 p-3 border rounded" />

        <select name="region" class="p-3 border rounded w-full md:w-64">
          <option value="">Todas las regiones</option>
          <?php foreach($regions_available as $r): ?>
            <option value="<?= htmlspecialchars($r) ?>" <?= $region === $r ? 'selected' : '' ?>><?= htmlspecialchars($r) ?></option>
          <?php endforeach; ?>
        </select>

        <div class="flex gap-2">
          <button class="bg-emerald-700 text-white px-4 py-2 rounded">Filtrar</button>
          <a href="?" class="px-4 py-2 border rounded text-gray-600">Reset</a>
        </div>
      </form>
    </div>

    <!-- Resultados -->

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php if (empty($filtered)): ?>
        <div class="col-span-full bg-white p-6 rounded shadow-sm text-center">
          <p class="text-gray-600">No se han encontrado castillos. Prueba otra búsqueda.</p>
        </div>
      <?php endif; ?>

      <?php foreach ($filtered as $c): ?>
        <article class="bg-white rounded-lg shadow overflow-hidden">
          <a href="/val-de-loire/castillo.php?slug=<?= urlencode($c['slug']) ?>" class="block">
            <img loading="lazy" src="<?= htmlspecialchars($c['src']) ?>" alt="<?= htmlspecialchars($c['alt']) ?>" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-emerald-700"><?= htmlspecialchars($c['name']) ?></h3>
              <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($c['short_description']) ?></p>

              <div class="mt-3 flex items-center justify-between text-xs text-gray-500">
                <div>📍 <?= htmlspecialchars($c['location']) ?></div>
                <div><?= htmlspecialchars($c['year']) ?></div>
              </div>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>

  </section>

  <!-- Aside derecho (sticky, solo desktop) -->
  <aside class="hidden lg:block lg:col-span-1">
    <div class="sticky top-20 space-y-6">

      <!-- Publicidad lateral (placeholder) -->
      <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
        [Publicidad lateral]
      </div>

      <!-- Banner vuelos (Kiwi) -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Busca tus vuelos</h3>
        <a href="https://c111.travelpayouts.com/click?shmarker=iddqd&promo_id=3612&source_type=customlink&type=click&custom_url=https%3A%2F%2Fwww.kiwi.com%2Fen%2Fsearch%2Ftiles/" target="_blank" rel="nofollow">
          <img src="/val-de-loire/assets/banner-vuelos.jpg" alt="Reserva vuelos" class="w-full object-cover">
        </a>
        <p class="text-sm text-gray-600 mt-2 px-2 text-center">Reserva tus vuelos y apoya nuestra web sin costo adicional.</p>
      </div>

      <!-- Banner tours (GetYourGuide) -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Tours y actividades</h3>
        <a href="https://getyourguide.tpo.lu/FPvBISCi" target="_blank" rel="nofollow">
          <img src="/val-de-loire/assets/banner-tours-valle-loira.jpg" alt="Reserva tours" class="w-full object-cover">
        </a>
        <p class="text-sm text-gray-600 mt-2 px-2 text-center">Descubre excursiones y actividades en el Valle del Loira.</p>
      </div>

      <!-- Castillos cercanos: include opcional -->
      <?php
      $nearPath = __DIR__ . "/chateaux/{$c['slug']}/aside-derecho/castillos-cercanos/data.php";
      if (file_exists($nearPath)) require $nearPath;
      ?>

    </div>
  </aside>

</main>

<!-- Footer -->
<footer class="bg-gray-800 text-gray-300 py-8 mt-12">
<!-- Autor vertical centrado con tooltip -->
<div class="flex flex-col items-center gap-1 group relative">
  <a href="/val-de-loire/contacto.html" class="flex flex-col items-center gap-1">
    <img src="/val-de-loire/assets/adrian.png"
         alt="Adrián Laya García"
         class="w-10 h-10 rounded-full border-2 border-white shadow-lg object-cover"
         title="superlaya50@gmail.com"> <!-- tooltip nativo -->
    <span class="text-sm text-white opacity-80">Adrián Laya García</span>
  </a>

  <!-- Tooltip personalizado (opcional, más elegante que title) -->
  <span class="absolute bottom-full mb-2 px-2 py-1 text-xs text-white bg-black rounded opacity-0 group-hover:opacity-100 transition-opacity">
    📧 superlaya50@gmail.com
  </span>
</div>




  <div class="container mx-auto px-6 text-center">
      <p>&copy; <?= date('Y'); ?> Val de Loire | Turismo</p>

      <ul class="mt-4 flex justify-center gap-6">
          <li><a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="hover:underline">Oficinas de Turismo</a></li>
          <li><a href="/val-de-loire/alojamientos-val-de-loire.php" class="hover:underline">Alojamientos</a></li>
      </ul>
  </div>
</footer>

<!-- Scripts: menú móvil sencillo -->
<script>
  document.getElementById('btn-menu')?.addEventListener('click', function(){
    alert('Implementa tu menú móvil aquí o integra el header dinámico.');
  });
</script>

</body>
</html>