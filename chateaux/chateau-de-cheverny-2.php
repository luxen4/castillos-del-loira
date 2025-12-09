<?php
$nombreLugar="Château de Cheverny";

$web_site = "https://alayag82.kesug.com/chateau-de-cheverny/";
$web_name = 'Château de Cheverny';
$title = "🏰 Château de Cheverny | Interior, Tintín, jardines y más";
$slug = "chateau-de-cheverny";
$descripcion = "Descubre el Château de Cheverny: interiores suntuosos, la exposición Tintín, jardines y la histórica perrera real.";
$keywords = "Château de Cheverny, Cheverny, Castillo Cheverny, Tintín Moulinsart, Jardines Cheverny, Castillos del Loira";
$imagenHero = "https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-hero.jpg";
$twitter = "@tu_twitter";

$h2_style = 'text-xl sm:text-2xl md:text-3xl font-bold text-emerald-700 mb-4';
$a_style = 'text-emerald-700 font-semibold hover:underline';

// Secciones principales (puedes ampliar/editar fácilmente)
$secciones = [
    [
        'id' => 'interior',
        'titulo' => 'Château de Cheverny – Interior',
        'texto' => 'Uno de los interiores más suntuosos y mejor conservados del Valle del Loira. Salas ricamente decoradas, mobiliario original y colecciones que muestran la vida de la aristocracia francesa.',
        'imagen' => 'https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-interior.jpg'
    ],
    [
        'id' => 'tintin',
        'titulo' => 'Exposición Tintín',
        'texto' => 'Famoso por su relación con Hergé; Cheverny inspiró el Castillo de Moulinsart. Exposiciones permanentes y temporales sobre el universo de Tintín y su vínculo con el castillo.',
        'imagen' => 'https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-tintin.jpg'
    ],
    [
        'id' => 'jardines',
        'titulo' => 'Château de Cheverny – Jardines',
        'texto' => 'Elegantes jardines simétricos perfectos para un paseo tranquilo: parterres, bosquetes y un diseño clásico que acompaña al palacio.',
        'imagen' => 'https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-gardens.jpg'
    ],
    [
        'id' => 'perrera',
        'titulo' => 'Château de Cheverny – Perrera',
        'texto' => 'Hogar de decenas de perros utilizados tradicionalmente en la caza real; hoy en día la perrera es un atractivo único que muestra la tradición cinegética del dominio.',
        'imagen' => 'https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-dogs.jpg'
    ],
    [
        'id' => 'dominio',
        'titulo' => 'Château de Cheverny – Dominio Completo',
        'texto' => 'Un conjunto armonioso que combina historia, arquitectura y naturaleza: el castillo, las dependencias, los jardines y el paisaje agrícola circundante.',
        'imagen' => 'https://alayag82.kesug.com/chateau-de-cheverny/assets/cheverny-domain.jpg'
    ]
];

// Castillos cercanos (CSV-style items que sueles usar)
$castillos_cercanos = [
    ['chambord.php','Castillo de Chambord','A solo 20 minutos; el castillo más grande y emblemático del Valle del Loira.'],
    ['blois.php','Castillo de Blois','Palacio real con cuatro estilos arquitectónicos y museos espectaculares.'],
    ['chaumont-sur-loire.php','Castillo de Chaumont-sur-Loire','Famoso por su Festival Internacional de Jardines y vistas al Loira.'],
    ['beauregard.php','Castillo de Beauregard','Conocido por su impresionante Galería de los 327 retratos históricos.'],
    ['fougeres-sur-bievre.php','Castillo de Fougères-sur-Bièvre','Un castillo medieval más pequeño, auténtico y muy bien conservado.']
];

?>
<!DOCTYPE html>
<html lang="es">
<?php //require_once $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO BÁSICO -->
    <title><?= $title ?></title>
    <meta name="description" content="<?= $descripcion ?>">
    <meta name="keywords" content="<?= $keywords ?>">

    <!-- CANONICAL -->
    <link rel="canonical" href="<?= $web_site ?>">

    <!-- FAVICON -->
    <link rel="icon" href="/val-de-loire/assets/favicon.svg" type="image/svg+xml">

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- TIPOGRAFÍA (OPTIMIZADA) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap">

    <!-- OPENGRAPH -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $web_site ?>">
    <meta property="og:image" content="<?= $imagenHero ?>">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $descripcion ?>">
    <meta name="twitter:image" content="<?= $imagenHero ?>">
    <meta name="twitter:site" content="<?= $twitter ?>">

    <!-- SCHEMA / JSON-LD -->
    <?php //require_once $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head/schemas-head.php"; ?>

    <!-- PRECARGA DE IMÁGENES IMPORTANTES -->
    <link rel="preload" as="image" href="<?= $imagenHero ?>">

    <!-- HRELANG (si tienes varios idiomas) -->
    <!--
    <link rel="alternate" hreflang="es" href="<?= $web_site ?>">
    <link rel="alternate" hreflang="fr" href="<?= $web_site ?>fr/">
    <link rel="alternate" hreflang="x-default" href="<?= $web_site ?>">
    -->

    <!-- META EXTRA PARA SEO -->
    <meta name="author" content="AlaYag82">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#065f46">

</head>


<body id="website" class="bg-gray-50 text-emerald-800">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>

