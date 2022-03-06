<?php
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>require и include в php</title>
</head>

<body>
    <?php
    // include('header.php');
    require_once('inc/header.php');
    // require_once('inc/header.php'); // ??? файл подключается один раз
    // include_once('inc/header.php'); // ??? файл подключается один раз
    ?>
    <?php require_once('inc/main.php'); ?>

    <?php require_once('inc/footer.php'); ?>

</body>

</html>