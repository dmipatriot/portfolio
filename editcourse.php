<!DOCTYPE html5>
<!--	Author: Kenny Thorson
		Date:	11/3/14

-->
<?php include "head.php"; ?>
<?php include "db_connect.php"; ?><!-- Database Connection-->
<?php 
// Connect to server and select database.
mysql_connect("$server", "$user", "$pw")or die("cannot connect"); 
mysql_select_db("$db")or die("cannot select DB");

// get value of id that sent from address bar so it can use the ID to get the rest of the info from database to prepopulate form
$id=$_GET['id'];

// Retrieve data from database 
$sql="SELECT * FROM courses WHERE course_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>


<div class="container">
	<legend><h1>Edit Course</h1></legend>
	<p>This page will edit the course info already in the database!</p>
<!-- Begining of form-->
	<form class="form-horizontal" id="addClass" action = "edit.php" method = "post" >
	<div class="form-group">
		<div class="col-md-3">
			<input type = "hidden" class="form-control" name = "course_id"  value="<?php echo $rows['course_id']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Course #</label>
		<div class="col-md-3">
			<input type = "text" class="form-control" name = "course_code" value="<?php echo $rows['course_code']; ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Course Title</label>
		<div class="col-md-3">
			<input type = "text"  class="form-control" name = "course_title" value="<?php echo $rows['course_title']; ?>"/>
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Description</label>
		<div class="col-md-6">
		<input type = "text"  class="form-control" name = "course_descr" value="<?php echo $rows['course_descr']; ?>"/>

		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Semester Taken</label>
        <div class="col-md-3">
        <select class="form-control" id="semester_taken" name="semester_taken">
			<option value="<?php echo $rows['semester_taken']; ?>" selected><?php echo $rows['semester_taken']; ?></option>
			<option value="Fall">Fall</option>
			<option value="Spring">Spring</option>
			<option value="Summer">Summer</option>
        </select>
      </div>
    </div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Year Taken</label>
        <div class="col-md-3">
        <select class="form-control" id="year_taken" name="year_taken">
			<option value="<?php echo $rows['year_taken']; ?>" selected><?php echo $rows['year_taken']; ?></option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2009</option>
        </select>
      </div>
    </div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Instructor</label>
		<div class="col-md-3">
		<input type = "text"  class="form-control" name = "instructor_name" value="<?php echo $rows['instructor_name']; ?>" />
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Grade</label>
		<div class="col-md-3">
		<input type = "text"  class="form-control" name = "course_grade" value="<?php echo $rows['course_grade']; ?>"  />
		</div>
	</div>
<!-- End of form -->
	<input type = "submit" class="btn btn-default" value = "Submit"  /></td></tr>
		</form>
	</div>
</div>

<?php include "foot.php"; ?>
