<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-vistas-castillo.php'; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retratos_Diana_y_Catalina.php"; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-jardines-Azay.php"; ?>



<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE CHENONCEAU
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre el Castillo de Chenonceau",
  "parrafos" => [
    "El <strong>Castillo de Chenonceau</strong> es una de las joyas del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, célebre por su elegante galería construida sobre el río <strong>Cher</strong> y sus cuidados jardines renacentistas. Su silueta reflejada en el agua crea una de las vistas más emblemáticas de Francia.",

    "Su historia está marcada por la influencia de mujeres poderosas como <strong>Diana de Poitiers</strong> y <strong>Catalina de Médici</strong>, que embellecieron el castillo y dejaron en él una profunda huella artística y arquitectónica."
    . $retratos_Diana_y_Catalina,

    "El interior conserva una refinada decoración con techos artesonados, tapices flamencos y mobiliario de época, ofreciendo una inmersión en el esplendor del siglo XVI.",

    "Los jardines, diseñados con precisión geométrica, ofrecen una vista magnífica del castillo y del río. Cada rincón combina arte, naturaleza y armonía, reflejando el gusto y la elegancia de sus antiguas propietarias.",

    "Más que una residencia real, Chenonceau es un símbolo de equilibrio entre poder, belleza y sensibilidad artística, lo que lo convierte en uno de los destinos más admirados del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>.",

    "A lo largo de los siglos, Chenonceau ha sido escenario de fiestas, intrigas cortesanas y, más tarde, refugio durante las guerras."
    ]
];

$titulo = "📸 Galería de imágenes";
$texto = "Imágenes del elegante Castillo de Chenonceau, conocido por su galería sobre el río Cher y sus hermosos jardines renacentistas.";

$figuras = [
  [
    "src" => "https://www.franciaturismo.net/es/wp-content/uploads/sites/17/chenonceau-hd.jpg",
    "alt" => "Castillo de Chenonceau sobre el río Cher",
    "pie" => "Vista del castillo sobre el río Cher",
    "fuente_url" => "https://www.franciaturismo.net/es/loira/castillos-loira/castillo-chenonceau/",
    "fuente_texto" => "franciaturismo.net"
  ],
  [
    "src" => "https://api.cloudly.space/resize/cropratio/640/640/75/aHR0cDovL21lZGlhcy50b3VyaXNtLXN5c3RlbS5mci82LzMvMjMzODA0X2dhbGVyaWVjaGVub25jZWF1aW1hZ2VzZGVtYXJjLmpwZw==/image.webp",
    "alt" => "Interior del Castillo de Chenonceau",
    "pie" => "Interior del Castillo de Chenonceau",
    "fuente_url" => "https://www.bloischambord.es/offertas/chateau-de-chenonceau-chenonceaux-es-255014/",
    "fuente_texto" => "bloischambord.es"
  ],
  [
    "src" => "https://www.castlesintheworld.com/es/wp-content/uploads/jardines-castillo-chenonceau-francia-1024x683.jpg",
    "alt" => "Jardines del Castillo de Chenonceau",
    "pie" => "Jardines de Diana de Poitiers",
    "fuente_url" => "https://www.castlesintheworld.com/es/castillos-francia/castillo-chenonceau/",
    "fuente_texto" => "castlesintheworld.com"
  ]
];
?>