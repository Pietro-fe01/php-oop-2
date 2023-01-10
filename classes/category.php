<?php 

    class Category {
        private $category;

        public function __construct(string $_category){
            if(strtolower($_category) == 'dog' || strtolower($_category) == 'cat'){
                $this->category = $_category;
            } else {
                throw new Exception("Error! Product's category must be 'dog' or 'cat' only.", 1);
            }
        }
    }