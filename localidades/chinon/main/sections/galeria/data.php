<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Chinon_panorama.jpg",
    "alt" => "Vista panorámica de Chinon",
    "fuente" => "https://www.ot-chinon-valdeloire.fr/",
    "fuente_texto" => "ot-chinon-valdeloire.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/1/1c/Chateau_de_Chinon.jpg",
    "alt" => "Castillo de Chinon",
    "fuente" => "https://www.ot-chinon-valdeloire.fr/",
    "fuente_texto" => "ot-chinon-valdeloire.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/4/4f/Loire_river_Chinon.jpg",
    "alt" => "Paseo por el río Vienne en Chinon",
    "fuente" => "https://www.ot-chinon-valdeloire.fr/",
    "fuente_texto" => "ot-chinon-valdeloire.fr"
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
