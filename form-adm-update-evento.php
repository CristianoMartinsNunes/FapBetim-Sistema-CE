<?php

	include ("header-adm-evento.php");
	include ("connection-MySql.php");
	include ("crud-evento.php");

	$idce = $_GET["id"];
  $evento = selectUpdate_Ce($conexao,$idce);
  
?>
  <h3>Formulário de Edição de Evento</h3>
  <b>
	<form action="update-adm-evento.php" method="post">
    
	
	  <div class="form-group">
      <label for="exampleFormControlSelect1">Código do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="idev" value="<?=$evento['IDEV']?>"readonly>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Status do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="status" value="<?=$evento['STATUS']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tipo" value="<?=$evento['TIPO']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Título do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo" value="<?=$evento['TITULO']?>">
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlInput1">Autor do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="autor" value="<?=$evento['AUTOR']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Local do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="local" value="<?=$evento['LOCAL']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número de Vagas:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="qntvaga" value="<?=$evento['QNTVAGA']?>">
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlInput1">Carga Horária do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="cargahoraria" value="<?=$evento['CARGAHORARIA']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Data do Início do Evento:</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="dtinicio" value="<?=$evento['DTINICIO']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Horário de Início do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="hrinicio" value="<?=$evento['HRINICIO']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Data do Fim do Evento:</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="dtfim" value="<?=$evento['DTFIM']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Horário do Fim do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="hrfim" value="<?=$evento['HRFIM']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número do Livro de Registro de Evento:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="numerolivro" value="<?=$evento['NUMEROLIVRO']?>">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número da Folha do Livro de Registro de Evento:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="numerofolha" value="<?=$evento['NUMEROFOLHA']?>">
    </div>
          
		  			<input class="btn btn-success" type="submit" value="Confirmar"/>
              
    </form>

<?php include("footer.php");?>