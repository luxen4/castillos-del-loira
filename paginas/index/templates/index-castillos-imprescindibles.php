<?php foreach ($castillos as $castillo) : ?>
    <a href="<?= $castillo['web_oficial'] ?>"
       target="_blank"
       class="text-emerald-700 font-semibold hover:underline mb-4 block">
        <figure class="relative rounded-lg overflow-hidden shadow-lg hover:scale-105 transition-transform duration-300">
            <figcaption class="absolute top-2 left-1/2 transform -translate-x-1/2 
                   bg-emerald-700/90 text-white px-3 py-1 rounded-md shadow-md
                   text-sm font-semibold z-10
                   w-11/12 text-center">
                <?= htmlspecialchars($castillo['nombre']); ?>
            </figcaption>

            <img src="<?= $castillo['imagen'] ?>"
                 alt="<?= htmlspecialchars($castillo['nombre']) ?>"
                 class="w-full h-72 object-cover rounded-lg">
        </figure>
    </a>
<?php endforeach; ?>

<div class="bg-emerald-50 p-2 rounded-md shadow-sm">
  <!-- CTA a todos los castillos -->
  <div class="mt-3 text-center">
    <a href="/val-de-loire/chateaux/index.php"
       class="inline-flex items-center gap-1 text-sm font-semibold text-white 
              bg-emerald-700 hover:bg-emerald-800 transition 
              px-3 py-1.5 rounded-full shadow">
      🗺️ Ver todos los castillos del Valle del Loira
    </a>
  </div>
</div>
