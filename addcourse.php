<!DOCTYPE html>
<?php include "head.php"; ?>

<!-- Begining of form-->
<div class="container">
	<legend><h1>Add Course</h1></legend>
	<p>This page will add a course and information to the database.</p>
	<form class="form-horizontal" id="addClass" action = "add.php" method = "post">
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Course #</label>
		<div class="col-md-3">
			<input type = "text" class="form-control" name = "course_code" placeholder="WEB  1150......" />
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Course Title</label>
		<div class="col-md-3">
			<input type = "text"  class="form-control" name = "course_title" placeholder="PHP & MYSQL....."/>
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Description</label>
		<div class="col-md-3">
		<textarea  class="form-control" rows="2" id="inputMessage" name="course_descr" placeholder="Your message..."></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Semester Taken</label>
        <div class="col-md-3">
        <select class="form-control" id="semester_taken" name="semester_taken">
			<option value="" selected disabled>Fall, Spring, or Summer</option>
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
			<option value="" selected disabled>Please Select Year</option>
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
		<input type = "text"  class="form-control" name = "instructor_name"  />
		</div>
	</div>
	<div class="form-group">
		<label for="inputcCode" class="col-sm-2 control-label">Grade</label>
		<div class="col-md-3">
		<input type = "text"  class="form-control" name = "course_grade"  placeholder="A+...."/>
		</div>
	</div>
	<input type = "submit" class="btn btn-default" value = "Submit"  /></td></tr>

		</form><!-- End of Form-->

	</div>
</div>

<?php include "foot.php"; ?>
