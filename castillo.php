<?php
// Función para leer CSV y devolver array asociativo
function leer_csv($ruta) {
    $rows = [];
    if (!file_exists($ruta)) return $rows;

    if (($f = fopen($ruta, 'r')) !== false) {
        $header = fgetcsv($f);

        while (($line = fgetcsv($f)) !== false) {
            if (empty($line) || count($line) < count($header)) continue;
            $rows[] = array_combine($header, $line);
        }

        fclose($f);
    }

    return $rows;
}

// Obtener slug desde GET
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Leer CSV y buscar el castillo
$castillos = leer_csv(__DIR__ . '/castillos.csv');
$found = null;
foreach ($castillos as $c) {
    if ($c['slug'] === $slug) {
        $found = $c;
        break;
    }
}

if (!$found) {
    header('HTTP/1.0 404 Not Found');
    echo 'Castillo no encontrado';
    exit;
}
?>
<!doctype html>

<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= htmlspecialchars($found['name']) ?> | Val de Loire</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
<div class="container mx-auto px-6 py-8">
<a href="/val-de-loire/castillos-val-de-loire.php" class="text-sm text-emerald-700 hover:underline">← Volver a la lista</a>
<h1 class="text-3xl font-bold text-emerald-700 mt-4"><?= htmlspecialchars($found['name']) ?></h1>


<div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="md:col-span-2 bg-white rounded shadow overflow-hidden">
<img src="<?= htmlspecialchars($found['src']) ?>" alt="<?= htmlspecialchars($found['alt']) ?>" class="w-full h-80 object-cover">
<div class="p-4">
<p class="text-gray-600"><?= htmlspecialchars($found['short_description']) ?></p>
<p class="mt-3 text-sm text-gray-500">📍 <?= htmlspecialchars($found['location']) ?> • Región: <?= htmlspecialchars($found['region']) ?> • Año: <?= htmlspecialchars($found['year']) ?></p>
</div>
</div>


<aside class="bg-white rounded shadow p-4">
<h3 class="font-semibold">Visitar</h3>
<p class="text-sm text-gray-600 mt-2">Enlaces útiles y entradas.</p>
<a href="<?= htmlspecialchars($found['url']) ?>" class="block mt-3 bg-emerald-700 text-white text-center py-2 rounded" target="_blank" rel="nofollow">Información y entradas</a>


<!-- Afiliados ejemplo -->
<div class="mt-4">
<a href="https://getyourguide.tpo.lu/FPvBISCi" target="_blank" rel="nofollow">
<img src="/val-de-loire/assets/banner-tours-valle-loira.jpg" alt="Tours" class="w-full rounded">
</a>
</div>
</aside>
</div>


</div>
</body>
</html>