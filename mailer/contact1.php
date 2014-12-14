<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
    <script src="app.js"></script>
    <script src="controllers.js"></script>
</head>
<body ng-app="contactApp" >
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Thor Web Designs</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="slideshow.php">Slideshow</a></li>
			<li><a href="location.php">Location</a></li>
			<li><a href="mailer/contact.php">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">2014 Classes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">PHP & MySQL <span class="caret"></span></a></li>
                <li><a href="#">Web Applications</a></li>
                <li><a href="#">Multimedia</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</br></br></br></br>
  <div class="container">
<legend><h1>Email Me</h1></legend>
    <div class="vertical-top">

            <div class="panel panel-default">
                <div ng-controller="ContactController" class="panel-body">
                    <form ng-submit="submit(contactform)" name="contactform" method="post" action="" class="form-horizontal" role="form">
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputName" type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputEmail" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputSubject.$invalid && submitted }">
                            <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputSubject" type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                            <label for="inputMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea ng-model="formData.inputMessage" class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." required></textarea>
                            </div>
                        </div>
		<div class="form-group">
      <label class="col-lg-4 control-label">How did you hear about me?</label>
      <div class="col-lg-7">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="Radio">
            Radio
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="TV">
            TV
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios3" value="Other">
			Other
          </label>
        </div>
      </div>
    </div>
		<div class="form-group">
      <label for="select" class="col-lg-5 control-label">What State Are You From?</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
			<option value="State">State</option>
			<option value="AK">AK</option>
			<option value="AL">AL</option>
			<option value="AR">AR</option>
			<option value="AZ">AZ</option>
			<option value="CA">CA</option>
			<option value="CO">CO</option>
			<option value="CT">CT</option>
			<option value="DC">DC</option>
			<option value="DE">DE</option>
			<option value="FL">FL</option>
			<option value="GA">GA</option>
			<option value="HI">HI</option>
			<option value="IA">IA</option>
			<option value="ID">ID</option>
			<option value="IL">IL</option>
			<option value="IN">IN</option>
			<option value="KS">KS</option>
			<option value="KY">KY</option>
			<option value="LA">LA</option>
			<option value="MA">MA</option>
			<option value="MD">MD</option>
			<option value="ME">ME</option>
			<option value="MI">MI</option>
			<option value="MN">MN</option>
			<option value="MO">MO</option>
			<option value="MS">MS</option>
			<option value="MT">MT</option>
			<option value="NC">NC</option>
			<option value="ND">ND</option>
			<option value="NE">NE</option>
			<option value="NH">NH</option>
			<option value="NJ">NJ</option>
			<option value="NM">NM</option>
			<option value="NV">NV</option>
			<option value="NY">NY</option>
			<option value="OH">OH</option>
			<option value="OK">OK</option>
			<option value="OR">OR</option>
			<option value="PA">PA</option>
			<option value="RI">RI</option>
			<option value="SC">SC</option>
			<option value="SD">SD</option>
			<option value="TN">TN</option>
			<option value="TX">TX</option>
			<option value="UT">UT</option>
			<option value="VA">VA</option>
			<option value="VT">VT</option>
			<option value="WA">WA</option>
			<option value="WI">WI</option>
			<option value="WV">WV</option>
			<option value="WY">WY</option>		  
        </select>
      </div>
    </div>
                        <div class="form-group">
                            <div class="col-lg-offset-7 col-lg-10">
                                <button type="submit" class="btn btn-success" ng-disabled="submitButtonDisabled">
                                    <span class="glyphicon glyphicon-envelope"></span> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                </div>
            </div>
        </div>
    </div>
</br></br></br></br>
	    <div id="footer">
      <div class="container">
        <p>Kenny Thorson&copy; 2014 </p>
		<p>Created for  <a href="http://www.minnesota.edu/programs_majors.php?prog_code=325#/">Web Development</a> Classes @ <a href="http://www.minnesota.edu/">MState</a>.</p>
      </div>
    </div>
	<script src="dist/js/contact.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/docs.min.js"></script>
	<script src="dist/js/ui-bootstrap-0.12.0.js"></script>
</body>
	
</html>

