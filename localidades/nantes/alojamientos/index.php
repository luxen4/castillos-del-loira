<?php 
$title = "Alojamientos en Nantes | Hoteles, apartamentos y turismo oficial";
$breadcrums_nivel_2 = "Localidades";
$breadcrums_nivel_3 = "Nantes";
$breadcrums_nivel_4 = "Alojamientos";
$slug = "nantes";
require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/variables-comunes.php"; 


$carpeta = "localidades";
$descripcion = "Descubre los mejores alojamientos en Nantes: hoteles, apartamentos y opciones recomendadas cerca del centro histórico. Información turística oficial y enlaces útiles.";
$keywords = "alojamientos en Nantes, hoteles en Nantes, apartamentos en Nantes, dónde dormir en Nantes, alojamiento cerca del Loira, hoteles centro histórico Nantes, Airbnb Nantes, alojamiento turístico Nantes, estancias en Nantes, hoteles baratos Nantes, apartamentos turísticos Nantes, dormir en Nantes Francia, alojamiento Valle del Loira Nantes";


$localidad= ""; $region = "";
$imagenHero = "";
$twitter = "@adrianLaya";

?>

<!DOCTYPE html>
<html lang="es">

<?php require  $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/estructura/head/index.php"; ?>
<?php //require 'paginas/index/schemas/index-schemas-head.php' // Se debe meter en el head; ?>

<body class="bg-gray-50 text-gray-800">

  <header class="bg-emerald-700 text-white">
    <div class="max-w-7xl mx-auto px-6 py-6">
      <h1 class="text-2xl md:text-3xl font-bold">Alojamientos en Nantes</h1>
      <p class="text-emerald-100 mt-1">Hoteles, apartamentos y recursos oficiales para tu estancia</p>
    </div>
  </header>

  <div class="max-w-8xl mx-auto px-4 py-8 grid grid-cols-1 lg:grid-cols-12 gap-6">

    <!-- ASIDE IZQUIERDO -->
    <aside class="lg:col-span-3 space-y-6">

      <!-- Publicidad -->
      <div class="bg-white rounded-xl shadow p-4 text-center">
        <?php /* <p class="text-sm text-gray-500 mb-2">Publicidad</p>
      <div class="h-40 bg-gray-100 flex items-center justify-center rounded">
        <span class="text-gray-400">Banner 300x250</span>
      </div> */ ?>

        <!-- PUBLICIDAD (escritorio) -->
        <div class="hidden md:block">
          <?php $alineacion = 2;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>

      </div>


    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="lg:col-span-6 space-y-8">

      <div class="w-full flex items-center justify-between mt-4 mb-4">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/main/breadcrums/index-4niveles.php'; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/a-componentes/boton-volver-generico.php'; ?>
      </div>

      <section class="bg-white rounded-xl shadow p-6 space-y-6">
        <h2 class="text-xl font-semibold mb-2">Dónde alojarse en Nantes</h2>
        <p class="text-gray-700 leading-relaxed">
          Nantes ofrece una amplia variedad de alojamientos, desde hoteles en el centro histórico hasta modernos
          apartamentos cerca del Loira. Es una ciudad ideal para estancias culturales y escapadas urbanas.
        </p>

        <!-- Bloques en horizontal -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

          <!-- Planifica tu viaje -->
          <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-lg mb-3">Planifica tu viaje</h2>
            <ul class="space-y-2 text-sm">
              <li>
                <a href="/val-de-loire/localidades/nantes/index.php"
                  class="text-emerald-700 hover:underline">
                  Nantes – Guía turística
                </a>
              </li>
              <li>
                <a href="/val-de-loire/general/gastronomia/index.php"
                  class="text-emerald-700 hover:underline">
                  Gastronomía local
                </a>
              </li>
            </ul>
          </div>

          <!-- Webs oficiales -->
          <div class="bg-white rounded-xl shadow p-4">
            <h2 class="font-semibold text-lg mb-3">Webs oficiales</h2>
            <ul class="space-y-2 text-sm">
              <li>
                <a href="https://www.levoyageanantes.fr"
                  target="_blank" rel="noopener noreferrer"
                  class="flex items-center gap-2 text-emerald-700 hover:underline">
                  <i class="fas fa-globe"></i> Turismo de Nantes
                </a>
              </li>
              <li>
                <a href="https://www.booking.com"
                  target="_blank" rel="noopener noreferrer"
                  class="flex items-center gap-2 text-emerald-700 hover:underline">
                  <i class="fas fa-bed"></i> Booking
                </a>
              </li>
            </ul>
          </div>

        </div>
      </section>


      <section class="grid md:grid-cols-2 gap-6">

        <!-- Card alojamiento -->
        <article class="bg-white rounded-xl shadow p-5">
          <h3 class="font-semibold text-lg mb-1">Hotel en el centro histórico</h3>
          <p class="text-sm text-gray-600 mb-3">Cerca del Castillo de los Duques de Bretaña</p>
          <a href="https://www.nanteshotel.com/fr/" class="inline-flex items-center gap-2 text-emerald-700 font-medium hover:underline">
            Ver alojamiento <i class="fas fa-arrow-right"></i>
          </a>
        </article>

        <article class="bg-white rounded-xl shadow p-5">
          <h3 class="font-semibold text-lg mb-1">Apartamento junto al Loira</h3>
          <p class="text-sm text-gray-600 mb-3">Ideal para estancias largas</p>
          <a href="https://www.airbnb.es/rooms/1427034376461188039?check_in=2026-02-01&check_out=2026-02-06&search_mode=regular_search&source_impression_id=p3_1768433877_P3-2VbrhdNFKZdHE&previous_page_section_name=1000" class="inline-flex items-center gap-2 text-emerald-700 font-medium hover:underline">
            Ver alojamiento <i class="fas fa-arrow-right"></i>
          </a>
        </article>

      </section>
        <div class="hidden md:block">
          <?php $alineacion = 4;
          require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
        </div>
    </main>

    <!-- ASIDE DERECHO -->
    <aside class="lg:col-span-3 space-y-6">

      <!-- Publicidad -->
      <div class="bg-white rounded-xl shadow p-4 text-center">
        <?php /* <p class="text-sm text-gray-500 mb-2">Publicidad</p>
      <div class="h-40 bg-gray-100 flex items-center justify-center rounded">
        <span class="text-gray-400">Banner 300x600</span>
      </div> */ ?>

        <!-- PUBLICIDAD (escritorio) -->
        <div class="hidden md:block">
          <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>
        </div>

      </div>
    </aside>

  </div>



  <footer class="bg-emerald-800 text-emerald-100 mt-12">
    <div class="max-w-7xl mx-auto px-6 py-6 text-sm text-center">
      © 2026 · Guía del Valle del Loira · Nantes
    </div>
  </footer>

</body>

</html>