<?php
/* ==========================================================================
   SCHEMA.ORG – Museo Julio Verne
   JSON-LD para SEO avanzado
   ========================================================================== */

$schema_museum = [
    "@context" => "https://schema.org",
    "@type" => "Museum",
    "name" => "Museo Julio Verne",
    "description" => "Descubre el Museo Julio Verne en Nantes: exposiciones sobre su vida, inventos y obras literarias.",
    "url" => $web_site,
    "image" => $imagenHero,
    "foundingDate" => "1990", // fecha aproximada de apertura del museo
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "2 Place Jules Verne",
        "addressLocality" => "Nantes",
        "addressRegion" => "Loira Atlántico",
        "postalCode" => "44000",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.2175,
        "longitude" => -1.5540
    ],
    "sameAs" => [
        "https://www.museejulesverne.com",
        "https://www.instagram.com/museejulesverne/",
        "https://www.facebook.com/MuseeJulesVerne",
        "https://twitter.com/MuseeJulesVerne"
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
            "name" => "Museo Julio Verne",
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
            "name" => "¿Cuánto cuesta la entrada al Museo Julio Verne?",
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
                "text" => "Está ubicado en el centro de Nantes, en un espacio dedicado a Julio Verne y sus inventos literarios."
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