<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
//Recoger lo que se va a inprimir
ob_start();
require_once 'pdfnew.php';
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output('Pdf_hoy.pdf');