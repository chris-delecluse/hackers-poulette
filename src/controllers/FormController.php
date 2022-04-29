<?php

namespace App\controllers;

use app;
use App\models\FormInterface;

class FormController implements FormInterface
{
    private string $inputFirstname;
    private string $inputLastName;
    private string $inputGender;
    private string $inputEmail;
    private string $inputCountry;
    private string $inputSubject;
    private string $inputMessage;

    public function __construct($arrayOfInputData)
    {
        $this->inputFirstname = $arrayOfInputData['firstname'];
        $this->inputLastName = $arrayOfInputData['lastname'];
        $this->inputGender = $arrayOfInputData['gender'];
        $this->inputEmail = $arrayOfInputData['email'];
        $this->inputCountry = $arrayOfInputData['country'];
        $this->inputSubject = $arrayOfInputData['subject'];
        $this->inputMessage = $arrayOfInputData['message'];
    }

    public function getFirstname() : string {
        if (!empty($this->inputFirstname)) {
            return htmlspecialchars($this->inputFirstname);
        } else {
            return $this->sendError();
        }
    }

    public function getLastName() : string {
        if (!empty($this->inputLastName)) {
            return htmlspecialchars($this->inputLastName);
        } else {
            return $this->sendError();
        }
    }

    public function getGender() : string {
        if (!empty($this->inputGender)) {
            return htmlspecialchars($this->inputGender);
        } else {
            return $this->sendError();
        }
    }

    public function getEmail() : string {
        if (!empty($this->inputEmail)) {
            return htmlspecialchars($this->inputEmail);
        } else {
            return $this->sendError();
        }
    }

    public function getCountry() : string {
        if (!empty($this->inputCountry)) {
            return htmlspecialchars($this->inputCountry);
        } else {
            return $this->sendError();
        }
    }

    public function getSubject() : string {
        if (!empty($this->inputSubject)) {
            return htmlspecialchars($this->inputSubject);
        } else {
            return $this->sendError();
        }
    }

    public function getMessage() : string {
        if (!empty($this->inputMessage)) {
            return htmlspecialchars($this->inputMessage);
        } else {
            return $this->sendError();
        }
    }

    private function sendError() : string
    {
        return "Error: Please fill all field.";
    }
}
