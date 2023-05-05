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
// importo la componente contenente il database
require_once './db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <?php
    // importo la componente header
    include './Views/partials/header.php';
    ?>

    <div class="m-2 d-flex wrap justify-content-center gap-2 row">

        <!-- prendo il valore della variabile statica dalla componente contenente la classe Product -->
        <h2><?= Product::$sectionProducts ?></h2>

        <?php
        // ciclo per ogni elemento contenuto nell'array $product
        foreach ($product as $singleProduct) {
        ?>

            <!-- card -->
            <div class="card" style="width: 18rem;">
                <!-- img card = proprità "image" -->
                <img class="card-img-top card-image" src="<?= $singleProduct->image ?>" alt="Card image cap">
                <!-- nome del prodotto = proprietà "name" -->
                <div class="card-body">
                    <h5 class="card-title"><?= $singleProduct->name ?></h5>
                </div>
                <!-- logo = proprietà logo -->
                <img class="icon" src="<?= $singleProduct->icon ?>" alt="icon">
                <!-- lista con le altre informazioni del prodotto -->
                <ul class="list-group list-group-flush">
                    <!-- prezzo = proprietà "price" -->
                    <li class="list-group-item"><strong> Price: </strong><?= $singleProduct->price ?> $</li>
                    <!-- tipo di prodotto = proprietà "type" -->
                    <li class="list-group-item"><strong>Product type: </strong><?= $singleProduct->type ?></li>
                    <!-- taglia dell'animale a cui si riferisce il prodotto = proprietà "size" -->
                    <li class="list-group-item"><strong>Animal size: </strong><?= $singleProduct->size ?></li>
                    <!-- età dell'animale a cui si riferisce il prodotto = proprietà "age" -->
                    <li class="list-group-item"><strong>Animal age: </strong><?= $singleProduct->age ?> years old</li>
                </ul>


            </div>
        <?php
        }
        ?>
    </div>

    <?php
    include './Views/partials/footer.php';
    ?>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>