<!--	Author: 	Kenny Thorson
		Date:		August 20, 2014
		File:		onyourown.php
-->

<?php include "Head.php"; ?>
<h1> On Your Own PHP Page</h1>
<?php
// Set today's date:
$today = 'September 20, 2014';

// Programmer's first and last name:
$fname = 'Kenny';
$lname = 'Thorson';

// Print your full name and date on separate lines:

		print("<p>My Name is $fname $lname </p>");
		print("<p>Todays date is $today </p>");
?>
<h2>Assignment</h2>
<?php
// Complete the number variable and assignment with operations from the homework:
$value = 8;
$plus = $value + 2;
$sub = $plus - 4;
$mult = $sub * 5;
$div = $mult / 3;


	print("<p>Value is now $value</p>");
	print("<p>Add 2. Value is now $plus</p>");
	print("<p>Subtract 4. Value is now $sub</p>");
	print("<p>Multiply by 5. Value is now $mult</p>");
	print("<p>Divide by 3. Value is now $div</p>");
$div++;
	print("<p>Increment by one. Value is now $div</p>");
$div--;
	print("<p>Decrese by one. Value is now $div</p>");
	

?>

<?php include "Foot.php"; ?>
