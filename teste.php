<?php
define('FPDF_FONTPATH', 'font/');
require('./fpdf/fpdf.php');

include ("connection-MySql.php");

//conexão com banco de dados 
/*
$host="fapbetim.mysql.dbaas.com.br";
$user="fapbetim";
$pass="Z@!*_n:=#/C}9]";
$banco="fapbetim";
$conexao=mysqli_connect($host,$user,$pass,$banco);*/
//pesquisar na tabela*/


//$conexao = mysqli_connect("fapbetim.mysql.dbaas.com.br","fapbetim","Z@!*_n:=#/C}9]","fapbetim");
//$conexao = mysqli_connect("localhost:3306","root","root","ERP_FAPBETIM_OFICIAL");

$codigo = $_POST["evento"];


// exibe todos os registros $sql="SELECT * FROM CEVENTO";
//exibe o registro específico




$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Courier','',10);

//$pdf->SetX(35);


$sql=("select * from cv_inscricao where evento = $codigo order by evento, nome");
$busca = mysqli_query($conexao, $sql);


$sql2=("select * from Cv_evento where idev = $codigo");
$busca2 = mysqli_query($conexao, $sql2);




// Cabeçalho
$pdf->Cell(193,6,'FACULDADE PITÁGORAS - UNIDADE BETIM',1,1,"C");



	$pdf->Cell(193,6,'# LISTA DE INSCRIÇÃO EVENTO # ',1,1,"C");

	
	
	$resultado2 = mysqli_fetch_array($busca2);


$pdf->Cell(193, 6, "Evento: ".$resultado2['DESCRICAO'],1,0,"L");	
    $pdf->ln();	

$pdf->Cell(193, 6, "Código: ".$resultado2['IDEV'],1,0,"L");
	    $pdf->ln();	

    $pdf->Cell(193, 6, "Título: ".$resultado2['TITULO'],1,0,"L");	
	    $pdf->ln();	

    $pdf->Cell(193, 6, "Autor: ".$resultado2['AUTOR'],1,0,"L");	
	    $pdf->ln();	

        $pdf->Cell(193, 6, "Data\Hora: ".$resultado2['DTINICIO']."  ".$resultado2['HRINICIO'],1,0,"L");	
	    $pdf->ln();	

		
$pdf->Cell(10, 6,'Nº',1,0,"C");


$pdf->Cell(13, 6,'INSC',1,0,"C");
$pdf->Cell(100, 6,'Nome',1,0,"C");
$pdf->Cell(70, 6,'Assinatura',1,0,"C");
//$pdf->SetX(50);


$i = 1;

while ($resultado = mysqli_fetch_array($busca)) {

    $pdf->ln();
	$pdf->Cell(10, 6, $i++,1,0,"C");
    $pdf->Cell(13, 6, $resultado['IDIE'],1,0,"C");
	$pdf->Cell(100, 6, $resultado['NOME'],1,0,"L");
	$pdf->Cell(70, 6,'',1,0,"C");
 //   $pdf->SetX(35);
 //   $pdf->Cell(60, 5, $resultado['NOME']);
 //   $pdf->SetX(50);
    
}




$pdf->Output();
?>