<?php
$carpeta = "localidades"; $archivo_csv = "faqs.csv"; $slug_filtrado_csv = $slug;      //var_dump($slug);
require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; //var_dump($items_filtrados);
?>

<section id="faqs" class="max-w-5xl mx-auto px-4 py-16">
    <h2 class="text-2xl md:text-3xl font-extrabold text-emerald-700 mb-8 flex items-center gap-3">
        <i class="fas fa-question-circle"></i>
        Preguntas frecuentes sobre <?= $nombreCiudad; ?>
    </h2>

    <div class="space-y-4">
        <?php foreach ($items_filtrados as $item): ?>
            <details class="bg-white border border-emerald-200 rounded-xl p-5 shadow-sm">
                <summary class="font-semibold cursor-pointer text-emerald-700">
                    <?= htmlspecialchars($item['pregunta']) ?>
                </summary>
                <p class="mt-3 text-gray-700">
                    <?= nl2br(htmlspecialchars($item['respuesta'])) ?>
                </p>
            </details>
        <?php endforeach; ?>
    </div>
</section>