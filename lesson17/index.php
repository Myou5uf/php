<?php

// header('HTTP/1.0 404 Not Found');
// header('HTTP/1.0 304 Not Modified');

// TODO: Файл для скачивания
// header('Content-Type: text/plain; charset=utf-8');
header('Content-Disposition: attachment; filename="download.txt"');
// Исходный файл text.txt
readfile('inc/text.txt');
exit;
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
    <title>Урок 17. Функция header в PHP. Часть 2</title>
</head>

<body>
    <h1 style="text-align: center">Урок 17. Функция header в PHP. Часть 2</h1>
    <div class="container">

        <p>Хелоуу мираааа</p>


    </div>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>