<?php
session_start();
 include_once("conexao.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Transportador</title>		
	</head>
	<script>
	    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
	</script>
	<style>
	    .multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
	</style>
	<body>
		
	<center>
		<h1>Olá, <?php 
		echo   $_SESSION['nome']?></h1>
		
		<h2>Cadastrar Transportador</h2>
		

		<form method="POST" action="proc_cad_usuarioo.php">
		  <form>
			<label>Nome: </label><br>
			
			<input type="text" name="nome" placeholder="Digite o nome do transportador"><br><br>
			
			<label>Telefone: </label><br>
			<input type="text" name="telefone" placeholder="Digite o telefone"><br><br>
			<label>Digite os bairros separados por virgula: </label><br>
			<input type="text" name="bairros" placeholder="Digite os bairros"><br><br>
    <br>
       <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Selecione...</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      <label for="one">
        <input type="checkbox" id="one" name="alicerce"/>Alicerce</label>
      <label for="two">
        <input type="checkbox" id="two" name="reis"/>Antônio Fernandes de Reis</label>
     
    </div>
  </div>
        <br><br>
    

				
 <input type="submit" value="Cadastrar">
		</form>
			</center>
		</form>
		
	</body>
</html>