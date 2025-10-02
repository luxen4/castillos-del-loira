<!DOCTYPE html>
<html lang="es">
<head>
  <!-- ✅ SEO Avanzado -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alojamientos Valle del Loira | Hoteles Recomendados en Francia</title>
  <meta name="description" content="Descubre alojamientos recomendados en Nantes, Angers, Saumur, Tours, Amboise, Blois y Orleans. Hoteles, casas rurales y estancias únicas en el Valle del Loira.">
  <meta name="keywords" content="Valle del Loira, alojamientos, hoteles Francia, dónde dormir, Chambord, Chenonceau, Amboise">
  <meta name="author" content="Tu Nombre">

  <!-- Open Graph -->
  <meta property="og:title" content="Alojamientos en el Valle del Loira">
  <meta property="og:description" content="Hoteles y alojamientos recomendados en Nantes, Angers, Saumur y más.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://tusitio.com/img/alojamientos-loira.jpg">
  <meta property="og:url" content="https://tusitio.com/alojamientos.php">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Alojamientos Valle del Loira">
  <meta name="twitter:description" content="Guía de hoteles recomendados en el Valle del Loira.">
  <meta name="twitter:image" content="https://tusitio.com/img/alojamientos-loira.jpg">

  <!-- ✅ TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- ✅ Heroicons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- ✅ Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- 🔹 Header -->
  <header class="bg-emerald-700 text-white py-6 shadow-md">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold">🏨 Alojamientos Valle del Loira</h1>
      <nav class="flex gap-6">
        <a href="../index.php" class="hover:underline">🏠 Inicio</a>
        <a href="castillos.php" class="hover:underline">🏰 Castillos</a>
        <a href="../alojamientos.php" class="font-semibold underline">🛎️ Alojamientos</a>
      </nav>
    </div>
  </header>

  <!-- 🔹 Hero -->
  <section class="container mx-auto px-6 py-12 text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-emerald-700">Encuentra tu alojamiento ideal</h2>
    <p class="mt-4 text-lg text-gray-600">Hoteles, casas rurales y experiencias únicas en el Valle del Loira.</p>
  </section>

  <!-- 🔹 Listado de ciudades y alojamientos -->
  <main class="container mx-auto px-6 space-y-12">
    
    <!-- Ejemplo con Nantes -->
    <section>
      <h3 class="text-2xl font-bold text-emerald-600 mb-6">🏙️ Nantes</h3>
      <div class="grid md:grid-cols-3 gap-6">
        
        <!-- Hotel 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
          <img src="img/alojamientos/nantes-hotel1.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold text-lg">Hotel 1 Nantes</h4>
            <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
            <div class="mt-3 flex gap-3 text-sm">
              <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
              <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
            </div>
          </div>
        </div>

        <!-- Hotel 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
          <img src="img/alojamientos/nantes-hotel2.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold text-lg">Hotel 2 Nantes</h4>
            <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
            <div class="mt-3 flex gap-3 text-sm">
              <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
              <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
            </div>
          </div>
        </div>

        <!-- Hotel 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:scale-105 transition">
          <img src="img/alojamientos/nantes-hotel3.jpg" alt="Hotel en Nantes" class="w-full h-40 object-cover">
          <div class="p-4">
            <h4 class="font-semibold text-lg">Hotel 3 Nantes</h4>
            <p class="text-sm text-gray-600">Descripción breve del alojamiento.</p>
            <div class="mt-3 flex gap-3 text-sm">
              <a href="#" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
              <a href="#" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 🔹 Repite el bloque anterior para Angers, Saumur, Chinon, Langeais, Tours, Amboise, Blois, Orleans -->
    <!-- Solo cambias el nombre de la ciudad, imágenes y alojamientos -->

  </main>

  <!-- 🔹 Footer -->
  <footer class="bg-gray-800 text-gray-300 py-8 mt-12">
    <div class="container mx-auto px-6 text-center">
      <p>&copy; <?= date('Y'); ?> Castillos del Valle del Loira. Diseñado por Tu Nombre.</p>
      <p class="mt-2">
        <a href="mailto:tuemail@correo.com" class="hover:text-white">📧 tuemail@correo.com</a>
      </p>
    </div>
  </footer>

  <script>
    feather.replace();
  </script>
</body>
</html>
