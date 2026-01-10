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

<!-- Layout principal -->
<main class="max-w-7xl mx-auto px-2 py-12 grid grid-cols-1 lg:grid-cols-12 gap-6">

  <!-- ASIDE IZQUIERDO -->
  <aside class="hidden lg:block lg:col-span-2 space-y-6">
    <div class="bg-white rounded-xl shadow p-4 text-center">
      <p class="text-xs text-gray-500 mb-2">Publicidad</p>
      <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
    </div>
  </aside>

  <!-- CONTENIDO CENTRAL -->
  <section id="alojamientos"
    class="lg:col-span-8 bg-white rounded-2xl shadow p-6">

    <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">
      🏨 Alojamientos en el Valle del Loira
    </h2>

    <p class="text-gray-600 text-center mb-8 max-w-3xl mx-auto">
      Descubre opciones de alojamiento en las principales ciudades del
      <a class="text-emerald-600 font-semibold underline hover:text-emerald-800 transition"
         href="/val-de-loire/index.php"><strong>Valle del Loira</strong></a>,
      desde hoteles históricos hasta casas rurales con encanto.
    </p>

    <!-- Anuncio superior -->
    <div class="my-6">
      <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
    </div>

    <div class="grid md:grid-cols-2 gap-8">

      <!-- Zona Oeste -->
      <div>
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Oeste</h3>
        <ul class="space-y-3">
          <li><a href="/val-de-loire/localidades/nantes/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Nantes</a></li>
          <li><a href="/val-de-loire/localidades/angers/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Angers</a></li>
          <li><a href="/val-de-loire/localidades/saumur/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Saumur</a></li>
          <li><a href="/val-de-loire/localidades/chinon/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Chinon</a></li>
          <li><a href="/val-de-loire/localidades/langeais/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Langeais</a></li>
        </ul>
      </div>

      <!-- Zona Este -->
      <div>
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Este</h3>
        <ul class="space-y-3">
          <li><a href="/val-de-loire/localidades/tours/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Tours</a></li>
          <li><a href="/val-de-loire/localidades/amboise/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Amboise</a></li>
          <li><a href="/val-de-loire/localidades/blois/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Blois</a></li>
          <li><a href="/val-de-loire/localidades/orleans/alojamientos/index.php" class="text-emerald-700 font-medium hover:underline">Orleans</a></li>
        </ul>
      </div>
    </div>

    <!-- Anuncio inferior -->
    <div class="my-8">
      <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
    </div>

    <div class="mt-6 text-center text-gray-500 text-sm">
      🏘️ Recomendamos reservar con antelación en temporada alta para asegurar disponibilidad.
    </div>

    <!-- Botón atrás -->
    <div class="mt-6 flex justify-center">
      <button onclick="history.back()"
        class="inline-flex items-center gap-2 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg shadow hover:bg-gray-300 transition">
        ⬅️ Atrás
      </button>
    </div>

  </section>

  <!-- ASIDE DERECHO -->
  <aside class="hidden lg:block lg:col-span-2 space-y-6">
    <div class="bg-white rounded-xl shadow p-4 text-center">
      <p class="text-xs text-gray-500 mb-2">Publicidad</p>
      <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
    </div>
  </aside>

</main>

<!-- Footer -->
<footer class="bg-emerald-700 text-white text-center py-6 mt-10">
  <p>© 2025 Valle del Loira — Encuentra alojamiento y disfruta tu estancia 🇫🇷</p>
</footer>

</body>
</html>




