<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My contact list</title>
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
        .index {
            width: 500px;
            display: flex;
            justify-content: space-between;
        }
        .link p {
            margin-top: 0px;
        }



    </style>
</head>
<body>
<h1>DOWNLOAD NU C# DE-GOKKERS</h1>
<div class="index">
    <div class="link">
        <p>Download nu de Gokkers</p>
    </div>
    <div class="button">
        <a href="media/de%20gokkerst.exe" download >download de versie</a>
    </div>
</div>
<img src="dograce.png" alt="race">