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
<div class="container w-50">
    <form action="regImg.php" enctype="multipart/form-data" method="POST">
    <hr>
        <label>Введите никнейм</label>
        <input  class="form-control" name="nickname" type="text" required placeholder="Jon">
        <label>Введите логин</label>
        <input  class="form-control" name="login" type="text" required placeholder="qwe@mail.com">
        <label>Введите пароль</label>
        <input  class="form-control" name="password" required type="password">
        <label>Выберите картинку</label>
        <input  class="form-control" name="imageReg" type="file">
        <div class="row">
            <div class="col-12 text-center">
        <button  class="btn btn-primary mt-3" name="btnOk">Зарегистрироваться</button>
            </div>
        </div>
        <hr>
    </form>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>