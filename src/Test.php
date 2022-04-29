<?php

class Test
{

    public string $name;

    public function __construct($prout)
    {
        $this->name = $prout;
    }
}

$patate = new Test("chris");


class Test2 extends Test
{
    public function getName()
    {
       echo $this->name;
    }
}