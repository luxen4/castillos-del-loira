<?php 
$carpeta="Localidades"; $url_carpeta="/val-de-loire/general/oficinas-de-turismo.php";
?>

<!DOCTYPE html>
<html lang="es">

<?php
//$carpeta='ciudades';
require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/head-generico.php"; ?>


<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800 ">
    <?php $carpeta='chateaux'; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-inicio-faqs.php"; ?>
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

            <!-- 💰 Publicidad aside izquierdo -->
            <div class="bg-gray-100 border rounded-2xl text-center shadow-sm">
                <?php $alineacion = 2; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
            </div>

            <!-- 📰 Noticias -->
            <section class="bg-white rounded-2xl shadow p-6">
                <h4 class="text-lg font-bold text-emerald-700 mb-4">🗞️ Actualidad del Loira</h4>
                <ul class="space-y-3 text-sm text-gray-700">
                    <li>
                        <a href="/val-de-loire/chateaux/chateaux-folders/chateau-de-chambord/exposiciones-chateau-de-chambord.php" class="hover:underline">
                            Exposiciones en el Castillo de Chambord
                        </a>
                    </li>
                    <li><a href="/val-de-loire/ciudades/saumur/festival-vinos.php" class="hover:underline">Festival de vinos en Saumur</a></li>
                    <li><a href="orleans/actividades/rutas-ciclo-turisticas-orleans/index.php" class="hover:underline">Rutas cicloturísticas actualizadas 2025</a></li>
                </ul>
            </section>  

            <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/body/main/sections.php"; ?>
        </aside>





        <!-- 🏙️ ARTÍCULO PRINCIPAL -->
        <article class="lg:col-span-7 overflow-y-auto" style="max-height: 95vh; padding-right: 1rem;">      
        <nav class="text-sm flex items-center justify-between mt-1 mb-2 text-gray-600" aria-label="Breadcrumb">
            <?php $carpeta="Localidades"; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/breadcrums-generico.php"; ?>
            
            
