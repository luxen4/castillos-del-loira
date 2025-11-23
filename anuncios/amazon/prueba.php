<?php
// Genera un número aleatorio entre 1 y 3
$opcion = rand(1, 3);

switch ($opcion) {
    case 1:
        $numeroAleatorio = 0;
        $archivoPublicidad = "botas-hombre";
        break;

    case 2:
        $numeroAleatorio = 3;
        $archivoPublicidad = "jeans-man";
        break;

    case 3:
        $numeroAleatorio = 5;
        $archivoPublicidad = "sneakers";
        break;
} 

require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-".$archivoPublicidad.".php";
?>