<?php
	$main_str = 'Bangladesh';
	$main_substr = 'adesh';

	$str = str_split($main_str);  // ['P','o','t','y','','e','c','h','n','i','c']
	$substr = str_split($main_substr); // ['t','e','c''h]

	$str_size = sizeof($str);
	$substr_size = sizeof($substr);

	$positions = [];
	$substr_status = 0;

	if(str_contains($main_str, $main_substr))
	{

		for($i = 0; $i < $substr_size; $i++)
		{
			for($j = 0; $j < $str_size; $j++)
			{
				if($substr[$i] == $str[$j])
				{
					$status = 1;
					break;
				}
			}

			if($status)
			{
				array_push($positions,$j);
				$substr_status = 1;
			}
			else
			{
				$substr_status = 0;
				// break;
			}
		}

		echo $positions[0];
	}
	else{
		echo " Not a valid sub string";
	}