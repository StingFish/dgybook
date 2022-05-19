<?php

session_start();
if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['User2']);
}

$mysqli = mysqli_connect('localhost', 'root', '', 'tests');

if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$title = $_POST['title'];

	$my = "UPDATE tbl_accounts SET is_disabled='$title' WHERE email='$id'";
	$result = mysqli_query($mysqli, $my);
	echo mysqli_error($mysqli);

	echo "<script>alert('Added to Yearbook Successfully.');window.location='index.php';</script>";

}

if (isset($_POST['cancel'])) {
	header("Location: index.php");
}