<?php
session_start();
 include_once("conexaooo.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br" content="pt-br">

	<head>
	    <meta content='width=device-width' name='viewport' shrink-to-fit=no>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Cadastro de Transportador</title>		
	</head>
	<script>
	    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
    $(document).ready(function () { 
        var $campo = $("#cnh");
        $campo.mask('000000000000', {reverse: true});
    });
   

</script>
	<style>
	    .multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}

.dadosveiculo{
    border:solid;
    border-radius: 15px;
    width:230px;
    height: 225px;
    background-color: lightblue;
}
.dadostransportador{
    border:solid;
    border-radius: 15px;
    width:230px;
    height: 300px;
    background-color: lightblue;
}
.dadosendereco{
    border:solid;
    border-radius: 15px;
    width:230px;
    height: 315px;
    background-color: lightblue;
   
}
.ultima{
    border:solid;
    border-radius: 15px;
    width:230px;
    height: 280px;
    background-color: lightblue;
}
.capacidadee{
    width:30px;
}
.dataa{
    width:109px;
}
.placaa{
     width:75px;
}
.anoo{
     width:45px;
}
 .emaill{
    padding-top:-15px;
}

body{
    background-image: linear-gradient( to left, lightblue, black);
}
.fonte{
    font-style: Arial Black;
}
.check{
     width: 225px;
     
        
}
.um{
    margin-left:-135px;
}
.teste{
    text-align: left;
}
	</style>
	<body>
	
	<center>
		<h1>Ol谩, <?php 
		echo   $_SESSION['nome']?></h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			
		}
		
       ?>
		<h2>Dados do veiculo</h2>
		
     
		
		  <form method="POST" action="proc_cad_usuarioo.php" name="registro">
		    <div class="dadosveiculo"><br>
		    <label>Veiculo</label>   
		    <input type="text" name="veiculo" placeholder="Digite seu Veiculo"><br><br>
		    <label>Capacidade:</label>   
		    <input type="number" name="capacidade"  maxlength="2" class="capacidadee"><br><br>
		    <label>Placa:</label>   
		    <input type="text" name="placa" id="placa" placeholder="Digite sua placa" class="placaa"> 
		    
