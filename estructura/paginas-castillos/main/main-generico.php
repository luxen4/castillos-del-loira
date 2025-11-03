  <!-- Contenido principal -->
  <main class="container mx-auto px-6 py-10 grid lg:grid-cols-12 gap-8">
      <!-- Aside izquierdo -->
      <aside class="lg:col-span-3 space-y-6">
          <div class="bg-emerald-50 p-4 rounded-lg shadow">

              <?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/aside-izquierdo/anclas/data.php"; ?>
              <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-izquierdo/publicidad.php"; ?>


<?php //<a href="chaumont/mapa-chaumont.php">ir</a> ?>

          </div>
      </aside>


<!-- Contenedor con scroll -->
<div class="lg:col-span-6 h-[80vh] overflow-y-auto space-y-10 p-1">
<nav class="text-sm breadcrumb mt-4 mb-8" aria-label="Breadcrumb">
  <ol class="flex flex-wrap items-center gap-2 text-gray-600">
    <li>
      <a href="/val-de-loire/" class="hover:text-blue-600 transition-colors">🏰 Valle del Loira</a>
    </li>
    <li class="text-gray-400">/</li>
    
    <li>
      <a href="/val-de-loire/index.php#castillos-destacados" class="hover:text-blue-600 transition-colors">Castillos</a>
    </li>
    <li class="text-gray-400">/</li>

    <li>
      <a href="/val-de-loire/chateaux/<?= $slug; ?>.php" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">
        <?= $slug_Mayuscula; ?>
      </a>
    </li>
  </ol>
</nav>

    <article class="space-y-10">

        <!-- Introducción -->
        <?php $slug_section = "introduccion";
            require "{$slug}/{$slug_section}/data.php"; 
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/introduccion/template-introduccion-generico.php"; ?>

        <!-- Consejos -->
        <?php $slug_section = "consejos";
            require "{$slug}/{$slug_section}/data.php"; 
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/consejos/template-consejos-generico.php"; ?>

        <!-- Información práctica -->
        <?php $slug_section = "informacion-practica";
            require "{$slug}/{$slug_section}/data.php";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/informacion-practica/template-informacion-practica-generico.php"; ?>
            

        <!-- Mapa -->
        <?php $slug_section = "mapa";
            require "{$slug}/{$slug_section}/data.php";
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/main/sections/mapa/template-mapa-generico.php"; ?>













<?php
function estrellas($num) {
  return str_repeat("⭐", $num);
}

$comentarios = [
  ["nombre" => "Ana Gómez", "texto" => "✨ Belleza arquitectónica y ambiente tranquilo; imprescindible en el centro histórico.", "rating" => 5],
  ["nombre" => "Luis Fernández", "texto" => "🎶 Me encantaron las vidrieras y el órgano histórico.", "rating" => 4],

  // Nuevos comentarios sobre Chenonceau
  ["nombre" => "María López", "texto" => "😍 El castillo sobre el río es impresionante. El reflejo en el agua parece un cuadro.", "rating" => 5],
  ["nombre" => "Javier Martín", "texto" => "🌿 Pasear por los jardines es mágico. Se nota la influencia de Catalina de Médici y Diana de Poitiers.", "rating" => 5],
  ["nombre" => "Elena Ruiz", "texto" => "📸 De los castillos más fotogénicos del valle. Cada sala cuenta una historia. ¡Volvería sin dudarlo!", "rating" => 5]
];

?>

<!-- Comentarios -->
<section class="mb-6">
  <h3 class="text-2xl font-semibold text-emerald-700 mb-3">🗣️ Opiniones</h3>

  <div class="space-y-3">
    <?php foreach ($comentarios as $c): ?>
      <div class="bg-white p-4 rounded-lg shadow hover:shadow-md transition">
        <div class="flex items-center justify-between">
          <strong class="text-emerald-700 text-lg"><?= htmlspecialchars($c['nombre']) ?></strong>
          <span class="text-yellow-500 text-sm"><?= estrellas($c['rating']) ?></span>
        </div>
        <p class="text-gray-700 mt-2"><?= htmlspecialchars($c['texto']) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>


      <?php /*
Si quieres, puedo hacer que estos comentarios se carguen desde una base de datos o que permita enviar nuevos comentarios desde un formulario con validación 📝. Solo dime si quieres:

✅ Guardar comentarios en un archivo JSON
✅ Guardarlos en MySQL
✅ O integrarlo con un formulario en la web */ ?>

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