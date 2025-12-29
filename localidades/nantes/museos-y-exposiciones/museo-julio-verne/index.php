<?php
$web_site = "https://alayag82.kesug.com/museo-julio-verne/"; 
$web_name='Museo Julio Verne';
$title = "🚀 Museo Julio Verne | Vida, inventos y legado";
$carpeta = "general"; $web_name_url="museo-julio-verne.php";
$slug = "museo-julio-verne"; 
$nombreLugar='Museo Julio Verne'; $hastag_faqs='museo-julio-verne';
$keywords = "Museo Julio Verne, Jules Verne Nantes, Literatura francesa, Ciencia ficción, Inventos Verne, Turismo Nantes, Cultura Nantes";
$descripcion = "Descubre el Museo Julio Verne en Nantes: exposiciones sobre su vida, obras y visión futurista.";
$imagenHero = "https://alayag82.kesug.com/museo-julio-verne/assets/museo-julio-verne.jpg";
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
    <meta name="geo.position" content="47.2175; -1.5540">
    <meta name="ICBM" content="47.2175, -1.5540">

    <!-- CSS / TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SCHEMAS JSON-LD -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/localidades/nantes/museos-y-exposiciones/museo-julio-verne/schemas/schemas-head.php'; ?>

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
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Explorar el museo</h3>
            <ul class="space-y-2 text-gray-700">
                <li><a href="#biografia" class="block p-2 rounded hover:bg-emerald-100">📖 Biografía de Julio Verne</a></li>
                <li><a href="#inventos" class="block p-2 rounded hover:bg-emerald-100">🛠 Inventos y visiones</a></li>
                <li><a href="#obras" class="block p-2 rounded hover:bg-emerald-100">📚 Obras destacadas</a></li>
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
            <h1 class="text-3xl font-extrabold text-emerald-800 mb-4">Museo Julio Verne</h1>
            <p class="text-gray-700 leading-relaxed">
                El Museo Julio Verne en Nantes celebra la vida y obra del escritor visionario.
                Descubre su biografía, inventos imaginativos, obras literarias y legado cultural que ha inspirado generaciones.
            </p>
        </section>

        <!-- CARDS DESTACADOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">📖 Biografía</h3>
                <p class="text-sm text-gray-700">La vida de Julio Verne en Nantes y su recorrido literario.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🛠 Inventos y visiones</h3>
                <p class="text-sm text-gray-700">Prototipos, maquetas y predicciones futuristas de Verne.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">📚 Obras destacadas</h3>
                <p class="text-sm text-gray-700">Viaje al centro de la Tierra, 20.000 leguas de viaje submarino y mucho más.</p>
            </div>
        </section>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- SECCIONES -->
        <section id="biografia" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Biografía de Julio Verne</h2>
            <p class="text-gray-700 mb-8">
                Nacido en Nantes en 1828, Julio Verne es uno de los escritores más influyentes de la literatura de ciencia ficción. 
                Sus relatos anticiparon inventos y aventuras que siguen inspirando el mundo.
            </p>
        </section>

        <section id="inventos" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Inventos y visiones</h2>
            <p class="text-gray-700 mb-8">
                Modelos, prototipos y predicciones tecnológicas que Verne describió en sus novelas, desde submarinos hasta viajes espaciales.
            </p>
        </section>

        <section id="obras" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Obras destacadas</h2>
            <p class="text-gray-700 mb-8">
                Algunas de sus novelas más célebres: <strong>Veinte mil leguas de viaje submarino</strong>, <strong>Viaje al centro de la Tierra</strong>, <strong>La vuelta al mundo en ochenta días</strong>.
            </p>
            <p class="text-sm text-gray-500 mt-1">
                Más información en la web oficial: 
                <a href="https://www.museejulesverne.com" target="_blank" class="text-emerald-700 font-semibold hover:underline">Museo Julio Verne</a>
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
