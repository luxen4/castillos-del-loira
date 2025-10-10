<?php
// 🏰 SECCIÓN: HISTORIA DE CHAMBORD
$historia_chambord = [
  "id" => "historia",
  "titulo" => "📜 Historia de Chambord",
  "contenido" => '
    <h3 class="text-lg italic text-gray-600 mb-4">
      Descubre el legado de Francisco I y la influencia de Leonardo da Vinci.
    </h3>
    <p class="text-gray-700 leading-relaxed">
      Iniciado en <strong>1519</strong>, el Castillo de Chambord fue concebido como un pabellón de caza para el rey <strong>Francisco I</strong>. 
      Aunque nunca se utilizó como residencia permanente, su diseño monumental simboliza el esplendor del <strong>Renacimiento francés</strong>, 
      combinando la arquitectura defensiva medieval con la elegancia y las proporciones clásicas inspiradas en <strong>Leonardo da Vinci</strong>. 
      Cada torre, escalera y fachada refleja la ambición del monarca de dejar un legado eterno en la historia de Francia.
    </p>
  '
];


?>
<section id="<?= $historia_chambord['id'] ?>" class="mt-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4"><?= $historia_chambord['titulo'] ?></h2>
  <p class="text-gray-700 mb-4"><?= $historia_chambord['contenido'] ?></p>
</section>

