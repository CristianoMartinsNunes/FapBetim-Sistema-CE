<?php

	include ("connection-MySql.php");
	include ("crud-usuario.php");

	$pessoa = select_Gp($conexao,$_POST["usuario"],$_POST["senha"]);
	
	if($pessoa == null)
	{
		header('Location:form-erro.php');
	}
	else{
			$usuario = array();
			$usuario = $pessoa;

			session_start();
			$_SESSION["CPF"]   =  $usuario["CPF"];
			$_SESSION["SENHA"] =  $usuario["SENHA"];
			
			// Usuário Docente
			if($usuario["TIPO"]==8)
			{
				header('Location:desktop-user.php');
			}
			else{
					header('Location:desktop-adm.php');
			    }	
		}

?>