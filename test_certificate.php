<?php

date_default_timezone_set('America/Sao_Paulo');
error_reporting(E_ALL ^ E_STRICT);
include_once('Pdf.php');
include_once('ElementRaw.php');


//loads a sample PDF file
$pdf = Farit_Pdf::load('sample_contract.pdf');

//attaches a digital certificate
//read the sample certificate file into a string
$certificate = file_get_contents('danilosong.pfx');
//password for the certificate
$certificatePassword = 'danilo123';

if (empty($certificate)) {
    throw new Zend_Pdf_Exception('Cannot open the certificate file');
}

$pdf->attachDigitalCertificate($certificate, $certificatePassword);

//here the digital certificate is inserted inside of the PDF document
$renderedPdf = $pdf->render();

file_put_contents('danilosong_assinado.pdf', $renderedPdf);




