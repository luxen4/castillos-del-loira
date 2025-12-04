
<!-- ➡️ ASIDE DERECHO (solo escritorio, con scroll independiente) -->
<aside class="hidden lg:block col-span-3">
    <div class="h-[80vh] overflow-y-auto pr-2 sticky top-24 custom-scroll">
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/val-de-loire/anuncios/get-your-guide/index.php'; ?>
    </div>
</aside>



<style>
    /* Scrollbar elegante */
    .custom-scroll::-webkit-scrollbar {
        width: 8px;
    }
    .custom-scroll::-webkit-scrollbar-track {
        background: #e5e7eb; /* gris claro */
        border-radius: 4px;
    }
    .custom-scroll::-webkit-scrollbar-thumb {
        background: #059669; /* emerald-600 */
        border-radius: 4px;
    }
    .custom-scroll::-webkit-scrollbar-thumb:hover {
        background: #047857; /* emerald-700 */
    }
</style>