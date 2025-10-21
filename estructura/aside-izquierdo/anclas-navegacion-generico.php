<h3 class="font-semibold text-emerald-700 mb-2"><?= $h3; ?></h3>
<ul class="list-disc list-inside space-y-1">
  <?php foreach ($anclas as $t): ?>
    <li>
      <a href="<?= $t['ancla'] ?>" class="hover:text-emerald-700 hover:underline transition">
        <?= $t['titulo'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>