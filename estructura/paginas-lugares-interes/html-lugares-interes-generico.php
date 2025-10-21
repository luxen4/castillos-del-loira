<?php
// Definir constantes de rutas
define('RUTA_BASE', $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire');
define('RUTA_LUGARES_INTERES', RUTA_BASE . '/ciudades/orleans/lugares-interesantes');
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
require RUTA_LUGARES_INTERES . "/{$slug}/variables-iniciales.php";
?>

<!DOCTYPE html>
<html lang="es">

  <?php require RUTA_ESTRUCTURA . "/paginas-lugares-interes/head/head-generico.php"; ?>

  <body class="bg-gray-50 text-gray-800">

    <?php require RUTA_ESTRUCTURA . "/header/enlaces-principales-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/hero/hero-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/paginas-lugares-interes/main/main-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/footer/footer-generico.php"; ?>

    <?php require RUTA_LUGARES_INTERES . "/{$slug}/schemas/schemas-body.php"; ?>

  </body>

</html>
