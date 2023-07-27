<?php

// Include the main TCPDF library (search for installation path).
require_once 'tcpdf_include.php';

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set default header data
//$pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 009', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    include_once dirname(__FILE__).'/lang/eng.php';
    $pdf->setLanguageArray($l);
}

// set JPEG quality
$pdf->setJPEGQuality(100);

// Image method signature:
// Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)
if($_POST) {


    foreach($_POST['images'] as $img){
        $pdf->AddPage('');
        $pdf->Image($img, '', '', 0, 0, '', '', 'T', true, 2400, '', false, false, 1, true, false, true);
    }
}


// $pdf->AddPage();
$date = date("YmdHis");
// //$pdf->Image('images/2.jpeg', 0, 0, 152, 0, 'jpeg', '', '', true, 300);
// $pdf->Image('images/2.jpeg', '', '', 0, 0, '', '', 'T', true, 300, '', false, false, 1, false, false, true);
// $pdf->AddPage();
// $pdf->Image('images/image_demo.jpg', '', '', 0, 0, '', '', 'T', false, 300, '', false, false, 1, false, false, true);

//Close and output PDF document
$pdf->Output($date.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
