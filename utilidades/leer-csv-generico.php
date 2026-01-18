<?php
// Leer CSV
$archivo_csv = $_SERVER["DOCUMENT_ROOT"] . "/val-de-loire/{$carpeta}/data/{$archivo_csv}";  //var_dump($archivo_csv);
$data = array_map('str_getcsv', file($archivo_csv));
$headers = array_shift($data); // Elimina la primera fila (encabezados)

// Crear array asociativo
$items = [];
foreach ($data as $row) {
    $items[] = array_combine($headers, $row);
} //var_dump($items);

// Filtrar por slug
$items_filtrados = array_filter($items, fn($item) => $item['slug'] === $slug_filtrado_csv); //var_dump($slug_filtrado_csv);
?>