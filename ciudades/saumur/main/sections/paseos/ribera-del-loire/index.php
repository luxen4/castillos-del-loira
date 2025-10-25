<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paseo por la Ribera del Loira en Saumur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<header class="bg-emerald-600 text-white py-6">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Paseo por la Ribera del Loira</h1>
        <nav class="space-x-4">
            <a href="#ruta" class="hover:underline">Ruta</a>
            <a href="#mapa" class="hover:underline">Mapa</a>
            <a href="#descargas" class="hover:underline">Descargas</a>
            <a href="#alojamiento" class="hover:underline">Alojamiento</a>
        </nav>
    </div>
</header>

<!-- Hero / Introducción -->
<section class="bg-emerald-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-emerald-700 mb-4">🚶‍♂️ Paseo por la Ribera del Loira en Saumur</h2>
        <p class="text-gray-700 max-w-2xl mx-auto">Disfruta de un paseo tranquilo por la ribera del Loira en la encantadora ciudad de Saumur. Recorridos señalizados, vistas al río, zonas verdes y paradas culturales para toda la familia.</p>
    </div>
</section>

<main class="container mx-auto px-6 py-10 grid lg:grid-cols-4 gap-8">

    <!-- Columna izquierda: enlaces útiles y consejos -->
    <aside class="hidden lg:block space-y-6 lg:col-span-1">
        <section class="bg-white p-4 rounded-2xl shadow">
            <h4 class="font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
            <ul class="text-sm text-gray-700 space-y-2">
                <li><a href="https://www.saumur-valdeloire.com" class="hover:underline" target="_blank">Turismo Saumur</a></li>
                <li><a href="https://www.loireavelo.fr" class="hover:underline" target="_blank">Loire à Vélo</a></li>
            </ul>
        </section>

        <section class="bg-white p-4 rounded-2xl shadow text-sm">
            <h4 class="font-semibold text-emerald-700 mb-2">📌 Consejos</h4>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Llevar calzado cómodo y agua.</li>
                <li>Respetar la señalización y áreas naturales.</li>
                <li>Evitar horas de alta afluencia si buscas tranquilidad.</li>
            </ul>
        </section>
    </aside>

    <!-- Contenido principal -->
    <section class="lg:col-span-2 space-y-8">

        <!-- Ruta -->
        <article id="ruta" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-emerald-700 mb-4">🗺️ Descripción del Paseo</h3>
            <p class="text-gray-700 mb-2">Recorrido llano de aproximadamente 6 km que bordea la ribera del Loira. Ideal para caminatas, paseos familiares y ciclistas ocasionales.</p>
            <ul class="list-disc list-inside text-gray-700">
                <li>Puntos de interés: Château de Saumur, jardines del río, miradores.</li>
                <li>Duración estimada: 1.5 a 2 horas.</li>
                <li>Dificultad: Fácil.</li>
            </ul>
        </article>

        <!-- Mapa -->
        <article id="mapa" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-emerald-700 mb-4">🗺️ Mapa Interactivo</h3>
            <div class="w-full aspect-video rounded overflow-hidden border">
                <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=0.07,47.25,0.11,47.28&layer=mapnik"
                    style="width:100%; height:100%; border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="text-xs text-gray-500 mt-2">Para navegación detallada, descarga el GPX y úsalo en tu app de mapas.</p>
        </article>

        <!-- Descargas -->
        <article id="descargas" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-emerald-700 mb-4">📥 Descargas</h3>
            <div class="grid sm:grid-cols-2 gap-4">
                <a href="/gpx/saumur_ribera_loire.gpx" class="block p-4 border rounded hover:shadow-md">
                    <strong>Paseo Ribera del Loira (GPX)</strong>
                    <div class="text-sm text-gray-600">6 km · Fácil</div>
                </a>
                <a href="/docs/guia-paseo-saumur.pdf" class="block p-4 border rounded hover:shadow-md">
                    <strong>Guía PDF</strong>
                    <div class="text-sm text-gray-600">Consejos, mapa y puntos de interés</div>
                </a>
            </div>
        </article>

        <!-- Alojamiento -->
        <article id="alojamiento" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-emerald-700 mb-4">🏨 Alojamiento y Servicios</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li><a href="https://www.hotel-saumur.com" class="text-emerald-600 hover:underline" target="_blank">Hoteles céntricos con guarda-bicis</a></li>
                <li><a href="https://www.campings.com" class="text-emerald-600 hover:underline" target="_blank">Campings cercanos al Loira</a></li>
            </ul>
        </article>

    </section>

    <!-- Aside derecho -->
    <aside class="space-y-6 lg:col-span-1">

        <section class="bg-white p-4 rounded-2xl shadow text-center">
            <h4 class="font-semibold text-emerald-700 mb-2">☀️ Clima en Saumur</h4>
            <p class="text-2xl font-semibold text-emerald-600">18°C</p>
            <p class="text-sm text-gray-600">Parcialmente nublado</p>
        </section>

        <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
            <p class="text-gray-500 text-sm mb-2">Publicidad</p>
            <div class="bg-white rounded-lg h-40 flex items-center justify-center">
                <span class="text-gray-400 text-sm">Espacio reservado (300x250)</span>
            </div>
        </div>

    </aside>

</main>

<!-- Footer / Patrocinadores -->
<footer class="bg-emerald-50 py-10 mt-8">
    <div class="container mx-auto px-6 text-center">
        <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores</h4>
        <div class="flex flex-wrap justify-center gap-6">
            <img src="/img/patrocinador1.png" alt="Patrocinador" class="h-10" loading="lazy">
            <img src="/img/patrocinador2.png" alt="Patrocinador" class="h-10" loading="lazy">
        </div>
    </div>
</footer>

</body>
</html>
