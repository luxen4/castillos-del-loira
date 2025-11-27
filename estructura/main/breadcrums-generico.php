<!-- Breadcrumb a la izquierda -->
<ol class="flex flex-wrap items-center gap-2">
    <li><a href="/val-de-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">🏰 Val-de-Loire</a></li>
    <li class="text-gray-400">/</li>
    <li><a href="/val-de-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $carpeta; ?></a></li>
    <li class="text-gray-400">/</li>
    <li><a href="/val-de-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $localidad; ?></a></li>
    <li class="text-gray-400">/</li>
    <li><a href="<?= $url_breadcrums_second; ?>" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $bread_crums_second; ?></a></li>
    <li class="text-gray-400">/</li>
    <li><a href="/val-de-loire/chateaux/<?= $slug; ?>.php" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $nombreLugar; ?></a></li>
</ol>