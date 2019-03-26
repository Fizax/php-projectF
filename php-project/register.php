<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>new account</title>
    <style>
        form {
            background-color: darkgray;
            padding: 10px;
            width: 40%;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
        }
        h1 {
            text-align: center;
        }
        body{
            background: lightgrey;
        }
        .button {
            width: 30%;
            float: right;
            margin-left: 600px;
        }

    </style>
</head>
<body>
<h1>Create new account</h1>
<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">
    <div class="form-group">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
    </div>

    <div class="form-group">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    </div>

    <div class="form-group">
        <label for="password1">Please confirm your password</label>
        <input type="password" name="password1" id="password1" required>
    </div>


    <label class="container">
        <input type="checkbox" name="boxname" value='itsChecked' required>
        <span class="checkmark">akoord met algemene voorwaarde</span>

    </label>

    <div class="button">
        <input type="submit" value="Register" name="button">
    </div>
</form>
</body>
</html>




