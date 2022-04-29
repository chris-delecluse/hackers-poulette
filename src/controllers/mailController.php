<?php /** @noinspection PhpUndefinedVariableInspection */

session_start();

foreach ($_SESSION as $item) {
    echo $item;
}
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../../vendor/autoload.php';
include "src/.hidden/login.php";
include "src/controllers/validateFormDataController.php";

$phpmailer = new PHPMailer();

try {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = $Username;
    $phpmailer->Password = $Password;

    $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER;

    $phpmailer->CharSet = "utf-8";
    $phpmailer->addAddress("diwacode@gmail.com");
    $phpmailer->addCC("christopherdeleclusepro@gmail.com");
    $phpmailer->addBCC("hiddenchrisdazer@gmail.com");
    $phpmailer->setFrom("no-reply@site.fr");
    $phpmailer->Subject = "Subject of the message";
    $phpmailer->Body = "Message here.... ";
    $phpmailer->send();

    echo "message has been send";

} catch (Exception) {
    echo "Message cannot be send. Error: {$phpmailer->ErrorInfo}";
}