<!DOCTYPE html>
<!--	Author: 	Kenny Thorson
		Date:		August 20, 2014
		File:		index.php
		Purpose: 	This is the home page
-->

<?php include "head.php"; ?>
 <!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

	<!-- Main landing page showing class info -->
	<div class="jumbotron text-center">
		<h1>PHP & MySQL </h1>
		<p>This is the home page for my PHP & MySQL class. We created many different PHP elements within this class. One was the ability to add classes I have taken to a database. Please feel free to click the button below to see the the data displayed. Also listed below are some of the projects I worked on for the class. </p>
		<a class = "btn btn-primary" href="view.php">Database</a>
	</div>
	<div class="row"><!-- Adds fist column of rows-->
		<div class="col-md-4">
			<h2 class="text-center">Chapters 1-2</h2>
			<p>Goes over basic PHP. In the example you enter a radius of a cercle and it returns the area and cercumference.</p>
			<p class="text-center"><a class="btn btn-default" href="" ><span class="glyphicon glyphicon-inbox"></span>  View Homework</a></p>
		</div>
		<div class="col-md-4">
			<h2 class="text-center">Chapters 3-5</h2>
			<p>Created custom headers and footers for the PHP pages. Also included was a code with basic PHP that added and subtracted.</p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw3-5/onyourown.php" ><span class="glyphicon glyphicon-inbox"></span>  View Homework</a></p>
		</div>
		<div class="col-md-4">
			<h2 class="text-center">Chapters 6-8</h2>
			<p>In chapters 6-8 it covered more PHP and more advanced PHP functions and printing out results. </p>
			<p class="text-center"><a class="btn btn-default" href="phphw/ch6trip/tripLog.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 6</a></p>
			<p class="text-center"><a class="btn btn-default" href="phphw/ch7fuel/fuelCost.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 7</a></p>
			<p class="text-center"><a class="btn btn-default" href="phphw/ch8software/softwareOrder.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 8</a></p>
		</div>
		</div>
	<div class="row"><!-- Adds second column of rows-->
		<div class="col-md-4">
			<h2 class="text-center">Chapters 9-11</h2>
			<p>In chapters 9-11 it covered more PHP and adding, editing, and getting information from text files.</p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw9/fuelCosts.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 9</a></p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw10/busTravel.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 10</a></p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw11/sales.html" ><span class="glyphicon glyphicon-inbox"></span>  View Ch 11</a></p>
		</div>
		<div class="col-md-4">
			<h2 class="text-center">Chapter 13</h2>
			<p>Chapter 13 covers Functions and Objects. By gathering information from a form we are able to do calculations and produce a result of those calculations in a eye pleasing way. </p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw13/airFare.html" ><span class="glyphicon glyphicon-inbox"></span>  Example 1</a></p>
			<p class="text-center"><a class="btn btn-default" href="phphw/hw13/softwareOrder.html" ><span class="glyphicon glyphicon-inbox"></span>  Example 2</a></p>
		</div>
		<div class="col-md-4">
			<h2 class="text-center">Chapter 14</h2>
			<p></p>
			<p class="text-center"><a class="btn btn-default" href="" ><span class="glyphicon glyphicon-inbox"></span>  View Homework</a></p>
		</div>
	</div>
	
	
</div> <!-- /container -->



<?php include "foot.php"; ?>
