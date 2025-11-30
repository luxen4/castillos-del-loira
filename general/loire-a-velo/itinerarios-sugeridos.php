<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Itinerarios en bicicleta — Valle del Loira</title>
  <meta name="description" content="Itinerarios sugeridos en bici por el Valle del Loira: mapas interactivos, descargas GPX y recomendaciones."/>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-sA+4fJtXvycKqv5vGkO6Gk9qfI41q6p2bT9f+3RtkWQ=" crossorigin=""/>
  <style>
    /* ajustes */
    #map { height: 420px; min-height: 320px; border-radius: .5rem; }
    .route-card { transition: transform .12s ease; }
    .route-card:hover { transform: translateY(-4px); }
    /* marquee simple para anuncios */
    @keyframes marquee { 0% { transform: translateX(0) } 100% { transform: translateX(-50%) } }
    .marquee { display:flex; gap:1rem; animation: marquee 18s linear infinite; width:max-content; }
    /* mobile overlay menu */
    #mobileOverlay { transition: opacity .28s ease, transform .32s ease; }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-4 shadow-md">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
      <a href="#" class="flex items-center gap-3">
        <div class="w-10 h-10 bg-white/20 rounded flex items-center justify-center font-bold">Loire</div>
        <div>
          <h1 class="text-lg font-bold">Itinerarios en bici — Valle del Loira</h1>
          <p class="text-xs text-emerald-100">Rutas, mapas y GPX descargable</p>
        </div>
      </a>

      <!-- botón hamburguesa -->
      <button id="menuBtn" class="lg:hidden p-2" aria-expanded="false" aria-controls="mobileOverlay" aria-label="Abrir menú">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/></svg>
      </button>

      <nav class="hidden lg:flex gap-6 items-center">
        <a href="#rutas" class="hover:underline">Rutas</a>
        <a href="#mapa" class="hover:underline">Mapa</a>
        <a href="#consejos" class="hover:underline">Consejos</a>
      </nav>
    </div>
  </header>

  <!-- Mobile overlay menu -->
  <div id="mobileOverlay" class="fixed inset-0 bg-emerald-700 bg-opacity-95 text-white z-50 hidden flex-col items-center justify-center gap-6 lg:hidden">
    <a href="#rutas" class="text-xl" onclick="toggleMenu()">Rutas</a>
    <a href="#mapa" class="text-xl" onclick="toggleMenu()">Mapa</a>
    <a href="#consejos" class="text-xl" onclick="toggleMenu()">Consejos</a>
    <button class="mt-4 px-4 py-2 bg-white text-emerald-700 rounded" onclick="toggleMenu()">Cerrar</button>
  </div>

  <main class="max-w-7xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

      <!-- ASIDE IZQUIERDO -->
      <aside class="hidden lg:block lg:col-span-3 space-y-6 sticky top-20 self-start">
        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold text-emerald-700">Navegación rápida</h4>
          <nav class="mt-3 text-sm space-y-2">
            <a href="#rutas" class="text-blue-600 hover:underline block">Rutas destacadas</a>
            <a href="#mapa" class="text-blue-600 hover:underline block">Mapa interactivo</a>
            <a href="#consejos" class="text-blue-600 hover:underline block">Consejos prácticos</a>
          </nav>
        </div>

        <div class="bg-white p-4 rounded-lg shadow text-center">
          <h5 class="font-semibold">Publicidad</h5>
          <div class="mt-3 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">Espacio 300×250</div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h5 class="font-semibold">Filtro Rutas</h5>
          <div class="mt-2 space-y-2 text-sm">
            <button id="filterAll" class="px-3 py-2 bg-emerald-600 text-white rounded w-full">Todas</button>
            <button id="filterEasy" class="px-3 py-2 border rounded w-full">Fácil</button>
            <button id="filterMed" class="px-3 py-2 border rounded w-full">Media</button>
            <button id="filterHard" class="px-3 py-2 border rounded w-full">Difícil</button>
          </div>
        </div>
      </aside>

      <!-- CONTENIDO CENTRAL -->
      <section class="lg:col-span-6">
        <article class="bg-white rounded-xl shadow overflow-hidden mb-6">
          <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1400&q=60" alt="Bici en Loira" class="w-full h-48 object-cover">
          <div class="p-6">
            <h2 class="text-2xl font-semibold">Itinerarios sugeridos en bicicleta por el Valle del Loira</h2>
            <p class="mt-3 text-gray-700">Rutas seleccionadas para distintos niveles: paseos ribereños, recorridos entre castillos y jornadas por viñedos. En cada ruta tienes mapa, descripción y GPX descargable.</p>
          </div>
        </article>

        <!-- RUTAS (scroll interno si hay mucho contenido) -->
        <div id="routesContainer" class="space-y-4 max-h-[72vh] overflow-y-auto p-1">

          <!-- Cada card de ruta se generará a partir de JS pero incluyo ejemplos estáticos para accesibilidad -->
          <!-- Repetirán: botón Ver en mapa y Descargar GPX -->

          <!-- Ruta template (ejemplo 1) -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">Saumur — Montsoreau</h3>
                <p class="text-sm text-gray-600">12 km · Fácil · Paseo ribereño</p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="saumur-montsoreau">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="saumur-montsoreau">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Carriles bici tranquilos, miradores y paradas en terrazas junto al Loira.</p>
          </article>

          <!-- (más rutas) -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">Chinon — Candes-Saint-Martin</h3>
                <p class="text-sm text-gray-600">28 km · Media · Tramos rurales</p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="chinon-candes">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="chinon-candes">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Pueblos con encanto y bodegas para hacer una parada.</p>
          </article>

          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">Blois — Chambord — Blois</h3>
                <p class="text-sm text-gray-600">55 km · Difícil · Circuito castillos</p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="blois-chambord">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="blois-chambord">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Ruta larga que conecta castillos y paisajes variados.</p>
          </article>

          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">Tours — Vouvray</h3>
                <p class="text-sm text-gray-600">36 km · Media · Vinos y viñedos</p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="tours-vouvray">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="tours-vouvray">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Entre viñedos, con muchas bodegas para degustar.</p>
          </article>

          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">Amboise — Chaumont</h3>
                <p class="text-sm text-gray-600">22 km · Fácil · Panorámico</p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="amboise-chaumont">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="amboise-chaumont">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Miradores y jardines históricos, ideal para fotos.</p>
          </article>

        </div>

        <!-- Mapa -->
        <section id="mapa" class="mt-6 bg-white p-4 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Mapa interactivo</h3>
          <p class="text-sm text-gray-600 mt-1">Haz clic en "Ver en mapa" para centrar la ruta.</p>
          <div id="map" class="mt-3">
