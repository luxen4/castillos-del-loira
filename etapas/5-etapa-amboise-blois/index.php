<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ruta Valle del Loira: Amboise – Blois</title>
  <meta name="description" content="Descubre la ruta del Valle del Loira entre Amboise y Blois: castillos renacentistas, paisajes fluviales y arte francés.">
  <meta name="keywords" content="Valle del Loira, Amboise, Blois, castillos, Chaumont-sur-Loire, turismo Francia">
  <meta name="author" content="TuNombre">

  <!-- Open Graph -->
  <meta property="og:title" content="Ruta Valle del Loira: Amboise – Blois">
  <meta property="og:description" content="Explora castillos y paisajes entre Amboise y Blois. Información, fotos y enlaces oficiales.">
  <meta property="og:image" content="img/logo.png">
  <meta property="og:type" content="website">

  <!-- Iconos y Tailwind -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

  <!-- 🎶 Música de fondo -->
  <audio id="bg-music" autoplay loop muted>
    <source src="../audio/musica-ambiental-1.mp3" type="audio/mpeg">
  </audio>

  <!-- Botón de sonido -->
  <div class="fixed bottom-4 right-4">
    <button id="toggle-sound" class="px-4 py-2 bg-emerald-600 text-white rounded-full shadow-lg hover:bg-emerald-700 transition">
      🔊 Activar sonido
    </button>
  </div>

  <script>
    const audio = document.getElementById("bg-music");
    const btn = document.getElementById("toggle-sound");
    btn.addEventListener("click", () => {
      audio.muted = !audio.muted;
      btn.textContent = audio.muted ? "🔊 Activar sonido" : "🔈 Silenciar";
      if (!audio.muted) audio.play();
    });
  </script>

  <!-- 🔹 Header -->
  <header class="bg-emerald-700 text-white shadow-md py-6">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
      <h1 class="text-3xl md:text-4xl font-extrabold">🌿 Valle del Loira: Amboise – Blois</h1>
      <nav class="mt-4 md:mt-0 flex gap-4">
        <a href="../index.php" class="px-4 py-2 rounded-lg bg-white text-emerald-700 font-semibold hover:bg-gray-100 transition">🏠 Página Principal</a>
        <a href="formulario-chat-gpt.html" class="px-4 py-2 rounded-lg bg-white text-emerald-700 font-semibold hover:bg-gray-100 transition">✍️ Ir al Formulario</a>
      </nav>
    </div>
  </header>

  <!-- 🔹 Introducción -->
  <section class="container mx-auto px-6 py-10 text-center bg-emerald-50 rounded-lg shadow-lg mt-6">
    <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-700 mb-4">Ruta entre Amboise y Blois</h2>
    <p class="text-lg md:text-xl text-gray-700 mb-6">
      Desde el esplendor renacentista de Amboise hasta la elegancia real de Blois, esta etapa te sumerge en la historia del Loira, con jardines, arte y arquitectura que enamoran a cada paso.
    </p>

    <div class="flex flex-col md:flex-row justify-center gap-6 flex-wrap">
      <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition">
        <i class="fas fa-palette text-emerald-600 text-2xl"></i> <span>Arte y Renacimiento</span>
      </div>
      <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition">
        <i class="fas fa-tree text-emerald-600 text-2xl"></i> <span>Jardines y paisajes</span>
      </div>
      <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition">
        <i class="fas fa-wine-glass text-emerald-600 text-2xl"></i> <span>Vinos y gastronomía</span>
      </div>
    </div>
  </section>

  <!-- 💡 Espacio publicitario -->
  <div class="container mx-auto mt-6 px-6">
    <div class="bg-white border border-gray-200 rounded-lg shadow p-4 text-center text-gray-600">
      🏰 <strong>Publicidad:</strong> Descubre ofertas en visitas a castillos con <a href="#" class="text-emerald-700 font-semibold hover:underline">LoirePass.fr</a>
    </div>
  </div>

  <!-- 🔹 Castillos cercanos -->
  <section id="nav1" class="container mx-auto px-6 py-8 bg-white rounded-lg shadow mt-6">
    <h3 class="text-2xl font-bold text-emerald-700 mb-4 text-center">Castillos cercanos para visitar</h3>

    <ul class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <li class="text-center">
        <a href="https://www.chateau-amboise.com/en/" target="_blank">
          <img class="rounded-lg shadow mb-2 mx-auto" src="images/amboise.jpg" alt="Château d’Amboise">
          <p class="text-emerald-700 font-semibold">Château d’Amboise</p>
        </a>
      </li>
      <li class="text-center">
        <a href="https://domaine-chaumont.fr/en" target="_blank">
          <img class="rounded-lg shadow mb-2 mx-auto" src="images/chaumont.jpg" alt="Château de Chaumont-sur-Loire">
          <p class="text-emerald-700 font-semibold">Château de Chaumont-sur-Loire</p>
        </a>
      </li>
      <li class="text-center">
        <a href="https://www.chateaudeblois.fr/" target="_blank">
          <img class="rounded-lg shadow mb-2 mx-auto" src="images/blois.jpg" alt="Château Royal de Blois">
          <p class="text-emerald-700 font-semibold">Château Royal de Blois</p>
        </a>
      </li>
      <li class="text-center">
        <a href="https://www.valdeloire-france.com/es" target="_blank" class="text-emerald-600 hover:underline font-semibold">Más castillos en el Loira</a>
      </li>
    </ul>
  </section>

  <!-- 💡 Segundo espacio de publicidad -->
  <div class="container mx-auto mt-8 px-6">
    <div class="bg-emerald-50 border border-emerald-200 rounded-lg shadow p-4 text-center text-gray-700">
      🚌 <strong>Publicidad:</strong> Tours guiados por el Loira desde Blois con <a href="#" class="text-emerald-700 hover:underline font-semibold">VisitaLoira.com</a>
    </div>
  </div>

  <!-- 🔹 Mapa -->
  <section id="mapa" class="container mx-auto px-6 py-10">
    <h3 class="text-2xl font-bold text-emerald-700 mb-4 text-center">🗺️ Mapa de la ruta Amboise – Blois</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d977432.3324411451!2d1.175!3d47.480!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1759333344000!5m2!1ses!2ses"
      width="100%" height="450" class="rounded-lg shadow-md" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>




<?php require "data.php"; ?>
<?php require "../template-navegacion-etapas.php"; ?>



  <!-- 🔹 Footer -->
  <footer class="bg-gray-100 mt-12 py-6 text-center text-gray-600">
    <p>© 2025 Valle del Loira | <a href="../index.php" class="text-emerald-700 hover:underline">Inicio</a></p>
  </footer>

</body>
</html>
