<?php

// definisco la classe Product
class Product
{
    // definisco le variabili di istanza
    public $name;
    public $image;
    public $price;
    public $type;
    public $size;
    public $age;
    public $icon;

    // definisco una variabile statica
    public static $sectionProducts = "Premium product";

    // definisco il costruttore per rendere obbligatoria l'indicazione dei dati
    function __construct(string $name, string $image, int $price, string $type, string $size, string $age, string $icon)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->type = $type;
        $this->icon = $icon;
        $this->size = $size;
        $this->age = $age;
    }
}
