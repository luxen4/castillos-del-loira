<?php
$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Ch%C3%A2teau_de_Saumur_2008_PD_10.JPG/1200px-Ch%C3%A2teau_de_Saumur_2008_PD_10.JPG",
    "alt" => "Castillo de Saumur",
    "fuente" => "/val-de-loire/chateaux/Saumur.php",
    "fuente_texto" => "wikimedia.org"
  ],
  [
    "src" => "https://www.valdeloire-france.com/wp-content/uploads/2020/06/rillettes-saumur.jpg",
    "alt" => "Rillettes de Saumur",
    "fuente" => "https://www.valdeloire-france.com/",
    "fuente_texto" => "valdeloire-france.com"
  ],
  [
    "src" => "https://www.valdeloire-france.com/wp-content/uploads/2020/06/tarte-tatin-saumur.jpg",
    "alt" => "Tarte Tatin en Saumur",
    "fuente" => "https://www.valdeloire-france.com/",
    "fuente_texto" => "valdeloire-france.com"
  ]
];
?>
<h4 class="text-2xl font-semibold text-emerald-600 mb-4 text-center">📸 Galería</h4>
<div class="grid md:grid-cols-3 gap-4 mb-12 justify-items-center">
  <?php foreach($galeria as $foto): ?>
    <a href="<?= $foto['fuente'] ?>" target="_blank" rel="noopener noreferrer" class="hover:underline text-emerald-600">
         
    <figure class="rounded-lg shadow hover:scale-105 transition overflow-hidden w-full max-w-sm">
      
    <img src="<?= $foto['src'] ?>" 
           alt="<?= $foto['alt'] ?>" 
           class="w-full h-auto object-cover">
      <figcaption class="text-xs text-gray-500 mt-1 text-center">
        <?= $foto['fuente_texto'] ?>
      </figcaption>
    </figure>
  </a>
  <?php endforeach; ?>
</div>
