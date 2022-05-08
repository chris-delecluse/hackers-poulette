<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "../../vendor/phpmailer/phpmailer/src/Exception.php";
require "../../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "../../vendor/phpmailer/phpmailer/src/SMTP.php";

session_start();

$phpmailer = new PHPMailer();

$buildMessage = "Firstname: {$_SESSION['post']['firstname']}
Lastname: {$_SESSION['post']['lastname']} 
Gender: {$_SESSION['post']['gender']}
Country: {$_SESSION['post']['country']} 
Subject: {$_SESSION['post']['subject']} 
Message: {$_SESSION['post']['message']}";

try {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'c9f291fc9fbd40';
    $phpmailer->Password = '227068e691bac5';

    $phpmailer->CharSet = "utf-8";
    $phpmailer->addAddress("diwacode@gmail.com");
    $phpmailer->setFrom($_SESSION['post']['email']);
    $phpmailer->Subject = $_SESSION['post']['subject'];
    $phpmailer->Body = $buildMessage;
    $phpmailer->send();

    echo "message has been send";
    session_unset();
    session_destroy();
    header("location: ../views/sendSuccessfullyView.php");
} catch (Exception) {
    session_unset();
    session_destroy();
    echo "Message cannot be send. Error: {$phpmailer->ErrorInfo}";
}