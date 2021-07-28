<?php

	
	function select_Gp($conexao){
		$listaPessoa = array();
		$query = "SELECT * 
		            FROM CV_GPESSOA ;";
		$resultado = mysqli_query($conexao,$query);
		while ($pessoa = mysqli_fetch_assoc($resultado)){
					array_push($listaPessoa,$pessoa);
		}
		return $listaPessoa;
	}




?>