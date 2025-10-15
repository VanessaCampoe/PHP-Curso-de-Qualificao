<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['email'])) {
    $mail = new PHPMailer(true);

    try {
        // Cofigurações do servidor Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'SEUEMAIL@gmail.com'; //insira se email
        $mail->Password = 'SENHA-DO-APP';
        //senha do app(não a senha da conta)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuração do e-mail
        $mail->setFrom($_POST['email'], $_POST['nome']);
        $mail->addAddress('SEUEMAIL@gmail.com');
        $mail->Subject = 'Nova mensagem do site';
        $mail->Body = $_POST['mensagem'];
        
        $mail->send();
        echo "<h3>Mensagem enviada com sucesso</h3>";
    } catch (Exception $e) {
        echo "<p>Erro ao enviar e-mail: {$mail->ErrorInfo}</p>";
    }
}
?>