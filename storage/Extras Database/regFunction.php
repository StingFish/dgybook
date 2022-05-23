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
  $Yrr = $_SESSION['Use'];
  $path = "uploads/" . $file;
  if (!unlink($path)) {
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
		echo "<div class='container' style='margin-top: 5%';>
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
            <span class='details'>Color Theme 1<small> (Front to Message)</small></span>
            <input type='color' style='height:50px' value='".$row['color1']."' name='color' required>
          </div>
          <div class='input-box'>
            <span class='details'>Color Theme 2<small> (Admin to Acad)</small></span>
            <input type='color' style='height:50px' value='".$row['color2']."' name='color2' required>
          </div>
          <div class='input-box'>
            <span class='details'>Color Theme 3<small> (Latin Honors)</small></span>
            <input type='color' style='height:50px' value='".$row['color3']."' name='color3' required>
          </div>
          <div class='input-box'>
            <span class='details'>Color Theme 4<small> (CPE)</small></span>
            <input type='color' style='height:50px' value='".$row['color4']."' name='color4' required>
          </div>
          <div class='input-box'>
            <span class='details'>Color Theme 5<small> (BSIS)</small></span>
            <input type='color' style='height:50px' value='".$row['color5']."' name='color5' required>
          </div>
          <div class='input-box'>
            <span class='details'>Color Theme 6<small> (Milestones)</small></span>
            <input type='color' style='height:50px' value='".$row['color6']."' name='color6' required>
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
