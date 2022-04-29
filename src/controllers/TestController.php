<?php


use App\src\controllers\ShowDataForm;

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


echo "helloworld";
echo $prout->getFirstname();
echo $prout->getLastName();
echo $prout->getGender();
echo $prout->getEmail();
echo $prout->getCountry();
echo $prout->getSubject();
echo $prout->getMessage();