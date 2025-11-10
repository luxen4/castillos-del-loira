<!-- 🏙️ CIUDADES PRINCIPALES -->
<?php 
// Datos de ciudades (variables centralizadas). Pasarlo a un archivo .csv si crece mucho
$ciudades = [
    [
        "nombre" => "Nantes",
        "desc"   => "Capital cultural del oeste francés. Hogar de <em>Les Machines de l'île</em> y del castillo de los Duques de Bretaña.",
        "href"   => "/val-de-loire/ciudades/Nantes.php"
    ],
    [
        "nombre" => "Angers",
        "desc"   => "Ciudad medieval famosa por su imponente castillo y el Tapiz del Apocalipsis, la obra textil medieval más grande del mundo.",
        "href"   => "/val-de-loire/ciudades/Angers.php"
    ],
    [
        "nombre" => "Saumur",
        "desc"   => "Elegante ciudad junto al Loira, conocida por sus vinos espumosos y su escuela de equitación <em>Cadre Noir</em>.",
        "href"   => "/val-de-loire/ciudades/Saumur.php"
    ],
    [
        "nombre" => "Tours",
        "desc"   => "Ciudad universitaria y vibrante, punto de partida perfecto para recorrer los castillos del Valle del Loira.",
        "href"   => "/val-de-loire/ciudades/Tours.php"
    ],
    [
        "nombre" => "Blois",
        "desc"   => "Encantadora ciudad histórica con calles medievales y el <em>Château Royal de Blois</em>, antiguo hogar de reyes franceses.",
        "href"   => "/val-de-loire/ciudades/Blois.php"
    ],
    [
        "nombre" => "Orleans",
        "desc"   => "Ciudad estrechamente ligada a Juana de Arco; catedral gótica, plazas amplias y paseos junto al Loira.",
        "href"   => "/val-de-loire/ciudades/Orleans.php"
    ],
];
?>
<!-- Renderizado -->
<section id="ciudades-principales" class="mt-10">
    <h3 class="text-2xl font-bold text-gray-700 mb-4">🏙️ Ciudades principales del Valle del Loira</h3>
    <p class="text-gray-600 mt-2 text-sm md:text-base">
        Descubre las ciudades más importantes a lo largo del río Loira.
        Cada una posee un encanto especial: historia medieval, castillos, gastronomía y cultura francesa.
    </p>

    <?php foreach ($ciudades as $ciudad): ?>
        <article class="mt-4">
            <header>
                <h4 class="font-semibold text-gray-800 mb-1"><?= $ciudad['nombre'] ?></h4>
            </header>

            <p class="text-gray-600 text-sm mb-3">
                <?= $ciudad['desc'] ?>
                <a href="<?= $ciudad['href'] ?>" class="text-emerald-700 hover:underline ml-1">
                    ➤ Más info…
                </a>
            </p>
        </article>
    <?php endforeach; ?>
</section>