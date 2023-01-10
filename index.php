<?php 
    require_once __DIR__ . '/classes/product.php';
    require_once __DIR__ . '/classes/category.php';

    $all_products = [
        $dog_food = new Product('https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw359c75bb/idt/migliorcane_bocconi_con_manzo_405_gr__8007520011204_160924.jpg?sw=800&sh=800', new Category("Dog")),
        $cat_food = new Product('https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/6/400/cans_12_1000x1000_6.jpg', new Category("Cat"))
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