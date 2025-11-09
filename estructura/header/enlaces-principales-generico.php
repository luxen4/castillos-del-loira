<header class="bg-emerald-700 text-white shadow-md relative">
  <div class="container mx-auto px-6 flex justify-between items-center py-4">
    <h1 class="text-xl font-bold">🌍 Val de Loire</h1>

    <!-- Botón hamburguesa (solo móvil) -->
    <button id="menu-btn" class="md:hidden focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Menú -->
  <nav id="menu" class="hidden md:flex md:flex-row md:justify-end bg-emerald-700 w-full">
    <ul class="flex flex-col md:flex-row md:gap-6 p-4 md:p-0">
      <li><a href="/val-de-loire" class="block py-2 px-4 hover:underline">Inicio</a></li>
      <li><a href="/val-de-loire/index.php#castillos-destacados" class="block py-2 px-4 hover:underline">Castillos</a></li>
      <li><a href="../alojamientos.php" class="block py-2 px-4 hover:underline">Alojamientos</a></li>
      <li><a href="/val-de-loire/oficinas-turismo-val-de-loire.html" class="block py-2 px-4 hover:underline">Turismo</a></li>
    </ul>
  </nav>
</header>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
