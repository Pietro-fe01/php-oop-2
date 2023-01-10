<?php 

    class Product {
        private $product_image;
        private $product_title;
        private $product_price;
        private $category;

        public function __construct($_category){
            $this->category = $_category;
        }
    }