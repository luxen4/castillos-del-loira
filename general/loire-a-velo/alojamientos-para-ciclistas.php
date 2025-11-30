<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Alojamientos para ciclistas — Valle del Loira</title>
  <meta name="description" content="Alojamientos recomendados para ciclistas en el Valle del Loira: hoteles, B&B y gîtes con parking bici, reparación, e-charging y desayuno energético.">
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-sA+4fJtXvycKqv5vGkO6Gk9qfI41q6p2bT9f+3RtkWQ=" crossorigin=""/>
  <style>
    #map { height: 420px; border-radius: .5rem; }
    .card-hover:hover { transform: translateY(-6px); box-shadow: 0 8px 24px rgba(0,0,0,0.08); }
    .chip { font-size: 12px; }
    /* keep layout fixed and scrollable central column on large screens */
    @media(min-width:1024px){
      main { min-height: calc(100vh - 6rem); }
      .center-scroll { max-height: calc(100vh - 14rem); overflow-y: auto; padding-right: .25rem; }
    }
  </style>

  <!-- JSON-LD de ejemplo (mejorar con datos reales) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TouristDestination",
    "name": "Valle del Loira",
    "description": "Alojamientos recomendados para ciclistas en el Valle del Loira."
  }
  </script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-4 shadow">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-10 h-10 bg-white/20 rounded flex items-center justify-center font-bold">Loire</div>
        <div>
          <h1 class="text-lg font-bold">Alojamientos para ciclistas — Valle del Loira</h1>
          <p class="text-xs text-emerald-100">Hoteles, B&B y gîtes con servicios para bicis</p>
        </div>
      </div>

      <nav class="hidden md:flex gap-6">
        <a href="#listado" class="hover:underline">Listado</a>
        <a href="#mapa" class="hover:underline">Mapa</a>
        <a href="#consejos" class="hover:underline">Consejos</a>
      </nav>

      <!-- botón mobile -->
      <button id="menuBtn" class="md:hidden p-2" aria-label="abrir menú">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"/>
        </svg>
      </button>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 lg:grid-cols-12 gap-6">

    <!-- ASIDE IZQUIERDO (filtros / anclas) -->
    <aside class="hidden lg:block lg:col-span-3 space-y-6 sticky top-20 self-start">
      <div class="bg-white p-4 rounded-lg shadow">
        <h4 class="font-semibold text-emerald-700">Buscar alojamientos</h4>
        <input id="searchInput" type="search" placeholder="Buscar por nombre, ciudad..." class="mt-3 p-2 w-full border rounded" />
        <div class="mt-3">
          <h5 class="text-sm font-medium">Filtrar por servicios</h5>
          <div class="mt-2 grid grid-cols-1 gap-2 text-sm">
            <label class="inline-flex items-center gap-2"><input type="checkbox" class="filter-checkbox" value="parking"> Parking bici seguro</label>
            <label class="inline-flex items-center gap-2"><input type="checkbox" class="filter-checkbox" value="desayuno"> Desayuno energético</label>
            <label class="inline-flex items-center gap-2"><input type="checkbox" class="filter-checkbox" value="taller"> Taller / Kit</label>
            <label class="inline-flex items-center gap-2"><input type="checkbox" class="filter-checkbox" value="echarge"> E-charging (e-bikes)</label>
            <label class="inline-flex items-center gap-2"><input type="checkbox" class="filter-checkbox" value="close_to_route"> Cercano a rutas</label>
          </div>
        </div>
        <div class="mt-4 flex gap-2">
          <button id="clearFilters" class="px-3 py-2 border rounded text-sm">Limpiar</button>
          <button id="downloadCSV" class="px-3 py-2 bg-emerald-600 text-white rounded text-sm ml-auto">Descargar CSV</button>
        </div>
      </div>

      <div class="bg-white p-4 rounded-lg shadow text-center">
        <h5 class="font-semibold">Publicidad</h5>
        <div class="mt-3 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">Espacio 300×250</div>
      </div>

      <div class="bg-white p-4 rounded-lg shadow">
        <h5 class="font-semibold">Anclas</h5>
        <nav class="mt-2 text-sm space-y-2">
          <a href="#listado" class="text-emerald-700 hover:underline block">Listado</a>
          <a href="#mapa" class="text-emerald-700 hover:underline block">Mapa</a>
          <a href="#consejos" class="text-emerald-700 hover:underline block">Consejos prácticos</a>
        </nav>
      </div>
    </aside>

    <!-- CONTENIDO CENTRAL -->
    <section id="listado" class="lg:col-span-6">
      <article class="bg-white rounded-xl shadow overflow-hidden mb-6">
        <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?auto=format&fit=crop&w=1400&q=60" alt="Ciclistas en alojamiento" class="w-full h-44 object-cover">
        <div class="p-6">
          <h2 class="text-2xl font-semibold">Alojamientos recomendados para ciclistas</h2>
          <p class="mt-2 text-gray-700">Encuentra hospedajes con parking para bicicletas, taller básico, cargador para e-bikes y desayuno pensado para rutas. Filtra por servicios y abre la ficha para reservar.</p>
        </div>
      </article>

      <!-- Espacio publicitario en contenido -->
      <div class="bg-white rounded-lg p-4 mb-4 shadow text-center hidden md:block">
        <small class="text-xs text-gray-400">Publicidad</small>
        <div class="mt-2 h-20 bg-gray-100 rounded flex items-center justify-center">Leaderboard / Banner</div>
      </div>

      <!-- Listado con scroll en pantallas grandes -->
      <div class="space-y-4 center-scroll p-1" id="cardsContainer">
        <!-- Las tarjetas se generan desde JS a partir de la variable ACCOMMODATIONS -->
      </div>

      <!-- Mapa -->
      <section id="mapa" class="mt-6 bg-white p-4 rounded-xl shadow">
        <h3 class="text-xl font-semibold">Mapa: ubicaciones</h3>
        <p class="text-sm text-gray-600 mt-1">Haz clic en un marcador para ver la ficha o en "Ver en mapa" desde la tarjeta.</p>
        <div id="map" class="mt-3"></div>
      </section>

      <!-- Consejos -->
      <section id="consejos" class="mt-6 bg-white p-4 rounded-xl shadow">
        <h3 class="text-lg font-semibold">Consejos para ciclistas</h3>
        <ul class="mt-2 list-disc pl-5 text-sm text-gray-700 space-y-1">
          <li>Reserva con antelación en temporada alta.</li>
          <li>Confirma disponibilidad de cargadores para e-bikes si los necesitas.</li>
          <li>Pregunta por servicios de transporte de equipaje entre etapas.</li>
        </ul>
      </section>
    </section>

    <!-- ASIDE DERECHO -->
    <aside class="lg:col-span-3 space-y-6 sticky top-20 self-start">
      <div class="bg-white p-4 rounded-lg shadow">
        <h4 class="font-semibold">Patrocinadores</h4>
        <div class="mt-3 grid grid-cols-2 gap-2">
          <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
          <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
        </div>
      </div>

      <div class="bg-white p-4 rounded-lg shadow text-center">
        <h5 class="font-semibold">Publicidad</h5>
        <div class="mt-3 h-36 bg-gray-100 rounded flex items-center justify-center">Espacio 300×250</div>
      </div>

      <div class="bg-white p-4 rounded-lg shadow">
        <h5 class="font-semibold">Servicios útiles</h5>
        <ul class="mt-2 text-sm text-gray-700 space-y-1">
          <li>Alquiler de bicicletas eléctricas</li>
          <li>Talleres móviles en temporada</li>
          <li>Transporte de equipajes entre etapas</li>
        </ul>
        <a href="#contacto" class="mt-3 inline-block px-3 py-2 bg-emerald-600 text-white rounded text-sm">Contacto servicios</a>
      </div>
    </aside>

  </main>

  <!-- Footer -->
  <footer class="mt-8 border-t pt-6 pb-12 text-sm text-gray-600">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <div>
        <p>© 2025 Alojamientos Ciclistas — Valle del Loira</p>
        <p class="mt-1">Web creada por <a href="mailto:superlaya50@gmail.com" class="underline text-emerald-700">Adrián Laya García</a></p>
      </div>
      <div class="flex items-center gap-4">
        <a href="#" class="underline">Aviso legal</a>
        <a href="#" class="underline">Política de privacidad</a>
        <a href="#" class="underline">Cookies</a>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS: Leaflet + generación dinámica -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-3g6k8t2gqK3Nqj2qf9m6G4pGZ2f3p8b7mQssm+q3G3U=" crossorigin=""></script>

  <script>
    // --- Datos de ejemplo (puedes reemplazar o cargar desde CSV/PHP) ---
    const ACCOMMODATIONS = [
      {
        id: 'gite-chambord',
        name: 'Gîte Chambord Bike Friendly',
        city: 'Chambord',
        address: 'Route de Chambord, 41250 Chambord',
        phone: '+33 2 47 50 00 00',
        web: 'https://example.com/gite-chambord',
        price_from: '€70',
        coords: [47.6165, 1.5164],
        services: ['parking','desayuno','close_to_route'],
        desc: 'Gîte acogedor con parking seguro para bicis y desayuno energético.'
      },
      {
        id: 'hotel-amboise',
        name: 'Hotel Amboise Cyclist',
        city: 'Amboise',
        address: 'Place du Château, 37400 Amboise',
        phone: '+33 2 47 50 12 34',
        web: 'https://example.com/hotel-amboise',
        price_from: '€95',
        coords: [47.4100, 0.9830],
        services: ['parking','desayuno','taller','echarge','close_to_route'],
        desc: 'Hotel con bici-garage, punto de carga para e-bikes y taller básico.'
      },
      {
        id: 'bb-saumur',
        name: 'B&B Saumur Bike Stop',
        city: 'Saumur',
        address: 'Rue des Vignes, 49400 Saumur',
        phone: '+33 2 41 53 11 22',
        web: 'https://example.com/bb-saumur',
        price_from: '€65',
        coords: [47.2591, 0.0891],
        services: ['parking','desayuno'],
        desc: 'Bed & breakfast familiar, ideal para ciclistas en travesía.'
      },
      {
        id: 'camping-tour',
        name: 'Camping Tours Vélo',
        city: 'Tours',
        address: 'Chemin des Rives, 37000 Tours',
        phone: '+33 2 47 70 00 00',
        web: 'https://example.com/camping-tours',
        price_from: '€20',
        coords: [47.3941, 0.6848],
        services: ['parking','taller'],
        desc: 'Camping con parcelas amplias y taller comunitario.'
      },
      {
        id: 'manoir-blois',
        name: 'Manoir Blois Cyclo',
        city: 'Blois',
        address: 'Rue Royale, 41000 Blois',
        phone: '+33 2 54 44 11 22',
        web: 'https://example.com/manoir-blois',
        price_from: '€110',
        coords: [47.5860, 1.3267],
        services: ['parking','desayuno','echarge'],
        desc: 'Manoir con comodidades premium y cargadores para e-bikes.'
      }
    ];

    // --- Render tarjetas ---
    const cardsContainer = document.getElementById('cardsContainer');

    function serviceHas(accom, svc) {
      return accom.services && accom.services.includes(svc);
    }

    function renderCards(list) {
      cardsContainer.innerHTML = '';
      if (!list.length) {
        cardsContainer.innerHTML = '<div class="bg-white p-6 rounded-lg shadow text-center text-gray-600">No se han encontrado alojamientos que coincidan con la búsqueda.</div>';
        return;
      }
      list.forEach(a => {
        const div = document.createElement('div');
        div.className = 'bg-white p-4 rounded-lg border card-hover';
        div.innerHTML = `
          <div class="flex items-start gap-4">
            <div class="w-20 h-20 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">
              <span class="font-medium">${a.city}</span>
            </div>
            <div class="flex-1">
              <div class="flex justify-between items-start gap-4">
                <div>
                  <h4 class="font-semibold">${a.name} <span class="ml-2 inline-block text-xs text-white bg-emerald-600 px-2 py-0.5 rounded chip">Ciclista-friendly</span></h4>
                  <p class="text-sm text-gray-600 mt-1">${a.address}</p>
                </div>
                <div class="text-right">
                  <div class="text-sm text-gray-700">${a.price_from}</div>
                  <a href="${a.web}" target="_blank" class="mt-2 inline-block text-sm px-3 py-1 bg-emerald-600 text-white rounded">Reservar</a>
                </div>
              </div>

              <p class="text-sm text-gray-700 mt-3">${a.desc}</p>

              <div class="mt-3 flex flex-wrap gap-2 text-xs">
                ${serviceHas(a,'parking') ? '<span class="px-2 py-1 bg-gray-100 rounded border">🔒 Parking bici</span>' : ''}
                ${serviceHas(a,'desayuno') ? '<span class="px-2 py-1 bg-gray-100 rounded border">🥐 Desayuno</span>' : ''}
                ${serviceHas(a,'taller') ? '<span class="px-2 py-1 bg-gray-100 rounded border">🔧 Taller</span>' : ''}
                ${serviceHas(a,'echarge') ? '<span class="px-2 py-1 bg-gray-100 rounded border">⚡ E-charging</span>' : ''}
                ${serviceHas(a,'close_to_route') ? '<span class="px-2 py-1 bg-gray-100 rounded border">🗺️ Cerca de ruta</span>' : ''}
              </div>

              <div class="mt-3 flex items-center justify-between">
                <div class="text-sm text-gray-600">Tel: ${a.phone}</div>
                <div class="flex gap-2">
                  <button class="px-2 py-1 text-sm border rounded btn-focus-map" data-id="${a.id}">Ver en mapa</button>
                  <a href="https://www.google.com/maps/search/?api=1&query=${encodeURIComponent(a.address)}" target="_blank" class="px-2 py-1 text-sm border rounded text-blue-600">Mapa</a>
                </div>
              </div>
            </div>
          </div>
        `;
        cardsContainer.appendChild(div);
      });
      attachMapButtons();
    }

    // inicial render
    renderCards(ACCOMMODATIONS);

    // --- Leaflet map init ---
    const map = L.map('map').setView([47.4, 0.8], 9);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    const markers = {};
    ACCOMMODATIONS.forEach(a => {
      const m = L.marker(a.coords).addTo(map).bindPopup(`<strong>${a.name}</strong><br>${a.city}<br>${a.price_from}<br><a href="${a.web}" target="_blank">Reservar</a>`);
      markers[a.id] = m;
    });
    // fit bounds
    const group = L.featureGroup(Object.values(markers));
    if (Object.values(markers).length) map.fitBounds(group.getBounds(), {padding:[30,30]});

    // Cuando click en "Ver en mapa" desde tarjeta
    function attachMapButtons(){
      document.querySelectorAll('.btn-focus-map').forEach(btn=>{
        btn.addEventListener('click', () => {
          const id = btn.dataset.id;
          const m = markers[id];
          if (!m) return;
          map.setView(m.getLatLng(), 14, {animate:true});
          m.openPopup();
          // en pantallas grandes, también hacer un pequeño highlight en la tarjeta (opcional)
        });
      });
    }

    // filtros y búsqueda
    document.getElementById('searchInput').addEventListener('input', applyFilters);
    document.getElementById('clearFilters').addEventListener('click', () => {
      document.getElementById('searchInput').value = '';
      document.querySelectorAll('.filter-checkbox').forEach(cb => cb.checked = false);
      applyFilters();
    });
    document.querySelectorAll('.filter-checkbox').forEach(cb => cb.addEventListener('change', applyFilters));

    function applyFilters(){
      const q = document.getElementById('searchInput').value.trim().toLowerCase();
      const checked = Array.from(document.querySelectorAll('.filter-checkbox:checked')).map(c=>c.value);
      const filtered = ACCOMMODATIONS.filter(a => {
        // search text
        if (q) {
          const hay = (a.name + ' ' + a.city + ' ' + a.address + ' ' + a.desc).toLowerCase();
          if (!hay.includes(q)) return false;
        }
        // services filter (AND logic)
        for (const f of checked) {
          if (!a.services || !a.services.includes(f)) return false;
        }
        return true;
      });
      renderCards(filtered);
    }

    // Descargar CSV del listado actual (filtrado)
    document.getElementById('downloadCSV').addEventListener('click', () => {
      // tomar las tarjetas actualmente renderizadas
      const rows = Array.from(document.querySelectorAll('#cardsContainer > div')).map(div => {
        const name = div.querySelector('h4')?.textContent.trim() || '';
        const addr = div.querySelector('p')?.textContent.trim() || '';
        const tel = div.querySelector('.text-sm.text-gray-600')?.textContent.trim() || '';
        const reservar = div.querySelector('a[target="_blank"]') ? div.querySelector('a[target="_blank"]').href : '';
        return [name, addr, tel, reservar];
      });
      if (!rows.length) return alert('No hay alojamientos para exportar.');
      const header = ['Nombre','Dirección','Teléfono','Enlace Reserva'];
      const csv = [header, ...rows].map(r => r.map(cell => `"${String(cell).replace(/"/g,'""')}"`).join(',')).join('\n');
      const blob = new Blob([csv], {type: 'text/csv;charset=utf-8;'});
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'alojamientos-ciclistas-loira.csv';
      document.body.appendChild(a);
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
    });

    // Enlaces "Ver en mapa" inicial
    attachMapButtons();

  </script>
</body>
</html>
