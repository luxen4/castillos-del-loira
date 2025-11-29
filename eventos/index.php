<?php 
$sitio_web = "https://alayag82.kesug.com/val-de-loire";

?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Agenda & Eventos del Valle del Loira — Festivales, vinos, cicloturismo</title>
  <meta name="description" content="Agenda del Valle del Loira: festivales, ferias de vino, eventos culturales y actividades. Buscador, exportación CSV, SEO avanzado y datos estructurados para mejorar indexación." />
  <link rel="canonical" href="https://tudominio.example/eventos-loire.html" />
  <meta name="robots" content="index,follow" />
  <meta name="author" content="Adrián Laya García" />
  <meta property="og:site_name" content="Val de Loire" />
  <meta property="og:title" content="Agenda & Eventos del Valle del Loira" />
  <meta property="og:description" content="Festivales, ferias de vino, rutas ciclistas y actividades en el Valle del Loira. Encuentra fechas, enlaces oficiales y reserva." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://tudominio.example/eventos-loire.html" />
  <meta property="og:image" content="https://tudominio.example/assets/og-eventos-loire.jpg" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:creator" content="@tu_twitter" />
  <meta name="theme-color" content="#0f766e" />

  <link rel="icon" href="<?= $sitio_web; ?>/assets/favicon.ico" sizes="any">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $sitio_web; ?>/assets/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $sitio_web; ?>/assets/logo.png">
  <link rel="apple-touch-icon" href="<?= $sitio_web; ?>/assets/logo.png">


  <!-- Tailwind CDN (prototipo) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="" crossorigin="anonymous"/>

  <style>
    /* Utility to hide native scrollbar in horizontal lists where desired */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    /* Tooltip arrow */
    .tooltip::after {
      content: "";
      position: absolute;
      bottom: -6px;
      left: 50%;
      transform: translateX(-50%);
      border-width: 6px;
      border-style: solid;
      border-color: #111  transparent transparent transparent;
      opacity: .95;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- Header -->
  <header class="bg-emerald-700 text-white sticky top-0 z-50 shadow">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
      <a href="/val-de-loire" class="flex items-center gap-3">
        <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain rounded" />
        <div>
          <h1 class="font-bold text-lg leading-tight">Val de Loire</h1>
          <p class="text-xs text-emerald-200">Agenda & Eventos</p>
        </div>
      </a>

      <div class="hidden md:flex items-center gap-4">
        <nav class="flex gap-4">
          <a href="/val-de-loire" class="hover:underline">Inicio</a>
          <a href="/val-de-loire/index.php#castillos-destacados" class="hover:underline">Castillos</a>
          <a href="/val-de-loire/general/alojamientos.php" class="hover:underline">Alojamientos</a>
        </nav>
        <a href="/val-de-loire/contacto.html" class="inline-flex items-center gap-2 bg-white text-emerald-700 px-3 py-1 rounded shadow-sm hover:shadow">Contacto <i class="fa-solid fa-envelope"></i></a>
      </div>

      <button id="btn-menu" class="md:hidden p-2 rounded bg-emerald-600" aria-label="Abrir menú">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

    <!-- mobile menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-emerald-700 px-6 pb-4">
      <nav class="flex flex-col gap-2">
        <a href="/val-de-loire" class="py-2">Inicio</a>
        <a href="/val-de-loire/index/castillos-val-de-loire.php" class="py-2">Castillos</a>
        <a href="/val-de-loire/alojamientos-val-de-loire.php" class="py-2">Alojamientos</a>
        <a href="/val-de-loire/contacto.php" class="py-2">Contacto</a>
      </nav>
    </div>
  </header>

  <main class="container mx-auto px-6 py-8">

    <!-- Intro + CTA -->
    <section class="mb-6 grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
      <div class="lg:col-span-2 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-bold text-emerald-700 mb-2">Agenda de eventos — Valle del Loira</h2>
        <p class="text-gray-600 mb-4">Encuentra festivales, ferias del vino, festivales culturales y rutas ciclistas. Añade eventos, guarda localmente y exporta para tu CMS o newsletter.</p>

        <!-- Search & filters -->
        <div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center">
          <label for="q" class="sr-only">Buscar eventos</label>
          <input id="q" type="search" placeholder="Buscar por nombre, lugar o tag" class="flex-1 p-3 border rounded" />
          <select id="filterRegion" class="p-3 border rounded w-48">
            <option value="">Todas las regiones</option>
            <option value="Indre-et-Loire">Indre-et-Loire</option>
            <option value="Loir-et-Cher">Loir-et-Cher</option>
            <option value="Indre">Indre</option>
          </select>
          <button id="btnClear" class="bg-emerald-700 text-white px-4 py-2 rounded">Limpiar</button>
        </div>
      </div>

      <!-- Sidebar with CTAs -->
      <aside class="hidden lg:block bg-white rounded-lg shadow p-4 space-y-4 sticky top-20">
        <div class="text-center">
          <h3 class="text-sm font-semibold text-emerald-700">¿Tienes un evento?</h3>
          <p class="text-xs text-gray-600">Añádelo y compártelo con nuestros visitantes.</p>
          <button id="scrollToForm" class="mt-3 bg-emerald-700 text-white px-3 py-2 rounded text-sm">Añadir evento</button>
        </div>

        <!-- Example affiliate / ads placeholder -->
        <div class="border border-gray-200 rounded overflow-hidden">
          <a href="https://getyourguide.tpo.lu/FPvBISCi" target="_blank" rel="nofollow" class="block">
            <img src="/val-de-loire/assets/banner-tours-valle-loira.jpg" alt="Tours Valle del Loira" class="w-full h-28 object-cover">
          </a>
        </div>

        <div class="text-xs text-gray-500 text-center">
          <small>Publicidad de afiliados (solo escritorio)</small>
        </div>
      </aside>
    </section>

    <!-- Events list -->
    <section aria-labelledby="list-title" class="mb-8">
      <h3 id="list-title" class="sr-only">Listado de eventos</h3>

      <div id="eventsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- JS inserts event cards here -->
      </div>

      <!-- Empty state -->
      <div id="emptyState" class="hidden bg-white p-6 rounded shadow text-center text-gray-600 mt-6">
        No hay eventos. Añade el primero con el formulario.
      </div>

    </section>

    <!-- Form to add event -->
    <section id="formSection" class="bg-white rounded-lg shadow p-6">
      <h3 class="text-xl font-semibold text-emerald-700 mb-3">Añadir / editar evento</h3>

      <form id="eventForm" class="grid grid-cols-1 md:grid-cols-2 gap-4" novalidate>
        <div>
          <label class="block text-sm font-medium text-gray-700">Título</label>
          <input id="title" type="text" required class="mt-1 p-3 w-full border rounded" placeholder="Festival de Vinos de Saumur" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Fecha (inicio)</label>
          <input id="date" type="date" class="mt-1 p-3 w-full border rounded" />
        </div>

        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700">Descripción breve</label>
          <textarea id="summary" maxlength="400" rows="3" class="mt-1 p-3 w-full border rounded" placeholder="Breve descripción para mostrar en la tarjeta"></textarea>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Lugar / Localidad</label>
          <input id="location" type="text" class="mt-1 p-3 w-full border rounded" placeholder="Saumur" />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Región (para filtros)</label>
          <select id="region" class="mt-1 p-3 w-full border rounded">
            <option value="">Selecciona una región</option>
            <option>Indre-et-Loire</option>
            <option>Loir-et-Cher</option>
            <option>Indre</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Enlace oficial (URL)</label>
          <input id="url" type="url" class="mt-1 p-3 w-full border rounded" placeholder="https://..." />
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Icono (FontAwesome nombre)</label>
          <input id="icon" type="text" class="mt-1 p-3 w-full border rounded" placeholder="fa-solid fa-wine-glass" />
          <p class="text-xs text-gray-500 mt-1">Ejemplo: <code>fa-solid fa-wine-glass</code> o <code>fa-solid fa-music</code></p>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700">Imagen (URL)</label>
          <input id="image" type="url" class="mt-1 p-3 w-full border rounded" placeholder="https://...jpg" />
        </div>

        <div class="md:col-span-2 flex gap-3 items-center">
          <button id="btnSave" class="bg-emerald-700 text-white px-4 py-2 rounded">Guardar evento</button>
          <button id="btnClearForm" type="button" class="px-4 py-2 border rounded">Limpiar</button>
          <div class="ml-auto flex gap-2">
            <button id="btnExportCSV" type="button" class="px-3 py-2 border rounded text-sm">Exportar CSV</button>
            <button id="btnDownloadSitemap" type="button" class="px-3 py-2 border rounded text-sm">Descargar sitemap.xml</button>
          </div>
        </div>
      </form>
    </section>

  </main>

<!-- Footer -->
<footer class="mt-10 bg-emerald-700 text-emerald-100 pt-6 pb-6 text-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
    
    <!-- Columna izquierda -->
    <div>
      <p class="font-medium">© Agenda & Eventos del Valle del Loira</p>
      <?php /* <p class="mt-1">Alojamientos, Valle del Loira</p> */ ?>

      <!-- Tu info -->
      <p class="mt-3">
        Web creada por  <a href="/val-de-loire/contacto.html" class="underline hover:text-white">
          <span class="font-semibold">Adrián Laya García</span>
        </a>
      </p>
    </div>

    <!-- Enlaces -->
    <div class="flex items-center gap-4">
      <a href="/val-de-loire/index.html" class="underline hover:text-white">Home</a>
      <?php /* <a href="#" class="underline hover:text-white">Aviso legal</a> */ ?>
    </div>

  </div>
</footer>


  <!-- JSON-LD placeholder (will be updated by JS) -->
  <script type="application/ld+json" id="jsonld-web"></script>

  <script>
  /* ---------- Utilities & initial dataset ---------- */

  // Example initial events (modify, or load from server)
  const initialEvents = [
    {
      id: crypto.randomUUID(),
      title: "Festival de Vinos de Saumur",
      date: "",
      summary: "Gran feria anual de vinos con catas y productores locales.",
      location: "Saumur",
      region: "Maine-et-Loire",
      url: "https://example.com/saumur-festival",
      icon: "fa-solid fa-wine-glass",
      image: ""
    },
    {
      id: crypto.randomUUID(),
      title: "Festivini",
      date: "",
      summary: "Muestra de vinos y actividades en bodegas locales.",
      location: "Chinon",
      region: "Indre-et-Loire",
      url: "https://example.com/festivini",
      icon: "fa-solid fa-glass-cheers",
      image: ""
    }
  ];

  // LocalStorage key
  const LS_KEY = 'loire_events_v1';

  function loadEvents() {
    try {
      const raw = localStorage.getItem(LS_KEY);
      if (raw) return JSON.parse(raw);
    } catch(e) { console.warn(e); }
    // If none, seed with initialEvents
    localStorage.setItem(LS_KEY, JSON.stringify(initialEvents));
    return initialEvents.slice();
  }

  function saveEvents(arr) {
    localStorage.setItem(LS_KEY, JSON.stringify(arr));
    updateUI();
  }

  // Helper sanitize for display (simple)
  function escapeHtml(s) {
    if (!s) return '';
    return s.replaceAll('&','&amp;').replaceAll('<','&lt;').replaceAll('>','&gt;');
  }

  /* ---------- Rendering ---------- */

  const eventsGrid = document.getElementById('eventsGrid');
  const emptyState = document.getElementById('emptyState');
  const qInput = document.getElementById('q');
  const filterRegion = document.getElementById('filterRegion');

  let events = loadEvents();

  function renderCard(e) {
    const img = e.image ? `<img src="${escapeHtml(e.image)}" alt="${escapeHtml(e.title)}" loading="lazy" class="w-full h-40 object-cover rounded-t">` : '';
    const icon = e.icon ? `<i class="${escapeHtml(e.icon)} text-emerald-700 mr-2"></i>` : '';
    const dateText = e.date ? `<time datetime="${escapeHtml(e.date)}" class="text-xs text-gray-500">${escapeHtml(e.date)}</time>` : '';
    const button = e.url ? `<a href="${escapeHtml(e.url)}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 bg-emerald-700 text-white px-3 py-2 rounded text-sm">Más info<i class="fa-solid fa-arrow-right"></i></a>` : '';
    return `
      <article class="bg-white rounded-lg shadow overflow-hidden flex flex-col" data-id="${e.id}" aria-labelledby="ev-${e.id}">
        ${img}
        <div class="p-4 flex-1 flex flex-col">
          <h4 id="ev-${e.id}" class="font-semibold text-emerald-700 text-lg flex items-center">${icon}${escapeHtml(e.title)}</h4>
          <p class="text-sm text-gray-600 mt-2 flex-1">${escapeHtml(e.summary)}</p>
          <div class="mt-4 flex items-center justify-between gap-2">
            <div class="text-xs text-gray-500">${dateText} <span class="mx-2">•</span> ${escapeHtml(e.location)}</div>
            <div class="flex items-center gap-2">${button}
              <button class="btn-edit text-emerald-700 text-sm" data-id="${e.id}" aria-label="Editar evento">Editar</button>
              <button class="btn-delete text-red-600 text-sm" data-id="${e.id}" aria-label="Eliminar evento">Eliminar</button>
            </div>
          </div>
        </div>
      </article>
    `;
  }

  function updateUI() {
    // Filter & search
    const q = qInput.value.trim().toLowerCase();
    const region = filterRegion.value;
    const filtered = events.filter(ev => {
      if (region && ev.region !== region) return false;
      if (!q) return true;
      return (ev.title + ' ' + ev.summary + ' ' + ev.location + ' ' + (ev.region||'')).toLowerCase().includes(q);
    });

    eventsGrid.innerHTML = filtered.map(renderCard).join('');
    emptyState.classList.toggle('hidden', filtered.length !== 0);

    // Attach handlers
    document.querySelectorAll('.btn-delete').forEach(b => b.addEventListener('click', e => {
      const id = e.currentTarget.dataset.id;
      if (!confirm('Eliminar evento?')) return;
      events = events.filter(x => x.id !== id);
      saveEvents(events);
      generateJSONLD(); // update structured data
    }));
    document.querySelectorAll('.btn-edit').forEach(b => b.addEventListener('click', e => {
      const id = e.currentTarget.dataset.id;
      const item = events.find(x => x.id === id);
      if (!item) return;
      // populate form
      document.getElementById('title').value = item.title;
      document.getElementById('date').value = item.date || '';
      document.getElementById('summary').value = item.summary || '';
      document.getElementById('location').value = item.location || '';
      document.getElementById('region').value = item.region || '';
      document.getElementById('url').value = item.url || '';
      document.getElementById('icon').value = item.icon || '';
      document.getElementById('image').value = item.image || '';
      // set editing id on save button
      document.getElementById('btnSave').dataset.editing = id;
      window.scrollTo({ top: document.getElementById('formSection').offsetTop - 40, behavior: 'smooth' });
    }));

    generateJSONLD();
  }

  /* ---------- Form saving ---------- */

  document.getElementById('eventForm').addEventListener('submit', (ev) => {
    ev.preventDefault();
    const data = {
      id: crypto.randomUUID(),
      title: document.getElementById('title').value.trim(),
      date: document.getElementById('date').value,
      summary: document.getElementById('summary').value.trim(),
      location: document.getElementById('location').value.trim(),
      region: document.getElementById('region').value,
      url: document.getElementById('url').value.trim(),
      icon: document.getElementById('icon').value.trim(),
      image: document.getElementById('image').value.trim()
    };
    // Simple validation
    if (!data.title) return alert('El título es obligatorio.');
    const editing = document.getElementById('btnSave').dataset.editing;
    if (editing) {
      events = events.map(ev => ev.id === editing ? Object.assign(ev, data, { id: editing }) : ev);
      delete document.getElementById('btnSave').dataset.editing;
    } else {
      events.unshift(data); // new events first
    }
    saveEvents(events);
    // reset
    document.getElementById('eventForm').reset();
  });

  // Clear form
  document.getElementById('btnClearForm').addEventListener('click', () => {
    document.getElementById('eventForm').reset();
    delete document.getElementById('btnSave').dataset.editing;
  });

  // Quick UI buttons
  document.getElementById('scrollToForm').addEventListener('click', () => {
    window.scrollTo({ top: document.getElementById('formSection').offsetTop - 20, behavior: 'smooth' });
  });

  document.getElementById('btnClear').addEventListener('click', () => {
    qInput.value = '';
    filterRegion.value = '';
    updateUI();
  });

  qInput.addEventListener('input', updateUI);
  filterRegion.addEventListener('change', updateUI);

  // Export CSV
  document.getElementById('btnExportCSV').addEventListener('click', () => {
    const header = ['id','title','date','summary','location','region','url','icon','image'];
    const rows = events.map(ev => header.map(h => {
      const v = (ev[h] ?? '').toString().replace(/"/g,'""');
      return `"${v}"`;
    }).join(','));
    const csv = [header.join(','), ...rows].join('\n');
    const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'eventos-val-de-loire.csv';
    a.click();
    URL.revokeObjectURL(url);
  });

  // Generate a minimal sitemap.xml and let user download
  document.getElementById('btnDownloadSitemap').addEventListener('click', () => {
    const hostname = location.origin;
    const urls = events
      .filter(e => e.url)
      .map(e => `<url><loc>${escapeHtml(e.url)}</loc><changefreq>monthly</changefreq></url>`);
    // Always include main page
    urls.unshift(`<url><loc>${hostname}${location.pathname}</loc><changefreq>weekly</changefreq></url>`);
    const sitemap = `<?xml version="1.0" encoding="UTF-8"?>\n<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">\n${urls.join('\n')}\n</urlset>`;
    const blob = new Blob([sitemap], { type: 'application/xml' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'sitemap-eventos.xml';
    a.click();
    URL.revokeObjectURL(url);
  });

  // Mobile menu
  document.getElementById('btn-menu').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });

  /* ---------- Structured Data (JSON-LD) ---------- */

  function generateJSONLD() {
    const hostname = location.origin;
    // WebSite JSON-LD
    const website = {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Val de Loire",
      "url": hostname,
      "potentialAction": {
        "@type": "SearchAction",
        "target": `${hostname}${location.pathname}?q={search_term_string}`,
        "query-input": "required name=search_term_string"
      }
    };

    // ItemList of events
    const itemListElements = events.map((e, i) => {
      const ev = {
        "@type": "ListItem",
        "position": i+1,
        "url": e.url || `${hostname}${location.pathname}#${encodeURIComponent(e.title)}`,
        "item": {
          "@type": "Event",
          "name": e.title,
          "startDate": e.date || undefined,
          "description": e.summary,
          "location": {
            "@type": "Place",
            "name": e.location || "Valle del Loira"
          },
          "image": e.image || undefined,
          "url": e.url || undefined
        }
      };
      // Remove undefined props to keep JSON clean
      JSON.stringify(ev);
      return ev;
    });

    const itemList = {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "itemListElement": itemListElements
    };

    // Organization
    const org = {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Val de Loire",
      "url": hostname,
      "logo": `${hostname}/val-de-loire/assets/logo.png`
    };

    // Combine into a single JSON-LD block
    const combined = [website, org, itemList];
    document.getElementById('jsonld-web').textContent = JSON.stringify(combined, null, 2);
  }

  /* ---------- Init ---------- */
  document.getElementById('year').textContent = new Date().getFullYear();
  updateUI(); // initial render
  generateJSONLD();

  </script>
</body>
</html>
