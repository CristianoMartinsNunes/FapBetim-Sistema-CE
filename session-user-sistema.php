<?php

	// Inicia a Sessão 
	session_start();

	// Valida Sessão o CPF e Senha na sessão
    if(!isset($_SESSION['CPF']) and !isset($_SESSION['SENHA'])) 
	{
		session_destroy();
		unset ($_SESSION['CPF']);
		unset ($_SESSION['SENHA']);
		header('location:index.html');
	}

?>