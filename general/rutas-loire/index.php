<?php
$title = "Rutas Valle del Loira 🌿 | Castillos, vino y naturaleza";
$carpeta = "general";
$slug = "rutas-loire";
$nombreLugar = "Rutas por el Valle del Loira";
$keywords = "Rutas Valle del Loira, Castillos Loira, Vino Valle del Loira, Gastronomía Loira, Naturaleza Loira, Turismo Loira, Loire à Vélo, Cicloturismo Loira, Paisajes Valle del Loira";
$descripcion = "Descubre las mejores rutas por el Valle del Loira: castillos como Chambord, Chenonceau, Amboise, gastronomía francesa, vino y paisajes inolvidables.";
$imagenHero = "https://alayag82.kesug.com/val-de-loire/assets/logo.png";
$web_site = "https://alayag82.kesug.com/val-de-loire";
$twitter = "@tu_twitter";


$h2_style='text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style_emerald_700_semibold_hover_underline='text-emerald-700 font-semibold hover:underline';

?>

<!DOCTYPE html>
<html lang="es">
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>

<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- ✅ HEADER -->
    <header class="bg-emerald-700 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-5 flex justify-between items-center">

            <div>
                <h1 class="text-3xl font-extrabold tracking-wide">🌿 Valle del Loira</h1>
                <h2 class="text-emerald-200 text-md mt-1">Rutas entre castillos, vino y naturaleza</h2>
            </div>

            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="/val-de-loire/index.php" class="hover:underline"><i class="fas fa-home"></i> Inicio</a>
                <a href="/val-de-loire/general/rutas-loire/index.php" class="hover:underline">🚴 Rutas</a>
            </nav>

        </div>
    </header>


    <div class="container mx-auto grid grid-cols-12 gap-6 mt-6 md:px-4 max-w-[1600px]">

<!-- ASIDE – Panel de navegación de rutas -->
<aside class="hidden md:block col-span-3 bg-white shadow-lg rounded-lg p-4 h-fit sticky top-24">

    <h3 class="text-xl font-bold text-emerald-700 mb-4 border-b pb-2">
        🗺️ Rutas del Valle del Loira
    </h3>

    <nav class="flex flex-col space-y-3 text-emerald-700 font-medium">

        <a href="#ruta-castillos-imprescindibles" 
           class="flex items-center gap-2 hover:text-emerald-900 hover:underline">
            🏰 Castillos imprescindibles
        </a>

        <a href="#ruta-vino-gastronomia" 
           class="flex items-center gap-2 hover:text-emerald-900 hover:underline">
            🍷 Vinos del Loira & Gastronomía
        </a>

        <a href="#ruta-rios-paisajes" 
           class="flex items-center gap-2 hover:text-emerald-900 hover:underline">
            🌿 Ríos y Paisajes del Valle
        </a>

        <a href="#ruta-loire-a-velo" 
           class="flex items-center gap-2 hover:text-emerald-900 hover:underline">
            🚴‍♂️ "La Loire à Vélo" – Cicloturismo
        </a>

    </nav>
</aside>

<!-- Botón móvil para abrir el menú lateral -->
<button id="openAsideBtn" 
        class="md:hidden fixed bottom-5 right-5 bg-emerald-700 text-white px-4 py-3 rounded-full shadow-xl flex items-center gap-2">
    <i class="fas fa-list"></i> Rutas
</button>


<!-- ASIDE MÓVIL -->
<div id="asideMobile" 
     class="fixed top-0 left-0 w-72 h-full bg-white shadow-xl p-5 transform -translate-x-full transition-transform duration-300 z-50 md:hidden">

    <button id="closeAsideBtn" class="text-xl font-bold pb-4">✖</button>

    <h3 class="text-xl font-bold text-emerald-700 mb-4 border-b pb-2">
        🗺️ Rutas del Valle del Loira
    </h3>

    <nav class="flex flex-col space-y-3 text-emerald-700 font-medium">

        <a href="#ruta-castillos-imprescindibles" class="hover:underline">🏰 Castillos imprescindibles</a>
        <a href="#ruta-vino-gastronomia" class="hover:underline">🍷 Vinos del Loira & Gastronomía</a>
        <a href="#ruta-rios-paisajes" class="hover:underline">🌿 Ríos y Paisajes del Valle</a>
        <a href="#ruta-loire-a-velo" class="hover:underline">🚴‍♂️ “La Loire à Vélo”</a>

    </nav>
</div>

<script>
document.getElementById("openAsideBtn").addEventListener("click", () => {
    document.getElementById("asideMobile").classList.remove("-translate-x-full");
});

document.getElementById("closeAsideBtn").addEventListener("click", () => {
    document.getElementById("asideMobile").classList.add("-translate-x-full");
});
</script>


        <!-- ✅ CONTENIDO PRINCIPAL -->
        <main class="col-span-12 lg:col-span-6 h-[128vh] overflow-y-auto">
            <!-- Breadcrumb a la izquierda -->
            <ol class="flex flex-wrap items-center gap-2 mb-6">
                <li>
                    <a href="/val-de-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">
                        🏰 Val-de-Loire
                    </a>
                </li>
                <li class="text-gray-400">/</li>
                <li>
                    <a href="/val-de-loire/general/rutas-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">
                        Rutas
                    </a>
                </li>
            </ol>


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
                            <a href="/val-de-loire/chateaux/chambord.php" target="_blank"
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
                    $alineacion = 4;require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
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
                <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
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
                <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";  ?>

            </section>

            <div class="text-center px-2 mt-1">
                <p>Puede encontrar más información sobre 🇫🇷 Turismo oficial en el Valle del Loira
                    <a href="https://www.france.fr/es/valle-del-loira" target="_blank"
                        class="text-emerald-600 font-semibold underline hover:text-emerald-800 transition">Aquí</a>
                </p>
            </div>

        </main>



        <!-- ➡️ ASIDE DERECHO (solo escritorio, con scroll independiente) -->
        <aside class="hidden lg:block col-span-3">

            <div class="h-[80vh] overflow-y-auto pr-2 sticky top-24 custom-scroll">
                <script async 
                    src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" 
                    charset="utf-8">
                </script>
            </div>

        </aside>
    </div>



    <?php require $_SERVER["DOCUMENT_ROOT"] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>


</body>

</html>