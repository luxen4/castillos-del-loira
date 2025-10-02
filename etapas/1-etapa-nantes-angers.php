<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruta Valle del Loira: Nantes – Angers</title>
    <meta name="description" content="Descubre la ruta del Valle del Loira entre Nantes y Angers: castillos, puentes, paisajes y cultura francesa. Planifica tu viaje.">
    <meta name="keywords" content="Valle del Loira, Nantes, Angers, castillos, turismo Francia, viaje">
    <meta name="author" content="TuNombre">

    <!-- Open Graph / Twitter Cards -->
    <meta property="og:title" content="Ruta Valle del Loira: Nantes – Angers">
    <meta property="og:description" content="Explora castillos y paisajes entre Nantes y Angers. Información práctica y enlaces oficiales.">
    <meta property="og:image" content="img/logo.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://tusitio.com/etapa-nantes-angers.php">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ruta Valle del Loira: Nantes – Angers">
    <meta name="twitter:description" content="Explora castillos y paisajes entre Nantes y Angers. Información práctica y enlaces oficiales.">
    <meta name="twitter:image" content="img/logo.png">

    <!-- Iconos y Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- 🎶 Música de fondo -->
<audio id="bg-music" autoplay loop muted>
  <source src="../audio/musica-ambiental-1.mp3" type="audio/mpeg">
  Tu navegador no soporta el audio HTML5.
</audio>

<!-- 🔊 Botón para activar/desactivar sonido -->
<div class="fixed bottom-4 right-4">
  <button id="toggle-sound" 
          class="px-4 py-2 bg-emerald-600 text-white rounded-full shadow-lg hover:bg-emerald-700 transition">
    🔊 Activar sonido
  </button>
</div>

<script>
  const audio = document.getElementById("bg-music");
  const btn = document.getElementById("toggle-sound");

  btn.addEventListener("click", () => {
    if (audio.muted) {
      // 🔊 Activar sonido
      audio.muted = false;
      audio.play();
      btn.textContent = "🔈 Silenciar";
    } else {
      // 🤫 Silenciar sonido
      audio.muted = true;
      btn.textContent = "🔊 Activar sonido";
    }
  });
</script>



