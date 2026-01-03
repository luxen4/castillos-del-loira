<?php
$carpeta = "localidades"; $archivo_csv = "que-ver.csv"; $slug_filtrado_csv = $slug;
require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; //var_dump($items_filtrados);
?>
<section id="que-ver" class="my-16">
<h2 class="text-3xl font-bold text-emerald-700 mb-6 text-center">
    👀 Qué ver en <?= htmlspecialchars($nombreCiudad) ?>
</h2>

<!-- Tabla para escritorio -->
<div class="hidden md:block overflow-x-auto">
    <table class="w-full border border-emerald-200 rounded-lg overflow-hidden">
    <thead class="bg-emerald-700 text-white">
        <tr>
        <th class="p-3 text-left">Lugar</th>
        <th class="p-3 text-left">Descripción</th>
        <th class="p-3 text-left">Tipo</th>
        <th class="p-3 text-center">Info</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        <?php foreach ($items_filtrados as $item): ?>
        <tr class="border-t hover:bg-emerald-50 transition">
            <td class="p-3 font-semibold">
            <?= htmlspecialchars($item['icono']) ?> <?= htmlspecialchars($item['lugar']) ?>
            </td>
            <td class="p-3 text-gray-600"><?= htmlspecialchars($item['descripcion']) ?></td>
            <td class="p-3"><?= htmlspecialchars($item['tipo']) ?></td>
            <td class="p-3 text-center">
            <a href="lugares-interesantes/<?= htmlspecialchars($item['enlace']) ?>" target="_blank"
                class="text-emerald-600 underline hover:text-emerald-800">
                Ver
            </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

<!-- Tarjetas para móviles -->
<div class="md:hidden grid gap-4">
    <?php foreach ($que_ver as $item): ?>
    <article class="border rounded-xl p-4 shadow-sm bg-white">
        <h3 class="font-bold text-lg text-emerald-700 mb-1">
        <?= htmlspecialchars($item['icono']) ?> <?= htmlspecialchars($item['lugar']) ?>
        </h3>
        <p class="text-gray-600 text-sm mb-2">
        <?= htmlspecialchars($item['descripcion']) ?>
        </p>
        <div class="flex justify-between items-center text-sm">
        <span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded">
            <?= htmlspecialchars($item['tipo']) ?>
        </span>
        <a href="<?= htmlspecialchars($item['enlace']) ?>" target="_blank"
            class="text-emerald-600 underline">
            Más info
        </a>
        </div>
    </article>
    <?php endforeach; ?>
</div>
</section>