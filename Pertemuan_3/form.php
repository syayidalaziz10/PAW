<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card-img">
            <img src="asset/icon.svg" alt="foto">
        </div>
        <div class="card-form">
            <h2>Create account</h2>
            <form action="load.php" method="POST">
                <input type="text" name="nama" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <input type="checkbox" ><label>By creating account, you agree to the <br> Terms Of Service and Conditioins, and Privacy  Policy </label>
                <input type="submit" name="submit" value="Create account">
            </form>
        </div>
    </div>
</body>
</html>