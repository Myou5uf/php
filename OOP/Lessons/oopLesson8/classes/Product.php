<?php

class Product
{

    public $name;   // наименование товара
    public $price;  // Стоимость товара


    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // Получить наименование товара
    public function getName()
    {
        return $this->name;
    }

    // Получить стоимость товара
    public function getPrice()
    {
        return $this->price;
    }


    // Получить информацию о товаре
    public function getProduct()
    {
        return "<hr><b>О товаре: </b><br>
            Наименование: {$this->name}<br>
            Цена: {$this->price}<br>";
    }
}
