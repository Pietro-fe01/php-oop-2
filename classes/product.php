<?php 

    class Product {
        private $product_image;
        private $product_title;
        private $product_price;
        private $category;

        public function __construct(string $_image, string $_title, string $_price, $_category){
            $this->product_image = $_image;
            $this->product_title = $_title;
            $this->product_price = $_price;
            $this->category = $_category;
        }
    }