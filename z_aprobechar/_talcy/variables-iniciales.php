<?php
$title = "Château de Talcy";
$ciudad = "Talcy";
$carpeta='chateaux';
$slug_Mayuscula = "Talcy";
$descripcion = "El Château de Talcy es una elegante residencia renacentista del Valle del Loira, famosa por su arquitectura histórica y su vínculo con la poetisa Marie de Médicis. Sus muros guardan siglos de historia y un encanto rural único.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/5/5b/Chateau_de_Talcy_01.jpg";
$web_oficial = "https://www.chateau-talcy.fr";
$fuenteHero_texto = "chateau-talcy.fr";

$otros_castillos = [
  ["Chenonceau", "chateau-de-chenonceau/index.php"],
  ["Amboise", "chateau-royal-de-amboise.php"],
  ["Blois", "chateau-royal-de-blois/index.php"]
];

// Variables dinámicas para SEO
$keywords = "$title, castillos Valle del Loira, turismo Francia, viaje a $ciudad, turismo cultural, arquitectura renacentista, escapada fin de semana";
$twitter = "@adrianLaya";
$latitude = 47.6167;  // Coordenadas GPS del castillo
$longitude = 1.5333;
$direccion = "Château de Talcy, 41120 Talcy, Francia";
$horario_apertura = "09:00";
$horario_cierre = "18:00";
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/variables-comunes.php"; ?>
