<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-vistas-castillo.php"; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retratos-carlos-francisco.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retratos-leonardo-capilla-saint-hubert.php"; ?>


<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE AMBOISE
$introduccion = [
  "id" => "introduccion",
  "titulo" => "🏰 Descubre el Castillo de Amboise",
  "parrafos" => [

    // ✅ concatenación del bloque imágenes
    "El <strong>Castillo de Amboise</strong> se alza majestuoso sobre el <strong>Valle del Loira</strong>, dominando el río desde su colina. Fue una de las residencias favoritas de los reyes de Francia durante el Renacimiento y símbolo del poder monárquico en la región."
      . $vistas_castillo,

    // ✅ concatenación del bloque retratos
    "Reconstruido en el siglo XV por orden de <strong>Carlos VIII</strong> y embellecido por <strong>Francisco I</strong>, el castillo refleja la transición entre la arquitectura medieval y las nuevas influencias renacentistas llegadas de Italia."
      . $retratos_CarlosVIII_y_FranciscoI,

    "En su interior se conservan amplios salones, mobiliario de época y una colección de retratos que evocan la vida cortesana y la influencia artística de la corte francesa en su época de esplendor.",

    "Los jardines en terrazas, abiertos hacia el río Loira, ofrecen una panorámica excepcional del valle. Sus senderos, esculturas y parterres geométricos reflejan el refinamiento del arte paisajístico renacentista.",

    // ✅ concatenación del bloque leonardo + capilla
    "El castillo está íntimamente ligado a <strong>Leonardo da Vinci</strong>, quien pasó sus últimos años en la vecina residencia de Clos-Lucé. Su tumba se encuentra en la <strong>capilla de Saint-Hubert</strong>, dentro del recinto del castillo."
      . $retratos_LeonardoDaVinci_y_CapillaDeSaintHubert,

    "Más que una fortaleza real, Amboise es un testimonio vivo del encuentro entre la historia, el arte y la ciencia, y una de las visitas imprescindibles del <strong>Valle del Loira</strong>."
  ]
];

$titulo = "📸 Galería";
$texto = "Imágenes del majestuoso Castillo de Amboise, residencia real del Renacimiento francés, con vistas panorámicas sobre el río Loira y la ciudad.";

$figuras = [
  [
    "src" => "https://cdn-imgix.headout.com/media/images/a58e5cf6513e127cfa146f815a53b3ba-AdobeStock-187387008.jpeg?auto=format&w=900&h=562.5&q=90&ar=16%3A10&crop=faces%2Ccenter&fit=crop",
    "alt" => "Castillo de Amboise sobre el río Loira",
    "pie" => "Vista general del Castillo de Amboise sobre el Loira",
    "fuente_url" => "https://www.loirevalley-tickets.com/es/chateau-amboise/",
    "fuente_texto" => "loirevalley-tickets.com"
  ],
  [
    "src" => "https://cdn-imgix.headout.com/media/images/617a6bdfef206ec86767340977c85537-AdobeStock-264550071.jpeg?auto=format&w=900&h=562.5&q=90&ar=16%3A10&crop=faces%2Ccenter&fit=crop",
    "alt" => "Vista aerea del Castillo de Amboise",
    "pie" => "Vista aerea del Castillo de Amboise",
    "fuente_url" => "https://www.loirevalley-tickets.com/es/chateau-amboise/",
    "fuente_texto" => "loirevalley-tickets.com"
  ]
];
?>

