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

    <!-- 🔹 Header -->
    <header class="bg-emerald-700 text-white py-6 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">🏙️ <?= $ciudad ?></h1>
            <nav class="flex gap-6">
                <a href="../index.php" class="hover:underline">Inicio</a>
                <a href="../castillos.php" class="hover:underline">Castillos</a>
                <a href="../alojamientos.php" class="hover:underline">Alojamientos</a>
                <a href="../oficinas-turismo.php" class="hover:underline">Turismo</a>
            </nav>
        </div>
    </header>

    <!-- 🔹 Hero -->
    <section class="relative bg-cover bg-center h-96" style="background-image: url('<?= $imagenHero ?>');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h2 class="text-4xl md:text-5xl text-white font-extrabold">Bienvenido a <?= $ciudad ?></h2>
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
            <a href="#finde" class="hover:text-emerald-700">📊 Fin de semana</a>
        </div>
    </nav>

    <!-- 🔹 Contenido Principal -->
    <main class="container mx-auto px-6 py-12 grid lg:grid-cols-3 gap-10">

        <!-- 🏙️ Información -->
        <article class="lg:col-span-2 overflow-y-auto" style="max-height: 80vh; padding-right: 1rem;">
            <h3 class="text-3xl font-bold text-emerald-700 mb-4"><?= $ciudad ?> en el Valle del Loira</h3>
            <p class="text-gray-700 mb-6"><?= $descripcion ?></p>

            <?php require "{$slug}/main/sections/gastronomia/index.php"; ?>

            <?php require "{$slug}/main/sections/paseos/index.php"; ?>

            <?php require "{$slug}/main/sections/actividades.php"; ?>

            <?php require "{$slug}/main/sections/acontecimientos.php"; ?>

            <?php require "{$slug}/main/sections/restaurantes.php"; ?>

            <?php require "{$slug}/main/sections/alojamientos.php"; ?>

            <?php require "{$slug}/main/sections/transportes.php"; ?>

            <?php require "{$slug}/main/sections/fin-de-semana.php"; ?>


            <?php require "{$slug}/main/sections/informacion-practica.php"; ?>

            <?php require "{$slug}/main/sections/galeria.php"; ?>

        </article>

        <?php require "{$slug}/main/aside/aside-generico.php";?>

    </main>


    <?php require "{$slug}/footer/footer-generico.php";?>

    <script>
        feather.replace();
    </script>
</body>

</html>