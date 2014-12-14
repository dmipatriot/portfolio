<!DOCTYPE html>
<!--	Author:Kenny Thorson
		Date: 11/22/14
		File:	softWareOrder.php

-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>

	<h1>SaveTheWorld Software: Order Form</h1>

	<?php
		include ("incSoftwareOrder.php");

		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];

		if ($numCopies < 1)
			print("ERROR: You must order at least 1 copy!");
		else
		{
			$subTotal = getSubTotal($numCopies);
			$salesTax = getSalesTax($subTotal);
			$shippingAndHandling = getShippingHandling($numCopies);

			$totalCost = $subTotal + $salesTax + $shippingAndHandling;

			print("<hr /><p><strong>YOUR ORDER:</strong> </p><hr />");
			print("<p>Operating System: $os<br />");
			print("Number of copies: $numCopies<br />");
			print("Sub-total: $". number_format($subTotal,2) ."<br />");
			print("Sales tax: $". number_format($salesTax,2) ."<br />");
			print("Shipping and handling: $". number_format($shippingAndHandling,2) ."</p>");
			print("<hr /><p><strong>TOTAL: $". number_format($totalCost,2) ."</strong></p><hr />");
		}
	?>

</body>
</html>
