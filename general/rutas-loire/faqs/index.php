<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>FAQ — Rutas del Valle del Loira | Castillos, Vino, Ríos, Loire à Vélo</title>
<meta name="description" content="Preguntas frecuentes sobre las rutas del Valle del Loira: Castillos imprescindibles, Vinos & Gastronomía, Ríos y Paisajes y La Loire à Vélo (cicloturismo). Consejos prácticos, mejores épocas, reservas y logística." />
<link rel="canonical" href="https://tudominio.example/faqs-rutas-loira.html" />
<meta name="robots" content="index,follow" />
<meta name="author" content="Adrián Laya García" />

<!-- Tailwind (prototipo) -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
/* Small visual tweaks */
:root { --emerald: #059669; --emerald-700: #047857; }
.accordion-btn:focus { outline: 3px solid rgba(5,150,105,0.25); outline-offset: 2px; }
.summary-open > .chev { transform: rotate(180deg); }
.custom-scroll::-webkit-scrollbar { width: 8px; }
.custom-scroll::-webkit-scrollbar-track { background: #f1f5f9; border-radius:6px;}
.custom-scroll::-webkit-scrollbar-thumb { background: var(--emerald); border-radius:6px;}
</style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

<!-- HEADER -->
<header class="bg-emerald-700 text-white sticky top-0 z-50 shadow">
  <div class="container mx-auto px-4 md:px-6 py-4 flex items-center justify-between">
    <a href="/val-de-loire" class="flex items-center gap-3">
      <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain rounded" />
      <div>
        <h1 class="text-lg md:text-2xl font-extrabold leading-tight">🌿 Valle del Loira</h1>
        <p class="text-xs text-emerald-200">Preguntas frecuentes — Rutas</p>
      </div>
    </a>

    <div class="hidden md:flex items-center gap-4">
      <nav class="flex gap-4 text-sm">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/general/castillos-abiertos-hoy.php" class="hover:underline">Castillos</a>
        <a href="/val-de-loire/general/rutas-loire/index.php" class="hover:underline">Rutas</a>
      </nav>
      <button onclick="window.print()" class="bg-white text-emerald-700 px-3 py-1 rounded shadow-sm text-sm">Imprimir FAQs</button>
    </div>

    <button id="btn-mobile-menu" class="md:hidden p-2 rounded bg-emerald-600" aria-label="Abrir menú">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>

  <!-- mobile menu -->
  <div id="mobileMenu" class="hidden md:hidden bg-emerald-800 px-4 pb-4">
    <nav class="flex flex-col gap-2 py-2">
      <a href="/val-de-loire" class="py-2">Inicio</a>
      <a href="/val-de-loire/general/rutas-loire/index.php" class="py-2">Rutas</a>
    </nav>
  </div>
</header>

<main class="container mx-auto px-4 md:px-6 py-8 grid grid-cols-1 lg:grid-cols-12 gap-6 max-w-[1400px]">

  <!-- ASIDE IZQUIERDO (navegación rutas) -->
  <aside class="hidden lg:block lg:col-span-3 bg-white rounded-lg shadow p-4 sticky top-28 h-fit">
    <h2 class="text-lg font-semibold text-emerald-700 mb-3">Navegación — Rutas</h2>
    <nav class="flex flex-col gap-2 text-gray-700">
      <a href="#castillos" class="py-2 px-3 rounded hover:bg-emerald-50">🏰 Castillos imprescindibles</a>
      <a href="#vinos" class="py-2 px-3 rounded hover:bg-emerald-50">🍷 Vinos & Gastronomía</a>
      <a href="#rios" class="py-2 px-3 rounded hover:bg-emerald-50">🌿 Ríos y Paisajes</a>
      <a href="#loireavelo" class="py-2 px-3 rounded hover:bg-emerald-50">🚴 La Loire à Vélo</a>
    </nav>

    <div class="mt-6 text-xs text-gray-500">
      <p><strong>Consejo:</strong> Usa el buscador para encontrar preguntas por palabra clave.</p>
    </div>
  </aside>

  <!-- CONTENIDO PRINCIPAL -->
  <section class="lg:col-span-7 bg-white rounded-lg shadow p-4 md:p-6 space-y-6">

    <!-- Intro -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <h2 class="text-2xl md:text-3xl font-bold text-emerald-700">Preguntas frecuentes — Rutas del Valle del Loira</h2>
      <div class="flex items-center gap-2">
        <input id="searchFaq" type="search" placeholder="Buscar pregunta..." class="p-2 border rounded w-48" aria-label="Buscar preguntas" />
        <button id="btnExportJSON" class="px-3 py-2 text-sm border rounded">Exportar JSON</button>
        <button id="btnExportCSV" class="px-3 py-2 text-sm border rounded">Exportar CSV</button>
      </div>
    </div>

    <p class="text-gray-600">Aquí encontrarás respuestas prácticas sobre logística, mejores épocas, reservas y recomendaciones para cada ruta.</p>

    <!-- Ruta: Castillos -->
    <article id="castillos" class="pt-2">
      <h3 class="text-xl font-semibold text-emerald-700 mb-3">Ruta: Castillos imprescindibles</h3>

      <div class="space-y-2" id="faq-castillos">
        <!-- Accordion item -->
        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Cuál es la mejor época para visitar los castillos?</strong>
              <div class="text-sm text-gray-600 mt-1">Temporada y clima recomendado.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">La primavera (abril-junio) y principios de otoño (septiembre-octubre) son ideales: menos turistas, jardines en flor y clima templado. En verano algunos castillos están más concurridos pero las actividades al aire libre abundan.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Necesito reservar entrada con antelación?</strong>
              <div class="text-sm text-gray-600 mt-1">Consejos sobre reservas y colas.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Para castillos populares como Chambord o Chenonceau recomendamos reservar online en temporada alta; para otros castillos más pequeños suele bastar con comprar en taquilla.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Hay visitas guiadas en español?</strong>
              <div class="text-sm text-gray-600 mt-1">Disponibilidad de guías y audioguías.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Algunos castillos ofrecen visitas guiadas o audioguías en español; comprueba la web oficial del castillo o contacta con la oficina de turismo local para confirmarlo.</p>
          </div>
        </div>
      </div>
    </article>

    <!-- Ruta: Vinos -->
    <article id="vinos" class="pt-4">
      <h3 class="text-xl font-semibold text-emerald-700 mb-3">Ruta: Vinos del Loira & Gastronomía</h3>

      <div class="space-y-2" id="faq-vinos">
        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Puedo visitar bodegas sin cita previa?</strong>
              <div class="text-sm text-gray-600 mt-1">Normas sobre catas y visitas.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Muchas bodegas reciben visitantes sin cita fuera de la vendimia, pero las bodegas pequeñas suelen pedir cita para catas. Recomendamos llamar o reservar online para asegurar disponibilidad.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Qué vinos no debo perderme?</strong>
              <div class="text-sm text-gray-600 mt-1">Variedades recomendadas.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">No te pierdas los Sauvignon Blanc de Sancerre, los tintos de Chinon y Bourgueil (Cabernet Franc) y los espumosos locales. Pregunta por producciones familiares y añadas locales.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Se puede conducir después de una cata?</strong>
              <div class="text-sm text-gray-600 mt-1">Consejos de seguridad.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">No se recomienda conducir tras catas. Usa transporte local, taxis o servicios de traslado. Planifica rutas cortas o designa un conductor sobrio.</p>
          </div>
        </div>
      </div>
    </article>

    <!-- Ruta: Ríos -->
    <article id="rios" class="pt-4">
      <h3 class="text-xl font-semibold text-emerald-700 mb-3">Ruta: Ríos y Paisajes del Valle del Loira</h3>

      <div class="space-y-2" id="faq-rios">
        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Dónde hacer senderismo o ciclismo a la orilla del Loira?</strong>
              <div class="text-sm text-gray-600 mt-1">Rutas recomendadas y niveles.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">La Loire à Vélo ofrece tramos perfectos para ciclistas de todos los niveles. Para senderismo, busca senderos locales señalizados en parques naturales y orillas del río; consulta oficinas de turismo para mapas detallados.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Es seguro bañarse en el río?</strong>
              <div class="text-sm text-gray-600 mt-1">Normas de seguridad acuática.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Aunque hay zonas aptas para baño, las condiciones varían. Busca playas y zonas señalizadas; respeta las advertencias locales y evita nadar en corrientes o zonas no habilitadas.</p>
          </div>
        </div>
      </div>
    </article>

    <!-- Ruta: Loire à Vélo -->
    <article id="loireavelo" class="pt-4">
      <h3 class="text-xl font-semibold text-emerald-700 mb-3">Ruta: "La Loire à Vélo" (Cicloturismo)</h3>

      <div class="space-y-2" id="faq-loireavelo">
        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Qué nivel de experiencia necesito para hacer La Loire à Vélo?</strong>
              <div class="text-sm text-gray-600 mt-1">Recomendaciones según tramo.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Hay tramos muy accesibles para familias y otros de mayor distancia. Elige tramos de 30–60 km por día si no eres ciclista experimentado. Alquila bicis eléctricas si prefieres menos esfuerzo.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Dónde alquilar bicicletas eléctricas?</strong>
              <div class="text-sm text-gray-600 mt-1">Puntos de alquiler y precios orientativos.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Las oficinas de turismo en ciudades principales (Tours, Saumur, Blois) listan puntos de alquiler. Espera precios desde ~25–40€ al día para eléctricas; reserva en temporada alta.</p>
          </div>
        </div>

        <div class="border rounded-lg">
          <button class="w-full text-left p-4 accordion-btn flex justify-between items-start gap-4" aria-expanded="false">
            <span>
              <strong>¿Cómo planificar alojamiento durante la ruta?</strong>
              <div class="text-sm text-gray-600 mt-1">Consejos prácticos.</div>
            </span>
            <i class="fa-solid fa-chevron-down chev"></i>
          </button>
          <div class="px-4 pb-4 hidden" role="region">
            <p class="text-gray-700">Reserva con antelación en temporada alta. Distribuye etapas cortas entre pueblos con oferta de alojamiento (B&B, hoteles rurales). Considera llevar mochila ligera y usar transporte local entre tramos si es necesario.</p>
          </div>
        </div>
      </div>
    </article>

  </section>

  <!-- ASIDE DERECHO: recursos y enlaces (scroll independiente en desktop) -->
  <aside class="hidden lg:block lg:col-span-2">
    <div class="h-[78vh] sticky top-28 overflow-y-auto custom-scroll bg-white rounded-lg shadow p-4">
      <h4 class="text-emerald-700 font-semibold mb-3">Recursos útiles</h4>

      <ul class="text-sm space-y-3">
        <li><a href="https://www.loireavelo.fr/" target="_blank" rel="noopener" class="text-emerald-700 hover:underline">La Loire à Vélo — web oficial</a></li>
        <li><a href="https://www.valdeloire-france.com/" target="_blank" rel="noopener" class="text-emerald-700 hover:underline">Val de Loire — turismo oficial</a></li>
        <li><a href="https://www.getyourguide.com/" target="_blank" rel="nofollow noopener" class="text-emerald-700 hover:underline">GetYourGuide — tours y actividades</a></li>
      </ul>

      <div class="mt-6 border-t pt-4">
        <h5 class="text-sm font-semibold mb-2">Contacto</h5>
        <p class="text-xs text-gray-600">¿No encuentras respuesta? Escríbeme: <a href="mailto:superlaya50@gmail.com" class="text-emerald-700 hover:underline">superlaya50@gmail.com</a></p>
      </div>
    </div>
  </aside>

</main>

<!-- JSON-LD FAQPage (dentro del HTML para SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuál es la mejor época para visitar los castillos?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La primavera (abril-junio) y principios de otoño (septiembre-octubre) son ideales: menos turistas, jardines en flor y clima templado."
      }
    },
    {
      "@type": "Question",
      "name": "¿Necesito reservar entrada con antelación?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Para castillos populares como Chambord o Chenonceau recomendamos reservar online en temporada alta; para otros castillos más pequeños suele bastar con comprar en taquilla."
      }
    },
    {
      "@type": "Question",
      "name": "¿Puedo visitar bodegas sin cita previa?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Muchas bodegas reciben visitantes sin cita fuera de la vendimia, pero las bodegas pequeñas suelen pedir cita para catas. Recomendamos llamar o reservar online para asegurar disponibilidad."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué nivel de experiencia necesito para hacer La Loire à Vélo?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Hay tramos muy accesibles para familias y otros de mayor distancia. Elige tramos de 30–60 km por día si no eres ciclista experimentado; considera bicicletas eléctricas si prefieres menos esfuerzo."
      }
    }
  ]
}
</script>

