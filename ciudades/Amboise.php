<?php
$nombreLugar="Amboise"; $title=$nombreLugar;


$ciudad = "Amboise";
$slug = "amboise";
$descripcion = "Amboise es una ciudad histórica del Valle del Loira, famosa por su castillo real, su relación con Leonardo da Vinci y sus vistas privilegiadas sobre el río Loira.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/5/5d/Chateau_Amboise_Loire.jpg";

$enlaces = [
  ["Turismo oficial de Amboise", "https://www.tourisme-amboise.fr/"],
  ["Château Royal d’Amboise", "https://www.chateau-amboise.com/"],
  ["Clos Lucé – Leonardo da Vinci", "https://www.vinci-closluce.com/"],
  ["Google Maps", "https://maps.app.goo.gl/L3Z6R1bWmGZK9h4F8"],
];

$galeria = [
  "https://upload.wikimedia.org/wikipedia/commons/6/6c/Amboise_panorama_Loire.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/3/3f/Amboise_town_Loire.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/8/8a/Clos_Luce_Amboise.jpg"
];

$relacionadas = [
  ["Tours", "tours.php"],
  ["Blois", "blois.php"],
  ["Chenonceaux", "chenonceaux.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/ciudad-template-generico.php"; ?>
