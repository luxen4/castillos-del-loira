
        <!-- Mostrar en HTML -->
        <div class="flex flex-col md:flex-row flex-wrap justify-center gap-6">
          <?php foreach ($items_filtrados as $item): ?>
            <figure class="relative text-center flex-1 min-w-[200px] h-80 md:h-80 lg:h-96 hover:scale-105 transition">
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