<div class="container mx-auto grid grid-cols-12 gap-6 mt-6 max-w-[1600px]">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block col-span-3">
        <nav class="bg-white shadow-lg rounded-xl p-4 sticky top-28 max-h-[80vh] overflow-y-auto">
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">En este castillo</h3>
            <ul class="space-y-2 text-gray-700">
                <?php foreach ($secciones as $s): ?>
                    <li><a href="#<?= htmlspecialchars($s['id']) ?>" class="block p-2 rounded hover:bg-emerald-100"><?= htmlspecialchars($s['titulo']) ?></a></li>
                <?php endforeach; ?>
                <li><a href="#cercanos" class="block p-2 rounded hover:bg-emerald-100">🏰 Castillos cercanos</a></li>
                <li><a href="#info" class="block p-2 rounded hover:bg-emerald-100">ℹ Información práctica</a></li>
                <li><a href="#faq" class="block p-2 rounded hover:bg-emerald-100">❓ FAQ</a></li>
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

        <!-- HERO / INTRO -->
        <section class="mb-10">
            <h1 class="text-3xl font-extrabold text-emerald-800 mb-4">Château de Cheverny</h1>
            <p class="text-gray-700 leading-relaxed">
                Château de Cheverny es uno de los castillos más elegantes del Valle del Loira. Famoso por su interior, por la relación con Tintín y por sus jardines perfectamente conservados.
            </p>
            <div class="mt-6 rounded-xl overflow-hidden shadow-lg">
                <img src="<?= $imagenHero ?>" alt="Château de Cheverny" class="w-full h-64 object-cover">
            </div>
        </section>

        <!-- SECCIONES PRINCIPALES -->
        <?php foreach ($secciones as $s): ?>
            <section id="<?= htmlspecialchars($s['id']) ?>" class="mb-12">
                <div class="bg-white shadow rounded-xl overflow-hidden border">
                    <div class="md:flex">
                        <div class="md:w-1/3">
                            <img src="<?= htmlspecialchars($s['imagen']) ?>" alt="<?= htmlspecialchars($s['titulo']) ?>" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-6 md:w-2/3">
                            <h2 class="text-2xl font-bold text-emerald-700 mb-3"><?= htmlspecialchars($s['titulo']) ?></h2>
                            <p class="text-gray-700 leading-relaxed"><?= htmlspecialchars($s['texto']) ?></p>
                            <p class="mt-4">
                                <a href="/chateau-de-cheverny/chateau-de-cheverny.php" target="_blank" rel="noopener noreferrer" class="<?= $a_style ?>">
                                    Ver ficha completa del Château de Cheverny
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <!-- PUBLICIDAD (móvil) -->
        <div class="mt-4 block md:hidden">
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
        </div>

        <!-- CASTILLOS CERCANOS -->
        <section id="cercanos" class="mb-12">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Castillos cercanos</h2>
            <div class="grid sm:grid-cols-2 gap-4">
                <?php foreach ($castillos_cercanos as $c): ?>
                    <a href="/val-de-loire/chateaux/<?= $c[0] ?>" class="block bg-white p-4 rounded-lg shadow hover:shadow-md border">
                        <h3 class="font-semibold text-emerald-800"><?= htmlspecialchars($c[1]) ?></h3>
                        <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($c[2]) ?></p>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- INFORMACIÓN PRÁCTICA -->
        <section id="info" class="mb-12">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Información práctica</h2>
            <ul class="space-y-3 text-gray-700">
                <li><strong>Horario:</strong> Abierto todos los días (consultar web oficial para horarios de temporada).</li>
                <li><strong>Entradas:</strong> Tarifas variables; descuentos para niños y familias.</li>
                <li><strong>Acceso:</strong> Parking en el dominio y transporte público desde Blois y Tours.</li>
                <li><strong>Web oficial:</strong> <a href="https://www.chateau-cheverny.fr/" target="_blank" class="<?= $a_style ?>">https://www.chateau-cheverny.fr/</a></li>
            </ul>
        </section>

        <!-- FAQ -->
        <section id="faq" class="mb-12">
            <h2 class="text-2xl font-bold text-emerald-700 mb-4">Preguntas frecuentes</h2>
            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold">¿Se puede visitar el interior con guía?</h3>
                    <p class="text-gray-700">Sí, hay visitas guiadas que explican la historia del castillo y su mobiliario.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold">¿Está abierto el dominio todo el año?</h3>
                    <p class="text-gray-700">El dominio abre la mayor parte del año, aunque algunos servicios o exposiciones son estacionales.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-semibold">¿Hay actividades para niños?</h3>
                    <p class="text-gray-700">Sí, talleres, visitas familiares y actividades relacionadas con Tintín en temporada alta.</p>
                </div>
            </div>
        </section>

        <!-- PUBLICIDAD (escritorio) -->
        <div class="hidden md:block">
            <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

    </main>

    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block col-span-3">
        <div class="sticky top-28 max-h-[80vh] overflow-y-auto p-2">
            <div class="bg-white rounded-xl shadow p-4 mb-4">
                <h4 class="font-semibold text-emerald-700 mb-2">Reserva rápida</h4>
                <p class="text-sm text-gray-600">Consulta disponibilidad de visitas y entradas en la web oficial.</p>
                <a href="https://www.chateau-cheverny.fr/" target="_blank" class="inline-block mt-3 bg-emerald-700 text-white px-4 py-2 rounded">Web oficial</a>
            </div>

            <div class="bg-white rounded-xl shadow p-4">
                <h4 class="font-semibold text-emerald-700 mb-2">Publicidad</h4>
                <img src="https://via.placeholder.com/300x250?text=Ad+1" alt="ad" class="rounded mb-2 w-full">
                <p class="text-sm text-gray-600">Espacio patrocinado.</p>
            </div>
        </div>
    </aside>

</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>

</body>
</html>
