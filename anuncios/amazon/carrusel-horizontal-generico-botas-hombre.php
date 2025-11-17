<?php require 'leer_csv_amazon.php'; ?>

<script>
    let currentIndex_botas_hombre = 0;
    const productos_botas_hombre = <?php echo json_encode($productos); ?>;
    const imagenesPequenas_botas_hombre = [];
    const linksPequenos_botas_hombre = [];
    const nombreElemento_botas_hombre = "botas_hombre";

    // Inicializar arrays con los elementos DOM
    for (let i = 0; i < 4; i++) {
        const imagen = document.getElementById('image_csv_' + i + '_' + nombreElemento_botas_hombre);
        const enlace = document.getElementById('image-link_csv_' + i + '_' + nombreElemento_botas_hombre);
        if (imagen && enlace) {
            imagenesPequenas_botas_hombre.push(imagen);
            linksPequenos_botas_hombre.push(enlace);
        }
    }

    // Función para actualizar el carrusel
    function actualizarCarrusel_botas_hombre() {
        // Incrementamos el índice en bloques de 4 para mostrar el siguiente "grupo"
        currentIndex_botas_hombre = (currentIndex_botas_hombre + 4) % productos_botas_hombre.length;

        for (let i = 0; i < 4; i++) {
            const productoPequeno_botas_hombre = productos_botas_hombre[(currentIndex_botas_hombre + i) % productos_botas_hombre.length];
            if (imagenesPequenas_botas_hombre[i] && linksPequenos_botas_hombre[i]) {
                imagenesPequenas_botas_hombre[i].src = productoPequeno_botas_hombre.src;
                imagenesPequenas_botas_hombre[i].alt = productoPequeno_botas_hombre.alt;
                linksPequenos_botas_hombre[i].href = productoPequeno_botas_hombre.href;
            }
        }
    }

    // Ejecutar cada 4 segundos
    setInterval(actualizarCarrusel_botas_hombre, 4000);
</script>