<?php

require "../../vendor/autoload.php";
require "functions/checkIsValid.php";

use App\src\controllers\ShowDataForm;

if (isset($_POST['submit'])) {
    $allFieldFormData = array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'gender' => $_POST['gender'],
        'email' => $_POST['email'],
        'country' => $_POST['country'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    );

    $prout = new ShowDataForm($allFieldFormData);

    session_start();

     $_SESSION['firstname'] = checkUserInfoAreValid($prout->getFirstname());
     $_SESSION['lastname'] = checkUserInfoAreValid($prout->getLastName());
     $_SESSION['gender'] = checkUserInfoAreValid($prout->getGender());
     $_SESSION['email'] = checkMailIsValid($prout->getEmail());
     $_SESSION['country'] = checkUserInfoAreValid($prout->getCountry());
     $_SESSION['subject'] = checkMessageIsValid($prout->getSubject());
     $_SESSION['message'] = checkMessageIsValid($prout->getMessage());

    header("location: mailController.php");
}