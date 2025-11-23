<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>5 Recorridos en bicicleta — Valle del Loira</title>
  <meta name="description" content="Cinco rutas ciclistas por el Valle del Loira: distancias, dificultad, puntos de interés y GPX descargable." />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Leaflet CSS (mapa) -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-sA+4fJtXvycKqv5vGkO6Gk9qfI41q6p2bT9f+3RtkWQ=" crossorigin=""/>

  <style>
    /* Pequeños ajustes */
    #map { height: 480px; }
    .route-card { transition: transform .12s ease; }
    .route-card:hover { transform: translateY(-4px); }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
  <header class="bg-emerald-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center font-bold">Loire</div>
        <div>
          <h1 class="text-xl font-semibold">Recorridos en bicicleta — Valle del Loira</h1>
          <p class="text-sm opacity-90">Rutas sugeridas, mapas interactivos y GPX descargable</p>
        </div>
      </div>

      <nav class="hidden md:flex gap-6 text-sm">
        <a href="#rutas" class="hover:underline">Rutas</a>
        <a href="#mapa" class="hover:underline">Mapa</a>
        <a href="#consejos" class="hover:underline">Consejos</a>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- Aside izquierdo -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4">
          <h3 class="font-semibold">Buscar ruta</h3>
          <p class="text-sm text-gray-600 mt-2">Filtra por distancia o dificultad</p>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <button id="filter-short" class="px-3 py-2 bg-emerald-600 text-white rounded">Corta</button>
            <button id="filter-medium" class="px-3 py-2 bg-emerald-600 text-white rounded">Media</button>
            <button id="filter-long" class="col-span-2 px-3 py-2 bg-emerald-700 text-white rounded">Largas</button>
          </div>
        </div>

        <div class="bg-white rounded-lg border p-4">
          <h4 class="font-semibold">Publicidad</h4>
          <div class="mt-4 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">
            Espacio publicitario 300×250
          </div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Consejos rápidos</h4>
          <ul class="mt-2 text-sm text-gray-700 space-y-1">
            <li>Revisa el clima antes de salir.</li>
            <li>Lleva kit de reparación y agua.</li>
            <li>Respeta la señalización y a los peatones.</li>
          </ul>
        </div>
      </aside>

      <!-- Contenido principal -->
      <section class="lg:col-span-6 space-y-6">
        <article class="bg-white rounded-xl shadow overflow-hidden">
          <img src="https://www.cyclespleinair.fr/uploads/loire-velo-parcours-65b77aca97325.webp"
               alt="Ciclista en el Loira" class="w-full h-56 object-cover" />
          <div class="p-6">
            <h2 class="text-2xl font-semibold">5 rutas imprescindibles en el Valle del Loira</h2>
            <p class="mt-3 text-gray-700">De paseos tranquilos junto al río a jornadas más exigentes: elige la ruta que mejor se adapte a ti.</p>
            <div class="mt-4 flex gap-3">
              <a href="#rutas" class="px-4 py-2 bg-emerald-700 text-white rounded-md text-sm">Ver rutas</a>
              <a href="#mapa" class="px-4 py-2 border rounded-md text-sm">Abrir mapa</a>
            </div>
          </div>
        </article>

        <!-- Lista de rutas -->
        <section id="rutas" class="space-y-4">
          <!-- Ruta template: se rellenará también con JS para map interaction -->
          <!-- Ruta 1 -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">1. Paseo ribereño: Saumur — Montsoreau</h3>
                <p class="text-sm text-gray-600 mt-1">Distancia: <strong>12 km</strong> · Duración aprox. <strong>1 h 10 min</strong> · Dificultad: <strong>Baja</strong></p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="saumur-montsoreau">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="saumur-montsoreau">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Paseo ideal para familias: carriles bici junto al río, miradores y terrazas.</p>
          </article>

          <!-- Ruta 2 -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">2. Ruta histórica: Chinon — Candes-Saint-Martin</h3>
                <p class="text-sm text-gray-600 mt-1">Distancia: <strong>28 km</strong> · Duración aprox. <strong>2 h 30 min</strong> · Dificultad: <strong>Media</strong></p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="chinon-candes">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="chinon-candes">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Ruta con tramos rurales y pueblos con encanto; ideal para combinar con una parada en bodega.</p>
          </article>

          <!-- Ruta 3 -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">3. Circuito de los castillos: Blois — Chambord — Blois</h3>
                <p class="text-sm text-gray-600 mt-1">Distancia: <strong>55 km</strong> · Duración aprox. <strong>4 h 30 min</strong> · Dificultad: <strong>Media - Alta</strong></p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="blois-chambord">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="blois-chambord">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Ruta más exigente que atraviesa paisajes variados y dos emblemáticos castillos del Loira.</p>
          </article>

          <!-- Ruta 4 -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">4. Vinos y viñedos: Tours — Vouvray</h3>
                <p class="text-sm text-gray-600 mt-1">Distancia: <strong>36 km</strong> · Duración aprox. <strong>3 h</strong> · Dificultad: <strong>Media</strong></p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="tours-vouvray">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="tours-vouvray">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Recorrido entre viñedos y bodegas: perfecto para combinar ruta con cata.</p>
          </article>

          <!-- Ruta 5 -->
          <article class="route-card bg-white p-4 rounded-lg border">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
              <div>
                <h3 class="text-lg font-semibold">5. Tramo panorámico: Amboise — Chaumont</h3>
                <p class="text-sm text-gray-600 mt-1">Distancia: <strong>22 km</strong> · Duración aprox. <strong>1 h 50 min</strong> · Dificultad: <strong>Baja - Media</strong></p>
              </div>
              <div class="flex gap-2 items-center">
                <button class="px-3 py-2 bg-emerald-600 text-white rounded text-sm btn-focus-route" data-route="amboise-chaumont">Ver en mapa</button>
                <button class="px-3 py-2 border rounded text-sm btn-download" data-route="amboise-chaumont">Descargar GPX</button>
              </div>
            </div>
            <p class="mt-3 text-sm text-gray-700">Tramo ideal para fotos: miradores sobre el río y jardines históricos.</p>
          </article>

        </section>

        <!-- Mapa interactivo -->
        <section id="mapa" class="bg-white p-4 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Mapa interactivo</h3>
          <p class="text-sm text-gray-600 mt-2">Haz clic en "Ver en mapa" en cualquier ruta para centrarla.</p>
          <div id="map" class="mt-4 rounded"></div>
        </section>

        <section id="consejos" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Consejos para rodar por el Loira</h3>
          <ul class="mt-3 list-disc pl-6 text-gray-700 space-y-1">
            <li>Reserva alojamiento si viajas en temporada alta.</li>
            <li>Respeta las regulaciones de tránsito y zonas protegidas.</li>
            <li>Si quieres degustar vino, planifica transporte o conductor designado.</li>
          </ul>
        </section>
      </section>

      <!-- Aside derecho -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div>

        <div class="bg-white rounded-lg border p-4">
          <h4 class="font-semibold">Publicidad</h4>
          <div class="mt-4 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">
            Espacio publicitario 300×250
          </div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Alquiler de bicicletas</h4>
          <p class="mt-2 text-sm text-gray-700">Empresas locales que ofrecen e-bikes y asistencia para rutas largas.</p>
          <a href="#" class="mt-3 inline-block text-sm px-3 py-2 bg-emerald-600 text-white rounded">Ver opciones</a>
        </div>
      </aside>
    </div>

    <!-- Leaderboard -->
    <div class="mt-8 bg-white rounded-lg border p-4 text-center">
      <small class="text-xs text-gray-400">Publicidad</small>
      <div class="mt-1 text-sm">Leaderboard 970×90 / responsive</div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
          <p>© Rutas en bicicleta — Valle del Loira</p>
          <p class="mt-1">Consejos y tracks generados para uso orientativo</p>
        </div>
        <div class="flex items-center gap-4">
          <a href="#" class="underline">Aviso legal</a>
          <a href="#" class="underline">Contacto</a>
        </div>
      </div>
    </footer>
  </main>

  <!-- Leaflet JS -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-3g6k8t2gqK3Nqj2qf9m6G4pGZ2f3p8b7mQssm+q3G3U=" crossorigin=""></script>

  <script>
    // --- Datos de rutas (coordenadas simplificadas para demo) ---
    const ROUTES = {
      "saumur-montsoreau": {
        name: "Saumur — Montsoreau",
        coords: [
          [47.2591, 0.0891], // Saumur (approx)
          [47.2470, 0.0550], // along river
          [47.2207, 0.0167], // Montsoreau area
        ],
        desc: "Paseo tranquilo junto al río, ideal para familias."
      },
      "chinon-candes": {
        name: "Chinon — Candes-Saint-Martin",
        coords: [
          [47.1639, 0.1619], // Chinon
          [47.1500, 0.0900], // midway
          [47.1300, 0.0800], // Candes area
        ],
        desc: "Tramos rurales y pueblos con encanto."
      },
      "blois-chambord": {
        name: "Blois — Chambord — Blois",
        coords: [
          [47.5860, 1.3267], // Blois
          [47.6163, 1.5174], // Chambord area
          [47.5860, 1.3267], // back to Blois
        ],
        desc: "Circuito más largo que conecta dos castillos emblemáticos."
      },
      "tours-vouvray": {
        name: "Tours — Vouvray",
        coords: [
          [47.3941, 0.6848], // Tours
          [47.3920, 0.7490], // Vouvray area
          [47.3941, 0.6848],
        ],
        desc: "Entre viñedos; muchas bodegas para degustaciones."
      },
      "amboise-chaumont": {
        name: "Amboise — Chaumont",
        coords: [
          [47.4100, 0.9830], // Amboise
          [47.3810, 1.0090], // Chaumont area
        ],
        desc: "Tramo panorámico con miradores y jardines."
      }
    };

    // --- Inicializar mapa ---
    const map = L.map('map').setView([47.4, 0.8], 9);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const routeLayers = {}; // guardar polylines

    // Añadir cada ruta al mapa como polilínea y marcador inicio
    Object.entries(ROUTES).forEach(([id, r], idx) => {
      const poly = L.polyline(r.coords, { color: ["#1f9d55","#2b8a9a","#7c3aed","#b45309","#0ea5e9"][idx % 5], weight: 4 })
        .addTo(map)
        .bindPopup(`<strong>${r.name}</strong><br>${r.desc}`);

      // marcador de inicio
      const start = r.coords[0];
      L.marker(start).addTo(map).bindPopup(`<strong>${r.name}</strong><br>Punto de inicio`);

      routeLayers[id] = poly;
    });

    // Centrar función: al pulsar "Ver en mapa"
    document.querySelectorAll('.btn-focus-route').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.route;
        const poly = routeLayers[id];
        if (!poly) return;
        map.fitBounds(poly.getBounds(), { padding: [40, 40] });
        poly.openPopup && poly.openPopup();
      });
    });

    // --- Generar y descargar GPX simple al vuelo ---
