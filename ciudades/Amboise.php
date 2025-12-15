<?php
$nombreLugar="Amboise"; $title=$nombreLugar; $slug_castillos_cercanos_csv="amboise";
$src_google_maps="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43212.427844791564!2d0.9577181357348028!3d47.39678882103157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1765660768203!5m2!1ses!2ses";


$ciudad = "Amboise";
$slug = "amboise";
$descripcion = "Amboise, situada en el corazón del Valle del Loira, es un destino histórico y cultural de gran importancia. Además de su majestuoso castillo real, que fue residencia de reyes franceses y hogar de Leonardo da Vinci, la ciudad ofrece calles medievales con encanto, miradores sobre el río Loira, jardines cuidados y una variada oferta gastronómica y vinícola. Los visitantes pueden explorar el Clos Lucé, conocer la vida y obra de Da Vinci, disfrutar de mercados locales, rutas en bicicleta y paseos por el río, así como participar en eventos culturales y festivales que animan el casco histórico durante todo el año.";
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
