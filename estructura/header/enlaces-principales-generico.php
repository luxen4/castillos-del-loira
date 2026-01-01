<header class="bg-emerald-700 text-white shadow-md relative z-50">
    <div class="container mx-auto px-6 flex justify-between items-center py-4">

        <!-- Logo + título -->
        <a href="/val-de-loire/index.php" class="flex items-center gap-3">
            <img src="/val-de-loire/assets/logo.png"
                alt="Val de Loire"
                class="w-10 h-10 object-contain">

            <div class="flex flex-col">
                <h1 class="text-lg md:text-xl font-bold text-white leading-tight">
                    Val de Loire
                </h1>

                <p class="text-xs md:text-sm font-medium text-emerald-200
                           border-l-4 border-emerald-200 pl-2 mt-1">
                    <?= $title; ?>
                </p>
            </div>
        </a>

        <!-- Botón hamburguesa (móvil) -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Menú principal -->
        <nav id="menu"
            class="hidden md:flex md:items-center md:gap-6 absolute md:static top-full left-0 w-full md:w-auto bg-emerald-700 md:bg-transparent transition-all duration-300">

            <ul class="flex flex-col md:flex-row md:gap-6 p-4 md:p-0">

                <li><a href="/val-de-loire" class="block py-2 px-4 hover:underline">🏠 Inicio</a></li>

                <li><a href="#informacion" class="block py-2 px-4 hover:underline">ℹ️ Información</a></li>
                <li><a href="/val-de-loire/general/rutas-loire/index.php" class="hover:underline">🚴 Rutas</a></li>

                <?php /*
                <!-- Dropdown Alojamientos -->
                <li class="relative group">
                    <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-emerald-600 rounded transition md:hover:bg-transparent">
                        🛏️ Alojamientos
                        <span class="text-xs ml-2">▼</span>
                    </button>

                    <ul class="hidden group-hover:block absolute left-0 top-full mt-1 bg-emerald-700 min-w-[220px] rounded shadow-md z-50">

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/hoteles/a_buscador/hoteles-val-de-loire.php"
                               class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🏨 Hoteles
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/alojamientos/alquiler-vacacional"
                               class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🏡 Alquiler vacacional
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/alojamientos/casas-rurales"
                               class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🌾 Casas rurales
                            </a>
                        </li>

                        <li>
                            <a href="/val-de-loire/bed_breakfast/a_buscador/bed_breakfast-val-de-loire.php"
                               class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🍳 Bed & Breakfast
                            </a>
                        </li>

                    </ul>
                </li> */ ?>

                <!-- Dropdown Servicios -->
                <li class="relative group">
                    <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-emerald-600 rounded transition md:hover:bg-transparent">
                        ⭐ Actividades
                        <span class="text-xs ml-2">▼</span>
                    </button>

                    <ul class="hidden group-hover:block absolute left-0 top-full mt-1 bg-emerald-700 min-w-[220px] rounded shadow-md z-50">

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/turismo"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🧳 Turismo
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/turismo"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                📅 Acontecimientos
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/turismo"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                📊 Fin de semana
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/gastronomia"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🍴 Gastronomía
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/paseos"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🚶 Paseos
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/general/loire-a-velo.php"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🚲 Loire à Vélo
                            </a>
                        </li>

                        <li>
                            <a href="/val-de-loire/eventos"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🎉 Acontecimientos
                            </a>
                        </li>

                         <li>
                            <a href="/val-de-loire/general/noticias.php"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🎉 Noticias
                            </a>
                        </li>
                         <li>
                            <a href="/val-de-loire/guia"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🎉 Guía
                            </a>
                        </li>

                    </ul>
                </li>







                <!-- Dropdown Servicios -->
                <li class="relative group">
                    <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-emerald-600 rounded transition md:hover:bg-transparent">
                        🧭 Buscadores
                        <span class="text-xs ml-2">▼</span>
                    </button>

                    <ul class="hidden group-hover:block absolute left-0 top-full mt-1 bg-emerald-700 min-w-[220px] rounded shadow-md z-50">--

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/chateaux/buscador/index.php"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🔍 Buscador Castillos
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/general/alojamientos.php"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🏨 Web Alojamientos
                            </a>
                        </li>

                        <li class="border-b border-emerald-600">
                            <a href="/val-de-loire/general/alojamientos-val-de-loire.php"
                                class="flex items-center gap-3 px-4 py-3 text-emerald-200 hover:bg-emerald-600">
                                🔍 Buscador Alojamientos
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Dropdown Transportes -->
                <li class="relative group">
                    <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-emerald-600 rounded transition md:hover:bg-transparent">
                        🚗 Transportes
                        <span class="text-xs ml-2">▼</span>
                    </button>

                    <ul class="hidden group-hover:block absolute left-0 top-full bg-emerald-700 w-56 rounded shadow-lg z-50">

                        <li>
                            <a href="/val-de-loire/como-llegar"
                                class="flex items-center gap-3 px-4 py-2 text-emerald-100 hover:bg-emerald-600">
                                🚆 Cómo llegar
                            </a>
                        </li>

                        <li>
                            <a href="/val-de-loire/alquiler-vehiculos.php"
                                class="flex items-center gap-3 px-4 py-2 text-emerald-100 hover:bg-emerald-600">
                                🚘 Coches de alquiler
                            </a>
                        </li>

                    </ul>
                </li>

                <li><a href="/val-de-loire/general/formulario.html" class="block py-2 px-4 hover:underline">✍️ Formulario</a></li>

                <li><a href="/val-de-loire/general/oficinas-de-turismo.php" class="block py-2 px-4 hover:underline">🏛️ Turismo</a></li>

            </ul>
        </nav>

    </div>
</header>


<script>
    // Menú móvil
    const menuBtn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    menuBtn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    // Submenú Alojamientos con retardo para que no desaparezca al vuelo
    const alojamientosLi = document.getElementById('alojamientos-menu');
    const submenu = document.getElementById('submenu');
    let timeout;

    alojamientosLi.addEventListener('mouseenter', () => {
        clearTimeout(timeout);
        submenu.classList.remove('hidden');
    });

    alojamientosLi.addEventListener('mouseleave', () => {
        timeout = setTimeout(() => {
            submenu.classList.add('hidden');
        }, 200); // 200ms de retardo
    });
</script>

<script>
    const toggleButton = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>