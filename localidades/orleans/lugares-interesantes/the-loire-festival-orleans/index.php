<?php
// variables iniciales - edítalas
$siteName       = "Valle del Loira";
$nombreEvento   = "The Loire Festival Orléans";
$ciudad         = "Orléans";
$slug           = "the-loire-festival-orleans";
$descripcion    = "El The Loire Festival Orléans reúne música, arte y cultura junto al río Loira en Orléans. Un evento anual para disfrutar al aire libre de conciertos, instalaciones artísticas, gastronomía y buen ambiente.";
$fechaEvento    = "Del 15 al 18 agosto 2026"; // ejemplo
$imagenHero     = "https://via.placeholder.com/1600x900?text=The+Loire+Festival+Orleans";
$imagenThumb    = $imagenHero;
$canonical      = "https://tusitioweb.com/val-de-loire/eventos/{$slug}.php";
$keywords       = "Loire Festival Orléans, festival Orléans 2026, música Valle del Loira, eventos Francia, festival al aire libre Loira";
$author         = "Tu Agencia/Eventos";
$twitterHandle  = "@adrianLaya";
$latitude       = 47.903;   // Orléans aproximado
$longitude      = 1.909;
$direccion      = "Parc Floral de la Source / Orléans-Loiret, Francia"; // ejemplo
$horario_inicio = "17:00";
$horario_fin    = "02:00";
$web_oficial    = "https://www.loirefestival-orleans.com"; // ejemplo
$artistas       = [
  ["nombre"=>"Artista A", "dia"=>"15 agosto", "escenario"=>"Main Stage"],
  ["nombre"=>"Artista B", "dia"=>"16 agosto", "escenario"=>"Garden Stage"],
  ["nombre"=>"Artista C", "dia"=>"17 agosto", "escenario"=>"River Stage"]
];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars($nombreEvento . " | " . $ciudad . " - " . $siteName) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <meta name="author" content="<?= htmlspecialchars($author) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
  <meta name="robots" content="index,follow" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:type" content="event">
  <meta property="og:title" content="<?= htmlspecialchars($nombreEvento . " | " . $ciudad) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imagenThumb) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= htmlspecialchars($twitterHandle) ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($nombreEvento . " | " . $ciudad) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($imagenThumb) ?>">

  <!-- Favicons -->
  <link rel="icon" href="/img/favicon.png" type="image/png">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Preload hero -->
  <link rel="preload" as="image" href="<?= htmlspecialchars($imagenHero) ?>">

  <style>
    .hero-overlay { background: linear-gradient(180deg, rgba(0,0,0,0.45), rgba(0,0,0,0.25)); }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased leading-relaxed">

  <!-- Header -->
  <header class="bg-emerald-700 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="<?= htmlspecialchars($siteName) ?>" class="h-10 w-auto" />
        <div>
          <h1 class="text-xl font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-75">Guía y agenda de eventos</p>
        </div>
      </a>
      <nav class="hidden md:flex gap-6">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/eventos" class="hover:underline">Eventos</a>
        <a href="/val-de-loire/chateaux" class="hover:underline">Castillos</a>
        <a href="/contacto" class="bg-white text-emerald-700 px-3 py-2 rounded-lg shadow-sm hover:opacity-90">Contacto</a>
      </nav>
      <button id="btnMobileMenu" class="md:hidden p-2 rounded-md bg-emerald-600 hover:bg-emerald-500" aria-label="Menú móvil">☰</button>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative">
    <div class="relative h-56 sm:h-96 md:h-[420px] lg:h-[540px] overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>"
           alt="<?= htmlspecialchars($nombreEvento) ?>"
           class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 hover:scale-105"
           loading="eager">
      <div class="absolute inset-0 hero-overlay flex items-center">
        <div class="container mx-auto px-6">
          <div class="max-w-3xl text-white">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold drop-shadow-lg">
              <?= htmlspecialchars($nombreEvento) ?>
            </h2>
            <p class="mt-2 text-sm sm:text-base md:text-lg drop-shadow"><?= htmlspecialchars($fechaEvento) ?></p>
            <p class="mt-4 text-sm sm:text-base md:text-lg drop-shadow">
              <?= htmlspecialchars($descripcion) ?>
            </p>
            <div class="mt-4 flex gap-3">
              <a href="#entradas" class="bg-white text-emerald-700 px-4 py-2 rounded-lg font-medium shadow">Comprar entradas</a>
              <a href="#programa" class="bg-transparent border border-white px-4 py-2 rounded-lg text-white hover:bg-white/10">Ver programa</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Navegación interna -->
  <nav class="bg-white sticky top-0 z-20 shadow-inner">
    <div class="container mx-auto px-6 flex gap-3 overflow-x-auto whitespace-nowrap py-3">
      <a href="#introduccion" class="px-3 py-1 hover:text-emerald-700">Introducción</a>
      <a href="#programa" class="px-3 py-1 hover:text-emerald-700">Programa</a>
      <a href="#artistas" class="px-3 py-1 hover:text-emerald-700">Artistas</a>
      <a href="#entradas" class="px-3 py-1 hover:text-emerald-700">Entradas</a>
      <a href="#galeria" class="px-3 py-1 hover:text-emerald-700">Galería</a>
      <a href="#informacion-practica" class="px-3 py-1 hover:text-emerald-700">Información</a>
    </div>
  </nav>

  <!-- MAIN -->
  <main class="container mx-auto px-1 py-12 grid lg:grid-cols-3 gap-10">

    <!-- Article -->
    <article class="lg:col-span-2 space-y-8">
      <!-- Introducción -->
      <section id="informacion">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🎉 Introducción</h2>
        <p class="text-gray-700"><?= htmlspecialchars($descripcion) ?></p>
      </section>

      <!-- Programa -->
      <section id="programa" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🗓️ Programa</h2>
        <p class="text-gray-700">Del día <strong>15 al 18 de agosto 2026</strong> disfrutarás de cuatro noches de música en varios escenarios junto al Loira. Horario aproximado: 17:00 a 02:00.</p>
      </section>

      <!-- Artistas -->
      <section id="artistas" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🎤 Artistas confirmados</h2>
        <ul class="space-y-3">
          <?php foreach($artistas as $a): ?>
            <li class="bg-white p-4 rounded-lg shadow flex justify-between items-center">
              <span class="font-semibold"><?= htmlspecialchars($a['nombre']) ?></span>
              <span class="text-sm text-gray-600"><?= htmlspecialchars($a['dia']) ?> · <?= htmlspecialchars($a['escenario']) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <!-- Entradas -->
      <section id="entradas" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🎫 Entradas</h2>
        <p class="text-gray-700 mb-4">Compra tus entradas anticipadas para asegurar mejor precio y sitio. Las plazas al aire libre son limitadas.</p>
        <a href="<?= $web_oficial ?>" class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-medium shadow hover:bg-emerald-700">Comprar entradas</a>
      </section>

      <!-- Galería -->
      <section id="galeria" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://via.placeholder.com/600x400?text=Festival+Main+Stage" alt="Main Stage Festival" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Main Stage — Fuente placeholder</figcaption>
          </figure>
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://via.placeholder.com/600x400?text=Festival+Garden+Stage" alt="Garden Stage Festival" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Garden Stage — Fuente placeholder</figcaption>
          </figure>
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://via.placeholder.com/600x400?text=Audience+Loire" alt="Público Festival Loira" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Ambiente junto al Loira — Fuente placeholder</figcaption>
          </figure>
        </div>
      </section>

      <!-- Información práctica -->
      <section id="informacion-practica" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">ℹ️ Información práctica</h2>
        <div class="bg-white p-4 rounded-2xl shadow grid md:grid-cols-2 gap-4">
          <div>
            <p><strong>Ubicación:</strong> <?= htmlspecialchars($direccion) ?></p>
            <p><strong>Fechas:</strong> <?= htmlspecialchars($fechaEvento) ?></p>
            <p><strong>Horario:</strong> <?= htmlspecialchars($horario_inicio) ?> — <?= htmlspecialchars($horario_fin) ?></p>
          </div>
          <div>
            <p><strong>Servicios:</strong></p>
            <ul class="list-disc list-inside text-gray-700">
              <li>Food trucks & gastronomía</li>
              <li>Zonas descanso & sombra</li>
              <li>Acceso adaptado</li>
              <li>Camping cercano</li>
            </ul>
            <p class="mt-3"><a href="<?= $web_oficial ?>" class="text-emerald-600 underline" target="_blank" rel="noopener">Web oficial / Entradas</a></p>
          </div>
        </div>
      </section>

    </article>

    <!-- ASIDE derecho -->
    <aside class="space-y-6">
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="<?= $web_oficial ?>" target="_blank" class="text-emerald-600 hover:underline">Web oficial del festival</a></li>
          <li><a href="https://www.tourisme-orleans.com/" target="_blank" class="text-emerald-600 hover:underline">Tourisme Orléans</a></li>
        </ul>
      </div>

      <!-- Publicidad o patrocinadores -->
      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow">
        <p class="text-gray-500 text-sm mb-2">Patrocinado por</p>
        <div class="bg-white rounded-lg h-56 flex items-center justify-center overflow-hidden">
          <span class="text-gray-400 text-sm">Espacio para patrocinador (300x250)</span>
        </div>
      </div>

      <!-- Ciudades o eventos relacionados -->
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔔 También te puede interesar</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/eventos/rock-orleans.php" class="hover:underline">Rock & Orléans Festival</a></li>
          <li><a href="/val-de-loire/localidades/Orleans.php" class="hover:underline">Ciudad de Orléans</a></li>
        </ul>
      </div>
    </aside>

  </main>

  <!-- Patrocinadores globales -->
  <section class="bg-emerald-50 py-8">
    <div class="container mx-auto px-6 text-center">
      <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores del evento</h4>
      <div class="flex justify-center gap-6 flex-wrap">
        <img src="/img/patrocinador1.png" alt="Patrocinador 1" class="h-10" loading="lazy">
        <img src="/img/patrocinador2.png" alt="Patrocinador 2" class="h-10" loading="lazy">
        <img src="/img/patrocinador3.png" alt="Patrocinador 3" class="h-10" loading="lazy">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-200 py-8 mt-12">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <h5 class="font-bold text-white mb-2"><?= htmlspecialchars($siteName) ?></h5>
        <p class="text-sm">Guía y agenda de eventos en el Valle del Loira. <br> © <?= date("Y") ?></p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Contacto</h5>
        <p class="text-sm">info@tusitioweb.com</p>
        <p class="text-sm">Tel: +33 1 23 45 67 89</p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Síguenos</h5>
        <div class="flex gap-3">
          <a href="#" class="text-sm hover:underline">Facebook</a>
          <a href="#" class="text-sm hover:underline">Instagram</a>
          <a href="#" class="text-sm hover:underline">Twitter</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Botón arriba -->
  <button id="btnTop" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
          class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition" aria-label="Ir arriba">⬆️</button>

  <script>
    document.getElementById('btnMobileMenu').addEventListener('click', function(){
      const nav = document.querySelector('header nav');
      nav.classList.toggle('hidden');
    });
    window.addEventListener("scroll", function(){
      const btn = document.getElementById("btnTop");
      if(window.scrollY > 300) btn.classList.remove("hidden");
      else btn.classList.add("hidden");
    });
  </script>

  <!-- JSON-LD: Event -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"MusicFestival",
    "name":"<?= addslashes($nombreEvento) ?>",
    "startDate":"2026-08-15",
    "endDate":"2026-08-18",
    "eventAttendanceMode":"https://schema.org/OfflineEventAttendanceMode",
    "eventStatus":"https://schema.org/EventScheduled",
    "location":{
      "@type":"Place",
      "name":"<?= addslashes($nombreEvento) ?> – <?= addslashes($ciudad) ?>",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"<?= addslashes($direccion) ?>",
        "addressLocality":"<?= addslashes($ciudad) ?>",
        "addressCountry":"FR"
      }
    },
    "image":[ "<?= addslashes($imagenTick = $imagenThumb) ?>" ],
    "url":"<?= addslashes($canonical) ?>",
    "sameAs":["<?= addslashes($web_oficial) ?>"],
    "offers":{
      "@type":"Offer",
      "url":"<?= addslashes($web_oficial) ?>",
      "priceCurrency":"EUR",
      "availableFrom":"2026-04-01T09:00",
      "validFrom":"2026-04-01T09:00"
    },
    "performer":[
      <?php foreach($artistas as $i=>$a): ?>
        {
          "@type":"MusicGroup",
          "name":"<?= addslashes($a['nombre']) ?>"
        }<?php echo ($i < count($artistas)-1) ? "," : ""; ?>
      <?php endforeach; ?>
    ]
  }
  </script>

</body>
</html>
