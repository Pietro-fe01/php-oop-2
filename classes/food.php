<?php 
    class Food extends Product{
        private string $product_type = 'food';
        private $calories;
        private $food_deadline;

        public function __construct(string $_image, string $_title, string $_price, $_category, int $_calories){
            parent::__construct($_image, $_title, $_price, $_category);
            $this->calories = $_calories;
        }
    }