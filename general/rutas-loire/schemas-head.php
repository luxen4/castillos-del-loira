<?php  $web_site = 'https://alayag82.kesug.com/val-de-loire/'; ?>


<?php // 1. JSON-LD PRINCIPAL (ItemList + Rutas) ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Rutas temáticas del Valle del Loira",
  "description": "Rutas destacadas por castillos, vino, gastronomía, naturaleza y cicloturismo en el Valle del Loira, Patrimonio de la UNESCO.",
  "itemListElement": [
    {
      "@type": "TouristTrip",
      "name": "Castillos imprescindibles del Valle del Loira",
      "description": "Ruta por los castillos más emblemáticos del Valle del Loira, con arquitectura renacentista y jardines históricos.",
      "itemListElement": [
        {
          "@type": "LandmarksOrHistoricalBuildings",
          "name": "Castillo de Chambord",
          "description": "Icono del Renacimiento francés, obra monumental de Francisco I.",
          "url": "<?= $web_site; ?>/chateaux/chateau-de-chambord.php"
        },
        {
          "@type": "LandmarksOrHistoricalBuildings",
          "name": "Castillo de Chenonceau",
          "description": "El castillo construido sobre el río Cher, conocido como el castillo de las damas.",
          "url": "<?= $web_site; ?>/chateaux/chenonceau.php"
        },
        {
          "@type": "TouristAttraction",
          "name": "Clos-Lucé, Casa de Leonardo da Vinci",
          "description": "Última residencia de Leonardo da Vinci, con maquetas y proyectos originales.",
          "url": "<?= $web_site; ?>/chateaux/clos-luce.php"
        }
      ]
    },
    {
      "@type": "TouristTrip",
      "name": "Ruta de los vinos del Valle del Loira y gastronomía",
      "description": "Ruta enoturística con catas de Sauvignon Blanc, Touraine, Chinon, y visitas a queserías y mercados locales.",
      "itemListElement": [
        {
          "@type": "Winery",
          "name": "Ruta oficial de vinos del Valle del Loira",
          "description": "Bodegas abiertas a visitas, degustaciones y recorridos subterráneos.",
          "url": "<?= $web_site; ?>general/ruta-de-vinos/index.php"
        },
        {
          "@type": "Winery",
          "name": "Bourgueil",
          "description": "Cuna del vino tinto del Loira; bodegas subterráneas y Cabernet Franc.",
          "url": "<?= $web_site; ?>general/bourgueil/index.php"
        },
        {
          "@type": "FoodEstablishment",
          "name": "Gastronomía del Valle del Loira",
          "description": "Quesos locales, foie, repostería tradicional y productos de mercado.",
          "url": "<?= $web_site; ?>general/gastronomia/index.php"
        }
      ]
    },
    {
      "@type": "TouristTrip",
      "name": "Ríos y paisajes naturales del Valle del Loira",
      "description": "Rutas a pie y en bicicleta por la ribera del Loira, observación de fauna y miradores naturales.",
      "itemListElement": [
        {
          "@type": "TouristAttraction",
          "name": "Ruta Loire à Vélo",
          "description": "Ruta ciclista de 900 km siguiendo el río Loira.",
          "url": "<?= $web_site; ?>general/loire-a-velo/index.php"
        },
        {
          "@type": "TouristDestination",
          "name": "Naturaleza y espacios protegidos del Loira",
          "description": "Reservas naturales, humedales y zonas de aves migratorias.",
          "url": "<?= $web_site; ?>general/naturaleza/index.php"
        },
        {
          "@type": "TouristAttraction",
          "name": "Senderos y miradores del Valle del Loira",
          "description": "Caminos señalizados ideales para fotografía y excursiones.",
          "url": "<?= $web_site; ?>general/senderos/index.php"
        }
      ]
    },
    {
      "@type": "TouristTrip",
      "name": "Ruta en bicicleta Loire à Vélo",
      "description": "Una de las rutas ciclistas más famosas de Europa, 900 km de carril bici.",
      "itemListElement": [
        {
          "@type": "TouristInformationCenter",
          "name": "Página oficial de Loire à Vélo",
          "description": "Mapas, etapas y alojamientos para cicloturistas.",
          "url": "<?= $web_site; ?>loire-a-velo/oficial"
        },
        {
          "@type": "City",
          "name": "Tours",
          "description": "Ciudad histórica y punto ideal de salida de la ruta.",
          "url": "<?= $web_site; ?>tours"
        },
        {
          "@type": "City",
          "name": "Orléans",
          "description": "Ciudad vinculada a Juana de Arco, final habitual de muchos tramos.",
          "url": "<?= $web_site; ?>/localidades/orleans.php"
        }
      ]
    }
  ]
}
</script>

