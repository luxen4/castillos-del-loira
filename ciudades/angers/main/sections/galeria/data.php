<!-- 📸 Galería -->
<?php
$galeria = [
  [
    "src" => "https://www.angersloiretourisme.com/sites/default/files/styles/og_image/public/thumbnails/image/panorama-angers-loire.jpg",
    "alt" => "Vista panorámica de Angers",
    "fuente" => "https://www.angersloiretourisme.com/",
    "fuente_texto" => "angersloiretourisme.com"
  ],
  [
    "src" => "https://www.angersloiremetropole.fr/uploads/RTEmagicC_chateau-angers-loire-anjou_02.jpg.jpg",
    "alt" => "Castillo de Angers",
    "fuente" => "https://www.angersloiremetropole.fr/",
    "fuente_texto" => "angersloiremetropole.fr"
  ],
  [
    "src" => "https://www.terrabotanica.fr/wp-content/uploads/2023/05/visite-parc-terra-botanica-angers.jpg",
    "alt" => "Parque Terra Botanica en Angers",
    "fuente" => "https://www.terrabotanica.fr/",
    "fuente_texto" => "terrabotanica.fr"
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