<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- 🔹 Header -->
    <header class="bg-emerald-700 text-white shadow-md py-6">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <h1 class="text-3xl md:text-4xl font-extrabold">🌿 Valle del Loira: Nantes – Angers</h1>
            <nav class="mt-4 md:mt-0 flex gap-4">
                <a href="../index.php" class="px-4 py-2 rounded-lg bg-white text-emerald-700 font-semibold hover:bg-gray-100 transition">🏠 Página Principal</a>
                <a href="formulario-chat-gpt.html" class="px-4 py-2 rounded-lg bg-white text-emerald-700 font-semibold hover:bg-gray-100 transition">✍️ Ir al Formulario</a>
            </nav>
        </div>
    </header>

    <!-- 🔹 Hero / Introducción enriquecida -->
    <section class="container mx-auto px-6 py-10 text-center bg-emerald-50 rounded-lg shadow-lg mt-6">
        <h2 class="text-3xl md:text-5xl font-extrabold text-emerald-700 mb-4">Descubre la ruta entre Nantes y Angers</h2>
        <p class="text-lg md:text-xl text-gray-700 mb-6">Castillos impresionantes, puentes históricos y paisajes de ensueño en el corazón del Valle del Loira. Vive una experiencia única entre historia, gastronomía y naturaleza.</p>

        <!-- Iconos de atractivos -->
        <div class="flex flex-col md:flex-row justify-center items-center gap-6 mb-6 flex-wrap">
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition transform">
                <i class="fas fa-chess-rook text-emerald-600 text-2xl"></i>
                <span class="text-gray-700 font-semibold">Castillos históricos</span>
            </div>
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition transform">
                <i class="fas fa-utensils text-emerald-600 text-2xl"></i>
                <span class="text-gray-700 font-semibold">Gastronomía local</span>
            </div>
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition transform">
                <i class="fas fa-water text-emerald-600 text-2xl"></i>
                <span class="text-gray-700 font-semibold">Ríos y paisajes</span>
            </div>
            <div class="flex items-center gap-2 bg-white px-4 py-2 rounded-lg shadow hover:scale-105 transition transform">
                <i class="fas fa-camera text-emerald-600 text-2xl"></i>
                <span class="text-gray-700 font-semibold">Fotografía única</span>
            </div>
        </div>

        <!-- Llamados a la acción -->
        <div class="flex flex-col md:flex-row justify-center items-center gap-4">
            <a href="#mapa" class="inline-block bg-white text-emerald-700 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">Ver Mapa</a>
            <a href="formulario-chat-gpt.html" class="inline-block bg-emerald-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-emerald-700 transition">Planifica tu visita ✍️</a>
        </div>

        <p class="mt-6 text-gray-600 max-w-3xl mx-auto">
            Explora castillos como <strong>Château de Serrant</strong> y <strong>Château de Ancenis</strong>, disfruta de los puentes históricos sobre el Loire y descubre la gastronomía y vinos locales que harán de tu viaje una experiencia inolvidable. ¡No te pierdas los secretos del Valle del Loira!
        </p>

        <!-- Testimonios cortos -->
        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow p-4 text-gray-700">
                <p class="italic">"Una ruta mágica, llena de historia y paisajes que parecen sacados de un cuento."</p>
                <p class="mt-2 font-semibold text-emerald-600">– Claudia, viajera</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 text-gray-700">
                <p class="italic">"Castillos impresionantes y comida deliciosa. ¡Recomiendo esta ruta al 100%!"</p>
                <p class="mt-2 font-semibold text-emerald-600">– Javier, turista</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4 text-gray-700">
                <p class="italic">"Una experiencia inolvidable para toda la familia, naturaleza, cultura y gastronomía en un solo viaje."</p>
                <p class="mt-2 font-semibold text-emerald-600">– Marta, viajera</p>
            </div>
        </div>
    </section>

    <!-- 🔹 Contenedor principal con sidebar -->
    <div class="container mx-auto px-6 flex flex-col md:flex-row gap-6 mt-6">

        <!-- 🔹 Sidebar de ciudades / sitios de interés -->
        <aside class="w-full md:w-64 bg-gray-100 p-4 rounded-lg shadow-lg flex-shrink-0">
            <h3 class="text-xl font-bold text-emerald-700 mb-4 flex items-center gap-2">
                <i class="fas fa-map-marker-alt"></i> Todas las ciudades
            </h3>

            <div class="mb-4">
                <h4 class="font-semibold text-gray-800 mb-2">Loira Occidental</h4>

                <!-- Nantes -->
                <div class="mb-2">
                    <h5 class="font-medium text-gray-700">Nantes</h5>
                    <ul class="list-disc list-inside text-gray-600 ml-2">
                        <li><a href="https://www.nantes-tourisme.com/en/heritage/la-cigale" target="_blank" class="hover:text-emerald-700 underline">La Cigale, restaurante art-noveau</a></li>
                        <li><a href="https://blog.volotea.com/es/rincon/el-passage-pommeraye/" target="_blank" class="hover:text-emerald-700 underline">Iglesia Passage Pommeraye</a></li>
                        <li><a href="https://www.lesmachines-nantes.fr/" target="_blank" class="hover:text-emerald-700 underline">Las Máquinas de la Isla</a></li>
                        <li><a href="https://www.minube.com/rincon/los-anillos-de-buren-y-bouchain-a3667924" target="_blank" class="hover:text-emerald-700 underline">Hangar à Bananes</a></li>
                        <li><a href="http://rgs.gssweb.org/es/news/milenio-de-la-abad-de-san-nicol-s-de-angers" target="_blank" class="hover:text-emerald-700 underline">Iglesia de San Nicolás</a></li>
                    </ul>
                </div>

                <!-- Angers -->
                <div>
                    <h5 class="font-medium text-gray-700">Angers</h5>
                    <ul class="list-disc list-inside text-gray-600 ml-2">
                        <li><a href="https://es.france.fr/es/actualidad/lista/angers-estilo-de-vida-frances-en-el-valle-del-loira" target="_blank" class="hover:text-emerald-700 underline">Plaza de Ralliement</a></li>
                        <li><a href="er-denis-papin" target="_blank" class="hover:text-emerald-700 underline">Casas entramadas en Angers</a></li>
                        <li><a href="http://www.chateau-angers.fr/" target="_blank" class="hover:text-emerald-700 underline">Castillo de Angers</a></li>
                        <li><a href="https://www.valledelloira-francia.es/castillos-del-loira/castillo-de-angers/no-te-puedes-perder-el-tapiz-del-apocalipsis" target="_blank" class="hover:text-emerald-700 underline">Tapiz del Apocalipsis</a></li>
                        <li><a href="https://sobrefrancia.com/2009/03/16/la-catedral-de-angers/" target="_blank" class="hover:text-emerald-700 underline">Catedral de Angers</a></li>
                    </ul>
                </div>
            </div>
        </aside>

        <!-- 🔹 Contenido principal -->
        <main class="flex-1 space-y-10">

            <!-- 🔹 Mapa -->
            <section id="mapa" class="py-6">
                <h3 class="text-2xl font-bold text-emerald-700 mb-4 flex items-center gap-2"><i class="fas fa-map-marked-alt"></i> Mapa de la ruta</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975856.9298516652!2d0.8322526227083755!3d47.50063815194359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1759333328793!5m2!1ses!2ses"
                    width="100%" height="450" class="rounded-lg shadow-md" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

            <!-- 🔹 Artículo principal -->
            <article class="space-y-6">
                <p>Comenzamos la ruta en el extremo occidental del Valle del Loira, desde <a href="ciudades/Nantes.php" class="text-emerald-700 font-semibold underline hover:text-emerald-800">Nantes</a> hasta <a href="ciudades/Angers.php" class="text-emerald-700 font-semibold underline hover:text-emerald-800">Angers</a>. Esta sección incluye diversos castillos y paisajes a lo largo del río Loire.</p>

                <!-- Imágenes de castillos -->
                <div class="grid md:grid-cols-2 gap-6">
                    <figure class="rounded-lg overflow-hidden shadow-lg">
                        <img src="https://www.chateau-serrant.net/media/images/upload/imag1-cent.jpg"
                            alt="Château de Serrant"
                            class="w-full h-auto object-cover">
                        <figcaption class="text-center text-gray-600 p-2">
                            Château de Serrant
                            <br>
                            <span class="text-sm text-gray-500">
                                📸 Foto:
                                <a href="https://www.chateau-serrant.net" target="_blank" class="text-emerald-600 hover:underline">
                                    Página oficial del Château de Serrant
                                </a>
                            </span>
                        </figcaption>
                    </figure>

                    <figure class="rounded-lg overflow-hidden shadow-lg">
                        <img src="https://ancenis-saint-gereon.fr/app/uploads/2023/09/chateau.png"
                            alt="Château d'Ancenis"
                            class="w-full h-auto object-cover">
                        <figcaption class="text-center text-gray-600 p-2">
                            Château d'Ancenis
                            <br>
                            <span class="text-sm text-gray-500">
                                📸 Foto:
                                <a href="https://ancenis-saint-gereon.fr/infos-et-demarches/culture/le-chateau-dancenis/" target="_blank" class="text-emerald-600 hover:underline">
                                    Página oficial del Château d'Ancenis
                                </a>
                            </span>
                        </figcaption>
                    </figure>

                </div>

                <!-- Castillos cercanos -->
                <details class="bg-white rounded-lg shadow-md p-4">
                    <summary class="font-semibold cursor-pointer text-emerald-700 hover:text-emerald-800">🏰 Algunos de los castillos cercanos</summary>
                    <div class="grid md:grid-cols-3 gap-4 mt-4">

                        <figure class="rounded-lg overflow-hidden shadow-lg">
                            <img src="https://static.apidae-tourisme.com/filestore/objets-touristiques/images/184/181/16823736.png"
                                alt="Château du Plessis-Bourré"
                                class="w-full h-auto object-cover rounded-lg shadow-md">
                            <figcaption class="text-center text-gray-600 p-2">
                                Château du Plessis-Bourré
                                <br>
                                <span class="text-sm text-gray-500">
                                    📸 Foto:
                                    <a href="https://www.destination-angers.com/es/offertas/castillo-del-plessis-bourre-ecuille-es-1617173/" target="_blank" class="text-emerald-600 hover:underline">
                                        Página oficial del Château du Plessis-Bourré
                                    </a>
                                </span>
                            </figcaption>
                        </figure>

                        <figure class="rounded-lg overflow-hidden shadow-lg">
                            <img src="https://photo.guidevoyageur.fr/1024/16355_4_chateau-du-plessis-mace.jpg"
                                alt="Château de Plessis-Macé"
                                class="w-full h-auto object-cover rounded-lg shadow-md">

                            <figcaption class="text-center text-gray-600 p-3">
                                <p class="font-medium">Château de Plessis-Macé</p>
                                <span class="block text-sm text-gray-500">
                                    📸 Foto:
                                    <a href="https://guidevoyageur.fr/poi-16355-chateau-du-plessis-mace"
                                        target="_blank"
                                        class="text-emerald-600 hover:underline">
                                        guidevoyageur.fr
                                    </a>
                                </span>
                                <p class="mt-2 text-gray-700">
                                    👉 <a href="https://chateau-plessis-mace.fr/fr/"
                                        target="_blank"
                                        class="text-emerald-700 font-semibold hover:underline">
                                        Web oficial del castillo
                                    </a>
                                </p>
                            </figcaption>
                        </figure>


                    </div>
                </details>
            </article>




            <!-- 🔹 Otros enlaces de interés -->
            <section class="mt-16 bg-white shadow-md rounded-lg p-8">
                <h3 class="text-2xl font-bold text-emerald-700 mb-6 text-center">
                    🔗 Otros Enlaces de Interés
                </h3>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Turismo Valle del Loira -->
                    <a href="https://www.valdeloire-france.com/es"
                        target="_blank"
                        class="block p-6 border border-gray-200 rounded-lg hover:bg-emerald-50 hover:shadow-lg transition">
                        <h4 class="font-semibold text-lg text-emerald-700">🌐 Turismo Valle del Loira</h4>
                        <p class="text-gray-600 mt-2">Página oficial con información, rutas y experiencias en el Valle del Loira.</p>
                    </a>




                    <!-- France Voyage -->
                    <a href="https://www.france-voyage.com/francia-guia/valles-loira-91.htm"
                        target="_blank"
                        class="block p-6 border border-gray-200 rounded-lg hover:bg-emerald-50 hover:shadow-lg transition">
                        <h4 class="font-semibold text-lg text-emerald-700">📖 Guía France-Voyage</h4>
                        <p class="text-gray-600 mt-2">Guía práctica sobre castillos, ciudades y patrimonio cultural del Loira.</p>
                    </a>

                    <!-- Turismo Francia oficial -->
                    <a href="https://es.france.fr/es/destino/valle-del-loira"
                        target="_blank"
                        class="block p-6 border border-gray-200 rounded-lg hover:bg-emerald-50 hover:shadow-lg transition">
                        <h4 class="font-semibold text-lg text-emerald-700">🇫🇷 Turismo Francia</h4>
                        <p class="text-gray-600 mt-2">Portal de turismo de Francia con información sobre el Valle del Loira.</p>
                    </a>

                    <!-- UNESCO -->
                    <a href="https://whc.unesco.org/en/list/933/"
                        target="_blank"
                        class="block p-6 border border-gray-200 rounded-lg hover:bg-emerald-50 hover:shadow-lg transition">
                        <h4 class="font-semibold text-lg text-emerald-700">🏛️ Valle del Loira en la UNESCO</h4>
                        <p class="text-gray-600 mt-2">Descubre por qué el Valle del Loira es Patrimonio Mundial de la UNESCO.</p>
                    </a>
                </div>

            </section>

            <!-- 🔹 Enlaces a la siguiente etapa -->
            <section class="mt-12 text-center">
                <h3 class="text-2xl font-bold text-emerald-700 mb-4">➡️ Continuar la ruta</h3>
                <a href="etapa-angers-saumur.php" class="inline-block px-6 py-3 bg-emerald-600 text-white font-semibold rounded-lg shadow hover:bg-emerald-700 transition">
                    Etapa Angers – Saumur
                </a>
            </section>

        </main>
    </div>

    <!-- 🔹 Footer -->
    <footer class="bg-gray-100 mt-12 py-6 text-center text-gray-600">
        <p>© 2025 Valle del Loira | <a href="index.html" class="text-emerald-700 hover:underline">Inicio</a></p>
    </footer>

</body>

</html>







<!--https://viajes.chavetas.es/guia/valle-del-loira/mejores-castillos-del-loira-imprescindibles/-->