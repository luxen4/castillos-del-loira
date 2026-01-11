<?php // Meter en un archivo de utilidades
function crearInfoItem($icono, $label, $valor, $esLink = false)
{
  $valorSeguro = htmlspecialchars($valor);

  if ($esLink) {
    $valorHTML = '<a href="' . $valorSeguro . '" target="_blank" rel="noopener noreferrer"
                  class="text-emerald-600 underline hover:text-emerald-800">
                  Visitar sitio →
                  </a>';
  } else {
    $valorHTML = $valorSeguro;
  }

  return '
    <div class="flex items-start gap-2 bg-white p-1 rounded-lg shadow hover:bg-emerald-100 transition cursor-pointer">
      <span class="text-emerald-700 font-semibold">' . $icono . ' ' . $label . ':</span>
      <span>' . $valorHTML . '</span>
    </div>
  ';
}
?>



<?php
// Leer el CSV
// var_dump($slug_section); var_dump($slug);
$data = array_map('str_getcsv', file($_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/chateaux/data/{$slug_section}-castillos.csv"));
$headers = array_shift($data); // elimina la primera fila (encabezados)

$info = [];
foreach ($data as $row) {
  $info[] = array_combine($headers, $row); // crea un array asociativo
}

// Buscar solo por el Slug (por si en el futuro hay más filas)
$data_items = array_filter($info, fn($item) => $item['slug'] === $slug); ?>

<section id="visitas-informacion-util" class="bg-gray-100 p-1 rounded-xl shadow-md my-8">
  <h2 class="text-2xl font-bold text-emerald-700 mb-4">ℹ️ Visitas Información útil</h2>

  <div class="space-y-3">
    <?php foreach ($data_items as $item): ?>

      <?= crearInfoItem("📍", "Dirección", $item["direccion"]) ?>
      <?= crearInfoItem("🕒", "Horario", $item["horario"]) ?>
      <?= crearInfoItem("💶", "Precio", $item["precio"]) ?>
      <?= crearInfoItem("🚶", "Acceso", $item["acceso"]) ?>
      <?= crearInfoItem("🌐", "Web oficial", $item["web_oficial"], true) ?>

    <?php endforeach; ?>
  </div>
</section>