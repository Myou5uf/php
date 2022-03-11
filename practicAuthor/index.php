<?php
const login = 'yousuf';
const cookie = '11111';
session_start();
if (!empty($_SESSION['status']) && $_SESSION['status'] == true) {
    header('Location: user.php');
    exit;
} else if (empty($_SESSION['status']) || $_SESSION['status'] == false) {
    if (!empty($_COOKIE['login']) && (!empty($_COOKIE['cookie']))) {
        $log = $_COOKIE['login'];
        $cook = $_COOKIE['cookie'];
        if (login == $log && cookie == $cook) {
            session_start();
            // var_dump($_SESSION);
            $_SESSION['login'] = $log;
            $_SESSION['status'] = true;
            header('Location: user.php');
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Авторизация через куки</title>
</head>

<body>
    <?php require_once('inc/header.php'); ?>
    <div class="container">
        <?php require_once('inc/form.php'); ?>
        <?php require_once('inc/author.php'); ?>
        <?php require_once('inc/main.php'); ?>
    </div>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>