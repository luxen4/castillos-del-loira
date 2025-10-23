<?php
// 🥧 VARIABLES PRINCIPALES
$siteName       = "Valle del Loira";
$nombrePagina   = "Quiche de Orléans";
$ciudad         = "Orléans";
$slug           = "quiche-orleans";
$descripcion    = "La Quiche de Orléans es una deliciosa versión local de la clásica quiche francesa. Preparada con ingredientes frescos del Valle del Loira, combina tradición, sabor y elegancia gastronómica.";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/3/3e/Quiche_lorraine_maison.jpg";
$canonical      = "https://tusitioweb.com/val-de-loire/gastronomia/{$slug}.php";
$keywords       = "Quiche de Orléans, gastronomía Valle del Loira, recetas francesas, cocina tradicional, platos típicos de Orléans";
$author         = "Valle del Loira Web";
$twitterHandle  = "@TuCuentaTwitter";
$latitude       = 47.9025;
$longitude      = 1.9090;
$direccion      = "Orléans, Valle del Loira, Francia";
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
  <meta property="og:title" content="<?= htmlspecialchars($nombrePagina . " | " . $ciudad) ?>">
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
</head>

<body class="bg-gray-50 text-gray-800 leading-relaxed antialiased">

  <!-- HEADER -->
  <header class="bg-amber-800 text-white shadow">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">
      <a href="/" class="flex items-center gap-3">
        <img src="/img/logo.png" alt="Logo Valle del Loira" class="h-10 w-auto">
        <div>
          <h1 class="text-xl font-bold">Valle del Loira</h1>
          <p class="text-xs opacity-75">Gastronomía y cultura francesa</p>
        </div>
      </a>
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="/val-de-loire" class="hover:underline">Inicio</a>
        <a href="/val-de-loire/gastronomia" class="hover:underline">Gastronomía</a>
        <a href="/val-de-loire/ciudades/Orleans.php" class="hover:underline">Orléans</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="relative">
    <div class="relative h-64 sm:h-96 overflow-hidden">
      <img src="<?= htmlspecialchars($imagenHero) ?>" alt="<?= htmlspecialchars($nombrePagina) ?>" class="absolute inset-0 w-full h-full object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center text-center">
        <div class="px-6 text-white max-w-2xl">
          <h2 class="text-3xl sm:text-5xl font-extrabold mb-3 drop-shadow-lg"><?= htmlspecialchars($nombrePagina) ?></h2>
          <p class="text-base sm:text-lg font-light"><?= htmlspecialchars($descripcion) ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTENIDO -->
  <main class="container mx-auto px-6 py-12 grid lg:grid-cols-3 gap-10">

    <!-- ARTÍCULO -->
    <article class="lg:col-span-2 space-y-10">

      <!-- Introducción -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">🥧 Un clásico de la cocina de Orléans</h2>
        <p>La <strong>Quiche de Orléans</strong> representa la tradición gastronómica del Valle del Loira. Inspirada en la célebre quiche lorraine, esta versión incorpora productos locales como el <em>queso de cabra del Loira</em> y cebollas caramelizadas, logrando una combinación equilibrada entre suavidad y sabor.</p>
      </section>

      <!-- Ingredientes -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">🧂 Ingredientes (para 4 personas)</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
          <li>1 masa brisa (base para tarta salada)</li>
          <li>3 huevos grandes</li>
          <li>200 ml de nata líquida</li>
          <li>100 ml de leche</li>
          <li>100 g de queso de cabra del Loira</li>
          <li>1 cebolla grande caramelizada</li>
          <li>100 g de panceta o lardons</li>
          <li>Sal, pimienta y nuez moscada al gusto</li>
        </ul>
      </section>

      <!-- Preparación -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">👩‍🍳 Preparación paso a paso</h2>
        <ol class="list-decimal list-inside space-y-2 text-gray-700">
          <li>Precalienta el horno a 180°C.</li>
          <li>Extiende la masa en un molde y pínchala con un tenedor.</li>
          <li>Saltea la cebolla con la panceta hasta que se dore ligeramente.</li>
          <li>En un bol, mezcla los huevos, la nata y la leche. Añade sal, pimienta y nuez moscada.</li>
          <li>Incorpora el queso y la mezcla de cebolla y panceta.</li>
          <li>Vierte sobre la masa y hornea durante 30–35 minutos, hasta que la superficie esté dorada.</li>
        </ol>
      </section>

      <!-- Consejos -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">💡 Consejos del chef</h2>
        <ul class="list-disc list-inside space-y-1 text-gray-700">
          <li>Acompaña la quiche con una ensalada verde y un vino blanco del Loira.</li>
          <li>Sirve templada para disfrutar de la textura cremosa del relleno.</li>
          <li>Puedes sustituir la panceta por espinacas o champiñones para una versión vegetariana.</li>
        </ul>
      </section>

      <!-- Galería -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3e/Quiche_lorraine_maison.jpg" alt="Quiche de Orléans casera" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Quiche de Orléans recién horneada — Wikimedia</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e8/Quiche_with_salad.jpg" alt="Quiche acompañada con ensalada" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Servida con ensalada y vino blanco</figcaption>
          </figure>
        </div>
      </section>

    </article>

    <!-- SIDEBAR -->
    <aside class="space-y-6">
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-amber-800 mb-3">🍽️ Más delicias del Loira</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/gastronomia/tarte-tatin-orleans.php" class="hover:underline">Tarte Tatin</a></li>
          <li><a href="/val-de-loire/gastronomia/vinos-loira.php" class="hover:underline">Vinos del Loira</a></li>
          <li><a href="/val-de-loire/ciudades/Orleans.php" class="hover:underline">Descubre Orléans</a></li>
        </ul>
      </div>

      <div class="bg-gray-100 p-4 rounded-2xl text-center shadow">
        <p class="text-gray-500 text-sm mb-2">Publicidad</p>
        <div class="bg-white rounded-lg h-56 flex items-center justify-center">
          <span class="text-gray-400 text-sm">Espacio patrocinador (300x250)</span>
        </div>
      </div>
    </aside>

  </main>

  <!-- FOOTER -->
  <footer class="bg-gray-900 text-gray-200 py-8 mt-12">
    <div class="container mx-auto px-6 grid md:grid-cols-3 gap-6">
      <div>
        <h5 class="font-bold text-white mb-2"><?= $siteName ?></h5>
        <p class="text-sm">Guía gastronómica del Valle del Loira.<br>© <?= date("Y") ?></p>
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

  <!-- JSON-LD: Recipe -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Recipe",
    "name": "<?= addslashes($nombrePagina) ?>",
    "author": { "@type": "Person", "name": "<?= addslashes($author) ?>" },
    "description": "<?= addslashes($descripcion) ?>",
    "image": ["<?= addslashes($imagenHero) ?>"],
    "recipeCuisine": "Francesa",
    "recipeCategory": "Plato principal",
    "recipeYield": "4 personas",
    "prepTime": "PT15M",
    "cookTime": "PT35M",
    "totalTime": "PT50M",
    "recipeIngredient": [
      "1 masa brisa",
      "3 huevos",
      "200 ml nata líquida",
      "100 ml leche",
      "100 g queso de cabra del Loira",
      "1 cebolla caramelizada",
      "100 g panceta",
      "Sal, pimienta, nuez moscada"
    ],
    "recipeInstructions": [
      "Precalentar el horno a 180°C.",
      "Extender la masa y pinchar con un tenedor.",
      "Saltear cebolla y panceta.",
      "Mezclar huevos, nata y leche con especias.",
      "Incorporar el queso y la mezcla de cebolla.",
      "Hornear 35 minutos hasta dorar."
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.7",
      "reviewCount": "123"
    }
  }
  </script>

</body>
</html>
