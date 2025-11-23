<style>
  /* Ocultar scrollbar en WebKit (Chrome, Safari) */
  #carousel::-webkit-scrollbar {
    display: none;
  }

  /* Ocultar scrollbar en Firefox y Edge */
  .no-scrollbar {
    scrollbar-width: none;
    -ms-overflow-style: none;
  }
</style>

<section id="<?= $introduccion['id'] ?>">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?php //echo $introduccion['titulo'] 
                                                        ?>Información</h2>

  <?php if (!empty($introduccion['parrafos'])): ?>
    <?php foreach ($introduccion['parrafos'] as $parrafo): ?>
      <p class="text-gray-700 leading-relaxed mb-3">
        <?= $parrafo ?>
      </p>
    <?php endforeach; ?>
  <?php endif; ?>

  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?= $titulo ?></h2>
  <p class="text-gray-700 mb-4"><?= $texto ?></p>

  <div class="relative w-full overflow-hidden">

    <!-- CARRUSEL -->
    <div id="carousel"
      class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <?php foreach ($figuras as $fig): ?>
        <figure class="bg-white rounded-lg shadow overflow-hidden">
          <img src="<?= $fig['src'] ?>"
            alt="<?= $fig['alt'] ?>"
            class="w-full h-64 object-cover">

          <figcaption class="p-2 text-gray-600 text-sm text-center">
            <?= $fig['pie'] ?><br>
            Fuente:
            <a href="<?= $fig['fuente_url'] ?>" target="_blank" class="text-blue-600 underline">
              <?= $fig['fuente_texto'] ?>
            </a>
          </figcaption>
        </figure>
      <?php endforeach; ?>
      <?php require RUTA_ESTRUCTURA . "/paginas-castillos/main/galeria-imagenes-carrusel-automatico.php"; ?>

    </div>
  </div>

</section>
<script>
  const carrusel = document.getElementById("carousel");

  let velocidad = 0.6; // velocidad del movimiento automático
  let autoplay;
  let usuarioInteractuando = false;
  let timeoutReanudar;

  // movimiento continuo
  function moverCarrusel() {
    if (!usuarioInteractuando) {
      carrusel.scrollLeft += velocidad;
    }

    const maxScroll = carrusel.scrollWidth - carrusel.clientWidth;
    if (carrusel.scrollLeft >= maxScroll - 1) {
      carrusel.scrollTo({
        left: 0,
        behavior: "instant"
      });
    }

    autoplay = requestAnimationFrame(moverCarrusel);
  }

  // iniciar autoplay
  autoplay = requestAnimationFrame(moverCarrusel);

  // función para pausa y reanudar
  function pausarAutoplay() {
    usuarioInteractuando = true;
    clearTimeout(timeoutReanudar);

    timeoutReanudar = setTimeout(() => {
      usuarioInteractuando = false;
    }, 3000); // reanuda después de 3s sin interacción
  }

  // eventos que SÍ indican interacción real
  ["wheel", "touchmove", "mousedown"].forEach(evento => {
    carrusel.addEventListener(evento, pausarAutoplay);
  });
</script>



<?php /*
<section class="my-16">
  <h2 class="text-4xl font-extrabold text-emerald-700 text-center mb-3 tracking-tight">
    📍 Localización
  </h2>
  <p class="text-center text-gray-600 max-w-xl mx-auto mb-8">
    Consulta fácilmente dónde se encuentra este lugar en el mapa del Valle del Loira.
  </p>

  <div class="flex flex-col items-center">
    
    <!-- Botón elegante -->
    <button 
      id="openMapBtn"
      class="group mt-4 px-7 py-3 bg-gradient-to-r from-emerald-600 to-emerald-700 text-white 
             rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center gap-3"
    >
      <!-- Icono animado -->
      <svg class="w-6 h-6 group-hover:scale-110 transition" fill="none" stroke="currentColor" 
           stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>

      <span class="text-lg font-semibold">
        Ver mapa ampliado
      </span>
    </button>

    <!-- línea decorativa -->
    <div class="mt-6 w-24 h-1 bg-emerald-400 rounded-full"></div>

  </div>
</section>



<!-- Modal Google Maps (único) -->
<div id="mapModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
  <div class="bg-white w-11/12 max-w-4xl rounded-2xl shadow-lg overflow-hidden relative animate-[fadeIn_0.2s_ease]">

    <!-- Botón cerrar -->
    <button id="closeMapBtn"
      class="absolute top-3 right-3 bg-white rounded-full shadow p-2 hover:bg-gray-100"
    >
      ✖
    </button>

    <!-- Contenedor del mapa -->
    <div class="w-full h-[70vh]">
      <iframe 
        src="<?= $src_google_maps; ?>" 
        class="w-full h-full"
        style="border:0;"
        allowfullscreen
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>

  </div>
</div>

<style>
@keyframes fadeIn {
  from { opacity: 0; transform: scale(.95); }
  to { opacity: 1; transform: scale(1); }
}
</style>

<script>
  const mapModal = document.getElementById("mapModal");
  const openMapBtn = document.getElementById("openMapBtn");
  const closeMapBtn = document.getElementById("closeMapBtn");

  // Abrir modal
  openMapBtn.addEventListener("click", () => {
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
</script> */ ?>