<?php /* Para meter, ya debe haber uno generico. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://tudominio.com/val-de-loire/index.php"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Valle del Loira",
      "item": "https://tudominio.com/val-de-loire/"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Amboise",
      "item": "https://tudominio.com/val-de-loire/amboise.php"
    }
  ]
}
</script>

            
            
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
                <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
            </div>

            <?php 
            $carpeta="chateaux";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/body/main/sections.php"; ?>


            <div class="bg-gray-100 border rounded-2xl text-center shadow-sm">
                <?php $alineacion = 4; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/prueba.php"; ?>
            </div>

            <!-- 🌆 Sección integrada en el contenido principal -->
            <section id="ciudades" class="mt-10 text-gray-700 leading-relaxed">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">🌆 Otras Ciudades del Valle del Loira</h2>

                <p class="mb-4">
                    El Valle del Loira está salpicado de encantadoras ciudades que combinan historia, arte y paisajes únicos.
                    Entre las más destacadas se encuentran
                    <a href="/val-de-loire/ciudades/amboise.php" class="text-emerald-700 hover:underline">Amboise</a>,
                    conocida por su castillo real y su vínculo con Leonardo da Vinci;
                    <a href="/val-de-loire/ciudades/chateau-royal-de-blois.php" class="text-emerald-700 hover:underline">Blois</a>,
                    con su imponente palacio renacentista y calles empedradas; y
                    <a href="/val-de-loire/ciudades/tours.php" class="text-emerald-700 hover:underline">Tours</a>,
                    una animada ciudad universitaria con un precioso casco antiguo.
                </p>

                <?php if (!empty($relacionadas)): ?>
                    <p class="mb-4">
                        También puedes descubrir otras localidades cercanas que comparten la misma riqueza cultural y arquitectónica, como
                        <?php
                        $enlaces = [];
                        foreach ($relacionadas as $rel) {
                            $enlaces[] = '<a href="../ciudades/' . $rel[1] . '" class="text-emerald-700 hover:underline">' . $rel[0] . '</a>';
                        }
                        echo implode(', ', array_slice($enlaces, 0, -1)) . ' y ' . end($enlaces) . '.';
                        ?>
                    </p>
                <?php endif; ?>

                <p>
                    Cada una de estas ciudades ofrece una experiencia distinta del Loira,
                    ya sea a través de sus castillos, jardines o su inconfundible estilo de vida francés.
                </p>
            </section>


<?php
$que_ver_amboise = [
  [
    "icono" => "🏰",
    "lugar" => "Castillo Real de Amboise",
    "descripcion" => "Residencia real con vistas al Loira y tumbas reales.",
    "tipo" => "Historia",
    "enlace" => "https://www.chateau-amboise.com/"
  ],
  [
    "icono" => "🎨",
    "lugar" => "Clos Lucé",
    "descripcion" => "Última residencia de Leonardo da Vinci y museo interactivo.",
    "tipo" => "Cultura",
    "enlace" => "https://www.vinci-closluce.com/"
  ],
  [
    "icono" => "⛪",
    "lugar" => "Capilla de Saint-Hubert",
    "descripcion" => "Lugar donde se cree que está enterrado Leonardo da Vinci.",
    "tipo" => "Historia",
    "enlace" => "https://www.chateau-amboise.com/"
  ],
  [
    "icono" => "🌉",
    "lugar" => "Puente de Amboise",
    "descripcion" => "Vistas icónicas del castillo y del río Loira.",
    "tipo" => "Paseo",
    "enlace" => "https://maps.google.com"
  ],
  [
    "icono" => "🍷",
    "lugar" => "Bodegas trogloditas",
    "descripcion" => "Cavas excavadas en la roca con degustaciones locales.",
    "tipo" => "Gastronomía",
    "enlace" => "https://www.touraineloirevalley.com/"
  ]
];
?>

<section id="que-ver-amboise" class="my-16">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6 text-center">
    👀 Qué ver en Amboise
  </h2>

  <div class="hidden md:block overflow-x-auto">
    <table class="w-full border border-emerald-200 rounded-lg overflow-hidden">
      <thead class="bg-emerald-700 text-white">
        <tr>
          <th class="p-3 text-left">Lugar</th>
          <th class="p-3 text-left">Descripción</th>
          <th class="p-3 text-left">Tipo</th>
          <th class="p-3 text-center">Info</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php foreach ($que_ver_amboise as $item): ?>
        <tr class="border-t hover:bg-emerald-50 transition">
          <td class="p-3 font-semibold">
            <?= $item['icono'] ?> <?= $item['lugar'] ?>
          </td>
          <td class="p-3 text-gray-600"><?= $item['descripcion'] ?></td>
          <td class="p-3"><?= $item['tipo'] ?></td>
          <td class="p-3 text-center">
            <a href="<?= $item['enlace'] ?>" target="_blank"
               class="text-emerald-600 underline hover:text-emerald-800">
              Ver
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


    <div class="md:hidden grid gap-4">
    <?php foreach ($que_ver_amboise as $item): ?>
      <article class="border rounded-xl p-4 shadow-sm bg-white">
        <h3 class="font-bold text-lg text-emerald-700 mb-1">
          <?= $item['icono'] ?> <?= $item['lugar'] ?>
        </h3>
        <p class="text-gray-600 text-sm mb-2">
          <?= $item['descripcion'] ?>
        </p>
        <div class="flex justify-between items-center text-sm">
          <span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded">
            <?= $item['tipo'] ?>
          </span>
          <a href="<?= $item['enlace'] ?>" target="_blank"
             class="text-emerald-600 underline">
            Más info
          </a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>

  <p class="mt-6 text-center text-gray-600 italic">
    👉 Consejo: combina el <strong>Castillo de Amboise</strong> y el
    <strong>Clos Lucé</strong> por la mañana y deja los paseos junto al Loira
    para el atardecer.
  </p>
</section>

<section id="mas-info-amboise" class="max-w-6xl mx-auto px-4 py-16">

  <div class="bg-gradient-to-br from-emerald-50 to-white 
              border border-emerald-200 rounded-2xl p-6 md:p-10 shadow-lg">

    <h3 class="text-2xl md:text-3xl font-extrabold text-emerald-700 mb-6 flex items-center gap-3">
      <i class="fas fa-compass"></i>
      Información oficial y recursos turísticos
    </h3>

    <p class="text-gray-700 mb-8 leading-relaxed max-w-3xl">
      Si estás organizando tu visita a <strong>Amboise</strong>, estas fuentes oficiales te ayudarán
      a planificar recorridos, conocer exposiciones temporales y descubrir eventos culturales
      en el corazón del <strong>Valle del Loira</strong>.
    </p>

    <ul class="grid gap-6 md:grid-cols-2">

      <!-- Turismo oficial -->
      <li class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
        <a href="https://www.tourisme-amboise.fr/"
           target="_blank"
           rel="noopener noreferrer"
           class="flex items-center gap-3 text-emerald-700 font-semibold hover:underline">
          <i class="fas fa-map-marked-alt text-xl"></i>
          Turismo oficial de Amboise
        </a>
        <p class="text-sm text-gray-600 mt-2">
          Oficina de turismo, agenda cultural, visitas guiadas y rutas recomendadas.
        </p>
      </li>

      <!-- Castillo Real -->
      <li class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
        <a href="https://www.chateau-amboise.com/"
           target="_blank"
           rel="noopener noreferrer"
           class="flex items-center gap-3 text-emerald-700 font-semibold hover:underline">
          <i class="fas fa-chess-rook text-xl"></i>
          Château Royal d’Amboise
        </a>
        <p class="text-sm text-gray-600 mt-2">
          Antiguo palacio real con vistas espectaculares al río Loira.
        </p>
      </li>

      <!-- Clos Lucé -->
      <li class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
        <a href="https://www.vinci-closluce.com/"
           target="_blank"
           rel="noopener noreferrer"
           class="flex items-center gap-3 text-emerald-700 font-semibold hover:underline">
          <i class="fas fa-paint-brush text-xl"></i>
          Château du Clos Lucé
        </a>
        <p class="text-sm text-gray-600 mt-2">
          Última residencia de Leonardo da Vinci, con jardines interactivos.
        </p>
      </li>

      <!-- Agenda -->
      <li class="bg-white rounded-xl p-5 shadow-sm hover:shadow-md transition">
        <a href="https://www.tourisme-amboise.fr/agenda"
           target="_blank"
           rel="noopener noreferrer"
           class="flex items-center gap-3 text-emerald-700 font-semibold hover:underline">
          <i class="fas fa-calendar-alt text-xl"></i>
          Agenda cultural de Amboise
        </a>
        <p class="text-sm text-gray-600 mt-2">
          Festivales, exposiciones, conciertos y eventos temporales.
        </p>
      </li>

    </ul>

    <!-- CTA FINAL -->
    <p class="mt-10 text-center text-gray-600 italic">
      🌿 Amboise es solo una de las joyas del Valle del Loira…  
      sigue explorando castillos, jardines y ciudades históricas.
    </p>

  </div>

</section>


<section id="faq-amboise" class="max-w-5xl mx-auto px-4 py-16">

  <h2 class="text-2xl md:text-3xl font-extrabold text-emerald-700 mb-8 flex items-center gap-3">
    <i class="fas fa-question-circle"></i>
    Preguntas frecuentes sobre Amboise
  </h2>

  <div class="space-y-4">

    <details class="bg-white border border-emerald-200 rounded-xl p-5 shadow-sm">
      <summary class="font-semibold cursor-pointer text-emerald-700">
        ¿Cuánto tiempo se necesita para visitar Amboise?
      </summary>
      <p class="mt-3 text-gray-700">
        Lo ideal es dedicar <strong>1 o 2 días</strong> para visitar el Castillo Real,
        el Clos Lucé, pasear por el centro histórico y disfrutar del río Loira.
      </p>
    </details>

    <details class="bg-white border border-emerald-200 rounded-xl p-5 shadow-sm">
      <summary class="font-semibold cursor-pointer text-emerald-700">
        ¿Cuál es la mejor época para viajar a Amboise?
      </summary>
      <p class="mt-3 text-gray-700">
        La mejor época es <strong>primavera y otoño</strong>, cuando el clima es agradable
        y hay menos afluencia turística. El verano ofrece más eventos culturales.
      </p>
    </details>

    <details class="bg-white border border-emerald-200 rounded-xl p-5 shadow-sm">
      <summary class="font-semibold cursor-pointer text-emerald-700">
        ¿Amboise es adecuada para viajar en familia?
      </summary>
      <p class="mt-3 text-gray-700">
        Sí, es un destino ideal para familias. El Clos Lucé ofrece experiencias interactivas,
        y los castillos cercanos son muy educativos para niños.
      </p>
    </details>

    <details class="bg-white border border-emerald-200 rounded-xl p-5 shadow-sm">
      <summary class="font-semibold cursor-pointer text-emerald-700">
        ¿Se puede visitar Amboise sin coche?
      </summary>
      <p class="mt-3 text-gray-700">
        Sí. Amboise cuenta con estación de tren y el centro histórico es fácilmente accesible
        a pie. Para castillos cercanos, se recomiendan bicicleta o excursiones organizadas.
      </p>
    </details>

  </div>

</section>


        </article>

        <!-- 📢 ASIDE DERECHO -->
        <aside class="space-y-8 lg:col-span-2">

          
            <!-- 💰 Publicidad aside derecho -->
            <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>



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



<?php /* Puede valer como schemas-head.php */?>
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
  "mainEntity": [
    {
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