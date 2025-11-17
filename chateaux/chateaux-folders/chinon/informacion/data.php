<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/funciones/crear-figure-generico.php'; ?>  

<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/chateaux/amboise/img/data-vistas-castillo.php'; ?>  
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chateaux-folders/{$slug}/img/data-retratos-EnriqueII-LeonorAquitania.php"; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chateaux-folders/{$slug}/img/data-arquitectura.php"; ?>



<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - FORTALEZA REAL DE CHINON
$introduccion = [
  "id" => "informacion",
  "titulo" => "🏰 Descubre la Fortaleza Real de Chinon",
  "parrafos" => [

    "La <strong>Fortaleza Real de Chinon</strong>, erguida sobre un espolón rocoso que domina las aguas tranquilas del <strong>río Vienne</strong>, es uno de los enclaves más emblemáticos de la historia de Francia. Su silueta alargada, recortada contra el horizonte del <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a>, recuerda los días en que era bastión de poder, escenario de alianzas, intrigas y decisiones que marcaron el destino de reinos enteros.",

    "Originaria del siglo <strong>X</strong> y ampliada a lo largo de los siglos siguientes, la fortaleza fue primero un baluarte de los condes de Blois y de Anjou antes de convertirse en una de las principales residencias de los <strong>Plantagenet</strong>. En sus murallas resonaron las voces de <strong>Enrique II de Inglaterra</strong> y de su esposa <strong>Leonor de Aquitania</strong>, dos de las figuras más poderosas y fascinantes del medievo. Fue en Chinon donde Enrique II respiró por última vez en 1189, cerrando un capítulo legendario de la historia europea."
    . $arquitectura_Chinon,

    "Pero Chinon es también un lugar profundamente ligado al nacimiento de la Francia moderna. En 1429, en plena <strong>Guerra de los Cien Años</strong>, una joven campesina llamada <strong>Juana de Arco</strong> llegó hasta el castillo para presentarse ante el delfín <strong>Carlos de Valois</strong>. En la penumbra de la gran sala del trono, la joven reconoció al futuro <strong>Carlos VII</strong> oculto entre su corte, ganándose su confianza y cambiando para siempre el curso del conflicto. Ese encuentro, ocurrido en el corazón de Chinon, es uno de los momentos más míticos de la historia de Francia.",

    "Arquitectónicamente, la fortaleza es un fascinante palimpsesto de estilos y épocas. A lo largo de sus tres recintos —<strong>Fort Saint-Georges</strong>, <strong>Château du Milieu</strong> y <strong>Fort du Coudray</strong>— se descubren torres macizas, murallas almenadas, pasadizos ocultos y salas abovedadas que narran siglos de evolución militar. La restauración contemporánea ha sabido combinar el respeto al patrimonio con recursos museográficos innovadores que devuelven la vida al castillo sin alterar su espíritu medieval.",

    "En el interior, exposiciones interactivas, maquetas y proyecciones audiovisuales recrean la atmósfera de la época, permitiendo al visitante adentrarse en los días en que caballeros, reyes y mensajeros recorrían sus pasillos de piedra. La historia de <strong>Juana de Arco</strong> ocupa un lugar central, con una reconstrucción inmersiva de su legendaria audiencia y documentos que muestran la trascendencia política y espiritual de su misión.",

    "Desde las murallas y torres de vigilancia, las vistas panorámicas sobre el <strong>Valle del Vienne</strong> son simplemente sobrecogedoras. La fortaleza, envuelta en el murmullo del viento y el canto de las aves, ofrece una experiencia que va más allá del turismo: es un viaje sensorial y emocional al corazón de la Edad Media, un lugar donde la piedra conserva aún el eco de los ideales de fe, poder y libertad que dieron forma a Francia. Hoy, la <strong>Fortaleza Real de Chinon</strong> no es solo un monumento histórico, sino un símbolo vivo de la memoria nacional y del espíritu indomable de su gente."
  ]
];


// 📸 SECCIÓN: GALERÍA DE LA FORTALEZA REAL DE CHINON
$titulo = "📸 Galería";
$texto = "Imágenes de la imponente Fortaleza Real de Chinon, con sus murallas medievales, torres defensivas y vistas panorámicas sobre el río Vienne y la ciudad histórica.";

$figuras = [
  [
    "src" => "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/67b/forteresse-chinon-credit-adt-touraine-jc-coutand-2030-1.webp",
    "alt" => "Fortaleza Real de Chinon",
    "pie" => "Vista panorámica de la Fortaleza Real de Chinon",
    "fuente_url" => "https://www.valledelloira-francia.es/sitio-cultural/fortaleza-real-de-chinon/",
    "fuente_texto" => "valledelloira-francia.es"
  ],
  [
    "src" => "https://photos.smugmug.com/Vallee-loire/n-XkSzNF/Chateaux-de-la-Loire/Forteresse-Chinon/i-mMbBRrf/1/D473sjsG5r8XwX86QsLLbzK3QfWcp3kKWHQTWK8gq/L/forteresse-de-chinon-150-L.jpg",
    "alt" => "Patio interior y torres de Chinon",
    "pie" => "Patio interior y torres",
    "fuente_url" => "https://loirelovers.fr/es/visitar-fortaleza-real-chinon/",
    "fuente_texto" => "loirelovers.fr"
  ],
  [
    "src" => "https://www.civitatis.com/f/francia/chinon/galeria/panoramica-fortaleza-real-chinon.jpg",
    "alt" => "Fortaleza Real de Chinon",
    "pie" => "Vista aerea de la Fortaleza Real de Chinon",
    "fuente_url" => "https://www.civitatis.com/es/chinon/entrada-fortaleza-real-chinon/?srsltid=AfmBOoqrtmzo9RD0diz58nwW3_fWAZ-QFALQ2i6FBoXE1SwutR5HRyl-",
    "fuente_texto" => "civitatis.com"
  ]
];/* Meter de las mías */
?>

