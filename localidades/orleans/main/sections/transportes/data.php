<?php
$items = [
    [
        "titulo" => "Tranvía y autobús",
        "descripcion" => "Orléans cuenta con una red de tranvías y autobuses que conecta los principales barrios y lugares turísticos de la ciudad.",
        "imagen" => [
            "src" => "https://upload.wikimedia.org/wikipedia/commons/3/3d/Tramway_orleans.jpg",
            "alt" => "Tranvía de Orléans",
            "fuente" => "https://www.tao.fr/",
            "fuente_texto" => "tao.fr"
        ]
    ],
    [
        "titulo" => "Bicicletas y patinetes",
        "descripcion" => "Orléans ofrece estaciones de bicicletas públicas y opciones de alquiler de patinetes eléctricos, ideales para recorridos urbanos sostenibles.",
        "imagen" => [
            "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5f/Bicloo_Orleans.jpg",
            "alt" => "Bicicletas Orléans",
            "fuente" => "https://www.tao.fr/",
            "fuente_texto" => "tao.fr"
        ]
    ],
    [
        "titulo" => "Coches y traslados",
        "descripcion" => "Disponibles servicios de alquiler de coches, taxis y traslados privados para explorar Orléans y sus alrededores con comodidad.",
        "imagen" => [
            "src" => "https://upload.wikimedia.org/wikipedia/commons/1/1a/Voitures_Orleans.jpg",
            "alt" => "Coches en Orléans",
            "fuente" => "https://www.orleans.fr/",
            "fuente_texto" => "orleans.fr"
        ]
    ]
];
?>

<?php
// Variables principales del bloque "Transportes en Orléans"
$section = [
  "id" => "transportes",
  "titulo" => "🚗 Transportes en Orléans",
  "descripcion" => "Moverse por Orléans es cómodo gracias a su red de tranvías, autobuses y bicicletas públicas, que permiten recorrer la ciudad de forma rápida y sostenible.",
  "tip" => "👉 Consejo: consulta los pases de transporte público de Orléans para viajes ilimitados y descuentos en atracciones turísticas."
];
?>

<?php
echo '
<section id="transportes" class="my-10 px-6 lg:px-0">
  <h2 class="text-2xl font-bold text-amber-700 mb-4">🚍 Transportes en Orléans</h2>
  <p class="text-gray-700 leading-relaxed">
    Moverse por <strong>Orléans</strong> es fácil gracias a su moderna red de transporte público. 
    La ciudad cuenta con el sistema 
    <a href="https://www.reseau-tao.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">TAO</a>, 
    que incluye tranvías y autobuses que conectan eficientemente el centro con los barrios y zonas periféricas.  
    También puedes desplazarte cómodamente en bicicleta utilizando el servicio de alquiler público 
    <a href="https://www.reseau-tao.fr/velo/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Vélo’+</a>, 
    con múltiples estaciones repartidas por toda la ciudad.  
    Para los viajeros, la <a href="https://www.sncf.com/fr" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">estación SNCF de Orléans</a> 
    ofrece conexiones directas con <strong>París</strong>, <strong>Tours</strong> y otras ciudades del Valle del Loira, mientras que las principales autopistas facilitan el acceso en coche.
  </p>
  <p class="mt-4 text-gray-600 text-sm italic">
    👉 Consejo: el tranvía es la forma más rápida y ecológica de moverte por Orléans; además, puedes combinarlo con el alquiler de bicicletas para explorar la ribera del Loira.
  </p>
</section>
';
?>
