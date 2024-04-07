<?php
namespace App\Models;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MailerService{

    public function __construct() {

    }

    public function Send()
    {
        $mail = new PHPMailer();
        
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.ru';
        $mail->SMTPAuth = true;
        $mail->SMTPAutoTLS = false; 
        $mail->Username = 'akramooodolakov@yandex.ru';
        $mail->Password = 'hgbzkejciszdsgoq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Email content
        $mail->setFrom('akramooodolakov@yandex.ru', "Akramo's companies");
        $mail->addAddress('dolakovakram1406@gmail.com');
        $mail->isHTML(false);
        $mail->Subject = 'Order Confirmation';
        $mail->Body = 'Hello, Your order has been accepted.';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}