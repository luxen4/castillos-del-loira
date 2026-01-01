<?php
$title = "🌿 Rutas entre Castillos, vino y naturaleza";
$carpeta = "general";
$slug = "rutas-loire"; $web_name='';
$title = "Rutas entre castillos, vinos y naturaleza";
$keywords = "Rutas Valle del Loira, Castillos Loira, Vino Valle del Loira, Gastronomía Loira, Naturaleza Loira, Turismo Loira, Loire à Vélo, Cicloturismo Loira, Paisajes Valle del Loira";
$descripcion = "Descubre las mejores rutas por el Valle del Loira: castillos como Chambord, Chenonceau, Amboise, gastronomía francesa, vino y paisajes inolvidables.";
$imagenHero = "https://alayag82.kesug.com/val-de-loire/assets/logo.png";
$web_site = "https://alayag82.kesug.com/val-de-loire";
$twitter = "@tu_twitter";


$h2_style = 'text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style_emerald_700_semibold_hover_underline = 'text-emerald-700 font-semibold hover:underline';

?>

<!DOCTYPE html>
<html lang="es">
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head-generico.php'; ?>

<body class="bg-gray-100 text-gray-800 font-sans">

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>

    <div class="container mx-auto grid grid-cols-12 gap-6 mt-6 md:px-4 max-w-[1600px]">

        <!-- ASIDE – Panel de navegación de rutas -->
        <aside class="hidden md:block col-span-2 bg-white shadow-lg rounded-lg p-4 h-fit sticky top-24">

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

            <?php $alineacion = 2;
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
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
        <main class="col-span-12 lg:col-span-7 h-[128vh] overflow-y-auto">
            <div class="w-full flex items-center justify-between mt-4 mb-4">
                <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums/2niveles-generico.php'; ?>
                <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
            </div>

            <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/general/rutas-loire/main/sections/rutas/index.php'; ?>

            <div class="text-center px-2 mt-1">
                <p>Puede encontrar más información sobre 🇫🇷 Turismo oficial en el Valle del Loira
                    <a href="https://www.france.fr/es/valle-del-loira" target="_blank"
                        class="text-emerald-600 font-semibold underline hover:text-emerald-800 transition">Aquí</a>
                </p>
            </div>

        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/aside-derecho/index.php'; ?>

    </div>

    <?php require $_SERVER["DOCUMENT_ROOT"] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>
</body>

</html>