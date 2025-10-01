<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/etiquetasmeta.php'; ?>

    <meta content="summary" name="twitter:card">
    <meta name="twitter:title" content="Estoy en el Valle del Loira">
    <meta content="@valleLoira" name="twitter:site">
    <meta content="@valleLoira" name="twitter:creator">
    <meta name="twitter:image" content="img/logo.png">
    <meta name="twitter:description" content="Viaje por los castillos del Valle del Loira, un Viaje Inolvidable">

    <title>Viaje por los Castillos del Valle del Loira</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/navegacion.php'; ?>

    <?php
      $zona_atras_enlace = "";
      $zona_atras_marcador = "";
      $zona_adelante_enlace = "etapa-nantes-angers.php";
      $zona_adelante_marcador = "Zona Nantes y Angers";
      require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas_arriba.php';
    ?>

    <div class="container">

        <div class="row">

            <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12 centrado">


                <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/carrusel-index.php'; ?>

                <div id="principio" class="row">
                    <div class="col-xl-12 text-center col-lg-12 col-md-12 col-sm-12 col-12 centrado">
                        <article>
                            <h2 id="titulo-index">El Encanto del Valle del Loira</h2>
                            <p>
                                <strong>El valle de Loira</strong> se encuentra en Francia y es famoso por su riqueza, gran variedad y
                                cantidad de castillos que hacen que sea un destino cada vez más seleccionado entre los turistas. <br>
                                Es raro que no no nos traslademos tan solo unos pocos kilometros y no aparezca una de estas
                                maravillosas construciones, ya que se encuentar por todo largo y ancho del valle. <br>
                                La zona fundamentalmente comprende aproximadamente <ins>desde la ciudad de Nantes hasta Orleans
                                </ins>a lo largo del <u>Rio Loire</u>.
                            </p>

                            <div class="row">
                                <div class="col-xl-11 text-center col-lg-11 col-md-11 col-sm-11 col-11 centrado">
                                    <figure>
                                        <img src="img/maps/map-val-loire.png" alt="Mapa del Valle del Loira">
                                        <figcaption>Mapa del Valle del Loira</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <p>
                                Es una gran oportunidad para descubrir parte de la historia francesa, un ejemplo de
                                ello esla ciudad de Orleans con su heroína <strong>Juana de Arco</strong>. y a la vez poder disfrutar
                                de grandes paisajes urbanos.
                            </p>
                            <p>
                                Nos quedaremos con un gran sabor de boca y desearemos hacer cuanto antes otra visita para
                                ver lo que no nos ha dado tiempo, aunque como ya hemos dicho, rincones ya visitados en
                                nuestro siguiente viaje podran
                                encontrarse remodelados y conseguiran sorprendernos nuevamente.
                            </p>

                            <p>
                                Castillos como el de <b>Chambord, Chenonceau y Villandri</b> nos maravillarán con su
                                belleza, nos los encontraremos de todo tipo y estética, cada uno con su encanto y diferente
                                historia a sus espaldas.
                            </p>


                            <div id="chambord-chenonceau-villandri" class="row">

                                <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-4 col-11 centrado">
                                    <figure>
                                        <img src="img/castillos/castillo-de-chambord.jpg" alt="Château de Chambord">
                                        <figcaption>Chambord</figcaption>
                                    </figure>
                                </div>

                                <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-4 col-11 centrado">
                                    <figure>
                                        <img src="img/castillos/castillo-de-chenonceau.png" alt="Château de Chenonceau">
                                        <figcaption>Chenonceau</figcaption>
                                    </figure>
                                </div>

                                <div class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-4 col-11 centrado">
                                    <figure>
                                        <img src="img/castillos/castillo-de-villandri.png" alt="Château de Villandri">
                                        <figcaption>Villandri</figcaption>
                                    </figure>
                                </div>
                            </div>

                            <p>
                                Castilos tematizados como el <b>Castillo de Cheverni</b> dedicados a personajes célebres como
                                <u>Tintín</u> o el <b>Castillo de Usse</b> dedicado al cuento de a la <u>Bella Durmiente</u> (pasa mí fue el que más
                                me gustó)
                            </p>

                            <div class="row">
                                <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-11 centrado">
                                    <figure>
                                        <img src="img/castillos/castle-Tintín.png" alt="Castillo de Cheverni">
                                        <figcaption>Castillo de Cheverni dedicado a Tintín</figcaption>
                                    </figure>
                                </div>

                                <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-11 centrado">
                                    <figure>
                                        <img src="img/castillos/castle-usse-bella-durmiente.png" alt="Castillo de Usse, Bella Durmiente">
                                        <figcaption>Interior del Castillo de Usse dedicado a la Bella Durmiente
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>

                            <p>
                                En cualquier caso, cada uno de ellos posee una peculiaridad distinta de la que
                                lograremos tener como bello recuerdo como por ejemplo el <b>Castillo de Breze</b> con sus
                                pasadizos subterraneos.
                            </p>



                            <div class="row">
                                <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-11 centrado">
                                    <figure>
                                        <figure>
                                            <img src="img/castillos/castle-Breze.png" alt="Castillo de Breze">
                                            <figcaption>Dibujo del castillo de Breze</figcaption>
                                        </figure>
                                </div>


                                <div class="col-xl-6 text-center col-lg-6 col-md-6 col-sm-6 col-11 centrado">
                                    <figure>
                                        <figure>
                                            <img src="img/castillos/panaderia-Breze.png" alt="Panadería del Castillo de Breze">
                                            <figcaption>Interior de la panadería del Castillo de Breze
                                            </figcaption>
                                        </figure>
                                </div>
                            </div>

                            <p>
                                Todas o casi todas las construciones estan en constante rehabilitación y muy bien
                                cuidadas para el disfrute turistico.
                            </p>

                            <p>
                                Por el camino en nuestro coche pasaremos por paisajes como el puente de Ancenis entre otros
                                digno de pasar por él.
                            </p>

                        </article>


                    </div>
                </div>

                <div class="ciudades-loira">
                    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/ciudades-loira.php'; ?>
                </div>


                <article id="consejos" style="border: solid 1px black; padding-right: 1em;">
                            <h5 style="text-align: center; margin-top: 1em;"><mark> Como consejos para este viaje...</mark></h5>
                            <div>
                                
                                <ul>
                                    <li>Valore la adquisición de un coche de alquiler para moverse cómodamente entre los
                                        distintos lugares.</li>

                                    <li>Fijar lugares estrategicos para hospedarse e iniciar cada etapa del viaje ahorrando
                                        tiempo y
                                        kilometros.</li>

                                    <li>Fruto de la experiencia, aconsejamos desglosar en etapas a 7 dias para mejor
                                        disfrute del
                                        viaje y darnos tiempo para el descanso.</li>

                                    <li>Puede consultar lugares para hospedarse aquí, aunque entendemos que igual prefiere
                                        otros más
                                        económicos, pero quién sabe,
                                        igual podría tener entre manos dar una maravillosa sorpresa a un ser querido.</li>
                                </ul>
                            </div>

                            <p style="width: 80%; text-align: center; margin: 0 auto;">
                                Esperamos que tras este paseo por el <b>Valle del Loira</b> obtenga la información
                                adecuada para
                                organizar su viaje y disfrute de él lo más posible.
                            </p>
                        </article>

                       <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas_arriba.php'; ?>

            </div>

        </div>
<?php 
      require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/enlaces_navegacion_zonas.php'; ?>
    </div>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/castillos-del-loira/_bloques/copyright.php'; ?>


    <script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>

</body>

</html>


<ins></ins>
<mark></mark>
<strong></strong>
<i></i>
<b></b>
<em></em>
<u></u>

<style>
    #consejos li{list-style: disc;}
</style>

<!--https://viajes.chavetas.es/guia/valle-del-loira/mejores-castillos-del-loira-imprescindibles/-->

<!--  https://www.w3schools.com/html/html_formatting.asp Para el SEO -->

<!-- https://www.serprobot.com/serp-check   SEO -->