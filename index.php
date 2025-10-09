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
  <meta property="og:description" content="Explora la magia del Valle del Loira: Chambord, Chenonceau, Villandri y más. Guía, fotos y consejos para tu viaje.">
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

<!-- 🔹 Header con Navbar + Hero -->
<header class="bg-emerald-700 text-white shadow-lg">
  <!-- 🔗 Navbar -->
  <div class="p-4 flex justify-between items-center container mx-auto">
    <!-- Logo / título -->
    <h1 class="text-xl font-bold">🌍 Val de Loire</h1>

    <!-- Navegación -->
    <nav class="flex items-center gap-6">
      <a href="index.php" class="hover:underline">🏠 Home</a>
    </nav>
  </div>

  <!-- 🌟 Hero -->
  <div class="py-12 text-center px-6 container mx-auto">
    <h2 class="text-4xl md:text-5xl font-extrabold">🌿 Ruta por el Valle del Loira</h2>
    <p class="mt-3 text-lg md:text-xl text-emerald-100">
      Explora la ruta de los castillos más bellos de Francia: Chambord, Chenonceau, Villandri y más.
    </p>
    <a href="#mapa" 
       class="mt-6 inline-block bg-white text-emerald-700 px-5 py-2 rounded-lg font-semibold shadow hover:bg-emerald-100 transition">
       🗺️ Ver Ruta
    </a>
  </div>
</header>
<!-- 🔹 Layout con 3 columnas: lateral-izquierdo / contenido / lateral-derecho -->
<div class="container mx-auto px-6 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">

  <!-- 🧭 Columna 1: Sidebar izquierdo -->
  <aside class="lg:col-span-2 bg-emerald-50 p-6 rounded-xl shadow space-y-6">
    <h3 class="text-lg font-bold text-emerald-700 mb-4">🏙️ Ciudades y Castillos</h3>

    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Ciudades Principales</h4>
      <ul class="list-disc list-inside text-gray-600 space-y-1">
        <li><a href="ciudades/Nantes.php" class="hover:text-emerald-700 underline">Nantes</a></li>
        <li><a href="ciudades/Angers.php" class="hover:text-emerald-700 underline">Angers</a></li>
        <li><a href="ciudades/Saumur.php" class="hover:text-emerald-700 underline">Saumur</a></li>
        <li><a href="ciudades/Tours.php" class="hover:text-emerald-700 underline">Tours</a></li>
        <li><a href="ciudades/Blois.php" class="hover:text-emerald-700 underline">Blois</a></li>
        <li><a href="ciudades/Orleans.php" class="hover:text-emerald-700 underline">Orleans</a></li>
      </ul>
    </div>

    <div>
      <h4 class="font-semibold text-gray-700 mb-2">Castillos</h4>
      <ul class="list-disc list-inside text-gray-600 space-y-1">
        <li><a href="chateaux/Chambord.php" class="hover:text-emerald-700 underline">Chambord</a></li>
        <li><a href="chateaux/Chenonceau.php" class="hover:text-emerald-700 underline">Chenonceau</a></li>
        <li><a href="chateaux/Villandri.php" class="hover:text-emerald-700 underline">Villandri</a></li>
      </ul>
    </div>
  </aside>

  <!-- 🏰 Columna 2: Contenido principal (más ancha) -->
  <main class="lg:col-span-7 space-y-10">
    <section>
      <h2 class="text-3xl font-bold text-emerald-700 mb-4">✨ El Encanto del Valle del Loira</h2>
    <p>
  El <strong>Valle del Loira</strong> es un viaje a través de la historia, el arte y la naturaleza de Francia. Desde <ins>Nantes hasta Orleans</ins>, el río Loira serpentea entre bosques, viñedos y aldeas que parecen detenidas en el tiempo. 
  A lo largo de sus orillas, se levantan más de <strong>80 castillos</strong> que fueron residencia de reyes, nobles y artistas del Renacimiento francés, cada uno con su propio encanto y leyenda.
</p>

