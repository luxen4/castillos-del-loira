<!DOCTYPE html>
<html lang="es">

<head>
  <!-- ✅ Meta básicos -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Descubre los castillos más impresionantes del Valle del Loira en Francia: Chambord, Chenonceau, Villandri, Cheverny, Ussé y más. Guía de viaje, consejos y rutas.">
  <meta name="keywords" content="Valle del Loira, castillos Francia, Chambord, Chenonceau, Villandri, turismo Francia, ruta castillos">
  <meta name="author" content="Adrián Laya García">
  <meta name="rating" content="General">

  <!-- ✅ Título de la página -->
  <title>Castillos del Valle del Loira | Guía de Viaje</title>

  <!-- ✅ Open Graph (Facebook / LinkedIn) -->
  <meta property="og:title" content="Castillos del Valle del Loira | Guía de Viaje">
  <meta property="og:description" content="Explora la magia del Valle del Loira: Chambord, Chenonceau, Villandry y más. Guía, fotos y consejos para tu viaje.">
  <meta property="og:image" content="https://tusitio.com/img/logo.png">
  <meta property="og:url" content="https://---playas2024----.kesug.com/castillos-del-loira">
  <meta property="og:type" content="website">

  <!-- ✅ Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Castillos del Valle del Loira">
  <meta name="twitter:description" content="Viaja por los castillos del Valle del Loira, una experiencia inolvidable en Francia.">
  <meta name="twitter:image" content="https://tusitio.com/img/logo.png">

  <!-- ✅ Geolocalización -->
  <meta name="geo.position" content="42.470395, -2.429884" />
  <meta name="geo.placename" content="La Rioja" />
  <meta name="geo.region" content="ES-LO" />

  <!-- ✅ Seguridad / Robots -->
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="index,follow">
  <meta name="google:dnt" content="off">
  <meta name="twitter:dnt" content="off">
  <meta name="google" content="notranslate">

  <!-- ✅ Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="img/iconos/castillo.png" />

  <!-- ✅ Estilos y frameworks -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <!-- ✅ Generador / Editor -->
  <meta name="generator" content="VS Code">



  <?php require 'paginas/index/schemas/index-schemas-head.php'; ?>

</head>

<body class="bg-gray-50 text-gray-800 leading-relaxed">

  <!-- 🔹 Header con Navbar + Hero (estilo moderno) -->
  <header class="bg-emerald-700 text-white shadow">
    <div class="container mx-auto px-4 py-4 flex flex-col items-center gap-3">

      <!-- Títulos centrados -->
      <div class="text-center">
        <!-- H1 principal -->
        <h1 class="text-3xl md:text-4xl font-extrabold tracking-wide">🌿 Valle del Loira</h1>

        <!-- H2 subtítulo con borde izquierdo y derecho -->
        <h2 class="mt-1 text-lg md:text-xl font-semibold text-emerald-200 border-l-4 border-r-4 border-emerald-200 px-3 inline-block">
          <p class="mt-4 text-lg md:text-2xl text-emerald-100 max-w-3xl mx-auto leading-relaxed">
            Recorre la ruta de los castillos más bellos de Francia: Chambord, Chenonceau, Villandry y muchos más. Vive historia, arte y naturaleza en cada etapa.
          </p>
        </h2>
      </div>

      <!-- Menú de navegación -->
      <nav class="w-full md:w-auto">
        <!-- Botón hamburguesa -->
        <div class="flex justify-end md:hidden">
          <button id="menu-toggle" class="text-white focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
          </button>
        </div>

        <!-- Links -->
        <ul id="menu-items" class="hidden md:flex flex-col md:flex-row gap-4 mt-2 md:mt-0 text-center transition-all duration-300">
          <li><a href="../../index.php" class="hover:underline">🏠 Inicio</a></li>
          <li><a href="/val-de-loire/rutas.php" class="hover:underline">Rutas</a></li>
          <li><a href="../../val-de-loire/formulario.html" class="hover:underline">✍️ Formulario</a></li>
        </ul>
      </nav>

