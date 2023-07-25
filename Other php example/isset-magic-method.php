<?php
    class manager{
        private $dat array = array();
        public function __isset($n){
            echo "__isset() magic method is invoked";
            return isset ($this -> dat[$n])   
        }
    }
?>