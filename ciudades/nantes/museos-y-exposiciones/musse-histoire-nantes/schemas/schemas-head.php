<?php
/* ==========================================================================
   SCHEMA.ORG – Museo de Historia de Nantes
   JSON-LD para SEO avanzado
   ========================================================================== */

$schema_museum = [
    "@context" => "https://schema.org",
    "@type" => "Museum",
    "name" => "Museo de Historia de Nantes",
    "description" => "Descubre el Museo de Historia de Nantes: exposiciones, historia, horarios, precios y visita completa.",
    "url" => $web_site,
    "image" => $imagenHero,
    "foundingDate" => "1975", // fecha aproximada de creación del museo moderno dentro del castillo
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "4 Place Marc Elder",
        "addressLocality" => "Nantes",
        "addressRegion" => "Loira Atlántico",
        "postalCode" => "44000",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.2138,
        "longitude" => -1.5564
    ],
    "sameAs" => [
        "https://museedhistoirendenantes.fr/",
        "https://www.instagram.com/museedhistoirenantes/",
        "https://www.facebook.com/museedhistoirendenantes/",
        "https://twitter.com/Musee_HistoireN"
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
            "name" => "Museo de Historia de Nantes",
            "item" => $web_site
        ]
    ]
];

/* ==========================================================================
   SCHEMA – FAQPage
   ========================================================================== */
$schema_faq = [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => [
        [
            "@type" => "Question",
            "name" => "¿Cuánto cuesta la entrada al Museo de Historia de Nantes?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "La entrada general suele costar entre 5€ y 10€, con descuentos para estudiantes y familias."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Dónde se encuentra el museo?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Está ubicado en el Castillo de los Duques de Bretaña, en el centro histórico de Nantes."
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
