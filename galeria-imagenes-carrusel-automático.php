  <!-- 🔹 Carrusel de imágenes del Castillo de Chenonceau -->
<section class="mt-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4 text-center">🎠 Galería del Castillo de Chenonceau</h2>

  <div id="carrusel" class="relative overflow-hidden w-full cursor-grab">
    <div id="carrusel-track" class="flex gap-4">
      <!-- Imágenes duplicadas para loop -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Ch%C3%A2teau_de_Chenonceau%2C_vue_depuis_le_Cher_01.jpg"
           alt="Castillo de Chenonceau"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
      <img src="https://cdn.getyourguide.com/img/location/5d0e1fd3f19b8.jpeg/88.jpg"
           alt="Galería sobre el río Cher"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
      <img src="https://www.viajeroscallejeros.com/wp-content/uploads/2021/10/castillo-de-chenonceau-3.jpg"
           alt="Jardines de Chenonceau"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
      <!-- Duplicadas para el efecto infinito -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Ch%C3%A2teau_de_Chenonceau%2C_vue_depuis_le_Cher_01.jpg"
           alt="Castillo de Chenonceau repetido"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
      <img src="https://cdn.getyourguide.com/img/location/5d0e1fd3f19b8.jpeg/88.jpg"
           alt="Galería sobre el río Cher repetida"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
      <img src="https://www.viajeroscallejeros.com/wp-content/uploads/2021/10/castillo-de-chenonceau-3.jpg"
           alt="Jardines de Chenonceau repetidos"
           class="w-full max-w-lg rounded-lg object-cover shadow-md select-none">
    </div>
  </div>
</section>

<style>
  #carrusel-track {
    width: max-content;
    animation: scroll-loop 40s linear infinite;
  }
  @keyframes scroll-loop {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  /* Pausar animación si se pasa el ratón */
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

  // Pausar animación
  function pauseAutoScroll() {
    track.style.animationPlayState = "paused";
    autoScrollPaused = true;
    clearTimeout(resumeTimeout);
    resumeTimeout = setTimeout(() => {
      track.style.animationPlayState = "running";
      autoScrollPaused = false;
    }, 4000); // 4 segundos antes de volver a correr
  }

  // Eventos de ratón
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
    const walk = (x - startX) * 2; // sensibilidad del arrastre
    track.scrollLeft = scrollLeft - walk;
  });

  // Eventos táctiles (móviles)
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