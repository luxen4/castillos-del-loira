<div class="flex flex-col min-h-screen">

  <main class="container mx-auto px-4 py-2 grid lg:grid-cols-12 gap-8">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block lg:col-span-3 space-y-6 max-w-[500px] overflow-hidden">
      <div class="bg-emerald-50 p-4 rounded-lg shadow w-full">
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>
      </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="lg:col-span-6 w-full max-w-full overflow-y-auto space-y-1 p-1">

      <nav class="text-sm flex items-center justify-between mt-1 mb-2 text-gray-600" aria-label="Breadcrumb">
        <!-- Breadcrumb a la izquierda -->
        <ol class="flex flex-wrap items-center gap-2">
          <li><a href="/val-de-loire/" class="hover:text-blue-600 transition-colors">🏰 Val-de-Loire</a></li>
          <li class="text-gray-400">/</li>
          <li><a href="/val-de-loire/index.php#castillos-imprescindibles" class="hover:text-blue-600 transition-colors">Chateaux</a></li>
          <li class="text-gray-400">/</li>
          <li><a href="/val-de-loire/chateaux/<?= $slug; ?>.php" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $nombreLugar; ?></a></li>
        </ol>

        <!-- Enlace del mapa a la derecha -->
        <a href="#" id="openMapLink"
          class="flex items-center gap-1 text-emerald-700 font-semibold underline hover:text-emerald-800 transition">

          <!-- Icono Google Maps -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
            class="w-5 h-5">
            <path fill="#4285F4" d="M187.5 0h-119C30.7 0 0 30.7 0 68.5v119C0 225.3 30.7 256 68.5 256h119c37.8 0 68.5-30.7 68.5-68.5v-119C256 30.7 225.3 0 187.5 0z" />
            <path fill="#34A853" d="M128 38c-33.1 0-60 26.9-60 60 0 46.5 60 120 60 120s60-73.5 60-120c0-33.1-26.9-60-60-60z" />
            <circle cx="128" cy="98" r="28" fill="#FBBC04" />
            <path fill="#EA4335" d="M188 98c0 33.1-26.9 60-60 60s-60-26.9-60-60 26.9-60 60-60 60 26.9 60 60z" />
          </svg> Google Maps
        </a>
      </nav>

      <!-- línea decorativa debajo, ancho completo -->
      <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>






      <!-- Modal Google Maps -->
      <div id="mapModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
        <div class="bg-white w-11/12 max-w-4xl rounded-2xl shadow-lg overflow-hidden relative animate-[fadeIn_0.2s_ease]">
          <!-- Botón cerrar -->
          <button id="closeMapBtn" class="absolute top-3 right-3 bg-white rounded-full shadow p-2 hover:bg-gray-100">✖</button>
          <!-- Contenedor del mapa -->
          <div class="w-full h-[70vh]">
            <iframe
              src="<?= $src_google_maps; ?>"
              class="w-full h-full"
              style="border:0;"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

      <article class="space-y-1 w-full max-w-full h-[148vh] overflow-y-auto p-1">




        <script>
          const mapModal = document.getElementById("mapModal");
          const openMapLink = document.getElementById("openMapLink");
          const closeMapBtn = document.getElementById("closeMapBtn");

          // Abrir modal al clicar el enlace
          openMapLink.addEventListener("click", (e) => {
            e.preventDefault(); // evita que el enlace navegue
            mapModal.classList.remove("hidden");
            mapModal.classList.add("flex");
          });

          // Cerrar modal
          closeMapBtn.addEventListener("click", () => {
            mapModal.classList.add("hidden");
            mapModal.classList.remove("flex");
          });

          // Cerrar al hacer clic fuera del contenido
          mapModal.addEventListener("click", (e) => {
            if (e.target === mapModal) {
              mapModal.classList.add("hidden");
              mapModal.classList.remove("flex");
            }
          });
        </script>
        <!-- Introducción -->
        <?php $slug_section = "informacion";
        require "chateaux-folders/{$slug}/{$slug_section}/data.php";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/introduccion-generico.php"; ?>









        <!-- Consejos -->
        <?php $slug_section = "consejos";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/consejos-generico.php"; ?>

        <!-- Publicidad intermedia -->
        <?php $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>


        <!-- Opiniones -->
        <?php $slug_section = "opiniones";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/opiniones-generico.php"; ?>

        <!-- FAQs -->
        <?php $slug_section = "faqs";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/faqs-generico.php"; ?>


        <?php $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>


        <!-- Visitas -->
        <?php $slug_section = "visitas";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/visitas-generico.php"; ?>

        <!-- Castillos cercanos -->
        <?php
        $archivo_csv = 'castillos-cercanos.csv';
        $slug_filtrado = $slug_castillos_cercanos_csv;
        require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php';
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-derecho/castillos-cercanos/template.php";
        ?>

      </article>

    </div>

    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block lg:col-span-3 max-w-[400px] w-full space-y-6">

      <!-- Publicidad lateral -->
      <div class="bg-gray-100 p-2 rounded-lg shadow text-center text-gray-500 w-full overflow-hidden">

        <?php $alineacion = 2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>






      </div>

      <?php /*
      <!-- Banner tours -->
      <div class="border border-gray-200 rounded-lg overflow-hidden w-full">
        <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Tours y actividades</h3>
        <a href="https://www.civitatis.com/es/affiliate-link" target="_blank" rel="nofollow">
          <img src="/val-de-loire/assets/banner-tours.jpg" alt="Reserva tours" class="w-full object-cover">
        </a>
        <p class="text-sm text-gray-600 mt-2 px-2 text-center">Descubre excursiones y actividades en el Valle del Loira.</p>
      </div> */ ?>
      <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>


    </aside>

  </main>
</div>

<style>
  @media (min-width: 1280px) {
    .container {
      max-width: 1900px;
      margin-left: auto;
      margin-right: auto;
    }
  }
</style>