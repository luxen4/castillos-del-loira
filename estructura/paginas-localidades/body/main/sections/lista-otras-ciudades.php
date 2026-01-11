<!-- 🌆 Sección integrada en el contenido principal -->
<section id="ciudades" class="mt-10 text-gray-700 leading-relaxed">
    <h2 class="text-xl font-semibold text-gray-800 mb-4">🌆 Otras Ciudades del Valle del Loira</h2>

    <p class="mb-4">
        El Valle del Loira está salpicado de encantadoras ciudades que combinan historia, arte y paisajes únicos.
        Entre las más destacadas se encuentran
        <a href="/val-de-loire/localidades/amboise.php" class="text-emerald-700 hover:underline">Amboise</a>,
        conocida por su castillo real y su vínculo con Leonardo da Vinci;
        <a href="/val-de-loire/localidades/chateau-royal-de-blois/index.php" class="text-emerald-700 hover:underline">Blois</a>,
        con su imponente palacio renacentista y calles empedradas; y
        <a href="/val-de-loire/localidades/tours.php" class="text-emerald-700 hover:underline">Tours</a>,
        una animada ciudad universitaria con un precioso casco antiguo.
    </p>

    <?php if (!empty($relacionadas)): ?>
        <p class="mb-4">
            También puedes descubrir otras localidades cercanas que comparten la misma riqueza cultural y arquitectónica, como
            <?php
            $enlaces = [];
            foreach ($relacionadas as $rel) {
                $enlaces[] = '<a href="../localidades/' . $rel[1] . '" class="text-emerald-700 hover:underline">' . $rel[0] . '</a>';
            }
            echo implode(', ', array_slice($enlaces, 0, -1)) . ' y ' . end($enlaces) . '.';
            ?>
        </p>
    <?php endif; ?>

    <p>
        Cada una de estas ciudades ofrece una experiencia distinta del Loira,
        ya sea a través de sus castillos, jardines o su inconfundible estilo de vida francés.
    </p>
</section>