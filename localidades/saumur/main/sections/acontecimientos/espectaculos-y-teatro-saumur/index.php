<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>🎭 Espectáculos y Teatros en Saumur 2025</title>
<meta name="description" content="Descubre los mejores espectáculos y teatros en Saumur 2025: obras de teatro, conciertos, danza y programación cultural. Entradas y enlaces oficiales.">
<meta name="keywords" content="Espectáculos Saumur, Teatro Saumur, Conciertos Saumur, Cultura Saumur, Entradas teatro Saumur">

<!-- Open Graph -->
<meta property="og:title" content="🎭 Espectáculos y Teatros en Saumur 2025">
<meta property="og:description" content="Disfruta de la mejor programación de teatro, danza y conciertos en Saumur. Información oficial, entradas y galería de imágenes.">
<meta property="og:image" content="/img/espectaculos-og.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.saumur-tourisme.com/espectaculos-teatros">

<script src="https://cdn.tailwindcss.com"></script>
<!-- Simple Lightbox CSS -->
<style>
  .lightbox { display:none; position:fixed; z-index:50; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.8); justify-content:center; align-items:center; }
  .lightbox img { max-width:90%; max-height:90%; border-radius:0.5rem; }
</style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header -->
<header class="bg-purple-600 text-white py-6 shadow-md">
  <div class="container mx-auto px-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold">🎭 Espectáculos y Teatros en Saumur</h1>
    <nav class="space-x-4">
      <a href="#programa" class="hover:underline">Programación</a>
      <a href="#entradas" class="hover:underline">Entradas</a>
      <a href="#galeria" class="hover:underline">Galería</a>
      <a href="#alojamiento" class="hover:underline">Alojamiento</a>
    </nav>
  </div>
</header>

<!-- Hero -->
<section class="bg-purple-100 py-12">
  <div class="container mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold text-purple-700 mb-4">🎶 Vive la cultura y el teatro en Saumur</h2>
    <p class="text-gray-700 max-w-2xl mx-auto">
      Descubre los mejores espectáculos de teatro, danza y conciertos en los espacios culturales de Saumur. Información oficial, entradas y programación completa.
    </p>
  </div>
</section>

<main class="container mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">

  <!-- Aside izquierdo -->
  <aside class="hidden lg:block lg:col-span-3 space-y-6">
    <section class="bg-white p-4 rounded-2xl shadow">
      <h4 class="font-semibold text-purple-700 mb-3">🔗 Enlaces oficiales</h4>
      <ul class="text-sm text-gray-700 space-y-2">
        <li><a href="https://www.saumur-tourisme.com" target="_blank" class="hover:underline text-purple-600">Turismo Saumur</a></li>
        <li><a href="https://www.theatre-saumur.fr" target="_blank" class="hover:underline text-purple-600">Teatro y espacios culturales</a></li>
      </ul>
    </section>

    <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
      <div class="bg-white rounded-lg h-56 flex items-center justify-center">
        <span class="text-gray-400 text-sm">Espacio reservado (300x250)</span>
      </div>
    </div>
  </aside>

  <!-- Contenido principal -->
  <section class="lg:col-span-6 space-y-8">

    <!-- Programa -->
    <article id="programa" class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-xl font-semibold text-purple-700 mb-4">🎟️ Programación de Espectáculos</h3>
      <p class="text-gray-700 mb-2">Próximos eventos en los teatros de Saumur:</p>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li>Obras de teatro clásicas y contemporáneas en el Théâtre de Saumur.</li>
        <li>Conciertos de música clásica y moderna en auditorios y plazas.</li>
        <li>Espectáculos de danza y actuaciones infantiles.</li>
      </ul>
    </article>

    <!-- Entradas -->
    <article id="entradas" class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-xl font-semibold text-purple-700 mb-4">🎫 Entradas y Reservas</h3>
      <p class="text-gray-700 mb-2">Adquiere tus entradas a través de los canales oficiales:</p>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <li><a href="https://www.fnacspectacles.com" target="_blank" class="text-purple-600 hover:underline">Compra online en FNAC</a></li>
        <li><a href="https://www.saumur-tourisme.com" target="_blank" class="text-purple-600 hover:underline">Oficina de Turismo de Saumur</a></li>
      </ul>
    </article>

    <!-- Galería -->
    <article id="galeria" class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-xl font-semibold text-purple-700 mb-4">📸 Galería de Imágenes</h3>
      <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
        <img src="/img/teatro1.jpg" alt="Espectáculo 1" class="rounded cursor-pointer" onclick="openLightbox(this)">
        <img src="/img/teatro2.jpg" alt="Espectáculo 2" class="rounded cursor-pointer" onclick="openLightbox(this)">
        <img src="/img/teatro3.jpg" alt="Espectáculo 3" class="rounded cursor-pointer" onclick="openLightbox(this)">
        <img src="/img/teatro4.jpg" alt="Espectáculo 4" class="rounded cursor-pointer" onclick="openLightbox(this)">
      </div>
    </article>

    <!-- Espacio publicitario -->
    <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
      <div class="bg-white rounded-lg h-40 flex items-center justify-center">
        <span class="text-gray-400 text-sm">Banner adaptable (728x90)</span>
      </div>
    </div>

    <!-- Alojamiento -->
    <article id="alojamiento" class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-xl font-semibold text-purple-700 mb-4">🏨 Alojamiento en Saumur</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-2">
        <li><a href="https://www.hotel-saumur.com" class="text-purple-600 hover:underline" target="_blank">Hoteles céntricos</a></li>
        <li><a href="https://www.campings.com" class="text-purple-600 hover:underline" target="_blank">Campings y casas rurales</a></li>
        <li><a href="https://www.airbnb.fr/s/Saumur--France" class="text-purple-600 hover:underline" target="_blank">Apartamentos turísticos</a></li>
      </ul>
    </article>

  </section>

  <!-- Aside derecho -->
  <aside class="lg:col-span-3 space-y-6">
    <section class="bg-white p-4 rounded-2xl shadow text-center">
      <h4 class="font-semibold text-purple-700 mb-2">☀️ Clima en Saumur</h4>
      <p class="text-2xl font-semibold text-purple-600">18°C</p>
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

<!-- Footer -->
<footer class="bg-purple-50 py-10 mt-8">
  <div class="container mx-auto px-6 text-center">
    <h4 class="text-lg font-bold text-purple-700 mb-4">Patrocinadores</h4>
    <div class="flex flex-wrap justify-center gap-6">
      <img src="/img/patrocinador1.png" alt="Patrocinador" class="h-10" loading="lazy">
      <img src="/img/patrocinador2.png" alt="Patrocinador" class="h-10" loading="lazy">
    </div>
  </div>
</footer>

<!-- Lightbox JS -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <img id="lightbox-img" src="" alt="Imagen ampliada">
</div>
<script>
  function openLightbox(img) {
    document.getElementById('lightbox-img').src = img.src;
    document.getElementById('lightbox').style.display = 'flex';
  }
  function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
  }
</script>

</body>
</html>
