<?php $nombreLugar = "Noticias del Valle del Loira";
$descripcion = "Noticias y actualidad del Valle del Loira: eventos, guías, aperturas y consejos para visitar los castillos y ciudades del Loira.";
$keywords = "noticias Valle del Loira, eventos Valle del Loira, guías Valle del Loira, castillos Valle del Loira, turismo Valle del Loira, actualidad Loira, visitar Loira, consejos viaje Loira";
$carpeta = "general";
$slug = "noticias-val-de-loire";
$imagenHero = "https://www.turismovalledelloira.com/val-de-loire/assets/imagenes/noticias-val-de-loire/noticias-val-loira-hero.jpg";
$twitter = "@TuTwitter"; ?>

<?php
/*
  valle-loira-noticias.html
  Plantilla PHP + HTML + Tailwind para un sitio de noticias del Valle del Loira.
  - En el futuro puedes cargar noticias desde un CSV (ruta configurada más abajo).
  - CSV esperado: encabezado: title,date,excerpt,image,url
  - Si no hay CSV, se muestran noticias de ejemplo.
  - Imágenes pueden estar en /val-de-loire/uploads/news/... o URLs externas.
*/

// CONFIG
$csv_path = __DIR__ . '/data/news.csv'; // ruta de ejemplo para tu CSV local
$base_url_for_images = '/val-de-loire/uploads/news/'; // carpeta para imágenes locales

// Función para leer CSV (si existe)
function load_news_from_csv($path) {
  $items = [];
  if (!file_exists($path)) return $items;
  if (($handle = fopen($path, 'r')) !== false) {
    $header = null;
    while (($row = fgetcsv($handle, 10000, ',')) !== false) {
      if (!$header) { $header = $row; continue; }
      // Mapear columnas por nombre del encabezado (si existe)
      $map = array_combine($header, $row);
      $items[] = [
        'title' => $map['title'] ?? $row[0],
        'date' => $map['date'] ?? $row[1] ?? '',
        'excerpt' => $map['excerpt'] ?? $row[2] ?? '',
        'image' => $map['image'] ?? $row[3] ?? '',
        'url' => $map['url'] ?? $row[4] ?? '',
      ];
    }
    fclose($handle);
  }
  return $items;
}

// Cargar noticias (o fallback a muestras)
$news_items = load_news_from_csv($csv_path);
if (empty($news_items)) {
  $news_items = [
    [
      'title' => 'Festival de los Castillos 2025: programación y cómo llegar',
      'date' => '2025-07-12',
      'excerpt' => 'La temporada cultural del Valle del Loira arranca con conciertos, visitas nocturnas y actividades familiares en los principales châteaux.',
      'image' => 'https://woody.cloudly.space/app/uploads/adt-touraine/2025/03/thumbs/Chateau-Islette-belle-etoile-Credit_ADT_Touraine_JC-Coutand-2032-31-360x180.webp',
      'url' => '/val-de-loire/general/festival-castillos-2025-loira.php'
    ],
    [
      'title' => 'Cómo visitar el Château de Chambord: horarios y consejos',
      'date' => '2025-05-03',
      'excerpt' => 'Guía práctica para moverte por Chambord, aparcamientos, y qué ver si solo tienes medio día.',
      'image' => 'https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/2a3/-domaine-national-de-chambord.webp',
      'url' => '/val-de-loire/chateaux/chambord.php#visitas-informacion-util'
    ],
    [
      'title' => 'Rutas en bicicleta por el Loira: 5 recorridos imprescindibles',
      'date' => '2025-04-20',
      'excerpt' => 'Recorridos familiares y etapas para cicloturistas con puntos de interés, dificultades y alojamientos recomendados.',
      'image' => 'https://www.cyclespleinair.fr/uploads/loire-velo-parcours-65b77aca97325.webp',
      'url' => '/val-de-loire/general/rutas-bici-loira.php' /*'url' => '/val-de-loire/general/loire-a-velo.php'*/
    ],
  ];
}

// Helpers
function esc($s){ return htmlspecialchars($s, ENT_QUOTES); }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Noticias | Valle del Loira</title>
  <meta name="description" content="Noticias y actualidad del Valle del Loira: eventos, guías, aperturas y consejos para visitar los castillos y ciudades del Loira.">
  <meta name="robots" content="index,follow">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/enlaces-principales-generico.php'; ?>



