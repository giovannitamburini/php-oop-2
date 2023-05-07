<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class House extends Product
{

    protected $size;

    function __construct(string $name, string $image, int $price, Category $category, string $age, string $size)
    {
        parent::__construct($name, $image, $price, $category, $age);

        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}
