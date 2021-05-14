<?php

namespace Model;

class Product
{
    public $id;
    public $name;
    public $type_product;
    public $price;
    public $amount;
    public $created;
    public $description;
    public function __construct($name, $type_product, $price, $amount, $description)
    {

        $this->name = $name;
        $this->type_product = $type_product;
        $this->price = $price;
        $this->amount = $amount;
        $this->created = date("Y/m/d");
        $this->description = $description;
    }
}
