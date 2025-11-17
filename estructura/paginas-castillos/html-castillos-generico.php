<?php
// Definir constantes de rutas
define('RUTA_BASE', $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire');
define('RUTA_CHATEAUX', RUTA_BASE . '/chateaux');
define('RUTA_ESTRUCTURA', RUTA_BASE . '/estructura'); ?>


<?php
// Ruta de datos específicos de cada castillo
$dataFile = $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/data/{$slug}.php";
if(file_exists($dataFile)) {
    require $dataFile;
}
?>


<?php
// Incluir variables iniciales del castillo
require RUTA_CHATEAUX . "/chateaux-folders/{$slug}/variables-iniciales.php";
?>

<!DOCTYPE html>
<html lang="es">

  <?php 
  $carpeta='chateaux';
  require RUTA_ESTRUCTURA . "/head-generico.php"; ?>

  <body class="bg-gray-50 text-gray-800">

    <?php require RUTA_ESTRUCTURA . "/header/enlaces-principales-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/hero/hero-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/paginas-castillos/main/main-generico.php"; ?>
  <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
    
    <?php require RUTA_ESTRUCTURA . "/footer/footer-generico.php"; ?>

    <?php //require RUTA_CHATEAUX . "/{$slug}/schemas/schemas-body.php"; ?>
    <?php require RUTA_ESTRUCTURA . "/paginas-castillos/body/schemas/body-generico.php"; ?>
  </body>

</html>
