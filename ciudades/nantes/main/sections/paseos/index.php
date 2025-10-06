
<!-- 🚶 Paseos en Nantes -->
<section id="paseos" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">🚶 Paseos en Nantes</h2>

  <p class="text-gray-700 mb-6">
    Nantes es una ciudad perfecta para recorrer a pie o en bicicleta. Sus calles, parques y el río Loira ofrecen rincones llenos de historia, cultura y naturaleza.
  </p>

  <!-- Destacados -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php require 'data.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/nantes/main/sections/template.php"; ?>
  </div>

  <!-- Info extra -->
  <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
    <p class="text-gray-700">
      👉 Consejo: recorre el <strong>"Voyage à Nantes"</strong>, un itinerario marcado por una línea verde en el suelo que conecta los principales atractivos de la ciudad.
    </p>
  </div>
</section>