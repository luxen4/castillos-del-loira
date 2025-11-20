<?php
$nombreLugar = "Alquiler de Vehículos";
$descripcion = "Principales empresas de alquiler de vehículos en el Valle del Loira: Europcar, Avis, Hertz, Sixt, Enterprise y más.";
$urlPagina = "https://tusitio.com/val-de-loire/alquiler-coches.php";

// Marcas de alquiler relevantes en la zona
$marcas = [
    [
        "nombre" => "Europcar",
        "descripcion" => "Europcar es una empresa francesa de alquiler de coches con una amplia presencia en el Valle del Loira. Ofrece vehículos urbanos, familiares, SUV e incluso eléctricos.",
        "url" => "https://www.europcar.com/",
        "logo" => "data:image/png;base64,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"
    ],
    [
        "nombre" => "Avis",
        "descripcion" => "Avis Budget Group opera con la marca Avis y Budget en Francia. Es uno de los proveedores más conocidos para turistas en la región.",
        "url" => "https://www.avis.com/",
        "logo" => "data:image/png;base64,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"
    ],
    [
        "nombre" => "Hertz",
        "descripcion" => "Hertz es una empresa internacional de alquiler de coches con oficinas en varias ciudades del Loira, ideal para explorar la región con libertad.",
        "url" => "https://www.hertz.com/",
        "logo" => "https://www.elpublicista.es/adjuntos/fichero_4585_20100202.jpg"
    ],
    [
        "nombre" => "Sixt",
        "descripcion" => "Sixt es una gran marca de alquiler de vehículos con presencia en Francia, conocida por su flota moderna y su servicio premium.",
        "url" => "https://www.sixt.com/",
        "logo" => "https://m.media-amazon.com/images/I/51fiZW2YqbL.png"
    ],
    [
        "nombre" => "Enterprise",
        "descripcion" => "Enterprise Rent‑A‑Car ofrece una buena cobertura en la región del Loira y es una opción sólida para alquileres cortos y largos.",
        "url" => "https://www.enterprise.com/",
        "logo" => "https://www.enterprise.es/content/dam/ecom/logo-enterprise.png"
    ],
    [
        "nombre" => "Budget",
        "descripcion" => "Parte del grupo Avis Budget, Budget es una opción más económica para los viajeros que buscan alquilar un vehículo en el Valle del Loira.",
        "url" => "https://www.budget.com/",
        "logo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNUHmJRACekoA6mhq0Cab9PRzVoFP9PkWVfik1xxY74JQleyDX83mm6nelBypPBX6hZy4&usqp=CAU"
    ],
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($nombreLugar) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/header/enlaces-principales-generico.php'; ?>

<main class="container mx-auto px-4 py-12">
  <div class="grid grid-cols-12 gap-6">

    <!-- 🔹 Aside izquierdo -->
    <aside class="hidden lg:block col-span-2 bg-white rounded-lg shadow p-4 space-y-4 sticky top-24">
      <h4 class="font-bold text-emerald-700 mb-2">Publicidad</h4>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?hotel" alt="Publicidad 1" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Hotel destacado</p>
      </a>

        <?php $numeroAleatorio = 0;
        $archivoPublicidad = "botas_hombre";
        $alineacion = 2;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-botas-hombre.php"; ?>



      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?loire,castle" alt="Publicidad 2" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Tour Valle del Loira</p>
      </a>
    </aside>

    <!-- 🔹 Contenido central -->
    <div class="col-span-12 lg:col-span-8 space-y-8">
      <h1 class="text-3xl font-bold text-emerald-700"><?= htmlspecialchars($nombreLugar) ?></h1>
      <p class="text-gray-600"><?= htmlspecialchars($descripcion) ?></p>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($marcas as $marca): ?>
          <div class="bg-white rounded-xl shadow-lg p-6 flex flex-col items-center">
            <?php if (!empty($marca['logo'])): ?>
              <img src="<?= $marca['logo'] ?>" alt="Logo <?= htmlspecialchars($marca['nombre']) ?>" class="w-32 h-auto mb-4">
            <?php endif; ?>
            <h2 class="text-xl font-semibold text-emerald-700 mb-2"><?= htmlspecialchars($marca['nombre']) ?></h2>
            <p class="text-sm text-gray-600 mb-4"><?= htmlspecialchars($marca['descripcion']) ?></p>
            <a href="<?= htmlspecialchars($marca['url']) ?>" target="_blank" class="mt-auto px-4 py-2 bg-emerald-600 text-white rounded hover:bg-emerald-700 transition">
              Visitar web
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <section class="mt-12">
        <h2 class="text-2xl font-bold text-emerald-700 mb-4">Consejos para alquilar coche en el Valle del Loira</h2>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Reserva con antelación, especialmente en temporada alta (mayo‑septiembre).</li>
          <li>Comprueba las oficinas disponibles cerca de los castillos o ciudades (Tours, Amboise, Blois …).</li>
          <li>Asegúrate de leer las condiciones del seguro y del depósito de garantía.</li>
          <li>Considera un coche pequeño para carreteras estrechas y para aparcar cerca de los castillos.</li>
          <li>Si solo vas en una parte del viaje, puedes devolver el coche en un punto diferente (one-way), dependiendo de la empresa.</li>
        </ul>
      </section>
              <?php 
        $numeroAleatorio=3; $archivoPublicidad='jeans_man'; $alineacion=4;
        require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/anuncios/amazon/carrusel-horizontal-generico-jeans-man.php"; ?>

    </div>

    <!-- 🔹 Aside derecho -->
    <aside class="hidden lg:block col-span-2 bg-white rounded-lg shadow p-4 space-y-4 sticky top-24">
      <h4 class="font-bold text-emerald-700 mb-2">Patrocinado</h4>
      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?restaurant" alt="Publicidad 3" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Restaurante recomendado</p>
      </a>



      <a href="#" target="_blank" class="block p-2 bg-gray-100 rounded hover:bg-gray-200 transition">
        <img src="https://source.unsplash.com/200x150/?wine,loire" alt="Publicidad 4" class="w-full rounded">
        <p class="text-xs text-gray-600 mt-1 text-center">Vinos del Loira</p>
      </a>

              <script async src="https://tpscr.com/content?trs=474157&shmarker=684841&place=USA&items=3&locale=en-US&powered_by=true&campaign_id=108&promo_id=4039" charset="utf-8"></script>

    </aside>

  </div>
</main>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/estructura/footer/footer-generico.php'; ?>

</body>
</html>
