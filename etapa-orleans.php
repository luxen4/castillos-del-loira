<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/etiquetasmeta.php'; ?>

    <meta content="summary" name="twitter:card">
    <meta name="twitter:title" content="Estoy en la Friki-Shirt">
    <meta content="@frikiShirt" name="twitter:site">
    <meta content="@frikiShirt" name="twitter:creator">
    <meta name="twitter:image" content="img/logo.png">
    <meta name="twitter:description" content="Orleans y alrededores, una parada obligada en tu ruta por el valle del Loira, un Viaje Inolvidable">

    <title>Orleans y Alrededores</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/navegacion.php'; ?>

    <?php
      $zona_atras_enlace = "etapa-blois-orleans.php";
      $zona_atras_marcador = "Zona Blois y Orleans";
      $zona_adelante_enlace = "";
      $zona_adelante_marcador = "";
      require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas_arriba.php';
    ?>

    <div class="container">
        <article>
            <h4 class="titulo-ciudad">Zona de Orleans.</h4>
            <p>
                Aunque el Valle del Loira y su Ruta por los castillos no termina aqui
                y hay más lugares que merecerían
                nuestra atención, finalizaremos en esta parte.
                La visita a la ciudad de Orleans es de obligado cumplimiento.
            </p>
        </article>


        <div class="row">
            <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12 centrado">
                <details>
                    <summary>Algunos de los Castillos Cercanos</summary>
                    <div class="row">
                        <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                            <a href="https://www.chateaudeblois.fr/">
                                <figure style="text-align: center;">
                                    <img src="img/castillos/castle-blois.png" alt="Château de Blois.">
                                    <figcaption class="">Château de Blois</figcaption>
                                </figure>
                            </a>
                        </div>


                        <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                            <a href="https://www.chateau-de-meung.com/fr/">
                                <figure>
                                    <img src="img/castillos/castle-meung-sur-loire.png" alt="Château de Meung sur Loire.">
                                    <figcaption class="">Château de Meung sur Loire.</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                            <a href="http://www.chateauchamerolles.fr/">
                                <figure style="text-align: center;">
                                    <img src="img/castillos/castle-camerolles.png" alt="Château de Camerolles.">
                                    <figcaption class="">Château de Camerolles.</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                            <a href="">
                                <figure style="text-align: center;">
                                    <img src="img/castillos/castle-sully-sur-loire.png" alt="Château de Sully-sur-Loire.">
                                    <figcaption class="">Château de Sully-sur-Loire</figcaption>
                                </figure>
                            </a>
                        </div>

                        <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-6 col-6">
                            <a href="https://www.valledelloira-francia.es/organizar/visitas/castillos/chateau-de-la-ferte-saint-aubin">
                                <figure>
                                    <img src="img/castillos/ferte-st-aubin.png" alt="La Ferte St-Aubin.">
                                    <figcaption class="">La Ferte St-Aubin.</figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </details>
            </div>
        </div>
       
       <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas.php'; ?>
    </div>



    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/copyright.php'; ?>

    <script src="./bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/js.js"></script>

</body>

</html>


<!--https://viajes.chavetas.es/guia/valle-del-loira/mejores-castillos-del-loira-imprescindibles/-->