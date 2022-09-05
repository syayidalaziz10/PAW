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
        <h1>This is your<br>personal profile.👌</h1>
        <?php
            session_start();
            echo "Nama = ".$_SESSION["nama"];
            echo "<br>Email = ".$_SESSION["email"];
        ?>
        </div>
    </div>
</body>
</html>