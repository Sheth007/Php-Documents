<?php   
    $x = 10;
    $y = 20;

    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y']; 
    }

    addition();
    echo "Addition is : ".$z;
?>