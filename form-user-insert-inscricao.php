<?php

  include ("header-user-inscricao.php");
  include ("connection-MySql.php");
  include ("crud-evento.php");
  include ("crud-inscricao.php");
  include ("session-user-sistema.php");
  include ("crud-usuario.php");
  
?>
  <h3>Formulário de Cadastro de Inscrição</h3>
  <b>
	<form action="insert-user-inscricao.php" method="post">

        <?php
          
            $listaEvento = select_User_Ce($conexao);            
            $listaPessoa = select_Gpx($conexao,$_SESSION['CPF']);

        ?>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Número do CPF:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="cpf" value="<?=$listaPessoa['CPF']?> - <?=$listaPessoa['NOME']?>" readonly>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Título do Evento:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="evento" required>
          <?php foreach($listaEvento as $evento): ?>
                <option value="<?=$evento['IDEV']?>"><?=$evento['IDEV']?> - <?=$evento['TITULO']?></option>
          <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Frequência no Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="tipo" value="0 - AUSENTE" readonly>
    </div>



    <input class="btn btn-success" type="submit" value="Adicionar"/>
    <input class="btn btn-secondary" type="reset" value="Cancelar"/>

  </form>