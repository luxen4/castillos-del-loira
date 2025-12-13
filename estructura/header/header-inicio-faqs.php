<!-- ✅ HEADER Inicio-FAQs -->
<header class="bg-emerald-700 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">

        <!-- 🌐 NAV IZQUIERDA (DESKTOP) -->
        <nav class="hidden md:flex gap-6 text-sm font-medium items-center">

            <a href="/val-de-loire/index.php"
               class="hover:underline flex items-center gap-2">
                <i class="fas fa-home"></i> Inicio
            </a>

            <!-- 🔽 DROPDOWN CASTILLOS -->
            <div class="relative group">
                <button class="flex items-center gap-2 hover:underline">
                    <i class="fas fa-chess-rook"></i> Castillos
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>

                <div class="absolute left-0 mt-2 w-56 bg-white text-emerald-800 rounded-xl shadow-lg
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible
                            transition-all duration-200">

                    <a href="/val-de-loire/chateaux/chateau-de-chambord.php"
                       class="block px-4 py-2 hover:bg-emerald-100 rounded-t-xl">
                        🏰 Chambord
                    </a>

                    <a href="/val-de-loire/chateaux/chateau-de-chenonceau.php"
                       class="block px-4 py-2 hover:bg-emerald-100">
                        🌉 Chenonceau
                    </a>

                    <a href="/val-de-loire/chateaux/chateau-de-cheverny.php"
                       class="block px-4 py-2 hover:bg-emerald-100 rounded-b-xl">
                        🏛 Cheverny
                    </a>

                    <a href="/val-de-loire/chateaux/buscador/index.php"
                        class="block px-4 py-2 hover:bg-emerald-100 rounded-b-xl">
                        🔍 Buscador Castillos
                    </a>

                        
                </div>
            </div>

            <!-- 🔽 DROPDOWN CIUDADES -->
<div class="relative group">
    <button class="flex items-center gap-2 hover:underline">
        <i class="fas fa-city"></i> Ciudades
        <i class="fas fa-chevron-down text-xs"></i>
    </button>

    <div class="absolute left-0 mt-2 w-56 bg-white text-emerald-800 rounded-xl shadow-lg
                opacity-0 invisible group-hover:opacity-100 group-hover:visible
                transition-all duration-200">

        <a href="/val-de-loire/ciudades/amboise.php"
           class="block px-4 py-2 hover:bg-emerald-100 rounded-t-xl">
            🏘 Amboise
        </a>

        <a href="/val-de-loire/ciudades/blois.php"
           class="block px-4 py-2 hover:bg-emerald-100">
            🏙 Blois
        </a>

        <a href="/val-de-loire/ciudades/tours.php"
           class="block px-4 py-2 hover:bg-emerald-100 rounded-b-xl">
            🌆 Tours
        </a>
    </div>
</div>

            <a href="/val-de-loire/general/rutas-loire/index.php" class="hover:underline">🚴 Rutas</a>
            <a href="/val-de-loire/general/noticias.php" class="hover:underline flex items-center gap-2">🎉 Noticias</a>




        </nav>

<!-- 🏷 LOGO CENTRAL -->
<a href="/val-de-loire/index.php" class="flex items-center gap-4">
    <!-- Logo -->
    <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10 object-contain">

    <!-- Título principal y nombre del lugar en horizontal -->
    <div class="flex items-center gap-3">
        <span class="text-lg md:text-xl font-bold leading-tight">🌿 Val de Loire</span>
        <?php /* <span class="text-xs md:text-sm font-medium text-emerald-200 border-l-4 border-emerald-200 pl-2">
            <?= $nombreLugar; 
        </span>*/ ?>
    </div>
</a>




        <!-- 🌐 NAV DERECHA (DESKTOP) -->
        <nav class="hidden md:flex gap-6 text-sm font-medium">

            <a href="/val-de-loire/general/alojamientos-val-de-loire.php"
                class="hover:underline flex items-center gap-2">
                🔍 Buscador Alojamientos
            </a>

            <a href="/val-de-loire/alquiler-vehiculos.php"
                class="hover:underline flex items-center gap-2">
                🚘 Coches de alquiler
            </a>

            <a href="/val-de-loire/general/rutas-loire/faqs/index.php#<?= $hastag_faqs; ?>"
               class="hover:underline flex items-center gap-2">
                <i class="fas fa-question-circle"></i> FAQs
            </a>

            <a href="/val-de-loire/contacto.html"
               class="hover:underline flex items-center gap-2">
                <i class="fas fa-user-circle"></i> Contacto
            </a>
        </nav>

        <!-- 🍔 HAMBURGUESA -->
        <button id="hamburgerBtn"
            class="md:hidden flex flex-col gap-1.5 p-2 rounded hover:bg-emerald-600 transition">
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
        </button>
    </div>

    <!-- 📱 MENÚ MÓVIL -->
    <div id="mobileMenu" class="hidden bg-emerald-800 text-white md:hidden">

        <nav class="flex flex-col px-6 py-4 space-y-3 text-base">

            <a href="/val-de-loire/index.php"
               class="hover:bg-emerald-700 py-2 px-3 rounded flex items-center gap-2">
                <i class="fas fa-home"></i> Inicio
            </a>

            <details class="group">
                <summary class="cursor-pointer py-2 px-3 rounded hover:bg-emerald-700
                                flex items-center justify-between">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-chess-rook"></i> Castillos
                    </span>
                    <i class="fas fa-chevron-down text-xs"></i>
                </summary>

                <div class="ml-6 mt-2 flex flex-col space-y-2 text-sm">
                    <a href="/val-de-loire/chateaux/chateau-de-chambord.php">🏰 Chambord</a>
                    <a href="/val-de-loire/chateaux/chateau-de-chenonceau.php">🌉 Chenonceau</a>
                    <a href="/val-de-loire/chateaux/chateau-de-cheverny.php">🏛 Cheverny</a>
                </div>
            </details>

            <a href="/val-de-loire/general/rutas-loire/faqs/index.php"
               class="hover:bg-emerald-700 py-2 px-3 rounded flex items-center gap-2">
                <i class="fas fa-question-circle"></i> FAQs
            </a>

            <a href="/val-de-loire/contacto.html"
               class="hover:bg-emerald-700 py-2 px-3 rounded flex items-center gap-2">
                <i class="fas fa-user-circle"></i> Contacto
            </a>

        </nav>
    </div>
</header>

<!-- 🔧 SCRIPT HAMBURGUESA -->
<script>
document.getElementById('hamburgerBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});
</script>
