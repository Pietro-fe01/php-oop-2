<?php 

    class Product {
        private $product_image;
        private $product_title;
        private $product_price;
        private $category;

        public function __construct(string $_image, $_category){
            $this->product_image = $_image;
            $this->category = $_category;
        }
    }