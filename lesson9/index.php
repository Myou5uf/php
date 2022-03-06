<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы в php</title>
</head>

<body>
    <h1>Массивы в php</h1>
    <?php
    $x = 1;
    echo "<table border ='1'>";
    while ($x < 10) {
        echo "\t<tr>\n";
        $y = 1;
        while ($y < 10) {
            echo "\t\t<td>$x * $y = " . $x * $y . " </td>\n";
            $y++;
        }
        echo "\t<tr>\n";
        $x++;
    }
    echo '</table>';
    ?>

    <?php

    $arr = array("Андрюха", "Петруха", "ВАно");
    var_dump($arr);
    echo "<br>";
    print_r($arr);
    echo "<br>";

    echo $arr[1];

    $var = "IVanov";
    $var = 2;
    echo $var;

    $arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    echo "<br>";

    $arr3 = [1, 2, ["a", "b", "c"], 4, 5, 6, 7, 8, 9, 10];
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
    echo $arr3[2][1];
    echo "<br>";

    $arr4 = [2 => "a", 3 => "b", 4 => "c"];
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";
    echo "<br>";

    $arr5 = [5 => "a", "b", "c"];
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";
    echo "<br>";

    $arr6 = [
        [
            "title" => "Nokia",
            "price" => "100",
            "description" => "Непробиваемый"
        ],
        [
            "title" => "Honor",
            "price" => "300",
            "description" => "Непробиваемый"
        ],
        [
            "title" => "Ihone",
            "price" => "100000",
            "description" => "Непробиваемый"
        ]
    ];
    echo "<pre>";
    print_r($arr6);
    echo "</pre>";

    echo $arr6[0]["title"] . ' - ' . $arr6[0]["price"];
    echo "<br>";
    echo $arr6[1]["title"] . ' - ' . $arr6[1]["price"];
    echo "<br>";
    echo $arr6[2]["title"] . ' - ' . $arr6[2]["price"];

    echo "<br>";

    ?>

    <h1>Циклы for</h1>
    <?php
    $arr = array("Андрюха", "Петруха", "ВАно");
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    $arr[3] = "Некит";
    print_r($arr);
    echo "<br>";

    $arr[] = "Алешка";
    print_r($arr);
    echo "<br>";

    // ??? Цикл for
    for ($i = 1; $i < 10; $i++) {
        echo $i . "<br>";
    }

    for ($i = 0; $i < count($arr); $i++) {
        echo  $arr[$i] . "<br>";
    }

    $names = [
        'Ivan' => 'Ivanov',
        'Andrey' => 'Andronov',
        'Semen' => 'Semenov',
    ];
    echo "<h1>Цикл foreach</h1>";
    // ??? Цикл foreach
    foreach ($names as $item) {
        echo $item . '<br>';
    }
    echo '<br>';
    foreach ($names as $key => $name) {
        echo "Name: $key, Surname: $name" . '<br>';
    }

    ?>

</body>

</html>