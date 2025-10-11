<?php
$ciudad = "Saumur";
$slug = "saumur";
$descripcion = "Saumur es conocida por su elegante castillo sobre el Loira, sus vinos espumosos y la famosa Escuela de Caballería.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/1/1f/Saumur_Castle.jpg";
$enlaces = [
  ["Turismo oficial de Saumur", "https://www.ot-saumur.fr/"],
  ["Château de Saumur", "https://www.ot-saumur.fr/chateau-de-saumur"],
  ["Google Maps", "https://maps.app.goo.gl/CJccYdBsSDhJukhu8"],
];
$galeria = [
  "https://www.valdeloire.org/sites/default/files/styles/visuel_principal/public/2018-01/saumur_chateau_vue.jpg",
  "https://www.ot-saumur.fr/photo/saumur-loire.jpg",
  "https://upload.wikimedia.org/wikipedia/commons/2/26/Saumur_vue.jpg"
];
$relacionadas = [
  ["Angers", "angers.php"],
  ["Chinon", "chinon.php"],
  ["Tours", "tours.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/ciudad-template-generico.php"; ?>