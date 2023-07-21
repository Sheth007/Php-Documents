<?php
	$x=90;
	$y=76;
	$z=77;
	$a=54;
	$b=56;
	$tot=$x+$y+$z+$a+$b;
	echo"Total marks is :".$tot;
	$per=$tot/5;
	echo"Percentage is :".$per;
	if($per>=70)
		echo"A";
	else if($per>=60 && $per<=70)
		echo"B";
	else if($per>=50 && $per<=60)
		echo"C";
	else if($per>=40 && $per<=50)
		echo"D";
	else
		echo"Fail"
?>
	