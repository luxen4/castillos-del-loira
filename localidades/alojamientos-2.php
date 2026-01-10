<?php
$title="Buscador | Alojamientos";

// --- Función para leer CSV genérico ---
function leer_csv($ruta) {
    $rows = [];
    if (!file_exists($ruta)) return $rows;
    if (($f = fopen($ruta, 'r')) !== false) {
        $header = fgetcsv($f);
        while (($line = fgetcsv($f)) !== false) {
            if(count($line) < count($header)) continue;
            $rows[] = array_combine($header, $line);
        }
        fclose($f);
    }
    return $rows;
}

// CSV alojamientos
$alojamientos = leer_csv($_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/alojamientos.csv');

// Parámetros GET
$q         = isset($_GET['q']) ? trim($_GET['q']) : '';
$min_price = isset($_GET['min_price']) && $_GET['min_price'] !== '' ? floatval($_GET['min_price']) : null;
$max_price = isset($_GET['max_price']) && $_GET['max_price'] !== '' ? floatval($_GET['max_price']) : null;

// Slug de la página (ejemplo: nantes)
$slug_actual = 'nantes';

$filtered = array_filter($alojamientos, function ($a) use ($q, $min_price, $max_price, $slug_actual) {
    // Filtrado obligatorio por slug
    if (empty($a['slug']) || $a['slug'] !== $slug_actual) return false;

    // Búsqueda por localidad (dropdown)
    if ($q !== '') {
        if (stripos($a['location'] ?? '', $q) === false) return false;
    }

    // Precio
    $price = isset($a['price']) && is_numeric($a['price']) ? floatval($a['price']) : 0;
    if ($min_price !== null && $price < $min_price) return false;
    if ($max_price !== null && $price > $max_price) return false;

    return true;
});

// Localidades disponibles (dropdown)
$localidades = ['Nantes','Angers','Saumur','Tours','Amboise','Blois','Chinon','Langeais','Orléans'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="Busca alojamientos en Nantes y otras localidades del Valle del Loira. Hoteles, casas rurales y B&B con precios y servicios.">
<script src="https://cdn.tailwindcss.com"></script>
<style>
.card-image { min-height: 160px; }
</style>
</head>
<body class="bg-gray-50 text-gray-800">

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

  <!-- ASIDE IZQUIERDO -->
  <aside class="lg:col-span-1 order-1 lg:order-1">
    <div class="lg:sticky lg:top-6 space-y-6">
      <div class="bg-white shadow rounded-xl p-4 border border-gray-100">
        <h4 class="text-md font-semibold text-emerald-700 mb-3">Recomendaciones por Localidades</h4>
        <ul class="text-sm space-y-1">
          <?php foreach($localidades as $loc): ?>
            <li><a href="/val-de-loire/localidades/<?= strtolower($loc) ?>/alojamientos/" class="hover:underline"><?= htmlspecialchars($loc) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="bg-white shadow rounded-xl p-4 border border-blue-100 text-center text-sm text-gray-400">
            <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </div>
    </div>
  </aside>

  <!-- CONTENIDO CENTRAL -->
  <section class="lg:col-span-2 order-2 lg:order-2">
    <!-- Buscador y filtros -->
    <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
      <form method="get" class="flex flex-col md:flex-row gap-3 items-center">
        <select name="q" class="flex-1 p-3 border rounded bg-white">
          <option value="">Todas las localidades</option>
          <?php foreach ($localidades as $loc): ?>
            <option value="<?= htmlspecialchars($loc) ?>" <?= ($q === $loc) ? 'selected' : '' ?>><?= htmlspecialchars($loc) ?></option>
          <?php endforeach; ?>
        </select>
        <input name="min_price" type="number" min="0" step="1" placeholder="Precio min (€)" value="<?= isset($_GET['min_price']) ? htmlspecialchars($_GET['min_price']) : '' ?>" class="w-36 p-3 border rounded" />
        <input name="max_price" type="number" min="0" step="1" placeholder="Precio max (€)" value="<?= isset($_GET['max_price']) ? htmlspecialchars($_GET['max_price']) : '' ?>" class="w-36 p-3 border rounded" />
        <button class="bg-emerald-700 text-white px-4 py-2 rounded">Buscar</button>
      </form>
    </div>

    <!-- Listado alojamientos -->
    <div id="alojamientos" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
      <?php if(empty($filtered)): ?>
        <div class="col-span-full bg-white p-6 rounded shadow-sm text-center">
          <p class="text-gray-600">No se han encontrado alojamientos con estos filtros.</p>
        </div>
      <?php endif; ?>

      <?php foreach($filtered as $a): ?>
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
                <div class="text-sm font-bold">€<?= number_format(floatval($a['price']),0,',','.') ?></div>
              </div>
              <div class="mt-3 flex gap-2">
                <?php
                  $amen = isset($a['amenities']) ? explode('|',$a['amenities']) : [];
                  $amen = array_slice($amen,0,4);
                  foreach($amen as $it): ?>
                    <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-1 rounded"><?= htmlspecialchars($it) ?></span>
                <?php endforeach; ?>
              </div>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
    </div>

    <div class="text-center">
        <img src="data:image/svg+xml,%3Csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 382 302' width='56' height='64'%3E%3Cpath d='M98.273 125.538c-5.904 0-10.574 4.553-10.574 10.574s4.67 10.574 10.574 10.574 10.574-4.553 10.574-10.574-4.67-10.574-10.574-10.574zm60.37-51.987h-37.392V55.594h33.329V37.637h-33.329V19.925h36.775V1.84h-56.944v89.795h57.561V73.551zm-41.668 54.2c5.904 0 10.574-4.553 10.574-10.574s-4.67-10.574-10.574-10.574-10.575 4.553-10.575 10.574 4.671 10.574 10.575 10.574zM38.498 93.475c13.042 0 24.478-6.638 31.243-16.85v15.01h17.713V41.701H39.977v17.222h19.925c-1.84 9.223-9.968 16.362-19.808 16.362-10.947 0-19.808-8.862-19.808-21.776V40.222c0-12.67 9.468-22.02 22.754-22.02 10.33 0 19.553 5.659 22.627 13.903l18.702-6.52C79.199 9.84 62.476 0 43.168 0 18.818 0 .606 16.361.606 40.222v13.287c.01 22.988 16.978 39.966 37.892 39.966zm172.909-66.401h-19.903v28.69h19.903v-28.69zM235.396 1.84h-68.147v18.085h68.147V1.84zM33.829 195.887h20.17v-34.063l33.817-55.721H65.061l-21.275 36.775-21.032-36.775H0l33.829 55.966v33.818zM211.407 62.923h-19.903v28.68h19.903v-28.68zM364.87 195.887l-24.478-34.318c11.936-3.692 20.297-14.149 20.297-26.935 0-16.234-13.403-28.542-30.382-28.542h-11.808v18.201h11.074c5.904 0 10.457 4.671 10.457 10.819 0 6.149-4.553 10.83-10.457 10.83h-11.074v17.222l21.893 32.723h24.478zm-99.964 14.35h-29.648v89.912h29.648c27.796 0 47.477-19.063 47.477-44.892 0-25.829-19.681-45.02-47.477-45.02zm1.595 71.827h-11.074v-53.753h11.074c15.01 0 25.212 11.563 25.212 26.935 0 15.372-10.202 26.818-25.212 26.818zm78.104-17.956h33.328v-17.957h-33.328v-17.712h36.775v-18.074h-56.945v89.784h57.562v-18.085h-37.392v-17.956zm-32.137-98.582-10.426-14.776 10.287-14.946-10.425-14.766 10.298-14.935-20.797.01-10.298 15.095 10.436 14.777-10.298 14.946 10.436 14.765-10.297 14.957 11.074 15.372h21.02l-11.308-15.542 10.298-14.957zm-45.924-4.564v-54.859h-20.053v55.232c0 10.329-7.383 17.957-17.467 17.957-10.085 0-17.468-7.628-17.468-17.957v-55.232h-20.052v54.859c0 21.159 15.872 36.776 37.52 36.776 21.648 0 37.52-15.627 37.52-36.776zM156.452 265.586c0 10.33-7.383 17.957-17.468 17.957-10.084 0-17.467-7.627-17.467-17.957v-55.232h-20.053v54.86c0 21.159 15.872 36.775 37.52 36.775 21.649 0 37.52-15.616 37.52-36.775v-54.86h-20.052v55.232zm-116.475 1.851h19.925c-1.84 9.223-9.968 16.361-19.808 16.361-10.946 0-19.807-8.861-19.807-21.775v-13.287c0-12.67 9.467-22.021 22.754-22.021 10.33 0 19.553 5.66 22.627 13.904l18.701-6.521c-5.17-15.744-21.892-25.584-41.2-25.584-24.35 0-42.563 16.361-42.563 40.222v13.287C.606 285.022 17.584 302 38.488 302c13.042 0 24.478-6.638 31.244-16.85v15.01h17.712v-49.935H39.977v17.212z' fill='%23F53'/%3E%3Cpath d='M132.102 104.252v18.946c14.765 0 26.446 12.053 26.446 27.797s-11.681 27.797-26.446 27.797c-14.755 0-26.446-12.053-26.446-27.797h-20.67c0 26.201 20.915 46.743 47.105 46.743 26.201 0 47.105-20.542 47.105-46.743 0-26.202-20.893-46.743-47.094-46.743zm82.497 148.377c2.978-2.691 7.968-7.191 7.968-15.435 0-8.245-4.99-12.744-7.968-15.436a9.787 9.787 0 0 0-.373-.33c-1.489-1.563-1.744-3.808-1.776-4.872v-6.319h-20.201v8.404h.01c0 .107-.01.202-.01.309 0 8.244 4.989 12.744 7.967 15.435 2.139 1.936 2.139 2.032 2.139 2.809 0 .776 0 .872-2.139 2.808-2.861 2.585-7.574 6.862-7.925 14.532h-.021c0 .148-.021.287-.021.425 0 .085.01.16.01.234 0 .085-.01.16-.01.234 0 .149.01.287.021.426h.021c.351 7.67 5.064 11.946 7.925 14.531 2.139 1.936 2.139 2.032 2.139 2.808 0 .777 0 .873-2.139 2.809-2.978 2.691-7.967 7.191-7.967 15.435 0 .107 0 .213.01.309h-.01v8.404h20.201v-6.319c.032-1.053.287-3.308 1.776-4.872.117-.107.234-.213.373-.33 2.978-2.691 7.968-7.191 7.968-15.436 0-8.244-4.99-12.744-7.968-15.435-1.904-1.713-2.117-1.989-2.138-2.564.021-.574.234-.851 2.138-2.564z' fill='%23F53'/%3E%3C/svg%3E" alt="Castillo del Loira" class="rounded-lg shadow">
        <p class="text-gray-500 text-xs mt-2 inline-flex items-center justify-center gap-1">
          🤝 <span>Colabora con nuestra web mediante estos enlaces</span>
        </p>
        <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
    </div>
  </section>

  <!-- ASIDE DERECHO -->
  <aside class="lg:col-span-1 order-3 lg:order-3">
    <div class="lg:sticky lg:top-6 space-y-6">
      <!-- CIVITATIS -->
      <div class="bg-white shadow rounded-xl p-4 border border-emerald-100">
        <h4 class="text-md font-semibold text-emerald-700 mb-3">Tours y entradas</h4>
        <a href="TU_ENLACE_AFILIADO_CIVITATIS" target="_blank" rel="nofollow">
          <img src="https://imagenes.civitatis.com/general/banners/freestanding/vertical-300x600-es.png" alt="Tours Valle del Loira" class="w-full rounded">
        </a>
        <p class="text-xs text-gray-500 mt-2">Excursiones y visitas guiadas alrededor de los castillos más famosos.</p>
      </div>

      <!-- AMAZON / Recomendados -->
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

      <div class="bg-white shadow rounded-xl p-4 border border-blue-100 text-center text-sm text-gray-400">
        <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </div>
      
    </div>
  </aside>

</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>

<script>
document.getElementById('btn-menu')?.addEventListener('click', function(){
  alert('Implementa aquí tu menú móvil o usa un offcanvas.');
});
</script>
</body>
</html>
