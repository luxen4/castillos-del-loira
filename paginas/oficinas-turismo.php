<!DOCTYPE html>
<html lang="es">
<head>
  <!-- ✅ SEO Avanzado -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oficinas de Turismo Valle del Loira | Información turística</title>
  <meta name="description" content="Direcciones, webs y contacto de las Oficinas de Turismo en Nantes, Angers, Saumur, Tours, Amboise, Blois y Orleans.">
  <meta name="keywords" content="Valle del Loira, oficinas de turismo, información turística Francia, Loire Valley">
  <meta name="author" content="Tu Nombre">

  <!-- Open Graph -->
  <meta property="og:title" content="Oficinas de Turismo en el Valle del Loira">
  <meta property="og:description" content="Encuentra las oficinas de turismo oficiales en Nantes, Angers, Saumur, Tours y más.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://tusitio.com/img/oficinas-turismo-loira.jpg">
  <meta property="og:url" content="https://tusitio.com/oficinas.php">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Oficinas de Turismo Valle del Loira">
  <meta name="twitter:description" content="Información práctica y contacto de las oficinas de turismo en el Valle del Loira.">
  <meta name="twitter:image" content="https://tusitio.com/img/oficinas-turismo-loira.jpg">

  <!-- ✅ TailwindCSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- ✅ Heroicons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- ✅ Favicon -->
  <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- 🔹 Header -->
  <header class="bg-blue-700 text-white py-6 shadow-md">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold">🗺️ Oficinas de Turismo Valle del Loira</h1>
      <nav class="flex gap-6">
        <a href="index.php" class="hover:underline">🏠 Inicio</a>
        <a href="castillos.php" class="hover:underline">🏰 Castillos</a>
        <a href="oficinas.php" class="font-semibold underline">🗺️ Oficinas Turismo</a>
      </nav>
    </div>
  </header>

  <!-- 🔹 Hero -->
  <section class="container mx-auto px-6 py-12 text-center">
    <h2 class="text-3xl md:text-4xl font-extrabold text-blue-700">Encuentra la Oficina de Turismo</h2>
    <p class="mt-4 text-lg text-gray-600">Información oficial, contacto y mapas de las principales ciudades del Valle del Loira.</p>
  </section>

  <!-- 🔹 Listado de Oficinas -->
  <main class="container mx-auto px-6 space-y-12">
    
    <!-- Ejemplo con Nantes -->
    <section>
      <h3 class="text-2xl font-bold text-blue-600 mb-6">🏙️ Nantes</h3>
      <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
        <h4 class="font-semibold text-lg">Oficina de Turismo de Nantes</h4>
        <p class="text-sm text-gray-600 mt-2">Dirección: 9 Rue des États, 44000 Nantes, Francia</p>
        <p class="text-sm text-gray-600">Teléfono: +33 2 40 41 14 14</p>
        <div class="mt-3 flex gap-4 text-sm">
          <a href="https://en.nantes-tourisme.com/" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
          <a href="https://goo.gl/maps/7hBtEyF3XpC2" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
        </div>
      </div>
    </section>

    <!-- Repite para Angers -->
    <section>
      <h3 class="text-2xl font-bold text-blue-600 mb-6">🏙️ Angers</h3>
      <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
        <h4 class="font-semibold text-lg">Oficina de Turismo de Angers</h4>
        <p class="text-sm text-gray-600 mt-2">Dirección: 7 Place Kennedy, 49100 Angers, Francia</p>
        <p class="text-sm text-gray-600">Teléfono: +33 2 41 23 50 00</p>
        <div class="mt-3 flex gap-4 text-sm">
          <a href="https://www.angers-tourisme.com/" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
          <a href="https://goo.gl/maps/EpY2Mxh6y6E2" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
        </div>
      </div>
    </section>

    <!-- Ejemplo Tours -->
    <section>
      <h3 class="text-2xl font-bold text-blue-600 mb-6">🏙️ Tours</h3>
      <div class="bg-white rounded-xl shadow-lg p-6 hover:scale-105 transition">
        <h4 class="font-semibold text-lg">Oficina de Turismo de Tours</h4>
        <p class="text-sm text-gray-600 mt-2">Dirección: 78 Rue Bernard Palissy, 37000 Tours, Francia</p>
        <p class="text-sm text-gray-600">Teléfono: +33 2 47 70 37 37</p>
        <div class="mt-3 flex gap-4 text-sm">
          <a href="https://www.tours-tourisme.fr/" target="_blank" class="text-emerald-700 hover:underline">🌐 Web oficial</a>
          <a href="https://goo.gl/maps/4m8U7YekUwT2" target="_blank" class="text-blue-600 hover:underline">📍 Google Maps</a>
        </div>
      </div>
    </section>

    <!-- 🔹 Repite este bloque para Saumur, Amboise, Blois y Orleans -->
    
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

<?php /* 
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
          <h4>Of. de turismo</h4>
          <nav class="row">
            <ul class="col-xl-6 col-lg-6 col-md-6">
              <li><a href="https://www.france-voyage.com/francia-ciudades/nantes-15607/oficina-turismo-nantes-metropole-7525.htm">Nantes</a>
              </li>
              <li><a href="https://www.minube.com/que_ver/francia/pais_del_loira/nantes">
                  <h6>Ciudad de Nantes</h6>
                </a></li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/angers-16905/oficina-turismo-angers-6616.htm#:~:text=Tel.%20%3A%20%2B33%202%2041,officedetourisme%40destination%2Dangers.com">Angers</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/saumur-17211/oficina-turismo-saumur-6996.htm">Saumur</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/chinon-12807/oficina-turismo-chinon-7821.htm">Chinon</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/langeais-12858/oficina-turismo-langeais-8087.htm">Langeais</a>
              </li>
            </ul>


            <ul class="col-xl-6 col-lg-6 col-md-6">
              <li><a href="https://www.france-voyage.com/francia-ciudades/tours-12992/oficina-turismo-tours-6496.htm">Tours</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/amboise-12739/oficina-turismo-amboise-5802.htm">Amboise</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/blois-14520/oficina-turismo-blois-7034.htm">Blois</a>
              </li>
              <li><a href="https://www.france-voyage.com/francia-ciudades/orleans-15944/oficina-turismo-orleans-6280.htm">Orleans</a>
              </li>
            </ul>



          </nav>
        </div>



      </div> */
      ?>