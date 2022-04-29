<?php /** @noinspection PhpUndefinedVariableInspection */

session_start();

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require '../../vendor/autoload.php';
include "../controllers/validateFormDataController.php";

$phpmailer = new PHPMailer();

$buildMessage = "Firstname: {$_SESSION['firstname']}
Lastname: {$_SESSION['lastname']} 
Gender: {$_SESSION['gender']}
Country: {$_SESSION['country']} 
Subject: {$_SESSION['subject']} 
Message: {$_SESSION['message']}";

try {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c9f291fc9fbd40';
    $phpmailer->Password = '227068e691bac5';

    $phpmailer->CharSet = "utf-8";
    $phpmailer->addAddress("diwacode@gmail.com");
    $phpmailer->setFrom($_SESSION['email']);
    $phpmailer->Subject = $_SESSION['subject'];
    $phpmailer->Body = $buildMessage;
    $phpmailer->send();

    echo "message has been send";
    header("location: ../../index.php");
} catch (Exception) {
    echo "Message cannot be send. Error: {$phpmailer->ErrorInfo}";
}