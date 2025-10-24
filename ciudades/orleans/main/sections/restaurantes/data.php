<?php
$items = [
  [
    "titulo" => "Le Lièvre Gourmand",
    "descripcion" => "Un restaurante refinado con estrella Michelin que ofrece cocina contemporánea francesa elaborada con productos locales y de temporada.",
    "imagen" => [
      "src" => "https://media-cdn.tripadvisor.com/media/photo-s/0e/48/f2/8a/le-lievre-gourmand.jpg",
      "alt" => "Restaurante Le Lièvre Gourmand Orleans",
      "fuente" => "https://www.lelievregourmand.fr/",
      "fuente_texto" => "lelievregourmand.fr"
    ]
  ],
  [
    "titulo" => "La Parenthèse",
    "descripcion" => "Acogedor restaurante situado cerca del centro histórico, conocido por su ambiente elegante y su cocina moderna con toques creativos.",
    "imagen" => [
      "src" => "https://media-cdn.tripadvisor.com/media/photo-s/1a/2f/d4/9f/la-parenthese.jpg",
      "alt" => "Restaurante La Parenthèse Orleans",
      "fuente" => "https://www.restaurant-laparenthese-orleans.fr/",
      "fuente_texto" => "restaurant-laparenthese-orleans.fr"
    ]
  ],
  [
    "titulo" => "Le Brin de Zinc",
    "descripcion" => "Un bistró moderno y animado, popular entre los locales por su ambiente relajado, su carta variada y su excelente selección de vinos regionales.",
    "imagen" => [
      "src" => "https://media-cdn.tripadvisor.com/media/photo-s/1a/9b/50/5e/le-brin-de-zinc.jpg",
      "alt" => "Restaurante Le Brin de Zinc Orleans",
      "fuente" => "https://www.facebook.com/lebrindezincorleans/",
      "fuente_texto" => "facebook.com/lebrindezincorleans"
    ]
  ]
];
?>

<?php
// Variables principales del bloque "Restaurantes en Orléans"
$section = [
  "id" => "restaurantes",
  "titulo" => "🍽️ Restaurantes en Orléans",
  "descripcion" => "Orléans ofrece una gastronomía que combina tradición y elegancia. Sus restaurantes celebran los sabores del Valle del Loira, con especialidades como el pescado de río, el queso de cabra y los vinos de la región.",
  "tip" => "👉 Consejo: no te pierdas las <strong>rillettes d’Orléans</strong> ni un buen <strong>vino de Orléans-Cléry</strong> en una terraza junto al Loira."
];


?>


<?php
echo '
<section id="restaurantes" class="my-10 px-6 lg:px-0">
  <h2 class="text-2xl font-bold text-amber-700 mb-4">🍽️ Restaurantes en Orléans</h2>
  <p class="text-gray-700 leading-relaxed">
    La ciudad de <strong>Orléans</strong> es un destino gastronómico que combina la tradición culinaria francesa con la creatividad contemporánea. 
    Entre los lugares más recomendados se encuentra 
    <a href="https://www.lelievregourmand.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Le Lièvre Gourmand</a>, 
    un restaurante galardonado con estrella Michelin que ofrece una refinada cocina francesa de temporada. 
    También destaca 
    <a href="https://www.restaurant-laparenthese-orleans.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">La Parenthèse</a>, 
    un espacio elegante cerca del casco histórico, conocido por su ambiente acogedor y sus platos modernos con toques creativos. 
    Por último, 
    <a href="https://www.facebook.com/lebrindezincorleans/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Le Brin de Zinc</a> 
    es un bistró moderno muy popular entre los locales, ideal para disfrutar de buena comida y vinos del <strong>Valle del Loira</strong> en un ambiente relajado.
  </p>
  <p class="mt-4 text-gray-600 text-sm italic">
    👉 Consejo: acompaña tus platos con un <strong>vino de Orléans-Cléry</strong> o prueba las <strong>rillettes d’Orléans</strong> en alguna terraza junto al Loira.
  </p>
</section>
';
?>
