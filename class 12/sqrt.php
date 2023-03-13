<?php

	$number = 36;

	$Status = 0;

	for($counter = 1; $counter < $number; $counter++)
	{
		if($counter * $counter  == $number)
		{
			$Status = 1;
			break;
		}
	}


	if($Status)
		echo $number." is a square root number";
	else
		echo $number." is not a square root number";