<div class="bg-emerald-50 p-2 rounded-md shadow-sm">
  <h3 class="font-semibold text-emerald-700 text-center text-sm mb-1">🏰 Castillos cercanos</h3>

  <ul>
    <?php foreach ($castillos_cercanos as $c): ?>
      <li class="px-2 py-1 rounded transition hover:bg-emerald-100 cursor-pointer">
        <a href="/val-de-loire/chateaux/<?= $c['url'] ?>" class="flex items-center justify-between gap-2 w-full">
          <span class="text-emerald-700 text-sm font-medium"><?= $c['nombre'] ?></span>
          <span class="text-[11px] text-gray-500 whitespace-nowrap"><?= $c['descripcion'] ?></span>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>