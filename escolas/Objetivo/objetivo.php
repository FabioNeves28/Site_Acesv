<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Transportadores Disponíveis</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    <link rel="stylesheet" href="css/ionicons.min.css">
</head>
<style>
iframe{
border-radius:40px;
}
</style>
<body>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
	<center>
		<h1>Tios Disponíveis</h1></center>
		<div class='container-table100'>
		
			<div class='wrap-table100'>
					<div class='table'>

						<div class='row header'>
							<div class='cell'>
								Nome do Transportador
							</div>
							<div class='cell'>
								Telefone
							</div>
							<div class='cell'>
								Bairros
							</div>
						</div>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg= 200 ;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM objetivo LIMIT   $inicio, $qnt_result_pg  ";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		 
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
		
			echo "
					<div class='row'>
							<div class='cell' data-title='Nome do Transportador'> " . $row_usuario['nome'] . "</div>";
			echo "	<div class='cell' data-title='Telefone'>
								
						
											
		 " . $row_usuario['telefone'] . "</div>";
		
			echo "<div class='cell' data-title='Bairros'>
	 " . $row_usuario['bairros'] . "</div></div>";
		
		}
		
	
		
?>	
	</body>
</html>

                       						