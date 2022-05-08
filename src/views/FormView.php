<?php $pageTitle = "Hackers poulette";
      $pageCSS = "public/styles/style.css";

ob_start();
require "headerView.php"; ?>

<form action="src/controllers/getForm.php"
      method="post">

    <div class="formNames">
        <label>
            <input type="text" name="firstname" placeholder="Enter your firstname">
        </label>
        <label>
            <input type="text" name="lastname" placeholder="Enter your lastname">
        </label>
    </div>
    <div class="formGender">
        <label class="formText">Gender
            <select name="gender">
                <option value="man">man</option>
                <option value="woman">woman</option>
            </select>
        </label>
    </div>
    <div>
        <label>
            <input type="email" name="email" placeholder="Enter your exemple@email.com">
        </label>
    </div>
    <div>
        <label>
            <input type="text" name="country" placeholder="Enter your country">
        </label>
    </div>
    <div>
        <label class="formText">Subject
            <select name="subject">
                <option value="1"></option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </label>
    </div>
    <label class="formMessage">
        <textarea name="message" cols="20" rows="5" placeholder="Enter your message here..."></textarea>
    </label>
    <input class="button" type="submit" name="submit" value="Send request">
</form>

<?php $pageContent = ob_get_clean();
require "src/layouts/layout.php";