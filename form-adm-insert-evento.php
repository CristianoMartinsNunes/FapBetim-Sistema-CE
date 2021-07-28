<?php

	include ("header-adm-evento.php");
	include ("connection-MySql.php");
  include ("crud-evento.php");

?>
  <h3>Formulário de Cadastro de Evento</h3>
  <b>
	<form action="insert-adm-evento.php" method="post">

    <div class="form-group">
      <label for="exampleFormControlSelect1">Status do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="status" value="1 - ABERTO"readonly>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlSelect1">Tipo Evento:</label>
      <select class="form-control" id="exampleFormControlSelect1" name="tipo" required>
        <option value="0" disabled selected>Selecione o Tipo de Evento</option>
        <option value="1">1 - CONGRESSO</option>
        <option value="2">2 - CURSO</option>
        <option value="3">3 - MESA-REDONDA</option>
        <option value="4">4 - PALESTRA</option>
        <option value="5">5 - SEMINÁRIO</option>
        <option value="6">6 - SIMPÓSIO</option>
        <option value="7">7 - WORKSHOP</option>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Título do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo"placeholder="Informe o Título Completo do Evento" required>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlInput1">Autor do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="autor"placeholder="Informe o Nome Completo do Autor do Evento" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Local do Evento:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="local"placeholder="Informe o Local do Evento" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número de Vagas:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="qntvaga" min="1" max="1000"placeholder="Informe o Número de Vagas do Evento" required>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlInput1">Carga Horária do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="cargahoraria" min="1" max="1000"placeholder="Informe o Número de Horas do Evento" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Data do Início do Evento:</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="dtinicio" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Horário de Início do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="hrinicio"required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Data do Fim do Evento:</label>
      <input type="date" class="form-control" id="exampleFormControlInput1" name="dtfim" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Horário do Fim do Evento:</label>
      <input type="time" class="form-control" id="exampleFormControlInput1" name="hrfim" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número do Livro de Registro de Evento:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="numerolivro" min="1" max="10000" placeholder="Informe o Número do Livro de Registro de Evento" required>
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Número da Folha do Livro de Registro de Evento:</label>
      <input type="number" class="form-control" id="exampleFormControlInput1" name="numerofolha" min="1" max="10000" placeholder="Informe o Número da Folha Número do Livro de Registro de Evento" required>
    </div>

    <input class="btn btn-success" type="submit" value="Adicionar"/>
    <input class="btn btn-secondary" type="reset" value="Cancelar"/>

  </form>