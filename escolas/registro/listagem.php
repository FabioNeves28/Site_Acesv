<?php
session_start();
include_once("conexaooo.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if(isset($_POST['nome'])) {

$result_usuario = "SELECT * FROM caminhos WHERE nome = ('$nome'))";
$resultado_usuario = mysqli_query($conn, $result_usuario);

	header("Location:  index.php");
}

