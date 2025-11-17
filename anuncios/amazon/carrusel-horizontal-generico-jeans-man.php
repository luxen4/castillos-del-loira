<?php require 'leer_csv_amazon.php'; ?>

<script>
    let currentIndex_jeans_man = 0;
    const productos_jeans_man = <?php echo json_encode($productos); ?>;
    const imagenesPequenas_jeans_man = [];
    const linksPequenos_jeans_man = [];
    const nombreElemento_jeans_man = "jeans_man";

    // Inicializar arrays con los elementos DOM
    for (let i = 0; i < 4; i++) {
        const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_jeans_man);
        const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_jeans_man);
        if (imagen && enlace) {
            imagenesPequenas_jeans_man.push(imagen);
            linksPequenos_jeans_man.push(enlace);
        }
    }

    // Función para actualizar el carrusel
    function actualizarCarrusel_jeans_man() {
        // Incrementamos el índice en bloques de 4 para mostrar el siguiente "grupo"
        currentIndex_jeans_man = (currentIndex_jeans_man + 4) % productos_jeans_man.length;

        for (let i = 0; i < 4; i++) {
            const productoPequeno_jeans_man = productos_jeans_man[(currentIndex_jeans_man + i) % productos_jeans_man.length];
            if (imagenesPequenas_jeans_man[i] && linksPequenos_jeans_man[i]) {
                imagenesPequenas_jeans_man[i].src = productoPequeno_jeans_man.src;
                imagenesPequenas_jeans_man[i].alt = productoPequeno_jeans_man.alt;
                linksPequenos_jeans_man[i].href = productoPequeno_jeans_man.href;
            }
        }
    }

    // Ejecutar cada 4 segundos
    setInterval(actualizarCarrusel_jeans_man, 4000);
</script>