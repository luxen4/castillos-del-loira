<?php
header("Content-Type: application/xml; charset=UTF-8");
$baseUrl = "http://playas2024.kesug.com/val-de-loire/";
$fechaHoy = date("Y-m-d");

// Lista de castillos
$castillos = [    
    "Amboise.php",
    "Azay-le-Rideau.php",    
    "Blois.php",
    "Chambord.php",
    "Chamerolles.php",    
    "Chaumont.php",    
    "Chenonceau.php",    
    "Cheverny.php",
    "Chinon.php",    
    "Clos-Luce.php",
    "Duques-de-Bretaña.php",
    "Langeais.php",
    "Sully-sur-loire.php",
    "Ussé.php",
    "Villandry.php"
];

// Lista de ciudades
$ciudades = [
    "Amboise.php",
    "Angers.php",    
    "Blois.php",
    "Chinon.php",
    "Nantes.php",
    "Saumur.php",   
    "Orleans.php",
    "Saumur.php",
    "Tours.php"
];

$lugares_interes = [
    "orleans" => [
        "catedral-de-la-sainte-croix.php",
        "iglesia-de-san-nicolas.php",
        "mUssé-d-arts-de-nantes.php"
    ],
    "chamerolles" => [
        "chamerolles.php"
    ],
    "montsoreau" => [
        "montsoreau.php"
    ]
];


echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <?php foreach($castillos as $castillo): ?>
    <url>
        <loc><?= $baseUrl ."chateaux/". $castillo ?></loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <?php endforeach; ?>

    <?php foreach($ciudades as $ciudad): ?>
    <url>
        <loc><?= $baseUrl ."ciudades/". $ciudad ?></loc>
        <lastmod><?= $fechaHoy ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <?php endforeach; ?>

<?php foreach($lugares_interes as $ciudad => $lugares): ?>
    <?php foreach($lugares as $archivo): ?>
        <url>
            <loc><?= $baseUrl ."ciudades/". $ciudad . "/lugares-interesantes/" . $archivo ?></loc>
            <lastmod><?= $fechaHoy ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    <?php endforeach; ?>
<?php endforeach; ?>

</urlset>

