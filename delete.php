<!DOCTYPE html>
<!--	Author: Kenny Thorson
		Date:	11/3/14

-->

<?php include "head.php"; ?>
<?php include "db_connect.php"; ?>
<div class="container">
<?php


$connect=mysqli_connect($server, $user, $pw, $db);

$id=$_GET['id'];


if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $id (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

// Complete the query between the quotation marks on the line below:
$userQuery = "DELETE FROM courses WHERE course_id='$id'";//Updates the lastName field and jobTitle field that is associated with empID 12353

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("<div class='alert alert-danger'><center><h1>Course Deleted!</h1>");
	print ("<p>The course information below has been deleted.</p>");
	print ("<p><a class='btn btn-primary' href='view.php' role='button'>Go Back To View Courses</a></p></center></div>");

}


mysqli_close($connect);   // close the connection
 
?>
</div>
<?php include "foot.php"; ?>