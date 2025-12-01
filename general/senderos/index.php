<?php
// senderos.php
$web_site = 'https://alayag82.kesug.com/valle-del-loira';
$nombrePagina = "Senderos y Miradores — Valle del Loira";
$descripcion = "Guía de senderos y miradores del Valle del Loira. Rutas a pie y miradores panorámicos para excursiones, fotografía y naturaleza.";
$imagenHero = $web_site . '/assets/senderos-hero.jpg';
$src_google_maps = 'https://www.google.com/maps/d/embed?mid=1uZ0...'; // sustituye por tu mapa embebido
$dateNow = date('c');

// RUTAS (ejemplos; edita/despliega o carga desde CSV)
$trails = [
  [
    'id'=>'amboise-forest',
    'title'=>'Caminos del Bosque de Amboise',
    'distance'=>'7.2 km',
    'time'=>'2 h',
    'difficulty'=>'Fácil',
    'desc'=>'Recorrido circular entre robledales con vistas al Château d\'Amboise.',
    'coords'=>[[47.413,0.983],[47.415,0.995],[47.407,0.990]]
  ],
  [
    'id'=>'chenonceau-cher',
    'title'=>'Sendero del Valle del Cher — Chenonceau',
    'distance'=>'9.5 km',
    'time'=>'3 h',
    'difficulty'=>'Moderada',
    'desc'=>'Ruta ribereña con panorámicas sobre el Castillo de Chenonceau.',
    'coords'=>[[47.324,1.070],[47.330,1.045],[47.316,1.050]]
  ],
  [
    'id'=>'sancerre-hills',
    'title'=>'Colinas de Sancerre',
    'distance'=>'5.8 km',
    'time'=>'1 h 40 min',
    'difficulty'=>'Fácil',
    'desc'=>'Tramo entre viñedos con excelentes vistas al atardecer.',
    'coords'=>[[47.284,2.814],[47.290,2.820],[47.287,2.800]]
  ],
  [
    'id'=>'tours-villandry',
    'title'=>'Loire à Vélo (Tours → Villandry)',
    'distance'=>'14 km',
    'time'=>'4 h (a pie) / 1 h (bici)',
    'difficulty'=>'Fácil',
    'desc'=>'Tramo ribereño ideal para aves y miradores al río.',
    'coords'=>[[47.394,0.684],[47.365,0.701],[47.366,0.700]]
  ]
];

