<?php
// Variables para la sección "Consejos" del Castillo de Amboise
$section_consejos = [
    "id" => "consejos",
    "titulo" => "📌 Consejos",
    "contenido" => '
        <ul class="list-disc list-inside space-y-1 text-gray-700">
            <li>Sube a las terrazas para disfrutar de las mejores vistas del río Loira.</li>
            <li>Visita también la capilla de Saint-Hubert, donde descansan los restos de Leonardo da Vinci.</li>
            <li>Dedica tiempo a recorrer el pueblo de Amboise, lleno de encanto e historia.</li>
            <li>Evita las horas centrales del día en verano; el sol puede ser intenso en las terrazas.</li>
        </ul>
    '
];
?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "/val-de-loire/estructura/main/sections/consejos/template-consejos-generico.php"; ?>
