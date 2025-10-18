<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/2/25/Blois_vue_panorama.jpg",
    "alt" => "Vista panorámica de Blois",
    "fuente" => "https://www.blois-tourisme.com/",
    "fuente_texto" => "blois-tourisme.com"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/1/18/Chateau_Blois.jpg",
    "alt" => "Castillo de Blois",
    "fuente" => "https://www.blois-tourisme.com/",
    "fuente_texto" => "blois-tourisme.com"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5d/Loire_river_Blois.jpg",
    "alt" => "Paseo por el río Loira en Blois",
    "fuente" => "https://www.blois-tourisme.com/",
    "fuente_texto" => "blois-tourisme.com"
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
