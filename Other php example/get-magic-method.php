<?php
    class megic{
        function __get($name){
            echo "trying to get ".$name." which is either not accessible or not exisitng member";
        }
    }
    $obj = new magic();
    $obj -> value();
?>