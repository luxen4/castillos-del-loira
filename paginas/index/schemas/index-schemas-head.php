<?php
$castillos = [
    [
        "nombre" => "Château de Chambord",
        "descripcion" => "El Château de Chambord es uno de los castillos más emblemáticos del Valle del Loira en Francia, famoso por su arquitectura renacentista y su impresionante escalera de doble hélice.",
        "imagen" => "https://cdn.iris-etourism.io/uploads/crt_centre_val_de_loire/2a3/-domaine-national-de-chambord.webp",
        "localidad" => "Chambord",
        "region" => "Loir-et-Cher",
        "pais" => "FR",
        "lat" => 47.6169,
        "lng" => 1.5161,
        "url" => "https://www.chambord.org/en/",
        "sameAs" => [
            "https://es.wikipedia.org/wiki/Ch%C3%A2teau_de_Chambord",
            "https://www.instagram.com/explore/tags/chateaudechambord"
        ]
    ],
    [
        "nombre" => "Château de Chenonceau",
        "descripcion" => "Famoso por su puente sobre el río Cher y su arquitectura renacentista, uno de los castillos más visitados del Loira.",
        "imagen" => "https://www.valdeloire-france.com/app/uploads/2023/05/chenonceau-0772-credit-lezbroz-teddy-verneuil-1024x682.webp",
        "localidad" => "Chenonceaux",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "lat" => 47.3241,
        "lng" => 1.0700,
        "url" => "https://www.chenonceau.com/en/",
        "sameAs" => [
            "https://es.wikipedia.org/wiki/Ch%C3%A2teau_de_Chenonceau",
            "https://www.instagram.com/explore/tags/chateaudechenonceau"
        ]
    ],
    [
        "nombre" => "Château d'Amboise",
        "descripcion" => "Castillo real renacentista con vistas sobre el río Loira, donde descansan restos de Leonardo da Vinci.",
        "imagen" => "https://cdn.valdeloire-france.com/castillo-amboise.jpg",
        "localidad" => "Amboise",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "lat" => 47.4100,
        "lng" => 0.9820,
        "url" => "https://www.chateau-amboise.com/en/",
        "sameAs" => [
            "https://es.wikipedia.org/wiki/Ch%C3%A2teau_d'Amboise",
            "https://www.instagram.com/explore/tags/chateaudamboise"
        ]
    ],
    [
        "nombre" => "Château de Villandry",
        "descripcion" => "Famoso por sus jardines renacentistas meticulosamente diseñados y cuidados.",
        "imagen" => "https://cdn.valdeloire-france.com/castillo-villandry.jpg",
        "localidad" => "Villandry",
        "region" => "Indre-et-Loire",
        "pais" => "FR",
        "lat" => 47.3236,
        "lng" => 0.8880,
        "url" => "https://www.chateauvillandry.fr/en/",
        "sameAs" => [
            "https://es.wikipedia.org/wiki/Ch%C3%A2teau_de_Villandry",
            "https://www.instagram.com/explore/tags/chateaudevillandry"
        ]
    ]
];
?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Valle del Loira",
  "description": "Ruta turística por los castillos más importantes del Valle del Loira en Francia.",
  "hasPart": [
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
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": <?= $c['lat'] ?>,
        "longitude": <?= $c['lng'] ?>
      },
      "url": "<?= $c['url'] ?>",
      "sameAs": <?= json_encode($c['sameAs']) ?>
    }<?= $i < count($castillos) - 1 ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>