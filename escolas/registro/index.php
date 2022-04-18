<?php
session_start();
include_once("conexaooo.php");
?>
<!DOCTYPE html>
<style>
  
</style>
<html lang="pt-br">
		<head>
	    <meta content='width=device-width' name='viewport' shrink-to-fit=no>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<h1>Clique em "Enviar" para mostrar seus dados:</h1>
		<form method="POST">
		<input type="text" placeholder="Insira o nome de usuário para mostrar seus dados" class="insert" name="nome" value='<?php echo $_SESSION["nome"] ?> ' readonly>
		<input type="submit" value="Enviar">
		</form>
		<h2>Seus Dados:</h2>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		$nome = filter_input(INPUT_POST, ('nome'), FILTER_SANITIZE_STRING);
		$result_usuarios = "SELECT * FROM dados WHERE nome = ('$nome')";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "Telefone: " . $row_usuario['telefone'] . "<br>";
			echo "Bairros: " . $row_usuario['bairros'] . "<br>";
			echo "Escolas: " . $row_usuario['escolas'] . "<br>";
			echo "Veiculo: " . $row_usuario['veiculo'] . "<br>";
			echo "Capacidade: " . $row_usuario['capacidade'] . "<br>";
			echo "Placa: " . $row_usuario['placa'] . "<br>";
			echo "Ano: " . $row_usuario['ano'] . "<br>";
			echo "CNH: " . $row_usuario['cnh'] . "<br>";
			echo "Validade: " . $row_usuario['validade'] . "<br>";
			echo "Endereço: " . $row_usuario['endereco'] . "<br>";	
			echo "Número: " . $row_usuario['numero'] . "<br>";
			echo "Complemento: " . $row_usuario['complemento'] . "<br>";
			echo "Bairro: " . $row_usuario['bairro'] . "<br>";
			echo "CEP: " . $row_usuario['cep'] . "<br>";
			echo "Email: " . $row_usuario['email'] . "<br>";
		    
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";
			echo "<a href='proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>Apagar</a><br><hr>";
		}
		
		 
		
		//Paginção - Somar a quantidade de usuários

		$resultado_pg = mysqli_query($conn, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>