<?php

  include ("header-adm-relatorio.php");
  include ("connection-MySql.php");
  include ("crud-relatorio.php");
  include ("crud-sistema.php");
  
?>
  <h3>Relatório 1 - Certificado de participação no Evento</h3>
  <b>
	<form action="relatorio-adm-certificado1.php" method="post">

        <?php
            $listaEvento = select_Cevento($conexao);
            $listaPessoa = select_Gp($conexao);
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

    <input class="btn btn-primary" type="submit" value="Vizualizar"/>

  </form>