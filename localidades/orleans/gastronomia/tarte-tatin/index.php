<?php
// -------------------------
// Tarte Tatin - Orléans
// -------------------------
$siteName       = "Valle del Loira";
$nombrePagina   = "Tarte Tatin de Orléans";
$ciudad         = "Orléans";
$slug           = "tarte-tatin-orleans";
$descripcion    = "La Tarte Tatin de Orléans: una versión local de la famosa tarta invertida de manzana, jugosa, caramelizada y perfecta para terminar una comida con un vino dulce del Loira.";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/6/6b/Tarte_Tatin_%281%29.jpg";
$canonical      = "https://tusitioweb.com/val-de-loire/gastronomia/{$slug}.php";
$keywords       = "Tarte Tatin Orléans, Tarte Tatin receta, postres Valle del Loira, gastronomía Orléans, tarta de manzana francesa";
$author         = "Valle del Loira Web";
$twitterHandle  = "@adrianLaya";
$source_info    = "https://www.france.fr/es/gastronomia/receta-tarte-tatin"; // ejemplo fuente
$publishYear    = date("Y");

// Datos de la receta (estructurados)
$yield = "6 porciones";
$prepTime = "PT20M";
$cookTime = "PT40M";
$totalTime = "PT1H";
$ratingValue = "4.6";
$reviewCount = "214";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?= htmlspecialchars("$nombrePagina | $ciudad - $siteName") ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>" />
  <meta name="author" content="<?= htmlspecialchars($author) ?>" />
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
  

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?= htmlspecialchars($nombrePagina . ' | ' . $ciudad) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($imagenHero) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="<?= htmlspecialchars($twitterHandle) ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($nombrePagina) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($descripcion) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($imagenHero) ?>">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Pequeños ajustes para legibilidad sobre fondos y tarjetas */
    .glass { background: rgba(255,255,255,0.8); backdrop-filter: blur(6px); }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

  <!-- HEADER -->
  <header class="bg-amber-700 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex items-center justify-between">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="Logo <?= htmlspecialchars($siteName) ?>" class="h-10 w-auto">
        <div>
          <h1 class="text-lg font-bold leading-tight"><?= htmlspecialchars($siteName) ?></h1>
          <p class="text-xs opacity-80">Gastronomía & cultura — <?= htmlspecialchars($ciudad) ?></p>
        </div>
      </a>
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/gastronomia" class="hover:underline">Gastronomía</a>
        <a href="/val-de-loire/localidades/Orleans.php" class="hover:underline">Orléans</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative">
    <div class="relative h-64 sm:h-96 overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>" alt="<?= htmlspecialchars($nombrePagina) ?>" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-b from-black/40 to-black/25 flex items-center">
        <div class="container mx-auto px-6 text-white">
          <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold leading-tight drop-shadow-md"><?= htmlspecialchars($nombrePagina) ?></h2>
          <p class="mt-3 max-w-2xl text-sm sm:text-base"><?= htmlspecialchars($descripcion) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- BANNER PUBLICITARIO HORIZONTAL -->
  <div class="container mx-auto px-6 mt-6">
    <div class="bg-gray-100 border rounded-2xl shadow p-4 text-center">
      <p class="text-gray-500 text-sm mb-2">Publicidad</p>
      <div class="bg-white rounded-lg h-24 flex items-center justify-center overflow-hidden">
        <span class="text-gray-400 text-sm">Banner horizontal (728x90)</span>
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <main class="container mx-auto px-6 py-10 grid lg:grid-cols-3 gap-10">

    <!-- ARTICLE -->
    <article class="lg:col-span-2 space-y-8">

      <!-- Introducción / Historia -->
      <section id="informacion" class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-2xl font-bold text-amber-700 mb-3">🥧 Introducción e historia</h2>
        <p class="text-gray-700 leading-relaxed">
          La <strong>Tarte Tatin</strong> es una tarta invertida de manzana caramelizada, creada por las hermanas Tatin en el siglo XIX. 
          Aunque su origen se asocia tradicionalmente a la región de Sologne y a Lamotte-Beuvron, la receta y su popularidad se extendieron por todo el Valle del Loira,
          adoptándose en Orléans con variantes locales y manzanas de la región. Para una explicación histórica detallada consulta:
          <a href="<?= htmlspecialchars($source_info) ?>" target="_blank" rel="noopener noreferrer" class="text-amber-600 underline">France.fr</a>.
        </p>
      </section>

      <!-- Receta: ingredientes y preparación -->
      <section id="receta" class="bg-white p-6 rounded-2xl shadow">
        <h2 class="text-2xl font-bold text-amber-700 mb-4">🧾 Receta: Tarte Tatin (4–6 pax)</h2>

        <div class="grid md:grid-cols-2 gap-6">
          <!-- Ingredientes -->
          <div>
            <h3 class="font-semibold text-lg mb-2">Ingredientes</h3>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
              <li>6 manzanas (recom. Reineta o Golden)</li>
              <li>100 g de mantequilla</li>
              <li>150 g de azúcar</li>
              <li>1 masa quebrada (pâte brisée) o masa de hojaldre</li>
              <li>1 cucharadita de extracto de vainilla (opcional)</li>
              <li>Una pizca de sal</li>
            </ul>
            <p class="text-xs text-gray-500 mt-3">Tiempo total: ~1h (prep 20 min + cocción 40 min)</p>
          </div>

          <!-- Preparación -->
          <div>
            <h3 class="font-semibold text-lg mb-2">Preparación paso a paso</h3>
            <ol class="list-decimal list-inside text-gray-700 space-y-2">
              <li>Precalienta el horno a 190°C.</li>
              <li>Pela y corta las manzanas en cuartos (retira el corazón).</li>
              <li>En una sartén apta para horno o molde (unos 24–26 cm), derrite la mantequilla y añade el azúcar. Cocina hasta formar un caramelo claro.</li>
              <li>Coloca las manzanas en el caramelo, con la parte redonda hacia abajo, formando una capa compacta.</li>
              <li>Cocina a fuego medio 10–12 minutos para que las manzanas suelten jugo y se impregnen del caramelo.</li>
              <li>Cubre las manzanas con la masa, metiendo los bordes hacia dentro del molde. Pincha la masa con un tenedor.</li>
              <li>Hornea 25–30 minutos hasta que la masa esté dorada y firme.</li>
              <li>Deja reposar 5–10 minutos, luego invierte cuidadosamente sobre un plato grande. Sirve tibia (ideal con crème fraîche o helado de vainilla).</li>
            </ol>
          </div>
        </div>
      </section>

      <!-- Consejos -->
      <section id="consejos" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-bold text-amber-700 mb-3">💡 Consejos</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>Usa manzanas firmes para que mantengan la forma tras la cocción.</li>
          <li>Si el caramelo se cristaliza, añade una cucharada de agua y caliéntalo suavemente hasta que se reincorpore.</li>
          <li>Invierte la tarta con cuidado: un plato grande y guantes de cocina te ayudarán.</li>
          <li>Sirve con crema fresca, yogur natural o helado de vainilla para equilibrar la acidez.</li>
        </ul>
      </section>

      <!-- Galería -->
      <section id="galeria" class="bg-white p-6 rounded-2xl shadow">
        <h3 class="text-xl font-bold text-amber-700 mb-3">📸 Galería</h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="rounded-lg overflow-hidden shadow">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Tarte_Tatin_%281%29.jpg" alt="Tarte Tatin" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Tarte Tatin clásica — Wikimedia</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow">
            <img src="https://cdn.pixabay.com/photo/2017/05/07/08/56/tarte-tatin-2290655_1280.jpg" alt="Porción de Tarte Tatin" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Porción servida con helado</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow">
            <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=0f4a8a1f7b2b6624bdc6d8f1a2ff0c8f" alt="Tarte Tatin casera" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Tatin casera — Unsplash</figcaption>
          </figure>
        </div>
      </section>

    </article>

    <!-- SIDEBAR -->
    <aside class="space-y-6">

      <!-- Enlaces útiles -->
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-amber-700 mb-3">🔗 Enlaces útiles</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/gastronomia/quiche-orleans.php" class="hover:underline">Quiche de Orléans</a></li>
          <li><a href="/val-de-loire/gastronomia/andouille-de-jargeau.php" class="hover:underline">Andouille de Jargeau</a></li>
          <li><a href="<?= htmlspecialchars($source_info) ?>" target="_blank" rel="noopener noreferrer" class="text-amber-600 hover:underline">Historia de la Tarte Tatin — France.fr</a></li>
        </ul>
      </div>

      <!-- Publicidad -->
      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow">
        <p class="text-gray-500 text-sm mb-2">Publicidad</p>
        <div class="bg-white rounded-lg h-44 flex items-center justify-center">
          <span class="text-gray-400 text-sm">Espacio patrocinador (300x250)</span>
        </div>
      </div>

      <!-- Recetas destacadas -->
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-amber-700 mb-3">🍰 Recetas destacadas</h4>
        <ul class="text-sm space-y-2">
          <li><a href="/val-de-loire/gastronomia/tarte-au-fromage.php" class="hover:underline">Tarta de queso local</a></li>
          <li><a href="/val-de-loire/gastronomia/vinos-loira.php" class="hover:underline">Vinos del Loira</a></li>
          <li><a href="/val-de-loire/gastronomia/quince-jam.php" class="hover:underline">Mermelada de membrillo</a></li>
        </ul>
      </div>

    </aside>

  </main>

  <!-- PATROCINADORES -->
  <section class="bg-amber-50 py-8 mt-8">
    <div class="container mx-auto px-6 text-center">
      <h4 class="text-lg font-semibold text-amber-700 mb-4">Patrocinadores</h4>
      <div class="flex flex-wrap justify-center gap-6">
        <img src="/img/patrocinador1.png" alt="Patrocinador 1" class="h-12" loading="lazy">
        <img src="/img/patrocinador2.png" alt="Patrocinador 2" class="h-12" loading="lazy">
        <img src="/img/patrocinador3.png" alt="Patrocinador 3" class="h-12" loading="lazy">
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-200 py-8 mt-10">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <h5 class="font-bold text-white mb-2"><?= htmlspecialchars($siteName) ?></h5>
        <p class="text-sm">Guía gastronómica y cultural del Valle del Loira.<br>© <?= $publishYear ?></p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Contacto</h5>
        <p class="text-sm">info@tusitioweb.com</p>
      </div>
      <div>
        <h5 class="font-semibold mb-2">Síguenos</h5>
        <div class="flex gap-3 text-sm">
          <a href="#" class="hover:underline">Facebook</a>
          <a href="#" class="hover:underline">Instagram</a>
          <a href="#" class="hover:underline">Twitter</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JSON-LD: Recipe (schema.org) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Recipe",
    "name": "<?= addslashes($nombrePagina) ?>",
    "author": {
      "@type": "Organization",
      "name": "<?= addslashes($author) ?>"
    },
    "image": [
      "<?= addslashes($imagenHero) ?>"
    ],
    "description": "<?= addslashes($descripcion) ?>",
    "recipeYield": "<?= addslashes($yield) ?>",
    "prepTime": "<?= addslashes($prepTime) ?>",
    "cookTime": "<?= addslashes($cookTime) ?>",
    "totalTime": "<?= addslashes($totalTime) ?>",
    "recipeIngredient": [
      "6 manzanas (Reineta o Golden)",
      "100 g mantequilla",
      "150 g azúcar",
      "1 masa quebrada",
      "1 cucharadita de vainilla (opcional)",
      "Una pizca de sal"
    ],
    "recipeInstructions": [
      {
        "@type": "HowToStep",
        "text": "Precalentar el horno a 190°C."
      },
      {
        "@type": "HowToStep",
        "text": "Pelar y cortar las manzanas en cuartos, retirar el corazón."
      },
      {
        "@type": "HowToStep",
        "text": "Derritir la mantequilla en una sartén apta para horno, añadir el azúcar y preparar el caramelo."
      },
      {
        "@type": "HowToStep",
        "text": "Colocar las manzanas sobre el caramelo y cocinar 10–12 minutos a fuego medio."
      },
      {
        "@type": "HowToStep",
        "text": "Cubrir con la masa, meter los bordes hacia dentro y pinchar la masa con un tenedor."
      },
      {
        "@type": "HowToStep",
        "text": "Hornear 25–30 minutos hasta que la masa esté dorada. Dejar reposar 5–10 minutos y desmoldar invirtiendo la tarta."
      }
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "<?= addslashes($ratingValue) ?>",
      "reviewCount": "<?= addslashes($reviewCount) ?>"
    },
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<?= addslashes($canonical) ?>"
    }
  }
  </script>

</body>
</html>
