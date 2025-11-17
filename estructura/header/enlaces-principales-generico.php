<header class="bg-emerald-700 text-white shadow-md relative z-50">
    <div class="container mx-auto px-6 flex justify-between items-center py-4">

<!-- Logo + título -->
<a href="/val-de-loire/index.php" class="flex items-center gap-3">
    <img src="/val-de-loire/assets/logo.png" 
         alt="Val de Loire" 
         class="w-10 h-10 object-contain">

    <div class="flex flex-col">
        <!-- Nombre principal -->
        <h1 class="text-lg md:text-xl font-bold text-white leading-tight">
            Val de Loire
        </h1>

        <!-- Etapa -->
        <p class="text-xs md:text-sm font-medium text-emerald-200
                   border-l-4 border-emerald-200 pl-2 mt-1">
            <?= $nombreLugar; ?>
        </p>
    </div>
</a>


        <!-- Botón hamburguesa (solo móvil) -->
        <button id="menu-btn" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Menú principal -->
        <nav id="menu" class="hidden md:flex md:items-center md:gap-6 absolute md:static top-full left-0 w-full md:w-auto bg-emerald-700 md:bg-transparent transition-all duration-300">
            <ul class="flex flex-col md:flex-row md:gap-6 p-4 md:p-0">

                <li><a href="/val-de-loire" class="block py-2 px-4 hover:underline">🏠 Inicio</a></li>

                <li><a href="/val-de-loire/chateaux/<?= $slug; ?>.php#informacion" class="block py-2 px-4 hover:underline">Informacion</a></li>

                <!-- Desplegable Alojamientos -->
<li class="relative group" id="alojamientos-menu">

    <!-- Botón del dropdown -->
    <button
        class="w-full text-left block py-2 px-4 hover:underline rounded flex items-center justify-between transition group-hover:bg-emerald-600">
         Dropdown
        <svg class="w-4 h-4 ml-1 transform transition-transform group-hover:rotate-180" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Submenú -->
    <ul class="absolute left-0 top-full mt-1 bg-emerald-700 rounded shadow-md hidden group-hover:block min-w-[220px] z-50"
        id="submenu">

        <!-- Título del submenu -->
        <li class="text-emerald-200 font-semibold text-sm border-b border-emerald-600">
            <a href="/val-de-loire/chateaux/a_buscador/castillos-val-de-loire.php"
                class="flex items-center gap-3 w-full px-4 py-3 hover:bg-emerald-600 transition">
            🛎️ Explorar Alojamientos
            </a>
        </li>

        <!-- Opciones -->
        <li class="text-emerald-200 font-semibold text-sm border-b border-emerald-600">
            <a href="/val-de-loire/chateaux/a_buscador/castillos-val-de-loire.php"
                class="flex items-center gap-3 w-full px-4 py-3 hover:bg-emerald-600 transition">
                🔍 Buscador / Castillos
            </a>
        </li>

        <li class="text-emerald-200 font-semibold text-sm border-b border-emerald-600">
            <a href="/val-de-loire/hoteles.html"
                class="flex items-center gap-3 w-full px-4 py-3 hover:bg-emerald-600 transition">
                🏨 Hoteles
            </a>
        </li>

        <li class="text-emerald-200 font-semibold text-sm border-b border-emerald-600">
            <a href="/val-de-loire/b-b.html"
                class="flex items-center gap-3 w-full px-4 py-3 hover:bg-emerald-600 transition">
                🍳🛏️ Bed & Breakfast
            </a>
        </li>

    </ul>
</li>

                <li><a href="../../general/formulario.html" class="block py-2 px-4 hover:underline">✍️ Ir al Formulario</a></li>
                <li><a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="block py-2 px-4 hover:underline">Turismo</a></li>
                <li><a href="/val-de-loire/contacto.html" class="block py-2 px-4 hover:underline">Contacto</a></li>

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