<?php
// Variables dinámicas
$ciudad = "Tours";
$slug = "tours"; // para imágenes o URLs
$descripcion = "Tours, corazón del Valle del Loira, es conocida por su casco histórico medieval, la catedral de Saint-Gatien y sus animadas plazas con cafés y mercados.<br><br>

Explorar Tours es disfrutar de calles peatonales con casas antiguas de entramado de madera, museos de arte y arqueología, y rutas junto al río Loira. La ciudad también es famosa por su gastronomía, sus vinos y la cercanía a numerosos castillos del Valle del Loira.<br><br>

Tours combina cultura, historia y naturaleza, siendo ideal para escapadas de fin de semana, rutas gastronómicas y recorridos en bicicleta por el Loira.";

$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/5/5a/Tours_panorama.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.tours-tourisme.fr/"],
  ["Catedral Saint-Gatien", "https://loirelovers.fr/es/visitar-catedral-saint-gatien-tours/"],
  ["Google Maps", "https://maps.app.goo.gl/iq7x7dzdCPTmnd8AA"],
];

$relacionadas = [
  ["Saumur", "Saumur.php"],
  ["Blois", "Blois.php"],
  ["Orléans", "Orleans.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template-generico.php"; ?>
