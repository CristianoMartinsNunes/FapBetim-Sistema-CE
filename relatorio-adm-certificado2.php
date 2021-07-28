<?php

    include ("connection-MySql.php");
    include ("crud-relatorio.php");
    
    define('FPDF_FONTPATH', 'font/');
    require('./fpdf/fpdf.php');

    $pdf = new FPDF('L');
    $pdf->AddPage();
    $pdf->SetFont('Courier','',18);
    $pdf->Image('./image/certificado1.png',0,0,0);

    $listaEvento = select_Ccertificado2_Rel($conexao,$_POST["evento"]);

    $pdf->SetXY(23, 60);
    $pdf->Cell(10,10,'A Faculdade Pitágoras de Betim reconhece que ',0,1,'L');

    foreach($listaEvento as $evento):

        $pdf->SetX(23);
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,$evento['AUTOR'],0,0,"L");
        $pdf->SetFont('Courier','',18);
        $pdf->ln();

        $pdf->SetX(23);
        $pdf->Cell(95,10,'ministrou o evento de nº',0,0,'L');
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70,10,$evento['IDEV'],0,0,"L");
        $pdf->ln();

        
        $pdf->SetX(23);
        $pdf->Cell(70, 10,$evento['DESCRICAO']." - ".$evento['TITULO'],0,0,"L");
        $pdf->ln();
        $pdf->SetFont('Courier','',18);
        $pdf->SetX(23);
        $pdf->Cell(54, 10,'no período de',0,0,"L");
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,date("d/m/Y",strtotime($evento['DTINICIO']))." à ".date("d/m/Y",strtotime($evento['DTFIM'])),0,0,"L");
        $pdf->ln();
        $pdf->SetFont('Courier','',18);
        $pdf->SetX(23);
        $pdf->Cell(70, 10,'totalizando uma carga horária de '.substr($evento['CARGAHORARIA'],0,5).' hora(s).',0,0,"L");

    
    endforeach;    

   $pdf->Output();

?>