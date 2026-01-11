<section id="opiniones" class="bg-white-50 p-1 rounded-lg shadow mt-6">

  <h3 class="font-semibold text-emerald-700 mb-3">
    ⭐ Opiniones de visitantes
  </h3>

  <ul class="space-y-3">
  <?php

    // Ruta del CSV: ejemplo villandry-castillos.csv
    $csv_path = $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/chateaux/data/{$slug_section}-castillos.csv";

    if (file_exists($csv_path)) {

        // Carga el csv línea por línea
        $csv = array_map("str_getcsv", file($csv_path, FILE_IGNORE_NEW_LINES));

        // Elimina encabezados: slug,nombre,etiqueta_li,rating
        array_shift($csv);

        foreach ($csv as $fila) {

            if (count($fila) < 4) continue; // seguridad

            list($slug_csv, $nombre, $etiqueta_li, $rating) = $fila;

            // Solo opiniones pertenecientes al castillo actual
            if ($slug_csv !== $slug) continue;
  ?>

      <li class="p-1 rounded-md bg-white shadow-sm hover:bg-emerald-100 transition cursor-pointer">
        <strong class="text-emerald-700"><?= htmlspecialchars($nombre) ?></strong><br>
        <span class="text-gray-700"><?= htmlspecialchars($etiqueta_li) ?></span><br>
        <span class="text-yellow-500 text-sm"><?= str_repeat("⭐", (int)$rating) ?></span>
      </li>

  <?php
        }
    } else {
        echo "<p class='text-gray-600 text-sm'>⚠️ No se encontraron opiniones.</p>";
    }
  ?>
  </ul>

</section>
