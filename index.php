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
            'Whiskas Cat Salmone in Gelatina senza zuccheri 400 g x12',
            '$ 21,99',
            new Category("Cat"),
            308
        ),
        $dog_food = new Food(
            'https://arcaplanet.vtexassets.com/arquivos/ids/243809/royal-canin-size-cane-maxi-adult.jpg?v=1759767281', 
            'Crocchette per cani Royal Canin Size Maxi Adult.',
            '$ 79,99',
            new Category("Dog"),
            420
        ),
        $cat_food = new Food(
            'https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/pacco/misto/x/g/3/400/icons_saverpacks_pyramids_0x00g_template_1000x1000_int_1_2022_06_13t125226_789_3.jpg', 
            'Gourmet Gold Pacco misto 48 x 85 g',
            '$ 24,99',
            new Category("Cat"),
            349
        ),
    ];

    // var_dump($all_products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-commerce</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontwawesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontwawesome CDN -->
</head>
<body>
    <header>
        <!-- Header top -->
        <div class="header-top">
            <div class="container">
                <div class="contact-info">
                    <small><i class="fa-solid fa-phone"></i> Phone 340 218 3487</small>
                    <small><i class="fa-solid fa-envelope"></i> PetEmail@ecommerce.com</small>
                </div>
                <div class="right-links">
                    <a href="#">My Cart</a>
                    <a href="#">Checkout</a>
                    <a href="#">Login - Register</a>
                </div>
            </div>
        </div>
        <!-- Header top -->

        <!-- Header bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <img src="data:image/png;base64,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" alt="">
                    <h1>PetFood</h1>
                </div>
                <nav class="nav-menu">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-house"></i> HOME</a></li>
                        <li><a href="#">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">CONTACT</a></li>
                        <li><a href="#">ABOUT</a></li>
                    </ul>
                </nav>
                <div class="head-buttons">
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-basket-shopping"></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
        <!-- Header bottom -->
    </header>

    <main>
        <section class="container products-section">
            <h2>Products</h2>

            <div class="products-container">
                <?php foreach ($all_products as $i => $product) {?>
                <div class="product">
                    <div class="product__image">
                        <img src="<?php echo $product->getProductImage()?>" alt="as">
                        <div class="product__type"> 
                            <?php echo $product->getProductType() . '-' . $product->getProductCategory()->getCategory(); ?>
                        </div>
                        <div class="pet-icon">
                            <img src="<?php echo $product->getProductCategory()->getIcon(); ?>" alt="">
                        </div>
                    </div>
                    <div class="product__info">
                        <h4 class="product__title"><?php echo $product->getProductTitle() ?></h4>
                        <h2 class="product__price"><?php echo $product->getProductPrice() ?></h2>
                        <small class="product__calories"><?php echo $product->getProductCalories() . ' calories'?></small>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </main>

    <footer></footer>
</body>
</html>