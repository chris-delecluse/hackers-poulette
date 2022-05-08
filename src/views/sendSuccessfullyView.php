<?php
$pageCSS = "../../public/styles/formError.css";
$pageTitle = "Success";
ob_start();
?>

<div class="errorContainer">
    <h2 class="errorText">Email send successfully</h2>
    <a href="../../index.php" class="errorButton">Back to home</a>
</div>

<?php
$pageContent = ob_get_clean();
require "../layouts/layout.php";
