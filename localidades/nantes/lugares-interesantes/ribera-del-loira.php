<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ribera del Loira</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
  <header class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
      <h1 class="text-xl font-semibold">Ribera del Loira</h1>
      <nav class="hidden md:flex gap-6 text-sm">
        <a href="#descubre" class="hover:underline">Descubre</a>
        <a href="#rutas" class="hover:underline">Rutas</a>
        <a href="#arte" class="hover:underline">Arte urbano</a>
        <a href="#contacto" class="hover:underline">Contacto</a>
      </nav>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <section class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Columna principal -->
      <article class="lg:col-span-2 bg-white p-6 rounded-xl shadow">
        <h2 id="descubre" class="text-2xl font-semibold">Pasea junto al Loira</h2>
        <p class="mt-4 text-gray-700 leading-relaxed">
          Disfruta de un recorrido único junto al río Loira: caminos tranquilos, miradores naturales,
          terrazas con vistas excepcionales y una mezcla vibrante de naturaleza y vida urbana.
        </p>

        <div class="mt-6 rounded-lg overflow-hidden shadow">
          <img src="https://images.unsplash.com/photo-1505840717430-ffc3b4a0e8f9?auto=format&fit=crop&w=1400&q=60" class="w-full h-72 object-cover" alt="Río Loira" />
        </div>

        <section id="arte" class="mt-8">
          <h3 class="text-xl font-semibold">Murales y arte urbano</h3>
          <p class="mt-3 text-gray-700">Explora una ruta llena de murales contemporáneos creados por artistas locales e internacionales.</p>

          <div class="grid sm:grid-cols-2 gap-4 mt-4">
            <div class="h-40 bg-gray-200 rounded-lg"></div>
            <div class="h-40 bg-gray-200 rounded-lg"></div>
          </div>
        </section>

        <section id="rutas" class="mt-10 bg-blue-50 p-6 rounded-xl">
          <h3 class="text-xl font-semibold">Rutas recomendadas</h3>
          <ul class="mt-4 list-disc pl-6 text-gray-700 space-y-2">
            <li>Ruta histórica: 3 km — miradores y puentes antiguos.</li>
            <li>Paseo artístico: 2 km — murales, esculturas y galerías.</li>
            <li>Recorrido gastronómico: 4 km — terrazas, cafés y mercados.</li>
          </ul>
        </section>
      </article>

      <!-- Aside izquierdo -->
      <aside class="space-y-6">
        <div class="bg-white p-4 rounded-lg border h-36 flex items-center justify-center text-center">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <p class="mt-1 text-sm">Espacio 300×250</p>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Información útil</h4>
          <ul class="mt-3 text-sm text-gray-700 space-y-1">
            <li>Aparcamientos cercanos</li>
            <li>Miradores accesibles</li>
            <li>Alquiler de bicicletas</li>
          </ul>
        </div>

        <div class="bg-white p-4 rounded-lg border  flex items-center justify-center text-center">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <p class="text-sm">Banner 320×100</p>
                              <?php 
        $numeroAleatorio=3; $archivoPublicidad='jeans_man'; $alineacion=2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-jeans-man.php"; ?>
          </div>
        </div>
      </aside>

      <!-- Aside derecho -->
      <aside class="space-y-6">
        <div class="bg-white p-4 rounded-lg border h-36 flex items-center justify-center text-center">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <p class="mt-1 text-sm">Espacio 300×250</p>
          </div>
        </div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Terrazas destacadas</h4>
          <ul class="mt-3 text-sm text-gray-700 space-y-1">
            <li>Terraza Mirador Azul</li>
            <li>Café Loira Vivo</li>
            <li>Bar del Puente Viejo</li>
          </ul>
        </div>

        <div class="bg-white p-4 rounded-lg border h-28 flex items-center justify-center text-center">
          <div>
            <small class="text-xs text-gray-400">Publicidad</small>
            <p class="text-sm">Banner 320×100</p>
          </div>
        </div>
      </aside>
    </section>

    <!-- Tira publicitaria completa -->
    <div class="mt-10 bg-white rounded-lg border p-4 text-center">
      <small class="text-xs text-gray-400">Publicidad</small>
      <p class="text-sm">Leaderboard 728×90</p>
             <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

    </div>

    <footer id="contacto" class="mt-12 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between px-4 gap-4">
        <div>
          <p>© Ribera del Loira</p>
          <p class="mt-1">Nantes, Francia</p>
        </div>
        <div class="flex gap-4">
          <a href="#" class="underline">Aviso legal</a>
          <a href="#" class="underline">Contacto</a>
        </div>
      </div>
    </footer>
  </main>
</body>
</html>