<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style-display.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card-img">
            <img src="asset/icon.svg" alt="foto">
        </div>
        <div class="card-desk">
        <h1>Hello, Let's get<br>started.👋
            <?php
                session_start();
                $_SESSION["nama"]=$_POST["nama"];
                $_SESSION["email"]=$_POST["email"];
                echo $_SESSION["nama"]; 
            ?>
            </h1>
            <p>It's a very sunny and pleasant day!</p>
        </div>
    </div>
</body>
</html>