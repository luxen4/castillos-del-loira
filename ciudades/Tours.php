<?php
$ciudad = "Tours";
$slug = "tours";
$descripcion = "Tours, a orillas del Loira, es una ciudad universitaria y cultural con un casco histórico encantador.";
$imagenHero = "https://woody.cloudly.space/app/uploads/adt-touraine/2024/12/thumbs/Ville-Tours-Credit-ADT-Touraine-JCoutand-2033-57-1920x960-crop-1733305690.webp";
$enlaces = [
  ["Turismo oficial de Tours", "https://www.tours-tourisme.fr/"],
  ["Catedral de Saint-Gatien", "https://www.cathedrale-tours.fr/"],
  ["Google Maps", "https://goo.gl/maps/TL4m7d7xW6tUMp2aA"],
];
$galeria = [
  "https://www.france-voyage.com/visuals/photos/tours-632_w600.jpg",
  "https://cdn.sortiraparis.com/images/80/93884/824597-place-plumereau.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/7/7c/Tours_vue.jpg"
];
$relacionadas = [
  ["Saumur", "saumur.php"],
  ["Amboise", "amboise.php"],
  ["Blois", "blois.php"],
];
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template-generico.php"; ?>