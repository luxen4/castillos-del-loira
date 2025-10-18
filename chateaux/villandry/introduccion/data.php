<?php
// 🏰 SECCIÓN: INTRODUCCIÓN - CASTILLO DE VILLANDRY
$introduccion_villandry = [
  "id" => "introduccion",
  "titulo" => "🏰 Descubre el Castillo de Villandry",
  "parrafos" => [
    "El Castillo de Villandry, famoso por sus jardines renacentistas perfectamente diseñados, combina arquitectura y naturaleza en el corazón del Valle del Loira.",
    "Construido a comienzos del siglo XVI, Villandry destaca por sus jardines ornamentales, huertos y laberintos, que lo convierten en un lugar único para recorrer y fotografiar."
  ]
];
?>
<section id="<?= $introduccion_villandry['id'] ?>">
  <h2 class="text-3xl font-bold text-emerald-700 mb-4"><?= $introduccion_villandry['titulo'] ?></h2>
  <p><?= $introduccion_villandry['parrafos'][0] ?></p>
  <p class="mt-2"><?= $introduccion_villandry['parrafos'][1] ?></p>
</section>
