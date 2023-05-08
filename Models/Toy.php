<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Rateable.php';

class Toy extends Product
{

    protected $material;

    use Rateable;

    function __construct(string $name, string $image, int $price, Category $category, string $age, string $material, string $rate)
    {
        parent::__construct($name, $image, $price, $category, $age);

        $this->material = $material;
        $this->rate = $rate;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
