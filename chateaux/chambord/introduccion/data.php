<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE CHAMBORD
$introduccion = [
  "id" => "introduccion",
  "titulo" => "🏰 Descubre el Castillo de Chambord",
  "parrafos" => [
    "<?= \$descripcion ?>",
    "Construido por orden de Francisco I en el siglo XVI, Chambord es un símbolo del poder real y del genio arquitectónico del Renacimiento. Su emblemática escalera de doble hélice y su impresionante fachada lo convierten en una visita obligada del Valle del Loira."
  ]
];
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/sections/introduccion/template-introduccion-generico.php"; ?>