<?php

	function select_Cs($conexao){
		$listaStatus = array();
		$query = "SELECT * 
		            FROM CSTATUSINSCRICAO;";
		$resultado = mysqli_query($conexao,$query);
		while ($status = mysqli_fetch_assoc($resultado)){
					array_push($listaStatus,$status);
		}
		return $listaStatus;
	}

	function insert_Ci($conexao,$evento,$cpf,$frequencia){

		$query = "INSERT INTO CINSCRICAOEVENTO (EVENTO,PESSOA,DTHR1,STATUS,DTHR2,CERTIFICADO,CHAVE,DTHR3)		
		               VALUES ('{$evento}','{$cpf}',NOW(),0,NULL,NULL,NULL,NULL)";
	    return mysqli_query($conexao,$query);
    }


	function select_Ci($conexao){
		$listaInscricao = array();
		$query = "SELECT * 
		            FROM CV_INSCRICAO";
		$resultado = mysqli_query($conexao,$query);
		while ($inscricao = mysqli_fetch_assoc($resultado)){
					array_push($listaInscricao,$inscricao);
		}
		return $listaInscricao;
	}

	function select_User_Ci($conexao,$cpf){
		$listaInscricao = array();
		$query = "SELECT * 
		            FROM CV_INSCRICAO WHERE PESSOA = '{$cpf}'";
		$resultado = mysqli_query($conexao,$query);
		while ($inscricao = mysqli_fetch_assoc($resultado)){
					array_push($listaInscricao,$inscricao);
		}
		return $listaInscricao;
	}


	function selectUpdate_Ci($conexao,$id){	
		$query = "SELECT * 
		            FROM CV_INSCRICAO 
		           WHERE IDIE = '{$id}'";
		
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}


	function update_Ci($conexao,$evento,$pessoa,$inscricao){

	$query = "CALL CP_EMISSAO_CERTIFICADO('{$evento}','{$pessoa}','{$inscricao}')";	    
	    return mysqli_query($conexao,$query);
    }

	function delete_Ci($conexao,$id){
		$query = "DELETE 
		            FROM CINSCRICAOEVENTO 
		           WHERE IDIE = '{$id}'
		           AND STATUS = 0
		           AND DTHR2 IS NULL";
		mysqli_query($conexao,$query);		
		return mysqli_query($conexao,$query);
	}    