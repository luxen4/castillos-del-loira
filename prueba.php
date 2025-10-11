<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Castillos y Alojamientos | Valle del Loira</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
    .paravisitar { width: 100%; max-width: 200px; margin-top: 0.5rem; border-radius: 0.5rem; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-6 shadow-md">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">🌿 Valle del Loira: Castillos y Alojamientos</h1>
      <p class="text-emerald-100 mt-2">Explora las ciudades, castillos y alojamientos en el Loira</p>
    </div>
  </header>

  <!-- Contenido principal -->
  <main class="container mx-auto px-4 py-8">

    <!-- Navegación -->
    <nav class="flex flex-wrap justify-center gap-2 mb-8">
      <a href="#castillos" class="bg-emerald-600 text-white px-3 py-1 rounded hover:bg-emerald-700 transition">🏰 Castillos</a>
      <a href="#alojamientos" class="bg-emerald-600 text-white px-3 py-1 rounded hover:bg-emerald-700 transition">🏨 Alojamientos</a>
      <a href="#etapas" class="bg-emerald-600 text-white px-3 py-1 rounded hover:bg-emerald-700 transition">🗺️ Etapas</a>
    </nav>

    <!-- CASTILLOS -->
    <section id="castillos" class="mb-12">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">Castillos por ciudad</h2>

      <!-- Amboise -->
      <div class="mb-6">
        <h3 class="text-xl font-semibold text-emerald-600 mb-2">Amboise</h3>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <li>
            <a href="https://www.chateau-cheverny.fr/" class="block p-2 border rounded hover:bg-emerald-50">
              Château de Cheverny
              <img class="paravisitar" src="images/cheverni.png" alt="Château de Cheverny">
            </a>
          </li>
          <li><a href="http://www.iledor-amboise.fr/" class="block p-2 border rounded hover:bg-emerald-50">Ile d'Or</a></li>
          <li><a href="https://www.google.com/search?client=firefox-b-d&q=Jardines+en+Amboise" class="block p-2 border rounded hover:bg-emerald-50">Jardines en Amboise</a></li>
          <li><a href="https://www.valledelloira-francia.es/castillos-del-loira/castillo-de-clos-luce-parque-leonardo-da-vinci/insolito-el-parque-leonardo-da-vinci-y-el-jardin-de-leonardo" class="block p-2 border rounded hover:bg-emerald-50">Parque Leonardo da Vinci</a></li>
          <li><a href="https://www.parcminichateaux.com/" class="block p-2 border rounded hover:bg-emerald-50">Mini Château</a></li>
          <li><a href="https://www.pagode-chanteloup.com/" class="block p-2 border rounded hover:bg-emerald-50">La Pagoda</a></li>
        </ul>
      </div>

      <!-- Puedes agregar aquí más ciudades en el mismo formato -->
    </section>

    <!-- ALOJAMIENTOS -->
    <section id="alojamientos" class="mb-12">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">Alojamientos</h2>

      <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <li><a href="https://www.booking.com/index.es.html" class="block p-2 border rounded hover:bg-emerald-50">Booking.com</a></li>
        <li><a href="https://www.relaisdeslandes.com/en/" class="block p-2 border rounded hover:bg-emerald-50">Relais Des Landes</a></li>
        <li><a href="https://www.auberge-du-centre.com/" class="block p-2 border rounded hover:bg-emerald-50">Auberge du Centre</a></li>
        <li><a href="https://www.chateaudelarozelle.com/en/" class="block p-2 border rounded hover:bg-emerald-50">Château de la Rozelle</a></li>
        <li><a href="https://all.accor.com/hotel/1621/index.en.shtml" class="block p-2 border rounded hover:bg-emerald-50">Mercure Centre</a></li>
      </ul>
    </section>

    <!-- BLOQUE RESUMEN CASTILLOS + ALOJAMIENTOS -->
    <section class="mb-12">
      <div class="grid md:grid-cols-2 gap-8">

        <!-- Castillos -->
        <div>
          <h3 class="text-2xl font-bold text-emerald-700 mb-4">🏰 Castillos por Ciudad</h3>
          <nav class="grid grid-cols-2 gap-2">
            <ul class="space-y-1">
              <li><a href="#" class="text-emerald-700 hover:underline">Nantes</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Angers</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Saumur</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Chinon</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Langeais</a></li>
            </ul>
            <ul class="space-y-1">
              <li><a href="#" class="text-emerald-700 hover:underline">Tours</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Amboise</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Blois</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Orleans</a></li>
            </ul>
          </nav>
        </div>

        <!-- Alojamientos -->
        <div>
          <h3 class="text-2xl font-bold text-emerald-700 mb-4">🏨 Alojamientos por Ciudad</h3>
          <nav class="grid grid-cols-2 gap-2">
            <ul class="space-y-1">
              <li><a href="#" class="text-emerald-700 hover:underline">Nantes</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Angers</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Saumur</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Chinon</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Langeais</a></li>
            </ul>
            <ul class="space-y-1">
              <li><a href="#" class="text-emerald-700 hover:underline">Tours</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Amboise</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Blois</a></li>
              <li><a href="#" class="text-emerald-700 hover:underline">Orleans</a></li>
            </ul>
          </nav>
        </div>

      </div>
    </section>

    <!-- ETAPAS -->
    <section id="etapas">
      <h2 class="text-2xl font-bold text-emerald-700 mb-4">🗺️ Etapas del Valle del Loira</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
        <a href="etapas/1-etapa-nantes-angers.php" class="block p-2 border rounded hover:bg-emerald-50 text-center">Nantes y Angers</a>
        <a href="etapa-angers-saumur.html" class="block p-2 border rounded hover:bg-emerald-50 text-center">Angers y Saumur</a>
        <a href="etapa-saumur-chinon-langeais.html" class="block p-2 border rounded hover:bg-emerald-50 text-center">Saumur, Chinon y Langeais</a>
        <a href="etapas/4-etapa-tours-amboise.php" class="block p-2 border rounded hover:bg-emerald-50 text-center">Tours y Amboise</a>
        <a href="etapa-amboise-blois.html" class="block p-2 border rounded hover:bg-emerald-50 text-center">Amboise y Blois</a>
        <a href="etapa-blois-orleans.html" class="block p-2 border rounded hover:bg-emerald-50 text-center">Blois y Orleans</a>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-emerald-700 text-white text-center py-6 mt-12">
    <p>© 2025 Valle del Loira — Inspiración y patrimonio francés 🇫🇷</p>
  </footer>

</body>
</html>
