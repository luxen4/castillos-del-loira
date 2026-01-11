<?php 
// ruta del CSV
$csv_path = $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/chateaux/data/{$slug_section}-castillos.csv";

$etiquetas_li = [];

if (($archivo = fopen($csv_path, "r")) !== false) {
    // saltar la cabecera
    fgetcsv($archivo, 1000, ",");

    while (($fila = fgetcsv($archivo, 1000, ",")) !== false) {
        $nombre_lugar = $fila[0];
        $texto = $fila[1];

        if ($nombre_lugar === $slug) {
            $etiquetas_li[] = $texto;
        }
    }

    fclose($archivo);
} 
?>
 
<section id="<?= $slug_section; ?>" class="bg-white-50 p-1 rounded-lg shadow">
  <h3 class="font-semibold text-emerald-700 mb-2">📌 Consejos</h3>
  <?php if (!empty($etiquetas_li)): ?>
    <ul class="list-disc pl-4 text-gray-700 space-y-1">
      <?php foreach ($etiquetas_li as $c): ?>
        <li><?= $c ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>