<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/6/6c/Amboise_Loire_evening.jpg",
    "alt" => "Vista panorámica de Amboise",
    "fuente" => "https://www.tourisme-amboise.fr/",
    "fuente_texto" => "tourisme-amboise.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5d/Chateau_Amboise_Loire.jpg",
    "alt" => "Castillo Real de Amboise",
    "fuente" => "https://www.tourisme-amboise.fr/",
    "fuente_texto" => "tourisme-amboise.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/8/8a/Clos_Luce_Amboise.jpg",
    "alt" => "Clos Lucé, residencia de Leonardo da Vinci",
    "fuente" => "https://www.tourisme-amboise.fr/",
    "fuente_texto" => "tourisme-amboise.fr"
  ]
];
?>
<h4 class="text-2xl font-semibold text-emerald-600 mb-4 text-center">📸 Galería</h4>
<div class="grid md:grid-cols-3 gap-4 mb-12 justify-items-center">
  <?php foreach($galeria as $foto): ?>
    <figure class="rounded-lg shadow hover:scale-105 transition overflow-hidden w-full max-w-sm">
      <img src="<?= $foto['src'] ?>" 
           alt="<?= $foto['alt'] ?>" 
           class="w-full h-auto object-cover">
      <figcaption class="text-xs text-gray-500 mt-1 text-center">
        Fuente: <a href="<?= $foto['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="hover:underline text-emerald-600">
          <?= $foto['fuente_texto'] ?>
        </a>
      </figcaption>
    </figure>
  <?php endforeach; ?>
</div>
