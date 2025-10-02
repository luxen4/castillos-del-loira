<?php
foreach ($castillos as $castillo) : ?>
    <figure class="rounded-lg overflow-hidden shadow-lg">
        <img src="<?= $castillo['imagen'] ?>" 
             alt="<?= $castillo['nombre'] ?>" 
             class="w-full h-auto object-cover rounded-lg shadow-md">
        <figcaption class="text-center text-gray-600 p-3">
            <p class="font-medium"><?= $castillo['nombre'] ?></p>
            <span class="block text-sm text-gray-500">
                📸 Foto:
                <a href="<?= $castillo['foto_fuente'] ?>" 
                   target="_blank" 
                   class="text-emerald-600 hover:underline">
                   <?= $castillo['nombre_fuente'] ?>
                </a>
            </span>
            <p class="mt-2 text-gray-700">
                👉 <a href="<?= $castillo['web_oficial'] ?>" 
                      target="_blank" 
                      class="text-emerald-700 font-semibold hover:underline">
                      Web oficial del castillo
                </a>
            </p>
        </figcaption>
    </figure>
<?php endforeach; ?>
