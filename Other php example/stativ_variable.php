<?php
	function ums()
	{
		static $x=0;
		echo $x."<br>";
		$x++;
	}
	ums();
	ums();
	ums();
?>