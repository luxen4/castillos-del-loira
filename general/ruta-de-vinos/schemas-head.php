<?php
// Variables imprescindibles
$url = $web_site . "/general/".$web_name_url. "/";
$title = $title ?? "Valle del Loira";
$description = $meta_description ?? "Guía completa de las rutas del Valle del Loira.";
?>

<!-- SCHEMAS SEO -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@graph" => [

        /* -------------------------------------------------
         * 1) Identidad del sitio
         * ------------------------------------------------- */
        [
            "@type" => "Organization",
            "@id" => $web_site . "#organization",
            "name" => "Val de Loire — Guía de rutas",
            "url" => $web_site,
            "logo" => $web_site . "/assets/logo.png"
        ],

        /* -------------------------------------------------
         * 2) Página actual
         * ------------------------------------------------- */
        [
            "@type" => "WebPage",
            "@id" => $url . "#webpage",
            "url" => $url,
            "name" => $title,
            "description" => $description,
            "inLanguage" => "es",
            "isPartOf" => [
                "@id" => $web_site . "#website"
            ],
            "datePublished" => date("c"),
            "dateModified" => date("c")
        ],

        /* -------------------------------------------------
         * 3) Breadcrumb
         * ------------------------------------------------- */
        [
            "@type" => "BreadcrumbList",
            "@id" => $web_site . "/general/".$web_name_url . "/" . "#breadcrumb",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Val de Loire",
                    "item" => $web_site
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Rutas",
                    "item" => $web_site . "/general/rutas-loire/"
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => "Vinos del Loira & Gastronomía",
                    "item" => $web_site . "/general/ruta-de-vinos/"
                ]
            ]
        ],

        /* -------------------------------------------------
         * 4) Ruta turística: Vinos del Loira
         * ------------------------------------------------- */
        [
            "@type" => "TouristTrip",
            "@id" => $url . "#tour",
            "name" => "Ruta de Vinos del Valle del Loira",
            "description" => "Bodegas emblemáticas, catas, gastronomía y paisajes del Valle del Loira.",
            "url" => $url,
            "inLanguage" => "es",
            "itemListElement" => [

                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "item" => [
                        "@type" => "Winery",
                        "name" => "Domaine de la Taille aux Loups",
                        "description" => "Chenin Blanc de carácter mineral.",
                        "url" => $url . "#domaine-taille"
                    ]
                ],

                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "item" => [
                        "@type" => "Winery",
                        "name" => "Caves Ambacia (Amboise)",
                        "description" => "Cuevas trogloditas del siglo XV y catas guiadas.",
                        "url" => $url . "#caves-ambacia"
                    ]
                ],

                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "item" => [
                        "@type" => "Winery",
                        "name" => "Domaine Huet (Vouvray)",
                        "description" => "Vinos biodinámicos de prestigio.",
                        "url" => $url. "#domaine-huet"
                    ]
                ],

                [
                    "@type" => "ListItem",
                    "position" => 4,
                    "item" => [
                        "@type" => "WebSite",
                        "name" => "Ruta Oficial de Vinos del Valle del Loira",
                        "url" => "https://www.vinsvaldeloire.fr/es"
                    ]
                ]

            ]
        ],

        /* -------------------------------------------------
         * 5) Website principal
         * ------------------------------------------------- */
        [
            "@type" => "WebSite",
            "@id" => $web_site . "#website",
            "url" => $web_site,
            "name" => "Guía del Valle del Loira",
            "publisher" => [
                "@id" => $web_site . "#organization"
            ],
            "inLanguage" => "es"
        ]

    ]
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>
