<?php
// 🏰 SECCIÓN: TARJETAS RÁPIDAS - CHAMBORD
$tarjetas_chambord = [
  [
    "icono" => "🏰",
    "titulo" => "Historia",
    "descripcion" => "Descubre el legado de Francisco I y la influencia de Leonardo da Vinci.",
    "ancla" => "#historia"
  ],
  [
    "icono" => "🌀",
    "titulo" => "Escalera doble hélice",
    "descripcion" => "La joya arquitectónica más famosa del castillo.",
    "ancla" => "#arquitectura"
  ],
  [
    "icono" => "🎟️",
    "titulo" => "Visitas",
    "descripcion" => "Información práctica sobre horarios y entradas.",
    "ancla" => "#informacion-practica"
  ],
  [
    "icono" => "📸",
    "titulo" => "Galería",
    "descripcion" => "Explora vistas panorámicas y detalles del castillo.",
    "ancla" => "#galeria"
  ]
];
?>
<section class="grid md:grid-cols-4 gap-4">
  <?php foreach ($tarjetas_chambord as $t): ?>
    <div class="bg-white rounded-lg p-4 shadow-sm">
      <h4 class="font-semibold text-emerald-800 mb-1"><?= $t["icono"] ?> <?= $t["titulo"] ?></h4>
      <p><?= $t["descripcion"] ?></p>
      <a href="<?= $t["ancla"] ?>" class="text-blue-600 underline">Ir</a>
    </div>
  <?php endforeach; ?>
</section>
