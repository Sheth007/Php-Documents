<?php
    class magicmethod{
        private $value;
        function __set($name, $value){
            echo "Trying to modify ".$name." with ".$value." which is inaccessible or not existing member";
        }
    }
    $obj = new magicmethod();
    $obj -> value = "Hello";
?>