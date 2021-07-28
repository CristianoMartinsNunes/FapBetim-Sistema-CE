<?php

    include ("connection-MySql.php");
    include ("crud-relatorio.php");
    
    define('FPDF_FONTPATH', 'font/');
    require('./fpdf/fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Courier','',10);

    $listaEvento = select_Cevento_Rel($conexao,'1000031');
    $listaInscricao = select_Cinscricao_Rel($conexao,'1000031');

    // Cabeçalho
    $pdf->Cell(193,6,'FACULDADE PITÁGORAS - UNIDADE BETIM',1,1,"C");
	$pdf->Cell(193,6,'# LISTA DE INSCRIÇÃO EVENTO # ',1,1,"C");

    foreach($listaEvento as $evento):

        $pdf->Cell(193, 6, "Evento: ".$evento['DESCRICAO'],1,0,"L");	
        $pdf->ln();	
        $pdf->Cell(193, 6, "Código: ".$evento['IDEV'],1,0,"L");
        $pdf->ln();	
        $pdf->Cell(193, 6, "Título: ".$evento['TITULO'],1,0,"L");	
        $pdf->ln();	
        $pdf->Cell(193, 6, "Autor: ".$evento['AUTOR'],1,0,"L");	
        $pdf->ln();	
        $pdf->Cell(193, 6, "Data\Hora: ".$evento['DTINICIO']."  ".$evento['HRINICIO'],1,0,"L");	
        $pdf->ln();	        
    
    endforeach;

    $pdf->Cell(10, 6,'Nº',1,0,"C");
    $pdf->Cell(13, 6,'INSC',1,0,"C");
    $pdf->Cell(100, 6,'Nome',1,0,"C");
    $pdf->Cell(70, 6,'Assinatura',1,0,"C");

    $i = 1;

    foreach($listaInscricao as $inscricao):

        $pdf->ln();
        $pdf->Cell(10, 6, $i++,1,0,"C");
        $pdf->Cell(13, 6, $inscricao['IDIE'],1,0,"C");
        $pdf->Cell(100, 6, $inscricao['NOME'],1,0,"L");
        $pdf->Cell(70, 6,'',1,0,"C");        
    
    endforeach;

    $pdf->Output();

?>