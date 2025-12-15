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

  <?php $carpeta='chateaux'; require RUTA_ESTRUCTURA . "/head-generico.php"; ?>

  <body class="bg-gray-50 text-gray-800">
    <!-- HEADER -->
    <?php //require RUTA_ESTRUCTURA . "/header/header-inicio-faqs.php"; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>


    <?php require RUTA_ESTRUCTURA . "/hero/hero-generico.php"; ?>

    <?php require RUTA_ESTRUCTURA . "/paginas-castillos/main/main-generico.php"; ?>
  
    <?php require RUTA_ESTRUCTURA . "/footer/footer-generico-2.php"; ?>

    <?php //require RUTA_CHATEAUX . "/{$slug}/schemas/schemas-body.php"; ?>
    <?php require RUTA_ESTRUCTURA . "/paginas-castillos/body/schemas/body-generico.php"; ?>
  </body>

</html>
