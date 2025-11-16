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
  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?php //echo $introduccion['titulo'] ?>Información</h2>

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

  <?php foreach($figuras as $fig): ?>
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
    carrusel.scrollTo({ left: 0, behavior: "instant" });
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