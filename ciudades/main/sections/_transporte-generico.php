<section id="<?= $slug_section_main_title;?>" class="container mx-auto px-6 py-12">
  
  <!-- Título -->
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">
    <?= $h2 ?>
  </h2>

  <!-- Descripción -->
  <p class="text-gray-700 mb-6">
    <?= $descripcion_seccion ?>
  </p>

  <!-- Destacados -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php 
      require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/{$slug}/main/sections/{$slug_section_main_title}/data.php"; 
      require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/{$slug}/main/sections/template.php"; 
    ?>
  </div>

  <!-- Info extra -->
  <?php if (!empty($info_extra)) : ?>
    <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
      <p class="text-gray-700"><?= $info_extra ?></p>
    </div>
  <?php endif; ?>
</section>