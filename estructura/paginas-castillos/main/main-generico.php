  <!-- Contenido principal -->
  <main class="container mx-auto px-6 py-10 grid lg:grid-cols-12 gap-8">
      <!-- Aside izquierdo -->
      <aside class="lg:col-span-3 space-y-6">
          <div class="bg-emerald-50 p-4 rounded-lg shadow">

              <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/aside-izquierdo/anclas/data.php"; ?>
              <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>

          </div>
      </aside>

<!-- Contenedor con scroll -->
<div class="lg:col-span-6 h-[80vh] overflow-y-auto space-y-10 p-1">
    <article class="space-y-10">

        <!-- Introducción -->
        <?php $slug_section = "introduccion";
            require "{$slug}/{$slug_section}/data.php"; 
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/introduccion/template-introduccion-generico.php"; ?>


        <!-- Historia -->
        <?php $slug_section = "historia";
            require "{$slug}/{$slug_section}/data.php"; 
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/historia/template-historia-generico.php"; ?>

        <!-- Arquitectura -->
        <?php $slug_section = "arquitectura";
            require "{$slug}/{$slug_section}/data.php";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/arquitectura/template-arquitectura-generico.php"; ?>

        <!-- Galería -->
        <?php $slug_section = "galeria";
            require "{$slug}/{$slug_section}/data.php";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/print-section-generico.php"; ?>

        <!-- Consejos -->
        <?php $slug_section = "consejos";
            require "{$slug}/{$slug_section}/data.php"; 
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/consejos/template-consejos-generico.php"; ?>

        <!-- Información práctica -->
        <?php $slug_section = "informacion-practica";
            require "{$slug}/{$slug_section}/data.php";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/informacion-practica/template-informacion-practica-generico.php"; ?>

            
      <?php require  $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico.php"; ?>
    </article>
</div>


      <!-- Aside derecho -->
      <aside class="lg:col-span-3 space-y-6">

          <!-- Publicidad lateral -->
          <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
              [Publicidad lateral]
          </div>

          <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/aside-derecho/castillos-cercanos/data.php"; ?>

      </aside>
  </main>