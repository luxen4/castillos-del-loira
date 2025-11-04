<div class="bg-emerald-50 p-2 rounded-md shadow-sm">
  <h3 class="font-semibold text-emerald-700 text-center text-sm mb-1">🏰 Castillos cercanos</h3>

  <ul>
    <?php foreach ($castillos_cercanos as $c): ?>
      <li class="px-2 py-1 rounded transition hover:bg-emerald-100 cursor-pointer">
        <a href="/val-de-loire/chateaux/<?= $c['url'] ?>" class="text-emerald-700 text-sm font-medium hover:underline">
          <?= $c['nombre'] ?>
        </a>
        <span class="block text-[11px] text-gray-500 leading-tight"><?= $c['descripcion'] ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
