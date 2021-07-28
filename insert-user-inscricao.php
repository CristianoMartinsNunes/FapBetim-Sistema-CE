<?php

	include ("header-user-inscricao.php");
	include ("connection-MySql.php");
  	include ("crud-evento.php");
  	include ("crud-inscricao.php");
  	include ("session-user-sistema.php");

	date_default_timezone_set('America/Sao_Paulo');
    $datehora = date('d-m-Y H:i');

    $evento     = $_POST["evento"];
    $frequencia = 0;

	if(insert_Ci($conexao,$_POST["evento"],$_SESSION['CPF'],$frequencia))
		{?>
			<h3><p class="text-success"> Inscrição Adicionada c/Sucesso!!!</p></h3>
			Evento Número: <?=$evento;?><br>
			<hr>
		    Número CPF: <?=$_SESSION['CPF'];?><br>
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