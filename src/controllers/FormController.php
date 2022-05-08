<?php

namespace App\src\controllers;
use App\models\FormInterface;

require "../models/FormInterface.php";

class FormController implements FormInterface
{
    private $data;

    public function __construct($formData)
    {
        $this->data = $this->cleanData($formData);
    }

    private function cleanData($formData)
    {
        foreach ($formData as $data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        }

        return $formData;
    }

    public function isValid() : void
    {
        if (!empty($this->data['firstname'])
            && strlen($this->data['firstname']) <= 25
            && !empty($this->data['lastname'])
            && strlen($this->data['lastname']) <= 25
            && !empty($this->data['email'])
            && filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)
            && !empty($this->data['country'])
            && strlen($this->data['country']) <= 30
            && !empty($this->data['gender'])
            && !empty($this->data['subject'])
            && !empty($this->data['message'])
            && strlen($this->data['message']) <= 255
        ) {
            header("location: ../views/confirmRequestView.php");
        } else {
            header("location: ../views/formErrorView.php");
        }
    }

    public function getData()
    {
        return $this->data;
    }
}