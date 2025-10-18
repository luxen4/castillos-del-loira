<?php
// Variables dinámicas
$ciudad = "Orléans";
$slug = "orleans"; // para imágenes o URLs
$descripcion = "Orléans, situada a orillas del majestuoso río Loira, es una de las ciudades más emblemáticas de Francia. 
Famosa por su estrecha relación con Juana de Arco, esta ciudad combina historia, arte y modernidad de forma equilibrada.<br><br>

Pasear por Orléans es como viajar en el tiempo: desde la majestuosa Catedral de Sainte-Croix hasta las encantadoras calles del casco antiguo, 
llenas de casas con entramado de madera, cafés y boutiques locales. También puedes disfrutar de un paseo por los muelles del Loira o visitar 
el Museo de Bellas Artes, uno de los más antiguos del país.<br><br>

Además, su ambiente animado y su oferta cultural la convierten en un destino ideal tanto para una escapada de fin de semana como para una 
parada esencial en una ruta por el Valle del Loira. Orléans es historia viva, encanto urbano y pura inspiración francesa.";

$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/b/bb/Orleans_cathedrale_Sainte-Croix_vue_generale.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.tourisme-orleansmetropole.com/"],
  ["Catedral Sainte-Croix", "https://www.cathedrale-orleans.fr/"],
  ["Google Maps", "https://maps.app.goo.gl/gpQmfi6X2sFKXx8A8"],
];

$relacionadas = [
  ["Blois", "Blois.php"],
  ["Tours", "Tours.php"],
  ["Nantes", "Nantes.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template-generico.php"; ?>
