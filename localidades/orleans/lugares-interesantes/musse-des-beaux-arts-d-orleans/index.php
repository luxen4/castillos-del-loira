<?php
// variables iniciales - edítalas según necesites
$siteName       = "Valle del Loira";
$nombreLugar    = "Musée des Beaux-Arts d'Orléans";
$ciudad         = "Orléans";
$slug           = "musee-beaux-arts-orleans";
$descripcion    = "Museo de Bellas Artes de Orléans: colección permanente, exposiciones temporales, visitas guiadas y actividades culturales en el corazón de Orléans.";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/1/1b/Orleans_Musee_des_beaux-arts.jpg"; // sustituir por buena imagen
$imagenThumb    = $imagenHero;
$canonical      = "https://tusitioweb.com/val-de-loire/localidades/{$slug}.php";
$keywords       = "Musée des Beaux-Arts Orléans, museo Orléans, arte Orléans, exposiciones Orléans, turismo Valle del Loira";
$author         = "Tu Nombre o Agencia";
$twitterHandle  = "@adrianLaya";
$latitude       = 47.903;   // aproximado
$longitude      = 1.909;
$direccion      = "1 Rue Fernand Rabier, 45000 Orléans, France";
$horario_apertura = "10:00";
$horario_cierre   = "18:00";
$web_oficial    = "https://www.orleans-metropole.fr/"; // ejemplo
// enlaces y relacionados
$enlaces = [
  ["Web oficial", $web_oficial],
  ["Oficina de turismo de Orléans", "https://www.tourisme-orleans.com/"],
  ["Google Maps", "https://maps.google.com/?q=Mus%C3%A9e+des+Beaux-Arts+Orl%C3%A9ans"]
];
$relacionadas = [
  ["Cathédrale Sainte-Croix", "catedral-sainte-croix.php"],
  ["Place du Martroi", "Place-du-Martroi.php"],
  ["Château de la Loire cercano", "Chateau.php"]
];
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars($nombreLugar . " | " . $ciudad . " - " . $siteName) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <meta name="author" content="<?= htmlspecialchars($author) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
  <meta name="robots" content="index,follow" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:type" content="museum">
  <meta property="og:title" content="<?= htmlspecialchars($nombreLugar . " | " . $ciudad) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imagenThumb) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= htmlspecialchars($twitterHandle) ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($nombreLugar . " | " . $ciudad) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($imagenThumb) ?>">

  <!-- Favicons -->
  <link rel="icon" href="/img/favicon.png" type="image/png">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: preload hero image for faster LCP -->
  <link rel="preload" as="image" href="<?= htmlspecialchars($imagenHero) ?>">

  <style>
    /* small helpers */
    .text-ellipsis { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
    /* mejorar contraste sobre fondos con imagen */
    .hero-overlay { background: linear-gradient(180deg, rgba(0,0,0,0.45), rgba(0,0,0,0.25)); }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased leading-relaxed">

  <!-- Header -->
  <header class="bg-emerald-700 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex items-center justify-between">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="<?= htmlspecialchars($siteName) ?>" class="h-10 w-auto" />
        <div>
          <h1 class="text-xl font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-75">Guía práctica y cultural</p>
        </div>
      </a>

      <nav class="hidden md:flex gap-6 items-center">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/chateaux" class="hover:underline">Castillos</a>
        <a href="/val-de-loire/ciudades" class="hover:underline">Localidades</a>
        <a href="/contacto" class="bg-white text-emerald-700 px-3 py-2 rounded-lg shadow-sm hover:opacity-90">Contacto</a>
      </nav>

      <!-- mobile menu button -->
      <button id="btnMobileMenu" class="md:hidden p-2 rounded-md bg-emerald-600 hover:bg-emerald-500" aria-label="Abrir menú">
        ☰
      </button>
    </div>
  </header>

  <!-- HERO responsivo (auto-scale en móvil) -->
  <section class="relative">
    <div class="relative h-56 sm:h-96 md:h-[420px] lg:h-[540px] overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>"
           alt="<?= htmlspecialchars($nombreLugar) ?>"
           class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 hover:scale-105"
           loading="eager">
      <div class="absolute inset-0 hero-overlay flex items-center">
        <div class="container mx-auto px-6">
          <div class="max-w-3xl text-white">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-extrabold drop-shadow-lg">
              <?= htmlspecialchars($nombreLugar) ?>
            </h2>
            <p class="mt-2 text-sm sm:text-base md:text-lg drop-shadow"><?= htmlspecialchars($descripcion) ?></p>
            <div class="mt-4 flex gap-3">
              <a href="#informacion-practica" class="bg-white text-emerald-700 px-4 py-2 rounded-lg font-medium shadow">Visítanos</a>
              <a href="#colecciones" class="bg-transparent border border-white px-4 py-2 rounded-lg text-white hover:bg-white/10">Ver colecciones</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Navegación interna (scrollable en móvil) -->
  <nav class="bg-white sticky top-0 z-20 shadow-inner">
    <div class="container mx-auto px-6 flex gap-3 overflow-x-auto whitespace-nowrap py-3">
      <a href="#introduccion" class="px-3 py-1 hover:text-emerald-700">Introducción</a>
      <a href="#historia" class="px-3 py-1 hover:text-emerald-700">Historia</a>
      <a href="#colecciones" class="px-3 py-1 hover:text-emerald-700">Colecciones</a>
      <a href="#exposiciones" class="px-3 py-1 hover:text-emerald-700">Exposiciones</a>
      <a href="#informacion-practica" class="px-3 py-1 hover:text-emerald-700">Visitas</a>
      <a href="#galeria" class="px-3 py-1 hover:text-emerald-700">Galería</a>
      <a href="#actividades" class="px-3 py-1 hover:text-emerald-700">Actividades</a>
    </div>
  </nav>

  <!-- MAIN LAYOUT -->
  <main class="container mx-auto px-1 py-12 grid lg:grid-cols-3 gap-10">

    <!-- MAIN ARTICLE -->
    <article class="lg:col-span-2 space-y-8">

      <!-- Introducción -->
      <section id="informacion">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🏛️ Introducción</h2>
        <p class="text-gray-700"><?= htmlspecialchars($descripcion) ?></p>
      </section>

      <!-- Historia -->
      <section id="historia" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">📜 Historia</h2>
        <p class="text-gray-700 leading-relaxed">
          El Musée des Beaux-Arts d'Orléans alberga colecciones que van desde esculturas y pinturas antiguas hasta arte moderno y contemporáneo.
          Fundado en el siglo XIX, el museo ha ampliado sus salas y su programación, ofreciendo exposiciones temporales de alcance internacional.
        </p>
      </section>

      <!-- Colecciones -->
      <section id="colecciones" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🖼️ Colecciones destacadas</h2>
        <div class="grid md:grid-cols-2 gap-4">
          <article class="bg-white p-4 rounded-2xl shadow">
            <h3 class="font-semibold text-lg">Pintura antigua</h3>
            <p class="text-sm text-gray-700 mt-2">Obras de maestros franceses y europeos desde el Renacimiento hasta el siglo XVIII.</p>
          </article>
          <article class="bg-white p-4 rounded-2xl shadow">
            <h3 class="font-semibold text-lg">Arte moderno & contemporáneo</h3>
            <p class="text-sm text-gray-700 mt-2">Colecciones de los siglos XIX a XXI, con artistas locales y exposiciones temporales.</p>
          </article>
        </div>
      </section>

      <!-- Exposiciones -->
      <section id="exposiciones" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">📅 Exposiciones actuales</h2>
        <ul class="space-y-3">
          <li class="bg-white p-4 rounded-lg shadow">
            <a href="#" class="flex items-start gap-4">
              <img src="https://via.placeholder.com/120x80" alt="Exposición temporal" class="w-28 h-20 object-cover rounded">
              <div>
                <strong>Maestros y coleccionistas</strong>
                <p class="text-sm text-gray-600">Exposición temporal hasta 30 junio — entrada incluida.</p>
              </div>
            </a>
          </li>
        </ul>
      </section>

      <!-- Información práctica -->
      <section id="informacion-practica" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">ℹ️ Información práctica</h2>
        <div class="bg-white p-4 rounded-2xl shadow grid md:grid-cols-2 gap-4">
          <div>
            <p><strong>Dirección:</strong> <?= htmlspecialchars($direccion) ?></p>
            <p><strong>Horario:</strong> <?= htmlspecialchars($horario_apertura) ?> — <?= htmlspecialchars($horario_cierre) ?> (consultar web en festivos)</p>
            <p><strong>Precios:</strong> Adultos 8€ — Reducida 5€ — Menores gratis</p>
            <p><strong>Acceso:</strong> A pie desde Place du Martroi, transporte urbano y parking cercano.</p>
          </div>
          <div>
            <p><strong>Servicios:</strong></p>
            <ul class="list-disc list-inside text-gray-700">
              <li>Tienda de museo</li>
              <li>Guardarropa</li>
              <li>Acceso adaptado</li>
              <li>Visitas guiadas</li>
            </ul>
            <p class="mt-3"><a href="<?= $web_oficial ?>" class="text-emerald-600 underline" target="_blank" rel="noopener">Web oficial / Entradas</a></p>
          </div>
        </div>
      </section>

      <!-- Actividades -->
      <section id="actividades" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">🎨 Actividades y talleres</h2>
        <p class="text-gray-700">El museo organiza talleres familiares, visitas comentadas y actividades educativas para escuelas. Consulta el calendario y reserva con antelación.</p>
      </section>

      <!-- Galería -->
      <section id="galeria" class="mt-8">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <!-- ejemplo de figuras; sustituye por $figuras si lo cargas desde PHP -->
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Orleans_Musee_des_beaux-arts.jpg" alt="Salas del museo" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Salas principales — Fuente: Wikimedia</figcaption>
          </figure>
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://via.placeholder.com/600x400" alt="Obra destacada" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Obra destacada</figcaption>
          </figure>
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://via.placeholder.com/600x400" alt="Jardines" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Entrada y jardines</figcaption>
          </figure>
        </div>
      </section>

    </article>

    <!-- ASIDE derecho -->
    <aside class="space-y-6">

      <!-- Enlaces útiles -->
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
        <ul class="space-y-2 text-sm">
          <?php foreach($enlaces as $en): ?>
            <li><a href="<?= htmlspecialchars($en[1]) ?>" target="_blank" class="text-emerald-600 hover:underline"><?= htmlspecialchars($en[0]) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Publicidad / Carrusel (inserta tu include) -->
      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow">
        <p class="text-gray-500 text-sm mb-2">Publicidad</p>
        <div class="bg-white rounded-lg h-56 flex items-center justify-center overflow-hidden">
          <?php
            // require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico.php";
            // (descomentarlo si existe)
          ?>
          <span class="text-gray-400 text-sm">Espacio publicitario (300x250)</span>
        </div>
      </div>

      <!-- Ciudades / Lugares cerca -->
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-3">🏙️ Cerca</h4>
        <ul class="space-y-2 text-sm">
          <?php foreach($relacionadas as $r): ?>
            <li><a href="<?= htmlspecialchars($r[1]) ?>" class="hover:text-emerald-700 hover:underline"><?= htmlspecialchars($r[0]) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Clima (placeholder) -->
      <div class="bg-white p-4 rounded-2xl shadow text-center">
        <h4 class="text-sm font-semibold text-emerald-700 mb-2">☀️ Clima</h4>
        <p class="text-2xl font-bold text-emerald-600">18°C</p>
        <p class="text-xs text-gray-500">Parcialmente nublado</p>
      </div>

    </aside>

  </main>

  <!-- Patrocinadores -->
  <section class="bg-emerald-50 py-8">
    <div class="container mx-auto px-6 text-center">
      <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores</h4>
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
        <p class="text-sm">Guía y recursos sobre el Valle del Loira. <br> © <?= date("Y") ?></p>
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

  <!-- Botón ir arriba -->
  <button id="btnTop" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition" aria-label="Ir arriba">⬆️</button>

  <script>
    // mobile menu toggle
    document.getElementById('btnMobileMenu').addEventListener('click', function(){
      const nav = document.querySelector('header nav');
      nav.classList.toggle('hidden');
    });

    // show/hide top button
    window.addEventListener("scroll", function() {
      const btn = document.getElementById("btnTop");
      if (window.scrollY > 300) btn.classList.remove("hidden"); else btn.classList.add("hidden");
    });
  </script>

  <!-- JSON-LD: Museum -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Museum",
    "name":"<?= addslashes($nombreLugar) ?>",
    "description":"<?= addslashes($descripcion) ?>",
    "image":"<?= addslashes($imagenThumb) ?>",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"<?= addslashes($direccion) ?>",
      "addressLocality":"<?= addslashes($ciudad) ?>",
      "addressCountry":"FR"
    },
    "geo":{
      "@type":"GeoCoordinates",
      "latitude": <?= $latitude ?>,
      "longitude": <?= $longitude ?>
    },
    "url":"<?= addslashes($canonical) ?>",
    "sameAs": ["<?= addslashes($web_oficial) ?>"],
    "openingHoursSpecification": {
      "@type":"OpeningHoursSpecification",
      "dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens":"<?= $horario_apertura ?>",
      "closes":"<?= $horario_cierre ?>"
    }
  }
  </script>
</body>
</html>