// MIRADORES
$viewpoints = [
  ['name'=>'Mirador de Montsoreau','desc'=>'Vista al castillo y al pueblo junto al río.','coords'=>'47.248,0.075'],
  ['name'=>'Mirador de Candes-Saint-Martin','desc'=>'Confluencia del Vienne y el Loira desde altura.','coords'=>'47.175,0.075'],
  ['name'=>'Promenade des Fours à Chaux (Saumur)','desc'=>'Acantilado con vistas directas al Castillo de Saumur.','coords'=>'47.257,0.081']
];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars($nombrePagina) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
  <link rel="canonical" href="<?= $web_site ?>/senderos">

  <!-- Open Graph -->
  <meta property="og:title" content="<?= htmlspecialchars($nombrePagina) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= $imagenHero ?>">
  <meta property="og:url" content="<?= $web_site ?>/senderos">
  <meta property="og:type" content="website">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Favicon simple -->
  <link rel="icon" href="<?= $web_site ?>/assets/favicon.ico" sizes="any">

  <style>
    /* Marquee GPX button small tweaks and modal animation */
    @keyframes fadeIn { from{opacity:0; transform:translateY(6px)} to{opacity:1;transform:none} }
    .animate-fadeIn { animation: fadeIn .22s ease both; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- HEADER -->
  <header class="bg-emerald-700 text-white">
    <div class="max-w-7xl mx-auto px-4 py-5 flex items-center justify-between">
      <a href="<?= $web_site ?>" class="flex items-center gap-3">
        <img src="<?= $web_site ?>/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain">
        <div>
          <h1 class="text-lg font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-90">Senderos y Miradores</p>
        </div>
      </a>

      <nav class="hidden md:flex gap-6">
        <a href="<?= $web_site ?>/index.php" class="hover:underline">Inicio</a>
        <a href="<?= $web_site ?>/chateaux" class="hover:underline">Castillos</a>
        <a href="<?= $web_site ?>/general/loire-a-velo.php" class="hover:underline">Loire à Vélo</a>
      </nav>

      <!-- hamburguesa simple -->
      <button id="btnMenu" class="md:hidden p-2 rounded bg-emerald-600/80">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>

    <!-- Mobile menu -->
    <div id="mobileMenu" class="hidden bg-emerald-600/95 md:hidden">
      <div class="px-4 py-3 flex flex-col gap-2">
        <a href="<?= $web_site ?>/index.php" class="text-white">Inicio</a>
        <a href="<?= $web_site ?>/chateaux" class="text-white">Castillos</a>
        <a href="<?= $web_site ?>/general/loire-a-velo.php" class="text-white">Loire à Vélo</a>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="bg-[url('<?= $imagenHero ?>')] bg-cover bg-center h-64 md:h-96 relative">
    <div class="absolute inset-0 bg-black/40 flex items-center">
      <div class="max-w-7xl mx-auto px-4 text-white">
        <h2 class="text-2xl md:text-4xl font-extrabold">Senderos y Miradores del Valle del Loira</h2>
        <p class="mt-2 max-w-2xl">Rutas a pie y puntos panorámicos para fotografía, observación de aves y excursiones en un paisaje Patrimonio de la UNESCO.</p>
        <div class="mt-4 flex gap-3">
          <a href="#trails" class="bg-white/90 text-emerald-700 px-4 py-2 rounded font-semibold">Ver rutas</a>
          <a href="#" id="openMapLinkHero" class="px-4 py-2 border border-white/40 rounded text-white/90 hover:bg-white/10">Abrir mapa</a>
        </div>
      </div>
    </div>
  </section>

  <!-- LAYOUT: left aside, main, right aside -->
  <main class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">
    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block lg:col-span-3 space-y-6">
      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">🔎 Buscar</h4>
        <input id="search" type="search" placeholder="Buscar por nombre o dificultad" class="mt-3 w-full p-2 border rounded" />
      </div>

      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">📢 Publicidad</h4>
        <div class="mt-3 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">Espacio publicitario lateral</div>
      </div>

      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">Enlaces útiles</h4>
        <ul class="mt-2 text-sm space-y-2">
          <li><a href="<?= $web_site ?>/general/loire-a-velo.php" class="text-emerald-600 hover:underline">Loire à Vélo</a></li>
          <li><a href="<?= $web_site ?>/general/gastronomia.php" class="text-emerald-600 hover:underline">Gastronomía</a></li>
          <li><a href="<?= $web_site ?>/chateaux" class="text-emerald-600 hover:underline">Castillos</a></li>
        </ul>
      </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <section id="content" class="lg:col-span-6 space-y-8">

      <!-- BANNER PUBLICIDAD CENTRAL (solo desktop) -->
      <div class="hidden lg:block bg-white rounded-lg border p-4 text-center shadow">
        <small class="text-xs text-gray-400">Publicidad</small>
        <div class="mt-2 h-20 flex items-center justify-center text-sm">Leaderboard 970×90</div>
      </div>

      <!-- LISTADO DE RUTAS -->
      <section id="trails" class="space-y-4">
        <h3 class="text-2xl font-bold text-emerald-700">Rutas destacadas</h3>

        <?php foreach ($trails as $t): ?>
        <article class="bg-white rounded-xl shadow p-4 border" data-title="<?= htmlspecialchars(strtolower($t['title'])) ?>">
          <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
              <h4 class="text-lg font-semibold"><?= htmlspecialchars($t['title']) ?></h4>
              <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($t['desc']) ?></p>
              <p class="mt-2 text-xs text-gray-500"><?= htmlspecialchars($t['distance']) ?> · <?= htmlspecialchars($t['time']) ?> · Dificultad: <strong><?= htmlspecialchars($t['difficulty']) ?></strong></p>
            </div>

            <div class="flex gap-2 items-center">
              <button class="btn-focus-route px-3 py-2 bg-emerald-600 text-white rounded text-sm" data-trail="<?= $t['id'] ?>">Ver en mapa</button>

              <button class="btn-download px-3 py-2 border rounded text-sm" data-trail="<?= $t['id'] ?>">Descargar GPX</button>

              <a href="#<?= $t['id'] ?>" class="px-3 py-2 text-sm border rounded hover:bg-gray-50">Detalles</a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </section>

      <!-- MIRADORES -->
      <section id="viewpoints" class="bg-white p-4 rounded-xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700">Miradores y puntos panorámicos</h3>
        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
          <?php foreach ($viewpoints as $v): ?>
            <div class="border rounded p-3">
              <h4 class="font-semibold"><?= htmlspecialchars($v['name']) ?></h4>
              <p class="text-sm text-gray-600 mt-1"><?= htmlspecialchars($v['desc']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- INFO PRACTICA -->
      <section class="bg-white p-4 rounded-xl shadow">
        <h3 class="text-xl font-semibold text-emerald-700">Información práctica</h3>
        <ul class="mt-3 list-disc list-inside text-sm text-gray-700 space-y-1">
          <li>Mejor época: primavera y otoño.</li>
          <li>Equipo: calzado cómodo, agua y protección solar.</li>
          <li>Respeta la señalización y las zonas protegidas.</li>
        </ul>
      </section>

      <!-- PUBLICIDAD móvil (visible solo en móvil) -->
      <div class="block lg:hidden">
        <div class="bg-white rounded-lg p-3 text-center shadow">
          <small class="text-xs text-gray-400">Publicidad (móvil)</small>
          <div class="mt-2 h-24 flex items-center justify-center text-sm bg-gray-100">Espacio 300×250</div>
        </div>
      </div>

    </section>

    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block lg:col-span-3 space-y-6">
      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">🔔 Actividades cercanas</h4>
        <ul class="text-sm mt-3 space-y-2 text-gray-700">
          <li>Observación de aves — Tours</li>
          <li>Rutas guiadas — Amboise</li>
          <li>Talleres de fotografía — Blois</li>
        </ul>
      </div>

      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">Publicidad</h4>
        <div class="mt-3 h-36 bg-gray-100 rounded flex items-center justify-center text-sm text-gray-500">Espacio lateral</div>
      </div>

      <div class="bg-white rounded-lg p-4 shadow">
        <h4 class="text-emerald-700 font-semibold">Contacto</h4>
        <p class="text-sm text-gray-700 mt-2">Web creada por <strong>Adrián Laya García</strong> — <a href="mailto:superlaya50@gmail.com" class="text-emerald-700 hover:underline">superlaya50@gmail.com</a></p>
      </div><div class="mt-4">
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
</div>
    </aside>
  </main>

  <!-- LEADERBOARD / CARRUSEL (footer-ad) -->
  <div class="max-w-7xl mx-auto px-4">
    <div id="leaderboard" class="mt-8 bg-white rounded-lg border p-4 text-center overflow-hidden relative opacity-100 transition-opacity duration-700 animate-fadeIn">
      <button id="closeLeaderboard" class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 font-bold">&times;</button>
      <small class="text-xs text-gray-400">Publicidad</small>
      <div class="mt-2 text-sm">
        <div class="carousel flex gap-4 whitespace-nowrap will-change-transform overflow-hidden" style="--marquee-duration:18s">
          <?php for($i=1;$i<=10;$i++): ?>
            <a href="#" class="inline-block w-40 h-24 overflow-hidden rounded-lg bg-gray-100">
              <img src="https://via.placeholder.com/320x180?text=Ad+<?= $i ?>" alt="Ad <?= $i ?>" class="w-full h-full object-cover">
            </a>
          <?php endfor; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
    <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <div>
        <p>© Senderos y Miradores — Valle del Loira</p>
        <p class="mt-1">Web creada por <strong>Adrián Laya García</strong></p>
      </div>
      <div class="flex items-center gap-4">
        <a href="<?= $web_site ?>/index.php" class="underline">Inicio</a>
        <a href="<?= $web_site ?>/contacto.php" class="underline">Contacto</a>
      </div>
    </div>
  </footer>

  <!-- MAPA MODAL -->
  <div id="mapModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white w-11/12 max-w-4xl rounded-2xl shadow-lg overflow-hidden relative">
      <button id="closeMapBtn" class="absolute top-3 right-3 bg-white rounded-full shadow p-2 hover:bg-gray-100">✖</button>
      <div class="w-full h-[70vh]">
        <iframe src="<?= $src_google_maps ?>" class="w-full h-full" style="border:0" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>

  <!-- JSON-LD -->
  <script type="application/ld+json">
  <?= json_encode([
    "@context"=>"https://schema.org",
    "@type"=>"TouristAttraction",
    "name"=>"Senderos y miradores del Valle del Loira",
    "description"=>"Caminos señalizados ideales para fotografía y excursiones en el Valle del Loira.",
    "url"=>$web_site."/senderos",
    "image"=>$imagenHero,
    "datePublished"=>$dateNow,
    "touristType"=>"HikingArea",
    "containsPlace"=>array_map(function($v){ return ["@type"=>"TouristAttraction","name"=>$v['name']]; }, $viewpoints)
  ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
  </script>

  <!-- SCRIPTS -->
  <script>
    // menú móvil
    document.getElementById('btnMenu').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // mapa modal abrir/cerrar
    const mapModal = document.getElementById('mapModal');
    document.getElementById('openMapLinkHero').addEventListener('click', e => { e.preventDefault(); mapModal.classList.remove('hidden'); mapModal.classList.add('flex'); });
    document.getElementById('closeMapBtn').addEventListener('click', () => { mapModal.classList.add('hidden'); mapModal.classList.remove('flex'); });
    mapModal.addEventListener('click', (e) => { if(e.target===mapModal){ mapModal.classList.add('hidden'); mapModal.classList.remove('flex'); } });

    // leaderboard carousel (simple marquee)
    const marquee = document.querySelector('#leaderboard .carousel');
    if (marquee) {
      // clonamos su contenido para efecto infinito
      const clone = marquee.innerHTML;
      marquee.innerHTML += clone;
      marquee.style.display = 'flex';
      marquee.animate([
        { transform: 'translateX(0)' },
        { transform: 'translateX(-50%)' }
      ], { duration: 18000, iterations: Infinity, easing: 'linear' });
    }

    // cerrar leaderboard y reaparecer en 3s
    const lb = document.getElementById('leaderboard');
    const closeLb = document.getElementById('closeLeaderboard');
    closeLb.addEventListener('click', () => {
      lb.style.opacity = '0';
      setTimeout(()=>{ lb.style.display='none'; }, 400);
      // volver a mostrar tras 3s con fade in
      setTimeout(()=>{
        lb.style.display = '';
        lb.style.opacity = '0';
        setTimeout(()=>{ lb.style.opacity='1'; }, 20);
      }, 3000);
    });

    // --- GPX generator (coords: [[lat,lng],...]) ---
    function escapeXml(s) {
      return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')
                      .replace(/"/g,'&quot;').replace(/'/g,'&apos;');
    }
function coordsToGpx(coords, name) {
  const safeName = escapeXml(name || 'ruta');
  const points = coords
    .map(c => `    <trkpt lat="${c[0]}" lon="${c[1]}"><ele>0</ele></trkpt>`)
    .join("\n");

  // Construcción segura del encabezado XML
  const xmlHeader = "<" + "?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

  return (
    xmlHeader +
    `<gpx version="1.1" creator="SenderosLoira" xmlns="http://www.topografix.com/GPX/1/1">\n` +
    `<metadata><name>${safeName}</name></metadata>\n<trk><name>${safeName}</name><trkseg>\n` +
    points +
    '\n</trkseg></trk>\n</gpx>'
  );
}

    // asociar botones descargar con datos de PHP (inyectamos desde PHP)
    const ROUTES = {};
    <?php foreach($trails as $t): ?>
      ROUTES['<?= $t['id'] ?>'] = {
        id: '<?= $t['id'] ?>',
        name: <?= json_encode($t['title']) ?>,
        coords: <?= json_encode($t['coords']) ?>,
      };
    <?php endforeach; ?>

    document.querySelectorAll('.btn-download').forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.trail;
        const r = ROUTES[id];
        if(!r) return alert('Ruta no encontrada');
        const gpx = coordsToGpx(r.coords, r.name);
        const blob = new Blob([gpx], {type: 'application/gpx+xml'});
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `${r.id}.gpx`;
        document.body.appendChild(a);
        a.click();
        a.remove();
        URL.revokeObjectURL(url);
      });
    });

    // foco en mapa: abre modal (aquí puedes añadir integración con Leaflet si quieres)
    document.querySelectorAll('.btn-focus-route').forEach(btn => {
      btn.addEventListener('click', () => {
        // por ahora abrimos mapa general; puedes adaptar para centrar en coords con leaflet
        mapModal.classList.remove('hidden');
        mapModal.classList.add('flex');
      });
    });

    // búsqueda simple por título
    document.getElementById('search').addEventListener('input', e => {
      const q = e.target.value.trim().toLowerCase();
      document.querySelectorAll('#trails article').forEach(art => {
        const title = art.dataset.title || '';
        art.style.display = title.includes(q) ? '' : 'none';
      });
    });
  </script>
</body>
</html>
