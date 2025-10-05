      <!-- 📸 Galería -->
      <h4 class="text-2xl font-semibold text-emerald-600 mb-4">📸 Galería</h4>
      <div class="grid md:grid-cols-3 gap-4 mb-12">
        <?php foreach($galeria as $foto): ?>
          <img src="<?= $foto ?>" alt="Foto de <?= $ciudad ?>" class="rounded-lg shadow hover:scale-105 transition">
        <?php endforeach; ?>
      </div>