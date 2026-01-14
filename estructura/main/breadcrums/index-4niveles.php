<!-- Breadcrumb a la izquierda -->
<ol class="flex flex-wrap items-center gap-2">
    <li><a href="/val-de-loire/" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors">🏰 Val-de-Loire</a></li>
    <li class="text-gray-400">/</li>
    <li><a href="/val-de-loire/index.php#localidades-principales" class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $breadcrums_nivel_2; ?></a></li>
    <li class="text-gray-400">/</li>
    <li><a href=<?php echo "/val-de-loire/localidades/" .$slug; ?> class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $breadcrums_nivel_3; ?></a></li>
    <li class="text-gray-400">/</li>
    <li><a href=<?php echo "/val-de-loire/localidades/" .$slug. "/alojamientos" ?> class="font-semibold text-blue-700 hover:text-blue-900 transition-colors"><?= $breadcrums_nivel_4; ?></a></li>
</ol>