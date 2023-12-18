<?php
//Variáveis

$nome = $_POST['name'];
$email = $_POST['email'];
$whats = $_POST['telephone'];
$cnpj = $_POST['cnpj'];
$mensagem = $_POST['description'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$msg_explodida = (explode(" ", $mensagem));

function substr_in_array($needle, $haystack)
{
  /*** cast to array ***/
  $needle = (array) $needle;

  /*** map with preg_quote ***/
  $needle = array_map('preg_quote', $needle);

  /*** loop of the array to get the search pattern ***/
  foreach ($needle as $pattern) {
    if (count(preg_grep("/$pattern/", $haystack)) > 0)
      return true;
  }
  /*** if it is not found ***/
  return false;
}

$strings = array('http', 'sexy', '<a', 'sex', 'sexual', 'pussy', 'tudo', 'photo', 'https', 'porn', 'porno', 'HTTP', 'HTTPS', 'PORN', 'cassino');

if (substr_in_array($strings, $msg_explodida) == true) {
  echo ("<script type= 'text/javascript'>alert('Mensagem não enviada, tente novamente!');</script>
            <script>window.location = 'home';</script>");
  exit();
}


$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Arial;
  font-size:12px;
  color: #666666;
  }
  a{
  color: black;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  td {padding:2px;}
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1'>
                <tr>
                  <td width='500'>Nome:$nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
                 </tr>
                <tr>
                  <td width='320'>Whats:<b>$whats</b></td>
                </tr>
                <tr>
                  <td width='320'>CNPJ ou CPF:$cnpj</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
                </td>
                </tr>
                <tr>
                    <td>Este e-mail foi enviado em <b>$data_envio <b>$hora_envio</b></td>
                </tr>
        </table>
    </html>
  ";

//enviar

// emails para quem será enviado o formulário
$emailenviar = "frutapolpa@frutapolpa.com.br";
$destino = $emailenviar;
$assunto = "Contato pelo Site";

// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: $nome <cairofelipedev@gmail.com>";
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($destino, $assunto, $arquivo, $headers);
if ($enviaremail) {
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo ("<script type= 'text/javascript'>alert('Obrigado! Em breve entramos em contato com você');</script>
            <script>window.location = '/home.php';</script>");
  header("Location: /home.php");
  exit();
} else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
}
