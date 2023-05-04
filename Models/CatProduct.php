<?php

// creo una classe estensione della classe Product
class CatProduct extends Product
{

    // definisco il costruttore per CatProduct
    function __construct(string $name, string $image, int $price, string $type, string $size, string $age)
    {
        // passo il valore dei paramentri del costruttore genitore cioè di Product
        parent::__construct($name, $image, $price, $type, $size, $age, "https://images.freeimages.com/clg/images/41/416878/cat-icons_f.jpg");

        // memorizzo le nuove variabili di istanza proprie solamente della classe DogProduct
    }
}