<?php /*
$csv_path = $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/noticias/data/noticias.csv";
$noticias = [];

if (($handle = fopen($csv_path, "r")) !== false) {
    $header = fgetcsv($handle, 1000, ","); // leer columnas

    while (($row = fgetcsv($handle, 1000, ",")) !== false) {
        $noticias[] = array_combine($header, $row);
    }

    fclose($handle);
}
?>

<div class="grid md:grid-cols-3 gap-6 mt-8">
  <?php foreach ($noticias as $n): ?>
    <article class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
      
      <!-- Imagen -->
      <img src="/val-de-loire/noticias/img/<?php echo htmlspecialchars($n['imagen']); ?>" 
           alt="<?php echo htmlspecialchars($n['titulo']); ?>" 
           class="w-full h-44 object-cover">

      <!-- Contenido -->
      <div class="p-4 space-y-2">
        <h3 class="text-lg font-bold text-emerald-700">
          <?php echo htmlspecialchars($n['titulo']); ?>
        </h3>

        <p class="text-gray-600 text-sm">
          <?php echo htmlspecialchars($n['descripcion']); ?>
        </p>

        <p class="text-xs text-gray-400">
          📅 <?php echo date("d/m/Y", strtotime($n['fecha'])); ?>
        </p>

        <a href="<?php echo htmlspecialchars($n['enlace']); ?>" 
           target="_blank" 
           class="inline-block mt-2 text-emerald-700 font-semibold hover:underline">
          Leer más →
        </a>
      </div>
    </article>
  <?php endforeach; ?>
</div> */ ?>






  <main class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-6">

      <!-- ASIDE lateral (visible en desktop) -->
      <aside class="hidden lg:block lg:w-72 bg-white rounded-lg shadow p-4">
        <h4 class="font-semibold text-gray-700 mb-3">Destacados</h4>
        <ul class="space-y-2 text-sm text-gray-600">
          <li><a href="/val-de-loire/general/loire-a-velo.php" class="hover:underline">Rutas en bicicleta</a></li>
          <li><a href="/val-de-loire/general/castillos-abiertos-hoy.php" class="hover:underline">Castillos abiertos hoy</a></li>
          <li><a href="/val-de-loire/general/oficinas-turismo-val-de-loire.php" class="hover:underline">Oficinas de turismo</a></li>
        </ul>

                <?php 
        $numeroAleatorio=3; $archivoPublicidad='jeans_man'; $alineacion=2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-jeans-man.php"; ?>
      </aside>

      <!-- LISTA DE NOTICIAS (centro) -->
      <section class="flex-1">
        <div class="flex items-center justify-between mb-6">
          <h2 class="text-2xl font-bold text-emerald-700">Últimas noticias</h2>

          <div class="flex gap-2">
            <input id="search" type="search" placeholder="Buscar noticias..." class="px-3 py-2 rounded border" />
            <select id="filter" class="px-3 py-2 rounded border">
              <option value="">Todas</option>
              <option value="eventos">Eventos</option>
              <option value="guias">Guías</option>
            </select>
          </div>
        </div>

        <div id="news-grid" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <?php foreach ($news_items as $item): ?>
            <article class="bg-white rounded-lg shadow overflow-hidden">
              <a href="<?= esc($item['url']); ?>" class="block hover:opacity-90 transition">
                <div class="h-40 bg-gray-200 overflow-hidden">
                  <img src="<?= esc($item['image']); ?>" alt="<?= esc($item['title']); ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-4">
                  <h3 class="font-semibold text-lg text-emerald-700"><?= esc($item['title']); ?></h3>
                  <time class="text-xs text-gray-500"><?= esc($item['date']); ?></time>
                  <p class="mt-2 text-gray-700 text-sm"><?= esc($item['excerpt']); ?></p>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
        </div>

                            <?php $numeroAleatorio = 0;
        $archivoPublicidad = "botas_hombre";
        $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-botas-hombre.php"; ?>

        <!-- Paginación simple (placeholder) -->
        <div class="mt-8 flex justify-center">
          <nav class="inline-flex rounded-md shadow-sm" role="navigation">
            <a href="#" class="px-3 py-2 bg-white border">&laquo; Anterior</a>
            <a href="#" class="px-3 py-2 bg-white border">Siguiente &raquo;</a>
          </nav>
        </div>
      </section>

      <!-- ASIDE derecho (visible en desktop) -->
      <aside class="hidden lg:block lg:w-72 bg-white rounded-lg shadow p-4">
        <h4 class="font-semibold text-gray-700 mb-3">Apoya la web</h4>
        <div class="space-y-3 text-sm text-gray-600">
          <div class="bg-gray-100 p-2 rounded">...

          </div>
          <div class="bg-gray-100 p-2 rounded">
                    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

          </div>
        </div>
      </aside>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-emerald-700 text-white text-center py-6">
    <div class="container mx-auto px-4">
      <p>© 2025 Valle del Loira — Noticias y actualidad</p>
    </div>
  </footer>

  <script>
    // Toggle menú móvil
    document.getElementById('menu-toggle').addEventListener('click', function(){
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });


  </script>



<script>
document.addEventListener("DOMContentLoaded", () => {
  const searchInput = document.getElementById("search");
  const filterSelect = document.getElementById("filter");

  // Todas las tarjetas de noticias
  const cards = document.querySelectorAll("[data-category]");

  function filtrarNoticias() {
    const texto = searchInput.value.toLowerCase();
    const categoria = filterSelect.value;

    cards.forEach(card => {
      const titulo = card.querySelector("h3").textContent.toLowerCase();
      const desc = card.querySelector("p").textContent.toLowerCase();
      const cat = card.dataset.category;

      const coincideTexto =
        titulo.includes(texto) || desc.includes(texto);

      const coincideCategoria =
        categoria === "" || categoria === cat;

      if (coincideTexto && coincideCategoria) {
        card.classList.remove("hidden");
      } else {
        card.classList.add("hidden");
      }
    });
  }

  searchInput.addEventListener("input", filtrarNoticias);
  filterSelect.addEventListener("change", filtrarNoticias);
});
</script>



</body>
</html>
