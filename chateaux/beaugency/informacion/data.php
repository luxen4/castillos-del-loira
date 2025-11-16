<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/beaugency/img/data-vistas-castillo.php'; ?>  
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/beaugency/img/data-.php'; ?>  


<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE BEAUGENCY
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Castillo de Beaugency",
  "parrafos" => [

    // ✅ bloque imágenes en la intro
    "El <strong>Castillo de Beaugency</strong> es una impresionante fortaleza medieval a orillas del río Loira. 
    Su estratégica posición permitió controlar el paso del puente y dominar las rutas comerciales entre Orleans y Blois."
      . $vistas_castillo,

    // ✅ bloque retratos históricos
    "Beaugency está estrechamente unido a momentos decisivos de la historia de Francia, 
    especialmente a la figura de <strong>Juana de Arco</strong>, quien liberó la ciudad en 1429 como parte de su avance hacia Reims.",

    "A lo largo de los siglos, el castillo sirvió como sede del poder feudal, arsenal militar y residencia señorial.",
    
    "En la actualidad, sus salas acogen exposiciones y experiencias inmersivas de arte digital que combinan patrimonio histórico con tecnología contemporánea.",

    "El castillo forma parte del conjunto monumental de Beaugency, junto con el majestuoso <strong>puente medieval</strong> y la <strong><a href='/val-de-loire/ciudades/beaugency/abadia-de-notre-dame.php'>Abadía Notre-Dame</a></strong>, uno de los conjuntos patrimoniales más singulares del <strong>Valle del Loira</strong>."
  ]
];

$titulo = "📸 Galería";
$texto = "Imágenes del Castillo de Beaugency, una fortaleza medieval sobre el Loira que mezcla patrimonio histórico con arte digital contemporáneo.";

$figuras = [
  [
    "src" => "https://media-cdn.tripadvisor.com/media/photo-s/12/f0/28/d7/une-abbatiale-sans-cloche.jpg",
    "alt" => "Abadía Notre-Dame en Beaugency",
    "pie" => "Abadía Notre-Dame Beaugency",
    "fuente_url" => "https://www.tripadvisor.com.ve/LocationPhotoDirectLink-g187118-d8544995-i168812318-Abbatiale_Notre_Dame-Beaugency_Loiret_Centre_Val_de_Loire.html",
    "fuente_texto" => "tripadvisor.com"
  ],
  [
    "src" => "https://www.shutterstock.com/image-photo/beaugency-bridge-over-loire-river-600nw-2255382189.jpg",
    "alt" => "Puente medieval de Beaugency",
    "pie" => "Puente medieval de Beaugency junto al castillo",
    "fuente_url" => "https://www.shutterstock.com/es/search/beaugency?dd_referrer=https%3A%2F%2Fwww.google.com%2F",
    "fuente_texto" => "shutterstock.com"
  ]
];
?>
