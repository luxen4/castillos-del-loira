<?php
/**
 * Web Museo de Artes de Nantes — versión PHP con Tailwind, SEO avanzado,
 * iconos y enlaces externos. Archivo listo para usar como index.php.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Museo de Artes de Nantes — Colecciones, Exposiciones y Visitas</title>
    <meta name="description" content="Descubre la historia, colecciones y exposiciones del Museo de Artes de Nantes. Horarios, entradas y enlaces oficiales." />
    <meta name="keywords" content="Museo de Artes de Nantes, arte, museo, Francia, exposiciones" />
    <meta property="og:title" content="Museo de Artes de Nantes" />
    <meta property="og:description" content="Una de las colecciones de arte más importantes de Francia." />
    <meta property="og:type" content="website" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="font-sans text-gray-800">

<!-- LAYOUT GENERAL CON ASIDES -->
<div class="grid grid-cols-1 lg:grid-cols-[250px_1fr_250px]">

    <!-- ASIDE IZQUIERDO -->
    <aside class="hidden lg:block bg-gray-100 border-r border-gray-300 p-6 space-y-6 sticky top-0 h-screen overflow-auto">
        <h3 class="text-xl font-bold mb-4">Publicidad</h3>
        <div class="bg-white shadow p-4 rounded-xl">
            <img src="https://via.placeholder.com/200x200?text=Ad+1" class="rounded-lg mb-3" />
            <p class="text-sm text-gray-600">Espacio publicitario disponible.</p>
        </div>
        <div class="bg-white shadow p-4 rounded-xl">
            <img src="https://via.placeholder.com/200x200?text=Ad+2" class="rounded-lg mb-3" />
            <p class="text-sm text-gray-600">Anuncio cultural o institucional.</p>
        </div>
    </aside>

    <!-- CONTENIDO CENTRAL -->
    <main>
        <!-- HERO -->
        <section class="relative h-[70vh] flex items-center justify-center bg-cover bg-center" style="background-image:url('https://upload.wikimedia.org/wikipedia/commons/1/1d/Mus%C3%A9e_d%E2%80%99arts_de_Nantes.jpg')">
            <div class="bg-black/50 p-10 rounded-2xl text-white text-center max-w-3xl backdrop-blur-sm">
                <h1 class="text-5xl md:text-7xl font-bold mb-4 tracking-tight">Museo de Artes de Nantes</h1>
                <p class="text-xl md:text-2xl opacity-90">Más de siete siglos de historia del arte</p>
            </div>
        </section>

        <!-- HISTORIA -->
        <section class="py-20 px-6 md:px-20 grid md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-4xl font-bold mb-6">Historia del museo</h2>
                <p class="leading-relaxed text-lg">
                    El Museo de Artes de Nantes alberga una de las colecciones más importantes de Francia, con obras que abarcan más de 700 años.
                </p>
                <p class="mt-4 leading-relaxed text-lg">
                    Su renovación arquitectónica lo ha convertido en un referente cultural internacional.
                </p>
                <a href="https://museedartsdenantes.nantesmetropole.fr/" target="_blank" class="inline-flex items-center gap-2 text-blue-600 font-semibold mt-6 hover:underline">
                    Web oficial <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>

            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0f/Nantes_Mus%C3%A9e_des_beaux-arts_cour.jpg" class="rounded-3xl shadow-xl" />
        </section>

        <!-- COLECCIONES -->
        <section class="py-20 px-6 md:px-20 bg-gray-50">
            <h2 class="text-4xl font-bold mb-12 text-center">Colecciones destacadas</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <?php
                $colecciones = [
                    ["Arte Antiguo", "Obras del siglo XIII al XVIII, maestros europeos y arte religioso."],
                    ["Arte Moderno", "Siglos XIX–XX: impresionismo, romanticismo y vanguardias."],
                    ["Arte Contemporáneo", "Fotografía, instalaciones y videoarte internacional."],
                ];

                foreach ($colecciones as $c) {
                    echo "<div class='bg-white p-8 rounded-3xl shadow-md hover:shadow-xl transition-all'>";
                    echo "<h3 class='text-2xl font-bold mb-4'>{$c[0]}</h3>";
                    echo "<p class='text-lg leading-relaxed'>{$c[1]}</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </section>

        <!-- EXPOSICIONES -->
        <section class="py-20 px-6 md:px-20">
            <h2 class="text-4xl font-bold mb-6 text-center">Exposiciones 2025</h2>
            <p class="text-center max-w-2xl mx-auto text-lg mb-10 leading-relaxed">
                Destaca <strong>"Sous la pluie: Peindre, vivre et rêver"</strong>, un recorrido artístico sobre la lluvia en la pintura.
            </p>
            <div class="text-center">
                <a href="https://museedartsdenantes.nantesmetropole.fr/les-expositions" target="_blank">
                    <button class="bg-blue-600 text-white px-8 py-4 rounded-xl text-lg hover:bg-blue-700 inline-flex items-center gap-3">
                        Ver más exposiciones <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </button>
                </a>
            </div>
        </section>

        <!-- INFORMACIÓN PRÁCTICA -->
        <section class="py-20 px-6 md:px-20 bg-gray-50">
            <h2 class="text-4xl font-bold mb-12 text-center">Información para visitantes</h2>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-white p-8 rounded-3xl shadow-md">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2"><i class="fa-regular fa-clock"></i> Horarios</h3>
                    <p>11:00 - 19:00</p>
                    <p>Martes cerrado</p>
                    <p>Jueves nocturno hasta las 21:00</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-md">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2"><i class="fa-solid fa-map-pin"></i> Dirección</h3>
                    <p>10 Rue Georges Clemenceau</p>
                    <p>44000 Nantes, Francia</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-md">
                    <h3 class="text-xl font-bold mb-4 flex items-center gap-2"><i class="fa-solid fa-ticket"></i> Entradas</h3>
                    <p>General desde 8€</p>
                    <p>Jueves nocturno: gratuito</p>
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer class="py-12 text-center text-sm text-gray-600 flex flex-col items-center gap-6">
            <div class="flex gap-6 text-2xl">
                <a href="https://www.instagram.com/museedartsnantes/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/museedartsdenantes/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://museedartsdenantes.nantesmetropole.fr/" target="_blank"><i class="fa-solid fa-globe"></i></a>
            </div>
            © 2025 Museo de Artes de Nantes — Sitio informativo de demostración.
        </footer>
    </main>

    <!-- ASIDE DERECHO -->
    <aside class="hidden lg:block bg-gray-100 border-l border-gray-300 p-6 space-y-6 sticky top-0 h-screen overflow-auto">
        <h3 class="text-xl font-bold mb-4">Publicidad</h3>
        <div class="bg-white shadow p-4 rounded-xl">
            <img src="https://via.placeholder.com/200x200?text=Ad+3" class="rounded-lg mb-3" />
            <p class="text-sm	text-gray-600">Espacio patrocinado.</p>
        </div>
        <div class="bg-white shadow p-4 rounded-xl">
            <img src="https://via.placeholder.com/200x200?text=Ad+4" class="rounded-lg mb-3" />
            <p class="text-sm text-gray-600">Publicidad de eventos locales.</p>
        </div>
    </aside>

</div>

</body>

</body>
</html>
