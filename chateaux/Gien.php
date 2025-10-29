<?php //$slug = "gien"; ?>
<?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/html-castillos-generico.php"; ?>

<?php
// ======================================================
// Château de Gien — Página autocontenida (PHP)
// ======================================================

$nombreLugar = "Château de Gien";
$slug = "chateau-de-gien";
$ciudad = "Gien";
$descripcion = "El Château de Gien, situado a orillas del río Loira, destaca por su historia ligada a la monarquía francesa y por su museo de caza. Reconstructed en estilo renacentista, es un punto de interés importante en la región del Loira.";
$imagenHero = "https://upload.wikimedia.org/wikipedia/commons/4/40/Chateau_de_Gien_-_Fa%C3%A7ade_sur_la_Loire.jpg";
$web_oficial = "https://es.wikipedia.org/wiki/Ch%C3%A2teau_de_Gien";
$latitude = 47.6919;
$longitude = 2.6064;
$direccion = "Place Jean Jaurès, 45500 Gien, Francia";
$horario_apertura = "10:00";
$horario_cierre = "18:00";
$keywords = "$nombreLugar, Gien, Valle del Loira, castillos, museo de caza";

// Galería / figuras
$figuras = [
  [
    'src' => $imagenHero,
    'alt' => 'Château de Gien - fachada sobre el Loira',
    'pie' => 'Fachada del Château de Gien sobre el río Loira',
    'fuente' => $web_oficial,
    'fuente_texto' => 'wikipedia.org'
  ],
  [
    'src' => 'https://upload.wikimedia.org/wikipedia/commons/6/66/Ch%C3%A2teau_de_Gien_Interieur.jpg',
    'alt' => 'Interior del Château de Gien',
    'pie' => 'Interior y salones del castillo',
    'fuente' => $web_oficial,
    'fuente_texto' => 'wikipedia.org'
  ],
  [
    'src' => 'https://upload.wikimedia.org/wikipedia/commons/3/34/Gien_chateau_and_la_loire.jpg',
    'alt' => 'Vista lateral y río Loira',
    'pie' => 'El castillo junto al Loira',
    'fuente' => $web_oficial,
    'fuente_texto' => 'wikipedia.org'
  ]
];

// Castillos / puntos cercanos
$castillos_cercanos = [
  ['nombre' => 'Sully-sur-Loire', 'url' => '/val-de-loire/chateaux/Sully-sur-Loire.php', 'descripcion' => 'Fortaleza medieval sobre el Loira.'],
  ['nombre' => 'Château de Chambord', 'url' => '/val-de-loire/chateaux/Chambord.php', 'descripcion' => 'La joya renacentista con la escalera de doble hélice.'],
  ['nombre' => 'Orléans (Catedral)', 'url' => '/val-de-loire/ciudades/catedral-sainte-croix.php', 'descripcion' => 'Centro histórico y patrimonio religioso.']
];

// Lugares destacados cercanos
$items = [
  [
    "titulo" => "Museo de la Caza de Gien",
    "descripcion" => "Colección permanente dedicada a la caza y la historia local, ubicada en las salas del castillo.",
    "imagen" => [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/8/8b/Musee_de_Gien.jpg",
      "alt" => "Museo de la Caza - Gien",
      "fuente" => $web_oficial,
      "fuente_texto" => "wikipedia.org"
    ]
  ],
  [
    "titulo" => "Paseo por la ribera del Loira",
    "descripcion" => "Tramos peatonales y miradores que permiten contemplar el castillo desde el río y disfrutar del entorno natural.",
    "imagen" => [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/9/9e/Loire_at_Gien.jpg",
      "alt" => "Ribera del Loira en Gien",
      "fuente" => $web_oficial,
      "fuente_texto" => "wikipedia.org"
    ]
  ]
];

