<?php
    class myclass
    {
        public $var1;
        public $var2;
        public function __clone()
        {
            $this -> var1 = $this -> var1;
            $this -> var1 = $this -> var2;
        }
    }
    $obj1 = new myclass();
    $val1 = 10;
    $val2 = 20;
    $obj1 -> var1 = &val1;
    $obj2 -> var1 = &val2;
    $obj2 = clone $obj1;

    echo "<br> ".$obj1 -> val1." <br> ".$obj1 -> val2;
    echo "<br> ".$obj1->val1;
    $obj -> val1 = 50;
    echo "<br> ".$obj1 -> val1." <bR> ".$obj1 -> val2;
    echo "Value of second obj is :";
    echo " <br> ".$obj2 -> val1." <bR> ".$obj2 -> val2;
?>