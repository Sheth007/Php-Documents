<?php
    class myclass
    {
        public $data;
    }
    $obj1 = new myclass();
    $obj1 -> data = 42;
    $obj2 = clone $obj1;
    echo $obj1->data;
    echo $obj2->data;
    $obj2->data=100;
    echo $obj1->data;
    echo $obj2->data;
?>