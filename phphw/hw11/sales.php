<!DOCTYPE html>
<!--	Author:Kenny Thorson
		Date: 10/28/14
		File:	sales.php
		Purpose: Chapter 11 Exercise

-->

<html>
<head>
	<title>Sales Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>
	<?php
	print ("<h1>Sales Numbers</h1>");
	
		$salesFile = fopen("salesData.txt","r");
		$salesGet = fgets($salesFile);
		$s = 0;
		$j = 0;
		
		while (!feof($salesFile))
		{
			list($name, $sale) = explode(":", $salesGet);
		if ($name == "Smith"){
			$smithSales[$s] = $sale;
			$s = $s + 1;
		}
		else {
			$jonesSales[$j] = $sale;
			$j = $j +1;
		}
		$salesGet = fgets($salesFile);
		
		}
		
		//rather than using a for loop I was able to calculate the sum and avg using the specific array functions
		$smithAvg = array_sum($smithSales) / sizeof($smithSales);
		$jonesAvg = array_sum($jonesSales) / sizeof($jonesSales);
		
		fclose($salesFile);
		
		print("<p>Smith acheaved " . sizeof($smithSales) . " sales with a total of $" .array_sum($smithSales). ", and an average sale value of $ ". number_format($smithAvg, 2) .".</p>");
		print("<p>Jones acheaved " . sizeof($jonesSales) . " sales with a total of $" .array_sum($jonesSales). ", and an average sale value of $ ". number_format($jonesAvg, 2) .".</p>");
	?>
</body>
</html>
