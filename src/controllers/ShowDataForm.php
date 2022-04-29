<?php

namespace App\src\controllers;

use app;
use App\models\FormInterface;

class ShowDataForm extends FormController implements FormInterface
{
    public function getFirstname() : string {
        return $this->isEmptyOrNot($this->inputFirstname);
    }

    public function getLastName() : string {
        return $this->isEmptyOrNot($this->inputLastName);
    }

    public function getGender() : string {
        return $this->isEmptyOrNot($this->inputGender);
    }

    public function getEmail() : string {
        return $this->isEmptyOrNot($this->inputEmail);
    }

    public function getCountry() : string {
        return $this->isEmptyOrNot($this->inputCountry);
    }

    public function getSubject() : string {
        return $this->isEmptyOrNot($this->inputSubject);
    }

    public function getMessage() : string {
        return $this->isEmptyOrNot($this->inputMessage);
    }

    private function isEmptyOrNot($string) : string
    {
        if (!empty($string)) {
            return htmlspecialchars($string);
        } else {
            return $this->sendError();
        }
    }

    private function sendError() : string
    {
        return "Error: Please fill the field.";
    }
}