<?php
// istanzio una nuova entità della classe DogProduct
$youngDogCroquettes = new DogProduct("Monge", "https://www.naturepetshop.it/wp-content/uploads/monge-adult-medium.jpg", 17, "food", "big", "6");

// istanzio una nuova entità della classe DogProduct
$dogHouse = new DogProduct("Kennel", "https://m.media-amazon.com/images/I/81mTYtNJ0dL._AC_SX425_.jpg", 150, "animal house", "medium", "all ages");

// istanzio una nuova entità della classe CatProduct
$catSkein = new CatProduct("Skein", "https://ae01.alicdn.com/kf/S1c72f7484fcb4feda6963005aa2dc5a7Z/Giochi-gomitoli-colorati-con-sonaglio-per-gatti-2-pezzi.jpg", 10, "toy", "medium", "3");

// istanzio una nuova entità della classe CatProduct
$catMousse = new CatProduct("Whiskas mousse", "https://happy4pets.b-cdn.net/pub/media/catalog/product/cache/c13c823984d90352764261903faef093/w/h/whiskas-bustine-umido-gatti-pollo-salsa-cuccioli-junior.jpg", 5, "food", "small", " max 1");

// inserisco all'interno di un array $product le istanze create
$product[] = $youngDogCroquettes;
$product[] = $catSkein;
$product[] = $dogHouse;
$product[] = $catMousse;

// stampo a schermo l'array contenente le due istanze
// var_dump($product);
