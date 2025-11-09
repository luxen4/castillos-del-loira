<!DOCTYPE html>
<html lang="es">

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/head/head-generico.php"; ?>


<body class="bg-gray-50 text-gray-800 ">

    <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-generico.php"; ?>

    <!-- 🔹 Header -->
    <header class="bg-emerald-700 text-white py-6 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">🏙️ Valle del Loira</h1>
            <nav class="flex gap-6">
                <a href="../index.php" class="hover:underline"><H1>Home</H1></a>
                <?php /* <a href="/val-de-loire/index.php#castillos-destacados" class="hover:underline">Castillos</a>
                <a href="../alojamientos.php" class="hover:underline">Alojamientos</a>
                <a href="../oficinas-turismo.php" class="hover:underline">Turismo</a> */?>
            </nav>
        </div>
    </header>

<!-- 🔹 Hero responsivo -->
<section
    class="relative bg-cover bg-center h-80 sm:h-96 md:h-[500px] lg:h-[600px] transition-transform duration-500 hover:scale-105 hover:brightness-110"
    style="background-image: url('<?= $imagenHero ?>');">

    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition duration-500 hover:bg-opacity-40">
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white font-extrabold text-center px-4">
            Bienvenido a <?= $ciudad ?>
        </h2>
    </div>
</section>


<nav class="bg-gray-100 py-4 shadow-inner mt-8 overflow-x-auto">
    <div class="container mx-auto px-6 flex gap-4 whitespace-nowrap text-gray-700">
        <a href="#gastronomia" class="hover:text-emerald-700 inline-block">🍴 Gastronomía</a>
        <a href="#paseos" class="hover:text-emerald-700 inline-block">🚶 Paseos</a>
        <a href="#actividades" class="hover:text-emerald-700 inline-block">⭐ Actividades</a>
        <a href="#acontecimientos" class="hover:text-emerald-700 inline-block">📅 Acontecimientos</a>
        <a href="#restaurantes" class="hover:text-emerald-700 inline-block">🍽️ Restaurantes</a>
        <a href="#alojamientos" class="hover:text-emerald-700 inline-block">🏨 Alojamientos</a>
        <a href="#transportes" class="hover:text-emerald-700 inline-block">🚗 Transportes</a>
        <a href="#fin-de-semana" class="hover:text-emerald-700 inline-block">📊 Fin de semana</a>
    </div>
</nav>



<!-- 🔹 Contenido Principal -->
<main class="container mx-auto px-6 py-12 grid lg:grid-cols-12 gap-10">

  <!-- 📢 ASIDE IZQUIERDO -->
  <aside class="space-y-8 hidden lg:block lg:col-span-2">

      <!-- 🔗 Enlaces útiles -->
      <?php if (!empty($enlaces)): ?>
          <section class="bg-white p-6 rounded-2xl shadow">
              <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
              <ul class="space-y-2">
                  <?php foreach ($enlaces as $enlace): ?>
                      <li>
                          <a href="<?= $enlace[1] ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">
                              <?= $enlace[0] ?>
                          </a>
                      </li>
                  <?php endforeach; ?>
              </ul>
          </section>
      <?php endif; ?>


      <!-- 💰 Publicidad lateral -->
      <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
          <p class="text-gray-500 text-sm mb-2">Publicidad</p>
          <div class="bg-white rounded-lg h-56 flex items-center justify-center">
              <span class="text-gray-400 text-sm">Espacio reservado (300x250)</span>
          </div>
      </div>

  </aside>

  <!-- 🏙️ ARTÍCULO PRINCIPAL -->
<article class="lg:col-span-7 overflow-y-auto" style="max-height: 80vh; padding-right: 1rem;">
      <h3 class="text-xl md:text-2xl lg:text-2xl font-bold text-emerald-700 mb-4">
          <?= $ciudad ?> en el Valle del Loira
      </h3>
      <p class="text-gray-700 mb-6"><?= $descripcion ?></p>

      <!-- 💰 Bloque publicitario intermedio -->
      <div class="bg-gray-100 border rounded-2xl p-4 my-8 text-center shadow-sm">
          <p class="text-gray-500 text-sm mb-2">Anuncio patrocinado</p>
      <!-- Carrusel Amazon -->
      <div class="w-full h-auto flex items-center justify-center px-2">
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico.php"; ?>
      </div>
      </div>

      <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/body/main/sections.php";?>

