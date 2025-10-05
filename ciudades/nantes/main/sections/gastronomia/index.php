<!-- 🍴 Gastronomía de Nantes -->
<section id="gastronomia" class="container mx-auto px-6 py-12">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">🍴 Gastronomía en Nantes</h2>

  <p class="text-gray-700 mb-6">
    Nantes ofrece una cocina que combina tradición, productos frescos del Atlántico y vinos del Valle del Loira.
    Es una ciudad reconocida por su creatividad culinaria y su fuerte vínculo con la cultura marinera.
  </p>

  <!-- Destacados -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php require 'data.php'; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/nantes/main/sections/template.php"; ?>
  </div>

  <!-- Info extra -->
  <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
    <p class="text-gray-700">
      👉 No olvides probar los mariscos frescos, en especial las ostras, que son una delicia en los mercados y restaurantes locales.
    </p>
  </div>
</section>