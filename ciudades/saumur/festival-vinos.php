<?php
$title = "Festival de Vinos de Saumur";
$nombreLugar = "Festival de Vinos de Saumur";
$localidad = "Saumur";
$descripcion = "Festival de vinos en Saumur: catas, rutas, productores locales, música y gastronomía junto al Loira.";
$web_site = "https://alayag82.kesug/valle-del-loira";
$imagenHero = $web_site . "/assets/festival-vinos-saumur-hero.jpg";
$keywords = "Festival de Vinos, Saumur, Catas de Vino, Bodegas Valle del Loira, Gastronomía, Música en Vivo, Eventos en Saumur";
$carpeta = "Ciudades";
$slug = "festival-vinos-saumur";
$twitter = "@ValleLoiraTour";

$url_breadcrums_second = '/val-de-loire/eventos/index.php';
$bread_crums_second = 'Eventos';

$src_google_maps = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86641.4458954602!2d-0.1660751951085395!3d47.26459626250233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4807f0cda39bbc09%3A0x40d37521e0d8900!2s49400%20Saumur%2C%20Francia!5e0!3m2!1ses!2ses!4v1764280005589!5m2!1ses!2ses";

?>


<!DOCTYPE html>
<html lang="es">
<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/estructura/head-generico.php";; ?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Festival de Vinos de Saumur</title>
  <meta name="description" content="Festival de vinos en Saumur: catas, rutas, productores locales, música y gastronomía junto al Loira." />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-900 antialiased">
  <header class="bg-red-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-20 flex items-center justify-between">
        <div class="flex items-center gap-4">
          <div class="w-12 rounded-full bg-white/20 flex items-center justify-center font-bold">S-Fest</div>
          <div>
            <h1 class="text-lg font-semibold">Festival de Vinos de Saumur</h1>
            <p class="text-sm opacity-90">Catas, bodegas, música y gastronomía en el corazón del Valle del Loira</p>
          </div>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="/val-de-loire/index.php" class="hover:underline">Home</a>
          <a href="#programa" class="hover:underline">Programa</a>
          <a href="#productores" class="hover:underline">Productores</a>
          <a href="#entradas" class="hover:underline">Entradas</a>
          <a href="#contacto" class="hover:underline">Contacto</a>
        </nav>

        <div class="flex items-center gap-3">
          <a href="#entradas" class="bg-white text-red-700 px-3 py-1 rounded-md text-sm font-medium">Comprar entradas</a>
        </div>
      </div>
    </div>
  </header>

  <main class="px-4 sm:px-6 lg:px-8 py-10 md:mx-[15em] lg:mx-[15em] max-w-[calc(100%-2rem)]">
    <!-- Grid: left aside, main, right aside -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

      <!-- Left aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4 flex items-center justify-center">
          <?php $alineacion = 2;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

        <div class="bg-white rounded-lg shadow p-4">
          <h3 class="font-semibold">Información rápida</h3>

          <dl class="mt-3 text-sm text-gray-700 space-y-2">
            <div class="flex justify-between">
              <dt>Fecha</dt>
              <dd>4 — 6 de julio</dd>
            </div>

            <div class="flex justify-between">
              <dt>Lugar</dt>
              <dd>Saumur (Plaza central y ribera del Loira)</dd>
            </div>

            <div class="flex justify-between">
              <dt>Acceso</dt>
              <dd>Tranvía, bici y a pie</dd>
            </div>
          </dl>

          <p class="mt-3 text-xs text-gray-500 italic">
            *Datos orientativos, sujetos a cambios según la organización.
          </p>
        </div>


        <div class="bg-white rounded-lg border p-3 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400"><?php /* Publicidad */; ?></small>
            <div class="mt-1"><?php /*Banner   320×100 */ ?>
              <?php /* $alineacion = 2;
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; */ ?>
            </div>
          </div>
        </div>

        <div class="bg-red-700 text-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Suscríbete</h4>
          <p class="mt-2 text-sm">Recibe novedades, lanzamientos y ofertas de catas.</p>
          <form class="mt-3 flex gap-2" onsubmit="event.preventDefault()">
            <input aria-label="Email" type="email" placeholder="tu@email.com" class="flex-1 px-3 py-2 rounded-md text-black" />
            <button class="bg-white/90 text-red-700 px-3 py-2 rounded-md">OK</button>
          </form>
        </div>


      </aside>

      <!-- Main -->
      <section class="lg:col-span-6 space-y-6 max-h-[80vh] ">
        <nav class="text-sm flex items-center justify-between mt-1 mb-2 text-gray-600" aria-label="Breadcrumb">
          <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums-generico.php'; ?>
          <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/google-maps-generico.php'; ?>
        </nav>

        <!-- línea decorativa debajo, ancho completo -->
        <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>

        <article class="space-y-1 w-full max-w-full h-[109vh] overflow-y-auto p-1">

          <article class="bg-white rounded-xl shadow overflow-hidden">
            <img src="https://www.ot-saumur.fr/wp-content/uploads/2023/01/vin-et-vignoble-23-scaled.jpg" alt="Festival de vinos" class="w-full object-cover" />
            <div class="p-6">
              <h2 class="text-2xl font-semibold">Bienvenido al Festival de Vinos de Saumur</h2>

              <p class="mt-3 text-gray-700">
                Tres días dedicados al vino y la gastronomía local: catas, encuentros con productores y música
                en las terrazas junto al Loira. Consulte:
                <a
                  href="https://www.ot-saumur.fr/es/nuestros-destacados/festivini-festival-de-la-cultura-del-vino/"
                  class="text-red-700 font-semibold underline hover:text-red-800"
                  target="_blank">
                  Festivini
                </a>
              </p>

              <div class="mt-4 flex gap-3">
                <a
                  href="#programa"
                  class="px-4 py-2 bg-red-700 text-white rounded-md text-sm transition-all duration-200 hover:bg-red-800">
                  Ver programa
                </a>

                <a
                  href="#entradas"
                  class="px-4 py-2 border border-gray-400 rounded-md text-sm transition-all duration-200 hover:bg-gray-100">
                  Comprar entradas
                </a>
              </div>
            </div>

          </article>

          <!-- Programa -->
          <section id="programa" class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold">Programa destacado</h3>

            <!-- Contenido introductorio -->
            <p class="mt-4 text-gray-700 text-sm">
              Durante el Festival de Vinos de Saumur, encontrarás una serie de actividades cuidadosamente seleccionadas para todos los amantes del vino y la gastronomía. Desde catas magistrales hasta rutas de bodegas y noches de maridaje, cada experiencia está diseñada para ofrecerte una inmersión completa en la cultura vinícola de la región.
            </p>

            <p class="mt-2 text-gray-700 text-sm">
              Además de las catas y recorridos, podrás participar en talleres de maridaje, conocer a productores locales y descubrir variedades de vinos únicas que reflejan la riqueza y tradición vinícola de Saumur. Cada evento ofrece la oportunidad de aprender mientras disfrutas de momentos inolvidables.
            </p>


            <div class="block lg:hidden">
              <?php $alineacion = 2;
              require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
            </div>



            <!-- Actividades -->
            <div class="mt-6 space-y-4">
              <!-- Cata Magistral -->
              <div class="border p-4 rounded-lg">
                <h4 class="font-semibold">Cata Magistral — Vinos de Saumur</h4>
                <p class="mt-2 text-gray-700 text-sm">
                  Guiada por sommeliers expertos, esta experiencia permite descubrir los matices de los vinos locales, aprender sobre técnicas de cata y maridaje, y disfrutar de una selección de etiquetas exclusivas de la región. Ideal tanto para aficionados como para conocedores.
                </p>
                <p class="mt-1 text-sm">
                  Reserva previa, consulte información en el enlace:
                  <a href="https://www.winetourism.com/es/catas-de-queso-y-vino-en-anjou-saumur/"
                    class="text-red-700 font-semibold underline hover:text-red-800">
                    Más info...
                  </a>
                </p>
              </div>

              <!-- Ruta de Bodegas -->
              <div class="border p-4 rounded-lg">
                <h4 class="font-semibold">Ruta de Bodegas — Saumur</h4>
                <p class="mt-2 text-gray-700 text-sm">
                  Recorrido por las bodegas más emblemáticas de la región, permitiendo conocer de cerca los procesos de elaboración del vino, degustar diferentes etiquetas y disfrutar del encanto de los viñedos locales.
                </p>
                <p class="mt-1 text-sm">
                  Reserva previa, consulte información en el enlace:
                  <a href="https://www.winalist.es/cities/saumur"
                    class="text-red-700 font-semibold underline hover:text-red-800">
                    Más info...
                  </a>
                </p>
              </div>

              <!-- Noche de Maridaje -->
              <div class="border p-4 rounded-lg">
                <h4 class="font-semibold">Noche de Maridaje</h4>
                <p class="mt-2 text-gray-700 text-sm">
                  Experiencia única donde los participantes disfrutan de la combinación perfecta entre vinos locales y productos gastronómicos de la región. Guiados por expertos, aprenderás a apreciar cómo los sabores se complementan y descubrirás nuevas sensaciones.
                </p>
                <p class="mt-1 text-sm">
                  Reserva previa, consulte información en el enlace:
                  <a href="https://www.ot-saumur.fr/es/agenda/Noche-de-juegos-con-vino-y-productos-locales-7587840/"
                    class="text-red-700 font-semibold underline hover:text-red-800">
                    Más info...
                  </a>
                </p>
              </div>
            </div>

            <!-- Cierre / mensaje general -->
            <p class="mt-4 text-gray-700 text-sm">
              No importa si eres un aficionado o un experto en vinos, el festival está pensado para todos los públicos. Desde actividades educativas hasta experiencias más lúdicas y gastronómicas, cada visitante encontrará algo que le sorprenda y le permita sumergirse en la esencia del Valle del Loira.
            </p>
          </section>
          <?php
          $alineacion = 4;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
          ?>
          <?php /* https://www.loira-atlantico.com/ */ ?>
          <!-- Productores -->
          <section id="productores" class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold">Productores participantes</h3>
            <div class="mt-4 grid sm:grid-cols-2 gap-4">
              <div class="p-4 border rounded flex items-start gap-4">
                <div class="w-16 bg-gray-100 rounded">
                  <img src="https://cdn.ct-static.com/labels/6c3d44d6-e093-49ab-832b-0395ec223704.jpg" alt=""><?php /* https://www.cellartracker.com/wine.asp?iWine=1609365 */ ?>
                </div>
                <div>
                  <h4 class="font-medium">Domaine Dupont</h4>
                  <p class="text-sm text-gray-600">Blancos secos y espumosos.</p>
                </div>
              </div>

              <div class="p-4 border rounded flex items-start gap-4">
                <div class="w-16 bg-gray-100 rounded">
                  <img src="https://media.winalist.com/prod/uploads/6PkFcWfJXE95.jpg?twic=v1/cover=320x316" alt="">
                </div>
                <div>
                  <h4 class="font-medium">Les Vignes de Loire</h4>
                  <p class="text-sm text-gray-600">Tintos y rosés de producción local.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Entradas -->
          <section id="entradas" class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-xl font-semibold">Entradas</h3>
            <p class="mt-2 text-gray-700">Compra online o en taquilla. Plazas limitadas en actividades con aforo.</p>
            <div class="mt-4 grid sm:grid-cols-2 gap-4">
              <div class="p-4 border rounded">
                <h4 class="font-medium">Entrada general</h4>
                <p class="text-sm text-gray-600 mt-2">Acceso a zona de stands y conciertos.</p>
                <div class="mt-3"><a href="https://boutique.ot-saumur.fr/billetteries-evenements/festivini" class="text-sm px-3 py-2 bg-red-700 text-white rounded">Comprar</a></div>
              </div>
              <div class="p-4 border rounded">
                <h4 class="font-medium">Pase cata</h4>
                <p class="text-sm text-gray-600 mt-2">Incluye catas guiadas y guía de bodegas.</p>
                <div class="mt-3"><a href="https://boutique.ot-saumur.fr/billetteries-evenements/festivini" class="text-sm px-3 py-2 bg-red-700 text-white rounded">Comprar</a></div>
              </div>
            </div>
          </section>
          <?php $alineacion = 4;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </section>

      <!-- Right aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4 flex items-center justify-center block lg:hidden">
          <div class="text-center">
            <small class="text-xs text-gray-400"><?php /* Publicidad */; ?></small>
            <div class="mt-2 text-sm">
              Espacio 300×250
              <?php
              $alineacion = 2;
              require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php";
              ?>
            </div>
          </div>
        </div>


        <div class="bg-white rounded-lg shadow p-4">
          <h4 class="font-semibold">Agenda rápida</h4>

          <ul class="mt-3 text-sm text-gray-700 space-y-2">
            <li><strong>10:00</strong> — Apertura de stands</li>
            <li><strong>12:30</strong> — Show cooking</li>
            <li><strong>18:00</strong> — Cata magistral</li>
          </ul>

          <p class="mt-3 text-xs text-gray-500 italic">
            *Horarios orientativos, pueden modificarse según la programación oficial.
          </p>
        </div>


        <div class="bg-white rounded-lg border p-3 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400"><?php /* Publicidad */; ?></small>
            <div class="mt-1"><?php /*Banner   320×100 */ ?>
              <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

            </div>
          </div>
        </div>

        <?php /* Patrocinadores */
        // ... a dersarrollar ... // 
        /*
        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div> */  ?>

      </aside>

    </div>

    <?php // ... a dersarrollar ... // 
    // require $_SERVER["DOCUMENT_ROOT"] . '/val-de-loire/anuncios/carrusel-leaderboard.php'; 
    ?>


    </div>

    <style>
      @keyframes marquee {
        0% {
          transform: translateX(0);
        }

        100% {
          transform: translateX(-50%);
        }
      }

      .animate-marquee {
        display: flex;
        width: max-content;
        animation: marquee 20s linear infinite;
      }
    </style>

    <script>
      const leaderboard = document.getElementById('leaderboard');
      const closeBtn = document.getElementById('closeLeaderboard');

      // Función para mostrar con fade-in
      function showLeaderboard() {
        leaderboard.style.display = 'block';
        setTimeout(() => {
          leaderboard.classList.add('opacity-100');
          leaderboard.classList.remove('opacity-0');
        }, 50);
      }

      // Función para ocultar con fade-out
      function hideLeaderboard() {
        leaderboard.classList.add('opacity-0');
        leaderboard.classList.remove('opacity-100');
        setTimeout(() => {
          leaderboard.style.display = 'none';
          // Aparece de nuevo a los 3 segundos
          setTimeout(showLeaderboard, 3000);
        }, 700); // igual que transition duration
      }

      // Inicializamos con fade-in
      leaderboard.classList.add('opacity-0');
      window.addEventListener('load', () => {
        setTimeout(() => {
          leaderboard.classList.add('opacity-100');
          leaderboard.classList.remove('opacity-0');
        }, 100);
      });

      closeBtn.addEventListener('click', hideLeaderboard);
    </script>




    <!-- Footer -->
    <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">

        <div>
          <p>© Festival de Vinos de Saumur</p>
          <p class="mt-1">Saumur, Valle del Loira</p>
          <p class="mt-1">Diseño web: <span class="font-medium">Adrián Laya García</span></p>
          <p id="contacto" class="mt-1">
            Contacto:
            <a href="mailto:superlaya50@gmail.com" class="underline hover:text-gray-800">
              superlaya50@gmail.com.com
            </a>
          </p>
        </div>

        <div class="flex items-center gap-4">
          <?php /* <a href="#" class="underline">Cómo llegar</a> */ ?>
          <a href="/val-de-loire/index.php" class="underline hover:text-gray-800">Home</a>
          <a href="/val-de-loire/ciudades/saumur.php" class="underline hover:text-gray-800">Saumur</a>
          <?php /* <a href="#" class="underline hover:text-gray-800">Aviso legal</a> */ ?>
        </div>

      </div>
    </footer>

  </main>
</body>

</html>