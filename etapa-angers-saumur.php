<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/etiquetasmeta.php'; ?>

  <meta content="summary" name="twitter:card">
  <meta name="twitter:title" content="Estoy Angers y Saumur">
  <meta content="@valleLoira" name="twitter:site">
  <meta content="@valleLoira" name="twitter:creator">
  <meta name="twitter:image" content="img/logo.png">
  <meta name="twitter:description" content="Angers y saumur, paradas obligadas en tu ruta por el valle del Loira, un viaje inolvidable">

  <title>Angers | Saumur</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

</head>

<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/navegacion.php'; ?>
  <?php
      $zona_atras_enlace = "etapa-nantes-angers.php";
      $zona_atras_marcador = "Zona Nantes y Angers";
      $zona_adelante_enlace = "etapa-saumur-chinon-langeais.php";
      $zona_adelante_marcador = "Zona Saumur, Chinon y Langeais";
      require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas_arriba.php';
    ?>

  <div class="container">
    <div id="principio" class="row">
      <section class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <article>
          <h4 class="titulo-ciudad">Zona de Angers y Saumur</h4>
          <article>
            
        </section>

      </div>
    </div>  


    <?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas.php';
    ?>

  </div>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/copyright.php'; ?>




  <script src="./bootstrap/js/jquery-3.4.1.slim.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/js.js"></script>

</body>

</html>
