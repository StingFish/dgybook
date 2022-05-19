<?php

session_start();
if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}

$mysqli = mysqli_connect('localhost', 'root', '', 'tests');

if(isset($_POST['save2'])){
	$id= $_POST['id'];
	$file = htmlspecialchars( basename( $_FILES["f1"]["name"]));
	$file2 = htmlspecialchars( basename( $_FILES["f2"]["name"]));
	$title = $_POST['title'];
	//$color = $_POST['color'];

	$my = "UPDATE tbl_addons SET messages='$file', front_title ='$title', background='$file2' WHERE addon_year='$id'";
	$result = mysqli_query($mysqli, $my);
	echo mysqli_error($mysqli);

	echo "<script>alert('Updated Successfully.');window.location='index.php';</script>";

}

if (isset($_POST['cancel'])) {
	header("Location: index.php");
}