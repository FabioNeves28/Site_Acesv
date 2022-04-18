<?php
session_start();
include_once("conexaooo.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM dados WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Transportador</title>		
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
	<script>
    $(document).ready(function () { 
        var $campo = $("#cpf");
        $campo.mask('00000000000', {reverse: true});
    });
    

</script>
	<body>
	
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		?>
		<script>
 function mascara(i,t){
   
   var v = i.value;
   
   if(isNaN(v[v.length-1])){
      i.value = v.substring(0, v.length-1);
      return;
   }
   
   if(t == "data"){
      i.setAttribute("maxlength", "10");
      if (v.length == 2 || v.length == 5) i.value += "/";
   }

   if(t == "cpf"){
      i.setAttribute("maxlength", "14");
      if (v.length == 3 || v.length == 7) i.value += ".";
      if (v.length == 11) i.value += "-";
   }

   if(t == "cnpj"){
      i.setAttribute("maxlength", "18");
      if (v.length == 2 || v.length == 6) i.value += ".";
      if (v.length == 10) i.value += "/";
      if (v.length == 15) i.value += "-";
   }

   if(t == "cep"){
      i.setAttribute("maxlength", "9");
      if (v.length == 5) i.value += "-";
   }

   if(t == "tel"){
      if(v[0] == 9){
         i.setAttribute("maxlength", "10");
         if (v.length == 5) i.value += "-";
      }else{
         i.setAttribute("maxlength", "9");
         if (v.length == 4) i.value += "-";
      }
   }
}
</script>
		<form method="POST" action="proc_edit_usuario.php">
		    <label>Nome Completo:</label>
		   <input type="text" name="nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			 <label for="campo4">CPF</label>
<input oninput="mascara(this, 'cpf')" id="campo4" type="text" class="form-control" placeholder="Ex.: xxx.xxx.xxx-xx" autocomplete="off" 
value="<?php echo $row_usuario['cpf'];?>" name="cpf">
<br><br>
		   
		   <label for="campo3">Data de Nascimento</label>
<input oninput="mascara(this, 'data')" id="campo3" type="text" class="form-control" placeholder="Ex.: dd/mm/aaaa" autocomplete="off" 
value="<?php echo $row_usuario['data_nascimento'];?>" name="data_nascimento"><br><br>
			  <label>Veiculo</label>   
		    <input type="text" name="veiculo" placeholder="Digite seu Veiculo" value="<?php echo $row_usuario['veiculo']; ?>"><br><br>
		    <label>Capacidade:</label>   
		    <input type="number" name="capacidade"  maxlength="2" class="capacidadee" value="<?php echo $row_usuario['capacidade']; ?>"><br><br>
		    <label>Placa:</label>   
		    <input type="text" name="placa" id="placa" placeholder="Digite sua placa" class="placaa" value="<?php echo $row_usuario['placa']; ?>"> 
		    <br><br>
		    <label>Ano:</label>
		     <input type="number" name="ano" placeholder="Digite o ano do seu Veiculo" class="anoo" value="<?php echo $row_usuario['ano']; ?>"><br><br>
		    <label>Validade:</label> 
		    
		    <input type="text" name="validade" placeholder="Digite a validade de sua CNH" value="<?php echo $row_usuario['validade']; ?>"><br><br>
		    <label>Endereco Completo:</label>   
		    <input type="text" name="endereco" placeholder="Digite seu endereco" value="<?php echo $row_usuario['endereco']; ?>"><br><br>
		   <label>Numero:</label>   
		    <input type="text" name="numero" placeholder="Digite o numero de sua casa" value="<?php echo $row_usuario['numero']; ?>"><br><br>
		    <label>Complemento:</label>   
		    <input type="text" name="complemento" placeholder="Digite seu complemento (não obrigatório)" value="<?php echo $row_usuario['complemento']; ?>"><br><br>  
		    
		    <label>Bairro:</label>   
		    <input type="text" name="bairro" placeholder="Digite seu bairro" value="<?php echo $row_usuario['bairro']; ?>"><br><br>
		    <script>
		            $(document).ready(function () { 
        var $campo = $("#cep");
        $campo.mask('00000000', {reverse: true});
    });
    

		    </script>
		    <label>CEP:</label>   
		    <input type="text" name="cep"  id="cep" placeholder="Digite seu CEP" value="<?php echo $row_usuario['cep']; ?>">
		   </div><br><div class="ultima"><br>
			
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['email']; ?>"><br><br>
				<label>Telefone: </label>
			<input type="text" name="telefone" placeholder="Digite o telefone do transportador" value="<?php echo $row_usuario['telefone'];?>"><br><br>
			<label>Digite os bairros que voce atende separados por virgula: </label>
			<input type="text" name="bairros" placeholder="Digite os bairros" value="<?php echo $row_usuario['bairros'];?>"></div><br>
			   
          </div></div>
			<input type="submit" value="Editar">
		</form>
	</body>
</html>