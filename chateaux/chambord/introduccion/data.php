<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE CHAMBORD
$introduccion_chambord = [
  "id" => "introduccion",
  "titulo" => "🏰 Descubre el Castillo de Chambord",
  "parrafos" => [
    "<?= \$descripcion ?>",
    "Construido por orden de Francisco I en el siglo XVI, Chambord es un símbolo del poder real y del genio arquitectónico del Renacimiento. Su emblemática escalera de doble hélice y su impresionante fachada lo convierten en una visita obligada del Valle del Loira."
  ]
];
?>
<section id="<?= $introduccion_chambord['id'] ?>">
  <h2 class="text-3xl font-bold text-emerald-700 mb-4"><?= $introduccion_chambord['titulo'] ?></h2>
  <p><?= $descripcion ?></p>
  <p class="mt-2"><?= $introduccion_chambord['parrafos'][1] ?></p>
</section>

