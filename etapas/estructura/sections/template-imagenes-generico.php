<!-- Galería -->
<div class="max-w-6xl mx-auto px-4"> <!-- ✅ evita que invada el aside y respeta el main -->

  <div class="flex flex-wrap justify-center gap-6 mb-5">

    <?php foreach ($items_filtrados as $item): ?>
      <figure class="relative text-center basis-[260px] flex-grow max-w-[330px] h-80 md:h-80 lg:h-96 hover:scale-105 transition duration-300">

        <!-- Nombre arriba -->
        <figcaption class="absolute top-2 left-1/2 transform -translate-x-1/2 bg-emerald-700 text-white px-2 py-1 rounded shadow z-10 font-semibold">
          <?= htmlspecialchars($item['nombre']); ?>
        </figcaption>

        <!-- Imagen -->
        <a href="<?= htmlspecialchars($item['href']); ?>" target="_blank">
          <img class="rounded-lg shadow h-full w-full object-cover"
               src="<?= htmlspecialchars($item['img']); ?>"
               alt="<?= htmlspecialchars($item['alt']); ?>">
        </a>

        <!-- Fuente abajo -->
        <figcaption class="text-emerald-600 text-sm mt-1">
          Fuente: <a href="<?= htmlspecialchars($item['fuente_href']); ?>" target="_blank" class="hover:underline">
            <?= htmlspecialchars($item['fuente']); ?>
          </a>
        </figcaption>

      </figure>
    <?php endforeach; ?>

  </div>

</div>
