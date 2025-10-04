      <!-- ℹ️ Enlaces -->
      <div class="bg-emerald-50 p-4 rounded-lg shadow mb-8">
        <h4 class="text-xl font-semibold text-emerald-700 mb-2">ℹ️ Información práctica</h4>
        <ul class="space-y-2">
          <?php foreach($enlaces as $enlace): ?>
            <li>👉 <a href="<?= $enlace[1] ?>" target="_blank" class="text-emerald-700 hover:underline"><?= $enlace[0] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>