<?php
$nombreLugar = "Castillo de los Duques de Bretaña";
$ciudad = "Nantes";
$descripcion = "El Castillo de los Duques de Bretaña (Château des Ducs de Bretagne) es una fortaleza medieval y palacio renacentista en el corazón de Nantes. Alberga el Museo de Historia de la ciudad y combina patrimonio, arte y tecnología para ofrecer una experiencia cultural única.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/1/1b/Chateau_des_ducs_de_Bretagne_Nantes.jpg";
$web_oficial = "https://www.chateaunantes.fr/";

$otros_castillos = [
    ["Castillo de Chambord", "Chambord.php"],
    ["Castillo de Chenonceau", "Chenonceau.php"],
    ["Castillo de Villandry", "Villandry.php"]
];

$castillos_cercanos = [
    ["Castillo de Clisson", "Clisson.php"],
    ["Castillo de Blain", "Blain.php"],
    ["Castillo de Châteaubriant", "Chateaubriant.php"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $nombreLugar ?> | Nantes | Valle del Loira</title>
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

  <!-- Artículo central -->
  <article class="lg:col-span-8 space-y-10">

    <!-- Introducción -->
    <section id="introduccion">
      <h2 class="text-3xl font-bold text-emerald-700 mb-4">🏰 Descubre el Castillo de los Duques de Bretaña</h2>
      <p>En pleno centro histórico de <strong>Nantes</strong>, el Castillo de los Duques de Bretaña es una joya arquitectónica que combina <em>murallas medievales</em>, un elegante <em>palacio renacentista</em> y un moderno <strong>museo interactivo</strong>.</p>
      <p>Su foso, jardines interiores y pasarelas permiten recorrer la historia bretona mientras se disfruta de vistas únicas de la ciudad.</p>
    </section>

    <!-- Tarjetas de secciones rápidas -->
    <section class="grid md:grid-cols-4 gap-4">
      <div class="bg-white rounded-lg p-4 shadow-sm">
        <h4 class="font-semibold text-emerald-800 mb-1">🏰 Historia y arquitectura</h4>
        <p>Del siglo XV al XXI, testigo de la historia bretona y francesa.</p>
        <a href="#historia" class="text-blue-600 underline">Ir</a>
      </div>
      <div class="bg-white rounded-lg p-4 shadow-sm">
        <h4 class="font-semibold text-emerald-800 mb-1">🏛️ Museo de Nantes</h4>
        <p>Más de 800 objetos y recursos multimedia narran la evolución de Nantes.</p>
        <a href="#museo" class="text-blue-600 underline">Ir</a>
      </div>
      <div class="bg-white rounded-lg p-4 shadow-sm">
        <h4 class="font-semibold text-emerald-800 mb-1">🎟️ Información práctica</h4>
        <p>Horarios, tarifas y cómo llegar fácilmente al castillo.</p>
        <a href="#informacion" class="text-blue-600 underline">Ir</a>
      </div>
      <div class="bg-white rounded-lg p-4 shadow-sm">
        <h4 class="font-semibold text-emerald-800 mb-1">📸 Galería</h4>
        <p>Imágenes del castillo, su foso, patios y murallas.</p>
        <a href="#galeria" class="text-blue-600 underline">Ir</a>
      </div>
    </section>

    <!-- Historia -->
    <section id="historia" class="mt-10">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">Historia y arquitectura</h2>
      <p>Construido entre los siglos XV y XVI por Francisco II, último duque de Bretaña, y su hija Ana de Bretaña, el castillo sirvió como fortaleza defensiva y residencia ducal. Más tarde se convirtió en cuartel y prisión antes de ser restaurado como museo.</p>
      <p>Su mezcla de estilos gótico y renacentista lo convierte en uno de los monumentos más representativos del patrimonio bretón.</p>
    </section>

    <!-- Museo -->
    <section id="museo" class="mt-10">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">Museo de Historia de Nantes</h2>
      <p>El castillo alberga el <strong>Museo de Historia de Nantes</strong>, con 32 salas que presentan la evolución de la ciudad, desde el comercio atlántico y la industrialización hasta su papel actual como capital regional.</p>
      <p>Exposiciones temporales, proyecciones audiovisuales y talleres educativos hacen del museo una visita ideal para todas las edades.</p>
    </section>

    <!-- Galería -->
    <section id="galeria" class="mt-10">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">Galería</h2>
      <div class="grid md:grid-cols-3 gap-4 mt-4">

        <figure class="bg-white rounded-lg shadow overflow-hidden">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Chateau_des_ducs_de_Bretagne_Nantes.jpg" 
               alt="Fachada principal del castillo de los Duques de Bretaña" 
               class="w-full h-48 object-cover">
          <figcaption class="p-2 text-gray-600 text-sm text-center">
            Fachada principal <br> Fuente: 
            <a href="https://es.wikipedia.org/wiki/Castillo_de_los_Duques_de_Breta%C3%B1a" target="_blank" class="text-blue-600 underline">Wikipedia</a>
          </figcaption>
        </figure>

        <figure class="bg-white rounded-lg shadow overflow-hidden">
          <img src="https://www.nantes-tourisme.com/sites/default/files/styles/visuel_principal/public/2020-09/Ch%C3%A2teau%20des%20ducs%20de%20Bretagne_0.jpg" 
               alt="Patio interior del castillo de Nantes" 
               class="w-full h-48 object-cover">
          <figcaption class="p-2 text-gray-600 text-sm text-center">
            Patio interior <br> Fuente: 
            <a href="https://www.nantes-tourisme.com/" target="_blank" class="text-blue-600 underline">nantes-tourisme.com</a>
          </figcaption>
        </figure>

        <figure class="bg-white rounded-lg shadow overflow-hidden">
          <img src="https://www.france.fr/sites/default/files/styles/og_image/public/medias/2020-07/chateau-nantes-hero.jpg" 
               alt="Vista nocturna del castillo iluminado" 
               class="w-full h-48 object-cover">
          <figcaption class="p-2 text-gray-600 text-sm text-center">
            Vista nocturna <br> Fuente: 
            <a href="https://www.france.fr/es/articulo/castillo-de-los-duques-de-bretana-nantes" target="_blank" class="text-blue-600 underline">france.fr</a>
          </figcaption>
        </figure>

      </div>
    </section>

    <!-- Información práctica -->
    <section id="informacion" class="mt-10">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">ℹ️ Información práctica</h2>
      <ul class="list-disc list-inside space-y-1">
        <li>Dirección: 4 Place Marc Elder, 44000 Nantes, Francia.</li>
        <li>Horario: Martes a domingo de 10:00 a 18:00 (verano hasta las 19:00).</li>
        <li>Precio: Adultos 9€, estudiantes 5€, menores de 18 años gratis.</li>
        <li>Acceso: Tranvía línea 1 – Parada “Duchesse Anne - Château”.</li>
      </ul>
      <p class="mt-2">
        ℹ️ Más información: visita la web oficial de <?= $nombreLugar ?> 
        <a href="<?= $web_oficial ?>" target="_blank" rel="nofollow noopener noreferrer" style="color:#1a0dab; text-decoration:underline;">aquí</a>.
      </p>
    </section>

  </article>

  <!-- Aside derecho -->
  <aside class="lg:col-span-2 space-y-6">
    <div class="bg-gray-100 p-4 rounded-lg shadow text-center text-gray-500">
      [Publicidad lateral]
    </div>
    <div class="bg-emerald-50 p-4 rounded-lg shadow">
      <h3 class="font-semibold text-emerald-700 mb-2">📌 Consejos</h3>
      <ul class="list-disc list-inside space-y-1 text-gray-700">
        <li>Visita de noche para ver la iluminación del castillo.</li>
        <li>Explora el foso y las murallas, acceso gratuito.</li>
        <li>Reserva tus entradas al museo con antelación.</li>
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
<footer class="bg-gray-800 text-gray-200 py-8 text-center space-y-2">
  <p>&copy; <?= date('Y'); ?> Tu Nombre. Todos los derechos reservados.</p>
  <p>📧 <a href="mailto:correo@tudominio.com" class="hover:underline">correo@tudominio.com</a></p>
</footer>

</body>
</html>
