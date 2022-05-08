<?php

namespace App\src\models;

interface FormInterface
{
    public function isValid() : void;
    public function getData();
}