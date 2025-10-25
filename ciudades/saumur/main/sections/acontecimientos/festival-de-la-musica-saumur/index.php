<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival de la Música en Saumur</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<header class="bg-indigo-600 text-white py-6">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Festival de la Música en Saumur</h1>
        <nav class="space-x-4">
            <a href="#programa" class="hover:underline">Programa</a>
            <a href="#entradas" class="hover:underline">Entradas</a>
            <a href="#mapa" class="hover:underline">Mapa</a>
            <a href="#alojamiento" class="hover:underline">Alojamiento</a>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="bg-indigo-100 py-12">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-indigo-700 mb-4">🎶 Festival de la Música en Saumur</h2>
        <p class="text-gray-700 max-w-2xl mx-auto">Disfruta de varios días de conciertos, talleres y actividades musicales en los lugares más emblemáticos de Saumur. Una experiencia cultural única para toda la familia.</p>
    </div>
</section>

<main class="container mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">

<!-- Aside izquierdo -->
<aside class="hidden lg:block lg:col-span-3 space-y-6">
        <section class="bg-white p-4 rounded-2xl shadow">
            <h4 class="font-semibold text-indigo-700 mb-3">🔗 Enlaces útiles</h4>
            <ul class="text-sm text-gray-700 space-y-2">
                <li><a href="https://www.saumur-tourisme.com" class="hover:underline" target="_blank">Turismo Saumur</a></li>
                <li><a href="https://www.festival-musique-saumur.fr" class="hover:underline" target="_blank">Web oficial del festival</a></li>
            </ul>
        </section>
    </aside>

<!-- Contenido principal -->
<section class="lg:col-span-6 space-y-8">

        <!-- Programa -->
        <article id="programa" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-indigo-700 mb-4">🎵 Programa del Festival</h3>
            <p class="text-gray-700 mb-2">Durante el festival podrás disfrutar de:</p>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Conciertos de música clásica, jazz y pop en plazas y auditorios.</li>
                <li>Talleres de música para niños y adultos.</li>
                <li>Exposiciones de instrumentos y actividades interactivas.</li>
            </ul>
        </article>

        <!-- Entradas -->
        <article id="entradas" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-indigo-700 mb-4">🎫 Entradas y Reservas</h3>
            <p class="text-gray-700 mb-2">Puedes adquirir tus entradas online o en los puntos de venta oficiales de Saumur:</p>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li><a href="https://www.fnacspectacles.com" class="text-indigo-600 hover:underline" target="_blank">Compra online en FNAC</a></li>
                <li><a href="https://www.saumur-tourisme.com" class="text-indigo-600 hover:underline" target="_blank">Oficina de Turismo de Saumur</a></li>
            </ul>
        </article>

        <!-- Mapa -->
        <article id="mapa" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-indigo-700 mb-4">🗺️ Mapa del Evento</h3>
            <div class="w-full aspect-video rounded overflow-hidden border">
                <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=0.07,47.25,0.11,47.28&layer=mapnik"
                    style="width:100%; height:100%; border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <p class="text-xs text-gray-500 mt-2">Consulta el mapa para ubicar los escenarios y zonas de actividades.</p>
        </article>

        <!-- Alojamiento -->
        <article id="alojamiento" class="bg-white p-6 rounded-2xl shadow">
            <h3 class="text-xl font-semibold text-indigo-700 mb-4">🏨 Alojamiento en Saumur</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-2">
                <li><a href="https://www.hotel-saumur.com" class="text-indigo-600 hover:underline" target="_blank">Hoteles céntricos</a></li>
                <li><a href="https://www.campings.com" class="text-indigo-600 hover:underline" target="_blank">Campings y casas rurales</a></li>
                <li><a href="https://www.airbnb.fr/s/Saumur--France" class="text-indigo-600 hover:underline" target="_blank">Apartamentos turísticos</a></li>
            </ul>
        </article>

    </section>


<!-- Aside derecho -->
<aside class="lg:col-span-3 space-y-6">

        <section class="bg-white p-4 rounded-2xl shadow text-center">
            <h4 class="font-semibold text-indigo-700 mb-2">☀️ Clima en Saumur</h4>
            <p class="text-2xl font-semibold text-indigo-600">18°C</p>
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
<footer class="bg-indigo-50 py-10 mt-8">
    <div class="container mx-auto px-6 text-center">
        <h4 class="text-lg font-bold text-indigo-700 mb-4">Patrocinadores</h4>
        <div class="flex flex-wrap justify-center gap-6">
            <img src="/img/patrocinador1.png" alt="Patrocinador" class="h-10" loading="lazy">
            <img src="/img/patrocinador2.png" alt="Patrocinador" class="h-10" loading="lazy">
        </div>
    </div>
</footer>

</body>
</html>
