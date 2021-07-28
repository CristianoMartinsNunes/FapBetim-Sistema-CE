<?php

	include ("header-adm-inscricao.php");
	include ("connection-MySql.php");
  	include ("crud-evento.php");
  	include ("crud-sistema.php");
  	include ("crud-inscricao.php");

	date_default_timezone_set('America/Sao_Paulo');
    $datehora = date('d-m-Y H:i');

    $evento     = $_POST["evento"];
    $cpf        = $_POST["cpf"];
    $frequencia = $_POST["frequencia"];

	if(insert_Ci($conexao,$_POST["evento"],$_POST["cpf"],$_POST["frequencia"]))
		{?>
			<h3><p class="text-success"> Inscrição Adicionada c/Sucesso!!!</p></h3>
			Evento Número: <?=$evento;?><br>
			<hr>
		    Número CPF: <?=$cpf;?><br>
		    Frequência: <?="AUSENTE - Aguarda a lista de presença do evento.";?><br>
		    <hr>
			Data\Hora: <?=$datehora;?>
		<?php
	}
	else
		{
			$msg = mysqli_error($conexao);?>
			<?php echo $msg;   ?>
			<h3><b><p class="text-danger"> Evento Não Adicionado!!!</p></h3>
		<?php
		}
	
	include("footer.php");?> 