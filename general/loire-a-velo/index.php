<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Loire à Vélo — Rutas cicloturistas por el Valle del Loira</title>
  <meta name="description" content="Loire à Vélo: guía completa para recorrer en bicicleta el Valle del Loira. Etapas, alquiler de bicis, alojamiento, consejos, mapas y rutas destacadas." />
  <meta name="keywords" content="Loire à Vélo, Valle del Loira, cicloturismo, rutas en bici, Vouvray, Tours, Chambord, Chenonceau" />
  <meta name="author" content="Tu Nombre / Tu Proyecto" />

  <!-- Open Graph -->
  <meta property="og:title" content="Loire à Vélo — Rutas cicloturistas por el Valle del Loira" />
  <meta property="og:description" content="Guía práctica y planificador para recorrer Loire à Vélo: etapas, mapas, alquiler de bicicletas y consejos." />
  <meta property="og:image" content="https://upload.wikimedia.org/wikipedia/commons/7/79/Loire_bike_path.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Valle del Loira - Rutas" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Loire à Vélo — Rutas cicloturistas por el Valle del Loira" />
  <meta name="twitter:description" content="Guía práctica y planificador para recorrer Loire à Vélo: etapas, mapas, alquiler de bicicletas y consejos." />
  <meta name="twitter:image" content="https://upload.wikimedia.org/wikipedia/commons/7/79/Loire_bike_path.jpg" />

  <!-- Favicon (opcional) -->
  <link rel="icon" href="/favicon.ico" />

  <!-- Tailwind + icons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    /* small tweaks */
    body {
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    .aside-sticky {
      position: sticky;
      top: 1.5rem;
    }

    /* visually separate content blocks on hover */
    .card-hover:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(6, 95, 70, 0.08);
    }
  </style>

  <!-- Structured data: Breadcrumb + WebSite + TouristAttraction -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Valle del Loira - Rutas",
      "url": "https://alayag82.kesug.com/val-de-loire/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://alayag82.kesug.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Inicio",
          "item": "https://alayag82.kesug.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Valle del Loira",
          "item": "https://alayag82.kesug.com/val-de-loire/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Loire à Vélo",
          "item": "https://alayag82.kesug.com/val-de-loire/actividades/loire-a-velo"
        }
      ]
    }
  </script>

</head>

