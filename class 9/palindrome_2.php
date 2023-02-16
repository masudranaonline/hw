<?php 
	$number = 225;
	$revnumber = 0;


	while( $number > 0)
	{
		$r = $number % 10;
		$revnumber = ($revnumber * 10) + $r;

		$number = (int)($number/10);
	}
	echo $revnumber;

	if ($number == $revnumber) {
		echo "This is a palindrome number";
	}



