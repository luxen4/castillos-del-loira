<!-- 📢 Lateral -->
<aside class="bg-white rounded-lg shadow-lg p-6 space-y-6">
    <h4 class="text-xl font-bold text-emerald-700 mb-4">📢 Anuncios</h4>
    <div class="bg-gray-100 border rounded-lg h-40 flex items-center justify-center text-gray-500">
        [Tu anuncio aquí]
    </div>
    <div class="bg-gray-100 border rounded-lg h-40 flex items-center justify-center text-gray-500">
        [Publicidad adicional]
    </div>

    <h4 class="text-xl font-bold text-emerald-700 mt-6 mb-2">🏙️ Ciudades cercanas</h4>
    <ul class="list-disc list-inside text-gray-700 space-y-2">
        <?php foreach ($relacionadas as $rel): ?>
            <li>
                <a href="<?= $rel[1] ?>" class="hover:text-emerald-700 underline">
                    <?= $rel[0] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- ℹ️ Enlaces -->
    <div class="bg-emerald-50 p-4 rounded-lg shadow mb-8">
        <h4 class="text-xl font-semibold text-emerald-700 mb-2">ℹ️ Información práctica</h4>
        <ul class="space-y-2">
            <?php foreach ($enlaces as $enlace): ?>
                <li>👉 <a href="<?= $enlace[1] ?>" target="_blank" class="text-emerald-700 hover:underline"><?= $enlace[0] ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>