<?php
$nombreLugar = "Castillo de Chambord";
$ciudad = "Chambord"; $slug = "chambord";
$descripcion = "El Castillo de Chambord, una joya del Renacimiento francés, es el más grande y majestuoso de los castillos del Valle del Loira. Famoso por su arquitectura única inspirada por Leonardo da Vinci, combina el esplendor real con la armonía del entorno natural.";
$imagenHero = "https://media.traveler.es/photos/61377563d4923f67e298f5c2/master/w_1600%2Cc_limit/111804.jpg";
$web_oficial = "https://www.traveler.es/naturaleza/articulos/castillo-del-loira-chambord-nuevo-jardin/10879";

$fuenteHero_texto = "Traveler.es";

$otros_castillos = [
    ["Villandry", "Villandry.php"],
    ["Chenonceau", "Chenonceau.php"],
    ["Cheverny", "Cheverny.php"]
];

$castillos_cercanos = [
    ["Castillo de Blois", "Blois.php"],
    ["Castillo de Cheverny", "Cheverny.php"],
    ["Castillo de Chaumont-sur-Loire", "Chaumont.php"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $nombreLugar ?> | Valle del Loira</title>
<meta name="description" content="<?= $descripcion ?>">
<script src="https://cdn.tailwindcss.com"></script>
<style>
  html { scroll-behavior: smooth; }
  .hero:hover { transform: scale(1.05); transition: transform 0.5s ease; }
</style>
</head>
<body class="bg-gray-50 text-gray-800">

<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/enlaces-principales-generico.php"; ?>

<!-- Hero -->
<figure class="relative h-[500px] md:h-[650px] hero bg-cover bg-center rounded-lg overflow-hidden" 
        style="background-image:url('<?= $imagenHero ?>')">
  <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
    <h1 class="text-4xl md:text-5xl text-white font-extrabold text-center"><?= $nombreLugar ?></h1>
  </div>
  <figcaption class="absolute bottom-0 left-0 w-full bg-black bg-opacity-50 text-white text-center py-2 text-sm">
  Fuente: 
  <span class="text-blue-300 cursor-help" title="https://www.traveler.es/naturaleza/articulos/castillo-del-loira-chambord-nuevo-jardin/10879">
    Traveler.es
  </span>
</figcaption>




</figure>


<!-- Contenido principal -->
<main class="container mx-auto px-6 py-10 grid lg:grid-cols-12 gap-8">

  <!-- Aside izquierdo -->
  <aside class="lg:col-span-2 space-y-6">
    <div class="bg-emerald-50 p-4 rounded-lg shadow">
      <h3 class="font-semibold text-emerald-700 mb-2">🏰 Otros castillos</h3>
      <ul class="list-disc list-inside space-y-1">
        <?php foreach($otros_castillos as $c): ?>
          <li><a href="<?= $c[1] ?>" class="hover:underline text-emerald-700"><?= $c[0] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
      [Publicidad lateral]
    </div>
  </aside>

  <!-- Contenido central -->
  <article class="lg:col-span-8 space-y-10">

    <!-- Introducción -->
    <?php $slug_section = "introducion";
    require "{$slug}/{$slug_section}/data.php"; ?>

    <!-- Tragetas de navegación -->
    <?php $slug_section = "targetas-navegacion";
    require "{$slug}/{$slug_section}/data.php"; ?>

    <!-- Historia -->
    <?php $slug_section = "historia";
    require "{$slug}/{$slug_section}/data.php"; ?>

    <!-- Arquitectura -->
    <?php $slug_section = "arquitectura";
    require "{$slug}/{$slug_section}/data.php"; 
    require "{$slug}/sections/print-section.php"; ?>

    <!-- Galería -->
    <?php $slug_section = "galeria";
    require "{$slug}/{$slug_section}/data.php"; 
    require "{$slug}/sections/print-section.php"; ?>


    <!-- Información práctica -->
    <?php $slug_section = "informacion-practica";
    require "{$slug}/{$slug_section}/data.php"; ?>

  </article>

  <!-- Aside derecho -->
  <aside class="lg:col-span-2 space-y-6">
    <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
      [Publicidad lateral]
    </div>

    <div class="bg-emerald-50 p-4 rounded-lg shadow">
      <h3 class="font-semibold text-emerald-700 mb-2">📌 Consejos</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li>Sube a la terraza para vistas panorámicas.</li>
        <li>Lleva calzado cómodo, el dominio es extenso.</li>
        <li>No te pierdas los espectáculos ecuestres en verano.</li>
      </ul>
    </div>

    <div class="bg-white p-4 rounded-lg shadow">
      <h3 class="font-semibold text-emerald-700 mb-2">🏰 Castillos cercanos</h3>
      <ul class="list-disc list-inside text-gray-700 space-y-1">
        <?php foreach($castillos_cercanos as $c): ?>
          <li><a href="<?= $c[1] ?>" class="hover:underline text-emerald-700"><?= $c[0] ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </aside>
</main>

  <!-- Footer -->
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>


</body>
</html>
