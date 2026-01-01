<?php
function crearFAQ($pregunta, $respuesta) {
  return '
    <details class="bg-white shadow p-1 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">' . htmlspecialchars($pregunta) . '</summary>
      <p class="mt-2 text-gray-700">' . htmlspecialchars($respuesta) . '</p>
    </details>
  ';
}
?>

<section id="faqs" class="max-w-4xl mx-auto py-10">
  <h2 class="text-2xl font-bold text-emerald-700 mb-6">
    Preguntas frecuentes sobre el <?= $title; ?>
  </h2>

  <div class="space-y-4">
    <?php
    // Leer el CSV
    $data = array_map('str_getcsv', file($_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/chateaux/data/faqs-castillos.csv"));
    $headers = array_shift($data); // elimina la primera fila (encabezados)

    $faqs = [];
    foreach ($data as $row) {
        $faqs[] = array_combine($headers, $row); // crea un array asociativo
    }

    // Filtrar por el slug del castillo actual (ejemplo: villandry)
    $faqs_villandry = array_filter($faqs, fn($item) => $item['slug'] === $slug);

    // Generar HTML para cada FAQ
    foreach ($faqs_villandry as $faq) {
        echo crearFAQ($faq['pregunta'], $faq['respuesta']);
    }
    ?>
  </div>
</section>