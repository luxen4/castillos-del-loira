<?php
// 🌟 VARIABLES PRINCIPALES
$siteName       = "Valle del Loira";
$nombrePagina   = "Conciertos y Espectáculos en Orléans";
$ciudad         = "Orléans";
$slug           = "conciertos-espectaculos-orleans";
$descripcion    = "Descubre los mejores conciertos, musicales y espectáculos en Orléans. Desde grandes eventos en el Zénith d’Orléans hasta conciertos íntimos en salas históricas, la ciudad vibra todo el año con música y cultura.";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/7/7e/Z%C3%A9nith_d%27Orl%C3%A9ans_2016.jpg";
$canonical      = "https://tusitioweb.com/val-de-loire/eventos/{$slug}.php";
$keywords       = "Conciertos Orléans, Zénith Orléans, espectáculos Francia, teatro Orléans, música Valle del Loira, eventos culturales Orléans";
$author         = "Valle del Loira Web";
$twitterHandle  = "@adrianLaya";
$latitude       = 47.8703;
$longitude      = 1.9406;
$direccion      = "Zénith d’Orléans, 1 Rue du Président Robert Schuman, 45100 Orléans, Francia";
$web_oficial    = "https://www.gl-events.com/es/zenith-orleans";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars("$nombrePagina | $ciudad - $siteName") ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <meta name="author" content="<?= htmlspecialchars($author) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($nombrePagina . " | " . $ciudad) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imagenHero) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= htmlspecialchars($twitterHandle) ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($nombrePagina) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($imagenHero) ?>">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 leading-relaxed antialiased">

  <!-- HEADER -->
  <header class="bg-indigo-800 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="Logo Valle del Loira" class="h-10 w-auto">
        <div>
          <h1 class="text-xl font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-75">Guía de turismo y eventos</p>
        </div>
      </a>
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/eventos" class="hover:underline">Eventos</a>
        <a href="/val-de-loire/localidades/Orleans.php" class="hover:underline">Orléans</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative">
    <div class="relative h-64 sm:h-96 overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>" alt="<?= htmlspecialchars($nombrePagina) ?>" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-center">
        <div class="px-6 text-white max-w-2xl">
          <h2 class="text-3xl sm:text-5xl font-extrabold mb-3 drop-shadow-lg"><?= htmlspecialchars($nombrePagina) ?></h2>
          <p class="text-base sm:text-lg font-light"><?= htmlspecialchars($descripcion) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENIDO -->
  <main class="container mx-auto px-1 py-12 grid lg:grid-cols-3 gap-10">

    <!-- ARTÍCULO -->
    <article class="lg:col-span-2 space-y-8">

      <!-- Introducción -->
      <section>
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">🎤 Música y arte en el corazón del Loira</h2>
        <p>Orléans ofrece una vibrante escena cultural durante todo el año. Desde <strong>grandes conciertos internacionales</strong> en el Zénith d’Orléans hasta <strong>espectáculos teatrales y musicales</strong> en el Théâtre d’Orléans, la ciudad es un referente en el Valle del Loira.</p>
      </section>

      <!-- Tipos de espectáculos -->
      <section>
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">🎭 Tipos de espectáculos</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>Conciertos de música pop, rock y clásica.</li>
          <li>Musicales, teatro contemporáneo y danza.</li>
          <li>Festivales de jazz y música del mundo.</li>
          <li>Eventos infantiles y espectáculos familiares.</li>
          <li>Giras de humor y stand-up.</li>
        </ul>
      </section>

      <!-- Lugares emblemáticos -->
      <section>
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">🏛️ Lugares emblemáticos</h2>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="bg-white p-4 rounded-xl shadow">
            <h3 class="font-semibold text-lg text-indigo-700 mb-1">Zénith d’Orléans</h3>
            <p>La principal sala de conciertos del Loira central, con capacidad para más de 6.000 personas. Atrae artistas nacionales e internacionales.</p>
            <a href="<?= $web_oficial ?>" target="_blank" class="text-indigo-600 underline text-sm mt-2 inline-block">Sitio oficial</a>
          </div>
          <div class="bg-white p-4 rounded-xl shadow">
            <h3 class="font-semibold text-lg text-indigo-700 mb-1">Théâtre d’Orléans</h3>
            <p>Centro cultural y teatral de la ciudad, conocido por su programación de artes escénicas y producciones contemporáneas.</p>
            <a href="https://www.scenenationaledorleans.fr" target="_blank" class="text-indigo-600 underline text-sm mt-2 inline-block">scenenationaledorleans.fr</a>
          </div>
        </div>
      </section>

      <!-- Galería -->
      <section>
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7e/Z%C3%A9nith_d%27Orl%C3%A9ans_2016.jpg" alt="Zénith d’Orléans" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Zénith d’Orléans — Wikimedia</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/Th%C3%A9%C3%A2tre_d%27Orl%C3%A9ans.jpg" alt="Théâtre d’Orléans" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Théâtre d’Orléans — Wikimedia</figcaption>
          </figure>
        </div>
      </section>

      <!-- Info práctica -->
      <section>
        <h2 class="text-2xl font-bold text-indigo-800 mb-3">ℹ️ Información práctica</h2>
        <div class="bg-white p-5 rounded-2xl shadow grid md:grid-cols-2 gap-4">
          <div>
            <p><strong>Ubicación:</strong> <?= $direccion ?></p>
            <p><strong>Accesos:</strong> Tranvía línea A — parada “Zénith / Parc des Expos”.</p>
            <p><strong>Aparcamiento:</strong> Gratuito y vigilado durante los eventos.</p>
          </div>
          <div>
            <p><strong>Entradas:</strong> Se pueden adquirir en línea o en taquilla.</p>
            <a href="<?= $web_oficial ?>" target="_blank" class="text-indigo-600 underline mt-2 block">Zénith d’Orléans (web oficial)</a>
          </div>
        </div>
      </section>
    </article>

    <!-- SIDEBAR -->
    <aside class="space-y-6">
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-indigo-800 mb-3">🎵 Más eventos en Orléans</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/eventos/the-loire-festival-orleans.php" class="hover:underline">The Loire Festival</a></li>
          <li><a href="/val-de-loire/eventos/marches-noel-orleans.php" class="hover:underline">Marchés de Noël</a></li>
          <li><a href="/val-de-loire/localidades/Orleans.php" class="hover:underline">Descubre Orléans</a></li>
        </ul>
      </div>

      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow">
        <p class="text-gray-500 text-sm mb-2">Publicidad</p>
        <div class="bg-white rounded-lg h-56 flex items-center justify-center">
          <span class="text-gray-400 text-sm">Espacio patrocinador (300x250)</span>
        </div>
      </div>
    </aside>

  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-200 py-8 mt-12">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <h5 class="font-bold text-white mb-2"><?= $siteName ?></h5>
        <p class="text-sm">Guía de turismo y eventos en el Valle del Loira.<br>© <?= date("Y") ?></p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Contacto</h5>
        <p class="text-sm">info@tusitioweb.com</p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Síguenos</h5>
        <div class="flex gap-3 text-sm">
          <a href="#" class="hover:underline">Facebook</a>
          <a href="#" class="hover:underline">Instagram</a>
          <a href="#" class="hover:underline">Twitter</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JSON-LD: Evento general -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Event",
    "name": "<?= addslashes($nombrePagina) ?>",
    "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
    "eventStatus": "https://schema.org/EventScheduled",
    "description": "<?= addslashes($descripcion) ?>",
    "image": ["<?= addslashes($imagenHero) ?>"],
    "url": "<?= addslashes($canonical) ?>",
    "location": {
      "@type": "Place",
      "name": "Zénith d’Orléans",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1 Rue du Président Robert Schuman",
        "addressLocality": "Orléans",
        "addressCountry": "FR"
      }
    },
    "organizer": {
      "@type": "Organization",
      "name": "GL Events",
      "url": "<?= addslashes($web_oficial) ?>"
    }
  }
  </script>

</body>
</html>
