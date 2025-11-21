<?php
// rutas-orleans-2025.php
$ciudad = "Orléans"; $slug='orleans';
$region = "Valle del Loira";
$year = 2025;
$slug = "rutas-cicloturisticas-orleans-{$year}";
$descripcion = "Rutas cicloturísticas actualizadas {$year} en {$ciudad} (Francia). Mapas, niveles, recomendaciones, alojamientos y consejos para recorrer el Loira en bicicleta.";
$imagenHero = "https://d2exd72xrrp1s7.cloudfront.net/www/000/1k8/rt/rtxjaa84lmh51w4ym33cmoxkn54mg2080-uhi78856496/0?width=1920&crop=false&q=70";
$keywords = "rutas cicloturísticas Orléans, bici Orléans {$year}, cicloturismo Valle del Loira, rutas en bicicleta Orléans";
$canonical = "https://tusitio.com/val-de-loire/ciudades/orleans/{$slug}.php";
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Rutas cicloturísticas <?= $year ?> — <?= $ciudad ?> | Valle del Loira</title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
  <link rel="canonical" href="<?= $canonical ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Rutas cicloturísticas <?= $year ?> — <?= $ciudad ?> | Valle del Loira">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= $imagenHero ?>">
  <meta property="og:url" content="<?= $canonical ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Rutas cicloturísticas <?= $year ?> — <?= $ciudad ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= $imagenHero ?>">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* Pequeñas mejoras para galerías / overlays */
    .hero-gradient { background: linear-gradient(rgba(0,0,0,0.35), rgba(0,0,0,0.2)); }
    /* .bg-fixed fallback mobile performance */
    @media (max-width: 1024px){ .bg-fixed { background-attachment: scroll !important; } }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-5 shadow">
    <div class="container mx-auto px-6 flex items-center justify-between">
      <a href="/val-de-loire/index.php" class="flex items-center gap-3">
        <img src="/val-de-loire/assets/favicon.png" alt="logo" class="h-8 w-8">
        <span class="text-xl font-bold">Valle del Loira</span>
      </a>
      <nav class="hidden md:flex gap-6">
        <a href="/val-de-loire/index.php" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/ciudades/orleans.php" class="hover:underline">Orléans</a>
      </nav>
      <!-- mobile menu trigger -->
      <div class="md:hidden">
        <button id="btnMenu" aria-label="Abrir menú" class="p-2">
          ☰
        </button>
      </div>
    </div>
  </header>

  <!-- Hero responsive -->
  <section class="relative bg-cover bg-center h-64 sm:h-80 md:h-[420px] lg:h-[520px] hero-gradient"
           style="background-image: url('<?= $imagenHero ?>');">
    <div class="absolute inset-0 flex items-center justify-center">
      <div class="text-center px-4">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold text-white drop-shadow">
          Rutas cicloturísticas <?= $year ?> — <?= $ciudad ?>
        </h1>
        <p class="mt-3 text-sm sm:text-base text-white/90 max-w-2xl mx-auto">
          Mapas, niveles, infraestructura para bicicletas y consejos prácticos para recorrer el Loira en bici.
        </p>
      </div>
    </div>
  </section>

  <!-- Nav secundaria (scroll horizontal en móvil) -->
  <nav class="bg-white sticky top-0 z-20 shadow-inner">
    <div class="container mx-auto px-4 py-3 overflow-x-auto whitespace-nowrap">
      <a href="#rutas" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Rutas</a>
      <a href="#mapa" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Mapa</a>
      <a href="#niveles" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Niveles</a>
      <a href="#alojamiento" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Alojamiento</a>
      <a href="#transporte" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Transporte</a>
      <a href="#consejos" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Consejos</a>
      <a href="#descargas" class="inline-block px-3 py-1 text-sm hover:text-emerald-700">Descargas</a>
    </div>
  </nav>

