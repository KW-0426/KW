<?php
$num1 = 10;
$num2 = 5;
	function Add($num1, $num2)
	{
		$arr = [$num1,$num2];
		$arr1 = array_sum($arr);
		echo "$arr1";
	}
return Add($num1,$num2);
?>