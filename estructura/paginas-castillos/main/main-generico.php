<?php $carpeta='Chateaux'; ?>
<div class="flex flex-col min-h-screen">

  <main class="container mx-auto px-4 py-2 grid lg:grid-cols-12 gap-8">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block lg:col-span-3 space-y-6 max-w-[500px] overflow-hidden">
      <div class="bg-emerald-50 p-4 rounded-lg shadow w-full">
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>
      </div>
    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="lg:col-span-6 w-full max-w-full overflow-y-auto space-y-1 p-1">

      <nav class="text-sm flex items-center justify-between mt-1 mb-2 text-gray-600" aria-label="Breadcrumb">
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/breadcrums-generico.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/a-componentes/modal-google-maps.php"; ?>
      </nav>

      <!-- línea decorativa debajo, ancho completo -->
      <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>

      <article class="space-y-1 w-full max-w-full h-[148vh] overflow-y-auto p-1">

        <!-- Introducción -->
        <?php $slug_section = "informacion";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/{$slug_section}/data.php";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/introduccion-generico.php"; ?>

        <!-- Consejos -->
        <?php $slug_section = "consejos";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/consejos-generico.php"; ?>

        <!-- Publicidad intermedia -->
        <?php $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- Opiniones -->
        <?php $slug_section = "opiniones";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/opiniones-generico.php"; ?>

        <!-- FAQs -->
        <?php $slug_section = "faqs";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/faqs-generico.php"; ?>

        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>

        <!-- Visitas -->
        <?php $slug_section = "visitas";
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/visitas-generico.php"; ?>

        <!-- Castillos cercanos -->
        <?php
        $archivo_csv = 'castillos-cercanos.csv';
        $slug_filtrado_csv = $slug_castillos_cercanos_csv;
        require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php';
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-derecho/template-castillos-cercanos-generico.php";
        ?>

        <?php 
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections-templates/mas-info-oficial.php";
        ?>
      </article>

    </div>

    <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/asides/index-1.php"; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/asides/index-2.php"; ?>

  </main>
</div>