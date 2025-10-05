<!-- 📅 Acontecimientos en Nantes -->
<section id="acontecimientos" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">📅 Acontecimientos en Nantes</h2>

  <p class="text-gray-700 mb-6">
    Nantes es una ciudad vibrante donde se celebran numerosos eventos durante todo el año, desde festivales culturales hasta mercados y espectáculos al aire libre.
  </p>

  <!-- Destacados -->
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php require 'data.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/nantes/main/sections/template.php"; ?>
</div>

  <!-- Info extra -->
  <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
    <p class="text-gray-700">
      👉 Consejo: consulta el calendario oficial de Nantes para no perderte festivales anuales, desfiles y eventos especiales.
    </p>
  </div>
</section>