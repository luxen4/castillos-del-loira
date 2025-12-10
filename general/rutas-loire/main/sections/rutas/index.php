<!-- ✅ SECCIÓN DE RUTAS -->
<section class="bg-white p-1 md:p-6 rounded-lg shadow-lg space-y-10">

    <!-- 🌿 Ruta 1: Castillos -->
    <div>
        <h2 id="ruta-castillos-imprescindibles" class="<?= $h2_style ?>">Ruta:<br> Castillos imprescindibles</h2>
        <p class="text-lg mb-4">
            El Valle del Loira es Patrimonio de la UNESCO. Aquí encontrarás palacios,
            jardines renacentistas y paisajes fluviales únicos en Europa.
        </p>

        <ul class="space-y-4">
            <li>
                <a href="/val-de-loire/chateaux/chateau-de-chambord.php" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🏰 Castillo de Chambord
                </a>
                — Icono del Renacimiento francés y obra monumental de Francisco I.
            </li>
            <li>
                <a href="/val-de-loire/chateaux/chenonceau.php" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🌉 Castillo de Chenonceau
                </a>
                — El castillo construido sobre el río Cher, conocido como “el castillo de las damas”.
            </li>
            <li>
                <a href="/val-de-loire/chateaux/clos-luce.php" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🚀 Clos-Lucé (Casa de Leonardo da Vinci)
                </a>
                — Última residencia de Leonardo da Vinci, llena de maquetas y proyectos.
            </li>
        </ul>
    </div>

    <div class="block lg:hidden">
        <?php
        $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
        ?>
    </div>


    <!-- 🍷 Ruta 2: Vino & Gastronomía -->
    <div>
        <h2 id="ruta-vino-gastronomia" class="<?= $h2_style ?>">Ruta:<br> Vinos del Loira & Gastronomía</h2>
        <p class="text-lg mb-4">
            Cata vinos únicos como Sauvignon Blanc, Touraine o Chinon. Descubre queserías y
            restaurantes tradicionales en pequeños pueblos encantadores.
        </p>

        <ul class="space-y-4">
            <li>
                <a href="https://www.vinsvaldeloire.fr/es" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🍇 Ruta oficial de vinos del Valle del Loira
                </a>
                — Información de todas las bodegas disponibles para visita y catas.
            </li>
            <li>
                <a href="https://cave-bourgueil.fr/" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🍷 Bourgueil - Cuna del vino tinto del Loira
                </a>
                — Visita bodegas subterráneas y prueba vinos cabernet franc.
            </li>
            <li>
                <a href="https://www.laflecheduloire.com/" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🧀 Productos locales y gastronomía
                </a>
                — Mercados tradicionales con queso, foie y repostería del Loira.
            </li>
        </ul>
        <div class="text-center mt-6">
            <a href="/val-de-loire/general/ruta-de-vinos/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🍇 Ruta de Vinos
            </a>
            <a href="/val-de-loire/general/bourgueil/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🍷 Bourgueil
            </a>
            <a href="/val-de-loire/general/gastronomia/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🍽️ Gastronomía
            </a>
        </div>

    </div>
    <?php /* <div class="block lg:hidden">*/ ?>
    <?php $alineacion = 4;
    require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
    ?>
    <?php /* </div> */ ?>

    <!-- 🌿 Ruta 3: Ríos & Paisajes del Valle del Loira -->
    <div>
        <h2 id="ruta-rios-paisajes" class="<?= $h2_style ?>">Ruta:<br> Ríos y Paisajes del Valle del Loira</h2>
        <p class="text-lg mb-4">
            Recorre las orillas del Loira, observa sus islas naturales, sus afluentes
            y sus paisajes cambiantes. Ideal para rutas en bicicleta, paseos tranquilos
            y fotografía de naturaleza.
        </p>

        <ul class="space-y-4">
            <li>
                <a href="https://www.loireavelo.fr/" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🚴 Ruta Loire à Vélo (Loira en bicicleta)
                </a>
                — La ruta ciclista más famosa de Francia, 900 km siguiendo el río Loira.
            </li>

            <li>
                <a href="https://www.valdeloire-france.com/es/explorar/actividades-naturaleza" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🌿 Naturaleza y espacios protegidos del Loira
                </a>
                — Reservas naturales, humedales, aves migratorias y miradores panorámicos.
            </li>

            <li>
                <a href="https://www.valdeloire-france.com/es/explorar" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🗺️ Senderos y miradores del Valle del Loira
                </a>
                — Caminos señalizados a lo largo del río, perfectos para senderismo fotográfico.
            </li>
        </ul>
        <div class="text-center mt-6">
            <a href="/val-de-loire/general/naturaleza/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🌿 Naturaleza
            </a>
        </div>
    </div>

    <!-- 🚴 Ruta 4: Bicicleta por el Loira -->
    <div>
        <h2 id="ruta-la-loire-a-velo" class="<?= $h2_style ?>">Ruta:<br> "La Loire à Vélo" (Cicloturismo)</h2>
        <p class="text-lg mb-4">
            Una de las rutas en bicicleta más bonitas de Europa: 900 km de carril bici
            con castillos, puentes históricos y pueblos medievales.
        </p>

        <ul class="space-y-4">
            <li>
                <a href="https://www.loireavelo.fr/en/" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🚴‍♂️ Página oficial de Loire à Vélo
                </a>
                — Mapas, etapas y hoteles adaptados a cicloturistas.
            </li>
            <li>
                <a href="/val-de-loire/ciudades/tours.php" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    🏙️ Tours (ciudad histórica)
                </a><?php /* Noticias de Tours -> https://www.tours-tourisme.fr/ */ ?>
                — Punto de salida ideal para comenzar el recorrido.
            </li>
            <li>
                <a href="/val-de-loire/ciudades/orleans.php" target="_blank"
                    class="<?= $a_style_emerald_700_semibold_hover_underline; ?>">
                    ⚜️ Orléans
                </a><?php /* Noticias de Orleans -> https://www.orleans-metropole.fr/*/ ?>
                — Ciudad vinculada a Juana de Arco, final de muchas rutas ciclistas.
            </li>
        </ul>


        <div class="text-center mt-6">
            <a href="/val-de-loire/general/loire-a-velo/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🚴 Loire a Velo
            </a>
            <a href="/val-de-loire/general/senderos/"
                class="inline-block text-emerald-700 font-bold text-lg hover:text-emerald-800 hover:underline transition-colors duration-200">
                🗺️ Senderos
            </a>
        </div>
    </div>
    <?php $alineacion = 4;
    require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";  ?>

</section>