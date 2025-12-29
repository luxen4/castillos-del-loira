<?php
$web_site = "https://alayag82.kesug.com/museo-historia-nantes/"; 
$web_name='Museo de Historia de Nantes';
$title = "🏰 Museo de Historia de Nantes | Exposiciones, historia y visitas";
$carpeta = "general"; $web_name_url="museo-historia-nantes.php";
$slug = "musee-histoire-nantes"; 
$nombreLugar='Museo de Historia de Nantes'; $hastag_faqs='museo-historia-nantes';
$keywords = "Museo de Historia de Nantes, Musée d’Histoire de Nantes, Historia Francia, Nantes medieval, Castillo Nantes, Turismo Nantes, Cultura Nantes";
$descripcion = "Descubre el Museo de Historia de Nantes: exposiciones, historia, horarios, precios y visita completa.";
$imagenHero = "https://alayag82.kesug.com/museo-historia-nantes/assets/museo-historia.jpg";
$twitter = "@tu_twitter";

$h2_style = 'text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style_emerald_700_semibold_hover_underline = 'text-emerald-700 font-semibold hover:underline';
?>

<!DOCTYPE html>
<html lang="es">
<?php // require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>
<?php
// HEAD.php optimizado: mezcla completa de SEO avanzado + rendimiento + schemas + PWA base
?>
<head>
    <!-- ░░ TITULO DINÁMICO ░░ -->
    <title><?= $title ?? 'Sitio Web' ?></title>

    <!-- ░░ META BÁSICO ░░ -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <meta name="description" content="<?= $descripcion ?? '' ?>">
    <meta name="keywords" content="<?= $keywords ?? '' ?>">
    <meta name="author" content="<?= $web_name ?? '' ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">

    <!-- ░░ CANONICAL ░░ -->
    <link rel="canonical" href="<?= $web_site . '/' . $slug ?>">

    <!-- ░░ PRECONNECT + PERFORMANCE ░░ -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>

    <!-- ░░ FAVICONES ░░ -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <meta name="theme-color" content="#0f766e">

    <!-- ░░ OPENGRAPH ░░ -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $web_site . '/' . $slug ?>">
    <meta property="og:image" content="<?= $imagenHero ?>">

    <!-- ░░ TWITTER CARD ░░ -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $descripcion ?>">
    <meta name="twitter:image" content="<?= $imagenHero ?>">
    <meta name="twitter:site" content="<?= $twitter ?>">

    <!-- ░░ GEO LOCALIZACIÓN (útil para museos y turismo) ░░ -->
    <meta name="geo.region" content="FR-PDL"> <!-- País del Loira -->
    <meta name="geo.position" content="47.2173; -1.5534"> <!-- Coordenadas Nantes -->
    <meta name="ICBM" content="47.2173, -1.5534">

    <!-- ░░ CSS ░░ -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ░░ JSON-LD EXTERNO (schemas-head.php) ░░ -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/localidades/nantes/museos-y-exposiciones/musse-histoire-nantes/schemas/schemas-head.php'; ?>

    <!-- ░░ PWA BÁSICO ░░ -->
    <link rel="manifest" href="/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- ░░ LAZYLOAD DE IMÁGENES ░░ -->
    <style>
        img { content-visibility: auto; }
    </style>

</head>
<body id="website" class="bg-gray-50 text-emerald-800">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>

<div class="container mx-auto grid grid-cols-12 gap-6 mt-6 max-w-[1600px]">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block col-span-3">
        <nav class="bg-white shadow-lg rounded-xl p-4 sticky top-28 max-h-[80vh] overflow-y-auto">
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Explorar el museo</h3>
            <ul class="space-y-2 text-gray-700">
                <li><a href="#colecciones" class="block p-2 rounded hover:bg-emerald-100">🏰 Exposiciones permanentes</a></li>
                <li><a href="#exposiciones" class="block p-2 rounded hover:bg-emerald-100">🎯 Exposiciones temporales</a></li>
                <li><a href="#arquitectura" class="block p-2 rounded hover:bg-emerald-100">🏛 Arquitectura y historia del castillo</a></li>
                <li><a href="#informacion" class="block p-2 rounded hover:bg-emerald-100">ℹ Información práctica</a></li>
            </ul>
        </nav>
    </aside>

    <!-- CONTENIDO CENTRAL -->
    <main class="col-span-12 lg:col-span-6 px-4 lg:px-0">

        <div class="w-full flex items-center justify-between mt-4 mb-4">
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums/2niveles-generico.php'; ?>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
        </div>
        <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>

        <!-- INTRO -->
        <section class="mb-10">
            <h1 class="text-3xl font-extrabold text-emerald-800 mb-4">Museo de Historia de Nantes</h1>
            <p class="text-gray-700 leading-relaxed">
                El Museo de Historia de Nantes, ubicado en el Castillo de los Duques de Bretaña, ofrece un recorrido completo por la historia de la ciudad y la región.
                Desde la Edad Media hasta la época moderna, descubre exposiciones interactivas y espacios históricos restaurados.
            </p>
        </section>

        <!-- CARDS DESTACADOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏰 Historia medieval</h3>
                <p class="text-sm text-gray-700">Castillo y ciudad desde el siglo XIII al XVI.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🎯 Exposiciones interactivas</h3>
                <p class="text-sm text-gray-700">Multimedia y visitas guiadas para todas las edades.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏛 Arquitectura del castillo</h3>
                <p class="text-sm text-gray-700">Un ejemplo perfecto de fortaleza medieval adaptada a museo moderno.</p>
            </div>
        </section>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- COLECCIONES -->
        <section id="colecciones" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Colecciones destacadas</h2>
            <p class="text-gray-700 mb-8">Exposiciones permanentes que recorren siglos de historia de Nantes y Bretaña.</p>

            <div class="space-y-4">
                <div class="p-5 bg-white shadow rounded-xl border">
                    <h3 class="text-xl font-semibold text-emerald-800">Edad Media y Renacimiento</h3>
                    <p class="text-gray-600">Esculturas, documentos y artefactos de la época medieval y renacentista.</p>
                </div>

                <div class="p-5 bg-white shadow rounded-xl border">
                    <h3 class="text-xl font-semibold text-emerald-800">Historia Moderna</h3>
                    <p class="text-gray-600">Exposiciones sobre la ciudad, comercio y sociedad desde el siglo XVII al XIX.</p>
                </div>

                <div class="p-5 bg-white shadow rounded-xl border">
                    <p class="text-sm text-gray-500 mt-1">Sitio oficial: 
                        <a href="https://museedhistoirendenantes.fr/" target="_blank" class="text-emerald-700 font-semibold hover:underline">Museo de Historia de Nantes</a>
                    </p>
                </div>
            </div>
        </section>

        <!-- PUBLICIDAD MÓVIL -->
        <div class="mt-4 block md:hidden">
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
        </div>

        <!-- PUBLICIDAD ESCRITORIO -->
        <div class="hidden md:block">
            <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

    </main>

    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block col-span-3">
        <div class="sticky top-28 max-h-[80vh] overflow-y-auto p-2">
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
        </div>
    </aside>

</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>

</body>
</html>
