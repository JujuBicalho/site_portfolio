<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$texto = "
<b>Nome:</b> $nome
<b>E-mail:</b> $email
<b>Mensagem:</b> $mensagem
";

// EMAIL PARA O DESTINATARIO
$emailDestino = "julianabicalhodev@gmail.com";
$headers .= "From:" . $email;
mail($emailDestino, 'Teste de E-mail', $texto,);

//EMAIL PARA O CLIENTE
$headers2 .= "From:" . $email;
$texto .= "Seu e-mail foi recebido e breve lhe darei um retorno!Muito obrigada pelo seu contato.";
mail($email, 'RE:Teste de E-mail', $texto);

?>