<!-- Contenido principal -->
<main class="container mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-[280px_minmax(0,1fr)_280px] gap-8 items-start">

  <!-- ASIDE IZQUIERDO -->
  <aside class="hidden lg:block space-y-6 sticky top-24 self-start">
    <section class="bg-white p-4 rounded-2xl shadow">
      <h4 class="font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
      <ul class="text-sm text-gray-700 space-y-2">
        <li><a href="https://www.orleans-metropole.fr/" class="hover:underline" target="_blank">Orléans Métropole</a></li>
        <li><a href="/val-de-loire/general/loire-a-velo.php" class="hover:underline" target="_blank">Loire à Vélo</a></li>
        <li><a href="https://www.tourisme-valdeloire.com/" class="hover:underline" target="_blank">Valle del Loira - Turismo</a></li>
      </ul>
    </section>

    <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
      <p class="text-gray-500 text-sm mb-3">Publicidad</p>
      <div class="bg-white rounded-lg h-40 flex items-center justify-center">
        <span class="text-gray-400 text-sm">Espacio (300x250)</span>
      </div>
    </div>

    <section class="bg-white p-4 rounded-2xl shadow text-sm">
      <h4 class="font-semibold text-emerald-700 mb-2">📅 Evento destacado</h4>
      <p class="text-gray-700">Quedada ciclista mensual — Primer domingo de cada mes. Consulta la web local.</p>
    </section>
  </aside>

  <!-- CONTENIDO CENTRAL -->
  <section class="space-y-8">
    
      <!-- Introducción -->
      <article>
        <h2 id="informacion" class="text-2xl font-bold text-emerald-700 mb-3">🚴 Rutas cicloturísticas actualizadas <?= $year ?> — <?= $ciudad ?></h2>
        <p class="text-gray-700 leading-relaxed">
          Aquí encontrarás las rutas cicloturísticas más interesantes alrededor de <?= $ciudad ?>: recorridos señalizados, variantes para gravel y BTT,
          información sobre firme, nivel técnico y enlaces a archivos GPX para descargar. Las rutas están pensadas para distintos perfiles: familias, cicloturistas de un día y viajeros en etapa.
        </p>
      </article>

      <!-- RUTAS: lista -->
      <article id="rutas" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🗺️ Rutas recomendadas (resumen)</h3>

        <!-- Ruta 1 -->
        <div class="border-b pb-4 mb-4">
          <h4 class="text-lg font-bold">1) Orléans — Meung-sur-Loire (Ruta fluvial)</h4>
          <p class="text-sm text-gray-600 mb-2">Distancia ~ 28 km · Dificultad: fácil · Ideal para familias</p>
          <p class="text-gray-700 mb-2">Seguimiento prácticamente llano por carriles bici y caminos junto al Loira. Pavimento en buen estado; recomendado en época de baja crecida.</p>
          <div class="flex flex-wrap gap-3">
            <a href="/gpx/orleans-meung.gpx" class="px-3 py-2 bg-emerald-600 text-white rounded hover:opacity-90 text-sm" download>Descargar GPX</a>
            <a href="#mapa" class="px-3 py-2 border rounded text-sm hover:border-emerald-600 hover:text-emerald-600">Ver en el mapa</a>
          </div>
        </div>

        <!-- Ruta 2 -->
        <div class="border-b pb-4 mb-4">
          <h4 class="text-lg font-bold">2) Orléans — Chambord (Etapa larga / mixta)</h4>
          <p class="text-sm text-gray-600 mb-2">Distancia ~ 78 km · Dificultad: media · Recomendado gravel / bici de carretera</p>
          <p class="text-gray-700 mb-2">Ruta que combina carriles bici, caminos rurales y tramos de carretera secundaria con poco tráfico. Llevar herramientas y agua suficiente.</p>
          <div class="flex flex-wrap gap-3">
            <a href="/gpx/orleans-chambord.gpx" class="px-3 py-2 bg-emerald-600 text-white rounded hover:opacity-90 text-sm" download>Descargar GPX</a>
            <a href="#mapa" class="px-3 py-2 border rounded text-sm hover:border-emerald-600 hover:text-emerald-600">Ver en el mapa</a>
          </div>
        </div>

        <!-- Ruta 3 -->
        <div class="pb-4">
          <h4 class="text-lg font-bold">3) Circuito urbano de Orléans (Descubre la ciudad)</h4>
          <p class="text-sm text-gray-600 mb-2">Distancia ~ 12 km · Dificultad: fácil · Ideal para e-bikes y paseos</p>
          <p class="text-gray-700 mb-2">Itinerario señalizado que recorre la ribera del Loira, el Jardín Botánico y puntos históricos de la ciudad. Tramos peatonales: bajar la velocidad y respetar las normas.</p>
          <div class="flex gap-3">
            <a href="/gpx/orleans-urbano.gpx" class="px-3 py-2 bg-emerald-600 text-white rounded hover:opacity-90 text-sm" download>Descargar GPX</a>
            <a href="#mapa" class="px-3 py-2 border rounded text-sm hover:border-emerald-600 hover:text-emerald-600">Ver en el mapa</a>
          </div>
        </div>

      </article>

      <!-- Mapa / visualizador -->
      <article id="mapa" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🗺️ Mapa interactivo</h3>
        <p class="text-gray-700 mb-4">Carga las rutas GPX en tu app favorita (Komoot, RideWithGPS, Strava o tu navegador). Aquí te dejamos una vista previa integrada.</p>

        <!-- Embebido OpenStreetMap iframe (ejemplo) -->
        <div class="w-full aspect-video rounded overflow-hidden border">
          <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=1.86%2C47.84%2C2.10%2C47.94&amp;layer=mapnik"
                  style="width:100%; height:100%; border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <p class="text-xs text-gray-500 mt-2">Nota: para rutas detalladas, descarga los GPX y súbelos a tu dispositivo.</p>
      </article>

      <!-- Niveles y equipamiento -->
      <article id="niveles" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">⚙️ Niveles, tiempos y equipamiento</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li><strong>Fácil:</strong> carril bici y caminos compactados. Recomendado para bicicletas urbanas y familias.</li>
          <li><strong>Medio:</strong> tramos mixtos de asfalto y pista. Bici de carretera o gravel recomendada.</li>
          <li><strong>Difícil:</strong> senderos técnicos o largos tramos entre poblaciones. Requiere experiencia y bici adecuada.</li>
        </ul>
        <div class="mt-4 text-sm text-gray-600">
          <p><strong>Equipamiento recomendado:</strong> casco obligatorio, bomba, kit de reparación, teléfono con batería extra, agua, y ropa reflectante. Para etapas largas, batería adicional si usas e-bike.</p>
        </div>
      </article>

      <!-- Descargas -->
      <article id="descargas" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">📥 Descargas</h3>
        <div class="grid sm:grid-cols-2 gap-4">
          <a href="#" class="block p-4 border rounded hover:shadow-md">
            <strong>Orléans — Meung-sur-Loire (GPX)</strong>
            <div class="text-sm text-gray-600">28 km · Fácil</div>
          </a>
          <a href="#" class="block p-4 border rounded hover:shadow-md">
            <strong>Orléans — Chambord (GPX)</strong>
            <div class="#">78 km · Medio</div>
          </a>
          <a href="#" class="block p-4 border rounded hover:shadow-md">
            <strong>Circuito urbano Orléans (GPX)</strong>
            <div class="text-sm text-gray-600">12 km · Fácil</div>
          </a>
          <a href="#" class="block p-4 border rounded hover:shadow-md">
            <strong>Guía PDF (imprimible)</strong>
            <div class="text-sm text-gray-600">Consejos, mapas y enlaces útiles</div>
          </a>
        </div>
      </article>

      <!-- Alojamiento y reparaciones -->
      <article id="alojamiento" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🏨 Alojamiento y servicios para ciclistas</h3>
        <p class="text-gray-700">Encuentra hoteles y campings que ofrecen guarda-bicis y kits de reparación. Recomendamos:</p>
        <ul class="list-disc list-inside text-gray-700 space-y-2 mt-3">
          <li><a href="https://www.orleans-hotel-luxe.fr/" target="_blank" class="hover:underline text-emerald-600">Hotel céntrico con guarda-bicis</a></li>
          <li><a href="https://www.campings.com" target="_blank" class="hover:underline text-emerald-600">Campings con acceso a rutas</a></li>
          <li><a href="https://www.loireavelo.fr/" target="_blank" class="hover:underline text-emerald-600">Puntos de asistencia Loire à Vélo</a></li>
        </ul>
      </article>

      <!-- Transporte -->
      <article id="transporte" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">🚆 Transporte y llegar con tu bici</h3>
        <p class="text-gray-700 mb-3">Orléans está bien comunicada por tren (SNCF). Muchos trenes regionales permiten bicicletas plegadas o, previa reserva, bicis desmontadas. En coche: aparcamiento en puntos de inicio de ruta.</p>
        <p class="text-sm text-gray-600">Consulta siempre las políticas de transporte (SNCF / TER) para el transporte de bicicletas y las condiciones de embarque.</p>
      </article>

      <!-- Consejos -->
      <article id="consejos" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700 mb-4">📌 Consejos prácticos</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>Comprueba el estado de los caminos tras lluvias o crecidas del Loira.</li>
          <li>Descarga los GPX antes de salir y lleva una copia offline.</li>
          <li>Respeta las normas locales y a los peatones en tramos urbanos.</li>
          <li>Si viajas en e-bike, planifica puntos de recarga y autonomía.</li>
        </ul>
      </article>

      <!-- Publicidad intermedia -->
      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow-sm">
        <p class="text-gray-500 text-sm mb-2">Publicidad</p>
        <div class="bg-white rounded-lg h-20 flex items-center justify-center">
          <span class="text-gray-400 text-sm">Banner (468x60)</span>
        </div>
      </div>

    </section>

    <!-- (Aquí van todos los <article> de rutas, mapa, descargas, alojamiento, transporte, consejos, etc.) -->
  </section>

  <!-- ASIDE DERECHO -->
  <aside class="hidden lg:block space-y-6 sticky top-24 self-start">
    <section class="bg-white p-4 rounded-2xl shadow text-sm">
      <h4 class="font-semibold text-emerald-700 mb-2">🚲 Talleres y alquiler</h4>
      <ul class="text-gray-700 space-y-2">
        <li><a href="#" class="hover:underline">Atelier Vélo Orléans — Reparaciones rápidas</a></li>
        <li><a href="#" class="hover:underline">Alquiler de bicicletas eléctricas</a></li>
      </ul>
    </section>

    <section class="bg-white p-4 rounded-2xl shadow text-center">
      <h4 class="font-semibold text-emerald-700 mb-2">☀️ Clima (Orléans)</h4>
      <p class="text-2xl font-semibold text-emerald-600">18°C</p>
      <p class="text-sm text-gray-600">Parcialmente nublado</p>
    </section>

    <div class="bg-gray-100 border rounded-2xl p-4 text-center shadow-sm">
      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
      <div class="bg-white rounded-lg h-40 flex items-center justify-center">
        <span class="text-gray-400 text-sm">Espacio (300x250)</span>
      </div>
    </div>

    <section class="bg-white p-4 rounded-2xl shadow text-sm">
      <h4 class="font-semibold text-emerald-700 mb-2">📎 Recursos rápidos</h4>
      <ul class="text-gray-700 space-y-2">
        <li><a href="/val-de-loire/rutas/loire-a-velo" class="hover:underline">Loire à Vélo — Rutas oficiales</a></li>
        <li><a href="/val-de-loire/gpx" class="hover:underline">Todas las descargas GPX</a></li>
      </ul>
    </section>
  </aside>

</main>


  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8 mt-12">
    <div class="container mx-auto px-4 text-center text-sm">
      <p>© <?= date("Y") ?> Valle del Loira · <a href="/aviso-legal.php" class="underline">Aviso legal</a> · <a href="/privacidad.php" class="underline">Privacidad</a></p>
    </div>
  </footer>

  <!-- Botón volver arriba -->
  <button id="btnTop" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })" class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition">⬆️</button>

  <script>
    // Mobile menu (simple)
    document.getElementById('btnMenu')?.addEventListener('click', () => {
      alert('Abrir menú (implementar según tu framework)'); // placeholder
    });

    // Mostrar/ocultar botón top
    window.addEventListener('scroll', function() {
      const btn = document.getElementById('btnTop');
      if (window.scrollY > 300) btn.classList.remove('hidden'); else btn.classList.add('hidden');
    });
  </script>

  <!-- JSON-LD: WebPage -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Rutas cicloturísticas <?= $year ?> - <?= $ciudad ?>",
    "url": "<?= $canonical ?>",
    "description": "<?= htmlspecialchars($descripcion) ?>",
    "publisher": {
      "@type": "Organization",
      "name": "Valle del Loira",
      "url": "https://tusitio.com"
    }
  }
  </script>

</body>
</html>
