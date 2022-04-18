<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head><link rel="SHORTCUT ICON" href="imagens/icone.ico" type="image/x-icon">
<title> Esqueceu Senha </title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<!--[IF IE]>
<link rel="stylesheet" type="text/css" href="estilo_ie.css">
<!--[END IF]-->
</head>

<body>
<div id="main">
    <div style="height: 400px;">
        
        

            <form name="form1" method="POST" ACTION="proc_esqueceu_senha">
        <table>
            <tr>
            <td width="200"><label for="nome" class="texto" style="width: 200px; border: solid 0px">Login:</label><BR>
            <input type="text" name="txLogin" style="form_campo"><BR><BR></td>
            </tr>
            
            <tr>
            <td width="200"><label for="senha" class="texto" style="width: 200px; border: solid 0px">Senha Atual:</label><BR>
            <input type="password" name="pwSenha" style="form_campo"><BR><BR></td>
            </tr>
            
            <tr>
            <td width="200"><label for="senha" class="texto" style="width: 200px; border: solid 0px">Nova Senha:</label><BR>
            <input type="password" name="pwSenha2" style="form_campo"><BR><BR></td>

            <td><label for="senha" class="texto" style="width: 300px; border: solid 0px">Confirma Nova Senha:</label><BR>
            <input type="password" name="pwSenha3" style="form_campo"><BR><BR></td>
            </tr>
  
            <tr  valign="middle">
          
                  <INPUT TYPE="hidden" NAME="btnLogar" VALUE="ExecutaLogin">
            <input type="image" src="imagens/okbutton.jpg"></td>
            </tr>
            </table>   <input type="submit" value="Atualizar">    
            </form>
    </div>
    </div>
</div>
</body>
</html>