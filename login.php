<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login do Associado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet"></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
   <body>
       <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a href="index.html" class="navbar-brand text-uppercase font-weight-bold"><img src="logo_atualizado.png" width="80" height="70" class="foto_logo"></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse"><font color="black">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#about" class="nav-link text-uppercase font-weight-bold">Sobre</a></li>
                    <li class="nav-item"><a href="fotos.html" class="nav-link text-uppercase font-weight-bold">Fotos</a></li>
                    <li class="nav-item"><a href="https://www.facebook.com/acesv.condutor.7" class="nav-link text-uppercase font-weight-bold">Facebook</a></li>
                    <li class="nav-item"><a href="mailto:fabioalvesneves@gmail.com" class="nav-link text-uppercase font-weight-bold">Fale conosco</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link text-uppercase font-weight-bold">Área do Associado</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header></font>
<style>
    .fixed-top{
    background-color: #07b2f8;
    height:100px;
    
}
.foto_logo{
    margin-top:-25px;
}
font{
    color:black;
}
.navbar-collapse {
    background-color:#07b2f8;
}
</style>
	<body bgcolor="black"><center>
		<div class="container">
			<div class="form-signin" style="background: #87CEEB;">	
				<h2 class="text-center">Login </h2><br>
				<p id='msg'></p>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida1.php">
					<!--<label>Usuário:</label>-->
					<div class="input-group input-group-lg"><span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					</div>
					<!--<label>Senha:</label>-->
					<div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"></div><br>

					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

					<div style="margin-top: 20px;">
						<h4>Você não possui uma conta?</h4>
						<a href="cadastrar.php">Crie agora!</a><br>
					    
						<b>ATENÇÃO, ÁREA RESTRITA, SOMENTE PARA TRANSPORTADORES</b>
					</div>

					
					<div class="row text-center" style="margin-top: 20px;">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin-top: 20px;"></span>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
							<a href="<?php echo $loginUrl; ?>">
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<style>
		@import "bourbon";

@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700);
@import url(https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);

$shadow-color: #23203b;
$input-color: lighten(#AB9E95, 10%);
$input-border-color: #5E5165;
$button-background-color: #27AE60;

* {
  margin: 0;
  padding: 0;
}

html { 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


body, input, button {
  font-family: 'Source Sans Pro', sans-serif;
}

@mixin normalize-input {
  display: block;
  width: auto;
  height: auto;
  border: none;
  outline: none;
  box-shadow: none;
  background: none;
  border-radius: 0px;
}

.login {
  padding: 15px;
  width: 400px;
  min-height: 400px;
  margin: 2% auto 0 auto;

  .heading {
    text-align: center;
    margin-top: 1%;

    h2 {
      font-size: 3em;
      font-weight: 300;
      color: rgba(255, 255, 255, 0.7);
      display: inline-block;
      padding-bottom: 5px;
      text-shadow: 1px 1px 3px $shadow-color;
    }
  }

  form {
    .input-group {
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      border-top: 1px solid rgba(255, 255, 255, 0.1);

      &:last-of-type {
        border-top: none;
      }

      span {
        background: transparent;
        min-width: 53px;
        border: none;

        i {
          font-size: 1.5em;
          color: rgba(255, 255, 255, 0.2);
        }
      }
    }

    input.form-control {
      @include normalize-input;

      padding: 10px;
      font-size: 1.6em;
      width: 100%;
      background: transparent;
      color: $input-color;

      &:focus {
        border: none;
      }
    }

    button {
      margin-top: 20px;
      background: $button-background-color;
      border: none;
      font-size: 1.6em;
      font-weight: 300;
      padding: 5px 0;
      width: 100%;
      border-radius: 3px;
      color: lighten($button-background-color, 40%);
      border-bottom: 4px solid darken($button-background-color, 10%);

      &:hover {
        background: tint($button-background-color, 4%);
        -webkit-animation: hop 1s;
        animation: hop 1s;
      }
    }
  }
}

.float {
  display: inline-block;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
}

.float:hover, .float:focus, .float:active {
  -webkit-transform: translateY(-3px);
  transform: translateY(-3px);
}

/* Large Devices, Wide Screens */

@media only screen and (max-width : 1500px) {
}

@media only screen and (max-width : 1200px) {
  .login {
    width: 600px;
    font-size: 2em;
  }
}

@media only screen and (max-width : 1100px) {
  .login {
    margin-top: 2%;
    width: 600px;
    font-size: 1.7em;
  }
}

/* Medium Devices, Desktops */
@media only screen and (max-width : 992px) {
  .login {
    margin-top: 1%;
    width: 550px;
    font-size: 1.7em;
    min-height: 0;
  }
}

/* Small Devices, Tablets */
@media only screen and (max-width : 768px) {
  .login {
    margin-top: 0;
    width: 500px;
    font-size: 1.3em;
    min-height: 0;
  }
}

/* Extra Small Devices, Phones */ 
@media only screen and (max-width : 480px) {
  .login {

    h2 {
      margin-top: 0;
    }

    margin-top: 0;
    width: 400px;
    font-size: 1em;
    min-height: 0;
  }
}

/* Custom, iPhone Retina */ 
@media only screen and (max-width : 320px) {
  .login {
    margin-top: 0;
    width: 200px;
    font-size: 0.7em;
    min-height: 0;
  }
}

		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
		
	</body>
</html>