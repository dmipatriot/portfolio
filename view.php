<!DOCTYPE html>
<!--	Author: Kenny Thorson
		Date:	11/11/14
		File:	staffReport3.php
		Purpose:MySQL Exercise
-->

<?php include "head.php"; ?>
<?php include "db_connect.php"; ?>
<?php
$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("<div class='container'><div class='alert alert-danger'>ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error(). ")</div>");
}

$orderBy = array('course_code', 'course_title', 'year_taken','instructor_name','course_grade','semester_taken');
$order = 'course_code';

if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
    $order = $_GET['orderBy'];
	}

// Complete the query between the quotation marks on the line below:
$userQuery = "SELECT course_id, course_code, course_title,course_descr, semester_taken, year_taken, instructor_name, course_grade 
					FROM courses 
					ORDER BY $order"; //Selects the rows to query and the orders the results
$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("<div class='container'><div class='alert alert-danger'>Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) . "</div></div>" );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<div class='container'><legend><h1>List of Courses</h1></legend>");

	print("<table class='table table-striped'>");
	print("<tr><th><a href='?orderBy=course_code'>Course Code</a></th><th><a href='?orderBy=course_title'>Course Title</a></th><th>Description</th><th><a href='?orderBy=semester_taken'>Semester</a></th><th><a href='view.php?orderBy=year_taken'>Year Taken</a></th><th><a href='?orderBy=instructor_name'>Instructor</a></th><th><a href='?orderBy=course_grade'>Grade</a></th><th>Edit/Delete</th></tr>");

	// Complete the code to cycle through the records in the database and display the results
	while ($row = mysqli_fetch_assoc($result))
	{
	print ("<tr><td>".$row['course_code']."</td><td>".$row['course_title']."</td><td>".$row['course_descr']."</td><td>".$row['semester_taken']."</td><td>".$row['year_taken']."</td><td>".$row['instructor_name']."</td><td>".$row['course_grade']."</td><td><a class='btn btn-success btn-xs' href='editcourse.php?id=".$row['course_id']." ?>' role='button'><span class='glyphicon glyphicon-pencil'></span>Edit</a>   <a class='btn btn-danger btn-xs' href='delete.php?id=".$row['course_id']." ?>' role='button'><span class='glyphicon glyphicon-remove'></span>Delete</a></td></tr></div>");  //prints table with information taken from the database
	}
	print("</table><a class='btn btn-success' href='addcourse.php' role='button'><span class='glyphicon glyphicon-plus'></span>Add Course</a>");
}

mysqli_close($connect);   // close the connection
 
?>


<?php include "foot.php"; ?>