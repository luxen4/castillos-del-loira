<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Exposiciones — Castillo de Chambord</title>
  <meta name="description" content="Exposiciones temporales y permanentes del Castillo de Chambord. Información, horarios y entradas." />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
  <header class="bg-rose-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="h-20 flex items-center justify-between">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center font-bold">CdC</div>
          <div>
            <h1 class="text-lg font-semibold">Castillo de Chambord</h1>
            <p class="text-sm opacity-90">Exposiciones · Historia · Eventos</p>
          </div>
        </div>

        <nav class="hidden md:flex items-center gap-6 text-sm">
          <a href="#exposiciones" class="hover:underline">Exposiciones</a>
          <a href="#visita" class="hover:underline">Visita</a>
          <a href="#entradas" class="hover:underline">Entradas</a>
          <a href="#contacto" class="hover:underline">Contacto</a>
        </nav>

        <div class="flex items-center gap-3">
          <button class="bg-white text-rose-800 px-3 py-1 rounded-md text-sm font-medium">Comprar entradas</button>
        </div>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <!-- Grid: left aside, main, right aside -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
      <!-- Left aside (col-span 3 on lg) -->
      <aside class="lg:col-span-3 space-y-6">
        <!-- Ad slot top -->
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center">
            <small class="text-xs text-gray-400">Publicidad</small>
            <div class="mt-2 text-sm font-medium">Espacio 300×250</div>
          </div>
        </div>

        <!-- Quick facts -->
        <div class="bg-white rounded-lg shadow p-4">
          <h3 class="font-semibold">Datos rápidos</h3>
          <dl class="mt-3 text-sm text-gray-700 space-y-2">
            <div class="flex justify-between"><dt>Ubicación</dt><dd>Chambord, Valle del Loira</dd></div>
            <div class="flex justify-between"><dt>Horario</dt><dd>09:00 — 18:00</dd></div>
            <div class="flex justify-between"><dt>Visitas guiadas</dt><dd>Sí (con reserva)</dd></div>
          </dl>
        </div>

        <!-- Ad slot middle -->
        <div class="bg-white rounded-lg border p-3 h-28 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-1">Banner 320×100</div></div>
        </div>

        <!-- Newsletter CTA -->
        <div class="bg-rose-700 text-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Recibe novedades</h4>
          <p class="mt-2 text-sm">Suscríbete para recibir información sobre nuevas exposiciones y eventos.</p>
          <form class="mt-3 flex gap-2" onsubmit="event.preventDefault()">
            <input aria-label="Email" type="email" placeholder="tu@email.com" class="flex-1 px-3 py-2 rounded-md text-black" />
            <button class="bg-white/90 text-rose-800 px-3 py-2 rounded-md">OK</button>
          </form>
        </div>

        <!-- Ad slot bottom -->
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2">Espacio lateral 300×600</div></div>
        </div>
      </aside>

      <!-- Main content (col-span 6 on lg) -->
      <section class="lg:col-span-6 space-y-6">
        <!-- Hero -->
        <article class="bg-white rounded-xl shadow overflow-hidden">
          <img src="https://images.unsplash.com/photo-1529119368495-9d300b7d29d2?auto=format&fit=crop&w=1600&q=60" alt="Castillo de Chambord" class="w-full h-64 object-cover" />
          <div class="p-6">
            <h2 class="text-2xl font-semibold">Exposiciones en el Castillo de Chambord</h2>
            <p class="mt-3 text-gray-700">Descubre exposiciones temporales y permanentes que exploran la historia, el arte y la naturaleza del Valle del Loira.</p>
            <div class="mt-4 flex gap-3">
              <a href="#exposiciones" class="px-4 py-2 bg-rose-800 text-white rounded-md text-sm">Ver exposiciones</a>
              <a href="#entradas" class="px-4 py-2 border rounded-md text-sm">Reservar visita</a>
            </div>
          </div>
        </article>

        <!-- Expositions list -->
        <section id="exposiciones" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Exposiciones actuales</h3>

          <div class="mt-4 grid gap-4">
            <!-- Expo 1 -->
            <article class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-start border rounded-lg overflow-hidden">
              <img src="https://images.unsplash.com/photo-1504198458649-3128b932f49b?auto=format&fit=crop&w=800&q=60" alt="Exposición 1" class="w-full h-40 object-cover sm:h-full sm:col-span-1" />
              <div class="sm:col-span-2 p-4">
                <h4 class="font-semibold">Trazos del Renacimiento</h4>
                <p class="text-sm mt-2 text-gray-600">Una mirada a la influencia renacentista en la arquitectura y escultura del castillo.</p>
                <div class="mt-3 flex gap-2 text-sm">
                  <span class="px-2 py-1 bg-rose-100 text-rose-800 rounded">Temporal</span>
                  <span class="px-2 py-1 border rounded">Entrada incluida</span>
                </div>
              </div>
            </article>

            <!-- Expo 2 -->
            <article class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-start border rounded-lg overflow-hidden">
              <img src="https://images.unsplash.com/photo-1549880338-65ddcdfd017b?auto=format&fit=crop&w=800&q=60" alt="Exposición 2" class="w-full h-40 object-cover sm:h-full sm:col-span-1" />
              <div class="sm:col-span-2 p-4">
                <h4 class="font-semibold">Los bosques del Loira</h4>
                <p class="text-sm mt-2 text-gray-600">Exposición fotográfica sobre la flora y fauna que rodea Chambord y su parque.</p>
                <div class="mt-3 flex gap-2 text-sm">
                  <span class="px-2 py-1 bg-emerald-100 text-emerald-800 rounded">Permanente</span>
                  <span class="px-2 py-1 border rounded">Audioguía disponible</span>
                </div>
              </div>
            </article>

            <!-- Expo 3 -->
            <article class="grid grid-cols-1 sm:grid-cols-3 gap-4 items-start border rounded-lg overflow-hidden">
              <img src="https://images.unsplash.com/photo-1505765058813-8c8b1d6b9b4a?auto=format&fit=crop&w=800&q=60" alt="Exposición 3" class="w-full h-40 object-cover sm:h-full sm:col-span-1" />
              <div class="sm:col-span-2 p-4">
                <h4 class="font-semibold">Vestigios y restauraciones</h4>
                <p class="text-sm mt-2 text-gray-600">Proyectos recientes de restauración del castillo y conservación de sus colecciones.</p>
                <div class="mt-3 flex gap-2 text-sm">
                  <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded">Especial</span>
                </div>
              </div>
            </article>

          </div>
        </section>

        <!-- Tickets / Info -->
        <section id="entradas" class="bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Entradas y visitas</h3>
          <div class="mt-3 text-gray-700">
            <p>Compra tus entradas online o en taquilla. Disponemos de visitas guiadas y actividades para familias.</p>
            <div class="mt-4 grid sm:grid-cols-2 gap-4">
              <div class="p-4 border rounded">
                <h4 class="font-medium">Entrada general</h4>
                <p class="text-sm text-gray-600 mt-2">Incluye acceso a zonas públicas y exposiciones permanentes.</p>
              </div>
              <div class="p-4 border rounded">
                <h4 class="font-medium">Visita guiada</h4>
                <p class="text-sm text-gray-600 mt-2">Reservable con antelación. Grupos reducidos.</p>
              </div>
            </div>
          </div>
        </section>
      </section>

      <!-- Right aside (col-span 3 on lg) -->
      <aside class="lg:col-span-3 space-y-6">
        <!-- Ad top -->
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2 text-sm">Espacio 300×250</div></div>
        </div>

        <!-- Próximos eventos -->
        <div class="bg-white rounded-lg shadow p-4">
          <h4 class="font-semibold">Próximos eventos</h4>
          <ul class="mt-3 text-sm text-gray-700 space-y-2">
            <li><strong>Concierto barroco</strong> — 12 de junio · Patio central</li>
            <li><strong>Taller infantil</strong> — 20 de junio · Taller educativo</li>
            <li><strong>Visita nocturna</strong> — 5 de julio · Reserva necesaria</li>
          </ul>
        </div>

        <!-- Ad middle -->
        <div class="bg-white rounded-lg border p-3 h-28 flex items-center justify-center">
          <div class="text-center text-sm text-gray-600"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-1">Banner 320×100</div></div>
        </div>

        <!-- Patrocinadores / Sponsors -->
        <div class="bg-white rounded-lg p-4 shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>
          </div>
        </div>

        <!-- Ad bottom -->
        <div class="bg-white rounded-lg border p-4 h-40 flex items-center justify-center">
          <div class="text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2">Espacio lateral 300×600</div></div>
        </div>
      </aside>
    </div>

    <!-- Full width leaderboard ad -->
    <div class="mt-8 bg-white rounded-lg border p-4 text-center">
      <small class="text-xs text-gray-400">Publicidad</small>
      <div class="mt-1 text-sm">Leaderboard 970×90 / responsive</div>
    </div>

    <!-- Footer -->
    <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div>
          <p>© Castillo de Chambord</p>
          <p class="mt-1">Adresse: Château, 41250 Chambord, Francia</p>
        </div>
        <div class="flex items-center gap-4">
          <a href="#" class="underline">Donar</a>
          <a href="#" class="underline">Aviso legal</a>
        </div>
      </div>
    </footer>
  </main>
</body>
</html>