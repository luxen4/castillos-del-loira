<?php
$nombreLugar="Amboise"; $title=$nombreLugar; $slug_castillos_cercanos_csv="amboise";
$src_google_maps="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43212.427844791564!2d0.9577181357348028!3d47.39678882103157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1765660768203!5m2!1ses!2ses";


$ciudad = "Amboise";
$slug = "amboise";
$descripcion = "Amboise es una ciudad histórica del Valle del Loira, famosa por su castillo real, su relación con Leonardo da Vinci y sus vistas privilegiadas sobre el río Loira.";
$imagenHero = "https://www.franciaturismo.net/es/wp-content/uploads/sites/17/amboise-castillo-hd.jpg";
$fuenteHero_texto = "franciaturismo.net";
$web_oficial="https://www.franciaturismo.net/es/loira/castillos-loira/castillo-amboise/";

$enlaces = [
   /* ["Turismo oficial de Amboise", "https://www.tourisme-amboise.fr/"], */
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


$latitude = 47.3967888;  // Coordenadas GPS de Amboise
$longitude = 0.9577181; 


?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/ciudad-template-generico.php"; ?>
