
<!-- Enlace de Volver -->
<div class="flex justify-end pr-4">
    <a href="#" 
    onclick="volverYAtrasyCerrar(); return false;"
    class="text-blue-700 underline hover:text-blue-900 text-sm">
        ← Volver
    </a>
</div>    


<script>
function volverYAtrasyCerrar() {

    if (window.history.length > 1) {
        window.history.back();

        setTimeout(() => {
            window.close();
        }, 500);

    } else {
        // Fallback si el historial está vacío
        window.location.href = "/val-de-loire/index.php";

        setTimeout(() => {
            window.close();
        }, 500);
    }
}
</script>