<nav class="bg-gray-100 rounded-2xl shadow mt-1 w-full">
  <!-- Botón hamburguesa móvil -->
  <div class="flex justify-end md:hidden p-2">
    <button id="menu-toggle2" class="text-gray-800 focus:outline-none font-semibold">
      ☰ Menú
    </button>
  </div>

  <!-- Menú horizontal -->
  <ul id="menu-items2" class="hidden md:flex flex-wrap gap-2 text-gray-800 font-medium text-sm px-2 py-2">
    
    <!-- Secciones simples -->
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">🧳 Turismo</a></li>
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">🍴 Gastronomía</a></li>
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">🚶 Paseos</a></li>
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">⭐ Actividades</a></li>
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">✅ Acontecimientos</a></li>
    <li><a href="#" class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1">🍽️ Restaurantes</a></li>

    <!-- Dropdown Alojamientos -->
    <li class="relative group">
      <button class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1 w-full text-left md:w-auto md:inline-flex">
        🛏️ Alojamientos
        <svg class="w-3 h-3 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="absolute left-0 mt-1 w-44 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all z-10 md:absolute">
        <li><a href="#" class="block px-3 py-1 hover:bg-emerald-100 text-sm">Hoteles</a></li>
        <li><a href="#" class="block px-3 py-1 hover:bg-emerald-100 text-sm">Alquileres de vacaciones</a></li>
        <li><a href="#" class="block px-3 py-1 hover:bg-emerald-100 text-sm">Casas rurales</a></li>
      </ul>
    </li>

    <!-- Dropdown Transportes -->
    <li class="relative group">
      <button class="px-3 py-2 rounded hover:bg-emerald-200 transition flex items-center gap-1 w-full text-left md:w-auto md:inline-flex">
        🚗 Transportes
        <svg class="w-3 h-3 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="absolute left-0 mt-1 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all z-10 md:absolute">
        <li><a href="#" class="block px-3 py-1 hover:bg-emerald-100 text-sm">Cómo llegar</a></li>
        <li><a href="#" class="block px-3 py-1 hover:bg-emerald-100 text-sm">Coches de alquiler</a></li>
      </ul>
    </li>

  </ul>
</nav>

<!-- Script para togglear menú móvil -->
<script>
  const toggle2 = document.getElementById('menu-toggle2');
  const menu2 = document.getElementById('menu-items2');

  toggle2.addEventListener('click', () => {
    menu2.classList.toggle('hidden');
  });
