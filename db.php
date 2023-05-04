<?php
// istanzio una nuova entità della classe DogProduct
$youngDogCroquettes = new DogProduct("Monge", "https://www.naturepetshop.it/wp-content/uploads/monge-adult-medium.jpg", 17, "food", "https://cdn-icons-png.flaticon.com/512/91/91544.png", "big", 6);

// istanzio una nuova entità della classe CatProduct
$catSkein = new CatProduct("Skein", "https://ae01.alicdn.com/kf/S1c72f7484fcb4feda6963005aa2dc5a7Z/Giochi-gomitoli-colorati-con-sonaglio-per-gatti-2-pezzi.jpg", 10, "toy", "https://images.freeimages.com/clg/images/41/416878/cat-icons_f.jpg", "medium", 3);

// inserisco all'interno di un array $product le istanze create
$product[] = $youngDogCroquettes;
$product[] = $catSkein;

// stampo a schermo l'array contenente le due istanze
// var_dump($product);
