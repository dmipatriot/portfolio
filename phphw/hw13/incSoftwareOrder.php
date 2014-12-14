<!--	Author:Kenny Thorson
		Date: 11/22/14
		File:	incSoftwareOrder.php

-->
<?php
		// PROVIDE THE CODE FOR THE getSubTotal FUNCTION..
	function getSubtotal($numCopies)
	{
		$subTotal = $numCopies * 35.75;
		return $subTotal;
	}

		// PROVIDE THE CODE FOR THE getSalesTax FUNCTION..
		
	function getSalesTax($subTotal)
	{
		$salesTax = $subTotal * .07;
		return $salesTax;
	}

		// PROVIDE THE CODE FOR THE getShippingHandling FUNCTION..
	function getShippingHandling($numCopies)
	{
		if ($numCopies < 5)
		{
			$shippingAndHandling = 3.50;
			return $shippingAndHandling;
		}
		else 
		{
			$shippingAndHandling = $numCopies * .75;
			return $shippingAndHandling; 
		}
	
	}

?>