<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-vistas-castillo.php'; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retratos_Azay.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-jardines-Azay.php"; ?>

<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE AZAY-LE-RIDEAU
$introduccion = [
  "id" => "introduccion",
  "titulo" => "✨ Azay-le-Rideau: un palacio sobre el agua",

  "parrafos" => [

    "Considerado uno de los castillos más elegantes del <strong>Valle del Loira</strong>, el <strong>Castillo de Azay-le-Rideau</strong> se alza como un sueño de piedra blanca flotando sobre las aguas del río <strong>Indre</strong>. Su reflejo perfecto crea un efecto mágico que ha convertido este castillo en una de las estampas más románticas del patrimonio francés.",

    "Construido en el siglo <strong>XVI</strong> por <strong>Gilles Berthelot</strong>, un rico tesorero de Francisco I, Azay-le-Rideau es una joya del primer <strong>Renacimiento francés</strong>. Fusiona la tradición defensiva medieval —torres, matacanes, fosos— con la elegancia renacentista inspirada en los palacios italianos. Armonía, proporción y refinamiento son las palabras que mejor definen su arquitectura.",

    "Su historia está marcada por el ascenso social y la caída de su propietario. Tras un aumento de sospechas sobre su gestión financiera, <strong>Francisco I</strong> tomó posesión del castillo, que pasó definitivamente a manos de la Corona. Desde entonces, Azay-le-Rideau ha sido residencia de nobles y, más tarde, símbolo del arte de vivir a la francesa."
    . $retratos_Azay,

    "El interior sorprende por su escalera de honor, una de las primeras escaleras rectas autoportantes de Francia, decorada con relieves de salamandras —emblema de Francisco I—. Sus aposentos, restaurados con mobiliario del siglo XVI y XVII, permiten sumergirse en la vida cotidiana de la nobleza renacentista.",

    "Los jardines paisajísticos que rodean el castillo fueron diseñados en época romántica. Senderos curvos, árboles centenarios y el sonido tranquilo del agua invitan a pasear sin prisa. En los días soleados, el castillo parece flotar, reflejado en un espejo perfecto."
    . $jardines_Azay,
    "<strong>Azay-le-Rideau</strong> no es solo un castillo, es una experiencia sensorial: el murmullo del agua, la luz que baña la piedra y la delicadeza de sus proporciones hacen de él una obra maestra del Renacimiento francés. Un lugar donde historia y belleza se funden en una imagen inolvidable."
  ]

];

// 📸 SECCIÓN: GALERÍA DEL CASTILLO DE AZAY-LE-RIDEAU
$titulo = "📸 Galería";
$texto = "Imágenes del Castillo de Azay-le-Rideau, destacado por su arquitectura renacentista sobre el río Indre y sus elegantes jardines.";

$figuras = [

  [
    "src" => "https://cdn-imgix.headout.com/media/images/9e1a16cf7e03351f595ba77195e2bdde-27057-Fullday-Villandry-Azay-le-Rideau-Vouvraywinetour---002.jpg?auto=format&w=900&h=562.5&q=90&ar=16%3A10&crop=faces%2Ccenter&fit=crop",
    "alt" => "Entrada principal al Castillo de Azay-le-Rideau",
    "pie" => "Entrada principal al Castillo de Azay-le-Rideau",
    "fuente_url" => "https://www.loirevalley-tickets.com/es/chateau-azay-le-rideau/",
    "fuente_texto" => "loirevalley-tickets.com"
  ], 
  [
    "src" => "https://www.azay-chinon-valdeloire.com/wp-content/uploads/2019/07/bg-login-1600x900.jpg",
    "alt" => "Castillo de Azay-le-Rideau sobre el río Indre",
    "pie" => "Azay-le-Rideau reflejado en el río",
    "fuente_url" => "https://www.azay-chinon-valdeloire.com/es/descubrir-azay-le-rideau/",
    "fuente_texto" => "azay-chinon-valdeloire.com"
  ],
  [
    "src" => "https://cdn-imgix.headout.com/media/images/2442d7d81937f06d0d4304e409f4c3fe-12777-LoireValley-TicketstoAzay-le-RideauCastle-002.jpg?auto=format&w=900&h=562.5&q=90&ar=16%3A10&crop=faces%2Ccenter&fit=crop",
    "alt" => "Interior del Castillo de Azay-le-Rideau",
    "pie" => "Interior del Castillo de Azay-le-Rideau",
    "fuente_url" => "https://www.loirevalley-tickets.com/es/chateau-azay-le-rideau/",
    "fuente_texto" => "loirevalley-tickets.com"
  ],
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/Chateaux-de-la-Loire/Chateau-Azay-le-Rideau/i-PsN7wzq/0/451e3ad3/L/chateau-azay-le-rideau-3-L.jpg",
    "alt" => "Jardines del Castillo de Azay-le-Rideau",
    "pie" => "Jardines renacentistas",
    "fuente_url" => "https://loirelovers.fr/es/chateau-azay-le-rideau-castillo-visite/",
    "fuente_texto" => "loirelovers.fr"
  ]
];
?>

