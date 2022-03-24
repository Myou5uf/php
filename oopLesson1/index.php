<?php
require_once('classes/FirstClass.php');
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
    <title>Урок 1. Класс и объект</title>
</head>

<body>
    <?php require_once('inc/header.php'); ?>
    <div class="container">
        <?php
        echo "Hello World";
        echo "<br>";
        $obj1 = new FirstClass;
        $obj2 = new FirstClass;
        $obj3 = new FirstClass;
        var_dump($obj1);
        echo "<br>";
        var_dump($obj2);
        echo "<br>";
        var_dump($obj3);
        echo "<br>";
        ?>
    </div>
    <div class="container">
        <?php require_once('inc/footer.php'); ?>
    </div>
    <?php require_once('inc/script.php'); ?>
</body>

</html>