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
<!-- 🔹 Contenido Principal con Sidebar -->
<div class="container mx-auto px-6 py-10 flex flex-col md:flex-row gap-8">

  <!-- 🔹 Sidebar / Aside -->
<aside class="w-full md:w-64 bg-emerald-50 p-6 rounded-xl shadow-lg flex-shrink-0">
  <h3 class="text-xl font-bold text-emerald-700 mb-4">🏙️ Ciudades y Castillos</h3>

  <!-- Ciudades Principales -->
  <div class="mb-6">
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

  <!-- Castillos Destacados -->
  <div class="mb-6">
    <h4 class="font-semibold text-gray-700 mb-2">Castillos Destacados</h4>
    <ul class="list-disc list-inside text-gray-600 space-y-1">
      <li><a href="chateaux/Chambord.php" class="hover:text-emerald-700 underline">Château de Chambord</a></li>
      <li><a href="chateaux/Chenonceau.php" class="hover:text-emerald-700 underline">Château de Chenonceau</a></li>
      <li><a href="chateaux/Villandri.php" class="hover:text-emerald-700 underline">Château de Villandri</a></li>
      <li><a href="chateaux/Cheverny.php" class="hover:text-emerald-700 underline">Château de Cheverny</a></li>
      <li><a href="chateaux/Usse.php" class="hover:text-emerald-700 underline">Château d'Ussé</a></li>
    </ul>
  </div>

  <!-- Etapas -->
  <div>
    <h4 class="font-semibold text-gray-700 mb-2">Etapas</h4>
    <ul class="list-disc list-inside text-gray-600 space-y-1">
      <li><a href="etapas/1-etapa-nantes-angers.php" class="hover:text-emerald-700 underline">Nantes y Angers</a></li>
      <li><a href="etapas/2-etapa-angers-saumur.php" class="hover:text-emerald-700 underline">Angers y Saumur</a></li>
      <li><a href="etapas/3-etapa-saumur-chinon-langeais.php" class="hover:text-emerald-700 underline">Saumur, Chinon y Langeais</a></li>
      <li><a href="etapas/4-etapa-tours-amboise.php" class="hover:text-emerald-700 underline">Tours y Amboise</a></li>
      <li><a href="etapas/5-etapa-amboise-blois.php" class="hover:text-emerald-700 underline">Amboise y Blois</a></li>
      <li><a href="etapas/6-etapa-blois-orleans.php" class="hover:text-emerald-700 underline">Blois y Orleans</a></li>
    </ul>
  </div>

<!-- ✅ Botones de acción -->
<div class="mt-6 text-center space-x-4">
  <!-- Botón principal: Alojamientos -->
  <a href="paginas/alojamientos.php" 
     class="inline-block bg-emerald-600 text-white px-1 py-1 rounded-lg font-semibold shadow hover:bg-emerald-700 transition-colors duration-300">
     🛎️ Alojamientos
  </a>

  <!-- Botón secundario: Formulario -->
  <a href="formulario.html" 
     class="inline-block px-1 py-1 bg-white text-emerald-600 font-medium rounded-lg shadow hover:bg-gray-100 transition-colors duration-300">
     ✍️ Ir al formulario
  </a>
</div>


  <!-- ✅ Botón Oficinas de Turismo -->
  <div class="mt-6 text-center">
    <a href="paginas/oficinas-turismo.php" 
       class="inline-block bg-blue-600 text-white px-1 py-1 rounded-lg font-semibold shadow hover:bg-blue-700 transition">
       🗺️ Oficinas de Turismo
    </a>
  </div>

</aside>


  <!-- 🔹 Main Content -->
  <main class="flex-1 space-y-10">
    <!-- 🔹 Introducción -->
    <section>
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">✨ El Encanto del Valle del Loira</h2>
      <p>El <strong>Valle del Loira</strong> se encuentra en Francia y es famoso por la riqueza, variedad y cantidad de castillos que lo convierten en un destino turístico único. Desde <ins>Nantes hasta Orleans</ins>, el río Loira nos acompaña en un viaje inolvidable.</p>
    </section>

    <!-- 🔹 Galería de Castillos -->
    <section class="mt-10">
      <h3 class="text-xl font-bold text-gray-700 mb-6">🏰 Castillos Destacados</h3>
      <div class="grid md:grid-cols-3 gap-6">

        <?php require 'paginas/index/data/index-castillos-destacados.php'; ?>
        <?php require 'paginas/index/templates/index-castillos-destacados.php'; ?>

      </div>
    </section>

    <!-- 🔹 Consejos -->
    <section id="consejos" class="mt-12 bg-emerald-50 p-6 rounded-xl shadow">
      <h3 class="text-xl font-bold text-emerald-800 mb-4">📝 Consejos para tu viaje</h3>
      <ul class="list-disc pl-6 space-y-2">
        <li>Alquila un coche para moverte cómodamente entre los castillos.</li>
        <li>Elige hospedajes estratégicos para ahorrar tiempo y kilómetros.</li>
        <li>Divide tu viaje en etapas de 7 días para disfrutar con calma.</li>
        <li>Consulta opciones oficiales en <a href="https://www.valdeloire-france.com/es" target="_blank" class="text-emerald-600 font-semibold hover:underline">Turismo Valle del Loira</a>.</li>
      </ul>
    </section>

    <!-- 🔹 Etapas -->
    <section class="mt-12">
      <h3 class="text-2xl font-bold text-emerald-700 mb-6 text-center">📌 Etapas de la Ruta del Valle del Loira</h3>
      <div class="grid gap-6 md:grid-cols-3 max-w-5xl mx-auto">
        <a href="etapas/1-etapa-nantes-angers.php" class="block p-6 bg-white rounded-xl shadow hover:shadow-lg hover:bg-emerald-50 transition text-center">
          <h4 class="text-lg font-semibold text-emerald-700">Etapa: Nantes – Angers</h4>
          <p class="text-gray-600 mt-2">Descubre la entrada occidental del Valle del Loira, con su historia y paisajes.</p>
        </a>
        <a href="etapas/2-etapa-angers-saumur.php" class="block p-6 bg-white rounded-xl shadow hover:shadow-lg hover:bg-emerald-50 transition text-center">
          <h4 class="text-lg font-semibold text-emerald-700">Etapa: Angers – Saumur</h4>
          <p class="text-gray-600 mt-2">Explora castillos medievales y viñedos entre Angers y Saumur.</p>
        </a>
      </div>
    </section>

    <!-- 🔹 Mapa -->
    <section id="mapa" class="mt-12">
      <h3 class="text-2xl font-bold text-emerald-700 mb-4 text-center">🗺️ Descubre el Valle del Loira</h3>
      <div class="w-full h-[500px] rounded-xl overflow-hidden shadow-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975856.9298516652!2d0.8322526227083755!3d47.50063815194359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1759333328793!5m2!1ses!2ses" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-full"></iframe>
      </div>
      <p class="mt-4 text-center text-gray-600">Explora los <strong>castillos del Valle del Loira</strong>, sus paisajes y ciudades históricas en este mapa interactivo.</p>
    </section>

  </main>
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