<p class="mt-4">
  En esta región declarada <strong>Patrimonio Mundial por la UNESCO</strong>, se mezclan los paisajes bucólicos con la elegancia arquitectónica. Los jardines geométricos de <a href="chateaux/Villandri.php" class="text-emerald-700 hover:underline">Villandri</a>, los reflejos sobre el agua del majestuoso <a href="chateaux/Chenonceau.php" class="text-emerald-700 hover:underline">Chenonceau</a> o las torres de cuento de <a href="chateaux/Usse.php" class="text-emerald-700 hover:underline">Ussé</a> —que inspiraron <em>La Bella Durmiente</em>— son solo algunas de las joyas que te esperan.
</p>

<p class="mt-4">
  Pero el Loira no es solo historia y piedra: también es <strong>gastronomía, vino y naturaleza</strong>. En cada etapa del recorrido podrás degustar quesos artesanos, vinos blancos del <em>Sauvignon</em> o tintos suaves del <em>Cabernet Franc</em>, acompañados de un paisaje de ensueño. 
  Los caminos ciclistas de la <a href="https://www.cycling-loire.com/" target="_blank" rel="noopener noreferrer" class="text-emerald-700 hover:underline">Loire à Vélo</a> te permiten explorar a tu ritmo, mientras que los cruceros fluviales ofrecen una perspectiva tranquila y romántica del valle.
</p>

<p class="mt-4">
  Ya sea que busques arte, historia o descanso, el <strong>Valle del Loira</strong> te ofrece una experiencia única. 
  Planifica tu viaje, sigue las etapas recomendadas y déjate seducir por la magia de los castillos, el murmullo del río y la hospitalidad de su gente.
</p>
</section>

<!-- 🔹 Datos Rápidos del Valle del Loira (con animación al hacer scroll) -->
<section 
  id="datos-loira" 
  class="mt-10 bg-emerald-50 p-6 rounded-xl shadow-md opacity-0 translate-y-6 transition-all duration-700"
>
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
    }, { threshold: 0.2 });

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


<section id="clima" class="mt-10">
  <h3 class="text-2xl font-bold text-gray-700 mb-4">🌦️ Clima en el Valle del Loira</h3>
  <p>El Valle del Loira disfruta de un clima templado oceánico:</p>
  <ul class="list-disc list-inside text-gray-600 mt-3 space-y-2">
    <li>Veranos suaves, ideales para recorrer castillos y jardines.</li>
    <li>Inviernos frescos, con pocas lluvias fuertes.</li>
    <li>Otoño y primavera agradables para paseos y fotografía.</li>
    <li>Prepara ropa ligera en verano y capas en invierno.</li>
  </ul>
</section>

    <section id="consejos" class="mt-12 bg-emerald-50 p-6 rounded-xl shadow">
      <h3 class="text-xl font-bold text-emerald-800 mb-4">📝 Consejos para tu viaje</h3>
      <ul class="list-disc pl-6 space-y-2">
        <li>Alquila un coche para moverte cómodamente entre los castillos.</li>
        <li>Divide tu ruta en etapas de 7 días para disfrutar sin prisas.</li>
        <li>Consulta la web oficial de <a href="https://www.valdeloire-france.com/es" target="_blank" class="text-emerald-600 font-semibold hover:underline">Turismo Valle del Loira</a>.</li>
      </ul>
    </section>
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



  <!-- 🔹 Footer -->
<footer class="bg-gray-800 text-gray-300 py-8 mt-12">
  <div class="container mx-auto px-6 text-center space-y-2">
    <p>&copy; <?= date('Y'); ?> Adrián LAya GArcía. Todos los derechos reservados.</p>
    <p>
      📧 <a href="mailto:superlaya50@gmail.com" class="hover:text-white">supaerlaya50@gmail.com</a>
    </p>
    <p>
      🌐 <a href="https://www.valdeloire-france.com/es" class="hover:text-white">Turismo oficial del Valle del Loira</a>
    </p>
  </div>
</footer>


  <script>feather.replace()</script>

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


<!--https://viajes.chavetas.es/guia/valle-del-loira/mejores-castillos-del-loira-imprescindibles/-->

<!--  https://www.w3schools.com/html/html_formatting.asp Para el SEO -->

<!-- https://www.serprobot.com/serp-check   SEO -->