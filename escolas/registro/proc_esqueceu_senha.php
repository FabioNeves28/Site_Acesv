<?php
include_once('conexao.php');

 if (isset($_POST['salvar-senha'])) {

    $usr_id            = $_SESSION['usr_id'];
    $senha_atual       = md5(strip_tags($_POST['senha_atual']));
    $senha_nova        = md5(strip_tags($_POST['senha_nova']));
    $confirme_senha    = md5(strip_tags($_POST['confirme_senha']));

    $sql = mysql_query("SELECT usr_password FROM users WHERE usr_login = '$usr_id' ");
    $row = mysql_fetch_array($sql);
    $senha_banco = $row['usr_password'];

    if($senha_atual == "" && $senha_nova == "" && $confirme_senha == "") {
        echo "
            <script>
                alert('Os campos das senhas não podem ser nulos.');
                window.location='../configuracoes.php';
            </script>";
    } else {
        if (($senha_atual != $senha_banco) || ($senha_nova != $confirme_senha) ) {
            echo "<p style='color:green;'>Senha editada com sucesso</p>";
        } else {
            if ($result=mysql_query("UPDATE users SET usr_password = '$confirme_senha' WHERE usr_id = '$usr_id' ")) {
                echo"<p style='color:red;'>Não foi possível editar a senha</p>";
            }
        }
    }
}

?>