// Helpers
function esc($s){ return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= esc($nombreLugar) ?> — <?= esc($ciudad) ?></title>
  <meta name="description" content="<?= esc($descripcion) ?>">
  <meta name="keywords" content="<?= esc($keywords) ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <style>
    body{background:#f7fafc;font-family:Inter, ui-sans-serif, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial}
    .container{max-width:1100px;margin:0 auto;padding:24px}
  </style>
</head>
<body>
  <main class="container">

    <!-- Hero -->
    <header class="bg-white rounded-2xl p-6 shadow mb-6 flex gap-6 items-center">
      <img src="<?= esc($imagenHero) ?>" alt="<?= esc($nombreLugar) ?>" class="w-48 h-36 object-cover rounded-md shadow-sm">
      <div>
        <h1 class="text-2xl font-bold text-emerald-700"><?= esc($nombreLugar) ?></h1>
        <p class="text-gray-600 mt-1"><?= esc($descripcion) ?></p>
        <p class="text-sm text-gray-500 mt-2"><?= esc($direccion) ?> — <strong>Horario</strong> <?= esc($horario_apertura) ?>–<?= esc($horario_cierre) ?></p>
      </div>
    </header>

    <!-- Introducción -->
    <section id="introduccion" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">🏰 Introducción</h2>
      <p class="text-gray-700 leading-relaxed">
        <?= esc($descripcion) ?>
      </p>
    </section>

    <!-- Historia -->
    <section id="historia" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">📜 Historia</h2>
      <p class="text-gray-700 leading-relaxed">
        El emplazamiento ha tenido fortificaciones desde la Edad Media; el castillo actual, con rasgos renacentistas, fue ampliado y transformado a lo largo de los siglos.
        Su historia está íntimamente ligada al control del Loira y a la vida social y cultural de la región.
      </p>
    </section>

    <!-- Arquitectura -->
    <section id="arquitectura" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">🏛 Arquitectura</h2>
      <p class="text-gray-700 leading-relaxed">
        El Château de Gien combina elementos defensivos con detalles renacentistas: torres, muros clásicos y una elegante fachada que se asoma al río.
        En su interior destacan salas restauradas y colecciones que muestran la vida de la nobleza local.
      </p>
    </section>

    <!-- Galería -->
    <section id="galeria" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">📸 Galería</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php foreach($figuras as $f): ?>
          <figure class="bg-gray-50 rounded-lg p-2">
            <img src="<?= esc($f['src']) ?>" alt="<?= esc($f['alt']) ?>" class="w-full h-48 object-cover rounded-md">
            <figcaption class="text-xs text-gray-500 mt-2"><?= esc($f['pie']) ?> — Fuente: <span class="text-gray-400"><?= esc($f['fuente_texto']) ?></span></figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Información práctica -->
    <section id="informacion-practica" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">ℹ️ Información práctica</h2>
      <ul class="list-disc list-inside text-gray-700">
        <li><strong>Dirección:</strong> <?= esc($direccion) ?></li>
        <li><strong>Horario:</strong> <?= esc($horario_apertura) ?> — <?= esc($horario_cierre) ?></li>
        <li><strong>Entradas:</strong> Tarifas variables (consulta el web oficial para exposiciones y horarios especiales).</li>
        <li><strong>Acceso:</strong> A pie desde el centro de Gien; aparcamiento público cercano.</li>
      </ul>
    </section>

    <!-- Consejos -->
    <section id="consejos" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">📌 Consejos</h2>
      <ul class="list-disc list-inside text-gray-700">
        <li>Visita temprano para disfrutar de la fachada con luz suave sobre el río.</li>
        <li>Combina la visita con un paseo ribereño y una parada en el museo de la caza.</li>
        <li>Revisa la programación de exposiciones temporales antes de acudir.</li>
      </ul>
    </section>

    <!-- Lugares destacados -->
    <section id="lugares" class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">🏛 Lugares cercanos</h2>
      <div class="grid sm:grid-cols-2 gap-6">
        <?php foreach ($items as $item): ?>
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition p-4 text-center">
          <figure class="mb-3">
            <img src="<?= esc($item['imagen']['src']) ?>" alt="<?= esc($item['imagen']['alt']) ?>" class="rounded-lg mx-auto">
            <figcaption class="text-xs text-gray-400 mt-1">Fuente: <?= esc($item['imagen']['fuente_texto']) ?></figcaption>
          </figure>
          <h3 class="text-lg font-semibold text-emerald-600 mb-2"><?= esc($item['titulo']) ?></h3>
          <p class="text-gray-600 text-sm text-left">
            <?= esc($item['descripcion']) ?>
            <a href="<?= esc($item['imagen']['fuente']) ?>" class="text-emerald-600 font-medium hover:underline ml-1">Más info &rarr;</a>
          </p>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Castillos cercanos -->
    <section class="bg-white rounded-2xl p-6 shadow mb-6">
      <h2 class="text-xl font-semibold text-gray-800 mb-3">🏰 Castillos y puntos próximos</h2>
      <ul class="list-disc list-inside text-gray-700">
        <?php foreach($castillos_cercanos as $c): ?>
          <li><a href="<?= esc($c['url']) ?>" class="text-emerald-700 hover:underline"><?= esc($c['nombre']) ?></a> — <?= esc($c['descripcion']) ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <!-- Footer pequeño -->
    <footer class="text-center text-sm text-gray-500 mt-8 mb-8">
      <p>© <?= date('Y') ?> — Página informativa no oficial. Fuente: <a href="<?= esc($web_oficial) ?>" class="text-emerald-700 hover:underline" target="_blank" rel="noopener noreferrer"><?= esc(parse_url($web_oficial, PHP_URL_HOST)) ?></a>.</p>
    </footer>

  </main>

  <!-- JSON-LD para SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "TouristAttraction",
    "name": "<?= esc($nombreLugar) ?>",
    "description": "<?= esc($descripcion) ?>",
    "image": "<?= esc($imagenHero) ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?= esc($direccion) ?>",
      "addressLocality": "<?= esc($ciudad) ?>",
      "addressCountry": "FR"
    },
    "url": "https://www.tusitioweb.com/val-de-loire/chateaux/<?= esc($slug) ?>.php",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?= $latitude ?>,
      "longitude": <?= $longitude ?>
    },
    "sameAs": [
      "<?= esc($web_oficial) ?>"
    ],
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
      "opens": "<?= esc($horario_apertura) ?>",
      "closes": "<?= esc($horario_cierre) ?>"
    }
  }
  </script>

</body>
</html>
