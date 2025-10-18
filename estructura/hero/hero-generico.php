  <!-- Hero -->
  <figure class="relative h-[500px] md:h-[650px] hero bg-cover bg-center rounded-lg overflow-hidden"
    style="background-image:url('<?= $imagenHero ?>')">
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
      <h1 class="text-4xl md:text-5xl text-white font-extrabold text-center"><?= $nombreLugar ?></h1>
    </div>
    <figcaption class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center py-2 text-sm">
      Fuente:
      <span class="text-blue-300 cursor-help" title="<?= $web_oficial ?>">
        <?= $fuenteHero_texto ?>
      </span>
    </figcaption>
  </figure>