<?php

  include ("header-adm-relatorio.php");
  include ("connection-MySql.php");
  include ("crud-relatorio.php");
  
?>
  <h3>Relatório 2 - Certificado do Autor do Evento</h3>
  <b>
	<form action="relatorio-adm-certificado2.php" method="post">

        <?php
            $listaEvento = select_Cevento($conexao);
        ?>
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Título do Evento:</label>
        <select class="form-control" id="exampleFormControlSelect1" name="evento" required>
          <?php foreach($listaEvento as $evento): ?>
                <option value="<?=$evento['IDEV']?>"><?=$evento['IDEV']?> - <?=$evento['TITULO']?></option>
          <?php endforeach ?>
        </select>
    </div>

    <input class="btn btn-primary" type="submit" value="Vizualizar"/>

  </form>