<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/{$slug}/main/sections/{$slug_section_main_title}/data.php"; ?>

<!-- <?= $slug; ?>⭐ Actividades en Nantes -->
<section id="<?= $section['id'] ?>" class="container mx-auto px-1 py-6">
  <h2 class="text-xl md:text-2xl lg:text-3xl font-bold text-emerald-700 mb-6">
    <?= $section['titulo'] ?>
  </h2>

  <p class="text-gray-700 mb-6"><?= $section['descripcion'] ?></p>

  <!-- Destacados -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/nantes/main/sections/template.php"; ?>
  </div>

  <!-- Info extra -->
  <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
    <p class="text-gray-700"><?= $section['tip'] ?></p>
  </div>
</section>