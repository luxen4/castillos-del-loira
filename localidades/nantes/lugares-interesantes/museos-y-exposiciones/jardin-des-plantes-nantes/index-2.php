<?php
// Jardin des Plantes de Nantes – Página en PHP + TailwindCSS
// Suponiendo Tailwind incluido vía CDN o build propio.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jardin des Plantes — Nantes</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
  <header class="bg-emerald-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        <div class="flex items-center gap-4">
          <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center font-bold">JdP</div>
          <div>
            <h1 class="text-xl font-semibold">Jardin des Plantes — Nantes</h1>
            <p class="text-sm opacity-90">Naturaleza, arte y aprendizaje en el corazón de Nantes</p>
          </div>
        </div>

        <nav class="hidden md:flex items-center gap-6">
          <a href="#about" class="hover:underline">Sobre el jardín</a>
          <a href="#visit" class="hover:underline">Visita</a>
          <a href="#events" class="hover:underline">Eventos</a>
          <a href="#support" class="hover:underline">Colabora</a>
        </nav>

        <button class="bg-white text-emerald-700 px-3 py-1 rounded-md text-sm font-medium">Entradas</button>
      </div>
    </div>
  </header>

  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
      <div class="lg:col-span-2">
        <figure class="relative rounded-xl overflow-hidden shadow-lg">
          <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=1400&q=60" alt="Jardin des Plantes de Nantes" class="w-full h-64 object-cover sm:h-80 lg:h-96" />
          <figcaption class="absolute left-4 bottom-4 bg-black/40 text-white px-3 py-2 rounded">Jardin des Plantes — Nantes</figcaption>
        </figure>

        <div class="mt-6 bg-white p-6 rounded-xl shadow">
          <h2 id="about" class="text-2xl font-semibold">Bienvenido al Jardin des Plantes</h2>
          <p class="mt-3 text-gray-600">El Jardin des Plantes de Nantes combina colecciones botánicas, arte y aprendizaje en un parque histórico.</p>

          <div class="mt-6 grid sm:grid-cols-2 gap-4">
            <?php
              $features = [
                ["Colecciones botánicas", "Plantas tropicales, mediterráneas y más."],
                ["Invernaderos", "Exposiciones de especies exóticas."],
                ["Rutas y senderos", "Rutas didácticas y familiares."],
                ["Eventos", "Talleres y visitas guiadas de temporada."],
              ];
              foreach ($features as $f) {
                echo "<article class='p-4 border rounded-lg bg-gray-50'>
                  <h3 class='font-medium'>{$f[0]}</h3>
                  <p class='mt-2 text-sm text-gray-600'>{$f[1]}</p>
                </article>";
              }
            ?>
          </div>
        </div>

        <section id="events" class="mt-6 bg-white p-6 rounded-xl shadow">
          <h3 class="text-xl font-semibold">Próximos eventos</h3>
          <ul class="mt-4 space-y-3 text-gray-700">
            <li class="flex gap-4"><div class="w-2.5 h-2.5 rounded-full bg-emerald-600 mt-2"></div><div><strong>Taller familiar: Semillas</strong><div class="text-sm text-gray-500">Sábados — 11:00</div></div></li>
            <li class="flex gap-4"><div class="w-2.5 h-2.5 rounded-full bg-emerald-600 mt-2"></div><div><strong>Visita botánica</strong><div class="text-sm text-gray-500">Domingos — 10:30</div></div></li>
          </ul>
        </section>
      </div>

      <aside class="space-y-6">
        <div class="bg-white p-3 rounded-lg border h-36 flex items-center justify-center text-center"><small class="text-xs text-gray-400">Publicidad</small><div class="mt-2 text-sm font-medium">Espacio 300×250</div></div>

        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Información práctica</h4>
          <dl class="mt-2 text-sm text-gray-600 space-y-1">
            <div class="flex justify-between"><dt>Horario</dt><dd>08:00 — 18:00</dd></div>
            <div class="flex justify-between"><dt>Entrada</dt><dd>Gratuita*</dd></div>
            <div class="flex justify-between"><dt>Acceso</dt><dd>Tranvía L1 – "Botanique"</dd></div>
          </dl>
        </div>

        <div class="bg-white p-3 rounded-lg border h-28 flex items-center justify-center text-center"><small class="text-xs text-gray-400">Publicidad</small><div>Banner 320×100</div></div>

        <div class="bg-gradient-to-r from-emerald-600 to-teal-500 text-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Recibe noticias</h4>
          <form class="mt-3 flex gap-2" method="POST">
            <input type="email" name="email" placeholder="tu@email.com" class="flex-1 px-3 py-2 rounded-md text-black" />
            <button class="bg-white/90 text-emerald-700 px-3 py-2 rounded-md">OK</button>
          </form>
        </div>

        <div class="bg-white p-3 rounded-lg border h-40 flex items-center justify-center text-center"><small class="text-xs text-gray-400">Publicidad</small><div>Espacio 300×600</div></div>
      </aside>
    </section>

    <div class="mt-8 rounded-lg bg-white border p-4 text-center">
      <?php /*<small class="text-xs text-gray-400">Publicidad</small>
       <div>Leaderboard 728×90</div> */ ?>
    <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

    </div>

    <section id="visit" class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
      <article class="lg:col-span-2 bg-white p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold">Planifica tu visita</h3>
        <p class="mt-3 text-gray-600">Cómo llegar, normas y accesibilidad.</p>
        <div class="mt-6 rounded overflow-hidden border h-64 bg-gray-200 flex items-center justify-center">Mapa</div>
      </article>

      <aside class="space-y-4">
        <div class="bg-white p-4 rounded-lg shadow">
          <h4 class="font-semibold">Patrocinadores</h4>
          <div class="mt-3 grid grid-cols-2 gap-2">
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor A</div>
            <div class="h-12 bg-gray-100 rounded flex items-center justify-center text-sm">Sponsor B</div>

          </div>                        <?php 
            $archivoPublicidad = "sneakers"; $alineacion=2; $numeroAleatorio = 5;
            require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-sneakers.php"; ?>
        </div>

        <div class="bg-white p-4 rounded-lg border">
          <h4 class="font-semibold">Reservas y grupos</h4>
          <button class="mt-3 w-full bg-emerald-600 text-white py-2 rounded">Contactar</button>
        </div>
      </aside>
    </section>

    <footer class="mt-10 border-t pt-6 pb-12 text-sm text-gray-600">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-start md:items-center justify-between gap-4 px-4">
        <div>
          <p>© Jardin des Plantes — Nantes</p>
          <p class="mt-1">Nantes, Francia · Tel: +33 (0)2 40 xx xx xx</p>
        </div>
        <div class="flex items-center gap-4">
          <a href="#support" class="underline">Donar</a>
          <a href="#" class="underline">Aviso legal</a>
        </div>
      </div>
    </footer>
  </main>
</body>
</html>
