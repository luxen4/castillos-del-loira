<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/localidades/{$slug}/main/sections/{$slug_section_main_title}/data.php"; ?>

<?php if ($section['id'] !== 'restaurantes' 
&& $section['id'] !== 'alojamientos' 
&& $section['id'] !== 'transportes'
&& $section['id'] !== 'fin-de-semana'): ?>
<!-- <?= $slug; ?>⭐ Actividades en Nantes -->
<section id="<?= $section['id'] ?>" class="container mx-auto px-1 py-6">
  <h2 class="text-xl md:text-2xl lg:text-2xl font-bold text-emerald-700 mb-6">
    <?= $section['titulo'] ?>
  </h2>

  <p class="text-gray-700 mb-6"><?= $section['descripcion'] ?></p>

  <!-- Paseos -->
  <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-6">
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/localidades/template-paseos.php"; ?>
  </div>

  <!-- Info extra -->
  <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
    <p class="text-gray-700"><?= $section['tip'] ?></p>
  </div>
</section>
<?php endif; ?>