<?php 
session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['Use']);
    isset($_SESSION['User']);
}
$mysqli = new mysqli('localhost', 'root', '', 'tests') or die(mysqli_error($mysqli));

#delete btn(new)

if(isset($_GET['editan'])){
	$file = $_GET['editan'];
  $Yrr = $_SESSION['Use'];
  $path = "uploads/" . $file;
  if (!unlink($path)) {
    echo "<script>alert('You already delete it.');window.location='index.php';</script>";
  }
  else{
	$mysqli->query("DELETE FROM tbl_jobs WHERE filename = '$file'") or die($mysqli->error());
  echo "<script>alert('Delete it.');window.location='index.php';</script>";
}
}
?>
