<?php
$carpeta = 'chateaux';
$slug_actual = 'castillo-' . $slug;
$archivo_csv = 'csv-imagenes-carrusel-automatico.csv';
require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php';
?>

<?php if (!empty($items_filtrados)): ?>

<!-- 🔹 Botón para abrir modal -->
<div class="text-center my-4">
  <button id="openCarouselBtn"
          class="bg-emerald-700 text-white px-4 py-2 rounded shadow hover:bg-emerald-800 transition">
    Ver más imágenes
  </button>
</div>

<!-- 🔹 Modal -->
<div id="carouselModal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
  <div class="bg-white rounded-lg shadow-lg max-w-4xl w-full relative p-4">
    <!-- Botón cerrar -->
    <button id="closeCarouselBtn" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-xl font-bold">&times;</button>

    <!-- Carrusel -->
    <div id="carrusel" class="relative overflow-hidden w-full cursor-grab mt-2">
      <div id="carrusel-track" class="flex gap-4">

        <div class="flex gap-4">
          <?php foreach ($items_filtrados as $img): ?>
            <img src="<?= $img['src'] ?>"
                 alt="<?= $img['alt'] ?>"
                 class="w-32 h-32 object-cover rounded-lg shadow-md select-none">
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- 🔹 Estilos y animación -->
<style>
  #carrusel-track {
    width: max-content;
    animation: scroll-loop 40s linear infinite;
  }

  @keyframes scroll-loop {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }

  #carrusel:hover #carrusel-track {
    animation-play-state: paused;
  }
</style>

<!-- 🔹 Script para carrusel y modal -->
<script>
  const track = document.getElementById("carrusel-track");
  let isDown = false;
  let startX;
  let scrollLeft;
  let autoScrollPaused = false;
  let resumeTimeout;

  function pauseAutoScroll() {
    track.style.animationPlayState = "paused";
    autoScrollPaused = true;
    clearTimeout(resumeTimeout);
    resumeTimeout = setTimeout(() => {
      track.style.animationPlayState = "running";
      autoScrollPaused = false;
    }, 4000);
  }

  track.addEventListener("mousedown", (e) => {
    isDown = true;
    track.classList.add("cursor-grabbing");
    startX = e.pageX - track.offsetLeft;
    scrollLeft = track.scrollLeft;
    pauseAutoScroll();
  });
  track.addEventListener("mouseleave", () => {
    isDown = false;
    track.classList.remove("cursor-grabbing");
  });
  track.addEventListener("mouseup", () => {
    isDown = false;
    track.classList.remove("cursor-grabbing");
  });
  track.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - track.offsetLeft;
    const walk = (x - startX) * 2;
    track.scrollLeft = scrollLeft - walk;
  });

  let startTouchX;
  track.addEventListener("touchstart", (e) => {
    startTouchX = e.touches[0].clientX;
    pauseAutoScroll();
  });
  track.addEventListener("touchmove", (e) => {
    const moveX = e.touches[0].clientX;
    track.scrollLeft += (startTouchX - moveX);
    startTouchX = moveX;
  });

  // 🔹 Modal
  const openBtn = document.getElementById("openCarouselBtn");
  const closeBtn = document.getElementById("closeCarouselBtn");
  const modal = document.getElementById("carouselModal");

  openBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  });

  closeBtn.addEventListener("click", () => {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  });

  // Cerrar modal al click fuera del contenido
  modal.addEventListener("click", (e) => {
    if(e.target === modal){
      modal.classList.add("hidden");
      modal.classList.remove("flex");
    }
  });
</script>

<?php endif; ?>
