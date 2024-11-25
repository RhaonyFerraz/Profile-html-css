<?php

if(isset($_POST['email']) &&!empty($_POST['email'])

$nome = addcslashes($_POST['name'])
$email = addcslashes($_POST['email'])
$mensagem = addcslashes($_POST['message'])



$to = "rhaonyferraz@hotmail.com";
$subject = "Profile";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;
$header = "from:rhaonyferraz@gmail.com"."\r\n".
            ."Reply-to:".$email."\r\n".
            ."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

   echo("Email enviado!");

}else{
    echo("Email não enviado");
}





?>
