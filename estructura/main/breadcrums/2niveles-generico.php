<!-- Breadcrumb a la izquierda — 2 niveles -->
<nav aria-label="breadcrumb">
    <ol id="breadcrum" class="flex flex-wrap items-center gap-2 text-sm">

        <li>
            <a href="/val-de-loire/" 
               class="font-semibold text-emerald-700 hover:text-emerald-900 transition">
                🏰 Val de Loire
            </a>
        </li>

        <li class="text-gray-400">/</li>

        <li>
            <a href="/val-de-loire/general/rutas-loire/" 
               class="font-semibold text-emerald-700 hover:text-emerald-900 transition">
                Rutas
            </a>
        </li>



<?php if (($web_name != "")) : ?>
    <li class="text-gray-400">/</li>
    <li>
        <a href="/val-de-loire/general/<?= htmlspecialchars($web_name_url) ?>/" 
           class="font-semibold text-emerald-700 hover:text-emerald-900 transition">
            <?= htmlspecialchars($web_name) ?>
        </a>
    </li>
<?php endif; ?>



    </ol>
</nav>
