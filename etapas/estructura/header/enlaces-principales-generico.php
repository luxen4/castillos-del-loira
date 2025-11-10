<header class="bg-emerald-700 text-white shadow">
  <div class="container mx-auto px-4 py-4 flex flex-col items-center gap-3">

    <!-- Títulos centrados -->
    <div class="text-center">
      <!-- H1 principal -->
      <h1 class="text-3xl md:text-4xl font-extrabold tracking-wide">🌿 Valle del Loira</h1>

      <!-- H2 subtítulo con borde izquierdo y derecho -->
      <h2 class="mt-1 text-lg md:text-xl font-semibold text-emerald-200 border-l-4 border-r-4 border-emerald-200 px-3 inline-block">
        <?= $etapa; ?>
      </h2>
    </div>

    <!-- Menú de navegación -->
    <nav class="w-full md:w-auto">
      <!-- Botón hamburguesa -->
      <div class="flex justify-end md:hidden">
        <button id="menu-toggle" class="text-white focus:outline-none">
          <i class="fas fa-bars text-2xl"></i>
        </button>
      </div>

      <!-- Links -->
      <ul id="menu-items" class="hidden md:flex flex-col md:flex-row gap-4 mt-2 md:mt-0 text-center">
        <li><a href="../../index.php" class="hover:underline">🏠 Inicio</a></li>
        <li><a href="#" class="hover:underline">Rutas</a></li>
        <li><a href="../../formulario.html" class="hover:underline">✍️ Ir al Formulario</a></li>
        <li><a href="#" class="hover:underline">Contacto</a></li>
      </ul>
    </nav>

  </div>
</header>

<script>
  const toggleBtn = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu-items');

  toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>
