<!DOCTYPE html>
<!--	
		Author:Kenny Thorson	
		Date:10/7/14
		File:	softwareOrder.html
		Purpose: Chapter 8 Exercise
-->


<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>YOUR ORDER:</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];

		$subTotal = $numCopies * 35.00;
		$salesTax = $subTotal * 0.07;
		
	if (empty($numCopies) OR $numCopies ==0)// if numCopies is blank or 0 an error pops up with a link back to the form
		{
		print("ERROR: you must select atleast 1 copy <br><br><a href=\"softwareOrder.html\"><strong>Return to Form</strong></a>");
		}
	else
		{
			if ($numCopies < 5) //asks if the number of copies is less than 5
				{	$shippingAndHandling = 3.50;
				}
			elseif ($numCopies <= 10)
				{
				$shippingAndHandling = $numCopies * .75;// if greater than 5 < 10 than it only takes the .75*copies as the price
				}
			elseif ($numCopies > 10)
				{
				$shippingAndHandling = $numCopies * .85;// if greater than 10 than it only takes the .85*copies as the price
				}
			
		//Continues and prints results added back to form button also
		$totalCost = $subTotal + $salesTax + $shippingAndHandling;
		print("<table border = \"2\"><tr><td>Operating System</td><td>$os</td></tr>");
		print("<tr><td>Number of copies</td><td>$numCopies</td><td>");
		print("<tr><td>Sub-total</td><td align=\"right\">$".number_format($subTotal, 2)."</td></tr>");
		print("<tr><td>Sales tax</td><td align=\"right\">$".number_format($salesTax, 2)."</td></tr>");
		print("<tr><td>Shipping and handling</td><td align=\"right\">$".number_format($shippingAndHandling, 2)."</td></tr>");
		print("<tr><td>TOTAL:</td><td align=\"right\">$".number_format($totalCost, 2)."</td></tr></table>");
		print("<br><br><a href=\"softwareOrder.html\"><strong>Return to Form</strong></a>");
		}

	?>

</body>
</html>
