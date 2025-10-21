<?php foreach ($items as $item): ?>
  <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
    <figure class="mb-3">
      <img src="<?= $item['imagen']['src'] ?>" 
           alt="<?= $item['imagen']['alt'] ?>" 
           class="rounded-lg mx-auto">
      <figcaption class="text-xs text-gray-400 mt-1">
        Fuente: <?= $item['imagen']['fuente_texto'] ?>
      </figcaption>
    </figure>
    <h3 class="text-xl font-semibold text-emerald-600 mb-2"><?= $item['titulo'] ?></h3>
    <p class="text-gray-600 text-sm text-left">
      <?= $item['descripcion'] ?>
      <a href="<?= $item['imagen']['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 font-medium hover:underline ml-1">
        Más info &rarr;
      </a>
    </p>
  </div>
<?php endforeach; ?>

