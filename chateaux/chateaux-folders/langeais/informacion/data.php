<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-vistas-castillo.php'; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chateaux-folders/{$slug}/img/data-ana-de-bretaña-y-carlos-VIII.php"; ?>
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-retratos-leonardo-capilla-saint-hubert.php'; ?>




<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE LANGEAIS
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre el Castillo de Langeais",
"parrafos" => [

  "El <strong>Castillo de Langeais</strong> se alza majestuoso sobre una escarpada colina que domina el tranquilo curso del <strong>río Loira</strong>. A primera vista, su perfil severo de torres almenadas, puente levadizo y murallas imponentes transporta al visitante a los días de la caballería y los torneos. Es una de las fortalezas mejor conservadas del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, donde aún late el espíritu de la Edad Media y el refinamiento del Renacimiento temprano.",

  "Su origen se remonta al siglo <strong>X</strong>, cuando <strong>Fulco Nerra</strong>, conde de Anjou, erigió en este lugar una fortaleza de madera para controlar el valle. Sin embargo, el castillo actual fue reconstruido en piedra en el siglo XV por orden de <strong>Luis XI</strong>, convirtiéndose en una joya del gótico tardío. Langeais se distingue por su doble alma: una cara exterior fortificada, testimonio de la era feudal, y una interior que revela la elegancia y el confort de la nobleza renacentista.",

  "El momento más célebre de su historia tuvo lugar en <strong>1491</strong>, cuando se celebró en secreto el matrimonio entre <strong>Ana de Bretaña</strong> y <strong>Carlos VIII de Francia</strong>. Este enlace selló la unión definitiva del ducado de Bretaña con la corona francesa, un acontecimiento político crucial que consolidó la unidad territorial de Francia. La sala donde se desarrolló la ceremonia, aún conservada, mantiene su atmósfera solemne y está decorada con tapices flamencos, mobiliario original y un imponente dosel real."
  . $retratos_Ana_y_CarlosVIII,

  "Recorrer el interior del castillo es adentrarse en la vida cotidiana de la nobleza del siglo XV. Los aposentos están amueblados con piezas auténticas de la época: cofres tallados, camas con dosel, tapices bordados y utensilios domésticos que recrean con fidelidad el ambiente palaciego. Una cuidada museografía permite al visitante comprender las costumbres, la etiqueta y las tradiciones que regían en la corte francesa del Renacimiento.",

  "Los jardines de Langeais, aunque más sobrios que los de otros castillos del Loira, ofrecen una atmósfera íntima y romántica. Desde sus terrazas se contemplan vistas excepcionales del valle y del puente que une ambas orillas del Loira. En primavera, el entorno se tiñe de verdes intensos y flores silvestres, creando un contraste encantador con la piedra gris de sus murallas.",

  "Más que un simple monumento, el <strong>Castillo de Langeais</strong> es un puente entre dos mundos: el de la fortaleza defensiva medieval y el del refinamiento humanista del Renacimiento. Hoy, sus muros narran con elocuencia la transición de la Francia guerrera a la Francia culta y artística, invitando a cada visitante a revivir la historia donde el amor y la política sellaron el destino de un reino."
]

];

// 📸 SECCIÓN: GALERÍA DEL CASTILLO DE LANGEAIS
$titulo = "📸 Galería";
$texto = "Imágenes del Castillo de Langeais, donde la arquitectura medieval y renacentista se combina con su entorno natural y el río Indre reflejando su belleza.";

$figuras = [
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/n-XkSzNF/Chateaux-de-la-Loire/Chateau-de-Langeais/i-tv464Z5/0/4a694827/L/Chateau_langeais_vue-L.jpg",
    "alt" => "Vista exterior del Castillo de Langeais",
    "pie" => "Vista exterior",
    "fuente_url" => "https://loirelovers.fr/es/visitar-chateau-langeais-castillo-loira/",
    "fuente_texto" => "loirelovers.fr"
  ],
  [
    "src" => "https://media.istockphoto.com/id/458137729/es/foto/de-langeais.jpg?s=612x612&w=0&k=20&c=GZ43sYCO2G50jFnenKdNnd28l6PuUQQDdD5bl2expPc=",
    "alt" => "Patio interior y torre principal",
    "pie" => "Patio interior",
    "fuente_url" => "https://www.istockphoto.com/es/fotos/castillo-de-langeais",
    "fuente_texto" => "istockphoto.com"
  ],
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/n-XkSzNF/Chateaux-de-la-Loire/Chateau-de-Langeais/i-k6NhBrg/0/e2588ae7/L/Chateau_langeais_mariage_royal-L.jpg",
    "alt" => "Salones históricos del Castillo de Langeais",
    "pie" => "Salones restaurados",
    "fuente_url" => "https://loirelovers.fr/es/visitar-chateau-langeais-castillo-loira/",
    "fuente_texto" => "loirelovers.fr"
  ],  [
    "src" => "https://www.all-free-photos.com/images/chateaux-3/PI5285-hr.jpg",
    "alt" => "Castillo de Langeais con murallas y torres",
    "pie" => "Vista exterior del castillo",
    "fuente_url" => "https://www.all-free-photos.com/show/showphoto.php?idph=PI17602&lang=sp",
    "fuente_texto" => "all-free-photos.com"
  ],
  [
    "src" => "https://mf-prod.com/langeais/wp-content/uploads/sites/9/2014/08/Cha%CC%82teau-de-Langeais-cour-inte%CC%81rieure-1%C2%A9J.B.Rabouan-copie-845x684.jpg",
    "alt" => "Patio interior de Langeais",
    "pie" => "Patio interior y torre principal",
    "fuente_url" => "https://chateau-de-langeais.com/es/",
    "fuente_texto" => "chateau-de-langeais.com"
  ],
  [
    "src" => "https://www.france-voyage.com/visuals/photos/castillo-langeais-9057_w300.webp",
    "alt" => "Salones históricos del Castillo de Langeais",
    "pie" => "Salones restaurados",
    "fuente_url" => "https://www.france-voyage.com/francia-guia-turismo/castillo-langeais-910.html",
    "fuente_texto" => "france-voyage.com"
  ]
];
?>