<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product
{

    protected $ingredients;

    function __construct(string $name, string $image, int $price, Category $category, string $age, string $ingredients)
    {
        parent::__construct($name, $image, $price, $category, $age);

        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}
