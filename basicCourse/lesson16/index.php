<?php
// header('Content-Type: text/html; charset=utf-8');
// ??? переадресация на другую страницу (refresh с задержкой 5сек)
// * header('Location: user.php');
// * header('refresh: 5; url=user.php');
// exit;
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
    <title>Урок 16. Функция header в PHP. Часть 1</title>
</head>

<body>
    <h1 style="text-align: center">Урок 16. Функция header в PHP. Часть 1</h1>
    <div class="container">

        <p>Хелоуу мираааа</p>


    </div>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>