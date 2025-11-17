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
                                <div class="grid grid-cols-2 sm:grid-cols-2 
                                
<?php 
if($alineacion == 4){
    echo "md:grid-cols-4 gap-4";
}else if($alineacion == 2){
    echo "md:grid-cols-2 gap-6";}
?>

                                
                                
                                
                                
                                ">
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