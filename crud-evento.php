<?php

	function insert_Ce($conexao,$tipo,$titulo,$autor,$local,$qntvaga,$cargahoraria,$dtinicio,$hrinicio,$dtfim,$hrfim,$numerolivro,$numerofolha){
		$query = "INSERT INTO CEVENTO (TIPO,TITULO,AUTOR,LOCAL,QNTVAGA,CARGAHORARIA,DTINICIO,HRINICIO,DTFIM,HRFIM,NUMEROLIVRO,NUMEROFOLHA,DTHR,STATUS)
		               VALUES ('{$tipo}','{$titulo}','{$autor}','{$local}','{$qntvaga}','{$cargahoraria}','{$dtinicio}','{$hrinicio}','{$dtfim}','{$hrfim}','{$numerolivro}','{$numerofolha}',NOW(),1)";
	    return mysqli_query($conexao,$query);
    }

	function select_Ce($conexao){
		$listaEvento = array();
		$query = "SELECT * 
		            FROM CV_EVENTO
		        ORDER BY TITULO";
		$resultado = mysqli_query($conexao,$query);
		while ($evento = mysqli_fetch_assoc($resultado)){
					array_push($listaEvento,$evento);
		}
		return $listaEvento;
	}

	function select_Status_Ce($conexao){
		$listaEvento = array();
		$query = "SELECT * 
		            FROM CV_EVENTO
		           WHERE IDSE = 1		            
		        ORDER BY TITULO";
		$resultado = mysqli_query($conexao,$query);
		while ($evento = mysqli_fetch_assoc($resultado)){
					array_push($listaEvento,$evento);
		}
		return $listaEvento;
	}

	function select_User_Ce($conexao){
		$listaEvento = array();
		$query = "SELECT * 
		            FROM CV_EVENTO
		        WHERE IDSE = 1
		        ORDER BY STATUS, DESCRICAO, TITULO";
		$resultado = mysqli_query($conexao,$query);
		while ($evento = mysqli_fetch_assoc($resultado)){
					array_push($listaEvento,$evento);
		}
		return $listaEvento;
	}



	function update_Ce($conexao,$id,$tipo,$titulo,$autor,$local,$qntvaga,$cargahoraria,$dtinicio,$hrinicio,$dtfim,$hrfim,$numerolivro,$numerofolha,$status){
		$query = "UPDATE CEVENTO 
				     SET TIPO = '{$tipo}',
					   TITULO = '{$titulo}',
					    AUTOR = '{$autor}',
						LOCAL = '{$local}',
					  QNTVAGA = '{$qntvaga}',
				 CARGAHORARIA = '{$cargahoraria}',
				     DTINICIO = '{$dtinicio}',
					 HRINICIO = '{$hrinicio}',
					    DTFIM = '{$dtfim}',
						HRFIM = '{$hrfim}',
				  NUMEROLIVRO = '{$numerolivro}',
				  NUMEROFOLHA = '{$numerofolha}',
				         DTHR = NOW(),
				       STATUS = '{$status}'
		        WHERE IDEV = '{$id}'";
	    return mysqli_query($conexao,$query);
    }


	function selectUpdate_Ce($conexao,$id){	
		$query = "SELECT * 
		            FROM CEVENTO 
		           WHERE IDEV = '{$id}'";
		
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}




?>