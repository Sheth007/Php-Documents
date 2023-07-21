<?php
	function ref(&$val)
	{
		$val+=5;
	}
	$num=2;
	echo "variable before function calling is....".$num."<br>";
	ref($num);
	echo "Variable after function calling is....".$num."<br>";
?>