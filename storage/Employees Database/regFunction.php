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
	$EMAIL = $_GET['email'];
	$mysqli->query("DELETE FROM tab3 WHERE email = '$EMAIL'") or die($mysqli->error());
  header("Location: Reg1.php");
}

#edit btn(new)
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
  $dte = date("Y");
	$result = $mysqli->query("SELECT tbl_accounts.profile_image, tbl_accounts.lname, tbl_accounts.fname, tbl_accounts.mname, tbl_employees.eid FROM tbl_accounts JOIN tbl_employees ON tbl_employees.email = tbl_accounts.email WHERE eid = '$id'") or die($mysqli->error());
	while($row = $result->fetch_assoc()){
		echo "<html>";
    echo "<head>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='UTF-8'>
    <title>Edit Info</title>
    <link rel='stylesheet' type='text/css' href='style.css'>";
    echo "<style>";
    echo ".container{
          margin-top: 10%;
          }
           form .button input{
           height: 100%;
           width: 45%;
           border-radius: 5px;
           border: none;
           color: #fff;
           font-size: 18px;
           font-weight: 500;
           letter-spacing: 1px;
           cursor: pointer;
           transition: all 0.3s ease;
           background: #0276d8;
         }";
echo "</style>";
    echo "</head>";
    echo "<body>";
		echo "<div class='container'>
           <div class='title'>Edit Info</div>
           <br>
            <div class='content'>
        <form action='s.php' method='post'>
        <div align='center'>";
        echo '<center><img class="imahe" style="width:100px; height:120px;" src="../../DB/'.$row['profile_image'].'"/></center><br>
        <input type="text" name="id" value="'.$id.'" placeholder="Email or Phone" style="display:none;"><br>
          
        </div>
        <div class="user-details">';
          echo "
          <div class='input-box'>
            <span class='details'>Surname</span>
            <input type='text' name='lname' value='".$row['lname']."' placeholder='Surname' required>
          </div>
          <div class='input-box'>
            <span class='details'>Given name</span>
            <input type='text' name='fname' value='".$row['fname']."' placeholder='given name' required>
          </div>
          <div class='input-box'>
            <span class='details'>Middle name</span>
            <input type='text' name='mname' value='".$row['mname']."' placeholder='Middle name' required>
          </div>
          <div class='input-box'>
            <span class='details'>Title name <small>(Optional)</small></span>
            <input type='text' name='tname' placeholder='Ex. MIT, PhD, etc.'>
          </div>
          <div class='input-box'>
            <span class='details'>Entry Group Type</span>
          <select name='roles'>
          <option value='President'>President</option>
          <option value='Secretary'>Secretary</option>
            </select>
          </div>
          </div>
          <div class='input-box'>
            <span class='details'>Entry Group Type</span>
          <select name='pos'>
          <option value='Administrative Officers'>Administrative Officers</option>
          <option value='Academic Affairs'>Academic Affairs</option>
            </select>
          </div>
          <div class='input-box'>
            <span class='details'>Year Entry</span>
            <input type='number' name='yr' placeholder='Year Entry' min='2018' max='".$dte."'>
          </div>
          <div class='input-box'>
            <span class='details'>Rank Entry <small>(for A.O. only)</small></span>
            <input type='number' name='rr' placeholder='Rank 1-5' min='1' max='5'>
          </div>
          </div>
          <center>
          <div class='button'>
            <input type='submit' name='save2' value='Add'>
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
