<?php
$carpeta = "localidades"; //$url_carpeta = "/val-de-loire/general/oficinas-de-turismo.php";
?>

<!DOCTYPE html>
<html lang="es">

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head/index.php"; ?>

<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800 ">
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-inicio-faqs.php"; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/audio/musica-fondo.php"; ?>
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/hero/hero-generico.php"; ?>

  <!-- 🔹 Contenido Principal -->
  <main class="flex-1 h-screen lg:h-screen container mx-auto max-w-[1900px] px-1 py-12 grid lg:grid-cols-12 gap-10">

    <!-- 📢 ASIDE IZQUIERDO -->
    <aside class="space-y-8 hidden lg:block lg:col-span-3 h-full overflow-y-auto">
      <!-- 🔗 Enlaces útiles -->
      <?php if (!empty($enlaces)): ?>
        <section class="bg-white p-6 rounded-2xl shadow">
          <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
          <ul class="space-y-2">
            <?php foreach ($enlaces as $enlace): ?>
              <li>
                <a href="<?= $enlace[1] ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">
                  <?= $enlace[0] ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
      <?php endif; ?>

      <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-localidades/body/main/sections.php"; 
      ?>
    </aside>

    <!-- 🏙️ ARTÍCULO PRINCIPAL -->
    <article class="lg:col-span-7 overflow-y-auto" style="max-height: 95vh; padding-right: 1rem;">

      <nav class="text-sm flex items-center justify-between mt-1 mb-2 text-gray-600" aria-label="Breadcrumb">
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/breadcrums-generico.php"; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/breadcrums-generico-schemas.php"; ?>

        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/a-componentes/modal-google-maps.php"; ?>
      </nav>

      <!-- línea decorativa debajo, ancho completo -->
      <div class="mt-2 w-full h-px bg-emerald-700 rounded-full"></div>


      <h3 class="text-xl md:text-2xl lg:text-2xl font-bold text-emerald-700 mb-4">
        <?= $ciudad ?> en el Valle del Loira
      </h3>
      <p class="text-gray-700 mb-6"><?= $descripcion ?></p>

      <!-- 💰 Bloque publicitario intermedio -->
      <div class="bg-gray-100 border rounded-2xl p-1 my-1 text-center shadow-sm">
        <?php $alineacion = 4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      </div>

      <?php
      $carpeta = "chateaux";
      require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-localidades/body/main/sections/index.php"; ?>


      <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/paginas-localidades/body/main/sections/lista-que-ver.php'; ?>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/paginas-localidades/body/main/sections/lista-otras-ciudades.php'; ?>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/paginas-localidades/body/main/sections/lista-faqs.php'; ?>
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/paginas-localidades/body/main/sections/lista-fin-de-semana.php'; ?>




      <?php /*
<!-- 🚗 🚌 Transportes en Amboise -->
<section id="transportes-amboise" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">🚗 Transportes en Amboise</h2>
  <p class="text-gray-600 mb-6">
    Moverse por Amboise es fácil gracias a los autobuses urbanos, rutas ciclistas y servicios de alquiler de coches.
  </p>

  <div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
      <thead class="bg-emerald-100">
        <tr>
          <th class="px-4 py-2 text-left text-sm font-semibold text-emerald-800">Tipo de transporte</th>
          <th class="px-4 py-2 text-left text-sm font-semibold text-emerald-800">Descripción</th>
          <th class="px-4 py-2 text-left text-sm font-semibold text-emerald-800">Fuente</th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        <?php foreach($items as $item): ?>
        <tr>
          <td class="px-4 py-2 font-medium text-gray-700"><?= htmlspecialchars($item['titulo']); ?></td>
          <td class="px-4 py-2 text-gray-600"><?= htmlspecialchars($item['descripcion']); ?></td>
          <td class="px-4 py-2 text-blue-600 hover:underline">
            <a href="<?= htmlspecialchars($item['imagen']['fuente']); ?>" target="_blank" rel="noopener noreferrer">
              <?= htmlspecialchars($item['imagen']['fuente_texto']); ?>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section> */ ?>


    </article>

    <!-- 📢 ASIDE DERECHO -->
    <aside class="space-y-8 lg:col-span-2">
      <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/anuncios/get-your-guide/index.php'; ?>
    </aside>

  </main>


  <?php /*
    <!-- 🤝 Patrocinadores -->
    <section class="bg-emerald-50 py-10 mt-12">
        <div class="container mx-auto px-6 text-center">
            <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores del Valle del Loira</h4>
            <div class="flex flex-wrap justify-center gap-6">
                <img src="../img/patrocinador1.png" alt="Patrocinador 1" class="h-12" loading="lazy">
                <img src="../img/patrocinador2.png" alt="Patrocinador 2" class="h-12" loading="lazy">
                <img src="../img/patrocinador3.png" alt="Patrocinador 3" class="h-12" loading="lazy">
            </div>
        </div>
    </section>*/ ?>


  <script>
    feather.replace();
  </script>

  <!-- 🔹 Footer -->
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico-2.php"; ?>


  <!-- 🔝 Botón ir arriba -->
  <button id="btnTop"
    onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition">
    ⬆️
  </button>

  <script>
    // Mostrar/ocultar botón al hacer scroll
    window.addEventListener("scroll", function() {
      const btn = document.getElementById("btnTop");
      if (window.scrollY > 300) {
        btn.classList.remove("hidden");
      } else {
        btn.classList.add("hidden");
      }
    });
  </script>



  <?php /* Puede valer como schemas-head.php */ ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "TouristInformationCenter",
      "name": "Oficina de Turismo de Amboise",
      "url": "https://www.tourisme-amboise.fr/",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Amboise",
        "addressRegion": "Centre-Val de Loire",
        "addressCountry": "FR"
      },
      "areaServed": {
        "@type": "TouristDestination",
        "name": "Amboise"
      }
    }
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
          "@type": "Question",
          "name": "¿Cuánto tiempo se necesita para visitar Amboise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lo ideal es dedicar uno o dos días para visitar el Castillo Real, el Clos Lucé y el centro histórico de Amboise."
          }
        },
        {
          "@type": "Question",
          "name": "¿Cuál es la mejor época para viajar a Amboise?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "La primavera y el otoño son las mejores épocas por su clima agradable y menor afluencia turística."
          }
        },
        {
          "@type": "Question",
          "name": "¿Amboise es adecuada para viajar en familia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, Amboise es ideal para familias gracias a actividades educativas y castillos adaptados a niños."
          }
        },
        {
          "@type": "Question",
          "name": "¿Se puede visitar Amboise sin coche?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sí, Amboise tiene estación de tren y su centro histórico se puede recorrer a pie."
          }
        }
      ]
    }
  </script>


</body>

</html>