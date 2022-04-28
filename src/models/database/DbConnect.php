<?php

function PDO()
{
    try {
        $database = new PDO('mysql:host=localhost;dbname=BeCode;charset=utf8', 'root', 'root');
    } catch (Exception $exception) {
        die('Error : ' . $exception->getMessage());
    }

    return $database;
}
