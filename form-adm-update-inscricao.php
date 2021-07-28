<?php

  include ("header-adm-inscricao.php");
  include ("connection-MySql.php");
  include ("crud-evento.php");
  include ("crud-sistema.php");
  include ("crud-inscricao.php");

  $idie = $_GET["id"];
  $inscricao = selectUpdate_Ci($conexao,$idie);

?>

  <h3>Formulário de Edição de Inscrição</h3>
  <b>
	<form action="update-adm-inscricao.php" method="post">

		<div class="form-group">
	      <label for="exampleFormControlSelect1">Código do Evento:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="evento" value="<?=$inscricao['EVENTO']?>"readonly>
	    </div>		

		<div class="form-group">
	      <label for="exampleFormControlSelect1">Título do Evento:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?=$inscricao['TITULO']?>"readonly>
	    </div>

		<div class="form-group">
	      <label for="exampleFormControlSelect1">Inscrição Número:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="inscricao" value="<?=$inscricao['IDIE']?>"readonly>
	    </div>

		<div class="form-group">
	      <label for="exampleFormControlSelect1">Data\Hora:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?=$inscricao['DTHR1']?>"readonly>
	    </div>




		<div class="form-group">
	      <label for="exampleFormControlSelect1">Número do CPF:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="pessoa" value="<?=$inscricao['PESSOA']?>"readonly>
	    </div>

		<div class="form-group">
	      <label for="exampleFormControlSelect1">Nome:</label>
	      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?=$inscricao['NOME']?>"readonly>
	    </div>

	    <div class="form-group">
	      <label for="exampleFormControlSelect1">Frequência no Evento:</label>
	      <select class="form-control" id="exampleFormControlSelect1" name="status" required>
	        <option value="1">1 - PRESENTE</option>
	        <option value="0">0 - AUSENTE</option>
	      </select>
	    </div>

		 <input class="btn btn-success" type="submit" value="Confirmar"/>

	</form>