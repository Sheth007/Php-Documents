<?php
    class magicmethod{
        public $a;
        function __debuginfo(){
            return array("var"->100);
        }
    }
    $obj = new magicmethod();
    var__dump($obj);
?>