<!DOCTYPE html>
<html lang="es">

<head>
    <!-- SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Descubre las mejores rutas por el Valle del Loira: castillos como Chambord, Chenonceau, Amboise, gastronomía francesa, vino y paisajes inolvidables.">
    <meta name="keywords"
        content="Valle del Loira, Castillos del Loira, Francia, Turismo, Rutas, Viajes, Cicloturismo, Chambord, Chenonceau, Amboise">
    <meta name="author" content="Adrián Laya García">

    <!-- Social / Open Graph -->
    <meta property="og:title" content="Rutas por el Valle del Loira — Castillos, naturaleza y vino">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://tuweb.com/imagenes/og-portada.jpg">
    <meta property="og:url" content="https://tuweb.com/valle-del-loira">
    <meta property="og:description"
        content="Ruta completa por el Valle del Loira. Explora los castillos más bellos de Francia.">

    <!-- JSON-LD Schema SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "TouristTrip",
            "name": "Ruta turística por el Valle del Loira",
            "description": "Recorrido por castillos, naturaleza y pueblos del Valle del Loira.",
            "image": "https://tuweb.com/imagenes/og-portada.jpg",
            "url": "https://tuweb.com/valle-del-loira",
            "itinerary": [{
                    "@type": "Place",
                    "name": "Château de Chambord"
                },
                {
                    "@type": "Place",
                    "name": "Château de Chenonceau"
                },
                {
                    "@type": "Place",
                    "name": "Château de Amboise"
                }
            ]
        }
    </script>

    <title>Rutas Valle del Loira 🌿 | Castillos, vino y naturaleza</title>

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- ✅ HEADER -->
    <header class="bg-emerald-700 text-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-6 py-5 flex justify-between items-center">

            <div>
                <h1 class="text-3xl font-extrabold tracking-wide">🌿 Valle del Loira</h1>
                <h2 class="text-emerald-200 text-md mt-1">Rutas entre castillos, vino y naturaleza</h2>
            </div>

            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="/val-de-loire/index.php" class="hover:underline"><i class="fas fa-home"></i> Inicio</a>
                <a href="/val-de-loire/general/rutas-loire.php" class="hover:underline">🚴 Rutas</a>
                <a href="https://www.france.fr/es/valle-del-loira" target="_blank" class="hover:underline">
                    🇫🇷 Turismo oficial
                </a>
            </nav>

        </div>
    </header>


    <!-- ✅ Layout -->
    <div class="container mx-auto grid grid-cols-12 gap-6 mt-6 px-4">

        <!-- ASIDE IZQUIERDO (anuncio) -->
        <aside class="hidden lg:block col-span-2">
            <div class="sticky top-6 bg-white shadow-lg rounded-lg p-4">
                <p class="text-sm font-semibold mb-3 text-gray-500">— Publicidad —</p>
                <div class="w-full h-80 bg-gray-200 rounded-lg flex items-center justify-center text-gray-500">
                    AD 160×600
                </div>
            </div>
        </aside>

        <!-- ✅ CONTENIDO PRINCIPAL -->
        <main class="col-span-12 lg:col-span-8">



            <!-- ✅ SECCIÓN DE RUTAS -->
            <section class="bg-white p-6 rounded-lg shadow-lg space-y-10">

                <!-- 🌿 Ruta 1: Castillos -->
                <div>
                    <h2 class="text-3xl font-bold text-emerald-700 mb-4">Ruta: Castillos imprescindibles</h2>
                    <p class="text-lg mb-4">
                        El Valle del Loira es Patrimonio de la UNESCO. Aquí encontrarás palacios,
                        jardines renacentistas y paisajes fluviales únicos en Europa.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.chambord.org/es/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🏰 Castillo de Chambord
                            </a>
                            — Icono del Renacimiento francés y obra monumental de Francisco I.
                        </li>
                        <li>
                            <a href="https://www.chenonceau.com" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🌉 Castillo de Chenonceau
                            </a>
                            — El castillo construido sobre el río Cher, conocido como “el castillo de las damas”.
                        </li>
                        <li>
                            <a href="https://www.vinci-closluce.com/es" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🚀 Clos-Lucé (Casa de Leonardo da Vinci)
                            </a>
                            — Última residencia de Leonardo da Vinci, llena de maquetas y proyectos.
                        </li>
                    </ul>
                </div>


                <!-- 🍷 Ruta 2: Vino & Gastronomía -->
                <div>
                    <h2 class="text-3xl font-bold text-emerald-700 mb-4">Ruta: Vinos del Loira & Gastronomía</h2>
                    <p class="text-lg mb-4">
                        Cata vinos únicos como Sauvignon Blanc, Touraine o Chinon. Descubre queserías y
                        restaurantes tradicionales en pequeños pueblos encantadores.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.vinsvaldeloire.fr/es" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🍇 Ruta oficial de vinos del Valle del Loira
                            </a>
                            — Información de todas las bodegas disponibles para visita y catas.
                        </li>
                        <li>
                            <a href="https://cave-bourgueil.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🍷 Bourgueil - Cuna del vino tinto del Loira
                            </a>
                            — Visita bodegas subterráneas y prueba vinos cabernet franc.
                        </li>
                        <li>
                            <a href="https://www.laflecheduloire.com/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🧀 Productos locales y gastronomía
                            </a>
                            — Mercados tradicionales con queso, foie y repostería del Loira.
                        </li>
                    </ul>
                </div>


                <!-- 🚴 Ruta 3: Bicicleta por el Loira -->
                <div>
                    <h2 class="text-3xl font-bold text-emerald-700 mb-4">Ruta: "La Loire à Vélo" (Cicloturismo)</h2>
                    <p class="text-lg mb-4">
                        Una de las rutas en bicicleta más bonitas de Europa: 900 km de carril bici
                        con castillos, puentes históricos y pueblos medievales.
                    </p>

                    <ul class="space-y-4">
                        <li>
                            <a href="https://www.loireavelo.fr/en/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🚴‍♂️ Página oficial de Loire à Vélo
                            </a>
                            — Mapas, etapas y hoteles adaptados a cicloturistas.
                        </li>
                        <li>
                            <a href="https://www.tours-tourisme.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                🏙️ Tours (ciudad histórica)
                            </a>
                            — Punto de salida ideal para comenzar el recorrido.
                        </li>
                        <li>
                            <a href="https://www.orleans-metropole.fr/" target="_blank"
                                class="text-emerald-700 font-semibold hover:underline">
                                ⚜️ Orléans
                            </a>
                            — Ciudad vinculada a Juana de Arco, final de muchas rutas ciclistas.
                        </li>
                    </ul>
                </div>

            </section>


        </main>




        <!-- ➡️ ASIDE DERECHO (solo escritorio) -->
        <aside class="hidden lg:block col-span-2">
            <div class="aside-sticky bg-white p-4 rounded-lg shadow">
                <h4 class="font-semibold text-emerald-700 mb-2">Destacados</h4>
                <ul class="text-sm space-y-2 text-gray-700">
                    <li><a href="#" class="hover:underline">Castillo de Chambord</a></li>
                    <li><a href="#" class="hover:underline">Chenonceau</a></li>
                    <li><a href="#" class="hover:underline">Amboise</a></li>
                </ul>
                <hr class="my-4" />
                <div class="h-24 bg-gray-100 rounded flex items-center justify-center text-gray-500">AD 160×600</div>
            </div>

        </aside>
    </div>


    <!-- ✅ FOOTER -->
    <footer class="mt-10 py-6 bg-emerald-800 text-white text-center">
        <p>© <?= date("Y") ?> — Diseñado por Adrián Laya García</p>
    </footer>

</body>

</html>