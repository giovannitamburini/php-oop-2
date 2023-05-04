<?php

// definisco la classe Product
class Product
{
    // definisco le variabili di istanza
    public $name;
    public $image;
    public $price;
    public $type;

    // definisco il costruttore per rendere obbligatoria l'indicazione dei dati
    function __construct(string $name, string $image, int $price, string $type)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->type = $type;
    }
}
