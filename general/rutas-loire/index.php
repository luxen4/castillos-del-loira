<?php 
$title = "Rutas Valle del Loira 🌿 | Castillos, vino y naturaleza";
$carpeta = "general";
$slug = "rutas-loire";
$nombreLugar = "Rutas por el Valle del Loira"; $keywords = "Rutas Valle del Loira, Castillos Loira, Vino Valle del Loira, Gastronomía Loira, Naturaleza Loira, Turismo Loira, Loire à Vélo, Cicloturismo Loira, Paisajes Valle del Loira";
$descripcion = "Descubre las mejores rutas por el Valle del Loira: castillos como Chambord, Chenonceau, Amboise, gastronomía francesa, vino y paisajes inolvidables.";
$imagenHero = "https://alayag82.kesug.com/val-de-loire/assets/logo.png";
$sitio_web = "https://alayag82.kesug.com/val-de-loire";
$twitter = "@tu_twitter";
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
                <a href="/val-de-loire/general/rutas-loire.php" class="hover:underline">🚴 Rutas</a>
                <a href="https://www.france.fr/es/valle-del-loira" target="_blank" class="hover:underline">
                    🇫🇷 Turismo oficial
                </a>
            </nav>

        </div>
    </header>


    <!-- ✅ Layout -->
    <div class="container mx-auto grid grid-cols-12 gap-6 mt-6 px-4">

        <!-- ASIDE IZQUIERDO (anuncio) -->
        <aside class="hidden lg:block col-span-2">
            <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </aside>

        <!-- ✅ CONTENIDO PRINCIPAL -->
        <main class="col-span-12 lg:col-span-8">



            <!-- ✅ SECCIÓN DE RUTAS -->
            <section class="bg-white p-6 rounded-lg shadow-lg space-y-10">

                <!-- 🌿 Ruta 1: Castillos -->
                <div>
                    <h2 id="ruta-castillos-imprescindibles" class="text-3xl font-bold text-emerald-700 mb-4">Ruta: Castillos imprescindibles</h2>
                    <p class="text-lg mb-4">
                        El Valle del Loira es Patrimonio de la UNESCO. Aquí encontrarás palacios,
                        jardines renacentistas y paisajes fluviales únicos en Europa.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.chambord.org/es/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🏰 Castillo de Chambord
                            </a>
                            — Icono del Renacimiento francés y obra monumental de Francisco I.
                        </li>
                        <li>
                            <a href="https://www.chenonceau.com" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🌉 Castillo de Chenonceau
                            </a>
                            — El castillo construido sobre el río Cher, conocido como “el castillo de las damas”.
                        </li>
                        <li>
                            <a href="https://www.vinci-closluce.com/es" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🚀 Clos-Lucé (Casa de Leonardo da Vinci)
                            </a>
                            — Última residencia de Leonardo da Vinci, llena de maquetas y proyectos.
                        </li>
                    </ul>
                </div>


                <!-- 🍷 Ruta 2: Vino & Gastronomía -->
                <div>
                    <h2 id="ruta-vino-gastronomia" class="text-3xl font-bold text-emerald-700 mb-4">Ruta: Vinos del Loira & Gastronomía</h2>
                    <p class="text-lg mb-4">
                        Cata vinos únicos como Sauvignon Blanc, Touraine o Chinon. Descubre queserías y
                        restaurantes tradicionales en pequeños pueblos encantadores.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.vinsvaldeloire.fr/es" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🍇 Ruta oficial de vinos del Valle del Loira
                            </a>
                            — Información de todas las bodegas disponibles para visita y catas.
                        </li>
                        <li>
                            <a href="https://cave-bourgueil.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🍷 Bourgueil - Cuna del vino tinto del Loira
                            </a>
                            — Visita bodegas subterráneas y prueba vinos cabernet franc.
                        </li>
                        <li>
                            <a href="https://www.laflecheduloire.com/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🧀 Productos locales y gastronomía
                            </a>
                            — Mercados tradicionales con queso, foie y repostería del Loira.
                        </li>
                    </ul>
                </div>

                <!-- 🌿 Ruta 3: Ríos & Paisajes del Valle del Loira -->
                <div>
                    <h2 id="ruta-rios-paisajes" class="text-3xl font-bold text-emerald-700 mb-4">Ruta: Ríos y Paisajes del Valle del Loira</h2>
                    <p class="text-lg mb-4">
                        Recorre las orillas del Loira, observa sus islas naturales, sus afluentes
                        y sus paisajes cambiantes. Ideal para rutas en bicicleta, paseos tranquilos
                        y fotografía de naturaleza.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.loireavelo.fr/" target="_blank"
                            class="text-emerald-700 font-semibold hover:underline">
                                🚴 Ruta Loire à Vélo (Loira en bicicleta)
                            </a>
                            — La ruta ciclista más famosa de Francia, 900 km siguiendo el río Loira.
                        </li>

                        <li>
                            <a href="https://www.valdeloire-france.com/es/explorar/actividades-naturaleza" target="_blank"
                            class="text-emerald-700 font-semibold hover:underline">
                                🌿 Naturaleza y espacios protegidos del Loira
                            </a>
                            — Reservas naturales, humedales, aves migratorias y miradores panorámicos.
                        </li>

                        <li>
                            <a href="https://www.valdeloire-france.com/es/explorar" target="_blank"
                            class="text-emerald-700 font-semibold hover:underline">
                                🗺️ Senderos y miradores del Valle del Loira
                            </a>
                            — Caminos señalizados a lo largo del río, perfectos para senderismo fotográfico.
                        </li>
                    </ul>
                </div>



                <!-- 🚴 Ruta 4: Bicicleta por el Loira -->
                <div>
                    <h2 id="ruta-la-loire-a-velo" class="text-3xl font-bold text-emerald-700 mb-4">Ruta: "La Loire à Vélo" (Cicloturismo)</h2>
                    <p class="text-lg mb-4">
                        Una de las rutas en bicicleta más bonitas de Europa: 900 km de carril bici
                        con castillos, puentes históricos y pueblos medievales.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.loireavelo.fr/en/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🚴‍♂️ Página oficial de Loire à Vélo
                            </a>
                            — Mapas, etapas y hoteles adaptados a cicloturistas.
                        </li>
                        <li>
                            <a href="https://www.tours-tourisme.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🏙️ Tours (ciudad histórica)
                            </a>
                            — Punto de salida ideal para comenzar el recorrido.
                        </li>
                        <li>
                            <a href="https://www.orleans-metropole.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                ⚜️ Orléans
                            </a>
                            — Ciudad vinculada a Juana de Arco, final de muchas rutas ciclistas.
                        </li>
                    </ul>
                </div>

            </section>


        </main>




        <!-- ➡️ ASIDE DERECHO (solo escritorio) -->
        <aside class="hidden lg:block col-span-2">
            <div class="aside-sticky bg-white p-4 rounded-lg shadow">
                <h4 class="font-semibold text-emerald-700 mb-2">Destacados</h4>
                <ul class="text-sm space-y-2 text-gray-700">
                    <li><a href="#" class="hover:underline">Castillo de Chambord</a></li>
                    <li><a href="#" class="hover:underline">Chenonceau</a></li>
                    <li><a href="#" class="hover:underline">Amboise</a></li>
                </ul>
                <hr class="my-4" />
                <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
            </div>

        </aside>
    </div>


    <!-- ✅ FOOTER -->
    <footer class="mt-10 py-6 bg-emerald-800 text-white text-center">
        <p>© <?= date("Y") ?> — Diseñado por Adrián Laya García</p>
    </footer>

</body>

</html>