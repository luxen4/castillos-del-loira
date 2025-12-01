<?php
$web_site = "http://alayag82.kesug.com/val-de-loire/";
$nombreLugar = "Oficinas de Turismo";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- ✅ SEO Avanzado -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oficinas de Turismo Valle del Loira | Información turística</title>
  <meta name="description" content="Direcciones, webs y contacto de las Oficinas de Turismo en Nantes, Angers, Saumur, Tours, Amboise, Blois y Orleans.">
  <meta name="keywords" content="Valle del Loira, oficinas de turismo, información turística Francia, Loire Valley">
  <meta name="author" content="Tu Nombre">

  <!-- Open Graph -->
  <meta property="og:title" content="Oficinas de Turismo en el Valle del Loira">
  <meta property="og:description" content="Encuentra las oficinas de turismo oficiales en Nantes, Angers, Saumur, Tours y más.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://tusitio.com/img/oficinas-turismo-loira.jpg">
  <meta property="og:url" content="https://tusitio.com/oficinas.php">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Oficinas de Turismo Valle del Loira">
  <meta name="twitter:description" content="Información práctica y contacto de las oficinas de turismo en el Valle del Loira.">
  <meta name="twitter:image" content="https://tusitio.com/img/oficinas-turismo-loira.jpg">

  <!-- ✅ TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- ✅ Heroicons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- ✅ Favicon -->



  <link rel="icon" href="<?= $web_site; ?>/assets/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $web_site; ?>/assets/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $web_site; ?>/assets/logo.png">
  <link rel="apple-touch-icon" href="<?= $web_site; ?>/assets/logo.png">
</head>

<body class="bg-gray-50 text-gray-800">

<!-- 🔹 Header -->
<header class="bg-blue-700 text-white py-6 shadow-md relative">
  <div class="container mx-auto px-6 flex justify-between items-center">
    <!-- Logo + título -->
    <a href="/val-de-loire/index.php" class="flex items-center gap-3">
      <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain">
      <div class="flex flex-col">
        <h1 class="text-lg md:text-xl font-bold text-white leading-tight">Val de Loire</h1>
        <p class="text-xs md:text-sm font-medium text-white-200 border-l-4 border-emerald-200 pl-2 mt-1">🗺️ <?= $nombreLugar; ?></p>
      </div>
    </a>

    <!-- Botón hamburguesa móvil -->
    <button id="menuButton" class="md:hidden text-white focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
      </svg>
    </button>

    <!-- Navegación -->
    <nav id="navMenu" class="hidden flex-col md:flex md:flex-row gap-6 absolute md:static top-full left-0 w-full md:w-auto bg-blue-700 md:bg-transparent p-4 md:p-0 z-50">
      <a href="/val-de-loire/index.php" class="hover:underline py-1 md:py-0 block">🏠 Inicio</a>
      <a href="/val-de-loire/index.php#castillos-destacados" class="hover:underline py-1 md:py-0 block">🏰 Castillos</a>
      <a href="/val-de-loire/general/alojamientos.php" class="font-semibold underline py-1 md:py-0 block">🏨 Alojamientos</a>
    </nav>
  </div>
</header>

<script>
// Toggle del menú hamburguesa
const menuButton = document.getElementById('menuButton');
const navMenu = document.getElementById('navMenu');

menuButton.addEventListener('click', () => {
  navMenu.classList.toggle('hidden');
});
</script>


  <!-- 🔹 Hero -->
  <section class="container mx-auto px-2 py-2 text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-blue-700">Oficinas de Turismo</h2>
    <p class="mt-4 text-lg text-gray-600">Información oficial, contacto y mapas de las principales ciudades del Valle del Loira.</p>
  </section>

  <!-- 🔹 Layout 3 columnas con publicidad -->
  <main class="container mx-auto px-1 lg:px-6 py-1">

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

      <!-- 🔸 ASIDE IZQUIERDO (Publicidad) -->
      <aside class="hidden lg:flex flex-col gap-6">


        <nav class="mb-8"> <!--🔗 Navegación entre ciudades -->
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Navegación rápida</h3>

          <div class="space-y-1">
            <a href="#nantes" class="text-blue-600 hover:underline">🏙️ Nantes</a><br>
            <a href="#angers" class="text-blue-600 hover:underline">🏙️ Angers</a><br>
            <a href="#tours" class="text-blue-600 hover:underline">🏙️ Tours</a>
          </div>
        </nav>

       
          <?php $alineacion = 2;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
  
          <?php $alineacion = 2;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
  
      </aside>

<div class="lg:col-span-2 max-h-[95vh] overflow-y-auto space-y-12 px-1">

