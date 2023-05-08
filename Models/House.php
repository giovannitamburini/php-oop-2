<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Rateable.php';

class House extends Product
{
    use Rateable;

    protected $size;

    function __construct(string $name, string $image, int $price, Category $category, string $age, string $size, string $rate)
    {
        parent::__construct($name, $image, $price, $category, $age);

        $this->size = $size;
        $this->rate = $rate;
    }

    public function getSize()
    {
        return $this->size;
    }
}
