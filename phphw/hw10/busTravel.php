<!DOCTYPE html>
<!--	Author:Kenny Thorson
		Date: 10/28/14
		File:	busTravel.php
		Purpose: Chapter 10 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
	
		// Add your code here to meet the requirements of this exercise
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT SUMMARY</h1>");

		// Add your code here to meet the requirements of this exercise
				
		$busFile = fopen("busTravel.txt","r");
		$travelGet = fgets($busFile);
		$grandTotal = 0;
		
		while (!feof($busFile))
		{
			list($date, $miles,$breakfast,$lunch,$dinner,$hotel) = explode(":", $travelGet);			
		If ($breakfast == 'YES')//begin set prices for travel
		{
			$breakfastAllowance = 6.00;
		}
		else
		{
			$breakfastAllowance = 0;
		}
		If ($lunch == 'YES')
		{
			$lunchAllowance = 8.50;
		}
		else
		{
			$lunchAllowance = 0;
		}
		If ($dinner == 'YES')
		{
			$dinnerAllowance = 17.50;
		}
		else
		{
			$dinnerAllowance = 0;
		}
		If ($hotel == 'YES')
		{
			$hotelAllowance = 110.00;
		}
		else
		{
			$hotelAllowance = 0;//end set prices of travel
		}
		
		$total = ($miles * .35) + $breakfastAllowance + $lunchAllowance + $dinnerAllowance + $hotelAllowance;//total up single trip
		
		$grandTotal = $total + $grandTotal;//add single trip to grand total
		
		$travelGet = fgets($busFile);//opens file to read next line
		}
		
		fclose($busFile);				// closes file

		print("<p>Your total reimbursement for this period is $".number_format($grandTotal, 2)."</p>");
	?>

</body>
</html>
