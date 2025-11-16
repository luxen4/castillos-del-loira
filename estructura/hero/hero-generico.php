<!-- 🔹 Hero con efecto hover -->
<figure class="relative h-[300px] sm:h-[400px] md:h-[500px] lg:h-[650px] hero bg-cover bg-center rounded-lg overflow-hidden"
        style="background-image:url('<?= $imagenHero ?>')">

  <!-- Overlay oscuro -->
  <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white font-extrabold text-center px-4">
      <?= $nombreLugar ?>
    </h1>
  </div>

  <!-- Fuente -->
  <figcaption class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center py-2 text-sm px-2">
    Fuente:
    <span class="text-blue-300 cursor-help" title="<?= $web_oficial ?>">
      <?= $fuenteHero_texto ?>
    </span>
  </figcaption>
</figure>
