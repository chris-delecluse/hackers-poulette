<?php

namespace App\src\controllers;

use app;

class FormController
{
    protected string $inputFirstname;
    protected string $inputLastName;
    protected string $inputGender;
    protected string $inputEmail;
    protected string $inputCountry;
    protected string $inputSubject;
    protected string $inputMessage;

    public function __construct(array $arrayOfInputData)
    {
        $this->inputFirstname = $arrayOfInputData['firstname'];
        $this->inputLastName = $arrayOfInputData['lastname'];
        $this->inputGender = $arrayOfInputData['gender'];
        $this->inputEmail = $arrayOfInputData['email'];
        $this->inputCountry = $arrayOfInputData['country'];
        $this->inputSubject = $arrayOfInputData['subject'];
        $this->inputMessage = $arrayOfInputData['message'];
    }
}
