<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	$date =  date('Y/m/d', time());


	echo "<br>";
	echo "2) $date <br>";
	echo "3) ";
	
	if ($date > $tar)
		echo "The Future <br>";
	else if ($date < $tar)
		echo "The Past <br>";
	else if ($date == $tar)
		echo "Oops <br>";

	echo "4) ". strpos($date, "/") ." ". strripos($date, "/")."<br>"; 

	echo "5) " . str_word_count($date). "<br>";
	
	echo "6) " . strlen($date). "<br>";
	
	echo "7) " . ord($date). "<br>";
	
	echo "8) " . substr($date, -2). "<br>";

	echo "9) ";
	
	print_r(explode('/', $date));
	
	echo "<br>";

	echo "10) "; 
	
	for ($i = 0; $i < count($year); $i++) {

	if ((($year[$i] % 4) == 0) && ((($year[$i] % 100) != 0) || (($year[$i] % 400) == 0)))
			echo $year[$i].": True | ";
		else 
			echo $year[$i] . ": False | ";

		
	}
	

?>
