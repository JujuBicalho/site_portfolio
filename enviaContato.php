<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$texto = "
Nome: $nome
E-mail:$email
Mensagem: $mensagem
";

// EMAIL PARA O DESTINATARIO
$emailDestino = "julianabicalhodev@gmail.com";
$headers .= "From:" . $email;
mail($emailDestino, 'Conato enviado pelo site', $texto,);

//EMAIL PARA O CLIENTE
$headers2 .= "From:" . $email;
$texto .= "Seu e-mail foi recebido e breve lhe darei um retorno!Muito obrigada pelo seu contato.";
mail($email, 'Contato pelo site Juliana Bicalho', $texto);

?>