<!-- Scripts: accordion, search, export -->
<script>
// Mobile menu
document.getElementById('btn-mobile-menu')?.addEventListener('click', () => {
  document.getElementById('mobileMenu').classList.toggle('hidden');
});

// Accessible accordion behavior (delegation)
document.querySelectorAll('.accordion-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    // close all in same section
    const container = btn.closest('div[id^="faq-"]') || btn.closest('article') || document;
    container.querySelectorAll('.accordion-btn').forEach(b => {
      b.setAttribute('aria-expanded','false');
      b.nextElementSibling?.classList.add('hidden');
    });
    if (!expanded) {
      btn.setAttribute('aria-expanded','true');
      btn.nextElementSibling?.classList.remove('hidden');
    }
  });

  btn.addEventListener('keydown', (e) => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      btn.click();
    }
  });
});

// Simple client-side search across FAQ questions & answers
const searchInput = document.getElementById('searchFaq');
searchInput.addEventListener('input', () => {
  const q = searchInput.value.trim().toLowerCase();
  const articles = document.querySelectorAll('section article, section article article, article');
  // We will filter based on question headings and answer text
  document.querySelectorAll('.border.rounded-lg').forEach(item => {
    const text = item.textContent.toLowerCase();
    if (!q) {
      item.classList.remove('hidden');
    } else {
      if (text.includes(q)) item.classList.remove('hidden'); else item.classList.add('hidden');
    }
  });
});

