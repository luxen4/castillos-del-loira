<?php
// 🌭 VARIABLES PRINCIPALES
$siteName       = "Valle del Loira";
$nombrePagina   = "Andouille de Jargeau";
$ciudad         = "Jargeau";
$slug           = "andouille-de-jargeau";
$descripcion    = "La Andouille de Jargeau es una de las especialidades más auténticas del Valle del Loira. Elaborada artesanalmente con carne de cerdo y especias locales, representa el sabor tradicional del Loiret y la gastronomía de Orléans.";
$imagenHero     = "https://upload.wikimedia.org/wikipedia/commons/9/93/Andouille_de_Jargeau.jpg";
$canonical      = "https://tusitioweb.com/val-de-loire/gastronomia/{$slug}.php";
$keywords       = "Andouille de Jargeau, gastronomía Valle del Loira, embutidos franceses, cocina tradicional, especialidades de Orléans, platos típicos de Loiret";
$author         = "Valle del Loira Web";
$twitterHandle  = "@adrianLaya";
$latitude       = 47.8630;
$longitude      = 2.1202;
$direccion      = "Jargeau, Loiret, Francia";
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
        <a href="/val-de-loire/localidades/Orleans.php" class="hover:underline">Orléans</a>
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
  <main class="container mx-auto px-1 py-12 grid lg:grid-cols-3 gap-10">

    <!-- ARTÍCULO -->
    <article class="lg:col-span-2 space-y-10">

<!-- Tradición e historia -->
<section>
  <h2 class="text-2xl font-bold text-amber-800 mb-3">🌭 Tradición e historia</h2>
  <p>
    La <strong>Andouille de Jargeau</strong> es un emblema gastronómico del Loiret, elaborada con tripas e intestinos de cerdo finamente seleccionados, 
    ahumados y condimentados según antiguas recetas locales. Este embutido se disfruta tanto frío como caliente, y su preparación se remonta a la Edad Media,
    cuando los carniceros de Jargeau comenzaron a especializarse en su producción artesanal.
    Para más detalles sobre origen y elaboración puedes consultar 
    <a href="https://www.france-voyage.com/francia-gastronomia/andouille-jargeau-458.htm" target="_blank" class="text-amber-600 underline">France-Voyage.com</a>.
  </p>
</section>


      <!-- Elaboración -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">🔪 Elaboración artesanal</h2>
        <p>La receta tradicional de la andouille de Jargeau se basa en ingredientes simples pero de gran calidad:</p>
        <ul class="list-disc list-inside space-y-2">
          <li>Intestinos y estómago de cerdo (limpios y cortados en tiras finas)</li>
          <li>Sal marina, pimienta y especias locales</li>
          <li>Ahumado en madera de haya o roble durante varias horas</li>
        </ul>
        <p>Después del ahumado, las andouilles se dejan reposar y se cuecen lentamente, lo que da como resultado un embutido tierno con un aroma inconfundible.</p>
      </section>

      <!-- Degustación -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">🍽️ Cómo disfrutarla</h2>
        <p>Puede servirse fría, cortada en rodajas finas, como aperitivo o acompañada de mostaza de Orléans. También es exquisita caliente, ligeramente dorada a la parrilla, servida con puré de patatas o lentejas del Loira.</p>
        <p>Se acompaña perfectamente con un vino tinto ligero de la región, como un <em>Gamay</em> o un <em>Cabernet Franc</em>.</p>
      </section>

      <!-- Galería -->
      <section>
        <h2 class="text-2xl font-bold text-amber-800 mb-3">📸 Galería</h2>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Andouille_de_Jargeau.jpg" alt="Andouille de Jargeau tradicional" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Andouille de Jargeau — Wikimedia</figcaption>
          </figure>
          <figure class="rounded-lg overflow-hidden shadow bg-white">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Andouillettes_grilled.jpg" alt="Andouillette a la parrilla" class="w-full h-44 object-cover">
            <figcaption class="p-2 text-xs text-gray-500 text-center">Andouillette dorada al estilo Orléans</figcaption>
          </figure>
        </div>
      </section>

    </article>

    <!-- SIDEBAR -->
    <aside class="space-y-6">
      <div class="bg-white p-4 rounded-2xl shadow">
        <h4 class="text-lg font-semibold text-amber-800 mb-3">🥖 Más delicias del Loira</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="/val-de-loire/gastronomia/quiche-orleans.php" class="hover:underline">Quiche de Orléans</a></li>
          <li><a href="/val-de-loire/gastronomia/tarte-tatin-orleans.php" class="hover:underline">Tarte Tatin</a></li>
          <li><a href="/val-de-loire/gastronomia/vinos-loira.php" class="hover:underline">Vinos del Loira</a></li>
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

  <!-- JSON-LD: Dish -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Recipe",
    "name": "<?= addslashes($nombrePagina) ?>",
    "author": { "@type": "Person", "name": "<?= addslashes($author) ?>" },
    "description": "<?= addslashes($descripcion) ?>",
    "image": ["<?= addslashes($imagenHero) ?>"],
    "recipeCuisine": "Francesa",
    "recipeCategory": "Embutido",
    "recipeYield": "4 porciones",
    "prepTime": "PT20M",
    "cookTime": "PT120M",
    "totalTime": "PT140M",
    "recipeIngredient": [
      "Intestinos y estómago de cerdo",
      "Sal, pimienta y especias",
      "Madera de haya para ahumar"
    ],
    "recipeInstructions": [
      "Limpiar y cortar los ingredientes en tiras finas.",
      "Condimentar y embutir cuidadosamente.",
      "Ahumar durante varias horas con madera de haya.",
      "Cocer a fuego lento antes de degustar."
    ],
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.8",
      "reviewCount": "89"
    }
  }
  </script>

</body>
</html>
