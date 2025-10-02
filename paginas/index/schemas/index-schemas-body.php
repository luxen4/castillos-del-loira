
<?php
$castillos = [
    [
        "nombre" => "Château de Chambord",
        "descripcion" => "El Château de Chambord es uno de los castillos más emblemáticos del Valle del Loira en Francia, famoso por su arquitectura renacentista y su impresionante escalera de doble hélice.",
        "imagen" => "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/2a3/-domaine-national-de-chambord.webp",
        "localidad" => "Chambord",
        "region" => "Loir-et-Cher",
        "pais" => "FR",
        "url" => "https://www.chambord.org/en/"
    ],
    [
        "nombre" => "Château de Chenonceau",
        "descripcion" => "Famoso por su puente sobre el río Cher y su arquitectura renacentista, uno de los castillos más visitados del Loira.",
        "imagen" => "https://www.valdeloire-france.com/app/uploads/2023/05/chenonceau-0772-credit-lezbroz-teddy-verneuil-1024x682.webp",
        "localidad" => "Chenonceaux",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "url" => "https://www.chenonceau.com/en/"
    ],
    [
        "nombre" => "Château d'Amboise",
        "descripcion" => "Castillo real renacentista con vistas sobre el río Loira, donde descansan restos de Leonardo da Vinci.",
        "imagen" => "https://cdn.valdeloire-france.com/castillo-amboise.jpg",
        "localidad" => "Amboise",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "url" => "https://www.chateau-amboise.com/en/"
    ],
    [
        "nombre" => "Château de Villandry",
        "descripcion" => "Famoso por sus jardines renacentistas meticulosamente diseñados y cuidados.",
        "imagen" => "https://cdn.valdeloire-france.com/castillo-villandry.jpg",
        "localidad" => "Villandry",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "url" => "https://www.chateauvillandry.fr/en/"
    ]
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    <?php foreach($castillos as $i => $c): ?>
    {
      "@type": "TouristAttraction",
      "name": "<?= $c['nombre'] ?>",
      "description": "<?= $c['descripcion'] ?>",
      "image": "<?= $c['imagen'] ?>",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?= $c['localidad'] ?>",
        "addressRegion": "<?= $c['region'] ?>",
        "addressCountry": "<?= $c['pais'] ?>"
      },
      "url": "<?= $c['url'] ?>"
    }<?= $i < count($castillos) - 1 ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>