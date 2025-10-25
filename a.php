<?php
require_once('tcpdf_min/tcpdf.php'); // Asegúrate de descargar TCPDF y poner la ruta correcta

// Crear el PDF
$pdf = new TCPDF();
$pdf->SetCreator('Valle del Loira');
$pdf->SetAuthor('Valle del Loira');
$pdf->SetTitle('Guía Cicloturística Orléans - Meung-sur-Loire');
$pdf->SetSubject('Rutas cicloturísticas Valle del Loira');

// Quitar encabezado y pie
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->AddPage();

// Contenido del PDF
$html = '
<h1>Ruta Cicloturística: Orléans — Meung-sur-Loire</h1>
<p><strong>Distancia:</strong> 28 km</p>
<p><strong>Dificultad:</strong> Fácil</p>
<p><strong>Tipo:</strong> Familiar / paseo</p>
<p><strong>Puntos de interés:</strong></p>
<ul>
<li>Pont George V (inicio)</li>
<li>Área de descanso Saint-Ay</li>
<li>Meung-sur-Loire (final)</li>
</ul>
<p>¡Disfruta tu ruta!</p>
';

// Escribir contenido HTML
$pdf->writeHTML($html, true, false, true, false, '');

// Forzar descarga
$pdf->Output('guia-cicloturistica-orleans-meung.pdf', 'D'); // 'D' fuerza descarga
