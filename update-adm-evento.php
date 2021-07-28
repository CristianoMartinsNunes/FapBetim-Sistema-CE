<?php

	include ("header-adm-evento.php");
	include ("connection-MySql.php");
    include ("crud-evento.php");
    include ("session-user-sistema.php");

    date_default_timezone_set('America/Sao_Paulo');
    $datehora = date('d-m-Y H:i');

    $id = $_POST['idev'];
    $tipo = $_POST["tipo"];
    $titulo = $_POST["titulo"];
	$autor = $_POST["autor"];
	$local = $_POST["local"];
	$qntvaga = $_POST["qntvaga"];
	$cargahoraria= $_POST["cargahoraria"];
	$dtinicio = $_POST["dtinicio"];
	$hrinicio = $_POST["hrinicio"];
	$dtfim = $_POST["dtfim"];
	$hrfim = $_POST["hrfim"];
	$numerolivro = $_POST["numerolivro"];
    $numerofolha = $_POST["numerofolha"];
    $status = $_POST["status"];
    
    if(update_Ce($conexao,$id,$tipo,$titulo,$autor,$local,$qntvaga,$cargahoraria,$dtinicio,$hrinicio,$dtfim,$hrfim,$numerolivro,$numerofolha,$status))
        {?>
            <h3><p class="text-success"> Evento Editado c/Sucesso!!!</p></h3>
            Tipo Evento: <?=$tipo;?><br>
            <hr>
            Título: <?=$titulo;?><br>
            Autor: <?=$autor;?><br>
            Local: <?=$local;?><br>
            <hr>
            Número de Vagas: <?=$qntvaga;?><br> 
            Carga Horária: <?=$cargahoraria;?><br>
            <hr>
            Data Início: <?=$dtinicio;?><br>
            Horário Início: <?=$hrinicio;?><br>
            Data Fim: <?=$dtfim;?><br>
            Horário Fim: <?=$hrfim;?><br>
            <hr>
            Número Livro: <?=$numerolivro;?><br>
            Número Folha: <?=$numerofolha;?><br>
            Data\Hora: <?=$datehora;?>
            <hr>
            Status Evento: <?=$status;?><br>
        <?php
    }
    else
        {
            $msg = mysqli_error($conexao);?>
            <?php echo $msg;?>
            <h3><b><p class="text-danger"> Evento Não Adicionado!!!</p></h3>
        <?php
        }

    include("footer.php");?>     


