<?php
// 🏰 SECCIÓN: HISTORIA DE CHAMBORD
$historia_chambord = [
  "id" => "historia",
  "titulo" => "🏰 Historia de Chambord",
  "contenido" => "Iniciado en 1519, el castillo fue concebido como pabellón de caza para el rey Francisco I. Aunque nunca fue una residencia permanente, su diseño monumental representa el ideal del Renacimiento francés, mezclando arquitectura defensiva medieval y elegancia italiana."
];
?>
<section id="<?= $historia_chambord['id'] ?>" class="mt-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?= $historia_chambord['titulo'] ?></h2>
  <p class="text-gray-700 mb-4"><?= $historia_chambord['contenido'] ?></p>
</section>