<?php
// Ruta al CSV
$csvFile =$_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/oficinas-de-turismo.csv';

// Leer CSV
$offices = [];
if (($handle = fopen($csvFile, "r")) !== false) {
    $header = fgetcsv($handle); // primera línea: cabeceras
    while (($row = fgetcsv($handle)) !== false) {
        $offices[] = array_combine($header, $row);
    }
    fclose($handle);
}
?>


<!-- Loop para generar cada sección -->
<main class="container mx-auto px-1 space-y-12">
<?php foreach ($offices as $index => $office): ?>
    <section>
        <h3 id="<?= $office['id'] ?>" class="text-2xl font-bold text-blue-600 mb-6">🏙️ <?= $office['city'] ?></h3>
        <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
            <h4 class="font-semibold text-lg">Oficina de Turismo de <?= $office['city'] ?></h4>
            <p class="text-sm text-gray-600 mt-2">Dirección: <?= $office['address'] ?></p>
            <p class="text-sm text-gray-600">Teléfono: <?= $office['phone'] ?></p>
            <div class="mt-3 flex gap-4 text-sm">
                <a href="<?= $office['web'] ?>" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
                <a href="<?= $office['maps'] ?>" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
            </div>
        </div>
    </section>

    <?php 
    // Publicidad cada 3 oficinas
    if (($index + 1) % 3 === 0): ?>
        <div class="block lg:hidden my-6">
            <?php 
            $alineacion = 4;
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; 
            ?>
        </div>
    <?php endif; ?>
<?php endforeach; ?>



      </div>

      <!-- 🔸 ASIDE DERECHO (Publicidad) -->
      <aside class="hidden lg:flex flex-col gap-6">

        <?php /*
      <div class="bg-white border rounded-lg shadow p-3 text-center">
                           <?php $alineacion = 2;
              require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </div>

      <div class="bg-white border rounded-lg shadow p-3 text-center">
        <small class="text-xs text-gray-400">Publicidad</small>
        <img src="https://via.placeholder.com/300x600?text=Skyscraper+4"
             class="mt-2 w-full rounded object-cover">
      </div> */ ?>
        <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

      </aside>

    </div>

  </main>


  <!-- Footer -->
  <footer class="mt-10 bg-blue-700 text-blue-100 pt-6 pb-6 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

      <!-- Columna izquierda -->
      <div>
        <p class="font-medium">© Agenda & Eventos del Valle del Loira</p>
        <?php /* <p class="mt-1">Alojamientos, Valle del Loira</p> */ ?>

<!-- Tu info -->
<p class="mt-3 text-sm text-gray-200">
  Web creada por 
  <a href="/val-de-loire/contacto.html" class="underline hover:text-white font-semibold">
    Adrián Laya García
  </a>
</p>

                  
      </div>

      <!-- Enlaces -->
      <div class="flex items-center gap-4">
        <a href="/val-de-loire/index.html" class="underline hover:text-white">Home</a>
        <?php /* <a href="#" class="underline hover:text-white">Aviso legal</a> */ ?>
      </div>

    </div>
  </footer>

  <script>
    feather.replace();
  </script>
</body>

</html>

<?php /* 
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
          <h4>Of. de turismo</h4>
          <nav class="row">
            <ul class="col-xl-6 col-lg-6 col-md-6">
              <li><a href="https://www.france-voyage.com/francia-ciudades/nantes-15607/oficina-turismo-nantes-metropole-7525.htm">Nantes</a>
              </li>
              <li><a href="https://www.minube.com/que_ver/francia/pais_del_loira/nantes">
                  <h6>Ciudad de Nantes</h6>
                </a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/angers-16905/oficina-turismo-angers-6616.htm#:~:text=Tel.%20%3A%20%2B33%202%2041,officedetourisme%40destination%2Dangers.com">Angers</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/saumur-17211/oficina-turismo-saumur-6996.htm">Saumur</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/chinon-12807/oficina-turismo-chinon-7821.htm">Chinon</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/langeais-12858/oficina-turismo-langeais-8087.htm">Langeais</a>
              </li>
            </ul>


            <ul class="col-xl-6 col-lg-6 col-md-6">
              <li><a href="https://www.france-voyage.com/francia-ciudades/tours-12992/oficina-turismo-tours-6496.htm">Tours</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/amboise-12739/oficina-turismo-amboise-5802.htm">Amboise</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/blois-14520/oficina-turismo-blois-7034.htm">Blois</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/orleans-15944/oficina-turismo-orleans-6280.htm">Orleans</a>
              </li>
            </ul>



          </nav>
        </div>



      </div> */
?>