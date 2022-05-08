<?php
session_start();
$pageCSS = "../../public/styles/formConfirm.css";
$pageTitle = "Confirm request";
ob_start();
?>

<h1 class="confirmTitle">Confirm your data</h1>

<div class="confirmContainer">
    <p>firstname <span class="firstname"><?= $_SESSION['post']['firstname'] ?></span></p>
    <p>lastname <span class="firstname"><?= $_SESSION['post']['lastname'] ?></span></p>
    <p>gender <span class="firstname"><?= $_SESSION['post']['gender'] ?></span></p>
    <p>email <span class="firstname"><?= $_SESSION['post']['email'] ?></span></p>
    <p>country <span class="firstname"><?= $_SESSION['post']['country'] ?></span></p>
    <p>subject <span class="firstname"><?= $_SESSION['post']['subject'] ?></span></p>
    <p>message <span class="firstname"><?= $_SESSION['post']['message'] ?></span></p>
    <a href="../controllers/mailController.php" class="sendMail">Send</a>
</div>

<?php
$pageContent = ob_get_clean();
require "../layouts/layout.php";
