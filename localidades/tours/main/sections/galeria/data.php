<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5a/Tours_panorama.jpg",
    "alt" => "Vista panorámica de Tours",
    "fuente" => "https://www.tours.fr/",
    "fuente_texto" => "tours.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/7/78/Chateau_de_Tours.jpg",
    "alt" => "Castillo de Tours",
    "fuente" => "https://www.tours.fr/",
    "fuente_texto" => "tours.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/0/0f/Loire_river_Tours.jpg",
    "alt" => "Paseo por el río Loira en Tours",
    "fuente" => "https://www.tours.fr/",
    "fuente_texto" => "tours.fr"
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
