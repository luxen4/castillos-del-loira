<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-vistas-castillo.php'; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/img/data-retrato-francisco-I.php"; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-retratos-leonardo-capilla-saint-hubert.php'; ?>



<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE VILLANDRY
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre el Castillo de Villandry",
"parrafos" => [
  "El <strong>Castillo de Villandry</strong>, situado a orillas del <strong>río Loira</strong>, es una de las joyas más refinadas del <strong>Renacimiento francés</strong>. Su elegancia arquitectónica y la perfección de sus jardines lo convierten en un símbolo de armonía entre arte, naturaleza y geometría.",

  "Construido a comienzos del siglo XVI por <strong>Jean Le Breton</strong>, ministro de finanzas de <strong>Francisco I</strong>, el castillo refleja el equilibrio y la racionalidad del Renacimiento. Su fachada sobria y simétrica resalta la belleza del entorno y contrasta con la exuberancia de los jardines que lo rodean."
  . $retratos_FranciscoI_y_Villandry,

  "Los <strong>jardines de Villandry</strong> son su verdadero tesoro: un conjunto de terrazas divididas en jardines ornamentales, de agua, medicinales y, sobre todo, el famoso <strong>jardín del amor</strong>, diseñado con figuras simbólicas que representan las distintas fases del sentimiento amoroso.",

  "En el interior, el castillo ofrece una atmósfera cálida y luminosa. Las estancias, restauradas con gran cuidado, conservan mobiliario de época, pinturas y objetos que evocan la vida aristocrática de los siglos pasados.",

  "Villandry destaca también por su compromiso con la <strong>sostenibilidad</strong> y el respeto al medio ambiente: sus jardines se cultivan siguiendo métodos ecológicos, sin pesticidas ni fertilizantes químicos, lo que refuerza su vínculo entre historia y naturaleza viva.",

  "Hoy, el <strong>Castillo de Villandry</strong> es uno de los destinos más visitados del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, reconocido mundialmente por la belleza geométrica de sus jardines y su ambiente sereno, que invita a la contemplación y al disfrute de la armonía renacentista."
]

];

// 📸 SECCIÓN: GALERÍA DEL CASTILLO DE VILLANDRY
$titulo = "📸 Galería";
$texto = "Imágenes del impresionante Castillo de Villandry y sus famosos jardines renacentistas, donde la arquitectura y la naturaleza se combinan de manera armoniosa.";

$figuras = [
  [
    "src" => "https://www.chateauvillandry.fr/wp-content/uploads/2021/12/chateauvillandry-renaissance-reconstitution-3d-dripmoon.jpg",
    "alt" => "Vista aerea del Castillo de Villandry",
    "pie" => "Vista aerea del Castillo de Villandry",
    "fuente_url" => "https://www.chateauvillandry.fr/villandry-through-the-ages/the-chateau-de-villandry-during-the-renaissance/?lang=en",
    "fuente_texto" => "chateauvillandry.fr"
  ],
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/n-XkSzNF/Tours/Chateau-de-Villandry/i-2LJx9jV/0/2g8cgvxrmQcCv48QLLqdXr9ZwqtZ66FW27q65zhh/L/chateau-villandry-jardin-L.jpg",
    "alt" => "Jardines del castillo de Villandry",
    "pie" => "<span id='jardines'>Jardines renacentistas</span>",
    "fuente_url" => "https://loirelovers.fr/es/visitar-chateau-villandry-castillo/",
    "fuente_texto" => "loirelovers.fr"
  ],
  [
    "src" => "https://www.viajandoconpio.com/wp-content/uploads/2023/03/984462_HDR.jpg",
    "alt" => "Reflejo del castillo en el agua",
    "pie" => "Reflejo del castillo en el agua",
    "fuente_url" => "https://www.viajandoconpio.com/el-castillo-de-villandry-un-tesoro-frances/",
    "fuente_texto" => "viajandoconpio.com"
  ],  [
    "src" => "https://woody.cloudly.space/app/uploads/blois-tourisme/2024/07/thumbs/image-5491330-1920x960-crop-1720517483.webp",
    "alt" => "Vista general del castillo y jardines de Villandry",
    "pie" => "Vista general de Villandry y sus jardines",
    "fuente_url" => "https://www.bloischambord.es/descubre-el-destino/castillos-del-loira/castillo-y-jardines-de-villandry/",
    "fuente_texto" => "bloischambord.es"
  ],
  [
    "src" => "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/fee/villandry-jardins-credit-adt-touraine-jc-coutand-2035-9.webp",
    "alt" => "Jardín ornamental de Villandry",
    "pie" => "Jardín ornamental con setos geométricos",
    "fuente_url" => "https://www.valledelloira-francia.es/sitio-cultural/castillo-y-jardines-de-villandry/",
    "fuente_texto" => "valledelloira-francia.es"
  ],
  [
    "src" => "https://www.viajandoconpio.com/wp-content/uploads/2023/03/984314_HDR-1000x666.jpg.webp",
    "alt" => "Salón interior Castillo de Villandry",
    "pie" => "Salón interior Castillo de Villandry",
    "fuente_url" => "https://www.viajandoconpio.com/el-castillo-de-villandry-un-tesoro-frances/",
    "fuente_texto" => "viajandoconpio.com"
  ]
];
?>