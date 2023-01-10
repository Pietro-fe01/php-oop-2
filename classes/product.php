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

        // Get product image
        public function getProductImage(){
            return $this->product_image;
        }

        // Get product title
        public function getProductTitle(){
            return $this->product_title;
        }

        // Get product price
        public function getProductPrice(){
            return $this->product_price;
        }

        // Get product category
        public function getProductCategory(){
            return $this->category;
        }
    }