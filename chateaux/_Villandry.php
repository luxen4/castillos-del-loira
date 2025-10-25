<?php
$nombreLugar = "Castillo de Villandry"; $ciudad = ""; $slug = "villandry";
$descripcion = "El Castillo de Villandry, situado en el Valle del Loira, es un espléndido ejemplo de la arquitectura renacentista francesa. Rodeado de jardines y viñedos, ofrece visitas guiadas y eventos culturales que permiten disfrutar de su historia y encanto.";
$imagenHero = "https://st4.depositphotos.com/1766887/38614/i/450/depositphotos_386148530-stock-photo-most-beautiful-castles-europe-chateau.jpg";
$web_oficial = "https://www.chateauvillandry.fr/";

$otros_castillos = [
    ["Chambord", "Chambord.php"],
    ["Chenonceau", "Chenonceau.php"],
    ["Cheverny", "Cheverny.php"]
];

$castillos_cercanos = [
    ["Castillo de Azay-le-Rideau", "Azay-le-Rideau.php"],
    ["Castillo de Langeais", "Langeais.php"],
    ["Castillo de Ussé", "Ussé.php"]
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
<section class="relative h-[500px] md:h-[650px] hero bg-cover bg-center" style="background-image:url('<?= $imagenHero ?>')">
  <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
    <h1 class="text-4xl md:text-5xl text-white font-extrabold text-center"><?= $nombreLugar ?></h1>
  </div>
</section>

<!-- Contenido principal en 3 columnas -->
<main class="container mx-auto px-6 py-10 grid lg:grid-cols-12 gap-8">

  <!-- Columna izquierda: aside -->
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

  <!-- Columna central: contenido principal -->
  <article class="lg:col-span-8 space-y-10">

    <!-- Introducción -->
    <section id="introduccion">
      <h2 class="text-3xl font-bold text-emerald-700 mb-4">✨ Descubre Villandry</h2>
      <p>El <strong>Castillo de Villandry</strong> es un viaje a través de la historia, el arte y la naturaleza de Francia. Sus jardines renacentistas son mundialmente famosos, y cada detalle de su arquitectura refleja siglos de tradición.</p>
      <p>Ubicado en el corazón del Valle del Loira, Villandry ofrece paseos por laberintos de flores, huertos ornamentales y fuentes cuidadosamente diseñadas, haciendo de cada visita una experiencia inolvidable.</p>
    </section>
<!-- Tarjetas de secciones rápidas específicas para Villandry -->
<section class="grid md:grid-cols-4 gap-4">
  <div class="bg-white rounded-lg p-4 shadow-sm">
    <h4 class="font-semibold text-emerald-800 mb-1">🌿 Jardines renacentistas</h4>
    <p>Explora los famosos jardines ornamentales, huertos y laberintos del castillo.</p>
    <a href="#jardines" class="text-blue-600 underline">Ir</a>
  </div>
  <div class="bg-white rounded-lg p-4 shadow-sm">
    <h4 class="font-semibold text-emerald-800 mb-1">🏰 Historia del castillo</h4>
    <p>Descubre la historia del Château de Villandry y su restauración renacentista.</p>
    <a href="#historia" class="text-blue-600 underline">Ir</a>
  </div>
  <div class="bg-white rounded-lg p-4 shadow-sm">
    <h4 class="font-semibold text-emerald-800 mb-1">🎟️ Visitas y horarios</h4>
    <p>Información práctica sobre horarios, entradas y actividades disponibles.</p>
    <a href="#informacion-practica" class="text-blue-600 underline">Ir</a>
  </div>
  <div class="bg-white rounded-lg p-4 shadow-sm">
    <h4 class="font-semibold text-emerald-800 mb-1">📸 Galería</h4>
    <p>Imágenes de los jardines, el interior del castillo y los alrededores.</p>
    <a href="#galeria" class="text-blue-600 underline">Ir</a>
  </div>
</section>

<section id="jardines" class="mt-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4">🌿 Jardines renacentistas del Château de Villandry</h2>
  <p class="text-gray-700 mb-6">
    Los jardines de Villandry son famosos en todo el mundo por su diseño renacentista meticuloso. 
    Incluyen jardines ornamentales, huertos, jardines de agua y un laberinto que encantan a los visitantes de todas las edades.
  </p>
<div class="grid md:grid-cols-3 gap-4">
<figure class="bg-white rounded-lg shadow overflow-hidden">
  <img src="https://asset-prod.france.fr/villandry_59a9db7d87.jpg" 
       alt="Jardines de Villandry" 
       class="w-full h-48 object-cover">
  <figcaption class="p-2 text-gray-600 text-sm text-center">
    Jardines de Villandry <br> Fuente: 
    <a href="https://www.france.fr/es/articulo/el-castillo-y-los-jardines-villandry/" 
       target="_blank" 
       class="text-blue-600 underline">
       france.fr
    </a>
  </figcaption>
</figure>


  <figure class="bg-white rounded-lg shadow overflow-hidden">
    <img src="https://www.valdeloire-france.com/app/uploads/2023/05/villandry-2666-a-iscipion.webp" 
         alt="Jardines ornamentales" 
         class="w-full h-48 object-cover">
    <figcaption class="p-2 text-gray-600 text-sm text-center">
      Jardines ornamentales <br> Fuente: <a href="https://www.valledelloira-francia.es/descubrir/escapada-a-los-jardines/jardines-castillo-villandry/" target="_blank" class="text-blue-600 underline">
        valledelloira-francia.es</a>
    </figcaption>
  </figure>

  <figure class="bg-white rounded-lg shadow overflow-hidden">
    <img src="https://thumbs.dreamstime.com/z/huerto-hermoso-con-el-castillo-francés-villandry-en-fondo-región-del-loira-francia-130737684.jpg?ct=jpeg" 
         alt="Huertos del castillo" 
         class="w-full h-48 object-cover">
    <figcaption class="p-2 text-gray-600 text-sm text-center">
      Huertos del castillo <br> Fuente: <a href="https://es.dreamstime.com/huerto-hermoso-con-el-castillo-franc%C3%A9s-villandry-en-fondo-regi%C3%B3n-del-loira-francia-image130737684" target="_blank" class="text-blue-600 underline">
        dreamstime.com</a>
    </figcaption>
  </figure>
</div>

  <p class="mt-4 text-gray-600">
    Pasea por los diferentes jardines y disfruta de la armonía de sus colores, formas geométricas y la historia que rodea este magnífico lugar.
  </p>
</section>

    <!-- Historia y arquitectura -->
    <section id="historia">
      <h2 class="text-3xl font-bold text-emerald-700 mt-6">Historia y arquitectura</h2>
      <p><?= $descripcion ?></p>
    </section>


      <!-- Introducción -->
      <?php $slug_section = "introduccion"; require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/chateaux/{$slug}/introduccion/data.php"; ?>




<!-- Galería -->
<section id="galeria">
  <h2 class="text-3xl font-bold text-emerald-700 mt-6">Galería</h2>
  <div class="grid md:grid-cols-3 gap-4 mt-4">

    <figure class="bg-white rounded-lg shadow overflow-hidden">
      <img src="https://www.valdeloire-france.com/app/uploads/2023/05/villandry-0807-gillard-et-vincent-crtcentrevdl-1024x767.webp" 
           alt="Vista aerea del castillo de Villandry" 
           class="w-full h-48 object-cover">
      <figcaption class="p-2 text-gray-600 text-sm text-center">
        Vista aerea <br> Fuente: <a href="https://www.valledelloira-francia.es/descubrir/castillos-loira/castillo-villandry/" target="_blank" class="text-blue-600 underline">Val de Loire France</a>
      </figcaption>
    </figure>

    <figure class="bg-white rounded-lg shadow overflow-hidden">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmTepUiDkUV-KYr5TAKlfKpNuBLzP4YhPIWw&s" 
           alt="Jardines del castillo de Villandry" 
           class="w-full h-48 object-cover">
      <figcaption class="p-2 text-gray-600 text-sm text-center">
        Interior <br> Fuente: <a href="https://www.viajeroscallejeros.com/visitar-castillo-villandry/" target="_blank" class="text-blue-600 underline">
            viajeroscallejeros.com</a>
      </figcaption>
    </figure>

    <figure class="bg-white rounded-lg shadow overflow-hidden">
      <img src="https://www.cometoparis.com/data/layout_grouping/product_index_slideshow/39381_chateau_jardin_villandry_jardin_soleil-8.jpg?ver=1675417719" 
           alt="Fuentes del castillo de Villandry" 
           class="w-full h-48 object-cover">
      <figcaption class="p-2 text-gray-600 text-sm text-center">
        Fuentes <br> Fuente: <a href="https://www.cometoparis.com/spa/castillos-del-loira/castillo-de-villandry-m9000624" target="_blank" class="text-blue-600 underline">
            cometoparis.com</a>
      </figcaption>
    </figure>

  </div>
</section>


    <!-- Visitas y actividades -->
    <section id="visitas">
      <h2 class="text-3xl font-bold text-emerald-700 mt-6">Visitas y actividades</h2>
      <ul class="list-disc list-inside space-y-2">
        <li>Recorrido por los jardines renacentistas y huertos ornamentales.</li>
        <li>Visitas guiadas al interior del castillo.</li>
        <li>Eventos culturales y exposiciones temporales.</li>
        <li>Degustación de productos locales y vino de la región.</li>
      </ul>
    </section>






      <!-- Información práctica -->
      <?php $slug_section = "informacion-practica"; require "{$slug}/{$slug_section}/data.php"; ?>


  

  </article>

  <!-- Columna derecha: aside -->
  <aside class="lg:col-span-2 space-y-6">
    <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
      [Publicidad lateral]
    </div>

    <div class="bg-emerald-50 p-4 rounded-lg shadow">
      <h3 class="font-semibold text-emerald-700 mb-2">📌 Consejos</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li>Lleva calzado cómodo para recorrer los jardines.</li>
        <li>Visita temprano para evitar multitudes.</li>
        <li>No olvides cámara o móvil para fotos de los jardines y fuentes.</li>
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
