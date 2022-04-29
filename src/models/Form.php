<?php

namespace App\models;

use app;
use App\models\interfaces\FormInterface;

class Form implements FormInterface
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
        return htmlspecialchars($this->inputFirstname);
    }

    public function getLastName() : string {
        return htmlspecialchars($this->inputLastName);
    }

    public function getGender() : string {
        return htmlspecialchars($this->inputGender);
    }

    public function getEmail() : string {
        return htmlspecialchars($this->inputEmail);
    }

    public function getCountry() : string {
        return htmlspecialchars($this->inputCountry);
    }

    public function getSubject() : string {
        return htmlspecialchars($this->inputSubject);
    }

    public function getMessage() : string {
        return htmlspecialchars($this->inputMessage);
    }
}
