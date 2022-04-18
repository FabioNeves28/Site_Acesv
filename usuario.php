<?php
	session_start();
if(!empty($_SESSION['id'])){
		
	
	}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <style>
        button {
            border-radius: 15px;
            padding: 10px 20px;
        }
    </style>
	<head>
	    <meta content='width=device-width' name='viewport' shrink-to-fit=no>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Área do Associado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="logo_atualizado.png" type="image/x-icon" />
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="973658282956-3bokoirfe3l55n22onsd1cu3sf3206p8.apps.googleusercontent.com">
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
      <link rel="stylesheet" href="css/icomoon.css">
     <link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-second-bar.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">







</head>
<style>
    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  margin-top:-25px;
}

/* Change the background color on mouse-over */
.header a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active/current link*/
.header a.active {
  background-color: dodgerblue;
  color: white;
   
}

/* Float the link section to the right */
.header-right {
  float: right;
}

/* Add media queries for responsiveness - when the screen is 500px wide or less, stack the links on top of each other */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}

    
</style>
	<body bgcolor="#07b2f8">
	<div class="header">
  <a href="index.html" class="logo"><img src="logo_atualizado.png" width=66 height=66 style="display:flex;"></a>
  <div class="header-right">
    <a class="active" href="escolas/registro/registro.php">Preencha seu cadastro</a>
    <a href="escolas/registro/index.php">Atualize seu cadastro</a>
    <a href="sair1.php">Sair</a>
  
  </div>
</div>
		<br><font color="black" style="Verdana" size=5><center>Sr. Transportadores, antes de levar seu veículo para as vistorias, faça uma breve avaliação geral em seu veiculo para facilitar o trabalho e agilizar seu tempo nos órgãos fiscalizadores, sendo assim segue abaixo principais.</center><br><br>
		<font style="Verdana" size=5><ul> <b><u>Download da lista dos documentos nescessários:</U> <br><br></b>
<li>DETRAN - Requerimento de vistoria:</li>	<form method="get" action="requerimento.pdf">	<button class="btn"><i class="fa fa-download"></i> Download</button></form>
<li>DETRAN - Protocolo de entrega de documentos:</li>	<form method="get" action="protocolo.pdf">	<button class="btn"><i class="fa fa-download"></i> Download</button></form>
<li>SETRANS/DETRAN - Relação de documentos para vistoria:</li>	<form method="get" action="folha.pdf">	<button class="btn"><i class="fa fa-download"></i> Download</button></form>
<li>Decreto 4386-A. Trata sobre o transporte escolar no município:</li>	<form method="get" action="decreto.pdf">	<button class="btn"><i class="fa fa-download"></i> Download</button></form>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></ul>
<b><h4>Acesse seu banco, entre na opção PIX, selecione a opção de ler QR Code <br>e pague apontando sua câmera para aqui:</h4></b>
<img src="qrcode.png" width="150" height="150" style="margin-right:50px;">
		<center><U>ITENS ANALISADOS ANTES DA VISTORIA</u></font></center><br>
   

	<font color="black" style="Verdana" size=4>	<li>Faróis (alto e baixo)</li> 
		
<li>Lanternas.</li>
<li>Piscas.</li>
<li>Água no reservatório do limpador do para-brisa.</li>
<li>O limpador de para-brisa deverá estar em pleno funcionamento.</li>
<li>Luz de freios.</li>
<li>Pisca Alerta.</li>
<li>Pneus (não poderão estar com desgastes laterais e deverá estar com limite de borracha acima do limite para troca)</li>
<li>Lâmpada capela (são as luzes que ficar nas quatro extremidades do carro, lembrando que as dianteira podem ser amarela ou branca e as traseiras vermelhas).</li>
<li>Faixas refletivas, devem estar com boa visibilidade e no sentido orientado pelo Detran</li>
<li>Os cintos de segurança deveram estar afivelados e em conformidade com a lotação do veículo.</li>
<li>A faixa que fica ao redor do veiculo (amarela), deve estar com boa tonalidade e seguindo também seguindo a normativa do Detran.</li>
<li>O veiculo deverá com boa aparência de Higine. </li>
<li>As janelas deveram estar também  em conformidade com o que determina o Detran, deverá estar com espaçamento de 10 centímetros.</li>
<li>O extirnor tem que estar dentro de sua validade.</li>
<center> <br><BR><b><u><font  style="Arial" size=5>
<font size=5 style="Arial">
<center> <br><br><b><u>CALENDÁRIO DE VISTORIA ESCOLAR </u></center><br></font>
<font size=4 style="Arial"></center>
<li><b>Final 1</b> - primeira quinzena de Fevereiro e de Agosto.</li>
<li><b>Final 2</b> - segunda quinzena de Fevereiro e de Agosto.</li>
<li><b>Final 3</b> - primeira quinzena de Março e de Setembro.</li>
<li><b>Final 4</b> - segunda quinzena de Março e de Setembro.</li>
<li><b>Final 5</b> - primeira quinzena de Abril e Outubro.</li>
<li><b>Final 6</b> - segunda quinzena de Abril e Outubro.</li>
<li><b>Final 7</b> - primeira quinzena de Maio e Novembro.</li>
<li><b>Final 8</b> - segunda quinzena de Maio e Novembro.</li>
<li><b>Final 9</b> - primeira quinzena de Junho e Dezembro.</li>
<li><b>Final 0</b> - segunda quinzena de Junho e Dezembro.</li></font>

<ul>Para contatar o Suporte: <a href='mailto:contato@acesv.com.br'></ul>
<font size=4 style="Arial" color="black">
<li><u>Email Aqui</u></a></li>

	</body>
</html>