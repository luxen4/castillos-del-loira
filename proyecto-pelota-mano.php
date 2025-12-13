<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mundo Pelota Mano | Noticias, Resultados y Torneos</title>
  
  <!-- SEO -->
  <meta name="description" content="Portal oficial de Pelota Mano: últimas noticias, resultados de partidos, equipos y torneos de la pelota mano nacional e internacional.">
  <meta name="keywords" content="pelota mano, frontón, resultados, noticias, torneos, equipos, deporte, España, Francia">
  <meta name="author" content="TuNombre o Organización">
  
  <!-- Open Graph / Redes Sociales -->
  <meta property="og:title" content="Mundo Pelota Mano">
  <meta property="og:description" content="Portal oficial de Pelota Mano: noticias, resultados y torneos.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.tuwebpelotamano.com">
  <meta property="og:image" content="https://www.tuwebpelotamano.com/img/og-image.jpg">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Mundo Pelota Mano">
  <meta name="twitter:description" content="Portal oficial de Pelota Mano: noticias, resultados y torneos.">
  <meta name="twitter:image" content="https://www.tuwebpelotamano.com/img/og-image.jpg">
  

    <!-- ✅ TailwindCSS y Heroicons -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>


  <!-- FontAwesome Iconos -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

<!-- HEADER -->
<header class="bg-emerald-700 text-white shadow-md sticky top-0 z-50">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">
    <a href="#" class="text-2xl font-bold flex items-center gap-2">
      <i class="fas fa-hand-paper"></i> Pelota Mano
    </a>

    <!-- NAV DESKTOP -->
    <nav class="hidden md:flex gap-6 font-medium">
      <a href="#noticias" class="hover:underline flex items-center gap-1"><i class="fas fa-newspaper"></i> Noticias</a>
      <a href="#resultados" class="hover:underline flex items-center gap-1"><i class="fas fa-chart-line"></i> Resultados</a>
      <a href="#equipos" class="hover:underline flex items-center gap-1"><i class="fas fa-users"></i> Equipos</a>
      <a href="#torneos" class="hover:underline flex items-center gap-1"><i class="fas fa-trophy"></i> Torneos</a>
      <a href="#contacto" class="hover:underline flex items-center gap-1"><i class="fas fa-envelope"></i> Contacto</a>
    </nav>

    <!-- HAMBURGUESA MÓVIL -->
    <button id="menuBtn" class="md:hidden flex flex-col gap-1.5">
      <span class="block w-7 h-1 bg-white"></span>
      <span class="block w-7 h-1 bg-white"></span>
      <span class="block w-7 h-1 bg-white"></span>
    </button>
  </div>

  <!-- MENÚ MÓVIL -->
  <div id="mobileMenu" class="hidden bg-emerald-600 md:hidden">
    <a href="#noticias" class="block py-2 px-4 hover:bg-emerald-500"><i class="fas fa-newspaper"></i> Noticias</a>
    <a href="#resultados" class="block py-2 px-4 hover:bg-emerald-500"><i class="fas fa-chart-line"></i> Resultados</a>
    <a href="#equipos" class="block py-2 px-4 hover:bg-emerald-500"><i class="fas fa-users"></i> Equipos</a>
    <a href="#torneos" class="block py-2 px-4 hover:bg-emerald-500"><i class="fas fa-trophy"></i> Torneos</a>
    <a href="#contacto" class="block py-2 px-4 hover:bg-emerald-500"><i class="fas fa-envelope"></i> Contacto</a>
  </div>
</header>

<script>
  document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>

<!-- HERO -->
<section class="bg-emerald-600 text-white py-24 text-center">
  <h1 class="text-5xl font-bold mb-4">Bienvenido al Mundo de la Pelota Mano</h1>
  <p class="text-xl max-w-3xl mx-auto">Noticias, resultados, torneos y todo lo que necesitas saber sobre la pelota mano nacional e internacional.</p>
</section>

