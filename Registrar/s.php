<?php 
$mysqli = new mysqli('localhost','root','','yearbook') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
	$id = $_POST['ids'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];

	$mysqli->query("UPDATE users SET email='$email', password='$password', fname='$fname', mname='$mname', lname='$lname' WHERE id='$id'") or die($mysqli->error());
	echo "<script>alert('Edit Successfully!');window.location='Reg1.php';</script>";
}
?>