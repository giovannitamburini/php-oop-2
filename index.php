<?php

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

// importo la componente contenente la classe Prooduct
require_once './Models/Product.php';
// importo la componente contenente la classe CatProduct, estensione della classe Product
require_once './Models/CatProduct.php';
// importo la componente contenente la classe DogProduct, estensione della classe Product
require_once './Models/DogProduct.php';

require_once './db.php';

// // istanzio una nuova entità della classe DogProduct
// $youngDogCroquettes = new DogProduct("Monge", "https://www.naturepetshop.it/wp-content/uploads/monge-adult-medium.jpg", 17, "food", "https://cdn-icons-png.flaticon.com/512/91/91544.png", "big", "> 5");

// // istanzio una nuova entità della classe CatProduct
// $catSkein = new CatProduct("Skein", "https://ae01.alicdn.com/kf/S1c72f7484fcb4feda6963005aa2dc5a7Z/Giochi-gomitoli-colorati-con-sonaglio-per-gatti-2-pezzi.jpg", 10, "toy", "https://logowik.com/content/uploads/images/cat8600.jpg", "medium", "< 3");


// $product[] = $youngDogCroquettes;
// $product[] = $catSkein;

// // stampo a schermo l'array contenente le due istanze
// var_dump($product);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">



    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>