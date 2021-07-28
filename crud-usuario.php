<?php

	function select_Gp($conexao,$cpf,$senha){

		$senhaMd5 = md5($senha);

		$query = "SELECT * 
		            FROM GPESSOA INNER JOIN GPESSOASISTEMA
		                         ON GPESSOA.CPF = GPESSOASISTEMA.PESSOA
                   WHERE GPESSOA.CPF = '{$cpf}'
                     AND GPESSOA.SENHA = '{$senhaMd5}'
                     AND GPESSOA.STATUS = '1'
                     AND GPESSOASISTEMA.SISTEMA = '2'";

		$resultado = mysqli_query($conexao,$query);		
		$usuario =  mysqli_fetch_assoc($resultado);

		return $usuario;
	}

	function select_Gpx($conexao,$pessoa){


		$query = "SELECT * 
		            FROM GPESSOA 
                   WHERE GPESSOA.CPF = '{$pessoa}'";

		$resultado = mysqli_query($conexao,$query);		
		$usuario =  mysqli_fetch_assoc($resultado);

		return $usuario;
	}



?>