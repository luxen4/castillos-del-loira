<section id="<?= $slug_section;?>" class="mt-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?= $titulo ?></h2>
  <p class="text-gray-700 mb-4"><?= $texto ?></p>
  <div class="grid md:grid-cols-3 gap-4">
    <?php foreach($figuras as $fig): ?>
      <figure class="bg-white rounded-lg shadow overflow-hidden">
        <img src="<?= $fig['src'] ?>" 
              alt="<?= $fig['alt'] ?>" 
              class="w-full h-48 object-cover">
        <figcaption class="p-2 text-gray-600 text-sm text-center">
          <?= $fig['pie'] ?> <br> Fuente: 
          <a href="<?= $fig['fuente_url'] ?>" target="_blank" class="text-blue-600 underline"><?= $fig['fuente_texto'] ?></a>
        </figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>