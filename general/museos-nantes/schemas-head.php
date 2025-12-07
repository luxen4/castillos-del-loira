<!-- JSON-LD SEO -->
<script type="application/ld+json">
<?= json_encode([
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "Museos de Nantes",
    "description" => "Descubre los museos más importantes de Nantes: arte, historia, cultura marítima y espacios interactivos para todas las edades.",
    "url" => $web_site . "museos-de-nantes",
    "datePublished" => date('c'),
    "dateModified" => date('c'),
    "itemListElement" => [

        // 1. Musée d’Arts de Nantes
        [
            "@type" => "ListItem",
            "position" => 1,
            "item" => [
                "@type" => "Museum",
                "name" => "Musée d’Arts de Nantes",
                "description" => "El museo de arte más importante de Nantes, con obras del siglo XIII al XXI.",
                "url" => $web_site . "museos-de-nantes#museum-arts"
            ]
        ],

        // 2. Château des Ducs de Bretagne - Musée d’Histoire de Nantes
        [
            "@type" => "ListItem",
            "position" => 2,
            "item" => [
                "@type" => "Museum",
                "name" => "Musée d’Histoire de Nantes",
                "description" => "Museo de la historia de Nantes dentro del Castillo de los Duques de Bretaña.",
                "url" => $web_site . "museos-de-nantes#museum-chateau"
            ]
        ],

        // 3. Les Machines de l’Île
        [
            "@type" => "ListItem",
            "position" => 3,
            "item" => [
                "@type" => "Museum",
                "name" => "Les Machines de l’Île",
                "description" => "Espacio artístico único con máquinas gigantes como el Gran Elefante.",
                "url" => $web_site . "museos-de-nantes#machines"
            ]
        ],

        // 4. Musée Jules Verne
        [
            "@type" => "ListItem",
            "position" => 4,
            "item" => [
                "@type" => "Museum",
                "name" => "Musée Jules Verne",
                "description" => "Museo dedicado a la vida y obra del escritor nacido en Nantes.",
                "url" => $web_site . "museos-de-nantes#jules-verne"
            ]
        ],

        // 5. Musée d’Histoire Naturelle de Nantes
        [
            "@type" => "ListItem",
            "position" => 5,
            "item" => [
                "@type" => "Museum",
                "name" => "Museo de Historia Natural de Nantes",
                "description" => "Colecciones de zoología, mineralogía y paleontología.",
                "url" => $web_site . "museos-de-nantes#historia-natural"
            ]
        ],

        // 6. Musée Naval Maillé-Brézé
        [
            "@type" => "ListItem",
            "position" => 6,
            "item" => [
                "@type" => "Museum",
                "name" => "Museo Naval Maillé-Brézé",
                "description" => "Museo naval situado dentro de un auténtico barco destructor.",
                "url" => $web_site . "museos-de-nantes#naval"
            ]
        ],

    ]
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<?php /* 
    <h2 id="museum-arts">Musée d’Arts de Nantes</h2>
<h2 id="museum-chateau">Musée d’Histoire de Nantes (Castillo)</h2>
<h2 id="machines">Les Machines de l'Île</h2>
<h2 id="jules-verne">Musée Jules Verne</h2>
<h2 id="historia-natural">Museo de Historia Natural de Nantes</h2>
<h2 id="naval">Museo Naval Maillé-Brézé</h2>
Ver si corresponden los enlaces con la web y el schemas*/