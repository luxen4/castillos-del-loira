
<!-- ✅ HEADER Inicio-FAQs -->
<header class="bg-emerald-700 text-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 py-5 flex justify-between items-center">
        <div>
            <!-- Logo + título -->
            <a href="/val-de-loire/index.php" class="flex items-center gap-3">
                <img src="/val-de-loire/assets/logo.png"
                    alt="Val de Loire"
                    class="w-10 h-10 object-contain">

                <div class="flex flex-col">
                    <h1 class="text-lg md:text-xl font-bold text-white leading-tight">
                        🌿 Val de Loire
                    </h1>

                    <h2 class="text-xs md:text-sm font-medium text-emerald-200
                            border-l-4 border-emerald-200 pl-2 mt-1">
                        <?= $nombreLugar; ?>
                    </h2>
                </div>
            </a>
        </div>

        <!-- 🌐 NAV DESKTOP -->
        <nav class="hidden md:flex gap-6 text-sm font-medium">
            <a href="/val-de-loire/index.php" class="hover:underline flex items-center gap-2">
                <i class="fas fa-home"></i> Inicio
            </a>

            <a href="/val-de-loire/general/rutas-loire/faqs/index.php#<?= $hastag_faqs; ?>" 
               class="hover:underline flex items-center gap-2">
                <i class="fas fa-question-circle"></i> FAQs
            </a>

            <a id="#contacto" href="/val-de-loire/contacto.html" 
            class="hover:underline flex items-center gap-2">
            <i class="fas fa-user-circle"></i> Contacto
            </a>

        </nav>

        <!-- 🍔 BOTÓN HAMBURGUESA (móvil + tablet) -->
        <button id="hamburgerBtn" 
            class="md:hidden flex flex-col gap-1.5 p-2 rounded hover:bg-emerald-600 transition">
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
            <span class="w-7 h-[3px] bg-white rounded"></span>
        </button>

    </div>

    <!-- 📱 MENU MÓVIL/TABLET -->
    <div id="mobileMenu" class="hidden bg-emerald-800 text-white md:hidden shadow-inner">

        <nav class="flex flex-col text-lg px-6 py-4 space-y-4">

            <a href="/val-de-loire/index.php" 
                class="hover:bg-emerald-700 py-2 px-3 rounded transition flex items-center gap-2">
                <i class="fas fa-home"></i> Inicio
            </a>

            <a href="/val-de-loire/general/rutas-loire/faqs/index.php" 
                class="hover:bg-emerald-700 py-2 px-3 rounded transition flex items-center gap-2">
                <i class="fas fa-question-circle"></i> FAQs
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