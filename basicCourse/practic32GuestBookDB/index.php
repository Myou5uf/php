<?php
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/76d6d1f47a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Урок 32. Практика создания гостевой книги с использованием БД</title>
</head>

<body>
    <?php require_once('inc/header.php'); ?>
    <div class="container">
        <?php require_once('inc/forms/form.php'); ?>
        <?php require_once('inc/main.php'); ?>
    </div>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>