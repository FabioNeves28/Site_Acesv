<?php	

	include_once("conexao.php");	
	$html = '<table border=1 id="teste"';	
	$html .= '<thead>';
	$html .= '<tr height=30%>';
	$html .= '<th>Qtd.</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Telefone</th>';
	$html .= '<th>Veiculo</th>';
	$html .= '<th>Cap.</th>';
	$html .= '<th>Placa</th>';
	$html .= '<th>Ano</th>';
	$html .= '<th>CNH</th>';
	$html .= '<th>Categoria</th>';
	$html .= '<th>Validade</th>';
	$html .= '<th>Endereço</th>';
	$html .= '<th>Bairro</th>';		
	$html .= '<th>CEP</th>';
    $html .= '<th>Número</th>';
	$html .= '<th>Complemento</th>';
	$html .= '<th>Email</th> ';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_dados = "SELECT * FROM dados";
	$resultado_dados = mysqli_query($conn, $result_dados);
	while($row_dados = mysqli_fetch_assoc($resultado_dados)){
		$html .= '<tr height=30%><td>'.$row_dados['id'] . "</td>";
		$html .= '<td>'.$row_dados['nome'] . "</td>";
		$html .= '<td>'.$row_dados['telefone'] . "</td>";
		$html .= '<td>'.$row_dados['veiculo'] . "</td>";
		$html .= '<td>'.$row_dados['capacidade'] . "</td>";
		$html .= '<td>'.$row_dados['placa'] . "</td>";
		$html .= '<td>'.$row_dados['ano'] . "</td>";
		$html .= '<td>'.$row_dados['cnh'] . "</td>";
		$html .= '<td>'.$row_dados['categoria'] . "</td>";
		$html .= '<td>'.$row_dados['validade'] . "</td>";
		$html .= '<td>'.$row_dados['endereco'] . "</td>";
		$html .= '<td>'.$row_dados['bairro'] . "</td>";
		$html .= '<td>'.$row_dados['cep'] . "</td>";
		$html .= '<td>'.$row_dados['numero'] . "</td>";
		$html .= '<td>'.$row_dados['complemento'] . "</td>";
		$html .= '<td>'.$row_dados['email'] . "</td></tr> 	";
	
			

	}
	$html .= '</tbody>';
		$html .= '</table';


	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório dos Transportadores
			<style>#teste {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#teste td, #teste th {
  border: 1px solid #ddd;
  padding: 2px;
  
}
table {
	border-collapse:collapse;
	border:1px solid #CCC;
		width:8px;
	height:8px;
	padding:1px;
	margin-left: -30px;
    font-size: 5px;
    
}

#teste tr {
	border:1px solid #CCC;
}

#teste td {
	width:8px;
	height:8px;
	padding:2px;
	border:1px solid #CCC;
	text-align: center;
}

#teste tr:nth-child(even){background-color: #f2f2f2;}

#teste tr:hover {background-color: #ddd;}

#teste th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align:  center;
  background-color: #04AA6D;
  color: white;
}
			</style>
			</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_transportadores.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>