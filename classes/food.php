<?php 
    class Food extends Product {
        private string $product_type = 'FOOD';
        private $calories;
        private $food_deadline;

        public function __construct(string $_image, string $_title, string $_price, $_category, int $_calories){
            parent::__construct($_image, $_title, $_price, $_category);
            $this->calories = $_calories;
        }

        public function getProductType(){
            return $this->product_type;
        }

        // Get product calories
        public function getProductCalories(){
            return $this->calories;
        }
    }