<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/2/27/Orleans_vue_du_loiret.jpg",
    "alt" => "Vista panorámica de Orléans",
    "fuente" => "https://www.orleans.fr/visiter",
    "fuente_texto" => "orleans.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5d/Cathedrale_Sainte_Croix_Orleans.jpg",
    "alt" => "Catedral Sainte-Croix de Orléans",
    "fuente" => "https://www.cathedrale-orleans.fr/",
    "fuente_texto" => "cathedrale-orleans.fr"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/f/f9/Place_du_Martroi_Orleans.jpg",
    "alt" => "Place du Martroi en Orléans",
    "fuente" => "https://www.orleans.fr/",
    "fuente_texto" => "orleans.fr"
  ]
];
?>
<h4 class="text-2xl font-semibold text-emerald-600 mb-4">📸 Galería</h4>
<div class="grid md:grid-cols-3 gap-4 mb-12">
  <?php foreach($galeria as $foto): ?>
    <figure class="rounded-lg shadow hover:scale-105 transition overflow-hidden">
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
