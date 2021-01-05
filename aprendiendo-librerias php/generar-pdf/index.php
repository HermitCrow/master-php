<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
$html = "<h1>Hola Mundo desde una libreria de php para hacer PDFS</h1>";
$html.="<p>Hola nay ña ña.</p>";
$html2pdf->writeHTML($html);
$html2pdf->output('Pdf_hoy.pdf');