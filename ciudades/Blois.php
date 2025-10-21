<?php
// Variables dinámicas
$ciudad = "Blois";
$slug = "blois"; // para imágenes o URLs
$descripcion = "Blois, situada a orillas del río Loira, es una ciudad elegante y cargada de historia. 
Antigua residencia real, su imponente castillo domina el paisaje y ofrece una de las mejores panorámicas del Valle del Loira.<br><br>

El Château Royal de Blois es una visita obligada: una mezcla única de estilos arquitectónicos que refleja la evolución del arte francés 
desde la Edad Media hasta el Renacimiento. Pero la ciudad no se queda ahí: su casco antiguo, con calles empedradas, plazas animadas y 
casas con entramado de madera, invita a perderse sin prisa.<br><br>

Blois también es un punto de partida ideal para explorar los grandes castillos del Loira, como Chambord, Cheverny o Chaumont-sur-Loire. 
Una ciudad con encanto, perfecta para los amantes de la historia, el arte y la buena vida.";

$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/5/5d/Chateau_de_Blois_vue_generale.jpg";
$enlaces = [
  ["Turismo oficial", "https://www.bloischambord.com/"],
  ["Castillo Real de Blois", "https://www.chateaudeblois.fr/"],
  ["Google Maps", "https://maps.app.goo.gl/TTs5SM7pN3AmPg6s6"],
];

$relacionadas = [
  ["Orléans", "Orleans.php"],
  ["Amboise", "Amboise.php"],
  ["Tours", "Tours.php"],
];
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-ciudades/ciudad-template-generico.php"; ?>
