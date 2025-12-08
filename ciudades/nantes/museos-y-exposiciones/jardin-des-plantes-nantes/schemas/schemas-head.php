<?php
/* ==========================================================================
   SCHEMA.ORG – Jardín de Plantas de Nantes
   JSON-LD para SEO avanzado
   ========================================================================== */

$schema_garden = [
    "@context" => "https://schema.org",
    "@type" => "BotanicalGarden",
    "name" => "Jardín de Plantas de Nantes",
    "description" => "Explora el Jardín de Plantas de Nantes: flora diversa, historia del jardín y actividades educativas.",
    "url" => $web_site,
    "image" => $imagenHero,
    "foundingDate" => "1807",
    "address" => [
        "@type" => "PostalAddress",
        "streetAddress" => "Rue Stanislas Baudry, 44000 Nantes",
        "addressLocality" => "Nantes",
        "addressRegion" => "Loira Atlántico",
        "postalCode" => "44000",
        "addressCountry" => "FR"
    ],
    "geo" => [
        "@type" => "GeoCoordinates",
        "latitude" => 47.2140,
        "longitude" => -1.5535
    ],
    "sameAs" => [
        "https://www.jardindesplantes-nantes.fr",
        "https://www.facebook.com/JardinDesPlantesNantes",
        "https://www.instagram.com/jardindesplantesnantes"
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
            "name" => "Jardines de Nantes",
            "item" => "https://alayag82.kesug.com/nantes/jardines/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Jardín de Plantas",
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
            "name" => "¿Cuál es el horario del Jardín de Plantas de Nantes?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "El jardín está abierto todos los días de 8:30 a 19:00 durante el verano y de 9:00 a 18:00 en invierno."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Cuánto cuesta la entrada?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "El acceso al jardín es gratuito, pero algunas actividades educativas o visitas guiadas pueden tener coste adicional."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Se permite la entrada con mascotas?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "No se permite la entrada de mascotas para proteger las plantas y colecciones."
            ]
        ]
    ]
];
?>

<!-- Schema: BotanicalGarden -->
<script type="application/ld+json">
<?= json_encode($schema_garden, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: Breadcrumbs -->
<script type="application/ld+json">
<?= json_encode($schema_breadcrumbs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?= json_encode($schema_faq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>