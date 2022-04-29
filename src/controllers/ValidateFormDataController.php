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

    echo checkUserInfoAreValid($prout->getFirstname());
    echo checkUserInfoAreValid($prout->getLastName());
    echo checkUserInfoAreValid($prout->getGender());
    echo checkMailIsValid($prout->getEmail());
    echo checkUserInfoAreValid($prout->getCountry());
    echo checkMessageIsValid($prout->getSubject());
    echo checkMessageIsValid($prout->getMessage());
}