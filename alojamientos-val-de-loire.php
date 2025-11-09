<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alojamientos | Valle del Loira</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans leading-relaxed">

  <!-- Header -->
  <header class="bg-emerald-700 text-white py-6 shadow-md">
    <div class="container mx-auto text-center">
      <h1 class="text-3xl font-bold">🏨 Alojamientos del Valle del Loira</h1>
      <p class="text-emerald-100 mt-2">Encuentra hoteles, casas rurales y más para tu visita</p>
    </div>
  </header>

  <!-- Main -->
  <main class="container mx-auto px-6 py-12 flex justify-center">
    <section id="alojamientos" class="bg-white rounded-2xl shadow p-8 max-w-4xl w-full">
      <h2 class="text-2xl font-bold text-emerald-700 mb-6 text-center">🏨 Alojamientos en el Valle del Loira</h2>
      <p class="text-gray-600 text-center mb-8 max-w-3xl mx-auto">
        Descubre opciones de alojamiento en las principales ciudades del <strong>Valle del Loira</strong>, desde hoteles históricos hasta casas rurales con encanto.
      </p>

      <!-- 🟦 Placeholder de anuncio superior -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center mb-8">
        [Espacio publicitario superior]
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <!-- Columna izquierda -->
        <div>
          <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Oeste</h3>
          <ul class="space-y-3 text-gray-700">
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Nantes</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Angers</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Saumur</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Chinon</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Langeais</a></li>
          </ul>
        </div>

        <!-- Columna derecha -->
        <div>
          <h3 class="text-xl font-semibold text-emerald-700 mb-4">🛌 Zona Este</h3>
          <ul class="space-y-3 text-gray-700">
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Tours</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Amboise</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Blois</a></li>
            <li><a href="#" class="text-emerald-700 font-medium hover:underline">Orleans</a></li>
          </ul>
        </div>
      </div>

      <!-- 🟦 Placeholder de anuncio intermedio -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center my-8">
        [Espacio publicitario intermedio]
      </div>

      <div class="mt-10 text-center text-gray-500 text-sm">
        🏘️ Recomendamos reservar con antelación en temporada alta para asegurar disponibilidad.
      </div>

      <!-- 🔙 Botón Atrás centrado -->
      <div class="mt-6 mb-8 flex justify-center">
        <button 
          onclick="history.back()" 
          class="inline-flex items-center gap-2 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg shadow hover:bg-gray-300 hover:text-gray-900 transition">
          ⬅️ Atrás
        </button>
      </div>

      <!-- 🟦 Placeholder de anuncio inferior -->
      <div class="bg-gray-200 text-gray-500 p-4 rounded-lg text-center mt-8">
        [Espacio publicitario inferior]
      </div>

    </section>
  </main>

  <!-- Footer -->
  <footer class="bg-emerald-700 text-white text-center py-6 mt-10">
    <p>© 2025 Valle del Loira — Encuentra alojamiento y disfruta tu estancia 🇫🇷</p>
  </footer>

</body>
</html>
