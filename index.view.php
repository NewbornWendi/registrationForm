<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Playfair+Display|Ubuntu:300" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container w-25">
        <form action="" method="POST">
        <hr>
            <label>Введите логин</label>
            <input class="form-control" name="login" type="text" required placeholder="qwe@mail.com">
            <label>Введите пароль</label>
            <input class="form-control" name="password" required type="password">
            <div class="row justify-content-center mt-2">
            <div class="col-2">
            <button name="btnOk" class="btn btn-primary">Вход</button>
            </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-4">
            <a href='index.reg.php'>Зарегистрироваться</a>
            </div>
            </div>
            <hr>
            <div class="alert text-center"><?= $_SESSION["alert"]?></div>
        </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>