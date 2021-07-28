<?php

	include ("header-adm-inscricao.php");
  	include ("connection-MySql.php");
  	include ("crud-evento.php");
  	include ("crud-sistema.php");
  	include ("crud-inscricao.php");
    include ("session-user-sistema.php");

  	date_default_timezone_set('America/Sao_Paulo');
    $datehora = date('d-m-Y H:i');  

    $evento = $_POST['evento'];
    $inscricao = $_POST["inscricao"];
    $pessoa = $_POST["pessoa"];
    $status = $_POST["status"];


    if(update_Ci($conexao,$evento,$pessoa,$inscricao))
        {?>
            <h3><p class="text-success"> Inscrição Editada c/Sucesso!!!</p></h3>
            Código do Evento: <?=$evento;?><br>
            <hr>
            Número do CPF: <?=$pessoa;?><br>
            Número de Inscrição: <?=$inscricao;?><br>
            <hr>
            Frequência no Evento: <?=$status;?><br> 
            <hr>
            Data\Hora: <?=$datehora;?>
        <?php
    }
    else
        {
            $msg = mysqli_error($conexao);?>
            <?php echo $msg;?>
            <h3><b><p class="text-danger"> Inscrição Não Editada!!!</p></h3>
        <?php
        }

    include("footer.php");?>     
