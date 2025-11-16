<header class="bg-emerald-700 text-white shadow-md relative z-50">
  <div class="container mx-auto px-6 flex justify-between items-center py-4">

    <!-- Logo + nombre -->
    <a href="/val-de-loire" class="flex items-center gap-2">
      <img src="/val-de-loire/assets/favicon.png" alt="Val de Loire" class="w-8 h-8 object-contain">
      <h1 class="text-xl font-bold">Val de Loire</h1>
    </a>

    <!-- Botón hamburguesa (solo móvil) -->
    <button id="menu-btn" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Menú principal -->
    <nav id="menu" class="hidden md:flex md:items-center md:gap-6 absolute md:static top-full left-0 w-full md:w-auto bg-emerald-700 md:bg-transparent transition-all duration-300">
      <ul class="flex flex-col md:flex-row md:gap-6 p-4 md:p-0">

         <li><a href="/val-de-loire" class="block py-2 px-4 hover:bg-emerald-600 md:hover:bg-transparent rounded transition">Inicio</a></li>

        <li><a href="/val-de-loire/chateaux/<?= $slug; ?>.php#informacion" class="block py-2 px-4 hover:bg-emerald-600 md:hover:bg-transparent rounded transition">Informacion</a></li>

        <!-- Desplegable Alojamientos -->
        <li class="relative" id="alojamientos-menu">
          <a href="/val-de-loire/alojamientos-val-de-loire.php" 
             class="block py-2 px-4 hover:bg-emerald-600 md:hover:bg-transparent rounded flex items-center justify-between transition">
            Alojamientos
            <svg class="w-4 h-4 ml-1 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </a>
          <!-- Submenú -->
          <ul class="absolute left-0 top-full mt-1 bg-emerald-700 rounded shadow-md hidden min-w-[180px] z-50" id="submenu">
            <li><a href="/val-de-loire/castillos-val-de-loire.php" class="block px-4 py-2 hover:bg-emerald-600 transition">Buscador/Castillos</a></li>
            <li><a href="/val-de-loire/hoteles.html" class="block px-4 py-2 hover:bg-emerald-600 transition">Hoteles</a></li>
            <li><a href="/val-de-loire/b-b.html" class="block px-4 py-2 hover:bg-emerald-600 transition">Bed & Breakfast</a></li>
          </ul>
        </li>

        <li><a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="block py-2 px-4 hover:bg-emerald-600 md:hover:bg-transparent rounded transition">Turismo</a></li>
        <li><a href="/val-de-loire/contacto.html" class="block py-2 px-4 hover:bg-emerald-600 md:hover:bg-transparent rounded transition">Contacto</a></li>

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