<?php $src_google_maps = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d786341.7540189547!2d-0.5643572265485522!3d47.256926754164034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f6bd21fcd936b1%3A0x31167eba9665158f!2sR%C3%ADo%20Loira!5e0!3m2!1ses!2ses!4v1764461861334!5m2!1ses!2ses'; ?>

 <iframe
              src="<?= $src_google_maps; ?>"
              class="w-full h-full"
              style="border:0;"
              allowfullscreen
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>




          </div>
        </section>
      </section>

      <!-- ASIDE DERECHO -->
      <aside class="lg:col-span-3 space-y-6 sticky top-20 self-start">
        <?php /*
        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div> */ ?>

        
          <?php $alineacion = 2;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
       

        <div class="bg-white p-4 rounded-lg shadow">
          <h5 class="font-semibold">Alquiler de bicicletas</h5>
          <p class="text-sm text-gray-600 mt-2">Empresas locales que ofrecen e-bikes y asistencia.</p>
          <a href="#" class="mt-3 inline-block text-sm px-3 py-2 bg-emerald-600 text-white rounded">Ver opciones</a>
        </div>
      </aside>
    </div>

           <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>


    <!-- Footer / copyright -->
    <footer class="mt-8 bg-white rounded-lg p-4 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-2 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
          <p>© <?= date("Y"); ?> Itinerarios Loira</p>
          <p class="text-xs mt-1">Diseñado por Adrián Laya García — <a href="mailto:superlaya50@gmail.com" class="underline text-emerald-700">superlaya50@gmail.com</a></p>
        </div>
        <div class="flex gap-3">
          <a href="#rutas" class="underline">Rutas</a>
          <a href="#mapa" class="underline">Mapa</a>
          <a href="#consejos" class="underline">Consejos</a>
        </div>
      </div>
    </footer>
  </main>

  <!-- SCRIPTS: Leaflet + lógica rutas/GPX -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
          integrity="sha256-3g6k8t2gqK3Nqj2qf9m6G4pGZ2f3p8b7mQssm+q3G3U=" crossorigin=""></script>

  <script>
    // --- Datos de rutas (ejemplo simplificado) ---
    const ROUTES = {
      "saumur-montsoreau": {
        name: "Saumur — Montsoreau",
        difficulty: "Fácil",
        coords: [[47.2591,0.0891],[47.2470,0.0550],[47.2207,0.0167]],
        desc: "Paseo ribereño con miradores y terrazas."
      },
      "chinon-candes": {
        name: "Chinon — Candes-Saint-Martin",
        difficulty: "Media",
        coords: [[47.1639,0.1619],[47.1500,0.0900],[47.1300,0.0800]],
        desc: "Tramos rurales y pueblos con encanto."
      },
      "blois-chambord": {
        name: "Blois — Chambord — Blois",
        difficulty: "Difícil",
        coords: [[47.5860,1.3267],[47.6163,1.5174],[47.5860,1.3267]],
        desc: "Circuito largo que conecta castillos."
      },
      "tours-vouvray": {
        name: "Tours — Vouvray",
        difficulty: "Media",
        coords: [[47.3941,0.6848],[47.3920,0.7490],[47.3941,0.6848]],
        desc: "Entre viñedos con bodegas para catas."
      },
      "amboise-chaumont": {
        name: "Amboise — Chaumont",
        difficulty: "Fácil",
        coords: [[47.4100,0.9830],[47.3810,1.0090]],
        desc: "Tramo panorámico con miradores."
      }
    };

    // --- Inicializar mapa ---
    const map = L.map('map').setView([47.4, 0.8], 9);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const colors = ["#16a34a","#0891b2","#7c3aed","#b45309","#0ea5e9"];
    const routeLayers = {};

    // Añadir rutas al mapa como polilínea y marcador inicio
    Object.entries(ROUTES).forEach(([id, r], idx) => {
      const poly = L.polyline(r.coords, { color: colors[idx % colors.length], weight: 4 }).addTo(map);
      const start = r.coords[0];
      L.marker(start).addTo(map).bindPopup(`<strong>${r.name}</strong><br>${r.desc}`);
      poly.bindPopup(`<strong>${r.name}</strong><br>${r.desc}`);
      routeLayers[id] = poly;
    });

    // Centrar en la primera ruta al cargar
    window.addEventListener('load', () => {
      const first = Object.keys(routeLayers)[0];
      if (first) map.fitBounds(routeLayers[first].getBounds(), {padding:[30,30]});
    });

    // Botones "Ver en mapa"
    document.querySelectorAll('.btn-focus-route').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.route;
        const poly = routeLayers[id];
        if (!poly) return;
        map.fitBounds(poly.getBounds(), { padding:[40,40] });
        poly.openPopup && poly.openPopup();
      });
    });

    // --- GPX generator (seguro y válido) ---
    function escapeXml(s) {
      return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
                      .replace(/"/g,'&quot;').replace(/'/g,'&apos;');
    }

    function coordsToGpx(coords, name) {
      const safeName = escapeXml(name || 'track');
      const points = coords.map(c => `    <trkpt lat="${c[0]}" lon="${c[1]}"><ele>0</ele></trkpt>`).join("\n");
      // Use \x3C? to avoid browsers interpreting XML declaration inside js template
      const gpx = '\x3C?xml version="1.0" encoding="UTF-8"?>\n' +
        `<gpx version="1.1" creator="ItinerariosLoira" xmlns="http://www.topografix.com/GPX/1/1">\n` +
        `  <metadata><name>${safeName}</name></metadata>\n` +
        `  <trk><name>${safeName}</name><trkseg>\n` +
        `${points}\n` +
        `  </trkseg></trk>\n</gpx>`;
      return gpx;
    }

    // Descargar GPX al vuelo
    document.querySelectorAll('.btn-download').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.route;
        const r = ROUTES[id];
        if (!r) return alert('Ruta no encontrada');
        const gpx = coordsToGpx(r.coords, r.name);
        const blob = new Blob([gpx], { type: 'application/gpx+xml' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${id}.gpx`;
        document.body.appendChild(a);
        a.click();
        a.remove();
        URL.revokeObjectURL(url);
      });
    });

    // Filtros simples
    document.getElementById('filterAll').addEventListener('click', () => showByDifficulty('all'));
    document.getElementById('filterEasy').addEventListener('click', () => showByDifficulty('Fácil'));
    document.getElementById('filterMed').addEventListener('click', () => showByDifficulty('Media'));
    document.getElementById('filterHard').addEventListener('click', () => showByDifficulty('Difícil'));

    function showByDifficulty(kind){
      const articles = document.querySelectorAll('#routesContainer > article');
      articles.forEach((art, idx) => {
        // mapeo simple por orden (coincide con ROUTES keys order in this example)
        const keys = Object.keys(ROUTES);
        const key = keys[idx];
        const diff = ROUTES[key] ? ROUTES[key].difficulty : 'Fácil';
        let show = (kind === 'all') || (diff === kind);
        art.style.display = show ? '' : 'none';
      });
    }

    // Mobile menu toggle
    function toggleMenu(){
      const mob = document.getElementById('mobileOverlay');
      mob.classList.toggle('hidden');
      const btn = document.getElementById('menuBtn');
      const expanded = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', String(!expanded));
    }
    document.getElementById('menuBtn').addEventListener('click', toggleMenu);

  </script>
</body>
</html>