<!-- NOTICIAS -->
<section id="noticias" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">📰 Últimas Noticias</h2>
  <div class="grid md:grid-cols-3 gap-6">
    <article class="bg-white rounded-lg shadow p-4">
      <h3 class="font-semibold text-lg mb-2">Noticia 1</h3>
      <p>Resumen de la noticia de pelota mano con enlace a la página oficial.</p>
      <a href="https://www.fpv.es/" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline mt-2 inline-block">Más info oficial</a>
    </article>
    <article class="bg-white rounded-lg shadow p-4">
      <h3 class="font-semibold text-lg mb-2">Noticia 2</h3>
      <p>Actualización sobre resultados recientes y próximos torneos.</p>
      <a href="https://www.fpv.es/" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline mt-2 inline-block">Más info oficial</a>
    </article>
    <article class="bg-white rounded-lg shadow p-4">
      <h3 class="font-semibold text-lg mb-2">Noticia 3</h3>
      <p>Destacados de equipos y jugadores importantes en el ámbito nacional.</p>
      <a href="https://www.fpv.es/" target="_blank" rel="noopener noreferrer" class="text-emerald-600 hover:underline mt-2 inline-block">Más info oficial</a>
    </article>
  </div>
</section>

<!-- RESULTADOS -->
<section id="resultados" class="bg-gray-200 py-12">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-emerald-700 mb-6">📊 Resultados Recientes</h2>
    <table class="min-w-full bg-white rounded-lg shadow overflow-hidden">
      <thead class="bg-emerald-700 text-white">
        <tr>
          <th class="py-2 px-4">Fecha</th>
          <th class="py-2 px-4">Partido</th>
          <th class="py-2 px-4">Resultado</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-b hover:bg-gray-100">
          <td class="py-2 px-4">12/12/2025</td>
          <td class="py-2 px-4">Equipo A vs Equipo B</td>
          <td class="py-2 px-4">30-25</td>
        </tr>
        <tr class="border-b hover:bg-gray-100">
          <td class="py-2 px-4">13/12/2025</td>
          <td class="py-2 px-4">Equipo C vs Equipo D</td>
          <td class="py-2 px-4">28-28</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<!-- EQUIPOS -->
<section id="equipos" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">🏟 Equipos Destacados</h2>
  <div class="grid md:grid-cols-3 gap-6">
    <div class="bg-white rounded-lg shadow p-4 text-center">
      <h3 class="font-semibold text-lg mb-2">Equipo A</h3>
      <p>Información, jugadores destacados y enlace a su web oficial.</p>
      <a href="#" target="_blank" class="text-emerald-600 hover:underline">Web oficial</a>
    </div>
    <div class="bg-white rounded-lg shadow p-4 text-center">
      <h3 class="font-semibold text-lg mb-2">Equipo B</h3>
      <p>Información, jugadores destacados y enlace a su web oficial.</p>
      <a href="#" target="_blank" class="text-emerald-600 hover:underline">Web oficial</a>
    </div>
    <div class="bg-white rounded-lg shadow p-4 text-center">
      <h3 class="font-semibold text-lg mb-2">Equipo C</h3>
      <p>Información, jugadores destacados y enlace a su web oficial.</p>
      <a href="#" target="_blank" class="text-emerald-600 hover:underline">Web oficial</a>
    </div>
  </div>
</section>

<!-- TORNEOS -->
<section id="torneos" class="bg-gray-200 py-12">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl font-bold text-emerald-700 mb-6">🏆 Torneos Próximos</h2>
    <ul class="list-disc list-inside">
      <li>Campeonato Nacional 2026 - 5 al 10 de Enero</li>
      <li>Torneo Internacional de Invierno - 15 al 20 de Febrero</li>
      <li>Copa de la Juventud - 1 al 5 de Marzo</li>
    </ul>
  </div>
</section>

<!-- CONTACTO -->
<section id="contacto" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">📩 Contacto</h2>
  <form class="bg-white rounded-lg shadow p-6 grid gap-4 max-w-xl mx-auto">
    <input type="text" placeholder="Nombre" class="border px-3 py-2 rounded w-full">
    <input type="email" placeholder="Correo" class="border px-3 py-2 rounded w-full">
    <textarea placeholder="Mensaje" class="border px-3 py-2 rounded w-full"></textarea>
    <button class="bg-emerald-700 text-white py-2 px-4 rounded hover:bg-emerald-800 transition">Enviar</button>
  </form>
</section>

<!-- FOOTER -->
<footer class="bg-emerald-700 text-white py-6 text-center">
  &copy; 2025 Mundo Pelota Mano. Todos los derechos reservados.
</footer>
</body>
</html>
