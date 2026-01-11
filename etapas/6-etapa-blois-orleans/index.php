<?php 
$slug_castillos_cercanos_csv= 'chateau-de-chambord'; ?>

<!DOCTYPE html>
<html lang="es">


  <?php 
  $title='Etapa Blois - Orleans';
  $carpeta='etapas'; 
  $slug='6-etapa-blois-orleans/index';
  require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head/index.php"; ?>

<body class="bg-gray-50 text-gray-800 font-sans">

  <?php $etapa = 'Blois – Orléans'; 
  //require "../estructura/header/header-inicio-faqs.php"; 
  require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-inicio-faqs.php"; ?>
  
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/audio/musica-fondo.php"; ?>



  <!-- LAYOUT PRINCIPAL: asides a los lados y main en el centro -->
  <div class="container mx-auto px-4 grid grid-cols-12 gap-6 mt-6">

    <!-- ASIDE IZQUIERDO (solo escritorio) -->
    <aside class="hidden lg:block col-span-2">
      <div class="aside-sticky bg-white p-4 rounded-lg shadow">
        <h4 class="font-semibold text-emerald-700 mb-2">Publicidad</h4>
        <div class="h-40 bg-gray-100 rounded flex items-center justify-center text-gray-500">
          AD 160×600
        </div>
        <hr class="my-4" />
        <p class="text-sm text-gray-600">Widget o enlaces rápidos</p>
      </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="col-span-12 lg:col-span-8">
      <article class="bg-white p-1 rounded-lg shadow mb-6">
        <h2 class="text-2xl font-bold text-emerald-700 mb-3">Contenido principal</h2>

        <p class="text-lg md:text-xl text-gray-700 mb-4">
          Esta etapa recorre el corazón del Valle del Loira, desde la histórica ciudad de <a href="../../localidades/chateau-royal-de-blois/index.php" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Blois</a> hasta la majestuosa <a href="../../localidades/orleans.php" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Orléans</a>.
          A lo largo del recorrido, podrás admirar castillos renacentistas y medievales, ríos serpenteantes, jardines impresionantes y paisajes que capturan la esencia de Francia.
        </p>

        <p class="text-lg md:text-xl text-gray-700 mb-4">
          Entre los puntos Imprescindibles se encuentran:
        </p>

        <ul class="list-disc list-inside text-gray-700 mb-4">
          <li><a href="../../chateaux/chenonceau.php" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Castillo de Chenonceau</a>, famoso por su arquitectura sobre el río Cher y sus jardines renacentistas.</li>
          <li><a href="../../chateaux/clos-luce.php" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Clos Lucé</a>, la última residencia de Leonardo da Vinci, con exposiciones interactivas y jardines temáticos.</li>
          <li><a href="../../chateaux/chateau-royal-de-amboise.php" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Castillo de Amboise</a>, un lugar histórico con vistas panorámicas del Loira y salas decoradas del Renacimiento.</li>
          <li><a href="/val-de-loire/general/rutas-loire.php#rutas-castillos-imprescindibles" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">Ruta de los castillos del Loira</a>, con recomendaciones para visitar múltiples fortalezas y palacios a lo largo del valle.</li>
        </ul>

        <p class="text-lg md:text-xl text-gray-700 mb-6">
          Además, los amantes de la naturaleza pueden disfrutar de paseos por los <a href="../../general/jardines-loira.html" target="_blank" class="text-emerald-600 underline hover:text-emerald-800">jardines históricos</a> y las riberas del río, ideales para fotografía, picnic y observación de aves.
        </p>


        <?php
        // Definir las etapas en orden
        $bloques = [
          [
            "orden" => 0,
            "slug_parrafo" => "parrafo_etapa_6_castillos_historicos",
            "slug_imagenes" => "etapa-6-castillos-historicos"
          ],
          [
            "orden" => 1,
            "slug_parrafo" => "parrafo-etapa-6-rios-y-paisajes",
            "slug_imagenes" => "etapa-6-rios-y-paisajes"
          ],
          [
            "orden" => 2,
            "slug_parrafo" => "parrafo-etapa-6-vinos-y-gastronomia",
            "slug_imagenes" => "etapa-6-vinos-y-gastronomia"
          ],          [
            "orden" => 3,
            "slug_parrafo" => "parrafo-etapa-6-loire-a-velo",
            "slug_imagenes" => "etapa-6-vinos-loire-a-velo"
          ]
        ];


            //require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php";


        ?>




        <div class="bg-white px-1 py-4 rounded-lg shadow mb-1">

          <?php foreach ($bloques as $bloque): ?>

            <?php
            // --- PARTE DEL PÁRRAFO ----
            $orden = $bloque["orden"];
            $slug_actual = $bloque["slug_parrafo"];
            $archivo_csv = 'data-etapas-partes.csv';
            // Bloque para mostrar castillos cercanos
            $slug_filtrado_csv = $slug_castillos_cercanos_csv;
            require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php";
            require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/etapas/estructura/sections/template-cabeceras-generico.php";


            // --- PARTE DE LAS IMÁGENES ---
            $slug_actual = $bloque["slug_imagenes"];
            $archivo_csv = 'data-etapas.csv';

            require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/utilidades/leer-csv-generico.php";
            require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/etapas/estructura/sections/template-imagenes-generico.php";
            ?>

          <?php endforeach; ?>

        </div>

        <section class="grid gap-4 md:grid-cols-2">
          <div class="bg-gray-50 p-4 rounded">
            <h3 class="font-semibold mb-1">🍇 Degustación de vinos en Vouvray</h3>
            <p class="text-sm text-gray-600">
              Entre Blois y Orléans se encuentra la región de Vouvray, famosa por sus vinos
              blancos elaborados con uva <strong>Chenin Blanc</strong>. Varias bodegas ofrecen
              catas y visitas guiadas en antiguas galerías excavadas en la roca.
            </p>
            <a href="../../etapas/6-etapa-blois-orleans/degustacion-vinos-vouvray.html" target="_blank"
              class="text-emerald-600 text-sm hover:underline">Sitio oficial →</a>
          </div>

          <div class="bg-gray-50 p-4 rounded">
            <h3 class="font-semibold mb-1">🧀 Productos locales en los mercados</h3>
            <p class="text-sm text-gray-600">
              Los mercados de <strong>Blois (martes y sábado)</strong> y de
              <strong>Les Halles d’Orléans</strong> son lugares ideales para comprar miel,
              rillettes, quesos de cabra y dulces tradicionales. Perfecto para un picnic junto al Loira.
            </p>
            <a href="https://www.orleans-metropole.fr/" target="_blank"
              class="text-emerald-600 text-sm hover:underline">Calendario de mercados →</a>
          </div>
        </section>



        <!-- 🔹 Mapa -->
        <section id="mapa" class="max-w-6xl mx-auto px-4">
          <h3 class="text-2xl font-bold text-emerald-700 mb-4 text-center">🗺️ Mapa de la ruta Blois – Orléans</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d978168.6647341252!2d1.903!3d47.600!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1759333355000!5m2!1ses!2ses"
            width="100%" height="450" class="rounded-lg shadow-md" style="border:0;" allowfullscreen loading="lazy"></iframe>
        </section>

        <!-- Navegación entre etapas -->
        <?php require "data.php"; ?>
        <?php require "../template-navegacion-etapas.php"; ?>

    </main>


    <!-- ➡️ ASIDE DERECHO (solo escritorio) -->
    <aside class="hidden lg:block col-span-2">
      <div class="aside-sticky bg-white p-4 rounded-lg shadow">
        <h4 class="font-semibold text-emerald-700 mb-2">Destacados</h4>
        <ul class="text-sm space-y-2 text-gray-700">
          <li><a href="/val-de-loire/chateaux/chateau-de-chambord/index.php" class="hover:underline">Castillo de Chambord</a></li>
          <li><a href="/val-de-loire/chateaux/chenonceau.php" class="hover:underline">Chenonceau</a></li>
          <li><a href="/val-de-loire/chateaux/chateau-royal🛎️ Alojamientose-de-amboise.php" class="hover:underline">Amboise</a></li>
        </ul>
        <hr class="my-4" />
        <div class="h-24 bg-gray-100 rounded flex items-center justify-center text-gray-500">AD 160×600</div>
      </div>

    </aside>

  </div>

  <!-- 🔹 Footer -->
  <footer class="bg-gray-100 mt-12 py-6 text-center text-gray-600">
    <p>© 2025 Valle del Loira | <a href="../index.php" class="text-emerald-700 hover:underline">Inicio</a></p>
  </footer>

</body>

</html>