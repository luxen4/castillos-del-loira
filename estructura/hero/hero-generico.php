<!-- 🔹 HERO PRINCIPAL -->
<figure class="relative h-[420px] sm:h-[580px] md:h-[680px] lg:h-[820px] xl:h-[920px] 
               rounded-2xl overflow-hidden shadow-xl">

  <!-- Imagen responsive -->
  <img 
    src="<?= $imagenHero ?>" 
    alt="<?= $nombreLugar ?>"
    class="absolute inset-0 w-full h-full object-cover"
    loading="eager"
  >

  <!-- Overlay -->
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70 
              flex flex-col items-center justify-center text-center px-6">

    <!-- Título -->
    <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl 
               font-extrabold text-white drop-shadow-lg">
      <?= $nombreLugar ?>
    </h1>

    <!-- Descripción portada -->
    <p class="mt-4 max-w-3xl text-gray-200 text-base sm:text-lg md:text-xl leading-relaxed">
      Amboise es una ciudad histórica del <strong>Valle del Loira</strong>, famosa por su 
      <strong>castillo real</strong>, su relación con <strong>Leonardo da Vinci</strong> 
      y sus vistas privilegiadas sobre el <strong>río Loira</strong>.
    </p>

    <!-- Iconos informativos -->
    <div class="mt-6 flex flex-wrap justify-center gap-6 text-emerald-100 text-sm sm:text-base">

      <div class="flex items-center gap-2">
        <i class="fas fa-chess-rook text-emerald-400"></i>
        <span>Castillo Real</span>
      </div>

      <div class="flex items-center gap-2">
        <i class="fas fa-paint-brush text-emerald-400"></i>
        <span>Leonardo da Vinci</span>
      </div>

      <div class="flex items-center gap-2">
        <i class="fas fa-water text-emerald-400"></i>
        <span>Río Loira</span>
      </div>

      <div class="flex items-center gap-2">
        <i class="fas fa-map-marker-alt text-emerald-400"></i>
        <span>Indre-et-Loire</span>
      </div>

    </div>

    <!-- CTA -->
    <div class="mt-8 flex flex-wrap justify-center gap-4">

      <a href="#que-ver"
         class="bg-emerald-600 hover:bg-emerald-700 text-white px-7 py-3 rounded-xl
                font-semibold transition shadow-lg">
        👀 Qué ver en <?= $nombreLugar ?>
      </a>

      <a href="#mapa"
         class="bg-white/10 hover:bg-white/20 text-white px-7 py-3 rounded-xl
                font-semibold backdrop-blur transition border border-white/30">
        📍 Ver mapa
      </a>

    </div>

    <!-- SEO invisible -->
    <span class="sr-only">
      <?= $nombreLugar ?> Valle del Loira Castillo Real Leonardo da Vinci turismo Francia
    </span>

  </div>

  <!-- Fuente imagen -->
  <figcaption class="absolute bottom-0 left-0 w-full bg-black/60 text-white 
                     text-center py-2 text-sm px-3">
    Fuente:
    <a href="<?= $web_oficial ?>" target="_blank" rel="noopener noreferrer"
       class="text-blue-300 underline hover:text-blue-400 transition">
      <?= $fuenteHero_texto ?>
    </a>
  </figcaption>

</figure>



<?php /* Este es el de las ciudades
    <!-- 🔹 Hero responsivo -->
    <section
        class="relative bg-cover bg-center h-80 sm:h-96 md:h-[500px] lg:h-[600px] transition-transform duration-500 hover:scale-105 hover:brightness-110"
        style="background-image: url('<?= $imagenHero ?>');">

        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center transition duration-500 hover:bg-opacity-40">
            <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white font-extrabold text-center px-4">
                Bienvenido a <?= $ciudad ?>
            </h2>
        </div>
    </section>

    */ ?>