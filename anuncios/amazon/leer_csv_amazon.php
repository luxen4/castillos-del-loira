<?php
$arrayElementos = array(
    array("nombre" => "botas_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "chaquetas_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "dress_woman", "tipoPublicidad" => "horizontal"),
    array("nombre" => "jeans_man", "tipoPublicidad" => "horizontal"),
    array("nombre" => "shorts", "tipoPublicidad" => "horizontal"),
    array("nombre" => "sneakers", "tipoPublicidad" => "horizontal"),
    array("nombre" => "sports_shirts", "tipoPublicidad" => "horizontal"),
    array("nombre" => "vaqueros_hombre", "tipoPublicidad" => "horizontal"),
    array("nombre" => "camisas_hawaianas_man", "tipoPublicidad" => "horizontal"),
    array("nombre" => "atuendo1", "tipoPublicidad" => "atuendo")
);


if (!function_exists('leer_CSV')) {
    // Función para leer el CSV y devolver los productos
    function leer_CSV($csv_file)
    {
        $productos = [];

        // Verificar si el archivo CSV existe
        if (file_exists($csv_file)) {
            if (($handle = fopen($csv_file, "r")) !== FALSE) {
                $header = fgetcsv($handle); // Leer cabecera

                // Leer cada fila
                while (($row = fgetcsv($handle)) !== FALSE) {
                    $productos[] = [
                        "href"   => $row[1] ?? "",
                        "src"    => $row[2] ?? "",
                        "alt"    => $row[3] ?? "",
                        "marca"  => $row[4] ?? "",
                        "precio" => $row[5] ?? ""
                    ];
                }
                fclose($handle);
            } else {
                echo "Error al abrir el archivo CSV.";
            }
        } else {
            echo "El archivo CSV no existe.";
        }

        return $productos;
    }
}
?>
<?php
$csv_file = $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/amazon_{$archivoPublicidad}_images.csv";
$productos = leer_CSV($csv_file); // Leer productos ?>
<?php require 'template-carrusel-horizontal-generico.php'; ?>