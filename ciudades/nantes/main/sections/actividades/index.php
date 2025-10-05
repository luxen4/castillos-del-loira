<!-- ⭐ Actividades en Nantes -->
<section id="actividades" class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-bold text-emerald-700 mb-6">⭐ Actividades en Nantes</h2>

    <p class="text-gray-700 mb-6">
        Nantes ofrece una gran variedad de actividades para todos los gustos: culturales, al aire libre, deportivas y familiares. ¡Descubre lo mejor de la ciudad mientras te diviertes!
    </p>

    <!-- Destacados -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php require 'data.php'; ?>
        <?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/ciudades/nantes/main/sections/template.php"; ?>
    </div>

    <!-- Info extra -->
    <div class="mt-8 bg-emerald-50 border-l-4 border-emerald-600 p-4 rounded">
        <p class="text-gray-700">
            👉 Tip: revisa la agenda de <strong>eventos temporales</strong>, ferias y actividades culturales que suelen celebrarse en la ciudad durante todo el año.
        </p>
    </div>
</section>