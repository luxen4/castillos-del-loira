<?php
// 🌟 Variables principales
$siteName       = "Valle del Loira";
$nombreEvento   = "Marchés de Noël d’Orléans";
$ciudad         = "Orléans";
$slug           = "marches-noel-orleans";
$descripcion    = "Los Marchés de Noël d’Orléans transforman el corazón de la ciudad en un encantador pueblo navideño. Más de 100 chalets de madera, luces festivas, pista de patinaje y productos artesanales hacen de este mercado uno de los más mágicos del Valle del Loira.";
$fechaEvento    = "Del 25 de noviembre al 31 de diciembre de 2025";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/4/49/Orleans_marche_noel_place_martroi.jpg";
$imagenThumb    = $imagenHero;
$canonical      = "https://tusitioweb.com/val-de-loire/eventos/{$slug}.php";
$keywords       = "Marché de Noël Orléans, mercados navideños Francia, Navidad en Orléans, Valle del Loira, turismo navideño, eventos Francia";
$author         = "Valle del Loira Web";
$twitterHandle  = "@TuCuentaTwitter";
$latitude       = 47.9029;
$longitude      = 1.9093;
$direccion      = "Place du Martroi, 45000 Orléans, Francia";
$horario_inicio = "10:00";
$horario_fin    = "20:00";
$web_oficial    = "https://www.orleansmetropole.fr/marche-noel"; // ejemplo oficial
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars("$nombreEvento | $ciudad - $siteName") ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <meta name="author" content="<?= htmlspecialchars($author) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:type" content="event">
  <meta property="og:title" content="<?= htmlspecialchars($nombreEvento . " | " . $ciudad) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imagenThumb) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= htmlspecialchars($twitterHandle) ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($nombreEvento) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($imagenThumb) ?>">

  <link rel="icon" href="/img/favicon.png" type="image/png">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .hero-overlay { background: linear-gradient(180deg, rgba(0,0,0,0.5), rgba(0,0,0,0.3)); }
  </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased leading-relaxed">

  <!-- HEADER -->
  <header class="bg-red-700 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="Logo Valle del Loira" class="h-10 w-auto" />
        <div>
          <h1 class="text-xl font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-75">Guía de turismo y eventos</p>
        </div>
      </a>
      <nav class="hidden md:flex gap-6">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/eventos" class="hover:underline">Eventos</a>
        <a href="/val-de-loire/ciudades/Orleans.php" class="hover:underline">Orléans</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative">
    <div class="relative h-60 sm:h-96 md:h-[460px] overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>" alt="<?= htmlspecialchars($nombreEvento) ?>" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 hero-overlay flex items-center justify-center text-center">
        <div class="max-w-2xl px-6 text-white">
          <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold drop-shadow-lg"><?= htmlspecialchars($nombreEvento) ?></h2>
          <p class="mt-3 text-lg font-light"><?= htmlspecialchars($fechaEvento) ?></p>
          <p class="mt-4 text-sm sm:text-base"><?= htmlspecialchars($descripcion) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENIDO -->
  <main class="container mx-auto px-6 py-12 grid lg:grid-cols-3 gap-10">

    <!-- Artículo -->
    <article class="lg:col-span-2 space-y-8">

      <!-- Introducción -->
      <section id="introduccion">
        <h2 class="text-2xl font-bold text-red-700 mb-3">🎄 Espíritu navideño en Orléans</h2>
        <p>Durante la temporada navideña, la ciudad de <strong>Orléans</strong> se viste de luces, música y aromas de chocolate y vino caliente. En la <strong>Place du Martroi</strong> se instala un encantador mercado con decenas de chalets que ofrecen artesanías, productos locales y decoración navideña.</p>
      </section>

      <!-- Actividades -->
      <section id="actividades">
        <h2 class="text-2xl font-bold text-red-700 mb-3">✨ Actividades destacadas</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>🎠 <strong>Carrusel infantil</strong> y atracciones familiares.</li>
          <li>⛸️ <strong>Pista de patinaje</strong> en pleno centro.</li>
          <li>🎅 <strong>Casa de Papá Noel</strong> para los más pequeños.</li>
          <li>🎵 Conciertos, coros y espectáculos de calle.</li>
          <li>🍷 Degustación de vino caliente, dulces y quesos regionales.</li>
        </ul>
      </section>

      <!-- Galería -->
      <section id="galeria">
        <h2 class="text-2xl font-bold text-red-700 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Orleans_Marche_Noel.jpg" alt="Mercado de Navidad Orléans" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Place du Martroi — Wikimedia</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/49/Orleans_marche_noel_place_martroi.jpg" alt="Chalets navideños en Orléans" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Ambiente navideño — Wikimedia</figcaption>
          </figure>
        </div>
      </section>

      <!-- Información práctica -->
      <section id="info" class="mt-8">
        <h2 class="text-2xl font-bold text-red-700 mb-3">ℹ️ Información práctica</h2>
        <div class="bg-white p-5 rounded-2xl shadow grid md:grid-cols-2 gap-4">
          <div>
            <p><strong>Ubicación:</strong> <?= $direccion ?></p>
            <p><strong>Fechas:</strong> <?= $fechaEvento ?></p>
            <p><strong>Horario:</strong> <?= $horario_inicio ?> - <?= $horario_fin ?></p>
          </div>
          <div>
            <p><strong>Acceso:</strong></p>
            <ul class="list-disc list-inside">
              <li>Tranvía: Líneas A y B – parada Jeanne d’Arc.</li>
              <li>Aparcamiento subterráneo Place du Martroi.</li>
              <li>Accesible a pie desde el centro histórico.</li>
            </ul>
            <a href="<?= $web_oficial ?>" class="text-red-600 underline mt-2 block" target="_blank">Web oficial</a>
          </div>
        </div>
      </section>
    </article>

    <!-- Sidebar -->
    <aside class="space-y-6">
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-red-700 mb-3">🎁 Otros eventos en Orléans</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/eventos/the-loire-festival-orleans.php" class="hover:underline">The Loire Festival</a></li>
          <li><a href="/val-de-loire/ciudades/Orleans.php" class="hover:underline">Descubre Orléans</a></li>
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

  <!-- Footer -->
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

  <!-- JSON-LD: Evento -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Event",
    "name":"<?= addslashes($nombreEvento) ?>",
    "startDate":"2025-11-25",
    "endDate":"2025-12-31",
    "eventAttendanceMode":"https://schema.org/OfflineEventAttendanceMode",
    "eventStatus":"https://schema.org/EventScheduled",
    "description":"<?= addslashes($descripcion) ?>",
    "image":["<?= addslashes($imagenHero) ?>"],
    "url":"<?= addslashes($canonical) ?>",
    "location":{
      "@type":"Place",
      "name":"Place du Martroi - Orléans",
      "address":{
        "@type":"PostalAddress",
        "streetAddress":"Place du Martroi",
        "addressLocality":"Orléans",
        "addressCountry":"FR"
      }
    },
    "offers":{
      "@type":"Offer",
      "url":"<?= addslashes($web_oficial) ?>",
      "price":"0",
      "priceCurrency":"EUR",
      "availability":"https://schema.org/InStock"
    }
  }
  </script>

</body>
</html>
