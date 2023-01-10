<?php 

    class Category {
        private $category;
        private string $icon;

        public function __construct(string $_category){
            switch (strtolower($_category)) {
                case 'dog':
                    $this->category = 'DOG';
                    $this->icon = 'data:image/png;base64,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';
                    break;
                case 'cat':
                    $this->category = 'CAT';
                    $this->icon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzq5TDTyQxbZPap65KtLZ7EmmQo8Roy6SGmsEphFnYNTsiteLLyfeWD18JRQvNl8PXJWA&usqp=CAU';
                    break;
                default:
                    throw new Exception("Error! Product's category must be 'dog' or 'cat' only.", 1);
                    break;
            }
        }

        // Get category
        public function getCategory(){
            return $this->category;
        }

        // Get icon
        public function getIcon(){
            return $this->icon;
        }
    }