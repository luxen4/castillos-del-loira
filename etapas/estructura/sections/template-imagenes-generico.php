<!-- ✅ Galería -->
<div class="max-w-6xl mx-auto px-4"> <!-- evita invadir aside -->

<div class="grid grid-cols-1 md:grid-cols-1 gap-y-10 gap-x-6 mb-10 place-items-center">

    <?php foreach ($items_filtrados as $item): ?>
      <figure class="relative text-center w-full h-80 md:h-80 lg:h-96 hover:scale-105 transition duration-300">

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
          Fuente:
          <a href="<?= htmlspecialchars($item['fuente_href']); ?>" target="_blank" class="hover:underline">
            <?= htmlspecialchars($item['fuente']); ?>
          </a>
        </figcaption>

      </figure>
    <?php endforeach; ?>

  </div>

</div>
