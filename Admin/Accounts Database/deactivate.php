<?php

	// Connect to database
	$con=mysqli_connect("localhost","root","","tests");

	// Check if id is set or not, if true,
	// toggle else simply go back to the page
	if (isset($_GET['email'])){

		// Store the value from get to
		// a local variable "course_id"
		$course_id=$_GET['email'];

		// SQL query that sets the status to
		// 0 to indicate deactivation.
		$sql="UPDATE tbl_accounts SET is_disabled = 0 WHERE email='$course_id'";

		// Execute the query
		mysqli_query($con,$sql);
	}

	// Go back to course-page.php
	header('location: index.php');
?>
