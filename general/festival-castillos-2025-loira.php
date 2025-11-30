<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Temporada Cultural — Castillos del Valle del Loira</title>
  <meta name="description" content="Conciertos, visitas nocturnas y actividades familiares en los principales castillos del Valle del Loira. Programa completo por château." />

  <!-- Open Graph (mejor compartir en WhatsApp/Redes) -->
  <meta property="og:title" content="Temporada Cultural — Castillos del Valle del Loira" />
  <meta property="og:description" content="Conciertos, visitas nocturnas y actividades familiares en los principales castillos del Valle del Loira. Consulta la programación por château." />
  <meta property="og:image" content="https://example.com/img/loire-season.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://tudominio.com/temporada-loira" />
  <meta name="twitter:card" content="summary_large_image" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    /* ajustes menores */
    .castle-hero { height: 220px; object-fit: cover; }
    .event-badge { font-size: 0.75rem; padding: .25rem .5rem; border-radius: .375rem; }
    #mapa { min-height: 260px; background: linear-gradient(180deg,#e6f6ff,#fff); display:flex;align-items:center;justify-content:center; color:#64748b; border-radius:.5rem; }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">

  <header class="bg-indigo-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center font-bold">Loire</div>
        <div>
          <h1 class="text-xl font-semibold">Temporada Cultural — Castillos del Loira</h1>
          <p class="text-sm opacity-90">Conciertos, visitas nocturnas y actividades familiares en cada château</p>
        </div>
      </div>

      <nav class="hidden md:flex gap-6 text-sm">
        <a href="#programa" class="hover:underline">Programación</a>
        <a href="#calendario" class="hover:underline">Calendario</a>
        <a href="#entradas" class="hover:underline">Entradas</a>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- Left aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4">
          <h3 class="font-semibold">Filtrar por tipo</h3>
          <p class="text-sm text-gray-600 mt-2">Muestra solo los eventos que te interesen</p>
          <div class="mt-3 flex flex-wrap gap-2">
            <button data-filter="all" class="px-3 py-1 bg-indigo-600 text-white rounded text-sm filter-btn">Todos</button>
            <button data-filter="concierto" class="px-3 py-1 border rounded text-sm filter-btn">Conciertos</button>
            <button data-filter="visita-nocturna" class="px-3 py-1 border rounded text-sm filter-btn">Visitas nocturnas</button>
            <button data-filter="familia" class="px-3 py-1 border rounded text-sm filter-btn">Familia</button>
            <button data-filter="teatro" class="px-3 py-1 border rounded text-sm filter-btn">Teatro</button>
          </div>
        </div>

        <div class="bg-white rounded-lg border">
            <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Suscríbete</h4>
          <p class="text-sm text-gray-600 mt-2">Recibe el boletín de la temporada cultural</p>
          <form id="subscribeForm" class="mt-3 flex gap-2" onsubmit="event.preventDefault(); alert('Gracias — suscripción simulada')">
            <input aria-label="Email" type="email" placeholder="tu@email.com" class="flex-1 px-3 py-2 rounded-md border" required />
            <button class="px-3 py-2 bg-indigo-700 text-white rounded">OK</button>
          </form>
        </div>

        <div class="bg-white rounded-lg border p-4">
          <h4 class="font-semibold">Contacto prensa</h4>
          <p class="text-sm text-gray-600 mt-2">prensa@temporadaloira.example</p>
        </div>
      </aside>

      <!-- Main -->
      <section class="lg:col-span-6 space-y-6">
        <article class="bg-white rounded-xl shadow overflow-hidden">
          <img src="https://images.unsplash.com/photo-1526779259212-1d10a2d2b7b1?auto=format&fit=crop&w=1600&q=60" alt="Castillos del Loira" class="w-full castle-hero" />
          <div class="p-6">
            <h2 class="text-2xl font-semibold">La temporada cultural arranca en el Valle del Loira</h2>
            <p class="mt-3 text-gray-700">Conciertos al atardecer, visitas nocturnas con iluminación especial y actividades para familias en cada château. Consulta la programación por castillo y añade los eventos que te interesen a tu calendario.</p>
            <div class="mt-4 flex gap-3">
              <a href="#calendario" class="px-4 py-2 bg-indigo-700 text-white rounded-md text-sm">Ver calendario</a>
              <a href="#programa" class="px-4 py-2 border rounded-md text-sm">Ver programación completa</a>
            </div>
          </div>
        </article>

        <!-- Programación por château -->
        <section id="programa" class="space-y-6">
          <!-- Château 1 -->
          <article class="bg-white p-4 rounded-lg border">
            <div class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1524873794631-9b66db81a9fa?auto=format&fit=crop&w=800&q=60" alt="Château de Chambord" class="w-28 h-20 object-cover rounded" />
              <div class="flex-1">
                <h3 class="text-lg font-semibold">Château de Chambord</h3>
                <p class="text-sm text-gray-600">Escenario principal con conciertos barrocos y visitas nocturnas en el patio real.</p>
              </div>
              <div class="text-right">
                <a href="#entradas" class="inline-block px-3 py-2 bg-amber-500 text-white rounded text-sm">Entradas</a>
              </div>
            </div>

            <div class="mt-4 grid gap-3">
              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="concierto"
                   data-title="Concierto barroco" data-start="2025-06-12T20:30:00" data-end="2025-06-12T22:00:00" data-place="Patio central, Chambord">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-800 flex items-center justify-center">🎻</div>
                </div>
                <div class="flex-1">
                  <div class="flex items-center justify-between">
                    <strong>Concierto barroco</strong>
                    <span class="text-sm text-gray-500">12 junio · 20:30</span>
                  </div>
                  <p class="text-sm text-gray-600 mt-1">Ensamble de música antigua entre fachadas iluminadas.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Más info</button>
                  </div>
                </div>
              </div>

              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="visita-nocturna"
                   data-title="Visita nocturna teatralizada" data-start="2025-06-14T22:00:00" data-end="2025-06-14T23:30:00" data-place="Recorridos iluminados">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-indigo-100 text-indigo-800 flex items-center justify-center">🌙</div>
                </div>
                <div class="flex-1">
                  <div class="flex items-center justify-between">
                    <strong>Visita nocturna teatralizada</strong>
                    <span class="text-sm text-gray-500">14 junio · 22:00</span>
                  </div>
                  <p class="text-sm text-gray-600 mt-1">Recorrido con actores y proyecciones en salas históricas.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Reservar</button>
                  </div>
                </div>
              </div>

              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="familia"
                   data-title="Taller familiar: creación de coronas florales" data-start="2025-06-15T11:00:00" data-end="2025-06-15T12:30:00" data-place="Jardines norte">
                <div class="flex-shrink-0">
                  <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center">🌸</div>
                </div>
                <div class="flex-1">
                  <div class="flex items-center justify-between">
                    <strong>Taller familiar</strong>
                    <span class="text-sm text-gray-500">15 junio · 11:00</span>
                  </div>
                  <p class="text-sm text-gray-600 mt-1">Actividad creativa para familias y niños (8+).</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Inscribirse</button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Château 2 -->
          <article class="bg-white p-4 rounded-lg border">
            <div class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1505765058813-8c8b1d6b9b4a?auto=format&fit=crop&w=800&q=60" alt="Château de Chenonceau" class="w-28 h-20 object-cover rounded" />
              <div class="flex-1">
                <h3 class="text-lg font-semibold">Château de Chenonceau</h3>
                <p class="text-sm text-gray-600">Programación musical y espectáculos en los puentes y jardines.</p>
              </div>
              <div class="text-right">
                <a href="#entradas" class="inline-block px-3 py-2 bg-amber-500 text-white rounded text-sm">Entradas</a>
              </div>
            </div>

            <div class="mt-4 grid gap-3">
              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="concierto"
                   data-title="Noches de cámara sobre el río" data-start="2025-06-20T21:00:00" data-end="2025-06-20T22:30:00" data-place="Puente del château">
                <div class="w-10 h-10 rounded-full bg-rose-100 text-rose-800 flex items-center justify-center">🎶</div>
                <div class="flex-1">
                  <div class="flex items-center justify-between"><strong>Noches de cámara</strong><span class="text-sm text-gray-500">20 junio · 21:00</span></div>
                  <p class="text-sm text-gray-600 mt-1">Concierto íntimo en el puente, aforo limitado.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Reservar</button>
                  </div>
                </div>
              </div>

              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="familia"
                   data-title="Caza del tesoro histórica (familias)" data-start="2025-06-21T10:30:00" data-end="2025-06-21T12:00:00" data-place="Jardines">
                <div class="w-10 h-10 rounded-full bg-yellow-100 text-yellow-800 flex items-center justify-center">🔎</div>
                <div class="flex-1">
                  <div class="flex items-center justify-between"><strong>Caza del tesoro</strong><span class="text-sm text-gray-500">21 junio · 10:30</span></div>
                  <p class="text-sm text-gray-600 mt-1">Actividad para padres e hijos para descubrir secretos del château.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Inscribirse</button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

          <!-- Château 3 -->
          <article class="bg-white p-4 rounded-lg border">
            <div class="flex gap-4">
              <img src="https://images.unsplash.com/photo-1504198458649-3128b932f49b?auto=format&fit=crop&w=800&q=60" alt="Château d'Amboise" class="w-28 h-20 object-cover rounded" />
              <div class="flex-1">
                <h3 class="text-lg font-semibold">Château d'Amboise</h3>
                <p class="text-sm text-gray-600">Música en terrazas con vistas al Loira y visitas guiadas temáticas.</p>
              </div>
              <div class="text-right">
                <a href="#entradas" class="inline-block px-3 py-2 bg-amber-500 text-white rounded text-sm">Entradas</a>
              </div>
            </div>

            <div class="mt-4 grid gap-3">
              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="teatro"
                   data-title="Teatro histórico en la terraza" data-start="2025-06-18T19:30:00" data-end="2025-06-18T21:00:00" data-place="Terraza oeste">
                <div class="w-10 h-10 rounded-full bg-pink-100 text-pink-800 flex items-center justify-center">🎭</div>
                <div class="flex-1">
                  <div class="flex items-center justify-between"><strong>Teatro histórico</strong><span class="text-sm text-gray-500">18 junio · 19:30</span></div>
                  <p class="text-sm text-gray-600 mt-1">Representación al aire libre con actores locales.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Reservar</button>
                  </div>
                </div>
              </div>

              <div class="flex items-start gap-3 p-3 border rounded event-item" data-type="familia"
                   data-title="Picnic teatral para familias" data-start="2025-06-19T12:30:00" data-end="2025-06-19T14:00:00" data-place="Campo sur">
                <div class="w-10 h-10 rounded-full bg-emerald-100 text-emerald-800 flex items-center justify-center">🧺</div>
                <div class="flex-1">
                  <div class="flex items-center justify-between"><strong>Picnic teatral</strong><span class="text-sm text-gray-500">19 junio · 12:30</span></div>
                  <p class="text-sm text-gray-600 mt-1">Actividad gastronómica y teatral para familias.</p>
                  <div class="mt-2 flex gap-2">
                    <button class="px-2 py-1 bg-indigo-600 text-white rounded text-sm add-ics-btn">Añadir a calendario</button>
                    <button class="px-2 py-1 border rounded text-sm">Inscribirse</button>
                  </div>
                </div>
              </div>
            </div>
          </article>

          <!-- Más châteaux: puedes duplicar la estructura para añadir más -->
        </section>
      </section>

      <!-- Right aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div>

        <div id="mapa" class="bg-white p-4 rounded-lg border text-center">
          <strong>Mapa de los castillos</strong>
          <p class="text-sm text-gray-500 mt-2">Mapa interactivo (integración opcional con Leaflet/Mapbox).</p>
        </div>

               

        <div class="bg-white rounded-lg border">
          <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Redes</h4>
          <p class="text-sm text-gray-600 mt-2">Comparte la temporada en tus redes</p>
          <div class="mt-3 flex gap-2">
            <button onclick="shareUrl()" class="px-3 py-2 bg-blue-600 text-white rounded text-sm">Compartir</button>
            <a href="#" class="px-3 py-2 border rounded text-sm">Instagram</a>
          </div>
        </div>
      </aside>
    </div>

    <!-- Calendario/Entradas -->
    <section id="calendario" class="mt-8 bg-white p-6 rounded-lg border">
      <h3 class="text-xl font-semibold">Calendario completo</h3>
      <p class="text-sm text-gray-600 mt-2">Descarga los eventos que te interesen o reserva tu entrada.</p>
      <div class="mt-4 grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Recuento rápido / llamadas a la acción -->
        <div class="p-4 border rounded">
          <strong>Conciertos</strong>
          <p class="text-sm text-gray-600 mt-2">12 eventos</p>
        </div>
        <div class="p-4 border rounded">
          <strong>Visitas nocturnas</strong>
          <p class="text-sm text-gray-600 mt-2">8 eventos</p>
        </div>
        <div class="p-4 border rounded">
          <strong>Actividades familiares</strong>
          <p class="text-sm text-gray-600 mt-2">10 actividades</p>
        </div>
        <div class="p-4 border rounded">
          <strong>Reservas</strong>
          <p class="text-sm text-gray-600 mt-2">Compra tus entradas online</p>
          <a href="#entradas" class="inline-block mt-2 px-3 py-2 bg-amber-500 text-white rounded text-sm">Entradas</a>
        </div>
      </div>
    </section>

     <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>


    <footer id="entradas" class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
          <p>© Temporada Cultural — Castillos del Loira</p>
          <p class="mt-1">Organiza: Oficina de Turismo del Valle del Loira</p>
        </div>
        <div class="flex items-center gap-4">
          <a href="#" class="underline">Cómo llegar</a>
          <a href="#" class="underline">Aviso legal</a>
        </div>
      </div>
    </footer>
  </main>

  <!-- Script: filtros, ICS download y compartir -->
  <script>
    // Filtrado de eventos por tipo
    document.querySelectorAll('.filter-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const kind = btn.dataset.filter;
        document.querySelectorAll('.event-item').forEach(item => {
          if (kind === 'all' || item.dataset.type === kind) {
            item.style.display = '';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });

    // Generador ICS simple y descarga
    function formatDateToICS(dateStr) {
      // dateStr en formato ISO: "2025-06-12T20:30:00"
      const d = new Date(dateStr);
      // UTC format: YYYYMMDDTHHMMSSZ
      const pad = n => String(n).padStart(2, '0');
      return d.getUTCFullYear() +
             pad(d.getUTCMonth()+1) +
             pad(d.getUTCDate()) + 'T' +
             pad(d.getUTCHours()) +
             pad(d.getUTCMinutes()) +
             pad(d.getUTCSeconds()) + 'Z';
    }

    function createIcs(title, startISO, endISO, description, location) {
      const uid = 'loire-' + Date.now() + '-' + Math.floor(Math.random()*10000) + '@temporadaloira.local';
      const dtstamp = formatDateToICS(new Date().toISOString());
      const dtstart = formatDateToICS(startISO);
      const dtend = formatDateToICS(endISO);
      const icsLines = [
        'BEGIN:VCALENDAR',
        'VERSION:2.0',
        'PRODID:-//TemporadaLoira//ES',
        'CALSCALE:GREGORIAN',
        'BEGIN:VEVENT',
        'UID:' + uid,
        'DTSTAMP:' + dtstamp,
        'DTSTART:' + dtstart,
        'DTEND:' + dtend,
        'SUMMARY:' + escapeICSText(title),
        'DESCRIPTION:' + escapeICSText(description || ''),
        'LOCATION:' + escapeICSText(location || ''),
        'END:VEVENT',
        'END:VCALENDAR'
      ];
      return icsLines.join('\r\n');
    }

    function escapeICSText(s) {
      return (s || '').replace(/\n/g,'\\n').replace(/,/g,'\\,').replace(/;/g,'\\;');
    }

    function downloadIcs(content, filename) {
      const blob = new Blob([content], { type: 'text/calendar;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = filename;
      document.body.appendChild(a);
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
    }

    document.querySelectorAll('.add-ics-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const item = btn.closest('.event-item');
        const title = item.dataset.title;
        const start = item.dataset.start;
        const end = item.dataset.end || (new Date(start).toISOString());
        const place = item.dataset.place || '';
        const description = item.querySelector('p')?.innerText || '';
        const ics = createIcs(title, start, end, description, place);
        const filename = title.toLowerCase().replace(/[^a-z0-9]+/gi,'-').replace(/^-|-$/g,'') || 'evento';
        downloadIcs(ics, filename + '.ics');
      });
    });

    // Compartir (intenta usar Web Share API o fallback copy)
    function shareUrl() {
      const shareData = {
        title: 'Temporada Cultural — Castillos del Loira',
        text: 'Conciertos, visitas nocturnas y actividades familiares en los castillos del Valle del Loira.',
        url: location.href
      };
      if (navigator.share) {
        navigator.share(shareData).catch(() => {});
      } else {
        // fallback: copiar enlace
        navigator.clipboard?.writeText(location.href).then(() => {
          alert('Enlace copiado al portapapeles (pega en WhatsApp/Redes).');
        }, () => {
          prompt('Copia la URL:', location.href);
        });
      }
    }

    // Pequeño ajuste: al cargar, mostrar todos
    window.addEventListener('load', () => {
      document.querySelectorAll('.event-item').forEach(e => e.style.display = '');
    });
  </script>
</body>
</html>