<br><br>
		    <label>Ano:</label>
		    
		    <input type="number" name="ano" placeholder="Digite o ano do seu Veiculo" class="anoo"><br></div>
		   <h2>Dados de <?php 
		echo   $_SESSION['nome']?></h2> 
		<div class="dadostransportador">
		   <br><label>Nome:</label>   
		    <input type="text" name="nome_completo" placeholder="Digite seu nome completo"><br><br>
		    <script>
		            $(document).ready(function () { 
        var $campo = $("#data");
        $campo.mask('0000', {reverse: true});
    });
    

		    </script>
		    <label>Data de Nascimento:</label>   
		    <input type="text" name="nascimento" placeholder="Digite sua data de nascimento" id="data" maxlenght="8"><br><br>
		   <label>CNH:</label>   
		    <input type="text" name="cnh" id="cnh" placeholder="Digite o numero de sua CNH"><br><br>
		    <label>Validade:</label> 
		    
		    <input type="text" name="validade" placeholder="Digite a validade de sua CNH"><br><br>
		    <label>Categoria</label>
		    <select name="categoria">
		        <option>Selecione...</option>
		        <option value="D">D</option>
		        <option value="E">E</option>
		        <option value="A-D">A/D</option>
		        <option value="A-E">A/E</option>
		    </select><br><br></div><br>
		    <div class="dadosendereco"><br>
		    <label>Endereco Completo:</label>   
		    <input type="text" name="endereco" placeholder="Digite seu endereco"><br><br>
		   <label>Numero:</label>   
		    <input type="text" name="numero" placeholder="Digite o numero de sua casa"><br><br>
		    <label>Complemento:</label>   
		    <input type="text" name="complemento" placeholder="Digite seu complemento (não obrigatório)"><br><br>  
		    <label>Bairro:</label>   
		    <input type="text" name="bairro" placeholder="Digite seu bairro"><br><br>
		    <script>
		            $(document).ready(function () { 
        var $campo = $("#cep");
        $campo.mask('00000000', {reverse: true});
    });
    

		    </script>
		    <label>CEP:</label>   
		    <input type="text" name="cep"  id="cep" placeholder="Digite seu CEP">
		   </div><br><div class="ultima"><br>
		    <label>Email:</label>   
		    <input type="email" name="email" placeholder="Digite seu email" class="emaill"><br><br>
		    
		    
			<label>Nome: </label>
			
			<input type="text" name="nome" value='<?php echo $_SESSION["nome"]?>' readonly><br><br>
			
			<label>Telefone: </label>
			<input type="text" name="telefone" placeholder="Digite o telefone do transportador"><br><br>
			<label>Digite os bairros que voce atende separados por virgula: </label><br>
			<input type="text" name="bairros" placeholder="Digite os bairros"></div>
            Selecione a escola: 
       <div class="multiselect">
    <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Selecione...</option>
      </select>
      <div class="overSelect"> </div></div>
   <font color="white" ><b>   
    <div id="checkboxes" class="teste">
    
      <label for="one">
        <input type="checkbox" name="alicerce" />ALICERCE</label></input>
      <label>
        <input type="checkbox"  name="reis"/>ANTONIO FERNANDO REIS</label></input>
      <label >
          <input type="checkbox" name="apae"/>APAE</label></input>
         <label >
          <input type="checkbox" name="apoio"/>APOIO</label></input>
         <label >
          <input type="checkbox" name="armando"/>ARMANDO VICTORIO BEI</label></input>
            <label >
          <input type="checkbox" name="artes"/>ARTES E MANHAS</label></input>
         <label >
          <input type="checkbox" name="ateneu"/>ATENEU</label></input>
         <label >
          <input type="checkbox" name="batista"/>BATISTA</label></input>
         <label >
          <input type="checkbox" name="beneditino"/>BENEDITINO</label></input>
         <label >
          <input type="checkbox" name="caic"/>CAIC</label></input>
         <label >
          <input type="checkbox" name="cambara"/>CAMBARA</label></input>
         <label >
          <input type="checkbox" name="caminhos"/>CAMINHOS DO SABER</label></input>
         <label >
          <input type="checkbox" name="capellari"/>CAPELLARI</label></input>
         <label >
          <input type="checkbox" name="carolina"/>CAROLINA DANTAS</label></input>
         <label >
          <input type="checkbox" name="cascatinha"/>CASCATINHA</label></input>
         <label >
          <input type="checkbox" name="castelinho"/>CASTELINHO</label></input>
         <label >
          <input type="checkbox" name="celula"/>CELLULA MATTER</label></input>
         <label >
        <input type="checkbox" name="externato"/>COLEGIO CULTURA</label></input>
        <label>
          <input type="checkbox" name="constante"/>CONSTANTE</label></input>
         <label >
          <input type="checkbox" name="coracaozinho"/>CORACAOZINHO</label></input>
         <label >
          <input type="checkbox" name="cruz"/>CRUZ AZUL</label></input>
         <label >
          <input type="checkbox" name="dom"/>DOM PEDRO</label></input>
         <label >
          <input type="checkbox" name="duque"/>DUQUE DE CAXIAS</label></input>
           <label >
          <input type="checkbox" name="enio"/>Enio Vilas Boas</label></input>
          <label>
          <input type="checkbox" name="ercilia_nogueira"/>ERCILIA NOGUEIRA</label></input>
          <label >
          <input type="checkbox" name="shalom"/>ESCOLA SHALOM</label></input>
          <label >
          <input type="checkbox" name="trindade"/>EULINA TRINDADE</label></input>
         <label >
          <input type="checkbox" name="exemplo"/>EXEMPLO</label></input>
         <label >
          <input type="checkbox" name="exito"/>EXITO</label></input>
         <label >
          <input type="checkbox" name="fotecf"/>FORTEC FREI GASPAR</label></input>
         <label >
          <input type="checkbox" name="fortecpw"/>FORTEC PRESIDENTE WILSON</label></input>
         <label >
          <input type="checkbox" name="gerando"/>GERANDO SONHOS</label></input>
         <label >
          <input type="checkbox" name="henrique"/>HENRIQUE OSWALD</label></input>
         <label >
          <input type="checkbox" name="integracao"/>INTEGRACAO</label></input>
         <label >
          <input type="checkbox" name="ita"/>ITA</label></input>
         <label >
          <input type="checkbox" name="jeani"/>JEAN ITARARE</label></input>
         <label >
          <input type="checkbox" name="jeanik"/>JEAN ITARARE KIDS</label></input>
         <label >
          <input type="checkbox" name="jean"/>JEAN NAUTICA</label></input>
         <label >
          <input type="checkbox" name="jonas"/>JONAS RODRIGUES</label></input>
         <label >
          <input type="checkbox" name="kelma"/>KELMA</label></input>
          <label >
          <input type="checkbox" name="laura_filgueiras"/>LAURA FILGUEIRAS</label></input>
         <label >
          <input type="checkbox" name="leao"/>LEAO</label></input>
           <label >
          <input type="checkbox" name="leopoldo"/>LEOPOLDO</label></input>
         <label >
          <input type="checkbox" name="lider"/>LIDER</label></input>
         <label >
          <input type="checkbox" name="lions"/>LIONS</label></input>
         <label >
          <input type="checkbox" name="lobato"/>LOBATO</label></input>
              <label >
          <input type="checkbox" name="lucio"/>LUCIO</label></input>
         <label >
          <input type="checkbox" name="luiz"/>LUIZ PINHO</label></input>
       
         <label >
          <input type="checkbox" name="luz"/>LUZ DO SABER</label></input>
           <label >
          <input type="checkbox" name="margarida_pinho"/>MARGARIDA PINHO</label></input>
         <label >
          <input type="checkbox" name="maria"/>MARIA DE LOURDES</label></input>
         <label >
          <input type="checkbox" name="matteo"/>MATTEO BEI</label></input>
         <label >
          <input type="checkbox" name="matteob"/>MATTEO BEIZINHO</label></input>
         <label >
          <input type="checkbox" name="naha"/>NAHA</label></input>
         <label >
          <input type="checkbox" name="nascimentoo"/>NASCIMENTO (COC)</label></input>
         <label >
          <input type="checkbox" name="notre"/>NOTRE DAME</label></input>
         <label >
          <input type="checkbox" name="objetivo"/>OBJETIVO</label></input>
         <label >
          <input type="checkbox" name="palavra"/>PALAVRA CANTADA</label></input>
         <label >
          <input type="checkbox" name="pastor"/>PASTOR JOAQUIM</label></input>
         <label >
          <input type="checkbox" name="primo"/>PRIMO CHARLES</label></input>
         <label >
          <input type="checkbox" name="privilegio"/>PRIVILEGIO</label></input>
              <label >
          <input type="checkbox" name="provincia"/>Provincia de Okinawa I e II</label></input>
         <label >
          <input type="checkbox" name="raquel"/>RAQUEL</label></input>
         <label >
          <input type="checkbox" name="regina"/>REGINA CELIA</label></input>
         <label >
          <input type="checkbox" name="republica"/>REPUBLICA DE PORTUGAL</label></input>
         <label >
          <input type="checkbox" name="rocio"/>ROCIO</label></input>
         <label >
          <input type="checkbox" name="saint"/>SAINT HILAIRE</label></input>
         <label >
          <input type="checkbox" name="santa"/>SANTA ROSA</label></input>
         <label >
          <input type="checkbox" name="saogabriel"/>SAO GABRIEL</label></input>
         <label >
          <input type="checkbox" name="saopedro"/>SAO PEDRO</label></input>
         <label >
          <input type="checkbox" name="saulo"/>SAULO</label></input>
         <label >
          <input type="checkbox" name="uniao"/>UNIAO CIVICA</label></input>
         <label >
          <input type="checkbox" name="verde"/>VERDE</label></input>
         <label >
          <input type="checkbox" name="vovoli"/>VOVO LIBANIA</label></input>
         <label >
          <input type="checkbox" name="vovorai"/>VOVO RAIMUNDO</label></input>
         <label >
          <input type="checkbox" name="zulmira"/>ZULMIRA</label></input>
          </b>
          </font>
          
          </div></div>
      
  </center>
        <br><br>
    
<center>
			
 
		
			<input type="submit" value="Cadastrar" name="btn-cadastrar"></center>
		</form></form>
		
	</body>
</html>