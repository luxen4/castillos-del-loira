<?php
$ciudad = "Chinon";
$slug = "chinon";
$descripcion = "Chinon es famosa por su impresionante castillo medieval, sus vinos tintos del Valle del Loira y su pintoresco casco antiguo junto al río Vienne.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/9/9b/Chinon_castle.jpg";
$enlaces = [
  ["Turismo oficial de Chinon", "https://www.ot-chinon-valdeloire.fr/"],
  ["Château de Chinon", "https://www.ot-chinon-valdeloire.fr/chateau-de-chinon"],
  ["Google Maps", "https://maps.app.goo.gl/7Jx6FbTnXo7n9KZTA"],
];
$galeria = [
  "https://upload.wikimedia.org/wikipedia/commons/5/5b/Chinon_village.jpg",
  "https://www.ot-chinon-valdeloire.fr/photo/chinon-loire.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/0/01/Chinon_panorama.jpg"
];
$relacionadas = [
  ["Saumur", "saumur.php"],
  ["Tours", "tours.php"],
  ["Angers", "angers.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/ciudad-template-generico.php"; ?>