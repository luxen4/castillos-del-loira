  <!-- Contenido principal -->
  <main class="container mx-auto px-1 py-2 grid lg:grid-cols-12 gap-8">
    <!-- 📌 ASIDE IZQUIERDO – PUBLICIDAD RECOMENDADA -->
    <aside class="lg:col-span-3 space-y-6">


      <div class="hidden lg:block bg-emerald-50 p-4 rounded-lg shadow">

        <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chateaux-folders/{$slug}/aside-izquierdo/anclas/data.php"; 
        ?>

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>


        <?php //<a href="chaumont/mapa-chaumont.php">ir</a> 
        ?>

      </div>
    </aside>


    <!-- Contenedor con scroll -->
    <div class="lg:col-span-6 h-[80vh] overflow-y-auto space-y-10 p-1">
      <nav class="text-sm breadcrumb mt-4 mb-8" aria-label="Breadcrumb">
        <ol class="flex flex-wrap items-center gap-2 text-gray-600">
          <li>
            <a href="/val-de-loire/" class="hover:text-blue-600 transition-colors">🏰 Val-de-Loire</a>
          </li>
          <li class="text-gray-400">/</li>

          <li>
            <a href="/val-de-loire/index.php#castillos-destacados" class="hover:text-blue-600 transition-colors">Chateaux</a>
          </li>
          <li class="text-gray-400">/</li>

          <li>
            <a href="/val-de-loire/chateaux/<?= $slug; ?>.php" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">
              <?= $nombreLugar; ?>
            </a>
          </li>
        </ol>
      </nav>

      <article class="space-y-10">

        <!-- Introducción -->
        <?php $slug_section = "informacion";
        require "chateaux-folders/{$slug}/{$slug_section}/data.php";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/introduccion-generico.php"; ?>

        <!-- Consejos -->
        <?php $slug_section = "consejos";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/consejos-generico.php"; ?>

        <!-- Opiniones -->
        <?php $slug_section = "opiniones";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/opiniones-generico.php"; ?>

        <!-- faqs -->
        <?php $slug_section = "faqs";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/faqs-generico.php"; ?>

        <!-- Visitas -->
        <?php $slug_section = "visitas";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/visitas-generico.php"; ?>

        <!-- Mapa -->
        <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/mapa-generico.php"; ?>

        <?php function estrellas($num)
        {
          return str_repeat("⭐", $num);
        } ?>

        <?php /*
Si quieres, puedo hacer que estos comentarios se carguen desde una base de datos o que permita enviar nuevos comentarios desde un formulario con validación 📝. Solo dime si quieres:

✅ Guardar comentarios en un archivo JSON
✅ Guardarlos en MySQL
✅ O integrarlo con un formulario en la web */ ?>

        <?php 
        $numeroAleatorio = 5; $alineacion=4;
        $archivoPublicidad = "sneakers";
        require  $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-sneakers.php"; ?>

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chateaux-folders/{$slug}/aside-derecho/castillos-cercanos/data.php"; ?>

      </article>
    </div>

    <!-- Aside derecho -->
    <aside class="hidden lg:block w-64 p-4 bg-gray-50 rounded-lg shadow-md space-y-6">

      <!-- Publicidad lateral -->
      <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
        [Publicidad lateral]
      </div>

      <!-- Banner de vuelos -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Busca tus vuelos</h3>
        <a href="https://www.skyscanner.net/affiliate-link" target="_blank" rel="nofollow">
          <img src="/val-de-loire/assets/banner-vuelos.jpg" alt="Reserva vuelos" class="w-full object-cover">
        </a>
        <p class="text-sm text-gray-600 mt-2 px-2 text-center">
          Reserva tus vuelos y apoya nuestra web sin costo adicional.
        </p>
      </div>

      <!-- Banner de vuelos Kiwi.com -->
<div class="border border-gray-200 rounded-lg overflow-hidden">
  <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Busca tus vuelos</h3>
  <a href="https://c111.travelpayouts.com/click?shmarker=iddqd&promo_id=3612&source_type=customlink&type=click&custom_url=https%3A%2F%2Fwww.kiwi.com%2Fen%2Fsearch%2Ftiles/" 
     target="_blank" rel="nofollow">
    <img src="/val-de-loire/assets/banner-vuelos.jpg" alt="Reserva vuelos" class="w-full object-cover">
  </a>
  <p class="text-sm text-gray-600 mt-2 px-2 text-center">
    Reserva tus vuelos y apoya nuestra web sin costo adicional.
  </p>
</div>



<!-- Banner de tours / actividades - GetYourGuide -->
<div class="border border-gray-200 rounded-lg overflow-hidden shadow-lg">
  <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Tours y actividades</h3>
  <a href="https://getyourguide.tpo.lu/FPvBISCi" target="_blank" rel="nofollow">
    <img src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,width=535,height=400,dpr=1/tour_img/514f6debe7856996d676b2e9e9cb60ec776bdf4826ac7e5e1b1e842fd9168a17.jpg" 
         alt="Reserva tours en el Valle del Loira" 
         class="w-full h-40 object-cover">
  </a>
  <p class="text-sm text-gray-600 mt-2 px-2 text-center">
    Descubre excursiones y actividades únicas en el Valle del Loira.
  </p>
</div><?php // https://app.travelpayouts.com/programs/84/about Crear links ?>



<script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

      <!-- Banner de tours / excursiones -->
      <div class="border border-gray-200 rounded-lg overflow-hidden">
        <h3 class="text-lg font-bold bg-emerald-700 text-white py-2 text-center">Tours y actividades</h3>
        <a href="https://www.civitatis.com/es/affiliate-link" target="_blank" rel="nofollow">
          <img src="/val-de-loire/assets/banner-tours.jpg" alt="Reserva tours" class="w-full object-cover">
        </a>
        <p class="text-sm text-gray-600 mt-2 px-2 text-center">
          Descubre excursiones y actividades en el Valle del Loira.
        </p>
      </div>




   
    </aside>

  </main>