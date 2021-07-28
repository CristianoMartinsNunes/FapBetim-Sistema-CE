<?php

    include ("connection-MySql.php");
    include ("crud-relatorio.php");
    include ("session-user-sistema.php");
    
    define('FPDF_FONTPATH', 'font/');
    require('./fpdf/fpdf.php');

    $pdf = new FPDF('L');
    $pdf->AddPage();
    $pdf->SetFont('Courier','',18);
    $pdf->Image('./image/certificado1.png',0,0,0);

   $listaCertificado = select_Ccertificado3_Rel($conexao,$_POST["idx"],$_SESSION['CPF']);

    // Cabeçalho
    $pdf->SetXY(23, 60);
    $pdf->Cell(10,10,'A Faculdade Pitágoras de Betim confere à ',0,1,'L');

    foreach($listaCertificado as $certificado):

        $pdf->SetX(23);
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,$certificado['NOME'],0,0,"L");
        $pdf->SetFont('Courier','',18);
        $pdf->ln();
        
        $pdf->SetX(23);
        $pdf->Cell(83,10,'portador(a) do CPF nº',0,0,'L');
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,$certificado['PESSOA'],0,0,"L");
        $pdf->ln();

        $pdf->SetX(23);
        $pdf->SetFont('Courier','',18);
        $pdf->Cell(65,10,'o certificado nº',0,0,'L');
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,$certificado['CERTIFICADO'],0,0,"L");
        $pdf->ln();        

        $pdf->SetX(23);
        $pdf->SetFont('Courier','',18);
        $pdf->Cell(70, 10,'referente a participação no evento',0,0,"L");
        $pdf->SetFont('Courier','B',18);
        $pdf->ln(); 

        $pdf->SetX(23);
        $pdf->Cell(70, 10,$certificado['DESCRICAO']." - ".$certificado['TITULO'],0,0,"L");
        $pdf->ln();
        $pdf->SetFont('Courier','',18);
        $pdf->SetX(23);
        $pdf->Cell(54, 10,'no período de',0,0,"L");
        $pdf->SetFont('Courier','B',18);
        $pdf->Cell(70, 10,date("d/m/Y",strtotime($certificado['DTINICIO']))." à ".date("d/m/Y",strtotime($certificado['DTFIM'])),0,0,"L");
        $pdf->ln();
        $pdf->SetFont('Courier','',18);
        $pdf->SetX(23);
        $pdf->Cell(70, 10,'totalizando uma carga horária de '.substr($certificado['CARGAHORARIA'],0,5).' hora(s).',0,0,"L");
        

    endforeach;


  $pdf->Output();

?>