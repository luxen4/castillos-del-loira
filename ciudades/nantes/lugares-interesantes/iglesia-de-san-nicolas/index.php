<?php
// iglesia-san-nicolas.php
// Datos (edítalos según convenga)
$nombreLugar = "Iglesia de San Nicolás";
$ciudad = "Nantes";
$slug = "iglesia-san-nicolas";

$title = "$nombreLugar – $ciudad | Valle del Loira";
$descripcion = "$nombreLugar en $ciudad: templo histórico con arquitectura gótica (oportuna descripción local), patrimonio cultural y visitas recomendadas.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/7/7b/Nantes_cathedrale.jpg"; // reemplaza por imagen real

$intro = [
  "parrafos" => [
    "La <strong>$nombreLugar</strong> es un templo emblemático de $ciudad, con siglos de historia y un rico patrimonio artístico. Su arquitectura destaca por sus elementos góticos y su papel central en la vida religiosa y cultural de la ciudad.",
    "Situada cerca del centro histórico, la iglesia ofrece visitas guiadas, una atmósfera tranquila para la contemplación y detalles artísticos (retablos, vidrieras y esculturas) que merecen una inspección pausada.",
    "Es un lugar perfecto para quienes disfrutan del patrimonio histórico, la fotografía arquitectónica y las curiosidades locales."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/7/7b/Nantes_cathedrale.jpg",
      "alt" => "$nombreLugar - vista exterior",
      "caption" => "Fachada de la $nombreLugar",
      "fuente" => "https://es.wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Interieur_cathedrale_Nantes.jpg",
      "alt" => "Interior de la $nombreLugar",
      "caption" => "Interior y vidrieras",
      "fuente" => "https://es.wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ]
  ]
];

$galeria = [
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/7/7b/Nantes_cathedrale.jpg",
    "alt" => "Fachada principal",
    "caption" => "Fachada principal de la iglesia",
    "fuente" => "https://es.wikipedia.org",
    "fuente_texto" => "wikipedia.org"
  ],
  [
    "src" => "https://upload.wikimedia.org/wikipedia/commons/0/0c/Interieur_cathedrale_Nantes.jpg",
    "alt" => "Interior y retablo",
    "caption" => "Interior y retablo",
    "fuente" => "https://es.wikipedia.org",
    "fuente_texto" => "wikipedia.org"
  ]
];

$info = [
  "titulo" => "ℹ️ Información práctica",
  "items" => [
    ["icono" => "📍", "titulo" => "Ubicación", "descripcion" => "Centro histórico, $ciudad"],
    ["icono" => "🕰️", "titulo" => "Horario", "descripcion" => "Consultar horario de misa y visitas (variable según temporada)"],
    ["icono" => "💶", "titulo" => "Precio", "descripcion" => "Entrada gratuita (donación voluntaria) / visitas guiadas con tarifa reducida"],
    ["icono" => "♿", "titulo" => "Accesibilidad", "descripcion" => "Acceso limitado: consultar condiciones para movilidad reducida"]
  ]
];

$actividades = [
  "titulo" => "🏛️ Actividades",
  "items" => [
    ["icono" => "📸", "texto" => "Fotografía arquitectónica (respetando las normas del templo)"],
    ["icono" => "🔔", "texto" => "Asistir a una misa o concierto de órgano si hay programación"],
    ["icono" => "📚", "texto" => "Visita guiada para conocer historia y patrimonio"]
  ]
];

$mapa = [
  "centro" => [47.218371, -1.553621], // coordenadas ejemplares de Nantes (ajusta si hace falta)
  "zoom" => 15,
  "marker" => [47.218371, -1.553621]
];

$contacto = [
  "telefono" => "+33 2 40 00 00 00",
  "web" => ["texto" => "Web oficial (ej.)", "url" => "https://www.example-official-site.org"]
];

$comentarios = [
  ["nombre" => "Ana", "texto" => "Belleza arquitectónica y ambiente tranquilo; imprescindible en el centro histórico."],
  ["nombre" => "Luis", "texto" => "Me encantaron las vidrieras y el órgano histórico."]
];

