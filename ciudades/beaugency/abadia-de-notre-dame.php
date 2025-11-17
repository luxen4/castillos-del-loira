<?php
// Variables principales
$nombreLugar  = "Abbatiale Notre-Dame de Beaugency";
$ciudad       = "Beaugency";
$slug         = "abbatiale-notre-dame-beaugency";
$descripcion  = "La Abadía de Notre Dame de Beaugency es una joya del románico en el Valle del Loira, testigo de concilios, guerras y renovaciones, con una atmósfera de paz y patrimonio histórico excepcional.";
$imagenHero   = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Beaugency_Loiret_03.jpg/1280px-Beaugency_Loiret_03.jpg";  // ejemplo imagen
$web_oficial  = "https://www.beaugency.fr/point-d-interet/labbatiale-notre-dame/";  
$latitude     = 47.7774;
$longitude    = 1.6302;
$direccion    = "Rue de l'Abbaye, 45190 Beaugency, Francia";
$horario_apertura = "09:00";
$horario_cierre   = "18:00";
$keywords     = "$nombreLugar, Beaugency, turismo Valle del Loira, románico francés, patrimonio UNESCO";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($nombreLugar) ?> — <?= htmlspecialchars($ciudad) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>body { font-family: Inter, ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }</style>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TouristAttraction",
    "name": "<?= htmlspecialchars($nombreLugar) ?>",
    "description": "<?= htmlspecialchars($descripcion) ?>",
    "image": "<?= htmlspecialchars($imagenHero) ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?= htmlspecialchars($direccion) ?>",
      "addressLocality": "<?= htmlspecialchars($ciudad) ?>",
      "addressCountry": "FR"
    },
    "url": "https://www.alayag82.kesug.com/val-de-loire/chateaux/<?= $slug ?>.php",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?= $latitude ?>,
      "longitude": <?= $longitude ?>
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
      ],
      "opens": "<?= $horario_apertura ?>",
      "closes": "<?= $horario_cierre ?>"
    },
    "sameAs": [
      "<?= htmlspecialchars($web_oficial) ?>",
      "https://www.facebook.com/Abbatiale-Notre-Dame-Beaugency-228281150996405/",
      "https://twitter.com/BeaugencyVille"
    ]
  }
  </script>
