<?php
$db_connect = new mysqli('localhost','root','','tests') or die ("Could not connect to database".mysqli_error($db_connect));

if(isset($_POST['submit'])){

$checked_array=$_POST['prodid'];
 if (empty($checked_array)) {
 	header('Location: index.php');
 }
foreach ($_POST['aemail'] as $key => $value) {

	if(in_array($_POST['aemail'][$key], $checked_array)){
	$pr=$_POST['aemail'][$key];
	$id= $_POST['sidd'][$key];
	$ln= $_POST['alname'][$key];
	$fn= $_POST['afname'][$key];
	$mn= $_POST['amname'][$key];
	$sec = $_POST['asection'][$key];
	$quot= $_POST['aquotes'][$key];
	$year = $_POST['yr'];

	$check = "SELECT * FROM folder2 WHERE type = 'B' AND year = '$year'";
	$get = mysqli_query($db_connect, $check);
	$fetch = mysqli_fetch_assoc($get);
	if (!$fetch) {
		echo "<script>alert('Create a School Year for this batch in Alumni Yearbook Database.');window.location='index.php';</script>";
	}
	else{
	$insertqry = "INSERT INTO tbl_sybook (sid, slname, sfname, smname, quotes, YrSec, school_year) VALUES ('$id', '$ln', '$fn', '$mn', '$quot', '$sec', '$year')";
	$insertqry=mysqli_query($db_connect,$insertqry);
	echo mysqli_error($db_connect);

	echo "<script>alert('Added to Yearbook Successfully.');window.location='index.php';</script>";
	}
	}else{
		echo "<script>alert('Added to Yearbook failed.');window.location='index.php';</script>";
	}
}
}
?>