</script>


    </div>

    <!-- Script simple para togglear el menú en mobile -->
    <script>
      const toggle = document.getElementById('menu-toggle');
      const menu = document.getElementById('menu-items');
      toggle.addEventListener('click', () => {
        menu.classList.toggle('hidden');
      });
    </script>
  </header>


  <!-- 🔹 Layout con 3 columnas: lateral-izquierdo / contenido / lateral-derecho -->
  <div class="container mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">

    <!-- 🧭 Columna 1: Sidebar izquierdo -->
    <aside class="lg:col-span-2 bg-emerald-50 p-2 rounded-xl shadow space-y-1">
      <h3 class="text-lg font-bold text-emerald-700 mb-2">➤ Enlaces</h3>

      <div>
        <h4 class="font-semibold text-gray-700 mb-1">
          <a href="#ciudades-principales" class="hover:text-emerald-700 underline">
            Ciudades Principales
          </a>
        </h4>

        <h4 class="font-semibold text-gray-700 mb-1">
          <a href="#castillos-destacados" class="hover:text-emerald-700 underline">
            Castillos Destacados
          </a>
        </h4>

        <h4 class="font-semibold text-gray-700 mb-1">
          <a href="oficinas-turismo-val-de-loire.html" class="hover:text-emerald-700 underline">
            🗺️ Oficinas de Turismo
          </a>
        </h4>

        <h4 class="font-semibold text-gray-700 mb-1">
          <a href="oficinas-turismo-val-de-loire.html" class="hover:text-emerald-700 underline">
            🏨 Alojamientos
          </a>
        </h4>


      </div>






      <div class="my-6 max-w-md mx-auto">
        <label for="etapas" class="block mb-2 text-gray-700 font-semibold">Selecciona una etapa:</label>
        <select id="etapas"
          class="w-full border border-gray-300 rounded-lg px-4 py-2 shadow-sm focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition"
          onchange="if(this.value) window.location.href=this.value">
          <option value="">-- Elige una etapa --</option>
          <option value="etapas/1-etapa-nantes-angers/index.php">Nantes y Angers</option>
          <option value="etapas/2-etapa-angers-saumur/index.php">Angers y Saumur</option>
          <option value="etapas/3-etapa-saumur-chinon-langeais/index.php">Saumur, Chinon y Langeais</option>
          <option value="etapas/4-etapa-tours-amboise/index.php">Tours y Amboise</option>
          <option value="etapas/5-etapa-amboise-blois/index.php">Amboise y Blois</option>
          <option value="etapas/6-etapa-blois-orleans/index.php">Blois y Orleans</option>
          <option value="etapas/7-etapa-orleans/index.php">Orleans</option>
        </select>
      </div>


    </aside>

    <!-- 🏰 Columna 2: Contenido principal (más ancha) -->
    <main class="lg:col-span-7 space-y-10">





      <?php require  "anuncios/amazon/carrusel-horizontal-generico.php"; ?>

      <section class="space-y-6">
        <h2 class="text-2xl font-bold text-emerald-700 mb-4">✨ El Encanto del Valle del Loira</h2>

        <p>
          El <strong>Valle del Loira</strong> es un viaje a través de la historia, el arte y la naturaleza de Francia. Desde <ins>Nantes hasta Orleans</ins>, el río Loira serpentea entre bosques, viñedos y aldeas que parecen detenidas en el tiempo.
          A lo largo de sus orillas, se levantan más de <strong>80 castillos</strong> que fueron residencia de reyes, nobles y artistas del Renacimiento francés, cada uno con su propio encanto y leyenda.
          <a href="#mapa" class="text-emerald-700 hover:underline">
            🗺️ Ver Mapa
          </a>

        </p>

        <p>
          En esta región declarada <strong>Patrimonio Mundial por la UNESCO</strong>, se mezclan los paisajes bucólicos con la elegancia arquitectónica. Los jardines geométricos de
          <a href="chateaux/Villandri.php" class="text-emerald-700 hover:underline">Villandri</a>, los reflejos sobre el agua del majestuoso
          <a href="chateaux/Chenonceau.php" class="text-emerald-700 hover:underline">Chenonceau</a> o las torres de cuento de
          <a href="chateaux/Ussé.php" class="text-emerald-700 hover:underline">Ussé</a> —que inspiraron <em>La Bella Durmiente</em>— son solo algunas de las joyas que te esperan.
        </p>

        <p>
          Pero el Loira no es solo historia y piedra: también es <strong>gastronomía, vino y naturaleza</strong>. En cada etapa del recorrido podrás degustar quesos artesanos, vinos blancos del <em>Sauvignon</em> o tintos suaves del <em>Cabernet Franc</em>, acompañados de un paisaje de ensueño.
          Los caminos ciclistas de la
          <a href="https://www.cycling-loire.com/" target="_blank" rel="noopener noreferrer" class="text-emerald-700 hover:underline">Loire à Vélo</a>
          te permiten explorar a tu ritmo, mientras que los cruceros fluviales ofrecen una perspectiva tranquila y romántica del valle.
        </p>

        <!-- 💬 Bloque destacado WWF -->
        <blockquote
          cite="https://www.worldwildlife.org/"
          class="relative border-l-4 border-emerald-600 bg-emerald-50 p-5 rounded-lg italic text-gray-700 leading-relaxed shadow-sm mt-6 mb-6">
          <span class="absolute -left-4 -top-3 text-3xl text-emerald-600">🌿</span>

          Desde hace más de 60 años, la organización
          <abbr title="World Wide Fund for Nature" class="font-semibold text-emerald-700 underline decoration-dotted">WWF</abbr>
          trabaja por la conservación del patrimonio natural y cultural en todo el mundo.
          <br><br>
          Aunque su labor se centra principalmente en la protección del medio ambiente y la biodiversidad,
          el <ins class="text-emerald-700 font-semibold">WWF</ins> también apoya iniciativas sostenibles que ayudan a preservar
          paisajes emblemáticos como los del <strong class="text-emerald-800">Valle del Loira</strong>,
          donde la naturaleza y el legado histórico conviven en equilibrio.
        </blockquote>

        <p>
          Ya sea que busques arte, historia o descanso, el <strong>Valle del Loira</strong> te ofrece una experiencia única.
          Planifica tu viaje, sigue las etapas recomendadas y déjate seducir por la magia de los castillos, el murmullo del río y la hospitalidad de su gente.
        </p>
      </section>



      <!-- 🔹 Datos Rápidos del Valle del Loira (con animación al hacer scroll) -->
      <section
        id="datos-loira"
        class="mt-10 bg-emerald-50 p-6 rounded-xl shadow-md opacity-0 translate-y-6 transition-all duration-700">
        <h3 class="text-xl font-bold text-emerald-700 mb-4 text-center">
          📊 Datos rápidos del Valle del Loira
        </h3>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-gray-700">
          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🗓️ Mejor época</h4>
            <p>De mayo a septiembre, cuando los jardines florecen y el clima es ideal para pasear o pedalear junto al río.</p>
            <a href="#mejor-epoca" class="text-blue-600 hover:underline">ir</a>
          </div>

          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🚴 Ideal para</h4>
            <p>Amantes de la historia, la fotografía, el vino y la arquitectura. Perfecto para recorrer en bici o coche.</p>
            <a href="#ideal-para" class="text-blue-600 hover:underline">ir</a>
          </div>

          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🕰️ Duración recomendada</h4>
            <p>Entre 5 y 10 días para explorar las principales etapas sin prisas y empaparte del ritmo tranquilo del valle.</p>
            <a href="#duracion-recomendada" class="text-blue-600 hover:underline">ir</a>
          </div>


          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🍷 Vinos emblemáticos</h4>
            <p>Muscadet, Sancerre, Chinon y Saumur-Champigny: auténticas joyas enológicas de la región.</p>
            <a href="#vinos-emblematicos" class="text-blue-600 hover:underline">ir</a>
          </div>


          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🏰 Castillos destacados</h4>
            <p>Chambord, Chenonceau, Amboise, Villandri y Ussé, cada uno con su propia historia y encanto.</p>
            <a href="#castillos-destacados" class="text-blue-600 hover:underline">ir</a>
          </div>








          <div class="bg-white rounded-lg p-4 shadow-sm">
            <h4 class="font-semibold text-emerald-800 mb-1">🌦️ Clima</h4>
            <p>Templado oceánico, con veranos suaves e inviernos frescos. Perfecto para actividades al aire libre todo el año.</p>
            <a href="#clima" class="text-blue-600 hover:underline">ir</a>
          </div>
        </div>

        <p class="mt-6 text-sm text-gray-500 text-center">
          ℹ️ Consejo: organiza tu ruta por etapas —de <strong>Nantes a Orleans</strong>— para disfrutar cada zona sin prisas.
        </p>
      </section>

      <!-- 🔹 Script de animación (fade-in al hacer scroll) -->
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          const section = document.getElementById("datos-loira");
          const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                entry.target.classList.remove("opacity-0", "translate-y-6");
                entry.target.classList.add("opacity-100", "translate-y-0");
              }
            });
          }, {
            threshold: 0.2
          });

          observer.observe(section);
        });
      </script>


      <section id="mejor-epoca" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">🗓️ Mejor época para visitar</h3>
        <p>La primavera y el verano son ideales para disfrutar del Valle del Loira:</p>
        <ul class="list-disc list-inside text-gray-600 mt-3 space-y-2">
          <li>Jardines y parques de los castillos en pleno esplendor.</li>
          <li>Rutas en bicicleta o a pie con temperaturas agradables.</li>
          <li>Festivales y eventos culturales locales.</li>
          <li>Menor riesgo de lluvia y días más largos para explorar.</li>
        </ul>
      </section>

      <section id="ideal-para" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">🚴 Ideal para</h3>
        <p>El Valle del Loira es perfecto para:</p>
        <ul class="list-disc list-inside text-gray-600 mt-3 space-y-2">
          <li>Amantes de la historia y la arquitectura de castillos y ciudades medievales.</li>
          <li>Fotografía de paisajes, ríos y jardines renacentistas.</li>
          <li>Enoturismo: degustación de vinos locales como Muscadet, Sancerre o Chinon.</li>
          <li>Recorridos en bicicleta o coche para explorar cada etapa cómodamente.</li>
        </ul>
      </section>

      <section id="duracion-recomendada" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-6">🕰️ Duración recomendada de la ruta</h3>
        <p>Para disfrutar plenamente del Valle del Loira, se recomienda una estancia de entre 5 y 10 días. Esto permite recorrer las etapas principales con calma, visitar los castillos más emblemáticos y disfrutar de la gastronomía y los vinos locales sin prisas.</p>
        <ul class="list-disc list-inside text-gray-600 space-y-2 mt-4">
          <li>5 días: recorrido exprés visitando los castillos imprescindibles.</li>
          <li>7 días: permite disfrutar de cada etapa con más detalle.</li>
          <li>10 días: ruta completa, incluyendo pueblos, viñedos y actividades culturales.</li>
        </ul>
      </section>



      <section id="vinos-emblematicos" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-6">🍷 Vinos emblemáticos del Valle del Loira</h3>
        <p>La región del Valle del Loira es famosa por sus vinos blancos frescos, tintos elegantes y vinos espumosos. Muscadet en Nantes, Sancerre en el centro, Chinon y Saumur-Champigny son imprescindibles para los amantes del vino.</p>
        <div class="grid md:grid-cols-3 gap-6 mt-4">

          <figure class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://ik.imagekit.io/muscadet/wp-content/uploads/2024/06/snapinstaapp-446538631-1186208745895186-501167203397175317-n-1080.jpg"
              alt="Vino Muscadet"
              class="w-full h-48 object-cover">
            <figcaption class="p-2 text-gray-600 text-sm text-center">
              Vino blanco Muscadet – Fuente:
              <a href="https://www.vinsvaldeloire.fr/es/vino/muscadet"
                target="_blank"
                class="text-blue-600 underline">
                vinsvaldeloire.fr
              </a>
            </figcaption>
          </figure>

          <figure class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://dynamic-media.tacdn.com/media/photo-o/2e/a7/25/8d/caption.jpg?w=1400&h=1000&s=1"
              alt="Viñedos de Sancerre"
              class="w-full h-48 object-cover">
            <figcaption class="p-2 text-gray-600 text-sm text-center">
              Viñedos de Sancerre – Fuente:
              <a href="https://www.viator.com/es-ES/tours/Paris/Wine-Cheese-and-Castle-day-trip-in-Loire-Valley-region-departing-from-Paris/d479-20969P5"
                target="_blank"
                class="text-blue-600 underline">
                viator.com
              </a>
            </figcaption>
          </figure>

          <figure class="bg-white rounded-lg shadow overflow-hidden">
            <img src="https://www.ot-saumur.fr/wp-content/uploads/2022/12/adobestock-214187467-540x0-1673520010.jpeg"
              alt="Viñedos de Saumur-Champigny"
              class="w-full h-48 object-cover">
            <figcaption class="p-2 text-gray-600 text-sm text-center">
              Viñedos de Saumur-Champigny – Fuente:
              <a href="https://www.ot-saumur.fr/es/estar-inspirado/saber-todo-sobre/a-cada-uno-su-propio-aoc/denominaci%C3%B3n-de-origen-controlada-saumur-champigny/"
                target="_blank"
                class="text-blue-600 underline">
                ot-saumur.fr
              </a>
            </figcaption>
          </figure>

        </div>

      </section>


      <section id="castillos-destacados" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">🏰 Castillos Destacados</h3>
        <p class="text-gray-700 mb-6">
          El Valle del Loira es conocido como "el jardín de Francia" y alberga más de 300 castillos que nos transportan a épocas de reyes y caballeros.
          Desde majestuosas residencias renacentistas hasta fortalezas medievales, cada castillo tiene su propia historia y encanto único.
          A continuación, te mostramos algunos de los más impresionantes que no puedes perderte en tu viaje.
        </p>

        <div class="grid md:grid-cols-2 gap-6">
          <?php require 'paginas/index/data/index-castillos-destacados.php'; ?>
          <?php require 'paginas/index/templates/index-castillos-destacados.php'; ?>
        </div>
      </section>

      <?php require "estructura/index/main/sections/ciudades-principales.php"; // Ejemplar 
      ?>

      <?php require "estructura/index/main/sections/clima.php"; ?>
      <?php require "estructura/index/main/sections/consejos-viaje.php"; ?>



    </main>

    <!-- 📰 Columna 3: Sidebar derecho -->
    <aside class="lg:col-span-3 bg-gray-50 p-6 rounded-xl shadow space-y-6">
      <h3 class="text-lg font-bold text-gray-700">📰 Noticias y Enlaces</h3>
      <ul class="list-disc pl-6 space-y-2 text-gray-600">
        <li><a href="https://www.france.fr/es" target="_blank" class="hover:text-emerald-700 underline">Turismo de Francia</a></li>
        <li><a href="https://www.valdeloire-france.com/es" target="_blank" class="hover:text-emerald-700 underline">Valle del Loira</a></li>
        <li><a href="https://www.nantes-tourisme.com" target="_blank" class="hover:text-emerald-700 underline">Nantes Turismo</a></li>
      </ul>

      <div class="text-center">
        <img src="https://source.unsplash.com/400x300/?loire,castle" alt="Castillo del Loira" class="rounded-lg shadow">
        <p class="text-gray-600 text-sm mt-2">Publicidad o enlaces patrocinados.</p>
      </div>
    </aside>

  </div>

  <?php // require "galeria-imagenes-carrusel-automático.php"; 
  ?>



  <!-- 🔹 Footer -->
  <footer class="bg-gray-800 text-gray-300 py-8 mt-12">
    <div class="container mx-auto px-6 text-center space-y-2">
      <p>&copy; <?= date('Y'); ?> 
        <a href="/val-de-loire/contacto.html" class="hover:underline">Adrián Laya García.</a>
      </p>
      <p>
        📧 <a href="mailto:superlaya50@gmail.com" class="hover:text-white">superlaya50@gmail.com</a>
      </p>
              
      <p>
        🌐 <a href="https://www.valdeloire-france.com/es" class="hover:text-white">Turismo oficial del Valle del Loira</a>
      </p>
    </div>
  </footer>


  <script>
    feather.replace()
  </script>

  <?php require 'paginas/index/schemas/index-schemas-body.php'; ?>

</body>

</html>



<ins></ins>
<mark></mark>
<strong></strong>
<i></i>
<b></b>
<em></em>
<u></u>

<?php /*
<!--https://viajes.chavetas.es/guia/valle-del-loira/mejores-castillos-del-loira-imprescindibles/-->

<!--  https://www.w3schools.com/html/html_formatting.asp Para el SEO -->

<!-- https://www.serprobot.com/serp-check   SEO -->

 /* Hacer una web de loira en bici ?> */