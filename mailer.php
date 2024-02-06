<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

function mailer($recipient, $msg, $uname) {
    $from = 'parasuramtsps6@gmail.com';
    $user = $uname;
    $subject = 'The Library Member ' . $user;
    $body = $msg;

    $mail = new PHPMailer;

    // Enable verbose debug output
    // $mail->SMTPDebug = 3;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'parasuramtsps6@gmail.com';
    $mail->Password = 'wbwq tjiq mgwa yupw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($from ,'The Library Team');
    $mail->addAddress($recipient);
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Attach the PDF
    // $mail->addAttachment("leaves);

    $status = false;

    if ($mail->send()) {
        $status = true;
    } else {
        $status = false;
        // Uncomment the line below for debugging information
       echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

    return $status;
}


?>
