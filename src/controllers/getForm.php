<?php

use App\src\controllers\FormController;
require "FormController.php";

if (isset($_POST['submit'])) {
    session_start();
    $checkForm = new FormController($_POST);
    $_SESSION['post'] = $checkForm->getData();
    $checkForm->isValid();
}
