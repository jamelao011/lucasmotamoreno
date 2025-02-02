<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';
include 'parametros.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->CharSet    = 'UTF-8';
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = $smtp_contato;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $email_remetente;                     // SMTP username
    $mail->Password   = $senha_remetente;                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->addReplyTo($_POST['email'], $_POST['nome']);
    $mail->setFrom($email_remetente, 'Site');
    $mail->addAddress($emailContato);     // Add a recipient
    $mail->addBCC('suporte.rfcdigital@gmail.com');     // Add a recipient

    //
    if(empty($_POST['nome']) && !isset($_POST['nome'])){
        $data['error']['title'] = 'Message could not be sent.';
        echo json_encode($data);
    } elseif (empty($_POST['email']) && !isset($_POST['email'])) {
        $data['error']['title'] = 'Message could not be sent.';
        echo json_encode($data);
    } elseif (empty($_POST['telefone']) && !isset($_POST['telefone'])) {
        $data['error']['title'] = 'Message could not be sent.';
        echo json_encode($data);
    }elseif (empty($_POST['mensagem']) && !isset($_POST['mensagem'])) {
        $data['error']['title'] = 'Message could not be sent.';
        echo json_encode($data);
    } else{
        $data = array();
        $nome  = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $mensagem = $_POST['mensagem'];
        $body .= "<h2>Email enviado a partir do site</h2>";
        $body .= "Nome: ";
        $body .= $nome;
        $body .= "<br>";
        $body .= "E-mail: ";
        $body .= $email;
        $body .= "<br>";
        $body .= "Telefone: ";
        $body .= $telefone;
        $body .= "<br>";
        $body .= "Mensagem:<br>";
        $body .= $mensagem;
        $subject .= 'Contato do Site - ';
        $subject .= $urlbase;
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->Send();
        $data['success']['title'] = 'Message has been sent';
        echo json_encode($data);
    }
} catch (Exception $e) {
    $data['error']['title'] = 'Message could not be sent.';
    echo json_encode($data);
}
?>  