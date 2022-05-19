<?php 
session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}
$mysqli = new mysqli('localhost', 'root', '', 'tests') or die(mysqli_error($mysqli));

#delete btn(new)

if(isset($_GET['email'])){
	$file = $_GET['email'];
  $file2 = $_GET['file'];
  $Yrr = $_SESSION['Use'];
  $path = "uploads/" . $file;
  $path2 = "../../bground/" . $file;
  if (!unlink($path)) {
    echo "<script>alert('You already delete it.');window.location='index.php';</script>";
  }
  if (!unlink($path2)) {
    echo "<script>alert('You already delete it.');window.location='index.php';</script>";
  }
  else{
	$mysqli->query("DELETE FROM tbl_addons WHERE messages = '$file'") or die($mysqli->error());
  header("Location: index.php");
}
}

#edit btn(new)
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
  $dte = date("Y");
	$result = $mysqli->query("SELECT * FROM tbl_addons WHERE addon_year = '$id'") or die($mysqli->error());
	while($row = $result->fetch_assoc()){
		echo "<html>";
		echo "<head>";
		echo " <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Edit Extras</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel='shortcut icon' href='CvSU/logo-removebg.png'>
   </head>";
		echo "<body>";
		echo "<div class='container'>
    <div class='title'>Edit Extras</div>
    <div class='content'>
      <form action='s.php' name='frmContact' method='post' enctype='multipart/form-data'>
      <p><?php include('errors.php'); ?></p>
      <div align='center'>";

        echo '
        <center><img class="imahe" style="width:100px; height:120px;" src="uploads/'.$row['messages'].'"/></center><br>
        <input type="text" name="id" value="'.$id.'" placeholder="Email or Phone" style="display:none;"><br>';

     echo "</div>
           <div class='user-details'>
          <div class='input-box'>
            <span class='details'>Message Photo</span>
            <input type='file' placeholder='file' name='f1' style='outline: 1px solid black;' accept='.mp4,.png,.jpg' required>
          </div>
          <div class='input-box'>
            <span class='details'>Background Image</span>
            <input type='file' placeholder='file' name='f2' style='outline: 1px solid black;' accept='.mp4,.png,.jpg' required>
          </div>
          <div class='input-box' style='width:100%'>
          <span class='details'>Title</span>
            <input type='text' onkeypress='return /[a-z keyCode-]/i.test(event.key)' placeholder='Title' value='".$row['front_title']."' name='title' required>
          </div>
        </div>
        <center>
          <div class='button'>
            <input type='submit' name='save2' value='Save'>
            <a href='index.php'><input type='button' style='background-color:red' value='Cancel'></a>
          </div>
          </center>
        </form>
      </div>
    </div>";
		echo "</body>";
		echo "</html>";
	}
}
?>
