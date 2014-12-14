<!DOCTYPE html>
<!--	Author: Kenny Thorson
		Date:	11/3/14

-->

<?php include "head.php"; ?>
<?php include "db_connect.php"; ?>
<div class="container">
<?php


$connect=mysqli_connect($server, $user, $pw, $db);

$course_id = $_POST['course_id'];
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$course_descr = $_POST['course_descr'];
$semester_taken = $_POST['semester_taken'];
$year_taken = $_POST['year_taken'];
$instructor_name = $_POST['instructor_name'];
$course_grade = $_POST['course_grade'];

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $course_id (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

// Complete the query between the quotation marks on the line below:
$userQuery = "UPDATE courses SET course_code='$course_code', course_title='$course_title', course_descr='$course_descr', semester_taken='$semester_taken', year_taken='$year_taken', instructor_name='$instructor_name', course_grade='$course_grade'  

WHERE course_id='$course_id' "; //Updates the lastName field and jobTitle field that is associated with empID 12353

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	print("<div class='alert alert-success'><center><h1>Course Updated!</h1>");
	print ("<p>The course information has been updated. Please review your edits and make sure they are correct.</p>");
	print ("<p><a class='btn btn-primary' href='view.php' role='button'>Go Back To View Courses</a></p></center></div>");
		print("<table class='table table-striped'>
			<tr><td><strong>Course Code</strong></td><td>$course_code</td></tr>
			<tr><td><strong>Course Title</strong></td><td>$course_title</td></tr>
			<tr><td><strong>Course Description</strong></td><td>$course_descr</td></tr>
			<tr><td><strong>Semester</strong></td><td>$semester_taken</td></tr>
			<tr><td><strong>Year Taken</strong></td><td>$year_taken</td></tr>
			<tr><td><strong>Instructor</strong></td><td>$instructor_name</td></tr>
			<tr><td><strong>Grade</strong></td><td>$course_grade</td></tr>
			</table>");
}


mysqli_close($connect);   // close the connection
 
?>
</div>
<?php include "foot.php"; ?>