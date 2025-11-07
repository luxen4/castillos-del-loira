<section class="max-w-4xl mx-auto py-10">
  <h2 class="text-3xl font-bold text-emerald-700 mb-6">Preguntas frecuentes sobre el Castillo de Villandry</h2>

  <div class="space-y-4">

    <!-- FAQ 1 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Cuál es el horario del Castillo de Villandry?</summary>
      <p class="mt-2 text-gray-700">
        El castillo y los jardines abren todos los días del año. El horario varía según la temporada,
        pero generalmente es de <strong>9:00 a 18:00</strong>.
      </p>
    </details>

    <!-- FAQ 2 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Cuánto cuesta la entrada?</summary>
      <p class="mt-2 text-gray-700">
        La entrada cuesta aproximadamente <strong>10€ para adultos</strong> y es gratuita para menores (las tarifas pueden variar según la temporada).
      </p>
    </details>

    <!-- FAQ 3 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Los jardines y el castillo se pueden visitar por separado?</summary>
      <p class="mt-2 text-gray-700">
        Sí. Puedes comprar entrada solo para los jardines o una entrada combinada que incluye castillo y jardines.
      </p>
    </details>

    <!-- FAQ 4 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Cuánto dura la visita?</summary>
      <p class="mt-2 text-gray-700">
        La visita completa (castillo y jardines) toma entre <strong>1.5 y 2.5 horas</strong>.
        Solo los jardines pueden recorrerse en aproximadamente <strong>1 hora</strong>.
      </p>
    </details>

    <!-- FAQ 5 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Es accesible para personas con movilidad reducida?</summary>
      <p class="mt-2 text-gray-700">
        Los jardines son accesibles en su mayoría. El castillo tiene zonas con escaleras debido a su estructura histórica.
      </p>
    </details>

    <!-- FAQ 6 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Hay aparcamiento en Villandry?</summary>
      <p class="mt-2 text-gray-700">
        Sí, hay aparcamiento gratuito cerca de la entrada del castillo.
      </p>
    </details>

    <!-- FAQ 7 -->
    <details class="bg-white shadow p-4 rounded-lg cursor-pointer">
      <summary class="font-semibold text-lg text-emerald-700">¿Se permiten mascotas?</summary>
      <p class="mt-2 text-gray-700">
        Los perros pueden acceder a los jardines siempre que vayan con correa. No se permite su entrada al castillo.
      </p>
    </details>

  </div>
</section>





<?php
// Leer el CSV
$data = array_map('str_getcsv', file($_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/chateaux/data/{$slug_section}-castillos.csv"));
$headers = array_shift($data); // elimina la primera fila (encabezados)

$info = [];
foreach ($data as $row) {
    $info[] = array_combine($headers, $row); // crea un array asociativo
}

// Buscar solo por el Slug (por si en el futuro hay más filas)
$data_items = array_filter($info, fn($item) => $item['slug'] === $slug);

?>