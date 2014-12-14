<?php include "head.php"; ?>
<?php include "db_connect.php"; ?>
<?php
$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

//Get all info from form
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];
$course_descr = $_POST['course_descr'];
$semester_taken = $_POST['semester_taken'];
$year_taken = $_POST['year_taken'];
$instructor_name = $_POST['instructor_name'];
$course_grade = $_POST['course_grade'];

// Inserts all of the information into the database
$userQuery = "INSERT INTO courses (course_code, course_title, course_descr, semester_taken, year_taken, instructor_name, course_grade ) VALUES ('$course_code','$course_title','$course_descr','$semester_taken','$year_taken','$instructor_name','$course_grade') ";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}
else
{
	//Prints out success message, button to go back to view, and a review of what was added to the database
	print("<div class='alert alert-success'><center><h1>Course Added!</h1>");
	print ("<p>The course information has been added to the database. Please review to make sure they are correct.</p>");
	print ("<p><a class='btn btn-primary' href='view.php' role='button'>Go Back To View Courses</a></p></center></div>");
	print("<table class='table table-striped'>
			<tr><td><strong>Course Code</strong></td><td>$course_code</td></tr>
			<tr><td><strong>Course Title</strong></td><td>$course_title</td></tr>
			<tr><td><strong>Course Description</strong></td><td>$course_descr</td></tr>
			<tr><td><strong>Semester</strong></td><td>$semester_taken</td></tr>
			<tr><td><strong>Year Taken</strong></td><td>$year_taken</td></tr>
			<tr><td><strong>Instructor</strong></td><td>$instructor_name</td></tr>
			<tr><td><strong>Grade</strong></td><td>$course_grade</td></tr>
			</table></div>");
}

mysqli_close($connect);   // close the connection
 
?>
<?php include "foot.php"; ?>