</head>
<body class="bg-gray-50 text-gray-800">

  <header class="bg-emerald-700 text-white py-6 shadow-md">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold">⛪ <?= htmlspecialchars($nombreLugar) ?></h1>
      <nav class="flex gap-6">
        <a href="/val-de-loire/index.php" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/ciudades/beaugency.php" class="hover:underline">Beaugency</a>
        <a href="<?= htmlspecialchars($web_oficial) ?>" target="_blank" rel="noopener noreferrer" class="hover:underline">Web oficial</a>
      </nav>
    </div>
  </header>

  <section class="relative bg-cover bg-center h-80 sm:h-96 md:h-[500px] lg:h-[600px]" style="background-image: url('<?= htmlspecialchars($imagenHero) ?>');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
      <h2 class="text-3xl md:text-4xl lg:text-5xl text-white font-extrabold text-center px-4">
        <?= htmlspecialchars($ciudad) ?>
      </h2>
    </div>
  </section>

  <main class="container mx-auto px-1 py-12 grid lg:grid-cols-4 gap-10">

    <aside class="hidden lg:block space-y-8">
      <section class="bg-white p-6 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-3">🔗 Enlaces útiles</h4>
        <ul class="space-y-2 text-gray-700">
          <li><a href="<?= htmlspecialchars($web_oficial) ?>" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">Página oficial de la Abadía</a></li>
          <li><a href="https://www.tourismeloiret.com/fr/diffusio/visites/abbatiale-notre-dame-beaugency_TFOPCUCEN0450100217" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">Tourisme Loiret – Abbatiale</a></li>
          <li><a href="https://es.wikipedia.org/wiki/Église_Notre-Dame_de_Beaugency" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline">Wikipedia – Église Notre-Dame de Beaugency</a></li>
        </ul>
      </section>
    </aside>

    <article class="lg:col-span-2">
      <h3 class="text-xl md:text-2xl lg:text-2xl font-bold text-emerald-700 mb-4"><?= htmlspecialchars($nombreLugar) ?></h3>
      <p class="text-gray-700 mb-6"><?= htmlspecialchars($descripcion) ?></p>

      <section id="historia" class="bg-white rounded-2xl p-6 shadow mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-3">📜 Historia</h2>
        <p class="text-gray-700 leading-relaxed mb-4">La construcción comenzó al final del siglo XI y la iglesia fue transformada en abacial románica. En 1152 en este lugar se celebró uno de los concilios históricos que anuló el matrimonio del rey Luis VII con Aliénor d’Aquitaine. En 1429, la ciudad fue liberada por la Juana de Arco durante la Guerra de los Cien Años. :contentReference[oaicite:2]{index=2}</p>
      </section>

      <section id="arquitectura" class="bg-white rounded-2xl p-6 shadow mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-3">🏛 Arquitectura</h2>
        <p class="text-gray-700 leading-relaxed mb-4">El edificio conserva elementos de arquitectura románica y gótica local. Su chevet y tramo transepto son del siglo XII, con arcos de medio punto y una sobria fachada que contrasta con las iglesias góticas más decoradas de la región. :contentReference[oaicite:3]{index=3}</p>
      </section>

      <section id="informacion-practica" class="bg-white rounded-2xl p-6 shadow mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-3">ℹ️ Información práctica</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li><strong>Dirección:</strong> <?= htmlspecialchars($direccion) ?></li>
          <li><strong>Horario:</strong> <?= htmlspecialchars($horario_apertura) ?> – <?= htmlspecialchars($horario_cierre) ?> (todos los días) :contentReference[oaicite:4]{index=4}</li>
          <li><strong>Entrada:</strong> Libre, infórmate sobre visitas guiadas en la oficina de turismo.</li>
          <li><strong>Acceso:</strong> En la ciudad de Beaugency, a 25 km de Orléans, en la orilla derecha del Loira.</li>
        </ul>
      </section>

      <section id="galeria" class="bg-white rounded-2xl p-6 shadow mb-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-3">📸 Galería</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <figure>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Beaugency_Loiret_03.jpg/1280px-Beaugency_Loiret_03.jpg" alt="Abbatiale Notre-Dame de Beaugency exterior" class="w-full h-56 object-cover rounded-lg shadow-sm">
            <figcaption class="text-xs text-gray-500 mt-1">Vista exterior de la Abbatiale Notre-Dame — Fuente: Wikimedia</figcaption>
          </figure>
          <figure>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Beaugency_Abbatiale_int%C3%A9rieur.jpg/1280px-Beaugency_Abbatiale_int%C3%A9rieur.jpg" alt="Interior Abbatiale Notre-Dame de Beaugency" class="w-full h-56 object-cover rounded-lg shadow-sm">
            <figcaption class="text-xs text-gray-500 mt-1">Interior con vidrieras románicas — Fuente: Wikimedia</figcaption>
          </figure>
        </div>
      </section>

      <section id="localizacion" class="mt-10">
        <h2 class="text-3xl font-bold text-emerald-600 text-center mb-6">📍 Localización</h2>
        <div class="flex justify-center">
          <div class="rounded-2xl overflow-hidden shadow-lg border-4 border-emerald-600 w-full hover:shadow-2xl transition-shadow duration-300">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2325.123456789!2d1.6292!3d47.7774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5m2!1ses!2ses"
              class="w-full h-80" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </section>

    </article>

    <aside class="space-y-8">
      <section class="bg-white rounded-2xl shadow p-6">
        <h4 class="text-lg font-bold text-emerald-700 mb-4">🗞️ Noticias de Beaugency</h4>
        <ul class="space-y-3 text-sm text-gray-700">
          <li><a href="#" class="hover:underline">Evento musical en la Abbatiale Notre-Dame 2025</a></li>
          <li><a href="#" class="hover:underline">Ruta patrimonial Loira: Beaugency al atardecer</a></li>
          <li><a href="#" class="hover:underline">Exposición “Tesoro románico” en Orléans</a></li>
        </ul>
      </section>
    </aside>

  </main>

  <footer class="bg-emerald-50 py-10 mt-12">
    <div class="container mx-auto px-6 text-center">
      <h4 class="text-lg font-bold text-emerald-700 mb-4">Patrocinadores del Valle del Loira</h4>
      <div class="flex flex-wrap justify-center gap-6">
        <img src="/img/patrocinador1.png" alt="Patrocinador 1" class="h-12">
        <img src="/img/patrocinador2.png" alt="Patrocinador 2" class="h-12">
        <img src="/img/patrocinador3.png" alt="Patrocinador 3" class="h-12">
      </div>
    </div>
  </footer>

</body>
</html>
