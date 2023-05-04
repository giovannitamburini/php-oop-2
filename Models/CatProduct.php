<?php

// creo una classe estensione della classe Product
class CatProduct extends Product
{
    public $catIcon;
    public $catSize;
    public $catAge;

    // definisco il costruttore per CatProduct
    function __construct(string $name, string $image, int $price, string $type, string $catIcon, string $catSize, string $catAge)
    {
        // passo il valore dei paramentri del costruttore genitore cioè di Product
        parent::__construct($name, $image, $price, $type);

        // memorizzo le nuove variabili di istanza proprie solamente della classe CatProduct
        $this->catIcon = $catIcon;
        $this->catSize = $catSize;
        $this->catAge = $catAge;
    }
}
