<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>c# a day at the race</title>
    <style>
        body {
            background: lightgrey;
        }

        @media only screen and (max-width: 578px) {
            iframe {
                width: 500px;
                height: 300px;
            }
        }
        @media only screen and (max-width: 520px){
            iframe {
                width: 250px;
                height: 150px;
            }

        }
        @media only screen and (max-width: 1016px) {
            .index {
                display: flex;
                flex-direction: column;
            }

        }
        @media only screen and (max-width: 1434px){
            img {
                width: 50%;
            }
        }
        .index {
            width: 80%;
            display: flex;
            justify-content: space-between;
        }
        .description {
            width: 30%;
            border-style: solid;
            height: 30%;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
        }


    </style>
</head>
<body>
<h1>DOWNLOAD NU C# DE-GOKKERS</h1>
<img src="RacingBanner.jpg" alt="">
<div class="index">
    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/AOtPhwcfb-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="description">
       <p>Download nu de gekste c# applicatie. je kan de greyhounds laten rennen en samen met je vrienden op een hond bieden. Download snel en kijk wie er zal winnen</p>
    </div>
    <div>
        <p><a href="login.php">login om te downloaden</a></p>
        <p><a href="register.php">geen acount maak er dan eentje aan</a></p>
    </div>
</div>


<?php
if (isset($_GET['msg'])) {
    $msg = 'Mail is al in gebruik.';
    echo "<script>alert('$msg')</script>";
}
?>

</body>
</html>