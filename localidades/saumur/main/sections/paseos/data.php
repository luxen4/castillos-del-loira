<?php 
$items = [
  [
    "titulo" => "Ribera del Loira",
    "descripcion" => "Pasea junto al río Loira, disfruta de la naturaleza y contempla los castillos y viñedos desde los senderos señalizados.",
    "imagen" => [
      "src" => "https://res.cloudinary.com/manawa/image/private/f_auto,c_limit,w_3840,q_auto/e4661143df7af149323ed2190ef94bdf",
      "alt" => "Paseo por la ribera del Loira en Saumur",
      "fuente" => "saumur/main/sections/paseos/ribera-del-loire/index.php",
      "fuente_texto" => "valdeloire-france.com"
    ]
  ],/* https://www.manawa.com/es-ES/actividad/francia/saumur/paseo-en-barco/paseo-en-barco-tradicional-por-el-loira-desde-saumur/17416 */ 
  [
    "titulo" => "Casco histórico",
    "descripcion" => "Recorre las callejuelas del centro histórico de Saumur, con sus tiendas, cafés y rincones llenos de historia.",
    "imagen" => [
      "src" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpQR6YM6ZwAw8WRcAp18vbn3eUhhQe5UDhFA&s",
      "alt" => "Centro histórico de Saumur",
      "fuente" => "saumur/main/sections/paseos/casco-historico-saumur/index.php",
      "fuente_texto" => "saltaconmigo.com"
    ] /* https://saltaconmigo.com/blog/2023/10/que-ver-en-saumur-alrededores-mapa/ */
  ],
  [
    "titulo" => "Viñedos y bodegas",
    "descripcion" => "Pasea por los viñedos de Saumur, descubre bodegas locales y degusta los famosos vinos del Valle del Loira.",
    "imagen" => [
      "src" => "https://storage.googleapis.com/ruedesvignerons-prod-upload/sous-regions/11/url_visuel_header/Saumur_cover.jpg",
      "alt" => "Viñedos de Saumur",
      "fuente" => "saumur/main/sections/paseos/viñedos-y-bodegas-saumur/index.php",
      "fuente_texto" => "saumur-tourisme.com"
    ]
  ]/* https://www.ruedesvignerons.com/es/sous-region/saumur-val-de-loire */
]; 
?>

<?php
$section = [
  "id" => "paseos-saumur",
  "titulo" => "🚶 Paseos en Saumur",
  "descripcion" => "Saumur es perfecta para pasear a pie o en bicicleta: su casco histórico, la ribera del Loira y los viñedos ofrecen recorridos llenos de historia y naturaleza.",
  "tip" => "👉 Consejo: sigue los senderos señalizados junto al Loira y explora el casco antiguo para descubrir todos los atractivos."
];


?>


<?php /*
echo '
<section id="' . $section["id"] . '" class="my-10 px-6 lg:px-0">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4">' . $section["titulo"] . '</h2>
  <p class="text-gray-700 leading-relaxed">
    ' . $section["descripcion"] . ' Puedes iniciar tu recorrido junto a la 
    <a href="' . $items[0]["imagen"]["fuente"] . '" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline font-semibold">' . $items[0]["titulo"] . '</a>, 
    pasear por el <a href="' . $items[1]["imagen"]["fuente"] . '" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline font-semibold">' . $items[1]["titulo"] . '</a> con su casco histórico encantador, 
    y disfrutar de los <a href="' . $items[2]["imagen"]["fuente"] . '" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline font-semibold">' . $items[2]["titulo"] . '</a> entre viñedos y bodegas locales.
  </p>
  <p class="mt-4 text-gray-600 text-sm italic">
    ' . $section["tip"] . '
  </p>
</section>
'; */
?>
