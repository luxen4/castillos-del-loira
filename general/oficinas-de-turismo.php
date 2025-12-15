<?php 
$nombreLugar = 'Oficinas de Turismo';
$descripcion = "Descubre todas las oficinas de turismo del Valle del Loira: información oficial, mapas, horarios y consejos para visitar los castillos y ciudades más emblemáticas del Loira. Planifica tu viaje por Nantes, Tours, Amboise, Blois, Angers, Saumur y más destinos imprescindibles del valle francés.";
$keywords = "oficinas de turismo Valle del Loira, turismo Loira, información turística Loira, castillos del Loira turismo, oficina turismo Nantes, oficina turismo Tours, oficina turismo Amboise, oficina turismo Blois, oficina turismo Angers, visitar Valle del Loira, guía Valle del Loira";
$carpeta = "servicios";
$slug = "oficinas-turismo-val-de-loire";
$imagenHero = "https://www.turismovalledelloira.com/val-de-loire/assets/imagenes/oficinas-turismo-val-de-loire/oficina-turismo-loira-hero.jpg";
$twitter = "@@TuTwitter";

?>
<!DOCTYPE html>
<html lang="es">

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head-generico.php"; ?>


<body class="bg-gray-50 text-gray-800 font-sans leading-relaxed">

  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-inicio-faqs.php"; ?>







  <main class="container mx-auto px-1 py-2">
    <div class="grid lg:grid-cols-[250px_1fr_250px] gap-3">

      <!-- Aside izquierdo -->
      <aside class="hidden lg:block bg-gray-200 text-gray-500 p-1 rounded-lg">
        <!-- Publicidad aside izquierdo -->
        <?php $alineacion = 2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
    </aside>





      <!-- Contenido principal -->
      <section id="oficinas-turismo" class="bg-white rounded-2xl shadow p-6 max-w-5xl mx-auto"><!-- Breadcrumb para desktop -->
        <nav class="hidden md:flex text-sm mt-2 mb-2" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-2 text-emerald-700">
            <li><a href="/val-de-loire/" class="hover:text-emerald transition-colors">🏰 Inicio</a></li>
            <li>/</li>
            <li><a href="/val-de-loire/index.php#castillos-imprescindibles" class="hover:text-emerald transition-colors">Chateaux</a></li>
            <li>/</li>
            <li class="font-semibold text-emerald">Oficinas de Turismo</li>
          </ol>
        </nav>

        <h2 id="informacion" class="text-2xl font-bold text-emerald-700 mb-6 text-center">🌍 Oficinas de Turismo del Valle del Loira</h2>
        <p class="text-gray-600 text-center mb-8 max-w-3xl mx-auto">
          Descubre los puntos oficiales donde podrás obtener información, mapas y consejos para tu recorrido por los castillos y ciudades del
          <a class="text-emerald-600 font-semibold underline hover:text-emerald-800 transition" href="/val-de-loire/index.php"><strong>Valle del Loira</strong></a>.
        </p>

        <!-- Grid con oficinas por zonas siempre horizontal -->
        <div class="grid grid-cols-2 gap-2 justify-center">

          <!-- Zona Oeste -->
          <div>
            <h3 class="text-xl font-semibold text-emerald-700 mb-4 text-center md:text-left">🗺️ Zona Oeste</h3>
            <ul class="space-y-3 text-gray-700 text-center md:text-left">
              <li><a href="/val-de-loire/ciudades/Nantes.php#turismo-nantes" class="text-emerald-700 font-medium hover:underline">Nantes</a> <br>— Oficina Metropolitana</li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/angers-16905/oficina-turismo-angers-6616.htm" class="text-emerald-700 font-medium hover:underline">Angers</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/saumur-17211/oficina-turismo-saumur-6996.htm" class="text-emerald-700 font-medium hover:underline">Saumur</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/chinon-12807/oficina-turismo-chinon-7821.htm" class="text-emerald-700 font-medium hover:underline">Chinon</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/langeais-12858/oficina-turismo-langeais-8087.htm" class="text-emerald-700 font-medium hover:underline">Langeais</a></li>
            </ul>
          </div>

          <!-- Zona Este -->
          <div>
            <h3 class="text-xl font-semibold text-emerald-700 mb-4 text-center md:text-left">🏰 Zona Este</h3>
            <ul class="space-y-3 text-gray-700 text-center md:text-left">
              <li><a href="https://www.france-voyage.com/francia-ciudades/tours-12992/oficina-turismo-tours-6496.htm" class="text-emerald-700 font-medium hover:underline">Tours</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/amboise-12739/oficina-turismo-amboise-5802.htm" class="text-emerald-700 font-medium hover:underline">Amboise</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/blois-14520/oficina-turismo-blois-7034.htm" class="text-emerald-700 font-medium hover:underline">Blois</a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/orleans-15944/oficina-turismo-orleans-6280.htm" class="text-emerald-700 font-medium hover:underline">Orleans</a></li>
            </ul>
          </div>

        </div>


        <!-- Enlace turismo oficial centrado -->
        <div class="text-center mt-6">
          <a href="https://www.france.fr/es/valle-del-loira" target="_blank" class="inline-block text-emerald-700 font-semibold text-lg hover:underline">
            🇫🇷 Turismo oficial
          </a>
        </div>

        <!-- Publicidad central-->
        <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </section>

      <!-- Aside derecho -->
      <aside class="hidden lg:block bg-gray-200 text-gray-500 p-1 rounded-lg">
         <!-- Publicidad aside derecho -->
        <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </aside>
    </div>
  </main>

  <!-- 🔹 Footer -->
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>

</body>

</html>