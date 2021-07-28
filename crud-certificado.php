<?php
        
        
        function select_User_Ci($conexao,$pessoa){
            $listaInscricao = array();
            $query = "SELECT * 
                        FROM CV_INSCRICAO
                       WHERE PESSOA = $pessoa";

            $resultado = mysqli_query($conexao,$query);
            while ($inscricao = mysqli_fetch_assoc($resultado)){
                        array_push($listaInscricao,$inscricao);
            }
            return $listaInscricao;
        }





?>