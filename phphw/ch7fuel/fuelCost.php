<!--	
		Author:Kenny Thorson	
		Date:10/7/14
		File:	fuelCost.php
		Purpose: Chapter 7 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$mpg = $_POST['mpg'];
		$miles = $_POST['miles'];		
		$costPerGallon = $_POST['costPerGallon'];
		$work = $_POST['work'];
		$fuelCost = round($miles / $mpg * $costPerGallon,2);
		$reimbursment = round($miles * .35,2);//added round so it is easier to veiw
		
		if ($work == YES)//if work == YES it runs the next sequence
		{
		print ("<h1>Fuel Cost Calculator</h1>");
		print ("<p>Your fuel cost is $$fuelCost. Since this was a work related you will be reimbursed $$reimbursment.</p>");
		}
		else // if work == NO it runs this next sequence 
		{
		print ("<h1>Fuel Cost Calculator</h1>");
		print ("<p>Your fuel cost is $$fuelCost.</p>");
		}
	?>

</body>
</html>
