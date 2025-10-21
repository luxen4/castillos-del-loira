<h3 class="font-semibold text-emerald-700 mb-2 mt-4">📍 Otros lugares de interés en <?= $ciudad; ?></h3>
<ul class="list-disc list-inside space-y-1">
    <?php foreach ($otros_lugares as $lugar): ?>
        <li>
            <a href="<?= $baseUrl . $lugar[1] ?>" target="_blank" class="hover:text-emerald-700 hover:underline transition">
                <?= htmlspecialchars($lugar[0]) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>