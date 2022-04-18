<?php
session_start();
include_once("conexaooo.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$bairros = filter_input(INPUT_POST, 'bairros', FILTER_SANITIZE_STRING);
$veiculo = filter_input(INPUT_POST, 'veiculo', FILTER_SANITIZE_STRING);
$capacidade= filter_input(INPUT_POST, 'capacidade', FILTER_SANITIZE_STRING);
$placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
$cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$usuarioo = filter_input(INPUT_POST, 'usuarioo', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO dados (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(isset($_POST['alicerce'])) {

$result_usuario = "INSERT INTO alicerce (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['reis'])) {
$result_usuario = "INSERT INTO reis (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['apae'])) {
$result_usuario = "INSERT INTO apae (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['apoio'])) {
$result_usuario = "INSERT INTO apoio (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['armando'])) {
$result_usuario = "INSERT INTO armando (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['artes'])) {
$result_usuario = "INSERT INTO artes (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['ateneu'])) {
$result_usuario = "INSERT INTO ateneu (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['batista'])) {
$result_usuario = "INSERT INTO batista (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['beneditino'])) {
$result_usuario = "INSERT INTO beneditino (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['caic'])) {
$result_usuario = "INSERT INTO caic (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['cambara'])) {
$result_usuario = "INSERT INTO cambara (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}


if(isset($_POST['caminhos'])) {
$result_usuario = "INSERT INTO caminhos (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['capellari'])) {
$result_usuario = "INSERT INTO capellari (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['carolina'])) {
$result_usuario = "INSERT INTO carolina (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['cascatinha'])) {
$result_usuario = "INSERT INTO cascatinha (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['castelinho'])) {
$result_usuario = "INSERT INTO castelinho (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['celula'])) {
$result_usuario = "INSERT INTO celula (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['constante'])) {
$result_usuario = "INSERT INTO constante (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['coracaozinho'])) {
$result_usuario = "INSERT INTO coracaozinho (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['cruz'])) {
$result_usuario = "INSERT INTO cruz (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['dom'])) {
$result_usuario = "INSERT INTO dom (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['duque'])) {
$result_usuario = "INSERT INTO duque (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['enio'])) {
$result_usuario = "INSERT INTO enio (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['ercilia_nogueira'])) {

$result_usuario = "INSERT INTO ercilia_nogueira (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['shalom'])) {

$result_usuario = "INSERT INTO shalom (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['trindade'])) {

$result_usuario = "INSERT INTO trindade (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['exemplo'])) {
$result_usuario = "INSERT INTO exemplo (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['exito'])) {
$result_usuario = "INSERT INTO exito (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['externato'])) {
$result_usuario = "INSERT INTO externato (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['fortecf'])) {
$result_usuario = "INSERT INTO fortecf (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['fortecpw'])) {
$result_usuario = "INSERT INTO fortecpw (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['gerando'])) {
$result_usuario = "INSERT INTO gerando (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['henrique'])) {
$result_usuario = "INSERT INTO henrique (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['integracao'])) {
$result_usuario = "INSERT INTO integracao (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['ita'])) {
$result_usuario = "INSERT INTO ita (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['jeani'])) {
$result_usuario = "INSERT INTO jeani (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['jeanik'])) {
$result_usuario = "INSERT INTO jeanik (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['jean'])) {
$result_usuario = "INSERT INTO jean (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['jonas'])) {
$result_usuario = "INSERT INTO jonas (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['kelma'])) {
$result_usuario = "INSERT INTO kelma (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['laura_filgueiras'])) {

$result_usuario = "INSERT INTO laura_filgueiras (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['leao'])) {
$result_usuario = "INSERT INTO leao (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['lider'])) {
$result_usuario = "INSERT INTO lider (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['lions'])) {
$result_usuario = "INSERT INTO lions (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['lobato'])) {
$result_usuario = "INSERT INTO lobato (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['lucio'])) {

$result_usuario = "INSERT INTO lucio (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['luiz'])) {
$result_usuario = "INSERT INTO luiz (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['luz'])) {
$result_usuario = "INSERT INTO luz (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['margarida_pinho'])) {

$result_usuario = "INSERT INTO margarida_pinho (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['maria'])) {
$result_usuario = "INSERT INTO maria (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['matteo'])) {
$result_usuario = "INSERT INTO matteo (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['matteob'])) {
$result_usuario = "INSERT INTO matteob (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['naha'])) {
$result_usuario = "INSERT INTO naha (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['nascimentoo'])) {
$result_usuario = "INSERT INTO nascimento (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['notre'])) {
$result_usuario = "INSERT INTO notre (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['objetivo'])) {
$result_usuario = "INSERT INTO objetivo (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['palavra'])) {
$result_usuario = "INSERT INTO palavra (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['pastor'])) {
$result_usuario = "INSERT INTO pastor (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['primo'])) {
$result_usuario = "INSERT INTO primo (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['privilegio'])) {
$result_usuario = "INSERT INTO privilegio (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['provincia'])) {

$result_usuario = "INSERT INTO provincia (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['raquel'])) {
$result_usuario = "INSERT INTO raquel (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['regina'])) {
$result_usuario = "INSERT INTO regina (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['republica'])) {
$result_usuario = "INSERT INTO republica (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['rocio'])) {
$result_usuario = "INSERT INTO rocio (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['saint'])) {
$result_usuario = "INSERT INTO saint (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['santa'])) {
$result_usuario = "INSERT INTO santa (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['saogabriel'])) {
$result_usuario = "INSERT INTO saogabriel (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['saopedro'])) {
$result_usuario = "INSERT INTO saopedro (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['saulo'])) {
$result_usuario = "INSERT INTO saulo (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['uniao'])) {
$result_usuario = "INSERT INTO uniao (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['verde'])) {
$result_usuario = "INSERT INTO verde (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['vovoli'])) {
$result_usuario = "INSERT INTO vovoli (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['vovorai'])) {
$result_usuario = "INSERT INTO vovorai (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if(isset($_POST['zulmira'])) {
$result_usuario = "INSERT INTO zulmira (nome, telefone, bairros,veiculo,capacidade,placa,ano,cnh,categoria,validade,
endereco,bairro,cep,numero,complemento,email, created) VALUES ('$nome', '$telefone','$bairros','$veiculo','$capacidade','$placa','$ano',
'$cnh','$categoria','$validade','$endereco','$bairro','$cep','$numero','$complemento','$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
}
if (empty($nome)){
    header("Location: registro.php");
  echo "Preencha o campo nome <br>'";
  	
} if (empty($telefone)){
echo "Preencha o campo Telefone <br>";
  	header("Location: registro.php");
}
if (empty($bairros)){
  echo "Preencha o campo Bairros <br>";
  	header("Location: registro.php");
}
if (empty($veiculo)){
  echo "Preencha o campo Veiculo <br>";
  	header("Location: registro.php");
}
if (empty($capacidade)){
  echo "Preencha o campo Capacidade <br>";
  	header("Location: registro.php");
}
if (empty($placa)){
  echo "Preencha o campo Placa <br>";
  	header("Location: registro.php");
}
if (empty($ano)){
  echo "Preencha o campo Ano <br>";
  	header("Location: registro.php");
}
if (empty($cnh)){
  echo "Preencha corretamente os dados de sua CNH <br>";
  	header("Location: registro.php");
}
if (empty($categoria)){
  echo "Preencha a Categoria de sua CNH <br>";
  	header("Location: registro.php");
}
if (empty($validade)){
  echo "Preencha a validade de sua CNH <br>";
  	header("Location: registro.php");
}
if (empty($bairro)){
  echo "Preencha o campo Bairro <br>";
  	header("Location: registro.php");
}
if (empty($cep)){
  echo "Preencha seu CEP corretamente <br>";
  	header("Location: registro.php");
}
if (empty($numero)){
  echo "Preencha corretamente o numero de sua residência <br>";
  	header("Location: registro.php");
}
if (empty($email)){
  echo "Preencha corretamente seu email <br>";
  	header("Location: registro.php");
}
          if(mysqli_insert_id($conn )){
	header("Location:  ../../index.html");
}
else{
    
}




		?>
