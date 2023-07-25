<?php
    class magicmethod{
        function __tostring(){
            return "Magic Method is in use";
        }
    }
    $obj = new magicmethod();
    echo $obj;
?>