<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="public/styles/style.css">
        <title>Hackers poulette</title>
    </head>
    <body>
    <header>
        <div>
            <h1>Support Request Form</h1>
            <p>Welcome to our support request page. Please complete the Support Request Form to contact our support team. You will receive a response within a day, for emergencies please contact us at 111-111-1111.</p>
        </div>
    </header>
    <form action="sources/Controllers/supportFormController.php"
          method="post">

        <div class="formNames">
            <label>
                <input type="text" name="firstName" placeholder="Enter your firstname">
            </label>
            <label>
                <input type="text" name="lastName" placeholder="Enter your lastname">
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
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
        </div>
        <label class="formText">Message
            <textarea name="message" cols="20" rows="5"></textarea>
        </label>
    </form>
    </body>
</html>