<?php
// ℹ️ SECCIÓN: INFORMACIÓN PRÁCTICA - CHAMBORD
$info_titulo = "ℹ️ Información práctica";

$info_detalles = [
  "Dirección: Château de Chambord, 41250 Chambord, Francia.",
  "Horario: Todos los días 9:00 - 18:00.",
  "Precio: Adultos 14,50€, menores de 18 años gratis.",
  "Acceso: A 15 km de Blois, accesible en coche o autobús."
];

$info_mas = "ℹ️ Más información: visita la web oficial de $nombreLugar";
$info_web_texto = "aquí";
$info_web_estilo = "color:#1a0dab; text-decoration:underline;";
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/sections/print-informacion-practica-generico.php"; ?>