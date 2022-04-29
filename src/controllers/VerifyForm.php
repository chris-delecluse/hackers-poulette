<?php

namespace App\controllers;

use app;
use App\models\VerifyFormInterface;

class VerifyForm extends Form implements VerifyFormInterface
{
    public function isValid()
    {
        $firstname = $this->getFirstname();
        if (isset($firstname))
    }
}