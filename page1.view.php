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
    <div>
        <div class="container w-25 text-center">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <div class="alert">Здраствуйте, <?= $_SESSION["nickname"] ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 justify-content-center">
                        <?php foreach ($res as $item) : ?>
                        <img class="img-thumbnail" src="img/<?= $item->name_img ?>">
                        <?php endforeach; ?>
                    </div>

                </div>
        </div>
        </form>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>