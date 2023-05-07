<?php

// import della classe Category per la composizione
require_once __DIR__ . "/Category.php";

// definisco la classe Product
class Product
{
    // definisco le variabili di istanza
    protected $name;
    protected $image;
    protected $price;
    protected $category;
    public $age;

    // definisco una variabile statica
    public static $sectionProducts = "Premium product";

    // definisco il costruttore per rendere obbligatoria l'indicazione dei dati
    function __construct(string $name, string $image, int $price, Category $category, string $age)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
