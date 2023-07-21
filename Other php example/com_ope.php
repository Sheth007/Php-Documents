<?php
	$x=10;
	$y=5;
	
	echo"Equal operator ".($x==$y);
	echo"<br>Identical operator ".($x===$y);
	echo"<br>Not Equal operator ".($x!=$y);
	echo"<br>Not Equal operator ".($x<>$y);
	echo"<br>Not Equal operator ".($x!==$y);
	echo"<br>Greater than operator ".($x>$y);
	echo"<br>Greater than equal operator ".($x>=$y);
	echo"<br>Less than operator ".($x<$y);
	echo"<br>Less than equal operator ".($x<=$y);
	echo"<br>Space ship operator ".($x<=>$y);
	echo"<br>";
	$x=10;
	$y=10;
	echo"Spaceship ".($x<=>$y);
	echo"<br>";
	$x=56;
	$y=54;
	echo"Spaceship ".($x<=>$y);
?>