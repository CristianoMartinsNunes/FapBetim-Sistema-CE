<?php      

include ("header-adm-relatorio.php");
include ("connection-MySql.php");
include ("session-user-sistema.php");

?>
    <h3>Lista de Relatórios</h3>
	<table class="table table-striped">
		
		<tr>
			<th>Código</th>
			<th>Título</th>
			<th></th>
		</tr>

        <tr> 
          <td>1</td> 
          <td>Certificado de participação no Evento</td> 
          <td>
          	<a class = "btn btn-primary" href="form-adm-relatorio-participante.php">Visualizar</a>
          </td>
        </tr>

        <tr> 
          <td>2</td> 
          <td>Certificado do Autor do Evento</td> 
          <td>
          	<a class = "btn btn-primary" href="form-adm-relatorio-autor.php">Visualizar</a>
          </td>
        </tr>        


      	<tr> 
          <td>3</td> 
          <td>Lista de Inscrição no Evento</td> 
          <td>
          	<a class = "btn btn-primary" href="form-adm-relatorio-inscricao.php">Visualizar</a>
          </td>
        </tr>
    
    </table>

<?php include("footer.php");?>

