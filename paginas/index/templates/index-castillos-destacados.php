<?php foreach ($castillos as $castillo) : ?>
    <figure class="relative rounded-lg overflow-hidden shadow-lg">

        <!-- ✅ Nombre arriba sobre la imagen -->
        <figcaption class="absolute top-2 left-1/2 transform -translate-x-1/2 
                           bg-emerald-700 text-white px-3 py-1 rounded-md shadow-md
                           text-sm font-semibold z-10">
            <?= htmlspecialchars($castillo['nombre']); ?>
        </figcaption>

        <!-- Imagen -->
        <img src="<?= $castillo['imagen'] ?>" 
             alt="<?= htmlspecialchars($castillo['nombre']) ?>" 
             class="w-full h-72 object-cover rounded-lg">

        <!-- Pie de imagen -->
        <figcaption class="text-center text-gray-600 p-3">
            <span class="block text-sm text-gray-500">
                📸 Foto:
                <a href="<?= $castillo['foto_fuente'] ?>" 
                   target="_blank" 
                   class="text-emerald-600 hover:underline">
                   <?= htmlspecialchars($castillo['nombre_fuente']); ?>
                </a>
            </span>

            <p class="mt-2 text-gray-700">
                👉 <a href="<?= $castillo['web_oficial'] ?>" 
                      target="_blank" 
                      class="text-emerald-700 font-semibold hover:underline">
                      Más info...
                </a>
            </p>
        </figcaption>

    </figure>
<?php endforeach; ?>

