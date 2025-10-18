<?php
// Variables dinámicas
$ciudad = "Saumur";
$slug = "saumur"; // para imágenes o URLs
$descripcion = "Saumur, ubicada en el corazón del Valle del Loira, destaca por su imponente castillo, sus bodegas de vino y su rica historia ecuestre.<br><br>

Pasear por Saumur es recorrer calles medievales, descubrir el Château de Saumur, visitar bodegas locales con vinos y espumosos reconocidos, y disfrutar del río Loira y sus paisajes. La ciudad ofrece también museos, actividades culturales y rutas a pie o en bicicleta.<br><br>

Saumur combina patrimonio histórico, gastronomía y naturaleza, siendo ideal para escapadas de fin de semana, turismo enológico y recorridos por el Valle del Loira.";

$imagenHero = "https://www.saumur-tourisme.com/sites/default/files/styles/visuel_1080x720/public/chateau-saumur.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.saumur-tourisme.com/"],
  ["Château de Saumur", "https://www.saumur-tourisme.com/decouvrir/chateau-de-saumur"],
  ["Google Maps", "https://maps.app.goo.gl/xyz123"], // reemplaza con enlace real si quieres
];

$relacionadas = [
  ["Tours", "Tours.php"],
  ["Orléans", "Orleans.php"],
  ["Blois", "Blois.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template-generico.php"; ?>
