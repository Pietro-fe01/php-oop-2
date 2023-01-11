<?php
    // Specifies where the product's made from
    trait MadeOfWhere {
        private $whereIsMade;

        // Set where is made
        public function setWhereIsMade($_where) {
            $this->whereIsMade = $_where;
        }

        // Get where is made
        public function getWhereIsMade() {
            return "Made in {$this->whereIsMade}.";
        }
    }