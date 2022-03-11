<?php
const login = 'yousuf';
const cookie = '11111';
session_start();
if (empty($_SESSION['status']) || $_SESSION['status'] == false) {
    if (!empty($_COOKIE['login']) && (!empty($_COOKIE['cookie']))) {
        $log = $_COOKIE['login'];
        $cook = $_COOKIE['cookie'];
        if (login == $log && cookie == $cook) {
            session_start();
            $_SESSION['login'] = $log;
            $_SESSION['status'] = true;
        }
    } else {
        header('Location: index.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/user.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Практика 04.03.22</title>
</head>

<body>
    <?php require_once('inc/header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form class="form" id="exit" method="post" action="">
            <button class="btn btn-primary" type="sumbit" name="exit">Выйти</button>
        </form>

        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php
    if (isset($_POST['exit'])) {
        session_start();
        session_unset();
        session_destroy(); //разрушаем сессию для пользователя

        setcookie('login', '', time(), '/'); //удаляем логин
        setcookie('cookie', '', time(), '/'); //удаляем куки
        // if (!empty($_SESSION['status']) && $_SESSION['status']) {

        // }
        header('Location: index.php');
        exit();
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>