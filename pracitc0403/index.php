<?php
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Практика 04.03.22</title>
</head>

<body>
    <h1 style="text-align: center">Авторизация</h1>

    <?php
    const log = 'yousuf';
    const pass = '12345';
    session_start();
    if (isset($_SESSION['status']) && $_SESSION['status'] == true) {
        header("Location: ../user.php");
        exit;
    } else {
        echo <<<HTML
    <div class="container form-center">
       
        <form class="row g-3 form-authorization" method="post" action="authorization.php">
            <div class="col-md-12 ">
                <label for="inputLogin" class="form-label">Логин</label>
                <input type="text" class="form-control" id="inputLogin" name="login" placeholder="Введите логин">
            </div>
            <div class="col-md-12 ">
                <label for="inputPass" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="inputPass" name="pass" placeholder="Введите пароль">
            </div>
            <div class="col-12 btn-block">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>

        
    </div>
HTML;
    }
    ?>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>