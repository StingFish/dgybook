<?php

session_start();
if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php;</script>";
    }
    else{
    isset($_SESSION['User']);
}

$mysqli = mysqli_connect('localhost', 'root', '', 'tests');

if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$ln= $_POST['lname'];
	$fn= $_POST['fname'];
	$mn= $_POST['mname'];
	$tn= $_POST['tname'];
	$role = $_POST['roles'];
	$dep = $_POST['pos'];
	$year = $_POST['yr'];
	$rank = $_POST['rr'];

	$check = "SELECT * FROM folder2 WHERE type = 'A' AND year = '$year'";
	$get = mysqli_query($mysqli, $check);
	$fetch = mysqli_fetch_assoc($get);
	if (!$fetch) {
		echo "<script>alert('Create a School Year for this batch in Employees Yearbook Database.');window.location='index.php';</script>";
	}else{
	$check2 = "SELECT * FROM tbl_eybook WHERE employee_year = '$year'";
	$result2 = mysqli_query($mysqli, $check2);
  if (mysqli_num_rows($result2) > 0) {
    echo "<script>alert('Data Exists.');window.location='index.php';</script>";
  }
	else{
		if ($dep == "Administrative Officers") {
			$my = "INSERT INTO tbl_eybook (eid, elname, efname, emname, titlename, work_status, department, employee_rank, employee_year) VALUES ('$id', '$ln', '$fn', '$mn', '$tn', '$role', '$dep', '$rank', '$year')";
	$result = mysqli_query($mysqli, $my);
	echo mysqli_error($mysqli);

	echo "<script>alert('Added to Yearbook Successfully.');window.location='index.php';</script>";
		}
		if ($dep == "Academic Affairs") {
			$my = "INSERT INTO tbl_eybook (eid, elname, efname, emname, titlename, work_status, department, employee_year) VALUES ('$id', '$ln', '$fn', '$mn', '$tn', '$role', '$dep', '$year')";
	$result = mysqli_query($mysqli, $my);
	echo mysqli_error($mysqli);

	echo "<script>alert('Added to Yearbook Successfully.');window.location='index.php';</script>";
		}
	
}
}
}

if (isset($_POST['cancel'])) {
	header("Location: index.php");
}