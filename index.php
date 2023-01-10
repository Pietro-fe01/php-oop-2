<?php 
    require_once __DIR__ . '/classes/product.php';
    require_once __DIR__ . '/classes/category.php';
    require_once __DIR__ . '/classes/food.php';

    $all_products = [
        $dog_food = new Food(
            'https://www.isoladeitesori.it/dw/image/v2/BGRZ_PRD/on/demandware.static/-/Sites-it-master-catalog/default/dw359c75bb/idt/migliorcane_bocconi_con_manzo_405_gr__8007520011204_160924.jpg?sw=800&sh=800', 
            'Migliorcane Dog Adult Bocconi con Manzo 405 gr',
            '$ 0,75',
            new Category("Dog"),
            239
        ),
        $cat_food = new Food(
            'https://shop-cdn-m.mediazs.com/bilder/whiskas/lattine/x/g/6/400/cans_12_1000x1000_6.jpg', 
            'Whiskas Cat Salmone in Gelatina senza zuccheri 400 g',
            '$ 1,75',
            new Category("Cat"),
            308
        )
    ];

    var_dump($all_products);
?>
