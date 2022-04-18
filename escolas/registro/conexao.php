<?php
//Arquivo de conexão com o banco de dados
	$servidor = "127.0.0.1";
	$usuario = "acesvc33_fabin";
	$senha = "midian12";
	$banco_dados = "acesvc33_bd_sistema_login";

	//Cria a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco_dados);
?>