<!-- 🌆 Sección integrada en el contenido principal -->
<section id="ciudades" class="mt-10 text-gray-700 leading-relaxed">
  <h2 class="text-xl font-semibold text-gray-800 mb-4">🌆 Otras Ciudades del Valle del Loira</h2>

  <p class="mb-4">
    El Valle del Loira está salpicado de encantadoras ciudades que combinan historia, arte y paisajes únicos. 
    Entre las más destacadas se encuentran 
    <a href="/val-de-loire/ciudades/amboise.php" class="text-emerald-700 hover:underline">Amboise</a>, 
    conocida por su castillo real y su vínculo con Leonardo da Vinci; 
    <a href="/val-de-loire/ciudades/blois.php" class="text-emerald-700 hover:underline">Blois</a>, 
    con su imponente palacio renacentista y calles empedradas; y 
    <a href="/val-de-loire/ciudades/tours.php" class="text-emerald-700 hover:underline">Tours</a>, 
    una animada ciudad universitaria con un precioso casco antiguo.
  </p>

  <?php if (!empty($relacionadas)): ?>
  <p class="mb-4">
    También puedes descubrir otras localidades cercanas que comparten la misma riqueza cultural y arquitectónica, como 
    <?php
      $enlaces = [];
      foreach ($relacionadas as $rel) {
        $enlaces[] = '<a href="../ciudades/' . $rel[1] . '" class="text-emerald-700 hover:underline">' . $rel[0] . '</a>';
      }
      echo implode(', ', array_slice($enlaces, 0, -1)) . ' y ' . end($enlaces) . '.';
    ?>
  </p>
  <?php endif; ?>

  <p>
    Cada una de estas ciudades ofrece una experiencia distinta del Loira, 
    ya sea a través de sus castillos, jardines o su inconfundible estilo de vida francés.
  </p>
</section>

  </article>

  <!-- 📢 ASIDE DERECHO -->
  <aside class="space-y-8 lg:col-span-3">

      <!-- 📰 Noticias -->
      <section class="bg-white rounded-2xl shadow p-6">
          <h4 class="text-lg font-bold text-emerald-700 mb-4">🗞️ Actualidad del Loira</h4>
          <ul class="space-y-3 text-sm text-gray-700">
              <li><a href="#" class="hover:underline">Nueva exposición en el Castillo de Chambord</a></li>
              <li><a href="#" class="hover:underline">Festival de vinos en Saumur este fin de semana</a></li>
              <li><a href="orleans/actividades/rutas-ciclo-turisticas-orleans/index.php" class="hover:underline">Rutas cicloturísticas actualizadas 2025</a></li>
          </ul>
      </section>

      <!-- 💰 Publicidad lateral -->
      <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
          <p class="text-gray-500 text-sm mb-2">Publicidad</p>
          <div class="bg-white rounded-lg h-56 flex items-center justify-center">
              <span class="text-gray-400 text-sm">Espacio reservado (300x250)</span>
          </div>
      </div>

      <!-- 💰 Publicidad larga -->
      <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
          <p class="text-gray-500 text-sm mb-2">Anuncio patrocinado</p>
          <div class="bg-white rounded-lg h-60 flex items-center justify-center">
              <span class="text-gray-400 text-sm">Banner adaptable (300x600)</span>
          </div>
      </div>

  </aside>

</main>


<?php /*
    <!-- 🤝 Patrocinadores -->
    <section class="bg-emerald-50 py-10 mt-12">
        <div class="container mx-auto px-6 text-center">
            <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores del Valle del Loira</h4>
            <div class="flex flex-wrap justify-center gap-6">
                <img src="../img/patrocinador1.png" alt="Patrocinador 1" class="h-12" loading="lazy">
                <img src="../img/patrocinador2.png" alt="Patrocinador 2" class="h-12" loading="lazy">
                <img src="../img/patrocinador3.png" alt="Patrocinador 3" class="h-12" loading="lazy">
            </div>
        </div>
    </section>*/ ?>


    <script>
        feather.replace();
    </script>

    <!-- 🔹 Footer -->
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>

    <!-- 🔝 Botón ir arriba -->
    <button id="btnTop"
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition">
        ⬆️
    </button>

    <script>
        // Mostrar/ocultar botón al hacer scroll
        window.addEventListener("scroll", function() {
            const btn = document.getElementById("btnTop");
            if (window.scrollY > 300) {
                btn.classList.remove("hidden");
            } else {
                btn.classList.add("hidden");
            }
        });
    </script>

</body>
</html>
</html>
