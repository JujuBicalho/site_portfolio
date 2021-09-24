<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$texto = "
Nome: $nome
E-mail: $email
Mensagem: $mensagem
";

// EMAIL PARA O DESTINATARIO
$emailDestino = "julianabicalhodev@gmail.com";
$headers .= $nome . $email;
mail($emailDestino, 'Teste de E-mail', $texto,);

//EMAIL PARA O CLIENTE
$headers2 .= $nome . $email;
$texto .= "Olá, tudo bem?";
"Seu e-mail foi recebido e em breve lhe darei um retorno!";
"Muito obrigada pelo seu contato.";
mail($email, 'Mensagem enviada pelo site', $texto);

?>

