<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Таблица умножения</title>
</head>

<body>
    <?php echo "<h1>Таблица умножения</h1>"; ?>
    <table style="display: flex; justify-content: center; align-items: center; border: 1px solid;">
        <?php
        $i = 1;
        while ($i < 10) {
            $j = 1;
            while ($j < 10) {
                echo '<td style="width: 100px;">' . "$j * $i"  . ' = ' . $i * $j . '</td>';
                $j++;
            }
            echo '<tr>';
            $i++;
        }
        ?>
    </table>
</body>

</html>