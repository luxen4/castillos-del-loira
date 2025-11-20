<?php
$datosLoira = [
    [
        'icono' => '🗓️',
        'titulo' => 'Mejor época',
        'texto' => 'De mayo a septiembre, cuando los jardines florecen y el clima es ideal para pasear o pedalear junto al río.',
        'id' => 'mejor-epoca'
    ],
    [
        'icono' => '🚴',
        'titulo' => 'Ideal para',
        'texto' => 'Amantes de la historia, la fotografía, el vino y la arquitectura. Perfecto para recorrer en bici o coche.',
        'id' => 'ideal-para'
    ],
    [
        'icono' => '🕰️',
        'titulo' => 'Duración recomendada',
        'texto' => 'Entre 5 y 10 días para explorar las principales etapas sin prisas y empaparte del ritmo tranquilo del valle.',
        'id' => 'duracion-recomendada'
    ],
    [
        'icono' => '🍷',
        'titulo' => 'Vinos emblemáticos',
        'texto' => 'Muscadet, Sancerre, Chinon y Saumur-Champigny: auténticas joyas enológicas de la región.',
        'id' => 'vinos-emblematicos'
    ],
    [
        'icono' => '🏰',
        'titulo' => 'Castillos destacados',
        'texto' => 'Chambord, Chenonceau, Amboise, Villandri y Ussé, cada uno con su propia historia y encanto.',
        'id' => 'castillos-destacados'
    ],
    [
        'icono' => '🌦️',
        'titulo' => 'Clima',
        'texto' => 'Templado oceánico, con veranos suaves e inviernos frescos. Perfecto para actividades al aire libre todo el año.',
        'id' => 'clima'
    ]
];
?>

<!-- 🔹 Datos Rápidos del Valle del Loira -->
<section id="datos-loira">
  <h3 class="text-xl font-bold text-emerald-700 mb-4 text-center">
    📊 Datos rápidos del Valle del Loira
  </h3>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-4 text-gray-700">

    <?php foreach ($datosLoira as $item): ?>
      <div class="bg-white rounded-lg p-1 shadow-sm">
        <h4 class="font-semibold text-emerald-800 mb-1">
          <?= $item['icono']; ?> <?= $item['titulo']; ?>
        </h4>

        <p>
          <?= $item['texto']; ?>
          <a href="#<?= $item['id']; ?>" 
             class="text-blue-600 hover:underline inline-flex items-center gap-1">
            Más info... <span>→</span>
          </a>
        </p>
      </div>
    <?php endforeach; ?>

  </div>

  <p class="mt-6 text-sm text-gray-500 text-center">
    ℹ️ Consejo: organiza tu ruta por etapas —de <strong>Nantes a Orleans</strong>— para disfrutar cada zona sin prisas.
  </p>
</section>