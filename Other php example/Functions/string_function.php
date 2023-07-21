<!--Write a php script for string function. -->
<?php
function line()
{
	echo "<br>_______________________________<br>";
}
echo "<h1>Demo for String Function</h1>";
line();
echo "(1)Chr=".chr(65);
line();

echo "(2)ord=".ord('a');
line();

$upper="HELLO";
echo "(3)strtolower=".strtolower($upper)."<br>";
echo "(3)strtolower=".strtolower("HOW R U???");
line();

$lower="hello";
echo "(4)strtoupper=".strtoupper($lower)."<br>";
echo "(4)strtoupper=".strtoupper("how r u???");
line();

$len="hello";
echo "(5)strlen=".strlen($len)."<br>";
echo "(5)strlen=".strlen("how r u???");
line();

$trim="           hello        ";
echo "(6)trim=".trim($trim)."<br>";
$trim ="***************hello********";
echo "(6)trim=".trim($trim,"*");
line();

$substr="hello How r u?";
echo "(7)substr=".substr($substr,2,6);
line();

echo "(8)strcmp=".strcmp("hello","Hello");
line();

echo "(9)strstr=".strstr("Hello How r u?",'o');
line();

echo "(10)strrev=".strrev("Hello");
line();

$nm="hema&neha&rina&tina";
$array=explode("&",$nm);
echo "(11)explode=";
print_r($array);
line();

echo "(12)implode=";
$nm=implode(",",$array);
echo $nm."<br>";
line();


echo "(13)md5=<br>";
echo "Row 16=".md5("abcd",TRUE)."<br>";
echo "Row 32=".md5("abcd")."<br>";
line();

echo "(14)substr_compare=".substr_compare("nice","ni",0,2);
line();

echo "(15)substr_count=".substr_count("niceic","ic");
line();

echo "(16)replace=".str_replace("hema","neha","hema,neha,sushma");
?>