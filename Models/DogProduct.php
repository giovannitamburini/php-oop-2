<?php

// creo una classe estensione della classe Product
class DogProduct extends Product
{
    public $dogIcon;
    public $dogSize;
    public $dogAge;

    // definisco il costruttore per CatProduct
    function __construct(string $name, string $image, int $price, string $type, string $dogIcon, string $dogSize, string $dogAge)
    {
        // passo il valore dei paramentri del costruttore genitore cioè di Product
        parent::__construct($name, $image, $price, $type);

        // memorizzo le nuove variabili di istanza proprie solamente della classe DogProduct
        $this->dogIcon = $dogIcon;
        $this->dogSize = $dogSize;
        $this->dogAge = $dogAge;
    }
}
