<?php

	include ("header-adm-evento.php");
	include ("connection-MySql.php");
	include ("crud-evento.php");
	include ("session-user-sistema.php");
?>

	<h3>Lista de Eventos</h3>

<?php
	
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
	?>
		<h3><b><p class="text-danger"> Justificativa de Ponto Excluida c/Sucesso!!!</p></h3>	
	<?php
	} ?>

	<table class="table table-striped">
		
		<tr>
			<th> Código </th>
			<th> Tipo </th>
			<th> Título </th>
			<th> Autor </th>
			<th> Local </th>
			<th> Nº Vaga </th>
			<th> Carga Horária </th>
			<th> Data Início </th>
			<th> Hora Início </th>
			<th> Data Fim </th>
			<th> Hora Fim </th>
			<th> Nº Livro </th>
			<th> Nº Folha </th>
			<th> Data\Hora Registro</th>
			<th> Status Evento</th>
			<th> </th>
		</tr>
<?php

	$pessoa = $_SESSION["CPF"];
	$listaEvento = select_Ce($conexao);
    
    foreach($listaEvento as $evento):
?>
		<tr>
			<td><?= $evento['IDEV'] ?></td>
			<td><?= $evento['DESCRICAO'] ?></td>
			<td><?= $evento['TITULO'] ?></td>
			<td><?= $evento['AUTOR'] ?></td>
			<td><?= $evento['LOCAL'] ?></td>
			<td><?= $evento['QNTVAGA'] ?></td>
			<td><?= $evento['CARGAHORARIA'] ?></td>
			<td><?= $evento['DTINICIO'] ?></td>
			<td><?= $evento['HRINICIO'] ?></td>
			<td><?= $evento['DTFIM'] ?></td>
			<td><?= $evento['HRFIM'] ?></td>
			<td><?= $evento['NUMEROLIVRO'] ?></td>
			<td><?= $evento['NUMEROFOLHA'] ?></td>
			<td><?= $evento['DTHR'] ?></td>
			<td><?= $evento['STATUS'] ?></td>			
			<td>
				<a class = "btn btn-warning" 
				   href="form-adm-update-evento.php?id=<?=$evento['IDEV']?>">Editar</a>
			</td>

		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>