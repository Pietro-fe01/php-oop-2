<?php
    trait colorsAvaiable{
        private $colors_avaiable;

        //Get product colors
        public function getColorsAvaiable(){
            foreach ($this->colors_avaiable as $k => $color) {
                echo ($k == count($this->colors_avaiable) - 1) ? $color . '.' : $color . ', ';
            }
        }
    }