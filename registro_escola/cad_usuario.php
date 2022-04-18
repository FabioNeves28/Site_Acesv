<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro de Transportador</title>		
	</head>
	<body>
		
		<h1>Cadastrar Tio</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		 include_once('conexao.php'); 
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome do tio"><br><br>
			
			<label>Número: </label>
			<input type="text" name="telefone" placeholder="Digite o telefone do transportador"><br><br>
			<label>Bairros </label>
			<input type="text" name="bairros" placeholder="Digite os bairros"><br><br>
		<label>Categoria:</label>
			<select name="id_categoria" id="id_categoria">
				<option value="">Escolha a Categoria</option>
				<?php
					$result_cat_post = "SHOW TABLES";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post[''].'">'.$row_cat_post[''].'</option>';
					}
				?>
			</select><br><br>
					
			 <div class="div-select">
                        <p><select onchange="location.href=this.value">
                       
                        <option value="escolas/alicerce.html">Alicerce </option>
                        <option value="escolas/antonio_reis.html">Antônio Fernando de Reis</option></p>
						<option value="escolas/apae.html">APAE</option></p>
						<option value="escolas/apoio.html">Apoio</option></p>
				    	<option value="escolas/armando.html"> Armando Vitório Bei</option></p>
				    	<option value="escolas/artes_e_manhas.html">Artes e Manhas</option></p>				    	
						<option value="escolas/ateneu.html">Ateneu São Vicente</option></p>	
						<option value="escolas/batista.html">Batista da Primeira</option></p>	
						<option value="escolas/beneditino.html">Beneditino</option></p>	
						<option value="escolas/caic.html">Caic</option>   
						<option value="escolas/cambara.html">Cambará</option>   
						<option name="Caminhos">Caminhos do Saber</option>  
						<option value="escolas/capellari.html">Capellari</option>  
						<option value="escolas/carolina.html">Carolina Dantas</option>
						<option value="escolas/cascatinha.html">Cascatinha</option>   
						<option value="escolas/castelinho.html">Castelinho</option>   
						<option value="escolas/celula.html">Célulla Mater</option></p>	                    						                       
						<option value="escolas/cruz.html">Cruz Azul</option></p>	                    						                       
						<option value="escolas/coracaozinho.html">Coraçãozinho</option></p>	                    						                       
						<option value="escolas/constante.html">Constante</option></p>	                    						                       
						<option value="escolas/duque.html">Duque de Caxias</option></p>	                    						                       
						<option value="escolas/dompedro.html">Dom Pedro</option></p>	                    						                       
						<option value="escolas/enio.html">Ênio Vilas Boas</option></p>	                    						                       
						<option value="escolas/exemplo.html">Exemplo</option></p>	                    						                       
						<option value="escolas/externato.html">Externato</option></p>	                    						                       
						<option value="escolas/exito.html">Êxito</option></p>	                    						                       
                        <option value="escolas/fortec_calixto.html">Fortec - Benedito Calixto</option></p>
						<option value="escolas/fortec_pw.html">Fortec - Presidente Wilson</option></p>
						<option value="escolas/fortec_frei.html">Fortec - Frei Gaspar</option></p>
						<option value="escolas/gerando.html">Gerando Sonhos</option></p>
						<option value="escolas/henrique_oswald.html">Henrique Oswald</option></p>			
						<option value="escolas/integracao.html">Integração</option></p>	
						<option value="escolas/ita.html">Itá</option></p>	
						<option value="escolas/jean_nautica.html">Jean Piaget - Unidade Náutica</option>
						<option value="escolas/jean_itarare.html">Jean Piaget - Unidade Itararé</option>
                        <option value="escolas/kids_nautica.html">Jean Piaget - Kids</option>
                        <option value="escolas/kids_itarare.html">Jean Piaget - Kids - Unidade Itararé</option>
                        <option value="escolas/jonas.html">Jonas Rodrigues</option>
                        <option value="escolas/kelma.html">Kelma</option>
						<option value="escolas/leao.html">Leão</option></p>	
						<option value="escolas/lider.html">Lider</option></p>	
						<option value="escolas/lions.html">Lions</option></p>	
						<option value="escolas/lobato.html">Lobato</option></p>	
						<option value="escolas/luiz.html">Luiz Pinho</option></p>	
						<option value="escolas/luzdosaber.html">Luz do Saber</option></p>	
						<option value="escolas/maria.html">Maria de Lourdes</option></p>	
						<option value="escolas/matteobei.html">Matteo Bei</option></p>	
						<option value="escolas/matteobeizinho.html">Matteu Beizinho</option></p>	
						<option value="escolas/naha.html">Naha</option></p>	
						<option value="escolas/nascimento.html">Nascimento(COC)</option></p>	
						<option value="escolas/notre_dame.html">Notre Dame</option></p>	
						<option value="escolas/objetivo.html">Objetivo</option></p>	
						<option value="escolas/palavra.html" target="_self">Palavra Cantada</option></p>	
						<option value="escolas/pastor_joaquim.html">Pastor Joaquim</option>
						<option value="escolas/primo_charles.html">Primo Charles</option>
						<option value="escolas/privilegio.html">Privilégio</option>						
						<option value="escolas/raquel.html">Raquel de Castro</option>					
						<option value="escolas/republica_portugal.html">República de Portugal</option>
						<option value="escolas/regina_celia.html">Regina Célia</option>
						<option value="escolas/rocio.html">Rócio</option>
						<option value="escolas/santarosa.html">Santa Rosa</option>					
						<option value="escolas/saint.html">Saint Hilaire</option>				
						<option value="escolas/saulo.html">Saulo</option>			
						<option value="escolas/saogabriel.html">São Gabriel</option>					
						<option value="escolas/saopedro.html">São Pedro</option>					
						<option value="escolas/sossego.html">Sossego Mamãe</option>					
						<option value="escolas/uniao_civica.html">União Cívica</option>					
					    <option value="escolas/verde.html">Verde</option>
					    <option value="escolas/vovo.html">Vovó Libania</option>
					    <option value="escolas/vovoraimundo.html">Vovô Raimundo</option>
					    <option value="escolas/zulmira.html">Zulmira Lambert</option>																																																																			
											
						
                    </div>
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>