<?php
session_start();
include_once("conexaooo.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$bairros = filter_input(INPUT_POST, 'bairros', FILTER_SANITIZE_STRING);

if(isset($_POST['alicerce'])) {

$result_usuario = "INSERT INTO alicerce (nome, telefone, bairros, created) VALUES ('$nome', '$telefone','$bairros', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['reis'])) {
    $result_usuario = "INSERT INTO reis (nome, telefone, bairros, created) VALUES ('$nome', '$telefone','$bairros', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location:  cadastro_alicerce.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cadastro_alicerce.php");
}
