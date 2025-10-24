<?php
$items = [
    [
        "titulo" => "Hotel de Lujo",
        "descripcion" => "Habitaciones elegantes con todos los servicios, perfectas para una estancia cómoda y relajante en el centro de Orléans.",
        "imagen" => [
            "src" => "https://media-cdn.tripadvisor.com/media/photo-s/1a/2b/3c/4d/hotel-orleans.jpg",
            "alt" => "Hotel Orléans",
            "fuente" => "https://www.orleans-hotel-luxe.fr/",
            "fuente_texto" => "orleans-hotel-luxe.fr"
        ]
    ],
    [
        "titulo" => "Apartamentos Urbanos",
        "descripcion" => "Apartamentos equipados ideales para estancias largas, familias o quienes buscan independencia y comodidad en Orléans.",
        "imagen" => [
            "src" => "https://media-cdn.tripadvisor.com/media/photo-s/1a/4e/5f/6g/apartamento-orleans.jpg",
            "alt" => "Apartamento Orléans",
            "fuente" => "https://www.airbnb.fr/s/Orleans--France",
            "fuente_texto" => "airbnb.fr"
        ]
    ],
    [
        "titulo" => "Casas rurales y campings",
        "descripcion" => "Escapadas cercanas a la naturaleza, con opciones para acampar o alojarse en casas rurales tradicionales alrededor de Orléans.",
        "imagen" => [
            "src" => "https://media-cdn.tripadvisor.com/media/photo-s/1a/7h/8i/9j/camping-orleans.jpg",
            "alt" => "Camping Orléans",
            "fuente" => "https://www.campings.com/es/camping/orleans",
            "fuente_texto" => "campings.com"
        ]
    ]
];
?>

<?php
// Variables principales del bloque "Alojamientos en Orléans"
$section = [
  "id" => "alojamientos",
  "titulo" => "🏨 Alojamientos en Orléans",
  "descripcion" => "Orléans ofrece una amplia variedad de alojamientos: desde hoteles de lujo en el centro hasta apartamentos independientes y casas rurales en los alrededores.",
  "tip" => "👉 Consejo: reserva con antelación en temporada alta para asegurar disponibilidad y mejores precios."
];
?>

<?php
echo '
<section id="alojamientos" class="my-10 px-6 lg:px-0">
  <h2 class="text-2xl font-bold text-amber-700 mb-4">🏨 Alojamientos en Orléans</h2>
  <p class="text-gray-700 leading-relaxed">
    La ciudad de <strong>Orléans</strong> ofrece una amplia variedad de alojamientos que se adaptan a todos los gustos y presupuestos. 
    Para quienes buscan elegancia y confort, el 
    <a href="https://www.orleans-hotel-luxe.fr/" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Hotel de Lujo</a> 
    propone habitaciones modernas con servicios de alta gama en pleno centro de la ciudad.  
    Si prefieres mayor independencia, los 
    <a href="https://www.airbnb.fr/s/Orleans--France" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">Apartamentos Urbanos</a> 
    son una opción ideal para familias o estancias largas, combinando comodidad y ubicación céntrica.  
    Y para los amantes de la naturaleza, las 
    <a href="https://www.campings.com/es/camping/orleans" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline font-semibold">casas rurales y campings</a> 
    alrededor de Orléans permiten disfrutar del entorno tranquilo y verde del <strong>Valle del Loira</strong> en un ambiente relajado.
  </p>
  <p class="mt-4 text-gray-600 text-sm italic">
    👉 Consejo: reserva con antelación durante la temporada alta para conseguir las mejores tarifas y asegurar disponibilidad en tus fechas.
  </p>
</section>
';
?>
