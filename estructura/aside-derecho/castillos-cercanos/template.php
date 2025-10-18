<div class="bg-emerald-50 p-4 rounded-lg shadow">
<h3 class="font-semibold text-emerald-700 mb-3 text-center">🏰 Castillos cercanos</h3>
<ul class="space-y-2">
    <?php foreach ($castillos_cercanos as $c): ?>
    <li class="flex flex-col">
        <a href="<?= $c['url'] ?>" class="text-emerald-700 font-semibold hover:underline transition"><?= $c['nombre'] ?></a>
        <span class="text-gray-600 text-sm mt-0.5"><?= $c['descripcion'] ?></span>
    </li>
    <?php endforeach; ?>
</ul>
</div>