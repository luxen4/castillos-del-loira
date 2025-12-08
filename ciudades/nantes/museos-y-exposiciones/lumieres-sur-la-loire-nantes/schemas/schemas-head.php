<?php
/* ==========================================================================
   SCHEMA.ORG – Lumières sur la Loire
   JSON-LD para SEO avanzado (Evento, Breadcrumb, FAQ)
   ========================================================================== */

$schema_event = [
    "@context" => "https://schema.org",
    "@type" => "Event",
    "name" => "Lumières sur la Loire",
    "description" => "Espectáculo nocturno de luz y sonido a lo largo del río Loira en Nantes.",
    "startDate" => "2025-06-01T21:00",
    "endDate" => "2025-09-30T23:00",
    "eventAttendanceMode" => "https://schema.org/OfflineEventAttendanceMode",
    "eventStatus" => "https://schema.org/EventScheduled",
    "location" => [
        "@type" => "Place",
        "name" => "Río Loira, Nantes",
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Quais de la Fosse y Château des Ducs de Bretagne",
            "addressLocality" => "Nantes",
            "addressRegion" => "Loira Atlántico",
            "postalCode" => "44000",
            "addressCountry" => "FR"
        ],
        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => 47.2184,
            "longitude" => -1.5536
        ]
    ],
    "image" => $imagenHero,
    "url" => "https://www.immersia-spectacle.fr/",
    "offers" => [
        "@type" => "Offer",
        "url" => "https://www.immersia-spectacle.fr/",
        "price" => "0",
        "priceCurrency" => "EUR",
        "availability" => "https://schema.org/InStock",
        "validFrom" => "2025-05-01T12:00"
    ],
    "performer" => [
        "@type" => "PerformingGroup",
        "name" => "Immersia Spectacle"
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
            "name" => "Eventos en Nantes",
            "item" => "https://alayag82.kesug.com/nantes/eventos/"
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "Lumières sur la Loire",
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
            "name" => "¿Cuándo se realiza Lumières sur la Loire?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Entre junio y septiembre, al anochecer. Las fechas exactas se publican cada año en la web oficial."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Dónde se lleva a cabo el espectáculo?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "A lo largo del río Loira, especialmente en los muelles y alrededor del Château des Ducs de Bretagne en Nantes."
            ]
        ],
        [
            "@type" => "Question",
            "name" => "¿Es gratuito?",
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => "Sí, el acceso general al espectáculo es gratuito. Algunas actividades complementarias pueden requerir reserva."
            ]
        ]
    ]
];
?>

<!-- Schema: Event -->
<script type="application/ld+json">
<?= json_encode($schema_event, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: Breadcrumbs -->
<script type="application/ld+json">
<?= json_encode($schema_breadcrumbs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?= json_encode($schema_faq, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
