<header id="siteHeader"
    class="bg-emerald-700 text-white shadow-lg sticky top-0 z-50 transition-all duration-300">

    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <!-- 🖥️ NAV IZQUIERDA (DESKTOP) -->
        <nav class="hidden lg:flex gap-6 text-sm font-medium items-center" aria-label="Navegación principal">

            <a href="/val-de-loire/index.php" class="hover:underline flex items-center gap-2">
                <i class="fas fa-home"></i> Inicio
            </a>

            <!-- CASTILLOS -->
            <div class="relative group">
                <button aria-haspopup="true" aria-expanded="false"
                    class="flex items-center gap-2 hover:underline">
                    <i class="fas fa-chess-rook"></i> Castillos
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>

                <div role="menu"
                    class="absolute left-0 mt-2 w-56 bg-white text-emerald-800 rounded-xl shadow-lg
                           opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">

                    <a role="menuitem" href="/val-de-loire/chateaux/chateau-de-chambord.php"
                        class="block px-4 py-2 hover:bg-emerald-100 rounded-t-xl">🏰 Chambord</a>
                    <a role="menuitem" href="/val-de-loire/chateaux/chateau-de-chenonceau.php"
                        class="block px-4 py-2 hover:bg-emerald-100">🌉 Chenonceau</a>
                    <a role="menuitem" href="/val-de-loire/chateaux/chateau-de-cheverny.php"
                        class="block px-4 py-2 hover:bg-emerald-100 rounded-b-xl">🏛 Cheverny</a>
                </div>
            </div>

            <!-- LOCALIDADES -->
            <div class="relative group">
                <button class="flex items-center gap-2 hover:underline">
                    <i class="fas fa-city"></i> Localidades
                    <i class="fas fa-chevron-down text-xs"></i>
                </button>

                <div class="absolute left-0 mt-2 w-56 bg-white text-emerald-800 rounded-xl shadow-lg
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                    <a href="/val-de-loire/localidades/nantes/index.php" class="block px-4 py-2 hover:bg-emerald-100 rounded-t-xl">Nantes</a>
                    <a href="/val-de-loire/localidades/amboise/index.php" class="block px-4 py-2 hover:bg-emerald-100">Amboise</a>
                    <a href="/val-de-loire/localidades/blois/index.php" class="block px-4 py-2 hover:bg-emerald-100">Blois</a>
                    <a href="/val-de-loire/localidades/tours/index.php" class="block px-4 py-2 hover:bg-emerald-100 rounded-b-xl">Tours</a>
                </div>
            </div>
        </nav>

        <!-- 🏷 LOGO -->
        <a href="/val-de-loire/index.php"
            class="flex items-center gap-3 font-bold text-lg"
            aria-label="Val de Loire - Inicio">
            <img src="/val-de-loire/assets/logo.png" alt="Val de Loire" class="w-10 h-10">
            🌿 Val de Loire
        </a>

        <!-- 🖥️ NAV DERECHA (DESKTOP) -->
        <nav class="hidden lg:flex gap-6 text-sm font-medium items-center">
            <a href="/val-de-loire/general/alojamientos-val-de-loire.php">Alojamientos</a>
            <a href="/val-de-loire/alquiler-vehiculos.php">Alquiler Vehículos</a>
            <?php /* <a href="/val-de-loire/contacto.html">Contacto</a> */ ?>
        </nav>

        <!-- 🍔 HAMBURGUESA -->
        <button id="hamburgerBtn"
            aria-label="Abrir menú"
            aria-expanded="false"
            class="lg:hidden flex flex-col gap-1.5 p-2 hover:bg-emerald-600 rounded transition">
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
        </button>
    </div>

    <!-- 📱 MENÚ MÓVIL -->
    <div id="mobileMenu"
        class="lg:hidden overflow-hidden max-h-0 transition-all duration-300 bg-emerald-800">

        <nav class="flex flex-col px-6 py-6 space-y-4 text-base">

            <a href="/val-de-loire/index.php" class="py-3 px-4 hover:bg-emerald-700 rounded">Inicio</a>

            <details>
                <summary class="py-3 px-4 hover:bg-emerald-700 rounded cursor-pointer">Castillos</summary>
                <div class="ml-6 mt-2 space-y-2 text-sm">
                    <a href="/val-de-loire/chateaux/chateau-de-chambord.php">Chambord</a>
                    <a href="/val-de-loire/chateaux/chateau-de-chenonceau.php">Chenonceau</a>
                    <a href="/val-de-loire/chateaux/chateau-de-cheverny.php">Cheverny</a>
                </div>
            </details>

            <details>
                <summary class="py-3 px-4 hover:bg-emerald-700 rounded cursor-pointer">Localidades</summary>
                <div class="ml-6 mt-2 space-y-2 text-sm">
                    <a href="/val-de-loire/localidades/nantes/index.php">Nantes</a>
                    <a href="/val-de-loire/localidades/amboise/index.php">Amboise</a>
                    <a href="/val-de-loire/localidades/blois/index.php">Blois</a>
                    <a href="/val-de-loire/localidades/tours/index.php">Tours</a>
                </div>
            </details>

            <a href="/val-de-loire/general/alojamientos-val-de-loire.php" class="py-3 px-4 hover:bg-emerald-700 rounded">Alojamientos</a>
            <a href="/val-de-loire/alquiler-vehiculos.php" class="py-3 px-4 hover:bg-emerald-700 rounded">Alquiler Vehículos</a>
            <?php /* <a href="/val-de-loire/contacto.html" class="py-3 px-4 hover:bg-emerald-700 rounded">Contacto</a> */ ?>
        </nav>
    </div>
</header>

<!-- 🔧 JS -->
<script>
    const btn = document.getElementById('hamburgerBtn');
    const menu = document.getElementById('mobileMenu');
    const header = document.getElementById('siteHeader');

    btn.addEventListener('click', () => {
        const open = menu.style.maxHeight;
        btn.setAttribute('aria-expanded', !open);
        menu.style.maxHeight = open ? null : menu.scrollHeight + 'px';
    });

    // Header compacto al hacer scroll
    window.addEventListener('scroll', () => {
        header.classList.toggle('py-2', window.scrollY > 80);
    });
</script>
