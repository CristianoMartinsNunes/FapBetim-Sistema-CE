<?php 
	
  include ("header-adm-inscricao.php");
  include ("connection-MySql.php");
  include ("crud-evento.php");
  include ("crud-sistema.php");
  include ("crud-inscricao.php");

	$inscricao = $_POST['idx'];
	delete_Ci($conexao,$inscricao);
	header("Location: select-user-inscricao.php?removido=true");
	die();

?>