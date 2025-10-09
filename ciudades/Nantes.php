<?php
// Variables dinámicas
$ciudad = "Nantes";
$slug = "nantes"; // para imágenes o URLs
$descripcion = "Nantes, capital histórica de Bretaña y joya del Valle del Loira, es una ciudad que mezcla lo antiguo con lo moderno de una forma sorprendente. 
Aquí puedes pasear por el Castillo de los Duques de Bretaña, alucinar con la Catedral de San Pedro y San Pablo o dejarte llevar por la magia del 
parque 'Les Machines de l'île' y su Gran Elefante mecánico.<br><br>

La ciudad respira arte y creatividad: desde murales callejeros hasta museos y jardines que parecen sacados de un cuento. Y, por supuesto, la gastronomía 
no se queda atrás: vinos Muscadet, ostras y mariscos frescos, sin olvidar el mítico Gâteau Nantais.<br><br>

Nantes engancha porque tiene de todo: cultura, historia, paseos junto al Loira, terrazas con ambiente y experiencias únicas para disfrutar en pareja, 
con amigos o en familia. Un destino perfecto para una escapada de fin de semana o para convertirlo en base en tu ruta por el Valle del Loira.";

$imagenHero = "https://www.nantes-tourisme.com/sites/default/files/2021-05/chateau-des-ducs.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.nantes-tourisme.com/"],
  ["Castillo de los Duques de Bretaña", "/val-de-loire/chateaux/Duques-de-Bretaña.php"],/*"https://www.chateaunantes.fr/en/*/
  ["Google Maps", "https://goo.gl/maps/VNny7QYrBznQv6dK7"],
];


$relacionadas = [
  ["Angers", "angers.php"],
  ["Saumur", "saumur.php"],
  ["Tours", "tours.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template.php"; ?>