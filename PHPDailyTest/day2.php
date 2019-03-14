<?php
	function flower()
	{
		$max = 999;
		$min = 100;
		$arr = [];
		for($i=$min;$i<=$max;$i++)
		{
			$g = floor($i%10);
			$s = floor($i/10%10);
			$b = floor($i/100%10);
			if($g*$g*$g+$s*$s*$s+$b*$b*$b == $i)
			{
				$arr[] = $i;
			}
			return $arr;
		}
	}
	var_dump(flower());
?>