<?php
    class myclass
    {
        public $var1="value1";
        public $var2="value2";
        public $var3="value3";
        protected $protected = "protected var";
        private $private = "private var";
        function iterationvisible()
        {
            echo "From the calss iteration visible";
            foreach($this as $key => $value)
            {
                echo "$key => $value";
            }
        }
    }
    $obj = new myclass();
    foreach($obj as $key => $value)
    {
        echo "$key => $value";
    }
    echo "<br> From the class";
    echo $obj->iterationvisible();
?>