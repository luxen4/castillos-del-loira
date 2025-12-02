<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Valle del Loira — Navegación avanzada</title>
<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-50 dark:bg-gray-900 dark:text-white transition">

<!-- HEADER COMPLETO -->
<header id="mainHeader" class="fixed top-0 left-0 w-full bg-emerald-700/90 backdrop-blur-md text-white shadow-lg z-50 transition-all">
  <div class="container mx-auto px-6 py-4 flex justify-between items-center">

    <!-- LOGO & TÍTULO -->
    <div>
      <h1 class="text-3xl font-extrabold tracking-wide">🌿 Valle del Loira</h1>
      <h2 class="text-emerald-200 text-md mt-1">Rutas entre castillos, vino y naturaleza</h2>
    </div>

    <!-- NAV DESKTOP -->
    <nav class="hidden md:flex gap-8 text-lg font-medium items-center">
      <a href="/val-de-loire/index.php" class="hover:underline flex items-center gap-2"><i class="fas fa-home"></i> Inicio</a>

      <!-- MEGA DROPDOWN -->
      <div class="relative group">
        <button class="flex items-center gap-2 hover:underline">
          Explorar <i class="fas fa-chevron-down"></i>
        </button>

        <!-- PANEL MEGA -->
        <div class="invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-all duration-300 absolute left-1/2 -translate-x-1/2 mt-4 w-[700px] bg-white text-black dark:bg-gray-800 dark:text-white rounded-2xl shadow-2xl p-8 grid grid-cols-3 gap-6">
          <div>
            <h3 class="font-bold mb-2">Rutas</h3>
            <a class="block py-1 hover:text-emerald-600" href="#">🌿 Todas las rutas</a>
            <a class="block py-1 hover:text-emerald-600" href="#">🏰 Castillos</a>
            <a class="block py-1 hover:text-emerald-600" href="#">🍷 Vino</a>
          </div>
          <div>
            <h3 class="font-bold mb-2">Guías</h3>
            <a class="block py-1 hover:text-emerald-600" href="#">🏨 Alojamientos</a>
            <a class="block py-1 hover:text-emerald-600" href="#">🍽 Gastronomía</a>
            <a class="block py-1 hover:text-emerald-600" href="#">🚲 Alquiler de bicis</a>
          </div>
          <div>
            <h3 class="font-bold mb-2">Eventos</h3>
            <a class="block py-1 hover:text-emerald-600" href="#">Festivini</a>
            <a class="block py-1 hover:text-emerald-600" href="#">Festival de vinos Saumur</a>
            <a class="block py-1 hover:text-emerald-600" href="#">Mercados tradicionales</a>
          </div>
        </div>
      </div>

      <!-- BUSCADOR -->
      <div class="relative">
        <input id="searchInput" type="text" placeholder="Buscar..." class="px-3 py-2 rounded-lg text-black w-48 dark:bg-gray-700 dark:text-white">
        <div id="searchResults" class="absolute hidden bg-white dark:bg-gray-700 text-black dark:text-white w-full rounded-lg shadow-lg mt-1 max-h-60 overflow-auto"></div>
      </div>

      <!-- MODO OSCURO -->
      <button id="darkToggle" class="text-xl"><i class="fas fa-moon"></i></button>
    </nav>

    <!-- BOTÓN HAMBURGUESA -->
    <button id="hamburgerBtn" class="md:hidden flex flex-col gap-1.5 p-2 rounded hover:bg-emerald-600 transition">
      <span class="w-7 h-0.5 bg-white transition"></span>
      <span class="w-7 h-0.5 bg-white transition"></span>
      <span class="w-7 h-0.5 bg-white transition"></span>
    </button>

  </div>

  <!-- MENÚ MÓVIL -->
  <div id="mobileMenu" class="hidden bg-emerald-800 text-white md:hidden shadow-inner">
    <nav class="flex flex-col text-lg px-6 py-4 space-y-4">
      <a href="#" class="hover:bg-emerald-700 py-2 px-3 rounded transition flex items-center gap-2"><i class="fas fa-home"></i> Inicio</a>

      <details class="group">
        <summary class="cursor-pointer flex items-center justify-between py-2 px-3 hover:bg-emerald-700 rounded transition">
          <span>🚴 Rutas</span>
          <i class="fas fa-chevron-down transition-transform group-open:rotate-180"></i>
        </summary>
        <div class="pl-4 flex flex-col gap-2 mt-2">
          <a href="#" class="py-2 px-3 rounded hover:bg-emerald-700 transition">🌿 Todas las rutas</a>
          <a href="#" class="py-2 px-3 rounded hover:bg-emerald-700 transition">🏰 Castillos</a>
          <a href="#" class="py-2 px-3 rounded hover:bg-emerald-700 transition">🍷 Ruta del vino</a>
        </div>
      </details>

      <details class="group">
        <summary class="cursor-pointer flex items-center justify-between py-2 px-3 hover:bg-emerald-700 rounded transition">
          <span>📅 Eventos</span>
          <i class="fas fa-chevron-down transition-transform group-open:rotate-180"></i>
        </summary>
        <div class="pl-4 flex flex-col gap-2 mt-2">
          <a href="#" class="py-2 px-3 rounded hover:bg-emerald-700 transition">Festivini</a>
          <a href="#" class="py-2 px-3 rounded hover:bg-emerald-700 transition">Festival del vino</a>
        </div>
      </details>
    </nav>
  </div>
</header>

<div class="pt-36 text-center text-xl">Contenido de ejemplo...</div>

<!-- SCRIPT -->
<script>
// Menú móvil
const btn = document.getElementById('hamburgerBtn');
const mm = document.getElementById('mobileMenu');
btn.onclick = () => mm.classList.toggle('hidden');

// Modo oscuro
const toggle = document.getElementById('darkToggle');
toggle.onclick = () => document.documentElement.classList.toggle('dark');

// Buscador básico
const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');
const data = ["Chambord", "Chenonceau", "Amboise", "Saumur", "Festivini", "Rutas del vino", "Alojamientos", "Bicicletas"];

searchInput.addEventListener('input', e => {
  const q = e.target.value.toLowerCase();
  if (!q) return searchResults.classList.add('hidden');
  const res = data.filter(i => i.toLowerCase().includes(q));
  searchResults.innerHTML = res.map(r => `<div class='p-2 hover:bg-emerald-100 cursor-pointer'>${r}</div>`).join('');
  searchResults.classList.remove('hidden');
});

// Header transparente → sólido
window.addEventListener('scroll', () => {
  const h = document.getElementById('mainHeader');
  if (window.scrollY > 50) h.classList.add('bg-emerald-700');
  else h.classList.remove('bg-emerald-700');
});
</script>

</body>
</html>