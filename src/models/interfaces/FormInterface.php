<?php

namespace App\models\interfaces;

use app;

interface FormInterface
{
    public  function getFirstName() : string;
    public function getLastName() : string;
    public function getGender() : string;
    public function getEmail() : string;
    public function getCountry() : string;
    public function getSubject() : string;
    public function getMessage() : string;
}
