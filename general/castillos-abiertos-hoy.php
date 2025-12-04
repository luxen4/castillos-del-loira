<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Castillos abiertos hoy — Valle del Loira</title>
  <meta name="description" content="Consulta rápida: qué châteaux del Valle del Loira están abiertos hoy y ahora." />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .chip { font-size: .75rem; padding: .25rem .5rem; border-radius: .375rem; }
    .open-now { background:#16a34a; color:white; }
    .open-today { background:#059669; color:white; }
    .closed { background:#ef4444; color:white; }
    .ad-box { min-height: 120px; display:flex; align-items:center; justify-content:center; background: #f3f4f6; border-radius: .5rem; }
  </style>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
  <header class="bg-sky-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <div>
        <h1 class="text-xl font-semibold">Castillos abiertos hoy — Valle del Loira</h1>
        <p class="text-sm opacity-90">Conciertos, visitas, jardines y horarios actualizados (demo)</p>
      </div>
      <nav class="hidden md:flex gap-4 text-sm">
        <button id="btn-all" class="px-3 py-1 bg-white/10 rounded">Mostrar todos</button>
        <button id="btn-open-today" class="px-3 py-1 bg-white/10 rounded">Abiertos hoy</button>
        <button id="btn-open-now" class="px-3 py-1 bg-white/10 rounded">Abiertos ahora</button>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- Left aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="font-semibold">Filtrar</h3>
          <p class="text-sm text-gray-600 mt-2">Filtra los castillos según estado o tipo</p>
          <div class="mt-3 flex flex-wrap gap-2">
            <button class="px-3 py-1 border rounded text-sm filter-type" data-type="all">Todos</button>
            <button class="px-3 py-1 border rounded text-sm filter-type" data-type="chateau">Châteaux</button>
            <button class="px-3 py-1 border rounded text-sm filter-type" data-type="patrimonio">Patrimonio</button>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg border ad-box">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <div class="mt-2 text-sm font-medium">Espacio 300×250</div>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Consejos rápidos</h4>
          <ul class="mt-2 text-sm text-gray-700 space-y-1">
            <li>Consulta la web oficial del château antes de ir (horarios pueden cambiar).</li>
            <li>Si visitas por la tarde, verifica horario de cierre.</li>
            <li>Reserva entradas para visitas guiadas o conciertos.</li>
          </ul>
        </div>
      </aside>



      <!-- Main content -->
  <section class="lg:col-span-6 space-y-6">
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
      
        <article class="bg-white p-4 rounded-xl shadow">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-xl font-semibold">Castillos abiertos hoy</h2>
              <p class="text-sm text-gray-600 mt-1">La lista se calcula para la zona horaria <strong>Europe/Madrid</strong>.</p>
            </div>
            <div class="text-right text-sm text-gray-600">
              <div>Hoy: <span id="today-label">—</span></div>
              <div>Hora (Madrid): <span id="time-label">—</span></div>
            </div>
          </div>
        </article>

        <!-- Lista de castillos -->
        <section id="castles-list" class="space-y-4">
          <!-- Cada ficha se genera por JS a partir de DATA_CASTLES -->
        </section>

        <div class="bg-white p-4 rounded-lg border flex items-center justify-between">
          <div>
            <strong id="count-open-today">0</strong> castillos abiertos hoy ·
            <strong id="count-open-now">0</strong> abiertos ahora
          </div>
          <div class="flex gap-2">
            <button id="print-btn" class="px-3 py-1 border rounded text-sm">Imprimir lista</button>
            <button id="export-ics" class="px-3 py-1 bg-sky-700 text-white rounded text-sm">Exportar eventos (ICS)</button>
          </div>
        </div>
      </section>

      <!-- Right aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg border ad-box">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <div class="mt-2 text-sm font-medium">Espacio 300×250</div>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Mapa</h4>
          <p class="text-sm text-gray-600 mt-2">Integración opcional con Leaflet/Mapbox para mostrar châteaux.</p>
          <button id="open-map" class="mt-3 px-3 py-2 border rounded text-sm">Abrir mapa (demo)</button>
        </div>
      </aside>
    </div>
  </main>

  <footer class="py-6 text-sm text-center text-gray-600">
    © Información de ejemplo — Comprueba horarios oficiales antes de visitar
  </footer>

  <script>
    // --- DATOS de ejemplo: sustituye por horarios reales -->
    // Días: 0=Dom,1=Lun,...6=Sáb
    const DATA_CASTLES = [
      {
        id: 'chambord',
        name: 'Château de Chambord',
        type: 'chateau',
        opening: { // apertura diaria: times in local (Europe/Madrid) 24h HH:MM
          0: {open:'09:00', close:'17:30'},
          1: {open:'09:00', close:'18:00'},
          2: {open:'09:00', close:'18:00'},
          3: {open:'09:00', close:'18:00'},
          4: {open:'09:00', close:'18:00'},
          5: {open:'09:00', close:'18:30'},
          6: {open:'09:00', close:'18:30'}
        },
        note: 'Visitas guiadas y conciertos ocasionales.'
      },
      {
        id: 'chenonceau',
        name: 'Château de Chenonceau',
        type: 'chateau',
        opening: {
          0: {open:'09:30', close:'17:00'},
          1: {open:'09:30', close:'18:00'},
          2: {open:'09:30', close:'18:00'},
          3: {open:'09:30', close:'18:00'},
          4: {open:'09:30', close:'18:00'},
          5: {open:'09:30', close:'18:00'},
          6: {open:'09:30', close:'18:00'}
        },
        note: 'Atención: horarios de jardines y dependencias pueden variar.'
      },
      {
        id: 'amboise',
        name: 'Château d\'Amboise',
        type: 'chateau',
        opening: {
          0: {open:'10:00', close:'17:00'},
          1: {open:'10:00', close:'18:00'},
          2: {open:'10:00', close:'18:00'},
          3: {open:'10:00', close:'18:00'},
          4: {open:'10:00', close:'18:00'},
          5: {open:'10:00', close:'18:30'},
          6: {open:'10:00', close:'18:30'}
        },
        note: ''
      },
      {
        id: 'blois',
        name: 'Château de Blois',
        type: 'chateau',
        opening: {
          0: null, // cerrado domingos en este ejemplo
          1: {open:'09:30', close:'18:00'},
          2: {open:'09:30', close:'18:00'},
          3: {open:'09:30', close:'18:00'},
          4: {open:'09:30', close:'18:00'},
          5: {open:'09:30', close:'18:00'},
          6: {open:'09:30', close:'18:00'}
        },
        note: 'Domingos cerrado (ejemplo).'
      },
      {
        id: 'saumur',
        name: 'Château de Saumur',
        type: 'chateau',
        opening: {
          0: {open:'10:00', close:'17:30'},
          1: {open:'10:00', close:'17:30'},
          2: {open:'10:00', close:'17:30'},
          3: {open:'10:00', close:'17:30'},
          4: {open:'10:00', close:'17:30'},
          5: {open:'10:00', close:'18:00'},
          6: {open:'10:00', close:'18:00'}
        },
        note: 'Museo y terrazas junto al río.'
      }
    ];

    // --- Utilidades para hora en Europe/Madrid ---
    function getMadridNow() {
      // create Date representing current time in Europe/Madrid
      const madridStr = new Date().toLocaleString('en-GB', { timeZone: 'Europe/Madrid' });
      return new Date(madridStr);
    }

    function pad2(n){ return String(n).padStart(2,'0'); }

    function timeStrToMinutes(t) { // "HH:MM" -> minutes since 00:00
      const [hh,mm] = t.split(':').map(Number);
      return hh*60 + mm;
    }

    // Comprueba si hay apertura para el día dado
    function isOpenOnDay(castle, dayIndex) {
      const slot = castle.opening[dayIndex];
      return slot && slot.open && slot.close;
    }

    // Comprueba si está abierto ahora (Madrid)
    function isOpenNow(castle, madridDate) {
      const day = madridDate.getDay(); // 0-6
      const slot = castle.opening[day];
      if (!slot) return false;
      const nowMinutes = madridDate.getHours()*60 + madridDate.getMinutes();
      const openMin = timeStrToMinutes(slot.open);
      const closeMin = timeStrToMinutes(slot.close);
      return nowMinutes >= openMin && nowMinutes < closeMin;
    }

    // Formatea horario para mostrar
    function formatSlot(slot) {
      if (!slot) return 'Cerrado';
      return `${slot.open} — ${slot.close}`;
    }

    // Render de la lista
    function renderList(filter='all') {
      const list = document.getElementById('castles-list');
      list.innerHTML = '';
      const madridNow = getMadridNow();
      document.getElementById('today-label').textContent = madridNow.toLocaleDateString('es-ES', { weekday:'long', day:'numeric', month:'short', year:'numeric' });
      document.getElementById('time-label').textContent = madridNow.toLocaleTimeString('es-ES', { hour:'2-digit', minute:'2-digit' });

      let countOpenToday = 0;
      let countOpenNow = 0;

      DATA_CASTLES.forEach(c => {
        // filtro por tipo (all o chateau/patrimonio)
        if (filter !== 'all' && c.type !== filter) return;

        const dayIndex = madridNow.getDay();
        const openToday = isOpenOnDay(c, dayIndex);
        const openNow = isOpenNow(c, madridNow);
        if (openToday) countOpenToday++;
        if (openNow) countOpenNow++;

        // tarjeta
        const card = document.createElement('article');
        card.className = 'bg-white p-4 rounded-lg border';
        card.innerHTML = `
          <div class="flex items-start justify-between gap-4">
            <div>
              <h3 class="text-lg font-semibold">${c.name}</h3>
              <p class="text-sm text-gray-600 mt-1">${c.note || 'Horario y visitas'}</p>
              <div class="mt-2 flex gap-2 items-center">
                ${ openNow ? `<span class="chip open-now">Abierto ahora</span>` : (openToday ? `<span class="chip open-today">Abierto hoy</span>` : `<span class="chip closed">Cerrado hoy</span>`) }
                <span class="text-sm text-gray-500">Horario: ${formatSlot(c.opening[dayIndex])}</span>
              </div>
            </div>
            <div class="text-right">
              <button class="px-3 py-1 border rounded text-sm mr-2 view-schedule" data-id="${c.id}">Ver semana</button>
              <a href="#entradas" class="inline-block px-3 py-1 bg-amber-500 text-white rounded text-sm">Entradas</a>
            </div>
          </div>
          <div class="mt-3 hidden week-schedule" aria-hidden="true">
            <table class="w-full text-sm">
              <thead><tr class="text-left text-gray-600"><th>Día</th><th>Horario</th></tr></thead>
              <tbody>
                ${[0,1,2,3,4,5,6].map(d => {
                  const s = c.opening[d];
                  const dayName = ['Dom','Lun','Mar','Mié','Jue','Vie','Sáb'][d];
                  return `<tr><td class="py-1">${dayName}</td><td class="py-1">${s ? (s.open + ' — ' + s.close) : 'Cerrado'}</td></tr>`;
                }).join('')}
              </tbody>
            </table>
          </div>
        `;
        list.appendChild(card);
      });

      document.getElementById('count-open-today').textContent = countOpenToday;
      document.getElementById('count-open-now').textContent = countOpenNow;

      // Añadir listeners ver-semana
      document.querySelectorAll('.view-schedule').forEach(btn => {
        btn.addEventListener('click', () => {
          const parent = btn.closest('article');
          const week = parent.querySelector('.week-schedule');
          const shown = week.getAttribute('aria-hidden') === 'false';
          week.setAttribute('aria-hidden', shown ? 'true' : 'false');
          week.style.display = shown ? 'none' : 'block';
        });
      });
    }

    // inicial render
    renderList('all');

    // botones del header
    document.getElementById('btn-all').addEventListener('click', () => renderList('all'));
    document.getElementById('btn-open-today').addEventListener('click', () => {
      // filtrar con función: mostramos todos pero ocultamos cerrados hoy
      const madridNow = getMadridNow();
      const dayIndex = madridNow.getDay();
      document.querySelectorAll('#castles-list > article').forEach((art, idx) => {
        const castle = DATA_CASTLES[idx];
        const openToday = isOpenOnDay(castle, dayIndex);
        art.style.display = openToday ? '' : 'none';
      });
    });
    document.getElementById('btn-open-now').addEventListener('click', () => {
      const madridNow = getMadridNow();
      document.querySelectorAll('#castles-list > article').forEach((art, idx) => {
        const castle = DATA_CASTLES[idx];
        const openNow = isOpenNow(castle, madridNow);
        art.style.display = openNow ? '' : 'none';
      });
    });

    // filtro por tipo desde aside
    document.querySelectorAll('.filter-type').forEach(btn => {
      btn.addEventListener('click', () => {
        const type = btn.dataset.type;
        renderList(type);
      });
    });

    // imprimir
    document.getElementById('print-btn').addEventListener('click', () => window.print());

    // export ICS (simple): exporta eventos 'abiertos hoy' como recordatorios de apertura
    document.getElementById('export-ics').addEventListener('click', () => {
      const madridNow = getMadridNow();
      const dayIndex = madridNow.getDay();
      const events = DATA_CASTLES
        .map(c => {
          const slot = c.opening[dayIndex];
          if (!slot) return null;
          // crear evento de apertura (start = open time, end = close time)
          const dateStr = madridNow.toISOString().slice(0,10); // yyyy-mm-dd
          const startISO = dateStr + 'T' + slot.open + ':00';
          const endISO = dateStr + 'T' + slot.close + ':00';
          return {
            title: c.name + ' — Apertura',
            start: startISO,
            end: endISO,
            desc: c.note || ''
          };
        })
        .filter(Boolean);
      if (!events.length) return alert('No hay castillos abiertos hoy (según datos demo).');

      // generar ICS simple con varios VEVENT
      const lines = [
        'BEGIN:VCALENDAR',
        'VERSION:2.0',
        'PRODID:-//CastillosLoira//ES'
      ];
      events.forEach(ev => {
        const dtstamp = (new Date()).toISOString().replace(/[-:]/g,'').split('.')[0] + 'Z';
        const dtstart = new Date(new Date(ev.start).toLocaleString('en-GB', { timeZone:'Europe/Madrid' })).toISOString().replace(/[-:]/g,'').split('.')[0] + 'Z';
        const dtend = new Date(new Date(ev.end).toLocaleString('en-GB', { timeZone:'Europe/Madrid' })).toISOString().replace(/[-:]/g,'').split('.')[0] + 'Z';
        lines.push('BEGIN:VEVENT');
        lines.push('UID:' + ('evt' + Math.random().toString(36).slice(2,9)));
        lines.push('DTSTAMP:' + dtstamp);
        lines.push('DTSTART:' + dtstart);
        lines.push('DTEND:' + dtend);
        lines.push('SUMMARY:' + ev.title.replace(/,/g,'\\,'));
        lines.push('DESCRIPTION:' + (ev.desc || '').replace(/\n/g,'\\n').replace(/,/g,'\\,'));
        lines.push('END:VEVENT');
      });
      lines.push('END:VCALENDAR');
      const blob = new Blob([lines.join('\r\n')], { type: 'text/calendar;charset=utf-8' });
      const url = URL.createObjectURL(blob);
      const a = document.createElement('a');
      a.href = url;
      a.download = 'castillos-abiertos-hoy.ics';
      document.body.appendChild(a);
      a.click();
      a.remove();
      URL.revokeObjectURL(url);
    });

    // demo: open map (placeholder)
    document.getElementById('open-map').addEventListener('click', () => {
      alert('Aquí podrías abrir un mapa interactivo con Leaflet/Mapbox centrado en los castillos.');
    });
  </script>
</body>
</html>
