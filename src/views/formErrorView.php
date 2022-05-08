<?php
session_start();
$pageCSS = "../../public/styles/formError.css";
$pageTitle = "Error...";
ob_start();
?>

<div class="errorContainer">
    <h2 class="errorText">Wrong! You have filled in the form incorrectly. If you like it, click on the button below and try again.</h2>
    <a href="../../index.php" class="errorButton">Back to form</a>
</div>

<?php
$pageContent = ob_get_clean();
require "../layouts/layout.php";
session_unset();
session_destroy();