<!-- 📸 Galería -->
 <?php
$galeria = [
  [
    "src" => "https://content.r9cdn.net/rimg/dimg/4d/94/b37a33af-city-27584-164dce7c2fd.jpg?crop=true&width=1020&height=498",
    "alt" => "Vista panorámica de Nantes",
    "fuente" => "https://www.kayak.es/Nantes.27584.guide",
    "fuente_texto" => "kayak.es"
  ],
  [
    "src" => "https://www.nantes-camping.fr/wp-content/uploads/2017/08/NC-machines-de-l-ile-002-930x740.jpg",
    "alt" => "Les Machines de l'île en Nantes",
    "fuente" => "https://www.nantes-camping.fr/es/region/machines-de-l-ile.html",
    "fuente_texto" => "nantes-camping.fr"
  ],
  [
    "src" => "https://www.levoyageanantes.fr/wp-content/uploads/2016/02/04/152acf80a38-Cathedralefull.jpg",
    "alt" => "Catedral de Nantes",
    "fuente" => "https://www.levoyageanantes.fr/es/lugares/catedral-san-pero-y-san-pablo/",
    "fuente_texto" => "levoyageanantes.fr"
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