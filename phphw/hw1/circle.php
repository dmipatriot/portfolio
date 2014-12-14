<!--Author: Kenny Thorson
Date: 9/8/14
File: circle.php
Purpose: PHP Practice
-->

<html>
<head>
	<title>First PHP Example</title>
</head>
<body>
	<h1>Circle Calculation</h1>
	
	<?php
	/*this code calculates the circumference of a circle entered in on the circle.html page*/
		$radius = $_POST[ 'radius' ];
		$area = pi() * pow($radius, 2);
		$circumference = 2 * pi() * $radius;
		
		print (" <p> A circle with a radius of $radius has an area of $area and a cercumference of $circumference.</p>");
	?>
	
	<p><a href="circle.html">Calculate another circle?</a></p>
		
</body>
</html>