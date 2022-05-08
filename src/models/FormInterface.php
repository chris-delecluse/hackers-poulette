<?php

namespace App\models;

interface FormInterface
{
    public function isValid() : void;
    public function getData();
}