<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Transportador</title>		
	</head>
	<body>
		
		<h1>Cadastrar Tio</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		 include_once('conexao.php'); 
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome do tio"><br><br>
			
			<label>Número: </label>
			<input type="text" name="telefone" placeholder="Digite o telefone do transportador"><br><br>
			<label>Bairros </label>
			<input type="text" name="bairros" placeholder="Digite os bairros"><br><br>
				<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>