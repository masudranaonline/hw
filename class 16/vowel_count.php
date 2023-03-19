<?php


	$name = "City Polytechnic Instituer Khulna";

	$array = str_split($name);
	$array_size = sizeof($array);


	$vowel_count = 0;
	$vowel = ['a','e','i','o','u','A','E','I','O','U'];
	$vowel_size = sizeof($vowel);

	for($i = 0; $i < $array_size; $i++){
		for($j=0; $j < $vowel_size;$j++){
			if($vowel[$j] == $name[$i]){
				$vowel_count++;
			}
		}
	}

	echo $vowel_count;


