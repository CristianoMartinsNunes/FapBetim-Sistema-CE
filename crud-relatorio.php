<?php

	function select_Cevento($conexao){

		$listaEvento = array();		
		$query = "SELECT * 
		            FROM CV_EVENTO
				ORDER BY TITULO";				
		$resultado = mysqli_query($conexao,$query);		
		while($evento = mysqli_fetch_assoc($resultado)){
			  array_push($listaEvento,$evento);
		}
		return $listaEvento;
	}

	function select_Cevento_Rel($conexao,$evento){
		$listaEvento = array();
		$query = "SELECT * 
		            FROM CV_EVENTO
				   WHERE IDEV = $evento";				
		$resultado = mysqli_query($conexao,$query);		
		while($evento = mysqli_fetch_assoc($resultado)){
			  array_push($listaEvento,$evento);
		}
		return $listaEvento;
	}

	function select_Cinscricao_Rel($conexao,$evento){
		$listaInscricao = array();		
		$query = "SELECT * 
		            FROM CV_INSCRICAO
				   WHERE EVENTO = $evento";				
		$resultado = mysqli_query($conexao,$query);		
		while($inscricao = mysqli_fetch_assoc($resultado)){
			  array_push($listaInscricao,$inscricao);
		}
		return $listaInscricao;
	}

	/* Certificado */
	function select_Ccertificado1_Rel($conexao,$evento,$pessoa){

		$listaCertificado = array();
		
		$query = "SELECT * 
		            FROM CV_CERTIFICADO
				   WHERE EVENTO = $evento
				   AND PESSOA = $pessoa";
				   
		$resultado = mysqli_query($conexao,$query);
		
		while($certificado = mysqli_fetch_assoc($resultado)){
			  array_push($listaCertificado,$certificado);
		}

		return $listaCertificado;
	}

	function select_Ccertificado2_Rel($conexao,$evento){

		$listaCertificado = array();
		
		$query = "SELECT * 
		            FROM CV_EVENTO
				   WHERE IDEV = $evento";
				   
		$resultado = mysqli_query($conexao,$query);
		
		while($certificado = mysqli_fetch_assoc($resultado)){
			  array_push($listaCertificado,$certificado);
		}

		return $listaCertificado;
	}


	function select_Ccertificado3_Rel($conexao,$inscricao,$pessoa){

		$listaCertificado = array();
		
		$query = "SELECT * 
		            FROM CV_CERTIFICADO
				   WHERE IDIE = $inscricao
				   AND PESSOA = $pessoa";
				   
		$resultado = mysqli_query($conexao,$query);
		
		while($certificado = mysqli_fetch_assoc($resultado)){
			  array_push($listaCertificado,$certificado);
		}

		return $listaCertificado;
	}


?>