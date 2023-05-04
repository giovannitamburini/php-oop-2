<?php

// creo una classe estensione della classe Product
class DogProduct extends Product
{

    // definisco il costruttore per CatProduct
    function __construct(string $name, string $image, int $price, string $type, string $size, string $age)
    {
        // passo il valore dei paramentri del costruttore genitore cioè di Product
        parent::__construct($name, $image, $price, $type, $size, $age, "https://cdn-icons-png.flaticon.com/512/91/91544.png");

        // memorizzo le nuove variabili di istanza proprie solamente della classe DogProduct
    }
}
