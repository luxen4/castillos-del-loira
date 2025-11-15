<!-- 🔹 Carrusel de imágenes del Castillo de Chenonceau -->
<section class="mt-1">
  <h3 class="text-xl sm:text-1xl md:text-3xl font-bold text-emerald-700 mb-4 text-center">Más imágenes <?= $nombreLugar; ?></h3>
  <div id="carrusel" class="relative overflow-hidden w-full cursor-grab">
    <div id="carrusel-track" class="flex gap-4">
      <?php
      $carpeta = 'chateaux';
      $slug_actual = 'castillo-chenonceau';
      $archivo_csv = 'csv-imagenes-carrusel-automatico.csv';
      require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; ?>

      <div class="flex gap-4">
        <?php foreach ($items_filtrados as $img): ?>
          <img src="<?= $img['src'] ?>"
            alt="<?= $img['alt'] ?>"
            class="w-32 h-32 object-cover rounded-lg shadow-md select-none">
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<style>
  #carrusel-track {
    width: max-content;
    animation: scroll-loop 40s linear infinite;
  }

  @keyframes scroll-loop {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  #carrusel:hover #carrusel-track {
    animation-play-state: paused;
  }
</style>

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
</script>