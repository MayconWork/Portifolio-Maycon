<?php
$to = 'maycon.oliveira.work@gmail.com'; 
$subject = 'Contato do Formulário';

// Obtendo os dados do formulário
$fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

// Validando e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'Email inválido.';
    exit;
}

// Montando o corpo do e-mail
$body = "Nome: $fullname\n";
$body .= "Email: $email\n";
$body .= "Mensagem:\n$message\n";

// Definindo os cabeçalhos do e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Enviando o e-mail
if (mail($to, $subject, $body, $headers)) {
    echo 'E-mail enviado com sucesso.';
} else {
    echo 'Falha ao enviar o e-mail.';
}
?>
