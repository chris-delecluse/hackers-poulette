<?php

if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $gender = htmlspecialchars($_POST['gender']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $subject = htmlspecialchars($_POST['subject']);
    $userMessage = htmlspecialchars($_POST['message']);



}