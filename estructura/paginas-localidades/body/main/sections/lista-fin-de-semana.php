<section id="fin-de-semana-amboise" class="max-w-5xl mx-auto px-4 py-16">

  <!-- Título -->
  <h2 class="text-2xl md:text-3xl font-extrabold text-emerald-700 mb-4 flex items-center gap-3">
    <i class="fas fa-calendar-week"></i>
    Fin de semana en <?= $nombreCiudad; ?>
  </h2>

  <!-- Descripción -->
  <p class="text-gray-700 mb-10">
    <?= $nombreCiudad; ?> es un destino ideal para una escapada de fin de semana, tanto si viajas en pareja,
    en familia o con presupuesto ajustado. Aquí tienes algunas ideas según tu tipo de viaje.
  </p>


<?php 
$carpeta="localidades"; $archivo_csv="fin-de-semana.csv";
$slug_filtrado_csv = $slug; 
require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/utilidades/leer-csv-generico.php'; //var_dump($items_filtrados);?>

<!-- Lista -->
<ul class="space-y-6">

  <?php foreach ($items_filtrados as $item): ?>
    <li class="bg-white border-l-4 border-emerald-500 p-5 rounded-xl shadow-sm">
      
      <h3 class="font-semibold text-lg text-emerald-700 flex items-center gap-2">
        <i class="<?= htmlspecialchars($item['icono']) ?>"></i>
        <?= htmlspecialchars($item['modo']) ?>
      </h3>

      <p class="text-gray-700 mt-2">
        <?= htmlspecialchars($item['detallado']) ?>
      </p>

    </li>
  <?php endforeach; ?>

</ul>


  <!-- Tip -->
  <div class="mt-10 bg-emerald-50 border border-emerald-200 rounded-xl p-5 text-emerald-800">
    👉 <strong>Consejo:</strong> combina visitas culturales por la mañana con paseos junto al Loira
    al atardecer para disfrutar del ambiente más auténtico de <?= $nombreCiudad; ?>.
  </div>

</section>