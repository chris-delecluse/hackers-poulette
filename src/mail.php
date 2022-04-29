<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // config
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    // get info from debug

    // config SMTP: simple mail transfer protocol
    $mail->isSMTP();
    $mail->Host = "localhost";
    $mail->Port = 8888;

    // charSet
    $mail->CharSet = "utf-8";

    // to (we can add many as we need):
    $mail->addAddress("diwacode@gmail.com");

    // get copy
    $mail->addCC("christopherdeleclusepro@gmail.com");
    // get hidden copy
    $mail->addBCC("hiddenchrisdazer@gmail.com");

    // from
    $mail->setFrom("no-reply@site.fr");

    // content
    $mail->Subject = "Subject of the message";
    $mail->Body = "Message here.... ";

    // send
    $mail->send();

    echo "message has been send";

} catch (Exception) {
    echo "Message cannot be send. Error: {$mail->ErrorInfo}";
}