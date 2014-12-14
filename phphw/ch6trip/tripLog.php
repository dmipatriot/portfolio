<!DOCTYPE html>
<!--	Author:Kenny Thorson	
		Date:10/7/14
		File:	tripLog.php
		Purpose: Chapter 6 Exercise

-->

<html>
<head>
	<title>TRIP LOG</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];
		
		// add the code to append this information to the tripLog.txt file
		$tripFile =fopen ("tripLog.txt","a");// Opens txt file and says the file will append the txt file
		fputs($tripFile, "\n $tripDate:$miles:$breakfast:$lunch:$dinner:$hotel");/*writes the needed info into the text file. I found that it seem to look better if I put th e \n at the beginning of the writing then the end */
		fclose($tripFile); //closes the text file
		
		
		print ("<h1>TRIP LOG</h1>");
		print ("<p>Your trip on $tripDate has been added to the Trip Log</p>");	
		
		
	?>

</body>
</html>
