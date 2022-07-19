<?php

namespace App\Orders\Products;

class Product
{
    public string $type;
    public int|float|null $price;
    public string $title;
    public int $id;

    public function __construct($type, $price, $title, $id)
    {
        $this->type = $type;
        $this->price = $price;
        $this->title = $title;
        $this->id = $id;
    }
}
