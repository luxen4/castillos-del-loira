<?php require 'leer_csv_amazon.php'; ?>

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