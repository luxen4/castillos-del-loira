<!-- Enlace del mapa a la derecha -->
<a href="#" id="openMapLink"
    class="flex items-center gap-1 text-emerald-700 font-semibold underline hover:text-emerald-800 transition">

    <!-- Icono Google Maps -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
    class="w-5 h-5">
    <path fill="#4285F4" d="M187.5 0h-119C30.7 0 0 30.7 0 68.5v119C0 225.3 30.7 256 68.5 256h119c37.8 0 68.5-30.7 68.5-68.5v-119C256 30.7 225.3 0 187.5 0z" />
    <path fill="#34A853" d="M128 38c-33.1 0-60 26.9-60 60 0 46.5 60 120 60 120s60-73.5 60-120c0-33.1-26.9-60-60-60z" />
    <circle cx="128" cy="98" r="28" fill="#FBBC04" />
    <path fill="#EA4335" d="M188 98c0 33.1-26.9 60-60 60s-60-26.9-60-60 26.9-60 60-60 60 26.9 60 60z" />
    </svg> Google Maps
</a> 

<!-- Modal Google Maps -->
<div id="mapModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white w-11/12 max-w-4xl rounded-2xl shadow-lg overflow-hidden relative animate-[fadeIn_0.2s_ease]">
        <!-- Botón cerrar -->
        <button id="closeMapBtn" class="absolute top-3 right-3 bg-white rounded-full shadow p-2 hover:bg-gray-100">✖</button>
        <!-- Contenedor del mapa -->
        <div class="w-full h-[70vh]">
        <iframe
            src="<?= $src_google_maps; ?>"
            class="w-full h-full"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<script>
    const mapModal = document.getElementById("mapModal");
    const openMapLink = document.getElementById("openMapLink");
    const closeMapBtn = document.getElementById("closeMapBtn");

    // Abrir modal al clicar el enlace
    openMapLink.addEventListener("click", (e) => {
    e.preventDefault(); // evita que el enlace navegue
    mapModal.classList.remove("hidden");
    mapModal.classList.add("flex");
    });

    // Cerrar modal
    closeMapBtn.addEventListener("click", () => {
    mapModal.classList.add("hidden");
    mapModal.classList.remove("flex");
    });

    // Cerrar al hacer clic fuera del contenido
    mapModal.addEventListener("click", (e) => {
    if (e.target === mapModal) {
        mapModal.classList.add("hidden");
        mapModal.classList.remove("flex");
    }
    });
</script>