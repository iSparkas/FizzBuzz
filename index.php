<?php 

	$max_num = 100;
	$i = 0;
	
	
	while($i++ < $max_num){
		
		// Way one tricky and hacky if number dividable by 3 AND 5
		if($i % 3 == 0 && $i % 5 == 0){
			echo "FizzBuzz,";
		}elseif($i % 3 == 0){
			echo "Fizz,";
		}elseif($i % 5 == 0){
			echo "Buzz,";	
		}else {
			echo $i.",";
		}
		
		
		// Way 2 more clear and logic if number dividable by 15 (3x5)
		/*
		if($i % 15 == 0){
			echo "FizzBuzz,";
		}elseif($i % 3 == 0){
			echo "Fizz,";
		}elseif($i % 5 == 0){
			echo "Buzz,";	
		}else {
			echo $i.",";
		}
		*/
	}
	
?>
