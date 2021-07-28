<?php

	include ("header-user-inscricao.php");
	include ("connection-MySql.php");
	include ("crud-inscricao.php");
	include ("session-user-sistema.php");
?>

	<h3>Lista de Inscrições</h3>

<?php
	
	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){
	?>
		<h3><p class="text-danger"> Inscrição Excluida c/Sucesso!!!</p></h3>	
	<?php
	} ?>

	<table class="table table-striped">
		
		<tr>
			<th> Código </th>
			<th> Título </th>
			<th> Nº Cpf </th>
			<th> Nome </th>
			<th> Inscrição </th>
			<th> Data </th>
			<th> Frequência </th>
			<th> Registro </th>
			<th> Status Evento </th>
			<th>  </th>
		</tr>
<?php
	$listaInscricao = select_User_Ci($conexao,$_SESSION['CPF']);
    foreach($listaInscricao as $inscricao):
?>
		<tr>
			<td><?= $inscricao['EVENTO'] ?></td>
			<td><?= $inscricao['TITULO'] ?></td>
			<td><?= $inscricao['PESSOA'] ?></td>
			<td><?= $inscricao['NOME'] ?></td>
			<td><?= $inscricao['IDIE'] ?></td>
			<td><?= $inscricao['DTHR1'] ?></td>
			<td><?= $inscricao['STATUS'] ?></td>
			<td><?= $inscricao['MSG2'] ?></td>	
			<td><?= $inscricao['STATUSEV'] ?></td>	
			<td>
				<form action="delete-user-inscricao.php" method = "post">
					<input type="hidden" name="idx" value="<?=$inscricao['IDIE']?>">
					<button class="btn btn-danger">Excluir</button> 
				</form>
			</td>

		</tr>
	<?php
		endforeach
	?>

</table>

<?php include("footer.php");?>