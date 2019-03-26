<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
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
        body {
            background: lightgrey;
        }
        .button {
            width: 30%;
            margin-left: 600px;
        }
    </style>
</head>
<body>
<h1>LOGIN</h1>
<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="login">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">wachtwoord</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="button">
        <input type="submit" value="login">
    </div>

</form>
</body>
</html>
