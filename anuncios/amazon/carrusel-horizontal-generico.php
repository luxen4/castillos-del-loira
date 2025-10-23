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
// Generamos un número aleatorio entre 0 y 7
$numeroAleatorio = rand(0, 7);
$numeroAleatorio = 5;


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
                    "href"  => $row[1] ?? "",
                    "src"   => $row[2] ?? "",
                    "alt"   => $row[3] ?? "",
                    "marca" => $row[4] ?? "",
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

// Ruta al archivo CSV
$csv_file = $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/amazon_sneakers_images.csv';

// Leer productos
$productos = leer_CSV($csv_file);

// Imprimir para probar
echo "<pre>";
//print_r($productos);
echo "</pre>";
?>


<div class="w-full py-2 carrusel_auxiliar1">
    <div class="w-full max-w-screen-2xl mx-auto px-2 sm:px-2 lg:px-2">

        <h6 class="text-center text-sm font-semibold text-gray-500 uppercase tracking-widest mb-2">
            — Publicidad —
        </h6>

        <div class="w-full">
            <?php
            // Verificamos el tipo de publicidad
            if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "horizontal") {
                //require 'enHorizontal.php'; // Vista de publicidad horizontal
            ?>

                <div class="w-full my-2 py-2 px-1 rounded-lg" id="carouselExampleIndicators">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="max-w-screen-xl mx-auto">

                                <!-- Logo Amazon más grande y con margen inferior -->
                                <div class="mt-1 ml-1 mb-3 text-left">
                                    <img src="/Blog_Playas2025/logo_amazon1.png" alt="Amazon" class="w-20 h-auto">
                                </div>

                                <!-- Grid de productos -->
                                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
                                    <?php
                                    // Ajustamos el ciclo para mostrar 4 imágenes
                                    for ($i = 0; $i < 4; $i++) {
                                        echo '
                                <div class="text-center">
                                    <div class="aspect-square overflow-hidden rounded-lg shadow-sm bg-white p-2">
                                        <a id="image-link_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" href="' . $productos[$i]['href'] . '">
                                            <img 
                                                id="image_csv_' . $i . '_' . $arrayElementos[$numeroAleatorio]["nombre"] . '" 
                                                src="' . $productos[$i]['src'] . '" 
                                                alt="' . $productos[$i]['alt'] . '" 
                                                class="w-full h-full object-contain transition-transform duration-300 hover:scale-105"
                                            >
                                        </a>
                                    </div>
                                </div>
                            ';
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <?php
                    } else if ($arrayElementos[$numeroAleatorio]["tipoPublicidad"] == "vertical") {
                        require 'enUnoYtres.php'; // Vista de publicidad vertical
                    }
                        ?>
        </div>
    </div>
</div>


<script>
    let currentIndex_sneakers = 0;
    const productos_sneakers = <?php echo json_encode($productos); ?>;
    const imagenesPequenas_sneakers = [];
    const linksPequenos_sneakers = [];
    const nombreElemento_sneakers = "sneakers";

    // Inicializar arrays con los elementos DOM
    for (let i = 0; i < 4; i++) {
        const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_sneakers);
        const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_sneakers);
        if (imagen && enlace) {
            imagenesPequenas_sneakers.push(imagen);
            linksPequenos_sneakers.push(enlace);
        }
    }

    // Función para actualizar el carrusel
    function actualizarCarrusel_sneakers() {
        // Incrementamos el índice en bloques de 4 para mostrar el siguiente "grupo"
        currentIndex_sneakers = (currentIndex_sneakers + 4) % productos_sneakers.length;

        for (let i = 0; i < 4; i++) {
            const productoPequeno_sneakers = productos_sneakers[(currentIndex_sneakers + i) % productos_sneakers.length];
            if (imagenesPequenas_sneakers[i] && linksPequenos_sneakers[i]) {
                imagenesPequenas_sneakers[i].src = productoPequeno_sneakers.src;
                imagenesPequenas_sneakers[i].alt = productoPequeno_sneakers.alt;
                linksPequenos_sneakers[i].href = productoPequeno_sneakers.href;
            }
        }
    }

    // Ejecutar cada 4 segundos
    setInterval(actualizarCarrusel_sneakers, 4000);
</script>