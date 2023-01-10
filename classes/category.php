<?php 

    class Category {
        private $category;
        private string $icon;

        public function __construct(string $_category){
            switch (strtolower($_category)) {
                case 'dog':
                    $this->category = $_category;
                    $this->icon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBFCBlaoX9ZfI2aVbUpZYpdVQz-o6k6iDgsw&usqp=CAU';
                    break;
                case 'cat':
                    $this->category = $_category;
                    $this->icon = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDgXg4Wb53Y17_JVpAgrMO4u4AwSpH4galUQ&usqp=CAU';
                    break;
                default:
                    throw new Exception("Error! Product's category must be 'dog' or 'cat' only.", 1);
                    break;
            }
        }
    }