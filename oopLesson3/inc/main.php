<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$lada = new Car();

$lada->color = "Красный";
$lada->brand = "LADA";
$lada->speed = "360";
debug($lada);


$bmw = new Car();

$bmw->color = "Серый";
$bmw->brand = "BMW";
$bmw->speed = "280";


echo $lada->getCarInfo();
echo $bmw->getCarInfo();
