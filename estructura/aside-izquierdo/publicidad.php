<!-- 🟣 CIVITATIS – Mejor conversión -->
<div class="bg-white shadow rounded-xl p-4 border border-emerald-100">
    <h3 class="text-xl font-bold text-emerald-700 mb-3">Tours en el Valle del Loira</h3>

    <!-- Banner oficial (300x600) -->
    <a href="TU_ENLACE_AFILIADO_CIVITATIS" target="_blank" rel="nofollow">
        <img
            src="https://imagenes.civitatis.com/general/banners/freestanding/vertical-300x600-es.png"
            alt="Tours y actividades en el Valle del Loira"
            class="w-full rounded-lg shadow-md hover:opacity-90 transition">
    </a>

    <p class="text-sm text-gray-600 mt-3">
        Excursiones, entradas y visitas guiadas a los mejores castillos del Loira: Chenonceau, Chambord, Amboise y más.
    </p>
</div>

<!-- 🟡 AMAZON – Productos que convierten -->
<div class="bg-white shadow rounded-xl p-4 border border-gray-100">
    <h3 class="text-xl font-bold text-gray-700 mb-3">Guías y accesorios recomendados</h3>

    <div class="flex flex-col gap-4">

        <!-- Libro -->
        <a href="TU_LINK_AMAZON_1" target="_blank" rel="nofollow noopener" class="flex gap-3">
            <img
                src="https://m.media-amazon.com/images/I/71m7+6TSrYL._AC_UF1000,1000_QL80_.jpg"
                class="w-20 h-28 object-cover rounded shadow">
            <div>
                <p class="font-semibold text-gray-800 text-sm">Guía del Valle del Loira</p>
                <p class="text-gray-600 text-xs">Castillos, rutas y visitas</p>
            </div>
        </a>

        <!-- Cámara recomendada -->
        <a href="TU_LINK_AMAZON_2" target="_blank" rel="nofollow noopener" class="flex gap-3">
            <img
                src="https://m.media-amazon.com/images/I/71Wf1WguSgL._AC_SL1500_.jpg"
                class="w-20 h-20 object-cover rounded shadow">
            <div>
                <p class="font-semibold text-gray-800 text-sm">Cámara recomendada para viajes</p>
                <p class="text-gray-600 text-xs">Ideal para castillos y paisajes</p>
            </div>
        </a>

    </div>
</div>


<section class="my-12">
  <h2 class="text-3xl font-bold text-emerald-600 text-center mb-6">📍 Localización</h2>

  <div class="flex justify-center">
    <!-- Preview clicable -->
    <div id="mapPreview" class="relative w-full max-w-3xl h-64 rounded-2xl overflow-hidden shadow-lg border-4 border-emerald-600 cursor-pointer hover:shadow-2xl transition-shadow duration-300">
      
      <!-- Imagen de fondo o iframe reducido -->
      <iframe 
          src="<?= $src_google_maps; ?>" 
          class="w-full h-full pointer-events-none"
          style="border:0;"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
      </iframe>

      <!-- Overlay indicativo -->
      <div class="absolute inset-0 bg-black/20 flex items-center justify-center text-white font-semibold text-lg hover:bg-black/30 transition">
        Haz clic para ampliar
      </div>
    </div>
  </div>
</section>

<!-- Modal popup -->
<div id="mapModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
  <div class="relative w-full max-w-4xl rounded-2xl overflow-hidden bg-white shadow-2xl">
    <!-- Botón cerrar -->
    <button id="closeModal" class="absolute top-2 right-2 text-gray-700 hover:text-gray-900 font-bold text-xl">&times;</button>
    
    <!-- Mapa completo -->
    <iframe 
        src="<?= $src_google_maps; ?>" 
        class="w-full h-96 md:h-[500px]"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</div>

<!-- JS para abrir/cerrar modal -->
<script>
  const mapPreview = document.getElementById('mapPreview');
  const mapModal = document.getElementById('mapModal');
  const closeModal = document.getElementById('closeModal');

  mapPreview.addEventListener('click', () => {
    mapModal.classList.remove('hidden');
    mapModal.classList.add('flex');
  });

  closeModal.addEventListener('click', () => {
    mapModal.classList.add('hidden');
    mapModal.classList.remove('flex');
  });

  // Cerrar al hacer clic fuera del contenido
  mapModal.addEventListener('click', (e) => {
    if(e.target === mapModal){
      mapModal.classList.add('hidden');
      mapModal.classList.remove('flex');
    }
  });
</script>


<!-- 🔵 ADSENSE – Solo actívalo si quieres -->
<div class="bg-white shadow rounded-xl p-4 border border-blue-100">
    <h3 class="text-xl font-bold text-blue-700 mb-3">Publicidad</h3>

    <!-- Marca esta línea y pega tu código real de AdSense -->
    <!-- <?= "<!-- ADSENSE AQUÍ -->" ?> -->

    <div class="text-center py-10 text-gray-400 text-sm italic">
        <span>Anuncio de Google</span>
    </div>
</div>