<?php /* ✅ 2. SCHEMA “WebSite + SearchAction”  ➜ Ayuda a Google a entender tu web y mostrar tu buscador en resultados.*/ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "Valle del Loira Turismo",
  "url": "https://alayag82.kesug.com/val-de-loire/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://alayag82.kesug.com/val-de-loire/buscar.php?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>

<?php /* ✅ 3. SCHEMA “BreadcrumbList” (Migas de pan) ➜ Importantísimo para SEO y sitelinks. Solo cambia la URL al usarlo en cada página.
Ejemplo para rutas-loire.php: */ ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Val-de-Loire",
      "item": "https://alayag82.kesug.com/val-de-loire/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Rutas",
      "item": "https://alayag82.kesug.com/val-de-loire/general/rutas-loire.php"
    }
  ]
}
</script>


<?php /* ✅ 4. SCHEMA “Organization” + Autor ➜ Ideal para credibilidad, marca personal y Knowledge Panel. */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Valle del Loira Turismo",
  "url": "https://alayag82.kesug.com/val-de-loire/",
  "logo": "https://alayag82.kesug.com/val-de-loire/assets/logo.png",
  "sameAs": [
    "https://www.linkedin.com/in/adrianlaya/"
  ],
  "founder": {
    "@type": "Person",
    "name": "Adrián Laya García",
    "url": "https://alayag82.kesug.com/val-de-loire/contacto.html",
    "sameAs": [
      "https://www.linkedin.com/in/adrianlaya/"
    ]
  }
}
</script>


<?php /* ✅ 5. SCHEMA PARA ARTÍCULO / BLOGPOST (si lo necesitas) Para páginas que tengan mucho texto o guías completas: */ ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Rutas por el Valle del Loira",
  "description": "Descubre las mejores rutas por el Valle del Loira: castillos, vino, gastronomía y cicloturismo.",
  "image": "https://alayag82.kesug.com/val-de-loire/assets/logo.png",
  "author": {
    "@type": "Person",
    "name": "Adrián Laya García",
    "url": "https://alayag82.kesug.com/val-de-loire/contacto.html"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Valle del Loira Turismo",
    "logo": {
      "@type": "ImageObject",
      "url": "https://alayag82.kesug.com/val-de-loire/assets/logo.png"
    }
  },
  "datePublished": "<?= date('Y-m-d'); ?>"
}
</script>


<?php /* ✅ 6. SCHEMA PARA CADA RUTA (Opcional – pero muy bueno para SEO) Puedo generarte 4 archivos separados:

schema-ruta-castillos.json

schema-ruta-vinos.json

schema-ruta-paisajes.json

schema-ruta-loire-a-velo.json

Y luego los incluyes con: 

<script type="application/ld+json">
<?php include 'schema/ruta-castillos.json'; ?>
</script> */ ?>



