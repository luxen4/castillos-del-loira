<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retratos_Beauregard.php"; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-galeria-Beauregard.php"; ?>

<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE BEAUREGARD
$introduccion = [
  "id" => "introduccion",
  "titulo" => "🖼️ Château de Beauregard: la Galería de los 327 retratos",

  "parrafos" => [

    "Situado entre <strong>Blois</strong> y <strong>Cheverny</strong>, el <strong>Castillo de Beauregard</strong> es una joya del Renacimiento conocida por su extraordinaria <strong>Galería de los Retratos</strong>: una sala única con <strong>327 retratos</strong> de figuras que marcaron la historia de Europa.",

    "Construido entre los siglos <strong>XVI y XVII</strong> por <strong>Jean du Thier</strong>, ministro de <strong>Enrique II</strong>, el castillo fue concebido como un «palacio para el pensamiento». Su famosa galería —a menudo llamada el «<em>Versalles de la Historia</em>»— combina arte, política y memoria."
      /*. $retratos_Beauregard*/,

    "La galería está pavimentada con un espectacular suelo de <strong>azulejos de Delft</strong> procedentes de los Países Bajos. Cada retrato, pintado por los mejores artistas de la época, está rodeado de maderas exóticas procedentes de las colonias francesas.",

    "Los jardines del castillo fueron rediseñados con inspiración en los <strong>jardines de los sentidos</strong>: aromas, colores y texturas pensados para un paseo sensorial inolvidable."
      /*. $galeria_Beauregard*/,

    "Beauregard es un castillo diferente: delicadeza renacentista, arte, historia y una personalidad propia, alejada de la ostentación. Un lugar imprescindible para los amantes del Renacimiento y la historia europea."
  ]
];

// 📸 SECCIÓN: GALERÍA DEL CASTILLO DE BEAUREGARD
$titulo = "📸 Galería";
$texto = "Imágenes del Castillo de Beauregard, famoso por su Galería de los 327 retratos y su parque histórico.";

$figuras = [

  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Beauregard_castle%2C_aerial_view.jpg/330px-Beauregard_castle%2C_aerial_view.jpg",
    "alt" => "Vista aérea del Castillo de Beauregard",
    "pie" => "Vista aérea del Castillo de Beauregard",
    "fuente_url" => "https://es.wikipedia.org/wiki/Palacio_de_Beauregard",
    "fuente_texto" => "Wikipedia"
  ],
  [
    "src" => "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/sizes/d1c/img-1354-3-380x250.webp",
    "alt" => "Galería de los Retratos en Beauregard",
    "pie" => "Galería de los 327 retratos",
    "fuente_url" => "https://www.valledelloira-francia.es/sitio-cultural/parc-chateau-de-beauregard/",
    "fuente_texto" => "valledelloira-francia.es"
  ],
  [
    "src" => "https://megaconstrucciones.net/images/edificios-civiles/foto10/beauregard-chateau.jpg",
    "alt" => "Fachada del Castillo de Beauregard",
    "pie" => "Fachada principal del castillo",
    "fuente_url" => "https://megaconstrucciones.net/?construccion=castillo-beauregard",
    "fuente_texto" => "megaconstrucciones.net"
  ],
  [
    "src" => "https://www.valdeloire-france.com/sites/default/files/styles/og/public/medias/images/2023-01/beauregardparcs.jpg",
    "alt" => "Jardines del Castillo de Beauregard",
    "pie" => "Jardines del castillo",
    "fuente_url" => "https://www.valdeloire-france.com",
    "fuente_texto" => "valdeloire-france.com"
  ],

];
?>
