<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Festival de Vinos de Saumur</title>
  <meta name="description" content="Festival de vinos en Saumur: catas, rutas, productores locales, música y gastronomía junto al Loira." />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
  <header class="bg-red-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-20 flex items-center justify-between">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center font-bold">S-Fest</div>
          <div>
            <h1 class="text-lg font-semibold">Festival de Vinos de Saumur</h1>
            <p class="text-sm opacity-90">Catas, bodegas, música y gastronomía en el corazón del Valle del Loira</p>
          </div>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="#programa" class="hover:underline">Programa</a>
          <a href="#productores" class="hover:underline">Productores</a>
          <a href="#entradas" class="hover:underline">Entradas</a>
          <a href="#contacto" class="hover:underline">Contacto</a>
        </nav>

        <div class="flex items-center gap-3">
          <a href="#entradas" class="bg-white text-red-700 px-3 py-1 rounded-md text-sm font-medium">Comprar entradas</a>
        </div>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Grid: left aside, main, right aside -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

      <!-- Left aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center">
            <small class="text-xs text-gray-400">Publicidad</small>
            <div class="mt-2 text-sm font-medium">Espacio 300×250</div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4">
          <h3 class="font-semibold">Información rápida</h3>
          <dl class="mt-3 text-sm text-gray-700 space-y-2">
            <div class="flex justify-between"><dt>Fecha</dt><dd>4 — 6 de julio</dd></div>
            <div class="flex justify-between"><dt>Lugar</dt><dd>Saumur (Plaza central y ribera del Loira)</dd></div>
            <div class="flex justify-between"><dt>Acceso</dt><dd>Tranvía, bici y a pie</dd></div>
          </dl>
        </div>

        <div class="bg-white rounded-lg border p-3 h-28 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-1">Banner 320×100</div></div>
        </div>

        <div class="bg-red-700 text-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Suscríbete</h4>
          <p class="mt-2 text-sm">Recibe novedades, lanzamientos y ofertas de catas.</p>
          <form class="mt-3 flex gap-2" onsubmit="event.preventDefault()">
            <input aria-label="Email" type="email" placeholder="tu@email.com" class="flex-1 px-3 py-2 rounded-md text-black" />
            <button class="bg-white/90 text-red-700 px-3 py-2 rounded-md">OK</button>
          </form>
        </div>

        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2">Espacio lateral 300×600</div></div>
        </div>
      </aside>

      <!-- Main -->
      <section class="lg:col-span-6 space-y-6">
        <article class="bg-white rounded-xl shadow overflow-hidden">
          <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=1600&q=60" alt="Festival de vinos" class="w-full h-64 object-cover" />
          <div class="p-6">
            <h2 class="text-2xl font-semibold">Bienvenido al Festival de Vinos de Saumur</h2>
            <p class="mt-3 text-gray-700">Tres días dedicados al vino y la gastronomía local: catas, encuentros con productores y música en las terrazas junto al Loira.</p>
            <div class="mt-4 flex gap-3">
              <a href="#programa" class="px-4 py-2 bg-red-700 text-white rounded-md text-sm">Ver programa</a>
              <a href="#entradas" class="px-4 py-2 border rounded-md text-sm">Comprar entradas</a>
            </div>
          </div>
        </article>

        <!-- Programa -->
        <section id="programa" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Programa destacado</h3>

          <div class="mt-4 space-y-4">
            <div class="border p-4 rounded-lg">
              <h4 class="font-semibold">Cata magistral — Vinos de Saumur</h4>
              <p class="text-sm text-gray-600 mt-1">Jueves 5 · 18:00 — Sala principal. Reserva previa.</p>
            </div>

            <div class="border p-4 rounded-lg">
              <h4 class="font-semibold">Ruta de bodegas</h4>
              <p class="text-sm text-gray-600 mt-1">Viernes 6 · 10:00 — Visitas a productores locales con transporte incluido.</p>
            </div>

            <div class="border p-4 rounded-lg">
              <h4 class="font-semibold">Noche de maridaje</h4>
              <p class="text-sm text-gray-600 mt-1">Sábado 7 · 20:30 — Menú degustación y música en vivo.</p>
            </div>
          </div>
        </section>

        <!-- Productores -->
        <section id="productores" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Productores participantes</h3>
          <div class="mt-4 grid sm:grid-cols-2 gap-4">
            <div class="p-4 border rounded flex items-start gap-4">
              <div class="w-16 h-16 bg-gray-100 rounded"></div>
              <div>
                <h4 class="font-medium">Domaine Dupont</h4>
                <p class="text-sm text-gray-600">Blancos secos y espumosos.</p>
              </div>
            </div>

            <div class="p-4 border rounded flex items-start gap-4">
              <div class="w-16 h-16 bg-gray-100 rounded"></div>
              <div>
                <h4 class="font-medium">Les Vignes de Loire</h4>
                <p class="text-sm text-gray-600">Tintos y rosés de producción local.</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Entradas -->
        <section id="entradas" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Entradas</h3>
          <p class="mt-2 text-gray-700">Compra online o en taquilla. Plazas limitadas en actividades con aforo.</p>
          <div class="mt-4 grid sm:grid-cols-2 gap-4">
            <div class="p-4 border rounded">
              <h4 class="font-medium">Entrada general</h4>
              <p class="text-sm text-gray-600 mt-2">Acceso a zona de stands y conciertos.</p>
              <div class="mt-3"><a href="#" class="text-sm px-3 py-2 bg-red-700 text-white rounded">Comprar</a></div>
            </div>
            <div class="p-4 border rounded">
              <h4 class="font-medium">Pase cata</h4>
              <p class="text-sm text-gray-600 mt-2">Incluye catas guiadas y guía de bodegas.</p>
              <div class="mt-3"><a href="#" class="text-sm px-3 py-2 bg-red-700 text-white rounded">Comprar</a></div>
            </div>
          </div>
        </section>

      </section>

      <!-- Right aside -->
      <aside class="lg:col-span-3 space-y-6">
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2 text-sm">Espacio 300×250</div></div>
        </div>

        <div class="bg-white rounded-lg shadow p-4">
          <h4 class="font-semibold">Agenda rápida</h4>
          <ul class="mt-3 text-sm text-gray-700 space-y-2">
            <li><strong>10:00</strong> — Apertura de stands</li>
            <li><strong>12:30</strong> — Show cooking</li>
            <li><strong>18:00</strong> — Cata magistral</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg border p-3 h-28 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-1">Banner 320×100</div></div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div>

        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2">Espacio lateral 300×600</div></div>
        </div>
      </aside>

    </div>

    <!-- Leaderboard -->
    <div class="mt-8 bg-white rounded-lg border p-4 text-center">
      <small class="text-xs text-gray-400">Publicidad</small>
      <div class="mt-1 text-sm">Leaderboard 970×90 / responsive</div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
          <p>© Festival de Vinos de Saumur</p>
          <p class="mt-1">Saumur, Valle del Loira</p>
        </div>
        <div class="flex items-center gap-4">
          <a href="#" class="underline">Cómo llegar</a>
          <a href="#" class="underline">Aviso legal</a>
        </div>
      </div>
    </footer>
  </main>
</body>
</html>