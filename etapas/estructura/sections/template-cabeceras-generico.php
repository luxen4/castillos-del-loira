
<?php
//var_dump($items); ?>
<div class="text-center mb-4 mt-8">
  <i class="<?= htmlspecialchars($items[$orden]["icono"]); ?> text-emerald-600 text-2xl"></i>

  <span class="font-semibold block mt-2 text-lg md:text-xl">
    <?= htmlspecialchars($items[$orden]["span_titulo"]); ?>
  </span>

  <p class="text-gray-600 text-sm md:text-base mt-1">
    <?= $items[$orden]["texto_parrafo"]; ?> <!-- No usar htmlspecialchars porque tiene <br> -->
  </p>
</div>

