<!DOCTYPE html>
<!--	Author:Kenny Thorson
		Date:10/27/14
		File:	fuelCosts.php
		Purpose: Chapter 9 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$carMake = $_POST['carMake'];
		$carModel = $_POST['carModel'];		
		$mpg = $_POST['mpg'];
		$costPerGallon = $_POST['costPerGallon'];
		
		// Add a table here that uses a FOR loop to display the fuel costs
		// for 10,000 to 100,000 miles of travel in 10,000 mile increments
		// See instructions in the textbook for details.
		print("<table border=\"1\"> ");
		print("<tr><td><strong>Miles</strong></td><td><strong>Cost</strong></td></tr>");//adds the header portion of the table
		
		for ($miles = 10000; $miles <= 100000; $miles = $miles + 10000)//loops and adds 10000 until it = 100000
			{
			$cost = ($miles / $mpg) * $costPerGallon;
			$cost = number_format($cost, 2, '.', '');//turns totals into number format
			print ("<tr><td class=\"center\">$miles</td>
			<td class=\"center\">$cost</td></tr>");//prints cost and table
			}
		
		print("</table>");

		
			
	?>

</body>
</html>
