<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";
require_once __DIR__ . "/Models/House.php";

$categories = [
    new Category("dog", "https://cdn-icons-png.flaticon.com/512/91/91544.png"),
    new Category("cat", "https://images.freeimages.com/clg/images/41/416878/cat-icons_f.jpg")
];

// istanzio una nuova entità della classe Food.php
$youngDogCroquettes = new Food("Monge", "https://www.naturepetshop.it/wp-content/uploads/monge-adult-medium.jpg", 17, $categories[0], "6", "riso, verdure");

// istanzio una nuova entità della classe DogProduct
$dogHouse = new House("Kennel", "https://m.media-amazon.com/images/I/81mTYtNJ0dL._AC_SX425_.jpg", 150, $categories[0], "all ages", "big", 4);

// istanzio una nuova entità della classe CatProduct
$catSkein = new Toy("Skein", "https://ae01.alicdn.com/kf/S1c72f7484fcb4feda6963005aa2dc5a7Z/Giochi-gomitoli-colorati-con-sonaglio-per-gatti-2-pezzi.jpg", 10, $categories[1], "3", "cotton", 5);

// istanzio una nuova entità della classe CatProduct
$catMousse = new Food("Whiskas mousse", "https://happy4pets.b-cdn.net/pub/media/catalog/product/cache/c13c823984d90352764261903faef093/w/h/whiskas-bustine-umido-gatti-pollo-salsa-cuccioli-junior.jpg", 5, $categories[1], " max 1", "pollo, cervo");


// provo a controllare se eseguendo la funzione rispetto tutte le condizioni
try {

    echo $dogHouse->setRate(9);

    // caso in cui ci siano degli errori
} catch (Exception $e) {

    // stampo a schermo il messaggio contenuto nell'errore
    echo $e->getMessage();

    // metodo per ottenere i metodi
    // var_dump(get_class_methods($e));
}

// inserisco all'interno di un array $product le istanze create
$products[] = $youngDogCroquettes;
$products[] = $catSkein;
$products[] = $dogHouse;
$products[] = $catMousse;

// stampo a schermo l'array contenente le due istanze
// var_dump($product);
