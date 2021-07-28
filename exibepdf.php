<?php

define('FPDF_FONTPATH', 'font/');
require('./fpdf/fpdf.php');

//conex�o com banco de dados
$host="localhost";
$user="root";
$pass="root";
$banco="ERP_FAPBETIM_OFICIAL";
$conexao=mysqli_connect($host,$user,$pass,$banco);
//pesquisar na tabela

// para exibir todos os registrosuse esse select : $sql="SELECT * FROM users ";

$sql=("SELECT * FROM CEVENTO where idev = '1000036'"); //exibe o registro espec�fico
$busca = mysqli_query($conexao, $sql);


$pdf = new FPDF('L','cm','A4');

$pdf->AddPage();
//$pdf->SetFont('Courier','B',18);

// $pdf->Cell(27.6,2,'A Faculdade Pitágoras de Betim confere a',0,1,'C');


$pdf->Image('plano de fundo.png',0,0,0);


    // Select Arial bold 15
    $pdf->SetFont('Arial','B',15);
 /*   // Move to the right
    $pdf->Cell(80);
    // Framed title
    $pdf->Cell(30,10,'Title',1,0,'C');
    // Line break
    $pdf->Ln(20);*/

$pdf->Cell(10,10,('A Faculdade Pitagoras de Betim confere a CRISTIANO MARTINS NUNES vvvvvvvvvvvvvvvvv'),1,1,"C");
// Certificamos que CRISTIANO MARTINS NUNES concluiu os cursos a seguir, totalizando a carga horária estimada em 529 horas no período de 03/07/2018 a 03/09/2020.


// $pdf->Cell(27.6,1,'Certificamos que CRISTIANO MARTINS NUNES concluiu os cursos a seguir, totalizando a carga horária estimada em 529 horas no período de 03/07/2018 a 03/09/2020.',0,1,'C');




 //$pdf->Cell(40,40,'Minha primeira página pdf com FPDF',1,1,'C');


// 1 $pdf->Cell(140,10,('FACULDADE PIT�GORAS UNIDADE BETIM'),0,0,"C");


//exibir imagem no pdf
// $pdf->Image('logo.png',10,5,18,21,'PNG');
//$pdf->Image('bat.jpg',10,8,22);
$pdf->ln(15); // espa�amento entra linhas de 15 mm


$pdf->SetFont('Arial','B',12);
$pdf->Cell(300 , 7,'Nome',1,0,"C");
$pdf->Cell(300, 7,'Matr�cula',1,0,"C");
$pdf->ln(); //nenhum espa�amentos entre linhas


while ($resultado = mysqli_fetch_array($busca)) {

    
    $pdf->Cell(70, 7, $resultado['IDEV'],1,0,"C");
    $pdf->Cell(70, 7, $resultado['DTHR'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();
?>