<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Toy extends Product
{
    protected $material;

    function __construct(string $name, string $image, int $price, Category $category, string $age, string $material)
    {
        parent::__construct($name, $image, $price, $category, $age);

        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
