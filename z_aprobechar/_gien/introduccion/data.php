<?php
$museo_caza_gien = '
<p class="text-gray-700 leading-relaxed mb-6">
  En el interior del castillo se encuentra el <strong>Museo Internacional de la Caza de Gien</strong>, uno de los más importantes de Europa dedicados al mundo cinegético. 
  A través de colecciones únicas, el museo muestra la evolución de la caza en Francia desde la Edad Media hasta nuestros días, combinando historia, arte y patrimonio cultural.
</p>

<!-- 🦌 Museo Internacional de la Caza -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4 mb-8">

  <figure class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 bg-white">
    <div class="relative w-full h-80 md:h-96">
      <img 
        src="https://cdn.iris-etourism.io/uploads/ot_de_gien/e17/2024-11-15--1-.webp"
        alt="Sala de armas del Museo Internacional de la Caza de Gien"
        class="absolute inset-0 w-full h-full object-cover object-center">
    </div>
    <figcaption class="bg-gray-100 text-sm text-gray-600 text-center py-2">
      🏺 Colección histórica del <strong>Museo Internacional de la Caza</strong> en el Castillo de Gien.<br>
      Fuente: <a href="https://www.gien-tourisme.fr/es/sitio-cultural/museo-del-castillo-de-gien%2C-historia-de-la-caza-y-naturaleza-en-el-valle-del-loira/" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">gien-tourisme.fr</a>
    </figcaption>
  </figure>

  <figure class="rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 bg-white">
    <div class="relative w-full h-80 md:h-96">
      <img 
        src="https://www.chateau-gien.fr/sites/default/files/styles/illustration_medium_crop/public/ged/collections-musee-chasse-gien.jpg?itok=GqM5tNfp"
        alt="Colecciones del Museo Internacional de la Caza en el Castillo de Gien"
        class="absolute inset-0 w-full h-full object-cover object-center">
    </div>
    <figcaption class="bg-gray-100 text-sm text-gray-600 text-center py-2">
      🦌 Exposición de piezas cinegéticas: arte, tradición y patrimonio francés.<br>
      Fuente: <a href="https://www.chateau-gien.fr" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">chateau-gien.fr</a>
    </figcaption>
  </figure>

</div>
';
?>



<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CHÂTEAU DE GIEN
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre el Castillo de Gien",
  "parrafos" => [
    "El <strong>Château de Gien</strong> es un elegante castillo renacentista situado en la localidad de <strong>Gien</strong>, en la región del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>. Construido en el siglo XV por orden de Ana de Francia, hija de Luis XI, domina las orillas del río <strong>Loira</strong> con una silueta majestuosa.",

    "Durante siglos desempeñó un papel estratégico y aristocrático, acogiendo a personajes ilustres como Francisco I y Luis XIV durante sus viajes por el valle.",

    "Hoy alberga el <strong>Museo Internacional de la Caza</strong>, donde se exhiben colecciones excepcionales relacionadas con el arte de la caza, armas antiguas, tapices y piezas históricas.
    <?= $museo_caza_gien",

    "Desde sus terrazas se obtiene una panorámica única del Loira, de los tejados de la ciudad y del icónico <strong>Puente de Gien</strong>, uno de los más fotografiados del valle.",

    "Además de su historia, el castillo destaca por su entorno natural, ya que Gien es una parada importante en la ruta ciclista <strong>La Loire à Vélo</strong>, ideal para combinar cultura y naturaleza.",

    "Tras una cuidadosa restauración, el Château de Gien se ha consolidado como una visita imprescindible para quienes desean descubrir un castillo menos turístico, auténtico y lleno de historia."
  ]
];

$texto = "Imágenes del Castillo de Gien: su arquitectura renacentista, vistas al Loira y espacios del Museo Internacional de la Caza.";

$figuras = [
  [
    "src" => "https://www.chateaumuseegien.fr/sites/default/files/styles/slider/public/2022-04/chateau-gien-loire.jpg",
    "alt" => "Château de Gien visto desde el Loira",
    "pie" => "Vista del castillo de Gien sobre el Loira",
    "fuente_url" => "https://www.chateaumuseegien.fr/",
    "fuente_texto" => "chateaumuseegien.fr"
  ],
  [
    "src" => "https://cdn.sortiraparis.com/images/80/10891/795956-le-chateau-musee-de-gien.jpg",
    "alt" => "Interior del Museo de la Caza en el Castillo de Gien",
    "pie" => "Colecciones del Museo Internacional de la Caza",
    "fuente_url" => "https://www.sortiraparis.com/",
    "fuente_texto" => "sortiraparis.com"
  ],
  [
    "src" => "https://www.france-voyage.com/visuals/photos/chateau-gien-35769_w630.jpg",
    "alt" => "Vista panorámica del Castillo de Gien",
    "pie" => "Fachada del castillo desde la ciudad",
    "fuente_url" => "https://www.france-voyage.com/",
    "fuente_texto" => "france-voyage.com"
  ]
];
?>
