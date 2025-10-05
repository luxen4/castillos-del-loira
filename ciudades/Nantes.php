<?php
// Variables dinámicas
$ciudad = "Nantes";
$slug = "nantes"; // para imágenes o URLs
$descripcion = "Nantes, capital histórica de Bretaña y parte del Valle del Loira, es una ciudad cultural, moderna y con un rico patrimonio.";
$imagenHero = "https://www.nantes-tourisme.com/sites/default/files/2021-05/chateau-des-ducs.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.nantes-tourisme.com/"],
  ["Castillo de los Duques de Bretaña", "https://www.chateaunantes.fr/en/"],
  ["Google Maps", "https://goo.gl/maps/VNny7QYrBznQv6dK7"],
];


$relacionadas = [
  ["Angers", "angers.php"],
  ["Saumur", "saumur.php"],
  ["Tours", "tours.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template.php"; ?>