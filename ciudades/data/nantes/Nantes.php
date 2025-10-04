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
$galeria = [
  "https://www.ouest-france.fr/sites/default/files/styles/image-640x360/public/2020/07/16/le-chateau-des-ducs-de-bretagne-de-nantes.jpg",
  "https://www.nantes-tourisme.com/sites/default/files/styles/hero/public/2022-05/Les%20Machines%20de%20lIle.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/7/7b/Nantes_cathedrale.jpg"
];
$relacionadas = [
  ["Angers", "angers.php"],
  ["Saumur", "saumur.php"],
  ["Tours", "tours.php"],
];
?>

<?php require './../../ciudad-template.php';