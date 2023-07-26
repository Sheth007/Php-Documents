<?php
    class baseclass{
        final public function moretostring(){
            echo "base class";
        }
    }
    class childclass extends baseclass{
        public function moretostring(){
            echo "child class";
        }
    }
    $obj = new childclass();
?>