<?php
// Require composer autoloder.
require __DIR__.'/vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;

	$myfile = $_FILES['myfile'];

        Settings::setPdfRendererName(Settings::PDF_RENDERER_DOMPDF);
        // Any writable directory here. It will be ignored.
        Settings::setPdfRendererPath('.');

        $phpWord = IOFactory::load($myfile['tmp_name'], 'Word2007');
        $pdfName = rand().'.pdf';
        $phpWord->save('converted/'.$pdfName, 'PDF');
        header("Location: /converted/".$pdfName);
        die();
	?>
