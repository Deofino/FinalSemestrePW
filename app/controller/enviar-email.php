<?php
    require 'phpmailer/autoload.php';

    //Variaveis
    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $msg = $_POST['txMsg'];
    
    //Criptografia
    $assuntoCodificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));
    //objeto email
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    //Configuração
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPAuth = true;
    //Remetente
    $mail->Username = 'empresaShoesCO@gmail.com';
    $mail->Password = 'shoes12345';
    $mail->SMTPSecure = 'ss1';
    $mail->Port = 587;
    $mail->setFrom('empresaShoesCO@gmail.com', 'Shoes');

    //Destinatario
    $mail->addAddress('empresaShoesCO@gmail.com');
    $mail->Subject = $assuntoCodificado;

    $conteudo_email = "
        Você recebeu uma mensagem de $nome ($email):
        <br>
        <br>
        Sobre:$assunto
        <br>
        Mensagem:<br>
        $msg
    ";
    $mail->isHTML(true);
    $mail->Body = $conteudo_email;

    //Teste de sucesso
    if(!$mail->send()){
        echo "Falha ao enviar o e-mail: ".$mail->ErrorInfo;
        
    }else{
        echo "E-mail enviado com sucesso!";
    } 
    
?>
