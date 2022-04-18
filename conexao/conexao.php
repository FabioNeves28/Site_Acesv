<?php
	$servidor = "127.0.0.1";
	$usuario = "acesvc33_fabin";
	$senha = "midian12";
	$dbname = "acesvc33_escolas";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
