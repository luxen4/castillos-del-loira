<!DOCTYPE html>
<html lang="es">

<head>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/etiquetasmeta.php'; ?>

  <meta content="summary" name="twitter:card">
  <meta name="twitter:title" content="Estoy en Blois y Orleans">
  <meta content="@bloisOrleans" name="twitter:site">
  <meta content="@bloisOrleans" name="twitter:creator">
  <meta name="twitter:image" content="img/logo.png">
  <meta name="twitter:description" content="Zona entre Blois y Orleans, una parada obligada en tu ruta por el valle del Loira, un viaje inolvidable">

  <title>Etapa Blois | Orleans</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

</head>

<body>

  <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/navegacion.php'; ?>
  <?php
      $zona_atras_enlace = "etapa-amboise-blois.php";
      $zona_atras_marcador = "Zona Amboise y Blois";
      $zona_adelante_enlace = "etapa-orleans.php";
      $zona_adelante_marcador = "Orleans";
      require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas_arriba.php';
    ?>

  <div class="container">
    <div class="row">
      <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12">
        <section>
          <article>
            <h4 id="principio" class="titulo-ciudad">Zona de Blois y Orleans.</h4>
            <p>
              Aunque el Valle del Loira y su Ruta por los castillos no termina aqui
              y hay más lugares que merecerían nuestra atención, finalizaremos en esta parte.
              La visita a la ciudad de Orleans es de obligado cumplimiento.
            </p>

            <nav style="text-align: center;">
              <em><a href="<?php echo '/castillos-del-loira/ciudades/Blois.php' ?>">Blois</a></em><br>
              <em><a href="<?php echo '/castillos-del-loira/ciudades/Orleans.php' ?>">Orleans</a></em>
            </nav>
          </article>

        </section>
      </div>

      <div class="row">
        <div class="col-xl-12 text-center col-lg-4 col-md-4 col-sm-6 col-12 centrado">
          <details>
            <summary>Algunos de los Castillos Cercanos</summary>

            <div class="row">
              <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                <a href="https://www.chambord.org/fr/">
                  <figure>
                    <img alt="Château de Chambord." src="img\castillos\etapa-blois-orleans/castle-chambord.jpg">
                    <figcaption>Château de Chambord</figcaption>
                  </figure>
                </a>
              </div>

              <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                <a href="https://www.chateau-cheverny.fr/">
                  <figure>
                    <img src="img\castillos\etapa-blois-orleans/castle-cheverni.gif" alt="Château de Cheverny">
                    <figcaption>Château de Cheverny</figcaption>
                  </figure>
                </a>
              </div>

              <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                <a href="">
                  <figure>
                    <img src="img\castillos\etapa-blois-orleans/castle-valencay.gif" alt="Château de Valençay">
                    <figcaption class="">Château de Vallençay</figcaption>
                  </figure>
                </a>
              </div>
            </div>


            <div class="row">
              <div class="col-xl-6 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                <a href="http://www.chateau-bouges.fr/">
                  <figure>
                    <img alt="Château de Bouges." src="img\castillos\etapa-blois-orleans/castle-bouges.jpg">
                    <figcaption>Château de Bouges</figcaption>
                  </figure>
                </a>
              </div>

              <div class="col-xl-6 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                <a href="https://www.valledelloira-francia.es/organizar/visitas/castillos/chateau-de-la-ferte-saint-aubin">
                  <figure>
                    <img src="img\castillos\etapa-blois-orleans/ferte-san-aubin.gif" alt="La Ferte de St-Aubin">
                    <figcaption>La Ferte St-Aubin</figcaption>
                  </figure>
                </a>
              </div>
            </div>

          </details>
        </div>
      </div>


    </div>

<?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas.php'; ?>

   

  </div>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/copyright.php'; ?>

  <script src="./bootstrap/js/jquery-3.4.1.slim.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/js.js"></script>

</body>

</html>

<style>
 
</style>