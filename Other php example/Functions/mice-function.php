<?php
echo "<h1><font color='purple'>Demo for Miscellaneous Function</font></h1><br>";
function line1()
{
echo "<font color='purple'><br>*************************************************************</font><br>";
}
define("PI",3.14);
echo "(1)define()=".PI;
line1();
$val=constant("PI");
echo "(2)constant()=".$val;
line1();
//echo "(4)include()=".include("demo.php");   
//echo "(5)require()=" .require("demo.php");
//echo "(6)header()=".header("location:demo.php");
echo "(3)die()=" .die();   
echo "abc";
?> 