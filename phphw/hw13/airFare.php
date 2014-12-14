<!DOCTYPE html>
<!--	Author:Kenny Thorson
		Date: 11/22/14
	File:	airFare.php
	Purpose:Chapter 13 Exercise


-->


<html>
<head>
	<title>AIR FARE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>AIR FARE CALCULATOR</h1>

	<?php
		include ("incTravel.php");//includeds the incTravel.php so it can call functions
		
		$destination = $_POST['destination'];
		
		// Add the code below to call the functions to obtain airfare and airlines based on the user's destination:
		
		$airFare = getAirfare($destination);//gets $airFare from function on incTravel.php 
		$airline = getAirline($destination);//gets $airline from function on incTravel.php

		print("<p>Destination: $destination<br>");
		print("The air fare is $".number_format($airFare, 2)." on $airline.</p>");


	?>

</body>
</html>