<?php
// Definimos todas las rutas
$routes = [
    [
        "type" => "TouristTrip",
        "name" => "Castillos imprescindibles del Valle del Loira",
        "description" => "Ruta por los castillos más emblemáticos del Valle del Loira, con arquitectura renacentista y jardines históricos.",
        "items" => [
            ["type" => "LandmarksOrHistoricalBuildings", "name" => "Castillo de Chambord", "description" => "Icono del Renacimiento francés, obra monumental de Francisco I.", "url" => $web_site . "chambord"],
            ["type" => "LandmarksOrHistoricalBuildings", "name" => "Castillo de Chenonceau", "description" => "El castillo construido sobre el río Cher, conocido como el castillo de las damas.", "url" => $web_site . "chenonceau"],
            ["type" => "TouristAttraction", "name" => "Clos-Lucé, Casa de Leonardo da Vinci", "description" => "Última residencia de Leonardo da Vinci, con maquetas y proyectos originales.", "url" => $web_site . "clos-luce"]
        ]
    ],
    [
        "type" => "TouristTrip",
        "name" => "Ruta de los vinos del Valle del Loira y gastronomía",
        "description" => "Ruta enoturística con catas de Sauvignon Blanc, Touraine, Chinon, y visitas a queserías y mercados locales.",
        "items" => [
            ["type" => "Winery", "name" => "Ruta oficial de vinos del Valle del Loira", "description" => "Bodegas abiertas a visitas, degustaciones y recorridos subterráneos.", "url" => $web_site . "ruta-de-vinos"],
            ["type" => "Winery", "name" => "Bourgueil", "description" => "Cuna del vino tinto del Loira; bodegas subterráneas y Cabernet Franc.", "url" => $web_site . "bourgueil"],
            ["type" => "FoodEstablishment", "name" => "Gastronomía del Valle del Loira", "description" => "Quesos locales, foie, repostería tradicional y productos de mercado.", "url" => $web_site . "gastronomia"]
        ]
    ],
    [
        "type" => "TouristTrip",
        "name" => "Ríos y paisajes naturales del Valle del Loira",
        "description" => "Rutas a pie y en bicicleta por la ribera del Loira, observación de fauna y miradores naturales.",
        "items" => [
            ["type" => "TouristTrip", "name" => "Ruta Loire à Vélo", "description" => "Ruta ciclista de 900 km siguiendo el río Loira.", "url" => $web_site . "loire-a-velo/oficial"],
            ["type" => "TouristDestination", "name" => "Naturaleza y espacios protegidos del Loira", "description" => "Reservas naturales, humedales y zonas de aves migratorias.", "url" => $web_site . "naturaleza"],
            ["type" => "TouristAttraction", "name" => "Senderos y miradores del Valle del Loira", "description" => "Caminos señalizados ideales para fotografía y excursiones.", "url" => $web_site . "senderos"]
        ]
    ],
    [
        "type" => "TouristTrip",
        "name" => "Ruta en bicicleta Loire à Vélo",
        "description" => "Una de las rutas ciclistas más famosas de Europa, 900 km de carril bici.",
        "items" => [
            ["type" => "TouristInformationCenter", "name" => "Página oficial de Loire à Vélo", "description" => "Mapas, etapas y alojamientos para cicloturistas.", "url" => $web_site . "loire-a-velo/oficial"],
            ["type" => "City", "name" => "Tours", "description" => "Ciudad histórica y punto ideal de salida de la ruta.", "url" => $web_site . "/localidades/tours.php"],
            ["type" => "City", "name" => "Orléans", "description" => "Ciudad vinculada a Juana de Arco, final habitual de muchos tramos.", "url" => $web_site . "/localidades/orleans.php"]
        ]
    ]
];

// Creamos el JSON-LD
$output = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "Rutas temáticas del Valle del Loira",
    "description" => "Rutas destacadas por castillos, vino, gastronomía, naturaleza y cicloturismo en el Valle del Loira, Patrimonio de la UNESCO.",
    "datePublished" => date('c'),
    "dateModified" => date('c'),
    "itemListElement" => []
];

foreach ($routes as $route) {
    $elements = [];
    foreach ($route['items'] as $item) {
        $elements[] = [
            "@type" => $item['type'],
            "name" => $item['name'],
            "description" => $item['description'],
            "url" => $item['url']
        ];
    }
    $output['itemListElement'][] = [
        "@type" => $route['type'],
        "name" => $route['name'],
        "description" => $route['description'],
        "itemListElement" => $elements
    ];
}

// Imprimimos el JSON-LD dentro de un <script>
?>
<script type="application/ld+json">
<?= json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
</script>
