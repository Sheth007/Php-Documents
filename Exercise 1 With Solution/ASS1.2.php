<?php   
    class rect
    {
        public $length;
        public $width;
        function __construct($le, $wi)
        {
            $this ->length = $le;
            $this ->width = $wi;
        }
         function getArea()
        {
            return $this ->length * $this ->width;
        }
         function getPrimeter()
        {
            return 2* $this ->width +2 * $this ->width;
        }
    }
    $obj = new rect(100, 20);
    echo $obj->getArea()."\n";
    echo $obj->getPrimeter();
?>


