<?php

namespace App\Controller;

use App\Controller\Twig;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Twig
{
    public function index()
    {
        echo $this->twig->render('contact.twig', ['file' => URL_MAIN . 'public/']);
    }
    public function notFound()
    {
        echo $this->twig->render('notFound.twig', ['file' => URL_MAIN . 'public/']);
    }

    public function sendEmail()
    {
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //Variaveis
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $assunto = $_POST['subject'];
            $msg = $_POST['message'];
            //Criptografia
            $assuntoCodificado = sprintf('=?%s?%s?%s?=', 'UTF-8', 'Q', quoted_printable_encode($assunto));
            //objeto email
            $mail = new PHPMailer();
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
            if (!$mail->send()) {
                return Twig::loadJson('bad', '400',"Falha ao enviar o e-mail: " . $mail->ErrorInfo);
            } else {
                return Twig::loadJson('ok', '200','E-mail enviado com sucesso');
            }
        } else {
            return Twig::loadJson('bad', '404', 'Get page not found');
        }
    }
}
