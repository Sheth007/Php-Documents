<?php
	$x=5;
	function mytest()
	{
		global $x;
		$y=10;
		echo "x is inside function $x<br>";
		print "local variable $y <br>";
	}
	mytest();
	echo "variable x is outside the function $x";
?>