<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://img.freepik.com/fotos-premium/vista-panoramica-aerea-orleans-francia_78361-12672.jpg",
    "alt" => "Vista panorámica de Orléans",
    "fuente" => "https://www.freepik.es/fotos-premium/vista-panoramica-aerea-orleans-francia_34547926.htm",
    "fuente_texto" => "freepik.es"
  ],/*
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5d/Cathedrale_Sainte_Croix_Orleans.jpg",
    "alt" => "Catedral Sainte-Croix de Orléans",
    "fuente" => "https://www.cathedrale-orleans.fr/",
    "fuente_texto" => "cathedrale-orleans.fr"
  ],*/
  [
    "src" => "https://www.skaping.com/orleans/place-du-martroi/live/thumb.jpg",
    "alt" => "Place du Martroi en Orléans",
    "fuente" => "https://www.skaping.com/orleans/place-du-martroi/live/",
    "fuente_texto" => "skaping.com || LIVE"
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