// --- Generar y descargar GPX simple al vuelo ---
function coordsToGpx(coords, name) {
  function escapeXml(s) {
    return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
             .replace(/"/g,'&quot;').replace(/'/g,'&apos;');
  }
  const safeName = escapeXml(name);
  const points = coords.map(c => `    <trkpt lat="${c[0]}" lon="${c[1]}"><ele>0</ele></trkpt>`).join("\n");

  // Usamos \x3C para evitar que en el source aparezca '<' seguido de '?'
  const gpx = `\x3C?xml version="1.0" encoding="UTF-8"?>
<gpx version="1.1" creator="ValleDelLoiraDemo" xmlns="http://www.topografix.com/GPX/1/1">
  <metadata>
    <name>${safeName}</name>
  </metadata>
  <trk>
    <name>${safeName}</name>
    <trkseg>
${points}
    </trkseg>
  </trk>
</gpx>`;

  return gpx;
}





    function escapeHtml(s){ return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

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

    // --- Filtros básicos (demostración) ---
    document.getElementById('filter-short').addEventListener('click', () => filterByLength('short'));
    document.getElementById('filter-medium').addEventListener('click', () => filterByLength('medium'));
    document.getElementById('filter-long').addEventListener('click', () => filterByLength('long'));

    function filterByLength(kind){
      // Demo simple: corta <25, media 25-45, larga >45
      const articles = document.querySelectorAll('#rutas > article');
      articles.forEach((art, idx) => {
        const lengths = [12,28,55,36,22]; // correspondencia con las 5 rutas
        const len = lengths[idx];
        let show = false;
        if (kind === 'short') show = len < 25;
        if (kind === 'medium') show = len >= 25 && len <= 45;
        if (kind === 'long') show = len > 45;
        art.style.display = show ? '' : 'none';
      });
      // ajustar vista: centrar primera ruta visible
      const firstVisible = document.querySelector('#rutas > article:not([style*="display: none"]) .btn-focus-route');
      if (firstVisible) firstVisible.click();
    }

    // Centrar mapa en la primera ruta al cargar
    window.addEventListener('load', () => {
      const firstId = Object.keys(ROUTES)[0];
      const firstPoly = routeLayers[firstId];
      if (firstPoly) map.fitBounds(firstPoly.getBounds(), { padding: [30,30] });
    });

  </script>
</body>
</html>
