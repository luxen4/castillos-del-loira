<?php //$slug = "chambord"; ?>
<?php
// Obtiene el nombre del archivo actual sin extensión
$slug = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

// Convierte la primera letra en minúscula si quieres un slug estándar
$slug = strtolower($slug);

// Ahora $slug contendrá "blois"
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/paginas-castillos/html-castillos-generico.php"; ?>