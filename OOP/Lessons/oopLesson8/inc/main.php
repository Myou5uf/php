<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// Инициализация объектов
$book = new BookProduct("Три мушкетера", 1200, 78);
$notebook = new NotebookProduct("ASUS", 56999, "INTEL");

debug($book);
debug($notebook);

// Вывод информации об объектах
echo $book->getProduct();
echo $notebook->getProduct();
