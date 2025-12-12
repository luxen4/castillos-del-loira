<?php 
$title='Web-site';
$nombreLugar = "";
$descripcion = "Descubre los castillos más impresionantes del Valle del Loira en Francia: Chambord, Chenonceau, Villandri, Cheverny, Ussé y más. Guía de viaje, consejos y rutas.";
$keywords = "Valle del Loira, castillos Francia, Chambord, Chenonceau, Villandry, turismo Francia, ruta castillos";
$carpeta = "";
$slug = "index";
$imagenHero = "";
$twitter = "@AdrianTwitter";
?>

<!DOCTYPE html>
<html lang="es">


<?php require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/estructura/head-generico.php";
require 'paginas/index/schemas/index-schemas-head.php' // Se debe meter en el head; 
?>



<body class="bg-gray-50 text-gray-800 leading-relaxed">
<!-- verify-admitad: "e3b1ce5433" -->

  <?php require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/estructura/header/enlaces-principales-generico.php"; ?>





  <!-- 🔹 Layout con 3 columnas: lateral-izquierdo / contenido / lateral-derecho -->
  <div class="container mx-auto px-1 py-10 grid grid-cols-1 lg:grid-cols-12 gap-8">

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
          <a href="#castillos-imprescindibles" class="hover:text-emerald-700 underline">
            Castillos Imprescindibles
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


      <section class="space-y-6">
        <h2 class="text-2xl font-bold text-emerald-700 mb-4">✨ El Encanto del Valle del Loira</h2>



        <p>
          Recorre las
          <a href="/val-de-loire/general/rutas-loire/index.php"
            class="text-emerald-600 font-semibold underline hover:text-emerald-800 transition">
            Rutas
          </a>
          de los castillos más bellos de Francia: Chambord, Chenonceau, Villandry y muchos más.
          Vive historia, arte y naturaleza en cada etapa.
        </p>





        <p>
          El <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a> es un viaje a través de la historia, el arte y la naturaleza de Francia. Desde <ins>Nantes hasta Orleans</ins>, el río Loira serpentea entre bosques, viñedos y aldeas que parecen detenidas en el tiempo.
          A lo largo de sus orillas, se levantan más de <strong>80 castillos</strong> que fueron residencia de reyes, nobles y artistas del Renacimiento francés, cada uno con su propio encanto y leyenda.
          <a href="#mapa" class="text-emerald-700 hover:underline">
            🗺️ Ver Mapa
          </a>

        </p>

        <p>
          En esta región declarada <strong>Patrimonio Mundial por la UNESCO</strong>, se mezclan los paisajes bucólicos con la elegancia arquitectónica. Los jardines geométricos de
          <a href="/val-de-loire/chateaux/Villandry.php" class="text-emerald-700 hover:underline">Villandry</a>, los reflejos sobre el agua del majestuoso
          <a href="chateaux/chenonceau.php" class="text-emerald-700 hover:underline">Chenonceau</a> o las torres de cuento de
          <a href="chateaux/Ussé.php" class="text-emerald-700 hover:underline">Ussé</a> —que inspiraron <em>La Bella Durmiente</em>— son solo algunas de las joyas que te esperan.
        </p>

        <p>
          Pero el Loira no es solo historia y piedra: también es <strong>gastronomía, vino y naturaleza</strong>. En cada etapa del recorrido podrás degustar quesos artesanos, vinos blancos del <em>Sauvignon</em> o tintos suaves del <em>Cabernet Franc</em>, acompañados de un paisaje de ensueño.
          Los caminos ciclistas de la
          <a href="/val-de-loire/actividades/loire-a-velo.php" target="_blank" rel="noopener noreferrer" class="text-emerald-700 hover:underline">Loire à Vélo</a>
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
          Ya sea que busques arte, historia o descanso, el <a class='text-emerald-600 font-semibold underline hover:text-emerald-800 transition' href='/val-de-loire/index.php'><strong>Valle del Loira</strong></a> te ofrece una experiencia única.
          Planifica tu viaje, sigue las etapas recomendadas y déjate seducir por la magia de los castillos, el murmullo del río y la hospitalidad de su gente.
        </p>
      </section>


      <?php 
      $archivoPublicidad = "sneakers"; $alineacion=4; $numeroAleatorio = 5;
      require "anuncios/amazon/carrusel-horizontal-generico-sneakers.php"; ?>


      <?php
      require $_SERVER["DOCUMENT_ROOT"] . '/val-de-loire/paginas/index/main/sections/data-datos-rapidos.php'; ?>

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

      <?php require "estructura/index/main/sections/duracion-y-consejos.php"; ?>

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


      <section id="castillos-imprescindibles" class="mt-10">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">🏰 Castillos Imprescindibles</h3>
        <p class="text-gray-700 mb-6">
          El Valle del Loira es conocido como "el jardín de Francia" y alberga más de 300 castillos que nos transportan a épocas de reyes y caballeros.
          Desde majestuosas residencias renacentistas hasta fortalezas medievales, cada castillo tiene su propia historia y encanto único.
          A continuación, te mostramos algunos de los más impresionantes que no puedes perderte en tu viaje.
        </p>

        <div class="grid md:grid-cols-3 gap-4">
          <?php require 'paginas/index/data/index-castillos-imprescindibles.php'; ?>
          <?php require 'paginas/index/templates/index-castillos-imprescindibles.php'; ?>
        </div>
      </section>

      <?php require "estructura/index/main/sections/ciudades-principales.php"; // Ejemplar 
      ?>

      <?php require "estructura/index/main/sections/clima.php"; ?>



    </main>

    <!-- 📰 Columna 3: Sidebar derecho -->
    <aside class="lg:col-span-3 bg-gray-50 p-6 rounded-xl shadow space-y-6">
      <h3 class="text-lg font-bold text-gray-700">📰 Noticias y Enlaces</h3>
      <ul class="list-disc pl-6 space-y-2 text-gray-600">
        <li><a href="https://www.france.fr/es" target="_blank" class="hover:text-emerald-700 underline">Turismo de Francia</a></li>
        <li><a href="/val-de-loire/general/noticias.php" target="_blank" class="hover:text-emerald-700 underline">Noticias Valle del Loira</a></li>
        <li><a href="/val-de-loire/ciudades/nantes.php" target="_blank" class="hover:text-emerald-700 underline">Nantes Turismo</a></li>
      </ul>

      <div class="text-center">
        <img src="data:image/svg+xml,%3Csvg fill='none' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 382 302' width='56' height='64'%3E%3Cpath d='M98.273 125.538c-5.904 0-10.574 4.553-10.574 10.574s4.67 10.574 10.574 10.574 10.574-4.553 10.574-10.574-4.67-10.574-10.574-10.574zm60.37-51.987h-37.392V55.594h33.329V37.637h-33.329V19.925h36.775V1.84h-56.944v89.795h57.561V73.551zm-41.668 54.2c5.904 0 10.574-4.553 10.574-10.574s-4.67-10.574-10.574-10.574-10.575 4.553-10.575 10.574 4.671 10.574 10.575 10.574zM38.498 93.475c13.042 0 24.478-6.638 31.243-16.85v15.01h17.713V41.701H39.977v17.222h19.925c-1.84 9.223-9.968 16.362-19.808 16.362-10.947 0-19.808-8.862-19.808-21.776V40.222c0-12.67 9.468-22.02 22.754-22.02 10.33 0 19.553 5.659 22.627 13.903l18.702-6.52C79.199 9.84 62.476 0 43.168 0 18.818 0 .606 16.361.606 40.222v13.287c.01 22.988 16.978 39.966 37.892 39.966zm172.909-66.401h-19.903v28.69h19.903v-28.69zM235.396 1.84h-68.147v18.085h68.147V1.84zM33.829 195.887h20.17v-34.063l33.817-55.721H65.061l-21.275 36.775-21.032-36.775H0l33.829 55.966v33.818zM211.407 62.923h-19.903v28.68h19.903v-28.68zM364.87 195.887l-24.478-34.318c11.936-3.692 20.297-14.149 20.297-26.935 0-16.234-13.403-28.542-30.382-28.542h-11.808v18.201h11.074c5.904 0 10.457 4.671 10.457 10.819 0 6.149-4.553 10.83-10.457 10.83h-11.074v17.222l21.893 32.723h24.478zm-99.964 14.35h-29.648v89.912h29.648c27.796 0 47.477-19.063 47.477-44.892 0-25.829-19.681-45.02-47.477-45.02zm1.595 71.827h-11.074v-53.753h11.074c15.01 0 25.212 11.563 25.212 26.935 0 15.372-10.202 26.818-25.212 26.818zm78.104-17.956h33.328v-17.957h-33.328v-17.712h36.775v-18.074h-56.945v89.784h57.562v-18.085h-37.392v-17.956zm-32.137-98.582-10.426-14.776 10.287-14.946-10.425-14.766 10.298-14.935-20.797.01-10.298 15.095 10.436 14.777-10.298 14.946 10.436 14.765-10.297 14.957 11.074 15.372h21.02l-11.308-15.542 10.298-14.957zm-45.924-4.564v-54.859h-20.053v55.232c0 10.329-7.383 17.957-17.467 17.957-10.085 0-17.468-7.628-17.468-17.957v-55.232h-20.052v54.859c0 21.159 15.872 36.776 37.52 36.776 21.648 0 37.52-15.627 37.52-36.776zM156.452 265.586c0 10.33-7.383 17.957-17.468 17.957-10.084 0-17.467-7.627-17.467-17.957v-55.232h-20.053v54.86c0 21.159 15.872 36.775 37.52 36.775 21.649 0 37.52-15.616 37.52-36.775v-54.86h-20.052v55.232zm-116.475 1.851h19.925c-1.84 9.223-9.968 16.361-19.808 16.361-10.946 0-19.807-8.861-19.807-21.775v-13.287c0-12.67 9.467-22.021 22.754-22.021 10.33 0 19.553 5.66 22.627 13.904l18.701-6.521c-5.17-15.744-21.892-25.584-41.2-25.584-24.35 0-42.563 16.361-42.563 40.222v13.287C.606 285.022 17.584 302 38.488 302c13.042 0 24.478-6.638 31.244-16.85v15.01h17.712v-49.935H39.977v17.212z' fill='%23F53'/%3E%3Cpath d='M132.102 104.252v18.946c14.765 0 26.446 12.053 26.446 27.797s-11.681 27.797-26.446 27.797c-14.755 0-26.446-12.053-26.446-27.797h-20.67c0 26.201 20.915 46.743 47.105 46.743 26.201 0 47.105-20.542 47.105-46.743 0-26.202-20.893-46.743-47.094-46.743zm82.497 148.377c2.978-2.691 7.968-7.191 7.968-15.435 0-8.245-4.99-12.744-7.968-15.436a9.787 9.787 0 0 0-.373-.33c-1.489-1.563-1.744-3.808-1.776-4.872v-6.319h-20.201v8.404h.01c0 .107-.01.202-.01.309 0 8.244 4.989 12.744 7.967 15.435 2.139 1.936 2.139 2.032 2.139 2.809 0 .776 0 .872-2.139 2.808-2.861 2.585-7.574 6.862-7.925 14.532h-.021c0 .148-.021.287-.021.425 0 .085.01.16.01.234 0 .085-.01.16-.01.234 0 .149.01.287.021.426h.021c.351 7.67 5.064 11.946 7.925 14.531 2.139 1.936 2.139 2.032 2.139 2.808 0 .777 0 .873-2.139 2.809-2.978 2.691-7.967 7.191-7.967 15.435 0 .107 0 .213.01.309h-.01v8.404h20.201v-6.319c.032-1.053.287-3.308 1.776-4.872.117-.107.234-.213.373-.33 2.978-2.691 7.968-7.191 7.968-15.436 0-8.244-4.99-12.744-7.968-15.435-1.904-1.713-2.117-1.989-2.138-2.564.021-.574.234-.851 2.138-2.564z' fill='%23F53'/%3E%3C/svg%3E" alt="Castillo del Loira" class="rounded-lg shadow">
        <p class="text-gray-500 text-xs mt-2 inline-flex items-center justify-center gap-1">
          🤝 <span>Colabora con nuestra web mediante estos enlaces</span>
        </p>
        <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

      </div>
    </aside>

  </div>

  <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/galeria-imagenes-carrusel-automatico.php"; ?>
  <?php // require 'estructura/footer/footer-generico.php'; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico-2.php'; ?>



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