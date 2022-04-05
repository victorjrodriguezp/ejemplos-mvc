<?php


// se importa la libreria dompdf
require_once 'lib/dompdf/autoload.inc.php';

// se instancia la libreria
$dompdf = new Dompdf\Dompdf();

$dompdf->loadHtml('<p>Hello World</p>'); // se le pasa el contenido html que se va imprimir
$dompdf->setPaper('A4', 'landscape');  // Se define el tamaño y horientacion - potrait, landscape

$dompdf->render(); // genera el pdf
$dompdf->stream("Archivo pdf", array("Attachment" => false)); // descarga el pdf
exit(0); // Termina el progama
