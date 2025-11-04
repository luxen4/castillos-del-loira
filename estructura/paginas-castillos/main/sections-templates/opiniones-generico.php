<!-- Opiniones -->
<section class="mb-6">
    <h3 class="text-2xl font-semibold text-emerald-700 mb-3">🗣️ Opiniones</h3>
    <div class="space-y-3">
        <?php foreach ($opiniones as $c): ?>
            <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
                <div class="flex items-center justify-between">
                    <strong class="text-emerald-700 text-lg"><?= htmlspecialchars($c['nombre']) ?></strong>
                    <span class="text-yellow-500 text-sm"><?= estrellas($c['rating']) ?></span>
                </div>
                <p class="text-gray-700 mt-2"><?= htmlspecialchars($c['texto']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>