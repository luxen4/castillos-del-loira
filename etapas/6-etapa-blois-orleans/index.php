<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ruta Valle del Loira: Blois – Orléans</title>
  <meta name="description" content="Descubre la ruta del Valle del Loira entre Blois y Orléans: castillos, ríos, historia y paisajes únicos.">
  <meta name="keywords" content="Valle del Loira, Blois, Orléans, castillos, turismo Francia, viaje">
  <meta name="author" content="TuNombre">

  <!-- Open Graph -->
  <meta property="og:title" content="Ruta Valle del Loira: Blois – Orléans">
  <meta property="og:description" content="Explora castillos y paisajes entre Blois y Orléans. Información práctica y fotos.">
  <meta property="og:image" content="img/logo.png">
  <meta property="og:type" content="website">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- 🎶 Música de fondo -->
  <audio id="bg-music" autoplay loop muted>
    <source src="../audio/musica-ambiental-1.mp3" type="audio/mpeg">
  </audio>

  <div class="fixed bottom-4 right-4">
    <button id="toggle-sound" class="px-4 py-2 bg-emerald-600 text-white rounded-full shadow-lg hover:bg-emerald-700 transition">
      🔊 Activar sonido
    </button>
  </div>

  <script>
    const audio = document.getElementById("bg-music");
    const btn = document.getElementById("toggle-sound");
    btn.addEventListener("click", () => {
      audio.muted = !audio.muted;
      btn.textContent = audio.muted ? "🔊 Activar sonido" : "🔈 Silenciar";
      if (!audio.muted) audio.play();
    });
  </script>

  <?php
  $etapa = 'Blois – Orléans';
  require "../estructura/header/enlaces-principales-generico.php"; ?>

  <?php
  $introduccion = '';

  ?>

  <!-- 🔹 Introducción -->
  <section class="container mx-auto px-2 py-1 text-center bg-emerald-50 rounded-lg shadow-lg mt-6">
    <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-700 mb-4">Ruta <br><?= $etapa; ?></h2>
    <p class="text-lg md:text-xl text-gray-700 mb-6">
      Esta etapa recorre el corazón del Loira, desde la ciudad histórica de Blois hasta la majestuosa Orléans, con castillos, ríos y paisajes que muestran la esencia de Francia.
    </p>



    <div class="bg-white px-4 py-4 rounded-lg shadow hover:scale-105 transition mb-6">
      <div class="text-center mb-4">
        <i class="fas fa-chess-rook text-emerald-600 text-2xl"></i>
        <span class="font-semibold block mt-2 text-lg md:text-xl">Castillos históricos</span>
         <p class="text-gray-600 text-sm md:text-base mt-1">
          Recorre fortalezas medievales y palacios renacentistas, como Chambord, Chenonceau o Amboise. <br>
          Descubre su arquitectura única, murallas, torres y salones que narran siglos de historia. <br>
          Ideal para quienes aman la historia y la fotografía de patrimonio arquitectónico.
        </p>
      </div>
        <?php
        $slug_actual = 'etapa-6-castillos-historicos'; // Cambia según la sección que quieras mostrar
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php"; 
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/etapas/estructura/sections/template-imagenes-generico.php";?>


      <div class="text-center mb-4">
        <i class="fas fa-chess-rook text-emerald-600 text-2xl"></i>
        <span class="font-semibold block mt-2 text-lg md:text-xl">Ríos y paisajes</span>
          <p class="text-gray-600 text-sm md:text-base mt-1">
            Admira el Loira y sus afluentes, pasea por jardines históricos junto a los castillos. <br>
            Contempla los viñedos y campos que cambian de color según la estación. <br>
            Ideal para fotos panorámicas inolvidables.
          </p>
      </div>
        <?php
        $slug_actual = 'etapa-6-rios-y-paisajes'; // Cambia según la sección que quieras mostrar
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php";
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/etapas/estructura/sections/template-imagenes-generico.php";?>








      </div>

      <!-- Vinos y gastronomía -->
      <div class="bg-white px-4 py-4 rounded-lg shadow hover:scale-105 transition mb-6">
        <div class="text-center mb-4">
          <i class="fas fa-wine-glass text-emerald-600 text-2xl"></i>
          <span class="font-semibold block mt-2 text-lg md:text-xl">Vinos y gastronomía</span>
          <p class="text-gray-600 text-sm md:text-base mt-1">
            Prueba los vinos de la región, desde tintos robustos hasta suaves blancos y espumosos. <br>
            Disfruta de quesos locales, pasteles y platos tradicionales franceses en los restaurantes y bodegas a lo largo de la ruta.
          </p>
        </div>
        <?php
        $slug_actual = 'etapa-6-vinos-y-gastronomia'; // Cambia según la sección que quieras mostrar
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php";
        require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/etapas/estructura/sections/template-imagenes-generico.php";?>

      </div>

  </section>



  <!-- 🔹 Mapa -->
  <section id="mapa" class="container mx-auto px-6 py-10">
    <h3 class="text-2xl font-bold text-emerald-700 mb-4 text-center">🗺️ Mapa de la ruta Blois – Orléans</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d978168.6647341252!2d1.903!3d47.600!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1759333355000!5m2!1ses!2ses"
      width="100%" height="450" class="rounded-lg shadow-md" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>

  <?php require "data.php"; ?>
  <?php require "../template-navegacion-etapas.php"; ?>

  <!-- 🔹 Footer -->
  <footer class="bg-gray-100 mt-12 py-6 text-center text-gray-600">
    <p>© 2025 Valle del Loira | <a href="../index.php" class="text-emerald-700 hover:underline">Inicio</a></p>
  </footer>

</body>

</html>