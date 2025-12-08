<?php
$web_site = "https://alayag82.kesug.com/val-de-loire";
$web_name = "Museos de Nantes";
$title = "🏛️ Museos de Nantes | Arte, Historia y Cultura";
$carpeta = "general";
$web_name_url = "museos-nantes";
$slug = "museos-nantes";
$nombreLugar = "Museos de Nantes";
$hastag_faqs = "museos-nantes";
$keywords = "Museos Nantes, Cultura Nantes, Arte Nantes, Historia Nantes, Turismo Nantes";
$descripcion = "Descubre los museos más importantes de Nantes: arte, historia, ciencia y cultura.";
$imagenHero = "/val-de-loire/assets/logo.png";
?>

<!DOCTYPE html>
<html lang="es">
<?php // No vale aquí require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/head/index.php'; ?>

<head>
    <!-- META BÁSICO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- TÍTULO DINÁMICO -->
    <title>Museos de Nantes — Guía completa | <?= $web_name_global; ?></title>

    <!-- DESCRIPCIÓN SEO -->
    <meta name="description" 
          content="Descubre los mejores museos de Nantes: arte, historia, ciencia y cultura. Información, horarios, enlaces y guía de visita actualizada.">

    <!-- CANONICAL -->
    <link rel="canonical" href="<?= $web_site; ?>/ciudades/nantes/museos-nantes/index.php">

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="/val-de-loire/assets/favicon.png">

    <!-- OPEN GRAPH -->
    <meta property="og:title" content="Museos de Nantes — Guía completa">
    <meta property="og:description" content="Guía detallada de los museos más importantes de Nantes, con enlaces y recomendaciones.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $web_site; ?>museos-nantes">
    <meta property="og:image" content="<?= $web_site; ?>/assets/img/museos------------------------nantes.jpg">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Museos de Nantes — Guía completa">
    <meta name="twitter:description" content="Información de los mejores museos de Nantes: arte, historia, ciencia y más.">
    <meta name="twitter:image" content="<?= $web_site; ?>/assets/img/museos-nantes.jpg">

    <!-- ESTILOS (TAILWIND) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SCHEMAS -->
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/general/museos-nantes/schemas-head.php"; ?>

    <!-- TRACKING OPCIONAL (si usas Analytics, Matomo, etc.) -->
    <!-- <script> ... </script> -->
</head>




<body id="website" class="bg-gray-50 text-emerald-800">
<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/header-inicio-faqs.php'; ?>

<div class="container mx-auto grid grid-cols-12 gap-6 mt-6 max-w-[1600px]">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block col-span-3">
        <nav class="bg-white shadow-lg rounded-xl p-4 sticky top-28 max-h-[80vh] overflow-y-auto">
            <h3 class="text-lg font-semibold text-emerald-700 mb-3">Guía de Nantes</h3>
            <ul class="space-y-2 text-gray-700">
                <li><a href="/val-de-loire/general/rutas-loire" class="block p-2 rounded hover:bg-emerald-100">Rutas del Loira</a></li>
                <li><a href="/val-de-loire/general/museos-nantes" class="block p-2 rounded hover:bg-emerald-100 font-semibold text-emerald-700">Museos de Nantes</a></li>
            </ul>
        </nav>
    </aside>

 <!-- CONTENIDO CENTRAL -->
