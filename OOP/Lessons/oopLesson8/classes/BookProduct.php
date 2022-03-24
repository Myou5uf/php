<?php

class BookProduct extends Product
{

    public $numPages;   // Кол-во страниц

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }


    // Получить информацию о товаре
    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }

    // Получить кол-во страниц
    public function getNumPages()
    {
        return $this->numPages;
    }
}