<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-emerald-700 text-white">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
      <div class="flex items-center gap-4">
        <a href="/index.php" class="flex items-center gap-3">
          <span class="bg-white rounded-full p-2 text-emerald-700 shadow"><i class="fas fa-bicycle"></i></span>
          <div>
            <h1 class="text-xl font-extrabold tracking-tight">Loire à Vélo</h1>
            <p class="text-xs text-emerald-200">Rutas ciclistas por el Valle del Loira</p>
          </div>
        </a>
      </div>

      <!-- simple nav -->
      <nav class="hidden md:flex gap-4 items-center text-sm">
        <a href="/val-de-loire/" class="hover:underline">Inicio</a>
        <a href="#rutas" class="hover:underline">Rutas</a>
        <a href="#alquiler" class="hover:underline">Alquiler</a>
        <a href="#faq" class="hover:underline">FAQ</a>
        <a href="#contacto" class="bg-white text-emerald-700 px-3 py-1 rounded shadow hover:opacity-95">Contacto</a>
      </nav>

      <!-- mobile menu button -->
      <div class="md:hidden">
        <button id="btnMobileMenu" aria-label="Abrir menú" class="p-2 rounded bg-emerald-600 hover:bg-emerald-500">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobileMenu" class="hidden bg-emerald-600 text-white">
      <div class="px-4 py-3 space-y-2">
        <a href="/val-de-loire/" class="block">Inicio</a>
        <a href="#rutas" class="block">Rutas</a>
        <a href="#alquiler" class="block">Alquiler</a>
        <a href="#faq" class="block">FAQ</a>
        <a href="#contacto" class="block">Contacto</a>
      </div>
    </div>
  </header>

  <!-- Breadcrumbs -->
  <div class="container mx-auto px-4 mt-4">
    <nav class="text-sm text-gray-600" aria-label="Breadcrumb">
      <ol class="list-reset flex">
        <li><a href="/val-de-loire/index.php" class="hover:underline">Inicio</a></li>
        <li><span class="mx-2">/</span></li>
        <li class="text-gray-900 font-semibold">Loire à Vélo</li>
      </ol>
    </nav>
  </div>

  <!-- Layout: aside left - main - aside right -->
  <div class="container mx-auto px-4 grid grid-cols-12 gap-6 mt-6">

    <!-- LEFT ASIDE -->
    <aside class="hidden lg:block col-span-3">
      <div class="aside-sticky bg-white p-4 rounded-lg shadow">
        <?php $alineacion = 2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        <hr class="my-4">
        <div class="bg-emerald-50 p-4 rounded-xl shadow-md border border-emerald-200">
          <h5 class="text-sm font-semibold text-emerald-700 mb-3 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M12 6a9 9 0 100 18 9 9 0 000-18z" />
            </svg>
            Enlaces útiles
          </h5>

          <ul class="text-sm text-emerald-800 space-y-2">

            <?php /* 
    <li>
      <a href="https://www.loireavelo.fr/en" href="/val-de-loire/general/loire-a-velo.php" 
         target="_blank" class="text-emerald-600 hover:underline">
         Sitio oficial Loire à Vélo
      </a>
    </li>
    */ ?>

            <li>
              <a <?php /* href="https://www.tourisme-valdeloire.fr/" */ ?>
                href="/val-de-loire/general/oficinas-de-turismo.php"
                target="_blank"
                class="hover:underline hover:text-emerald-900 font-medium">
                ➜ Oficinas de turismo
              </a>
            </li>

            <li>
              <a href="#alquiler"
                class="hover:underline hover:text-emerald-900 font-medium">
                ➜ Alquiler de bicis
              </a>
            </li>
            <li>
              <a href="/val-de-loire/general/loire-a-velo/itinerarios-sugeridos.php"
                class="hover:underline hover:text-emerald-900 font-medium">
                ➜ Itinerarios sugeridos
              </a>
            </li>
            <li>
              <a href="/val-de-loire/general/loire-a-velo/alojamientos-para-ciclistas.php"
                class="hover:underline hover:text-emerald-900 font-medium">
                ➜ Alojamiento para ciclistas
              </a>
            </li>


            <li>
              <a href="/val-de-loire/chateaux/chateau-de-chambord/index.php"
                class="hover:underline hover:text-emerald-900 font-medium">
                🏰 Chambord</a>
            </li>
            <li>
              <a href="/val-de-loire/chateaux/chenonceau.php" class="hover:underline hover:text-emerald-900 font-medium">
                🌉 Chenonceau</a>
            </li>
            <li>
              <a href="/val-de-loire/localidades/tours.php" class="hover:underline hover:text-emerald-900 font-medium">
                🏙️ Tours</a>
            </li>
          </ul>
        </div>

      </div>
    </aside>

    <!-- MAIN -->
    <main class="col-span-12 lg:col-span-6 h-auto lg:h-[100vh] overflow-y-auto px-4 space-y-12">


      <!-- Hero -->
      <section class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="relative">
          <img src="https://www.cyclespleinair.fr/uploads/loire-velo-parcours-65b77aca97325.webp" alt="Loire à Vélo" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-gradient-to-tr from-emerald-800/60 to-transparent flex items-center justify-center">
            <div class="text-center text-white px-4">
              <h2 class="text-3xl md:text-4xl font-extrabold">Loire à Vélo</h2>
              <p class="mt-2 text-sm md:text-base">Recorre más de 800 km de rutas señalizadas entre los castillos, viñedos y pueblos del Valle del Loira.</p>
              <div class="mt-4 flex justify-center gap-3">
                <a href="#rutas" class="bg-white text-emerald-700 px-4 py-2 rounded font-semibold hover:shadow">Ver rutas</a>
                <a href="#planificador" class="bg-emerald-700/90 px-4 py-2 rounded border border-white/20 hover:bg-emerald-600">Planifica tu etapa</a>
              </div>
            </div>
          </div>
        </div>
      </section><?php // https://www.cyclespleinair.fr/actualites/la-loire-a-velo-telecharger-carte-pdf-conseils 
                ?>

      <!-- Intro -->
      <section class="mt-6 bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-2xl font-semibold text-emerald-700 mb-3">¿Qué es Loire à Vélo?</h3>
        <p class="text-gray-700 leading-relaxed">
          <strong>Loire à Vélo</strong> es una red de rutas ciclistas bien señalizadas que recorren la ribera del río Loira.
          Diseñada para ciclistas de todos los niveles, la ruta conecta pueblos, ciudades históricas y algunos de los castillos más famosos de Francia.
          Aquí encontrarás información práctica, etapas recomendadas, alquileres, alojamientos y consejos de seguridad.
        </p>

        <div class="mt-4 grid sm:grid-cols-2 gap-4">
          <div class="bg-emerald-50 p-3 rounded">
            <h4 class="text-sm font-semibold">Distancia total</h4>
            <p class="text-gray-700 text-sm">Aprox. 800 km (dependiendo de las variantes).</p>
          </div>
          <div class="bg-emerald-50 p-3 rounded">
            <h4 class="text-sm font-semibold">Nivel</h4>
            <p class="text-gray-700 text-sm">Ilimitado: desde rutas planas para familias hasta tramos para cicloturistas experimentados.</p>
          </div>
        </div>
      </section>

      <!-- Rutas destacadas -->
      <section id="rutas" class="mt-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">🔹 Rutas destacadas</h3>

        <div class="grid gap-4">
          <article class="bg-white p-4 rounded-lg shadow-sm card-hover">
            <h4 class="text-lg font-semibold text-emerald-700">Etapa: Orléans → Blois</h4>
            <p class="text-sm text-gray-700 mt-1">Paisajes de ribera, pueblos con patrimonio y acceso a castillos como Blois y Chambord.</p>
            <p class="mt-2 text-xs text-gray-500">Distancia: 70–90 km (puede dividirse en 2 jornadas)</p>
            <div class="mt-3 flex gap-3">
              <a href="#planificador" class="text-emerald-700 hover:underline text-sm">Planificar etapa</a>
              <a href="https://www.loireavelo.fr/en" target="_blank" class="text-sm hover:underline">Más info oficial</a>
            </div>
          </article>

          <article class="bg-white p-4 rounded-lg shadow-sm card-hover">
            <h4 class="text-lg font-semibold text-emerald-700">Etapa: Tours → Chinon</h4>
            <p class="text-sm text-gray-700 mt-1">Viñedos, bodegas y encantadores pueblos medievales.</p>
            <p class="mt-2 text-xs text-gray-500">Ideal para degustaciones y paradas gastronómicas.</p>
          </article>

          <article class="bg-white p-4 rounded-lg shadow-sm card-hover">
            <h4 class="text-lg font-semibold text-emerald-700">Ruta familiar: Vouvray y alrededores</h4>
            <p class="text-sm text-gray-700 mt-1">Tramos cortos, seguros y con servicios en ruta: perfectos para familias y principiantes.</p>
          </article>
        </div>
      </section>

      <!-- Planificador / CTA -->
      <section id="planificador" class="mt-6 bg-emerald-50 p-4 rounded-lg">
        <h3 class="text-lg font-semibold text-emerald-700">🗺️ Planifica tu viaje</h3>
        <p class="text-gray-700 text-sm mt-1">Selecciona distancias diarias realistas, reserva alojamientos con antelación y comprueba disponibilidad de alquiler de bicicletas.</p>
        <div class="mt-3 flex gap-3">
          <a href="#alquiler" class="bg-white text-emerald-700 px-3 py-2 rounded shadow-sm">Alquiler de bicis</a>
          <a href="#contacto" class="bg-emerald-700 text-white px-3 py-2 rounded">Contactar guía</a>
        </div>
      </section>

      <!-- Alquiler y servicios -->
      <section id="alquiler" class="mt-6 bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-xl font-semibold text-emerald-700 mb-2">🔧 Alquiler, reparación y servicios</h3>

        <div class="grid md:grid-cols-2 gap-4">
          <div class="p-4 border rounded">
            <h4 class="font-semibold">Alquiler de bicicletas</h4>
            <p class="text-sm text-gray-700 mt-1">E-bikes, híbridas y bicicletas de paseo. Reserva online para recoger en Tours, Blois o Orléans.</p>
            <p class="text-xs text-gray-500 mt-2">Precios aproximados: 20–40€/día (según tipo).</p>
            <a href="https://www.valledelloira-francia.es/planificar/servicios-de-itinerancia/alquiler-de-bicis/"
              target="_blank"
              class="text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full text-sm hover:bg-emerald-200 transition">
              Más info…
            </a>


          </div>

          <div class="p-4 border rounded">
            <h4 class="font-semibold">Transporte de equipaje</h4>
            <p class="text-sm text-gray-700 mt-1">Servicio para llevar tu equipaje entre alojamientos (ideal si prefieres rodar ligero).</p>
            <a href="https://www.valledelloira-francia.es/planificar/servicios-de-itinerancia/traslado-equipaje/"
              target="_blank"
              class="text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-full text-sm hover:bg-emerald-200 transition">
              Más info…
            </a>
          </div>
        </div>
      </section>

      <!-- Gallery -->
      <section id="galeria" class="mt-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-3">📸 Galería</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <img src="https://www.cyclespleinair.fr/uploads/loire-velo-parcours-65b77aca97325.webp" alt="Ruta en bicicleta por el Loira" class="w-full h-48 object-cover">
            <figcaption class="p-3 text-sm text-gray-600">Ruta ciclista junto al Loira — <br>Fuente: cyclespleinair.fr</figcaption>
          </figure>
          <figure class="bg-white rounded-lg overflow-hidden shadow">
            <?php /* https://www.enbicipormadrid.es/2019/09/vacaciones-enbiciadas-recorriendo-el.html */ ?>
            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj9YVIOxCZyjQp9CAHOmoyGIQF-dlk9emJ8uDZySU8DmcDimXXsBK2NRTrh6oLVP_2kBEXy6jsWPtDNNIVsp9FL8z8Ai8Ts9mxD3WitRK7R79zdiKCbh-f_eUTuHDny7WxWxUIvoJrt9KGd/s550/Foto+1.jpg" alt="Castillo y bicis" class="w-full h-48 object-cover">
            <figcaption class="p-3 text-sm text-gray-600">Pausa en el castillo de Ussé — <br>Fuente: googleusercontent.com</figcaption>
          </figure>
        </div>
      </section>

      <!-- FAQ -->
      <section id="faq" class="mt-6 bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-xl font-semibold text-emerald-700 mb-3">❓ Preguntas frecuentes</h3>

        <details class="mb-3">
          <summary class="font-semibold">¿Necesito experiencia para recorrer Loire à Vélo?</summary>
          <p class="mt-2 text-gray-700">No necesariamente. Hay tramos fáciles para familias y rutas más exigentes para cicloturistas experimentados.</p>
        </details>

        <details class="mb-3">
          <summary class="font-semibold">¿Se puede hacer en e-bike?</summary>
          <p class="mt-2 text-gray-700">Sí. Las e-bikes facilitan tramos largos y permiten disfrutar más de las paradas culturales.</p>
        </details>

        <details class="mb-3">
          <summary class="font-semibold">¿Dónde dormir?</summary>
          <p class="mt-2 text-gray-700">Hay campings, gîtes, hoteles y alojamientos especializados en cicloturismo a lo largo de la ruta.</p>
        </details>
      </section>

      <?php $alineacion = 4;
      require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

      <!-- Mapa -->
      <section class="mt-6 bg-white p-6 rounded-xl shadow-sm">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">🗺️ Mapa general</h3>
        <div class="w-full aspect-video rounded overflow-hidden shadow">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1378435.6346922456!2d-0.6242112846110925!3d47.56278593194933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fd31c40ddaa889%3A0xd49789bfb849e842!2sValle%20del%20Loira%2C%20Francia!5e0!3m2!1ses!2ses!4v1763044604574!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <p class="text-sm text-gray-500 mt-2">Mapa ilustrativo. Consulta el <a href="https://www.loireavelo.fr/en" target="_blank" class="hover:underline text-emerald-700">sitio oficial</a> para navegaciones oficiales y descargas GPS.</p>
      </section>

      <?php /*
      <!-- Contact / Subscribe -->
      <section id="contacto" class="mt-6 bg-emerald-50 p-6 rounded-xl shadow-sm">
        <h3 class="text-xl font-semibold text-emerald-700">✉️ Contacto & Suscripción</h3>
        <p class="text-sm text-gray-700 mt-1">¿Quieres una guía personalizada o recibir novedades? Escríbenos o suscríbete.</p>

        <form action="#" method="post" class="mt-4 grid gap-3 sm:grid-cols-2">
          <input name="nombre" placeholder="Tu nombre" class="p-2 rounded border" required>
          <input name="email" type="email" placeholder="tu@correo.com" class="p-2 rounded border" required>
          <textarea name="mensaje" rows="3" placeholder="¿En qué podemos ayudarte?" class="col-span-2 p-2 rounded border"></textarea>
          <div class="col-span-2 flex gap-3">
            <button class="bg-emerald-700 text-white px-4 py-2 rounded">Enviar</button>
            <button type="button" class="border px-4 py-2 rounded" onclick="window.location.href='/'">Ir a la página principal</button>
          </div>
        </form>
      </section> */ ?>

    </main>

    <!-- RIGHT ASIDE -->
    <aside class="hidden lg:block col-span-3">
      <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
    </aside>

  </div>

  <!-- Footer -->
  <footer class="mt-10 bg-blue-700 text-blue-100 pt-6 pb-6 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

      <!-- Columna izquierda -->
      <div>
        <p class="font-medium">© <?= date("Y") ?> — Loire à Vélo (guía no oficial)</p>
        <?php /* <p class="mt-1">Alojamientos, Valle del Loira</p> */ ?>

        <!-- Tu info -->
        <p class="mt-3 text-sm text-gray-200">
          Web creada por <a id="contacto" href="/val-de-loire/contacto.html" class="underline hover:text-white font-semibold">
            Adrián Laya García
          </a>
        </p>


      </div>

      <!-- Enlaces -->
      <div class="flex items-center gap-4">
        <a href="https://www.facebook.com/" target="_blank" class="hover:text-emerald-700"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="hover:text-emerald-700"><i class="fab fa-instagram"></i></a>
        <a href="#" class="hover:underline">Privacidad</a><?php /* href="/val-de-loire/privacy.php" */ ?>
        <a href="/val-de-loire/index.php" class="underline hover:text-white">Home</a>
        <?php /* <a href="#" class="underline hover:text-white">Aviso legal</a> */ ?>
      </div>

    </div>
  </footer>


  <!-- Small script: mobile menu -->
  <script>
    document.getElementById('btnMobileMenu').addEventListener('click', function() {
      const m = document.getElementById('mobileMenu');
      m.classList.toggle('hidden');
    });
  </script>

</body>

</html>