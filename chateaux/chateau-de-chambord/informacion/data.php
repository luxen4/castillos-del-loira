<?php

$figuras = [
  /*[
    "src" => "https://www.shutterstock.com/shutterstock/videos/3697911255/thumb/1.jpg?ip=x480",
    "alt" => "Vista aérea del Castillo de Chambord",
    "pie" => "Vista aérea",
    "fuente_url" => "https://www.shutterstock.com/es/video/clip-3697911255-aerial-view-chambord-castle-chateau-de-loire",
    "fuente_texto" => "shutterstock.com"
  ],*/
  [
    "src" => "https://img.freepik.com/fotos-premium/castillo-refleja-lago-dia-soleado-castillo-chambord-francia-julio_207709-228.jpg",
    "alt" => "Reflejo del castillo en el lago",
    "pie" => "Reflejo en el lago",
    "fuente_url" => "https://www.freepik.es/fotos-premium/castillo-refleja-lago-dia-soleado-castillo-chambord-francia-julio_11463935.htm",
    "fuente_texto" => "freepik.es"
  ],
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/Blois/n-DXvSZK/H%C3%B4tel-Relais-Chambord/i-DHzz8V6/0/mB5XcxFG3CBC7gVfz6mbwc8sHSdLvhCZXkbcbmtt/L/hotel-relais-chambord-6-L.jpg",
    "alt" => "Atardecer en Chambord",
    "pie" => "Atardecer en Chambord",
    "fuente_url" => "https://loirelovers.fr/es/ruta-castillos-loire-itinerarios-visitar/",
    "fuente_texto" => "loirelovers.fr"
  ],/*[
    "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSenz2JzVv8GOXwctf1x4oYuxyESU2ow5RljA&s",
    "alt" => "Escalera doble hélice de Chambord",
    "pie" => "Escalera de doble hélice",
    "fuente_url" => "https://www.pariscityvision.com/es/europa/francia/castillos-loira/castillo-chambord/escalera",
    "fuente_texto" => "pariscityvision.com"
  ],*/
  [
    "src" => "https://cdn-imgix.headout.com/media/images/910ab455e45d897372e004e5520ca99e-2561-loire-valley-loire-valley--cha%CC%82teau-de-chambord-01.jpg",
    "alt" => "Tejados y torres de Chambord",
    "pie" => "Torres y chimeneas",
    "fuente_url" => "https://www.loirevalley-tickets.com/es/chateau-de-chambord/about/",
    "fuente_texto" => "loirevalley-tickets.com"
  ],
  [
    "src" => "https://www.viajaporlibre.com/wp-content/uploads/2021/02/chateau-de-chambord-Loira-10-770x513.jpg.webp",
    "alt" => "Patio interior del castillo de Chambord",
    "pie" => "Patio interior",
    "fuente_url" => "https://www.viajaporlibre.com/francia/visita-al-chateau-de-chambord-en-el-corazon-del-loira",
    "fuente_texto" => "viajaporlibre.com"
  ]
];


?>

<?php
$carpeta = 'chateaux';
$slug_actual = 'castillo-' . $slug;   $slug_filtrado_csv= $slug_actual;
$archivo_csv = $slug . "/imagenes.csv";

require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php';

$imagenesHTML = [];
//var_dump($items_filtrados);
if (!empty($items_filtrados)) {
    foreach ($items_filtrados as $i => $f) {

        // $i = 0 → $imagen1, $i = 1 → $imagen2...
        $varName = 'imagen' . ($i + 1);

        $$varName = '
        <figure class="bg-white rounded-lg shadow overflow-hidden mt-8 mb-8">
          <img src="' . htmlspecialchars($f['src']) . '"
               alt="' . htmlspecialchars($f['alt']) . '"
               class="w-full h-128 object-cover">

          <figcaption class="p-2 text-gray-600 text-sm text-center">
            ' . htmlspecialchars($f['pie']) . '<br>
            Fuente:
            <a href="' . htmlspecialchars($f['fuente_url']) . '" target="_blank" class="text-blue-600 underline">
              ' . htmlspecialchars($f['fuente_texto']) . '
            </a>
          </figcaption>
        </figure>';
    }
}
?>



<?php $imagen='<a href="">aaa</a>'; ?>

<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE CHAMBORD
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre el Castillo de Chambord",
"parrafos" => [
  "El <strong>Castillo de Chambord</strong>, situado en el corazón del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, es una obra maestra del <strong>Renacimiento francés</strong> y uno de los monumentos más reconocidos de Francia. Su imponente silueta, con más de 400 habitaciones y 282 chimeneas, encarna la grandeza y la ambición de <strong>Francisco I</strong>.
  ," /*.$imagen1*/,

  "Construido a partir de 1519, Chambord fue concebido como un pabellón de caza real, aunque su escala monumental lo convirtió en un símbolo del poder monárquico. Su diseño refleja la fusión entre la arquitectura tradicional francesa y la influencia renacentista italiana.",

  "En su estructura se aprecia el genio innovador atribuido a <strong>Leonardo da Vinci</strong>, quien inspiró la célebre <em>escalera de doble hélice</em>, una de las joyas arquitectónicas más admiradas del castillo."
  /*.$imagen4*/,

  "Los amplios salones, galerías y terrazas ofrecen una vista majestuosa del <strong>Parque Nacional de Chambord</strong>, la mayor reserva forestal cerrada de Europa, que antiguamente servía como coto de caza real."
  /*.$imagen*/,

  "Más allá de su esplendor arquitectónico, Chambord representa el ideal del Renacimiento: la búsqueda del equilibrio entre arte, ciencia y naturaleza, reflejada en su simetría perfecta y su armonía visual.",

  "Hoy en día, el <strong>Castillo de Chambord</strong> es Patrimonio Mundial de la UNESCO y uno de los destinos más emblemáticos del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, atrayendo a millones de visitantes que vienen a admirar su belleza, historia y legado cultural."
]

];

$titulo = "📸 Galería";
$texto = "Imágenes del majestuoso Castillo de Chambord y su entorno natural, donde la arquitectura y el paisaje se funden en perfecta armonía.";
