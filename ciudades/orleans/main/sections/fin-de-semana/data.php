<?php
$items = [
    [
        "titulo" => "En pareja",
        "descripcion" => "Disfruta de paseos románticos por la ribera del Loira, cenas gastronómicas y visitas culturales en un ambiente relajado en Orléans.",
        "imagen" => [
            "src" => "https://upload.wikimedia.org/wikipedia/commons/5/53/Loire_river_orleans.jpg",
            "alt" => "Fin de semana en pareja Orléans",
            "fuente" => "https://www.orleans.fr/visiter",
            "fuente_texto" => "orleans.fr"
        ]
    ],
    [
        "titulo" => "En familia",
        "descripcion" => "Actividades para niños y adultos: parques, museos interactivos y paseos por jardines y plazas del centro histórico.",
        "imagen" => [
            "src" => "https://www.orleans.fr/sites/default/files/styles/1200x800/public/parc_loire_orleans.jpg",
            "alt" => "Fin de semana en familia Orléans",
            "fuente" => "https://www.orleans.fr/famille",
            "fuente_texto" => "orleans.fr"
        ]
    ],
    [
        "titulo" => "Fin de semana económico",
        "descripcion" => "Disfruta de visitas gratuitas, mercados, paseos y experiencias locales sin gastar mucho en Orléans.",
        "imagen" => [
            "src" => "https://www.orleans.fr/sites/default/files/styles/1200x800/public/marches_orleans.jpg",
            "alt" => "Mercados y paseos Orléans",
            "fuente" => "https://www.orleans.fr/agenda",
            "fuente_texto" => "orleans.fr"
        ]
    ],
    [
        "titulo" => "Experiencia insólita",
        "descripcion" => "Vive Orléans de manera diferente: arte urbano, rutas secretas, espectáculos y rincones poco conocidos.",
        "imagen" => [
            "src" => "https://www.orleans.fr/sites/default/files/styles/1200x800/public/arte_urbano_orleans.jpg",
            "alt" => "Arte urbano en Orléans",
            "fuente" => "https://www.orleans.fr/culture",
            "fuente_texto" => "orleans.fr"
        ]
    ]
];
?>

<?php
// Variables principales del bloque "Fin de semana en Orléans"
$section = [
  "id" => "fin-de-semana",
  "titulo" => "📊 Fin de semana en Orléans",
  "descripcion" => "Orléans es un destino ideal para escapadas de fin de semana. Hay planes para parejas, familias, viajeros con presupuesto limitado o quienes buscan experiencias únicas.",
  "tip" => "👉 Consejo: combina actividades culturales, gastronómicas y al aire libre para aprovechar al máximo tu fin de semana en Orléans."
];
?>

<?php
echo '
<section id="fin-de-semana" class="my-10 px-6 lg:px-0">
  <h2 class="text-2xl font-bold text-amber-700 mb-4">🌞 Fin de semana en Orléans</h2>
  <p class="text-gray-700 leading-relaxed">
    Pasar un <strong>fin de semana en Orléans</strong> es una excelente manera de descubrir la historia, la cultura y el encanto del <strong>Valle del Loira</strong>. 
    Puedes comenzar explorando la majestuosa 
    <a href="https://www.cathedrale-orleans.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Catedral Sainte-Croix</a>, 
    pasear por la <strong>Place du Martroi</strong> con su icónica estatua de Juana de Arco y recorrer las calles peatonales del centro histórico llenas de tiendas y cafés.  
    Para una experiencia cultural, visita el 
    <a href="https://www.mbaorleans.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Musée des Beaux-Arts</a> 
    o el <a href="https://www.hotel-groslot.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Hôtel Groslot</a>, 
    antigua residencia de reyes franceses.  
    Por la tarde, disfruta de un paseo junto al <strong>río Loira</strong> o un crucero fluvial, y termina el día cenando en uno de los excelentes restaurantes locales.
  </p>
  <p class="mt-4 text-gray-600 text-sm italic">
    👉 Consejo: aprovecha el domingo para visitar el <strong>mercado de Orléans</strong> o descubrir alguno de los castillos cercanos como <strong>Chambord</strong> o <strong>Meung-sur-Loire</strong>.
  </p>
</section>
';
?>
