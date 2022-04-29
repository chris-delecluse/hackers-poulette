<?php

function checkUserInfoAreValid(string $username) : string {
    $errorMsg = "Error : User information are not valid.";
    $regex = "#$%^&*()+=-[]';,./{}|:<>?~";

    $result = !preg_match($regex, $username);

    if (strlen($username) <= 50  && $result) {
        return $username;
    } else {
        return $errorMsg;
    }
}

function checkMailIsValid(string $email) : string {
    $errorMsg = "Error : email not valid !";

    if (strlen($email) <= 120 && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    } else {
        return $errorMsg;
    }
}

function checkMessageIsValid($message) : string {
    $errorMsg = "Error : message is not valid...";

    if (strlen($message) <= 400) {
        return $message;
    } else {
        return $errorMsg;
    }
}