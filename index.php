<?php

/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

// importo la componente contenente la classe Prooduct
// require_once './Models/Product.php';
// // importo la componente contenente la classe CatProduct, estensione della classe Product
// require_once './Models/CatProduct.php';
// // importo la componente contenente la classe DogProduct, estensione della classe Product
// require_once './Models/DogProduct.php';
// importo la componente contenente il database
require_once './db.php';

// var_dump($products);

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
        foreach ($products as $singleProduct) {
        ?>

            <!-- card -->
            <div class="card" style="width: 18rem;">
                <!-- img card = proprità "image" -->
                <img class="card-img-top card-image" src="<?= $singleProduct->getImage() ?>" alt="Card image cap">
                <!-- nome del prodotto = proprietà "name" -->
                <div class="card-body">
                    <h5 class="card-title"><?= $singleProduct->getName() ?></h5>
                </div>
                <!-- logo = proprietà logo -->
                <img class="icon" src="<?= $singleProduct->getCategory()->getCategoryIcon() ?>" alt="icon">
                <!-- lista con le altre informazioni del prodotto -->
                <ul class="list-group list-group-flush">
                    <!-- prezzo = proprietà "price" -->
                    <li class="list-group-item"><strong> Price: </strong><?= $singleProduct->getPrice() ?> $</li>
                    <!-- età dell'animale a cui si riferisce il prodotto = proprietà "age" -->
                    <li class="list-group-item"><strong>Animal age: </strong><?= $singleProduct->age ?></li>
                    <!-- descrizione del prodotto in base alla tipologia di classe interessata -->
                    <li class="list-group-item">
                        <?php

                        switch (get_class($singleProduct)) {
                            case 'Product':

                                echo "<br>";

                                break;

                            case 'Food':

                                echo "<strong>Ingredienti: </strong>" . $singleProduct->getIngredients();

                                break;

                            case 'House':
                                echo "<strong>Taglia: </strong>" . $singleProduct->getSize();
                                break;

                            case 'Toy':
                                echo "<strong>Materiale: </strong>" . $singleProduct->getMaterial();
                                break;
                        }

                        ?>
                    </li>
                    <li class="list-group-item">
                        <?php

                        switch (get_class($singleProduct)) {
                            case 'Product':

                                echo "<br>";

                                break;

                            case 'Food':

                                echo "<br>";

                                break;

                            case 'House':
                                echo "<strong>Voto: </strong>" . $singleProduct->getRate() . "/5";
                                break;

                            case 'Toy':
                                echo "<strong>Voto: </strong>" . $singleProduct->getRate() . "/5";
                                break;
                        }

                        ?>
                    </li>

                </ul>

                <button type="button" class="btn btn-success mt-2 mb-2 align-self-center">Shop now</button>


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