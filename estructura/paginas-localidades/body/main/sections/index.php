<?php
$sections = [
  "paseos",
  /*"actividades",*/
  "acontecimientos",
  "gastronomia",
  "restaurantes",
  /*"fin-de-semana",*/
  "alojamientos",
  /*"galeria",*/
  "transportes"
];

$i = 0;
foreach ($sections as $slug_section_main_title) {
  require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-localidades/body/main/sections/template.php";
  $i++;

  // 💰 Bloque publicitario cada 3 secciones
  if ($i % 3 == 0) {
    /*echo '<div class="bg-gray-100 border rounded-2xl p-4 my-8 text-center shadow-sm">
                      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
                      <div class="bg-white rounded-lg h-44 flex items-center justify-center">
                         <span class="text-gray-400 text-sm">Espacio publicitario (300x250)</span>
                          <?php $alineacion = 2; require $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
                      </div>
                  </div>';*/
  }
}
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-jeans-man.php"; ?>
<section id="otros-castillos" class="bg-gray-50 py-10 rounded-xl shadow-inner mt-10">
  <div class="max-w-5xl mx-auto px-6">

    <?php /*<h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">🏰 Otros castillos y recursos útiles</h2>

    <!-- 🔹 Lista de otros castillos -->
    <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
      <a href="../chateaux/ducks-de-bretagne.php"
        class="block bg-white hover:bg-blue-50 border border-gray-200 rounded-lg shadow-sm p-4 transition-all duration-300 hover:shadow-md">
        <h3 class="font-semibold text-lg text-gray-700">Château des Ducs de Bretagne</h3>
        <p class="text-sm text-blue-600 mt-1">Ver más →</p>
      </a>

      <a href="../chateaux/Clisson.php"
        class="block bg-white hover:bg-blue-50 border border-gray-200 rounded-lg shadow-sm p-4 transition-all duration-300 hover:shadow-md">
        <h3 class="font-semibold text-lg text-gray-700">Château de Clisson</h3>
        <p class="text-sm text-blue-600 mt-1">Ver más →</p>
      </a>

      <a href="../chateaux/Goulaine.php"
        class="block bg-white hover:bg-blue-50 border border-gray-200 rounded-lg shadow-sm p-4 transition-all duration-300 hover:shadow-md">
        <h3 class="font-semibold text-lg text-gray-700">Château de Goulaine</h3>
        <p class="text-sm text-blue-600 mt-1">Ver más →</p>
      </a>
    </div> */ ?>

    <?php // Bloque para mostrar castillos cercanos
    $archivo_csv = 'castillos-cercanos.csv';
    $slug_filtrado_csv = $slug_castillos_cercanos_csv;
    require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-derecho/template-castillos-cercanos-generico.php"; ?>

    <?php /*
    <!-- 🔗 Enlaces útiles -->
    <div class="bg-white p-6 rounded-lg border border-gray-200 shadow-sm">
      <h3 id="turismo-nantes" class="text-xl font-semibold text-gray-800 mb-3">🌐 Enlaces de interés</h3>
      <ul class="list-disc list-inside space-y-2 text-gray-700">
        <li>
          <a href="/val-de-loire/general/oficinas-de-turismo.php" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
            Oficinas de Turismo 🔗
          </a>
        </li>
        <li>
          <a href="/val-de-loire/index.php#castillos-imprescindibles" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
            Guia Castillos 🔗
          </a>
        </li>
        <li>
          <a href="https://www.google.com/maps/search/?api=1&query=<?= $latitude; ?>,<?= $longitude; ?>" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">
            Ver <?= $ciudad; ?> en Google Maps 📍
          </a>
        </li>

      </ul>
    </div> */ ?>

  </div>
</section>