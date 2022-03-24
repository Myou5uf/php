<?php
error_reporting(-1);

$filename = 'file/example.txt';
$lorem = new WriteFile($filename);

$lorem->write2file("Строка 1");
$lorem->write2file("Строка 2");
$lorem->write2file("Строка 3");
$lorem->write2file("Строка 4");
$lorem->write2file("Строка 5");
$lorem->write2file("Строка 6");
$lorem->write2file("Строка 7");
