<?php
$web_site = "https://alayag82.kesug.com/jardin-des-plantes-nantes/"; 
$web_name='Jardín de Plantas de Nantes';
$title = "🌿 Jardín de Plantas de Nantes | Flora, historia y visitas";
$carpeta = "general"; $web_name_url="jardin-des-plantes-nantes.php";
$slug = "jardin-des-plantes-nantes"; 
$nombreLugar='Jardín de Plantas de Nantes'; $hastag_faqs='jardin-plantes';
$keywords = "Jardín de Plantas Nantes, Jardin des Plantes Nantes, Flora Nantes, Turismo Nantes, Naturaleza Nantes, Jardines Francia";
$descripcion = "Explora el Jardín de Plantas de Nantes: flora diversa, historia del jardín y actividades educativas para toda la familia.";
$imagenHero = "https://alayag82.kesug.com/jardin-des-plantes-nantes/assets/jardin-nantes.jpg";
$twitter = "@tu_twitter";

$h2_style = 'text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style_emerald_700_semibold_hover_underline = 'text-emerald-700 font-semibold hover:underline';
?>

<!DOCTYPE html>
<html lang="es">
<?php // require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>

<head>
    <!-- TITULO DINÁMICO -->
    <title><?= $title ?></title>

    <!-- META BÁSICO -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">
    <meta name="description" content="<?= $descripcion ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="<?= $web_name ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">

    <!-- CANONICAL -->
    <link rel="canonical" href="<?= $web_site . '/' . $slug ?>">

    <!-- PRECONNECT / PERFORMANCE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>

    <!-- FAVICONES -->
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="apple-touch-icon" href="/favicon.png">
    <meta name="theme-color" content="#0f766e">

    <!-- OPENGRAPH -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $web_site . '/' . $slug ?>">
    <meta property="og:image" content="<?= $imagenHero ?>">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $descripcion ?>">
    <meta name="twitter:image" content="<?= $imagenHero ?>">
    <meta name="twitter:site" content="<?= $twitter ?>">

    <!-- GEOLOCALIZACIÓN -->
    <meta name="geo.region" content="FR-PDL">
    <meta name="geo.position" content="47.2140; -1.5535">
    <meta name="ICBM" content="47.2140, -1.5535">

    <!-- CSS / TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SCHEMAS JSON-LD -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/ciudades/nantes/museos-y-exposiciones/jardin-des-plantes-nantes/schemas/schemas-head.php'; ?>

    <!-- PWA BÁSICO -->
    <link rel="manifest" href="/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- LAZYLOAD DE IMÁGENES -->
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
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Explorar el jardín</h3>
            <ul class="space-y-2 text-gray-700">
                <li><a href="#flora" class="block p-2 rounded hover:bg-emerald-100">🌸 Flora y colecciones</a></li>
                <li><a href="#historia" class="block p-2 rounded hover:bg-emerald-100">🏛 Historia del jardín</a></li>
                <li><a href="#actividades" class="block p-2 rounded hover:bg-emerald-100">👨‍👩‍👧‍👦 Actividades educativas</a></li>
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
            <h1 class="text-3xl font-extrabold text-emerald-800 mb-4">Jardín de Plantas de Nantes</h1>
            <p class="text-gray-700 leading-relaxed">
                Descubre uno de los jardines botánicos más emblemáticos de Francia. Desde especies autóctonas hasta colecciones exóticas, 
                el Jardín de Plantas de Nantes ofrece un paseo educativo y relajante en pleno centro de la ciudad.
            </p>
        </section>

        <!-- CARDS DESTACADOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🌸 Flora diversa</h3>
                <p class="text-sm text-gray-700">Colecciones botánicas únicas de Francia y el mundo.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🏛 Historia del jardín</h3>
                <p class="text-sm text-gray-700">Creado en el siglo XIX, con arquitectura de invernaderos históricos.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">👨‍👩‍👧‍👦 Actividades educativas</h3>
                <p class="text-sm text-gray-700">Talleres, visitas guiadas y programas escolares para todas las edades.</p>
            </div>
        </section>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- SECCIONES -->
        <section id="flora" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Flora y colecciones</h2>
            <p class="text-gray-700 mb-8">
                El jardín alberga miles de especies, desde plantas locales hasta exóticas, incluyendo un invernadero tropical con flora rara y endémica.
            </p>
        </section>

        <section id="historia" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Historia del jardín</h2>
            <p class="text-gray-700 mb-8">
                Fundado en 1807 y remodelado en varias ocasiones, el Jardín de Plantas combina historia, arquitectura de invernaderos y diseño paisajístico.
            </p>
        </section>

        <section id="actividades" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Actividades educativas</h2>
            <p class="text-gray-700 mb-8">
                Visitas guiadas, talleres de botánica, observación de insectos y programas escolares para fomentar el aprendizaje de la naturaleza.
            </p>
            <p class="text-sm text-gray-500 mt-1">
                Más información en la web oficial: 
                <a href="https://www.jardindesplantes-nantes.fr" target="_blank" class="text-emerald-700 font-semibold hover:underline">Jardín de Plantas de Nantes</a>
            </p>
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
