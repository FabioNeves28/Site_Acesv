<?php
          include_once("conexaooo.php");
         

        mysqli_autocommit($conn, false);
        mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

$nome = 'teste';
$insert1 = false;
$insert2 = false;

try{
     $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
     $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $bairros = filter_input(INPUT_POST, 'bairros', FILTER_SANITIZE_STRING);
    $alicerce = filter_input(INPUT_POST,'alicerce',  FILTER_SANITIZE_STRING);
    $stmt = mysqli_prepare($conn, "INSERT INTO reis (nome, telefone, bairros, created) VALUES ('$nome', '$telefone','$bairros', NOW())");
    mysqli_stmt_bind_param($stmt, 's', $nome);
    $insert2 = mysqli_stmt_execute($stmt);
}catch (mysqli_sql_exception $e){
   echo 'SQLState: '. $e->getCode() .' <br>Descrição: '. $e->getMessage();  
}

if($insert1 && $insert2){
    mysqli_commit($conn);
    echo "<p style='color:green;'>sucesso";
    header("Location:  cadastro_alicerce.php");
}

mysqli_close($conexao);
         
          $result_usuarioo = 
          $resultadoo_usuario = mysqli_query($conn, $result_usuarioo);
         
          
          if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location:  cadastro_alicerce.php");

}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: cadastro_alicerce.php");
}