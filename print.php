<?php
require './vendor/autoload.php';

use Dompdf\Dompdf;

$pdf = new Dompdf();
$pdf->loadHtml('<h1>hello world</h1>');

$pdf->setPaper('A4', 'portrait');

$pdf->render();

$pdf->stream();

