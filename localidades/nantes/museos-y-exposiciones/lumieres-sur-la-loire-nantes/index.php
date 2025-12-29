<?php
$web_site = "https://alayag82.kesug.com/lumieres-sur-la-loire/"; 
$web_name='Lumières sur la Loire';
$title = "✨ Lumières sur la Loire | Espectáculo nocturno en Nantes";
$carpeta = "general"; 
$web_name_url="lumieres-sur-la-loire.php";
$slug = "lumieres-sur-la-loire"; 
$nombreLugar='Lumières sur la Loire'; 
$hastag_faqs='lumieres-loire';
$keywords = "Lumières sur la Loire, Nantes espectáculo nocturno, luz y sonido Nantes, Turismo Nantes, Arte y luces Nantes";
$descripcion = "Descubre Lumières sur la Loire en Nantes: un espectáculo de luz y sonido que ilumina el río Loira y la ciudad por la noche.";
$imagenHero = "https://alayag82.kesug.com/lumieres-sur-la-loire/assets/lumieres-loire.jpg";
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
    <meta name="geo.position" content="47.2184; -1.5536">
    <meta name="ICBM" content="47.2184, -1.5536">

    <!-- CSS / TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SCHEMAS JSON-LD -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/localidades/nantes/museos-y-exposiciones/lumieres-sur-la-loire-nantes/schemas/schemas-head.php'; /* /espectaculos/ */ ?>

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
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Explorar el espectáculo</h3>
            <ul class="space-y-2 text-gray-700">
                <li><a href="#descripcion" class="block p-2 rounded hover:bg-emerald-100">🌟 Descripción</a></li>
                <li><a href="#fechas" class="block p-2 rounded hover:bg-emerald-100">📅 Fechas y horarios</a></li>
                <li><a href="#ubicacion" class="block p-2 rounded hover:bg-emerald-100">📍 Ubicación</a></li>
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
        <section id="descripcion" class="mb-10">
            <h1 class="text-3xl font-extrabold text-emerald-800 mb-4">Lumières sur la Loire</h1>
            <p class="text-gray-700 leading-relaxed">
                Lumières sur la Loire es un espectáculo nocturno que combina luces, sonido y proyecciones para iluminar el río Loira y los edificios históricos de Nantes.
                Una experiencia mágica que atrae a visitantes de todas las edades y convierte la ciudad en un escenario encantado.
            </p>
        </section>

        <!-- CARDS DESTACADOS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🌌 Experiencia visual</h3>
                <p class="text-sm text-gray-700">Proyecciones artísticas sobre la ciudad y el río.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">🎵 Música envolvente</h3>
                <p class="text-sm text-gray-700">Sonido sincronizado con efectos de luz y narrativa visual.</p>
            </div>
            <div class="bg-white p-5 shadow rounded-xl border">
                <h3 class="text-lg font-semibold text-emerald-600 mb-2">📅 Temporada limitada</h3>
                <p class="text-sm text-gray-700">Fechas especiales durante verano y eventos culturales.</p>
            </div>
        </section>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- SECCIONES -->
        <section id="fechas" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Fechas y horarios</h2>
            <p class="text-gray-700 mb-8">
                Los espectáculos se realizan generalmente entre junio y septiembre, comenzando al anochecer. Es recomendable consultar el calendario oficial antes de la visita.
            </p>
        </section>

        <section id="ubicacion" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Ubicación</h2>
            <p class="text-gray-700 mb-8">
                Se realiza en varios puntos a lo largo del río Loira, destacando la zona central y el Château des Ducs de Bretagne.
            </p>
        </section>

        <section id="informacion" class="mb-16">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Información práctica</h2>
            <p class="text-gray-700 mb-4">
                Acceso gratuito, recomendable llegar con antelación, llevar cámara para capturar los efectos de luz y consultar la previsión meteorológica.
            </p>
            <p class="text-sm text-gray-500 mt-1">
                Página oficial: 
                <a href="https://www.immersia-spectacle.fr/" target="_blank" class="text-emerald-700 font-semibold hover:underline">
                    Lumières sur la Loire - Immersia Spectacle
                </a>
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
