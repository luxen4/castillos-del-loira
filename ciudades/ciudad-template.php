<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ✅ SEO Avanzado -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $ciudad ?> | Valle del Loira</title>
    <meta name="description" content="<?= $descripcion ?>">
    <meta name="keywords" content="<?= $ciudad ?>, Valle del Loira, turismo, Francia, castillos, visitas">
    <meta name="author" content="Tu Nombre">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $ciudad ?> | Valle del Loira">
    <meta property="og:description" content="<?= $descripcion ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= $imagenHero ?>">
    <meta property="og:url" content="https://tusitio.com/ciudades/<?= $slug ?>.php">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $ciudad ?> | Valle del Loira">
    <meta name="twitter:description" content="<?= $descripcion ?>">
    <meta name="twitter:image" content="<?= $imagenHero ?>">

    <!-- ✅ TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ✅ Heroicons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="../img/favicon.png">
</head>

<body class="bg-gray-50 text-gray-800">


<?php //require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/header/header-generico.php"; ?>

    <!-- 🔹 Header -->
    <header class="bg-emerald-700 text-white py-6 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">🏙️ <?= $ciudad ?></h1>
            <nav class="flex gap-6">
                <a href="../index.php" class="hover:underline">Inicio</a>
                <a href="/val-de-loire/index.php#castillos-destacados" class="hover:underline">Castillos</a>
                <a href="../alojamientos.php" class="hover:underline">Alojamientos</a>
                <a href="../oficinas-turismo.php" class="hover:underline">Turismo</a>
            </nav>
        </div>
    </header>


    <?php $imagenHero = "https://www.levoyageanantes.fr/wp-content/uploads/2022/03/chateau-ducs-bretagne-nantes.jpg"; ?>

    <!-- 🔹 Hero con efecto hover -->
    <section
        class="relative bg-cover bg-center h-[600px] transition-transform duration-500 hover:scale-105 hover:brightness-110"
        style="background-image: url('<?= $imagenHero ?>');">

        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition duration-500 hover:bg-opacity-40">
            <h2 class="text-4xl md:text-5xl text-white font-extrabold">
                Bienvenido a <?= $ciudad ?>
            </h2>
        </div>
    </section>




    <!-- 🔹 Navegación principal (solo Tailwind) -->
    <nav class="bg-gray-100 py-4 shadow-inner">
        <div class="container mx-auto px-6 flex flex-wrap gap-6 justify-center text-gray-700">
            <a href="#gastronomia" class="hover:text-emerald-700">🍴 Gastronomía</a>
            <a href="#paseos" class="hover:text-emerald-700">🚶 Paseos</a>
            <a href="#actividades" class="hover:text-emerald-700">⭐ Actividades</a>
            <a href="#acontecimientos" class="hover:text-emerald-700">📅 Acontecimientos</a>
            <a href="#restaurantes" class="hover:text-emerald-700">🍽️ Restaurantes</a>
            <a href="#alojamientos" class="hover:text-emerald-700">🏨 Alojamientos</a>
            <a href="#transportes" class="hover:text-emerald-700">🚗 Transportes</a>
            <a href="#fin-de-semana" class="hover:text-emerald-700">📊 Fin de semana</a>
        </div>
    </nav>



    <!-- 🔹 Contenido Principal -->
    <main class="container mx-auto px-6 py-12 grid lg:grid-cols-3 gap-10">

        <!-- 🏙️ Información -->
        <article class="lg:col-span-2 overflow-y-auto" style="max-height: 80vh; padding-right: 1rem;">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold text-emerald-700 mb-4">
                <?= $ciudad ?> en el Valle del Loira
            </h3>
            <p class="text-gray-700 mb-6"><?= $descripcion ?></p>

            <?php
            $sections = [
                "paseos",          // Primero la parte visual, recorridos y rincones bonitos
                "actividades",     // Luego lo que se puede hacer en la ciudad
                "acontecimientos", // Eventos especiales que pueden coincidir con la visita
                "gastronomia",     // La parte culinaria, tras conocer lo anterior
                "restaurantes",    // Dónde comer bien, recomendaciones
                "fin-de-semana",   // Ideas ya organizadas para escapadas
                "alojamientos",    // Dónde dormir, opciones variadas
                "galeria",         // Refuerzo visual, inspiración extra
                "transportes"      // Lo práctico para moverse y organizarse
            ];


            foreach ($sections as $slug_section_main_title) {
                require "{$slug}/main/sections/index-section-generico.php";
            }
            ?>
        </article>

        <!-- 📢 Lateral -->
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside/aside-generico.php"; ?>

    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/footer/footer-generico.php"; ?>

    <script>
        feather.replace();
    </script>

    <!-- 🔝 Botón ir arriba -->
    <button id="btnTop"
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="hidden fixed bottom-6 right-6 bg-emerald-600 text-white p-3 rounded-full shadow-lg hover:bg-emerald-700 transition">
        ⬆️
    </button>

    <script>
        // Mostrar/ocultar botón al hacer scroll
        window.addEventListener("scroll", function() {
            const btn = document.getElementById("btnTop");
            if (window.scrollY > 300) {
                btn.classList.remove("hidden");
            } else {
                btn.classList.add("hidden");
            }
        });
    </script>

</body>

</html>