// nombre oficial para el enlace final:
$nombre_oficial = "Iglesia de San Nicolás";
$web_oficial = "https://www.example-official-site.org"; // reemplaza por la url oficial real
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="keywords" content="Iglesia, <?= htmlspecialchars($ciudad) ?>, patrimonio, turismo">
  <link rel="icon" href="/favicon.png">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

  <!-- BOTÓN FLOTANTE IR ARRIBA (posición absoluta fija) -->
  <a href="#top" class="fixed right-6 bottom-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 z-50" aria-label="Ir al inicio">
    ↑
  </a>

  <header id="top" class="bg-emerald-700 text-white py-6">
    <div class="container mx-auto px-6">
      <h1 class="text-2xl font-bold">🏛️ <?= htmlspecialchars($nombreLugar) ?></h1>
      <p class="mt-2"><?= htmlspecialchars($descripcion) ?></p>
    </div>
  </header>

  <!-- 🌆 Hero con efecto zoom y mayor altura en escritorio -->
  <section
    class="relative bg-cover bg-center h-64 md:h-96 lg:h-[600px] overflow-hidden group transition-all duration-500"
    style="background-image: url('https://img.freepik.com/fotos-premium/vista-edificio-contra-cielo-nublado_1048944-6749639.jpg');">

    <!-- Capa oscura y texto -->
    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-start transition-all duration-500 group-hover:bg-opacity-30">
      <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl lg:text-5xl text-white font-bold"><?= htmlspecialchars($nombreLugar) ?></h2>
      </div>
    </div>

    <!-- Efecto zoom (imagen de fondo) -->
    <div
      class="absolute inset-0 bg-center bg-cover transition-transform duration-700 group-hover:scale-110"
      style="background-image: url('https://img.freepik.com/fotos-premium/vista-edificio-contra-cielo-nublado_1048944-6749639.jpg');">
    </div>
  </section>



  <main class="container mx-auto px-6 py-10 grid lg:grid-cols-3 gap-8">

    <!-- Columna principal -->
    <article class="lg:col-span-2">
      <!-- Intro -->
      <section class="mb-6">
        <?php foreach ($intro['parrafos'] as $p): ?>
          <p class="text-gray-700 mb-3"><?= $p ?></p>
        <?php endforeach; ?>

        <div class="grid sm:grid-cols-2 gap-4 mt-4">
          <?php foreach ($intro['imagenes'] as $img): ?>
            <figure class="bg-white p-2 rounded shadow">
              <img src="<?= $img['src'] ?>" alt="<?= htmlspecialchars($img['alt']) ?>" class="w-full rounded object-cover">
              <?php if (!empty($img['caption']) || !empty($img['fuente'])): ?>
                <figcaption class="text-xs text-gray-500 mt-2">
                  <?= htmlspecialchars($img['caption']) ?>
                  <?php if (!empty($img['fuente'])): ?>
                    — Fuente: <a href="<?= htmlspecialchars($img['fuente']) ?>" target="_blank" rel="nofollow noopener noreferrer" class="underline"><?= htmlspecialchars($img['fuente_texto'] ?: $img['fuente']) ?></a>
                  <?php endif; ?>
                </figcaption>
              <?php endif; ?>
            </figure>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Galería -->
      <section id="galeria" class="mb-6">
        <h3 class="text-2xl font-semibold text-emerald-700 mb-4">📸 Galería</h3>
        <div class="grid sm:grid-cols-2 gap-4">
          <?php foreach ($galeria as $foto): ?>
            <figure class="bg-white rounded shadow p-2">
              <img src="<?= $foto['src'] ?>" alt="<?= htmlspecialchars($foto['alt']) ?>" class="w-full rounded object-cover">
              <figcaption class="text-xs text-gray-500 mt-2">
                <?= htmlspecialchars($foto['caption']) ?>
                <?php if (!empty($foto['fuente'])): ?>
                  — Fuente: <a href="<?= htmlspecialchars($foto['fuente']) ?>" target="_blank" rel="nofollow noopener noreferrer" class="underline"><?= htmlspecialchars($foto['fuente_texto'] ?: $foto['fuente']) ?></a>
                <?php endif; ?>
              </figcaption>
            </figure>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Actividades -->
      <section id="actividades" class="mb-6">
        <h3 class="text-2xl font-semibold text-emerald-700 mb-3"><?= $actividades['titulo'] ?></h3>
        <ul class="space-y-2">
          <?php foreach ($actividades['items'] as $act): ?>
            <li class="bg-white p-3 rounded shadow flex items-start gap-3">
              <div class="text-xl"><?= $act['icono'] ?></div>
              <div class="text-gray-700"><?= $act['texto'] ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <!-- Comentarios -->
      <section class="mb-6">
        <h3 class="text-2xl font-semibold text-emerald-700 mb-3">🗣️ Opiniones</h3>
        <div class="space-y-3">
          <?php foreach ($comentarios as $c): ?>
            <div class="bg-white p-3 rounded shadow">
              <strong class="text-emerald-700"><?= htmlspecialchars($c['nombre']) ?></strong>
              <p class="text-gray-700 mt-1"><?= htmlspecialchars($c['texto']) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </article>

    <!-- Columna derecha -->
    <aside class="lg:col-span-1 space-y-6">
      <!-- Información práctica -->
      <div class="bg-white p-4 rounded shadow">
        <h4 class="text-xl font-semibold text-emerald-700 mb-3"><?= $info['titulo'] ?></h4>
        <ul class="space-y-2 text-gray-700">
          <?php foreach ($info['items'] as $it): ?>
            <li class="flex items-start gap-3">
              <div class="text-xl"><?= $it['icono'] ?></div>
              <div>
                <div class="font-semibold"><?= htmlspecialchars($it['titulo']) ?></div>
                <div class="text-sm text-gray-600"><?= htmlspecialchars($it['descripcion']) ?></div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Mapa (embed sencillo con link a Google Maps) -->
      <div class="bg-white p-4 rounded shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-2">🗺️ Localización</h4>
        <div class="text-sm text-gray-600 mb-3">Coordenadas aproximadas: <?= implode(', ', $mapa['marker']) ?></div>
        <a class="inline-block bg-emerald-600 text-white px-3 py-2 rounded hover:bg-emerald-700" href="https://www.google.com/maps/search/?api=1&query=<?= urlencode(implode(',', $mapa['marker'])) ?>" target="_blank" rel="noopener noreferrer">Abrir en Google Maps</a>
      </div>

      <!-- Contacto -->
      <div class="bg-white p-4 rounded shadow">
        <h4 class="text-lg font-semibold text-emerald-700 mb-2">📞 Contacto</h4>
        <p class="text-gray-700">Teléfono: <a href="tel:<?= preg_replace('/[^0-9+]/', '', $contacto['telefono']) ?>" class="text-emerald-700"><?= $contacto['telefono'] ?></a></p>
        <?php if (!empty($contacto['web']['url'])): ?>
          <p class="text-gray-700 mt-2">Web: <a href="<?= $contacto['web']['url'] ?>" target="_blank" rel="nofollow noopener noreferrer" class="underline"><?= $contacto['web']['texto'] ?></a></p>
        <?php endif; ?>
      </div>
    </aside>

    <p style="margin: 1em 0; font-size: 1rem; color: #333;">
      ℹ️ Más información: visita la web oficial de
      <?= htmlspecialchars($nombre_oficial) ?>
      <a href="<?= htmlspecialchars($web_oficial) ?>"
        target="_blank"
        rel="nofollow noopener noreferrer"
        style="color: #0645AD; text-decoration: underline;">
        aquí
      </a>.
    </p>

  </main>

  <footer class="bg-gray-100 py-6">
    <div class="container mx-auto px-6 text-gray-600 text-sm">
      © <?= date("Y") ?> · Página informativa sobre <?= htmlspecialchars($nombreLugar) ?>.
    </div>
  </footer>

</body>

</html>