// Export JSON of FAQs (title + Q/A)
document.getElementById('btnExportJSON')?.addEventListener('click', () => {
  const items = [];
  document.querySelectorAll('.accordion-btn').forEach(btn => {
    const q = btn.querySelector('strong')?.textContent.trim() || btn.textContent.trim();
    const aEl = btn.nextElementSibling;
    const a = aEl ? aEl.textContent.trim() : '';
    items.push({ question: q, answer: a });
  });
  const blob = new Blob([JSON.stringify(items, null, 2)], { type: 'application/json' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url; a.download = 'faqs-rutas-loira.json'; a.click(); URL.revokeObjectURL(url);
});

// Export CSV
document.getElementById('btnExportCSV')?.addEventListener('click', () => {
  const rows = [['question','answer']];
  document.querySelectorAll('.accordion-btn').forEach(btn => {
    const q = btn.querySelector('strong')?.textContent.trim() || btn.textContent.trim();
    const aEl = btn.nextElementSibling;
    const a = aEl ? aEl.textContent.trim() : '';
    rows.push([`"${q.replace(/"/g,'""')}"`,`"${a.replace(/"/g,'""')}"`]);
  });
  const csv = rows.map(r => r.join(',')).join('\\n');
  const blob = new Blob([csv], { type: 'text/csv' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url; a.download = 'faqs-rutas-loira.csv'; a.click(); URL.revokeObjectURL(url);
});

// Smooth-internal anchor scrolling
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', (e) => {
    const href = a.getAttribute('href');
    if (href.startsWith('#')) {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});
</script>

</body>
</html>
