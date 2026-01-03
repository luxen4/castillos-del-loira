<?php
/* ==========================================================================
   SCHEMA.ORG – Museo de Artes de Nantes
   JSON-LD para SEO avanzado
   ========================================================================== */

$schema_museum = [
    "@context" => "https://schema.org",
    "@type" => "Museum",
    "name" => "Museo de Artes de Nantes",
    "description" => "Descubre el Museo de Artes de Nantes: colecciones maestras, exposiciones, horarios, precios y visita completa.",
    "url" => $web_site,
    "image" => $imagenHero,
    "foundingDate" => "1801",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "10 Rue Georges Clemenceau",
        "addressLocality" => "Nantes",
        "addressRegion" => "Loira Atlántico",
        "postalCode" => "44000",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.2194,
        "longitude" => -1.5518
    ],
    "sameAs" => [
        "https://museedartsdenantes.fr/",
        "https://www.instagram.com/museedartsnantes/",
        "https://www.facebook.com/museedartsdenantes/",
        "https://twitter.com/Musee_Nantes"
    ]
];

/* ==========================================================================
   SCHEMA – BreadcrumbList
   ========================================================================== */
$schema_breadcrumbs = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Inicio",
            "item" => "https://alayag82.kesug.com/"
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "Museos de Nantes",
            "item" => "https://alayag82.kesug.com/nantes/museos/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Museo de Artes de Nantes",
            "item" => $web_site
        ]
    ]
];

/* ==========================================================================
   SCHEMA – FAQPage (si usas preguntas frecuentes)
   ========================================================================== */

$schema_faq = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "¿Cuánto cuesta la entrada al Museo de Artes de Nantes?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "La entrada general suele costar entre 5€ y 8€, dependiendo de la exposición. Algunas colecciones permanentes son gratuitas algunos días."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Dónde se encuentra el museo?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "El museo está situado en el centro de Nantes, a pocos metros de la catedral y de la línea 1 del tranvía."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Se puede reservar la entrada online?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Sí, puedes reservar tu entrada desde la web oficial del museo."
            ]
        ]
    ]
];
?>

<!-- Schema: Museum -->
<script type="application/ld+json">
<?= json_encode($schema_museum, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: Breadcrumbs -->
<script type="application/ld+json">
<?= json_encode($schema_breadcrumbs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?= json_encode($schema_faq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
