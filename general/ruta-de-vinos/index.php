<?php
$web_site = "https://alayag82.kesug.com/valle-del-loira/"; 
$web_name='Vinos del Loira';
$title = "🍇 Ruta Vinos | Bodegas, catas y enoturismo";
$carpeta = "general"; $web_name_url="ruta-de-vinos.php";
$slug = "ruta-de-vinos"; 
$nombreLugar='Ruta Vinos del Loira'; $hastag_faqs='ruta-vinos';
$keywords = "Rutas Valle del Loira, Castillos Loira, Vino Valle del Loira, Gastronomía Loira, Naturaleza Loira, Turismo Loira, Loire à Vélo, Cicloturismo Loira, Paisajes Valle del Loira";
$descripcion = "Bodegas, catas, viñedos y recorridos en el corazón del Valle del Loira.";
$imagenHero = "https://alayag82.kesug.com/val-de-loire/assets/logo.png";
$web_site = "https://alayag82.kesug.com/val-de-loire";
$twitter = "@tu_twitter";


$h2_style = 'text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style_emerald_700_semibold_hover_underline = 'text-emerald-700 font-semibold hover:underline';

?>


<!DOCTYPE html>
<html lang="es">

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>


<body id="website" class="bg-gray-50 text-emerald-800">

<!-- HEADER -->
<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>

<!-- LAYOUT GENERAL -->
<div class="container mx-auto grid grid-cols-12 gap-6 mt-6 max-w-[1600px]">

    <!-- ⬅️ ASIDE IZQUIERDO (solo escritorio) -->
    <aside class="hidden lg:block col-span-3">
        <nav class="bg-white shadow-lg rounded-xl p-4 sticky top-28 max-h-[80vh] overflow-y-auto">

            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Rutas del Loira</h3>

            <ul class="space-y-2 text-gray-700">

                <li>
                    <?php /*<a href="/val-de-loire/general/castillos-abiertos-hoy.php" 
                       class="block p-2 rounded hover:bg-emerald-100">
                       🏰 Castillos imprescindibles
                    </a> */ ?>
                      <a href="/val-de-loire/index.php#castillos-imprescindibles" 
                       class="block p-2 rounded hover:bg-emerald-100">
                       🏰 Castillos imprescindibles
                    </a>
                </li>

                <li>
                    <a href="/val-de-loire/general/rutas-loire/index.php#ruta-vino-gastronomia" 
                       class="block p-2 rounded hover:bg-emerald-100">
                       🍷 Vinos del Loira & Gastronomía
                    </a>
                </li>

                <li>
                    <a href="/val-de-loire/general/rutas-loire/index.php#ruta-rios-paisajes" 
                       class="block p-2 rounded hover:bg-emerald-100">
                       🏞 Ríos y Paisajes del Valle del Loira
                    </a>
                </li>

                <li>
                    <a href="/val-de-loire/general/rutas-loire/index.php#ruta-la-loire-a-velo" 
                       class="block p-2 rounded hover:bg-emerald-100">
                       🚴 “La Loire à Vélo”
                    </a>
                </li>

            </ul>

        </nav>

    </aside>


    <!-- 📄 CONTENIDO CENTRAL -->
    <main class="col-span-12 lg:col-span-6 px-4 lg:px-0">

        <!-- Breadcrums + volver -->
        <div class="w-full flex items-center justify-between mt-4 mb-4">
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums/2niveles-generico.php'; ?>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
        </div>
                <!-- línea decorativa debajo, ancho completo -->
      <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>


        <!-- INTRO -->
        <section class="mb-10">
            <h2 class="text-2xl font-bold text-emerald-700 mb-3">Un recorrido entre viñedos históricos</h2>
            <p class="text-gray-700 leading-relaxed">
                La Ruta Oficial de Vinos del Valle del Loira te lleva a través de los viñedos más hermosos de Francia:
                bodegas familiares, cavas subterráneas, catas guiadas y pueblos medievales donde el vino es tradición viva.
            </p>
        </section>

        <!-- Imprescindibles -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🍷 Vinos emblemáticos</h3>
                <p class="text-sm text-gray-700">Sauvignon Blanc, Vouvray, Chinon, Anjou, Touraine y más.</p>
            </div>

            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏺 Catas & bodegas</h3>
                <p class="text-sm text-gray-700">Visita bodegas abiertas todo el año, algunas en cuevas trogloditas.</p>
            </div>

            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏞 Paisajes únicos</h3>
                <p class="text-sm text-gray-700">Rutas entre viñedos, ríos y pueblos medievales del Loira.</p>
            </div>
        </section>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- Bodegas -->
        <section>
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Bodegas recomendadas 🥂</h2>
            <p class="text-gray-700 mb-8">
                Descubre algunas de las bodegas más emblemáticas del Valle del Loira.
            </p>

            <div class="space-y-4">

<div class="p-5 bg-white shadow rounded-xl border">
    <a href="https://jacky-blot.fr/" target="_blank"
       class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
        <h3 id="domaine-taille" class="text-xl font-semibold text-emerald-800">
            Domaine de la Taille aux Loups
        </h3>
    </a>
    <p class="text-gray-600">
        Famosa por su Chenin Blanc y su carácter mineral único.
    </p>
</div>

<div class="p-5 bg-white shadow rounded-xl border">
    <a href="https://caves-ambacia.fr/index.php" target="_blank"
       class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
        <h3 id="caves-ambacia" class="text-xl font-semibold text-emerald-800">
            Caves Ambacia (Amboise)
        </h3>
    </a>
    <p class="text-gray-600">
        Cuevas trogloditas del siglo XV con catas guiadas y gastronomía.
    </p>
</div>

<div class="p-5 bg-white shadow rounded-xl border">
    <a href="https://www.domainehuet.com/" target="_blank"
       class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
        <h3 id="domaine-huet" class="text-xl font-semibold text-emerald-800">
            Domaine Huet (Vouvray)
        </h3>
    </a>
    <p class="text-gray-600">
        Vinos biodinámicos entre los más prestigiosos del Loira.
    </p>
</div>


                <div class="p-5 bg-white shadow rounded-xl border">
                    <p class="text-sm text-gray-500 mt-1">
                        Puedes visitar la web oficial para más información: 
                        <a href="https://www.vinsvaldeloire.fr/es" target="_blank"
                        class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                            🍇 Ruta oficial de vinos del Valle del Loira 🍇
                        </a>
                    </p>
                </div>

            </div>
        </section>

<div class="mt-4 block md:hidden">
    <script async
        src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039"
        charset="utf-8">
    </script>
</div>


<div class="hidden md:block">
    <?php 
        $alineacion = 4; 
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; 
    ?>
</div>

    </main>


    <!-- ➡️ ASIDE DERECHO (solo escritorio, scroll independiente) -->
    <aside class="hidden lg:block col-span-3">
        <div class="sticky top-28 max-h-[80vh] overflow-y-auto p-2">
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
        </div>
    </aside>

</div>


<!-- FOOTER -->
<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>




</body>
</html>
