<?php
	$date =  date('Y/m/d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	echo "2). $date";
	echo "3)";
	
	if ($date > $tar)
		echo "The Future";
	else if ($date < $tar)
		echo "The Past";
	else ($date == $tar)
		echo "Oops";

	echo "4)". strpos($date, "/") . stripos($date, "/"); 

	echo "5)" . str_word_count($date);
	
	echo "6)" . strlen($date);
	
	echo "7)" . ord($date);
	
	echo "8)" . substr($date, -2);

	echo "9)" . print_r(explode('/', $date);
	
	
	
	
	
	

?>
