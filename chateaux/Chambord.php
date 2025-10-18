<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/chambord/variables-iniciales.php"; ?>

<?php $sitio_web = "https://playas2024.kesug.com/val-de-loire"; ?>

<!DOCTYPE html>
<html lang="es">

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/head/head-generico.php"; ?>


<body class="bg-gray-50 text-gray-800">

  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/enlaces-principales-generico.php"; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/hero/hero-generico.php"; ?>


  <!-- Contenido principal -->
  <main class="container mx-auto px-6 py-10 grid lg:grid-cols-12 gap-8">

    <!-- Aside izquierdo -->
    <aside class="lg:col-span-3 space-y-6">
      <div class="bg-emerald-50 p-4 rounded-lg shadow">
        
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/aside-izquierdo/anclas/data.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>

      </div>
    </aside>

    <!-- Contenido central -->
    <article class="lg:col-span-6 space-y-10">

      <!-- Introducción -->
      <?php $slug_section = "introduccion"; require "{$slug}/{$slug_section}/data.php"; ?>

      <!-- Historia -->
      <?php $slug_section = "historia"; require "{$slug}/{$slug_section}/data.php"; ?>

      <!-- Arquitectura -->
      <?php $slug_section = "arquitectura"; require "{$slug}/{$slug_section}/data.php"; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/sections/print-section.php"; ?>

      <!-- Galería -->
      <?php $slug_section = "galeria"; require "{$slug}/{$slug_section}/data.php"; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/sections/print-section.php"; ?>

      <!-- Consejos -->
      <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/consejos/data.php"; ?>
      

      <!-- Información práctica -->
      <?php $slug_section = "informacion-practica"; require "{$slug}/{$slug_section}/data.php"; ?>


    </article>

<!-- Aside derecho -->
<aside class="lg:col-span-3 space-y-6">

  <!-- Publicidad lateral -->
  <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
    [Publicidad lateral]
  </div>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/aside-derecho/castillos-cercanos/data.php"; ?>

</aside>

  </main>

  <!-- Footer -->
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>


<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/schemas/schemas-body.php"; ?>


</body>
</html>
