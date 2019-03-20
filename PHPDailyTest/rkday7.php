<?php
	$arr[] = 0;
	function GetUglyNumber_Solution($index)
	{
		for($i=2;$i<=$index;$i++)
		{
			$j = $i;
			while($j) 
			{
				if($j % 2 == 0)
				{
					if($j % 3 == 0)
					{
						if($j % 5 == 0)
						{
							$arr[] = $index;
						}
					}
				}
			}
		}
	}
	return 	GetUglyNumber_Solution($index);
?>