<?php 
$sum = 0;	
	function CountSteps($x,$y) 
	{
		$x = 1;
		$y = 1;
		$sum = $x + $y;
		echo $sum;
	}
	return function CountSteps($x,$y);
?>