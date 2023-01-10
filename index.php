<?php 
    require_once __DIR__ . '/classes/product.php';
    require_once __DIR__ . '/classes/category.php';

    $all_products = [
        $product_one = new Product(new Category("Dog")),
        $product_two = new Product(new Category("Cat"))
    ];

    var_dump($all_products);
?>


<!-- Immaginare quali sono le classi necessarie per creare uno 
shop online con le seguenti caratteristiche:
- L'e-commerce vende prodotti per animali.
- I prodotti sono categorizzati, le categorie sono Cani o Gatti.
- I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come 
immagine, titolo, prezzo, icona della categoria ed il tipo di 
articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). -->