<main class="col-span-12 lg:col-span-6 px-4 lg:px-0">

    <!-- Breadcrumb + Volver -->
    <div class="w-full flex items-center justify-between mt-4 mb-4">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums/2niveles-generico.php'; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
    </div>
    <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>

    <!-- INTRO -->
    <section class="mb-10">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">Museos imprescindibles de Nantes</h2>
        <p class="text-gray-700 leading-relaxed">
            Nantes ofrece una de las escenas culturales más ricas del oeste francés. Sus museos combinan arte, 
            historia, naturaleza, tecnología y experiencias interactivas para todas las edades.
        </p>
    </section>

    <!-- SELECTOR DE FILTRADO -->
    <div class="mb-8">
        <label for="filtro" class="block text-gray-700 font-semibold mb-2">Filtrar contenido:</label>

        <select id="filtro"
            class="border border-emerald-300 rounded-lg p-2 w-full text-emerald-800 focus:outline-none focus:ring focus:ring-emerald-300">
            <option value="todos">Todos</option>
            <option value="museos">Solo museos</option>
            <option value="exposiciones">Solo exposiciones</option>
        </select>
    </div>

    <!-- TARJETAS -->
    <section id="contenedorTarjetas" class="space-y-6">

        <!-- 📌 MUSEOS -->
        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="museos">
            <a href="/val-de-loire/ciudades/nantes/museos-y-exposiciones/musse-arts-de-nantes/index.php"
            class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 id="museum-arts" class="text-xl font-semibold text-emerald-800">🎨 Museo de Artes de Nantes</h3>
            </a>
            <p class="text-gray-600">
                Una de las colecciones de arte más prestigiosas de Francia, desde el siglo XIII hasta el arte contemporáneo.
            </p>
        </div>

        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="museos">
            <a href="/val-de-loire/ciudades/nantes/museos-y-exposiciones/musse-histoire-nantes/index.php"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 id="museum-chateau" class="text-xl font-semibold text-emerald-800">
                    🏰 Castillo de los Duques de Bretaña – Museo de Historia de Nantes
                </h3>
            </a>
            <p class="text-gray-600">
                Un castillo medieval que alberga un museo moderno sobre la historia de Nantes, el comercio marítimo y la época industrial.
            </p>
        </div>

        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="museos">
            <a href="/val-de-loire/ciudades/nantes/lugares-interesantes/les-machines-ille/index.php"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 id="machines" class="text-xl font-semibold text-emerald-800">🐘 Les Machines de l'Île</h3>
            </a>
            <p class="text-gray-600">
                El icónico proyecto artístico con el Gran Elefante, inspirado en Julio Verne y la ingeniería fantástica.
            </p>
        </div>

        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="museos">
            <a href="/val-de-loire/ciudades/nantes/museos-y-exposiciones/museo-julio-verne/index.php"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 id="jules-verne" class="text-xl font-semibold text-emerald-800">📚 Museo Julio Verne</h3>
            </a>
            <p class="text-gray-600">
                Dedicado al célebre escritor nacido en Nantes, con objetos, manuscritos y universos de sus novelas.
            </p>
        </div>

        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="museos">
            <a href="/val-de-loire/ciudades/nantes/museos-y-exposiciones/jardin-des-plantes-nantes/index.php"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 class="text-xl font-semibold text-emerald-800">🌿 Museo del Jardín de las Plantas</h3>
            </a>
            <p class="text-gray-600">
                Uno de los jardines botánicos más importantes de Francia, con invernaderos y colecciones botánicas únicas.
            </p>
        </div>

        <!-- 📌 EXPOSICIONES -->
        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="exposiciones">
            <a href="/val-de-loire/ciudades/nantes/museos-y-exposiciones/lumieres-sur-la-loire-nantes/index.php"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 class="text-xl font-semibold text-emerald-800">✨ Exposición “Lumières sur la Loire”</h3>
            </a><?php /* https://www.immersia-spectacle.fr/ */ ?>
            <p class="text-gray-600">
                Una exposición inmersiva de luz y sonido inspirada en el Loira, perfecta para familias y amantes del arte digital.
            </p>
        </div>

        <div class="p-5 bg-white shadow rounded-xl border tarjeta" data-tipo="exposiciones">
            <a href="https://francerent.com/es/destinations/Nantes/attractions/jules-verne-museum?srsltid=AfmBOorYcUMo1MhRSxMsDqJEivTFhiMafYzi2rNYSPBHY5fZk9_sclko"
                class="text-emerald-700 font-semibold hover:underline hover:text-emerald-900 transition">
                <h3 class="text-xl font-semibold text-emerald-800">🌌 Exposición “Universos de Julio Verne”</h3>
            </a>
            <p class="text-gray-600">
                Modelos, ilustraciones y recreaciones interactivas de los mundos creados por el escritor.
            </p><?php /* Pregúntales si tienen programa de afiliados o si aceptan colaboraciones/patrocinios. */ ?>
        </div>

    </section>

</main>

<!-- SCRIPT DE FILTRADO -->
<script>
document.getElementById('filtro').addEventListener('change', function () {
    const tipo = this.value;
    const tarjetas = document.querySelectorAll('.tarjeta');

    tarjetas.forEach(t => {
        if (tipo === 'todos' || t.dataset.tipo === tipo) {
            t.style.display = 'block';
        } else {
            t.style.display = 'none';
        }
    });
});
</script>


    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block col-span-3">
        <div class="sticky top-28 max-h-[80vh] overflow-y-auto p-2">
            <!-- Publicidad -->
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=FR&items=3&locale=es-ES&powered_by=true" charset="utf-8"></script>
        </div>
    </aside>

</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>
</body>
</html>


<?php /*
✅ ¿Quieres que también te genere…?

🔹 La página individual para cada museo (con plantilla lista)
🔹 El archivo schemas-museos-nantes.php
🔹 El menú lateral actualizado con enlaces a museos
🔹 Un grid en lugar de lista
🔹 Filtros más avanzados (por ubicación, tipo, precio, accesibilidad)
*/ ?>