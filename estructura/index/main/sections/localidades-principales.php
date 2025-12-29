<!-- 🏙️ Localidades principales -->
<?php
$archivo_csv = 'localidades.csv';
$slug_filtrado_csv = ""; $carpeta="localidades";
require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; ?>

<!-- Renderizado -->
<section id="localidades-principales" class="mt-10">
    <h3 class="text-2xl font-bold text-gray-700 mb-4">🏙️ Localidades principales del Valle del Loira</h3>
    <p class="text-gray-600 mt-2 text-sm md:text-base">
        Descubre las ciudades más importantes a lo largo del río Loira.
        Cada una posee un encanto especial: historia medieval, castillos, gastronomía y cultura francesa.
    </p>

    <?php foreach ($items as $item): ?>
        <a href="/val-de-loire/localidades/<?= mb_strtolower(trim($item['slug']), 'UTF-8'); ?>/index.php" class="text-emerald-700 hover:underline">
            <article class=" transition-all duration-200 hover:bg-emerald-50 hover:shadow-md hover:-translate-y-1 rounded-lg p-3">
                <header>
                    <h4 class="font-semibold text-gray-800"><?= $item['slug'] ?></h4>
                </header>

                <p class="text-gray-600 text-sm">
                    <?= $item['desc'] ?>
                </p>
            </article>
        </a>
    <?php endforeach; ?>
</section>