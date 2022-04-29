<?php

namespace App\controllers;

use app;
use App\models\FormInterface;

class ShowDataForm extends FormController implements FormInterface
{
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