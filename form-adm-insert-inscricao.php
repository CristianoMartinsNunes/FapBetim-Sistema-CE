<?php

  include ("header-adm-inscricao.php");
  include ("connection-MySql.php");
  include ("crud-evento.php");
  include ("crud-sistema.php");
  include ("crud-inscricao.php");
  
?>
  <h3>Formulário de Cadastro de Inscrição</h3>
  <b>
	<form action="insert-adm-inscricao.php" method="post">

        <?php
            $listaEvento = select_Status_Ce($conexao);
            $listaPessoa = select_Gp($conexao);
            $listaStatus = select_Cs($conexao);
        ?>
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Título do Evento:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="evento" required>
          <?php foreach($listaEvento as $evento): ?>
                <option value="<?=$evento['IDEV']?>"><?=$evento['IDEV']?> - <?=$evento['TITULO']?></option>
          <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Número do CPF:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="cpf" required>
          <?php foreach($listaPessoa as $pessoa): ?>
                <option value="<?=$pessoa['CPF']?>"><?=$pessoa['CPF']?> - <?=$pessoa['NOME']?></option>
          <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Frequência no Evento:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="frequencia" required>
          <?php foreach($listaStatus as $status): ?>
                <option value="<?=$status['IDSI']?>"><?=$status['IDSI']?> - <?=$status['STATUS']?></option>
          <?php endforeach ?>
        </select>
    </div>

    <input class="btn btn-success" type="submit" value="Adicionar"/>
    <input class="btn btn-secondary" type="reset" value="Cancelar"/>

  </form>