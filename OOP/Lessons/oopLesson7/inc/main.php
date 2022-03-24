<?php
error_reporting(-1);

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$book = new Product("Три мушкетера", 1200, null, 78);
$notebook = new Product("ASUS", 56999, "RAZEN");

debug($book);
debug($notebook);

echo $book->getProduct("book");
echo $notebook->getProduct();
