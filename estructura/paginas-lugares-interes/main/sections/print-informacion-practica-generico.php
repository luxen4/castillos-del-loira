<section id="informacion-practica">
    <h2 class="text-3xl font-bold text-emerald-700 mt-6"><?= $info_titulo ?></h2>
    <ul class="list-disc list-inside pl-6 mt-4 space-y-2">
        <?php foreach($info_detalles as $detalle): ?>
            <li><?= $detalle ?></li>
        <?php endforeach; ?>
    </ul>
    <p class="mt-2"><?= $info_mas ?> 
    <a href="<?= $web_oficial ?>" target="_blank" rel="nofollow noopener noreferrer" style="<?= $info_web_estilo ?>"><?= $info_web_texto ?></a>.
    </p>
</section>

