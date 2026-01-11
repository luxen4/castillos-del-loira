<!-- Castillos cercanos -->
<?php
$castillos_cercanos = [
  [
    "nombre" => "Castillo de Amboise",
    "url" => "chateau-royal-de-amboise.php",
    "descripcion" => "Residencia real del Renacimiento y tumba de Leonardo da Vinci."
  ],
  [
    "nombre" => "Castillo de Clos-Lucé",
    "url" => "Clos-Luce.php",
    "descripcion" => "Última morada de Leonardo da Vinci, conectada al Castillo de Amboise."
  ],
  [
    "nombre" => "Castillo de Chambord",
    "url" => "chateau-de-chambord.php",
    "descripcion" => "La joya arquitectónica del Loira, con su escalera de doble hélice."
  ],
  [
    "nombre" => "Castillo de Chenonceau",
    "url" => "chateau-de-chenonceau/index.php",
    "descripcion" => "Famoso por su galería sobre el río Cher y sus jardines renacentistas."
  ],
  [
    "nombre" => "Castillo de Blois",
    "url" => "chateau-royal-de-blois/index.php",
    "descripcion" => "Palacio renacentista con historia real."
  ],
  [
    "nombre" => "Castillo de Villandry",
    "url" => "chateau-de-villandry/index.php",
    "descripcion" => "Famoso por sus jardines geométricos renacentistas."
  ]
];

$h3 = "🏰 Castillos cercanos";
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-derecho/castillos-cercanos/template.php"; ?>




<?php /*
function renderCastillosCercanos($castillos, $titulo = "🏰 Castillos cercanos") {
    $h3 = $titulo;
    require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/aside-derecho/castillos-cercanos/template.php";
}

// Uso:
$castillos_cercanos = [
    ["nombre" => "Castillo de Amboise", "url" => "chateau-royal-de-amboise.php", "descripcion" => "Residencia real del Renacimiento y tumba de Leonardo da Vinci."],
    ["nombre" => "Castillo de Clos-Lucé", "url" => "Clos-Luce.php", "descripcion" => "Última morada de Leonardo da Vinci, conectada al Castillo de Amboise."],
    // ...otros castillos
];

renderCastillosCercanos($castillos_cercanos); */
?>