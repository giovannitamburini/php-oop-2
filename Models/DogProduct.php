<?php

// creo una classe estensione della classe Product
class DogProduct extends Product
{
    public $icon;
    public $size;
    public $age;

    // definisco il costruttore per CatProduct
    function __construct(string $name, string $image, int $price, string $type, string $icon, string $size, int $age)
    {
        // passo il valore dei paramentri del costruttore genitore cioè di Product
        parent::__construct($name, $image, $price, $type);

        // memorizzo le nuove variabili di istanza proprie solamente della classe DogProduct
        $this->icon = $icon;
        $this->size = $size;
        $this->age = $age;
    }
}
