<?php 
session_start();

    if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['User2']);
}
$mysqli = new mysqli('localhost', 'root', '', 'tests') or die(mysqli_error($mysqli));

#delete btn(new)

if(isset($_GET['ema'])){
    $file = $_GET['ema'];
    $typee = $_GET['atype'];
    $que = "SELECT * FROM tbl_accounts WHERE email = '$file'";
  $cre = mysqli_query($mysqli, $que);
  $dre = mysqli_fetch_array($cre);
  $Yrr = $_SESSION['Use'];
  $path = "../../DB/" . $dre['profile_image'];
  if (!unlink($path)) {
    echo "<script>alert('You already delete it.');window.location='index.php';</script>";
  }
  else{
  $mysqli->query("DELETE FROM tbl_accounts WHERE email = '$file'") or die($mysqli->error());
  header("Location: index.php");
}
}

if(isset($_GET['email'])){
    $file = $_GET['email'];//email-
    $acct = $_GET['acc']; //account type-
    $bars = $_GET['img']; //image profile-
    $last = $_GET['lname']; //lastname-
    $first = $_GET['fname']; //firstname-
    $mid = $_GET['mname']; //middlename-
    $location = $_GET['addr']; //address-
    $con = $_GET['mobile']; //cellphone number-
    $tel = $_GET['landline']; //telephone number-
    $quo = $_GET['quotes']; //quotes-
    $sec = $_GET['sec']; //Yr&section-
    $pass = $_GET['psw']; //password-
    $yerr = $_GET['year']; //batch year number-
    $dist = $_GET['status']; //accessibility-

if ($acct == "Alumni") {
  //step 1: insert all info from tbl_accounts to tbl_raccounts
    $que = "SELECT * FROM tbl_accounts WHERE email = '$file' LIMIT 1";
  $cre = mysqli_query($mysqli, $que);
  $dre = mysqli_fetch_array($cre);
   $mysqli->query("INSERT INTO tbl_raccounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, quotes, section, atype, year_created, is_disabled) VALUES ('$file', '$pass', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', '$quo', '$sec', '$acct', '$yerr', '$dist')") or die($mysqli->error());
  //step 2: get and update raccounts 
  $que2 = "SELECT * FROM tbl_students WHERE email = '$file'";
  $cre2 = mysqli_query($mysqli, $que2);
  $dre2 = mysqli_fetch_array($cre2);
    $sid = $dre2['sid']; //student id(part 2)
  $cour = $dre2['course']; //course(part 2)
  $hnr = $dre2['honor']; //course(part 2)
  $mysqli->query("UPDATE tbl_raccounts SET ridnumber = '$sid', rcourse = '$cour', rhonor = '$hnr' WHERE email = '$file'") or die($mysqli->error());
  //step 3: delete all from both tbl_accounts and tbl_students 
  $mysqli->query("DELETE FROM tbl_accounts WHERE email = '$file'") or die($mysqli->error());
  $mysqli->query("DELETE FROM tbl_students WHERE email = '$file'") or die($mysqli->error());
  header("Location: index.php");
}

if ($acct == "Registrar/Employee") {
//step 1: insert all info from tbl_accounts to tbl_raccounts
    $que = "SELECT * FROM tbl_accounts WHERE email = '$file' LIMIT 1";
  $cre = mysqli_query($mysqli, $que);
  $dre = mysqli_fetch_array($cre);
   $mysqli->query("INSERT INTO tbl_raccounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, atype, year_created, is_disabled) VALUES ('$file', '$pass', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', '$acct', '$yerr', '$dist')") or die($mysqli->error());
  //step 2: get and update raccounts 
  $que2 = "SELECT * FROM tbl_employees WHERE email = '$file'";
  $cre2 = mysqli_query($mysqli, $que2);
  $dre2 = mysqli_fetch_array($cre2);
    $sid = $dre2['eid']; //employee id(part 2)
  $mysqli->query("UPDATE tbl_raccounts SET ridnumber = '$sid' WHERE email = '$file'") or die($mysqli->error());
  //step 3: delete all from both tbl_accounts and tbl_students 
  $mysqli->query("DELETE FROM tbl_accounts WHERE email = '$file'") or die($mysqli->error());
  $mysqli->query("DELETE FROM tbl_employees WHERE email = '$file'") or die($mysqli->error());
  header("Location: index.php");
}
}

if(isset($_GET['recover'])){
    $file = $_GET['recover'];//email-
    $acct = $_GET['acc']; //account type-
    $bars = $_GET['img']; //image profile-
    $last = $_GET['lname']; //lastname-
    $first = $_GET['fname']; //firstname-
    $mid = $_GET['mname']; //middlename-
    $location = $_GET['addr']; //address-
    $con = $_GET['mobile']; //cellphone number-
    $tel = $_GET['landline']; //telephone number-
    $quo = $_GET['quotes']; //quotes-
    $sec = $_GET['sec']; //Yr&section-
    $pass = $_GET['psw']; //password-
    $yerr = $_GET['year']; //batch year number-
    $dist = $_GET['status']; //accessibility-
    $idn = $_GET['id']; //student id
    $cour = $_GET['course']; //course
    $hnr = $_GET['honor']; //honor
if ($acct == "Alumni") {
  //step 1: insert all info from tbl_accounts to tbl_raccounts
    $que = "SELECT * FROM tbl_accounts WHERE email = '$file' LIMIT 1";
  $cre = mysqli_query($mysqli, $que);
  $dre = mysqli_fetch_array($cre);
   $mysqli->query("INSERT INTO tbl_accounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, quotes, section, atype, year_created, is_disabled) VALUES ('$file', '$pass', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', '$quo', '$sec', '$acct', '$yerr', '$dist')") or die($mysqli->error());
  //step 2: insert for tbl_students
  $mysqli->query("INSERT INTO tbl_students (sid, email, course, honor) VALUES ('$idn', '$file', '$cour', '$hnr')") or die($mysqli->error());
  //step 3: delete all from tbl_raccounts 
  $mysqli->query("DELETE FROM tbl_raccounts WHERE email = '$file'") or die($mysqli->error());
  header("Location: index2.php");
}

if ($acct == "Registrar/Employee") {
//step 1: insert all info from tbl_accounts to tbl_raccounts
    $que = "SELECT * FROM tbl_accounts WHERE email = '$file' LIMIT 1";
  $cre = mysqli_query($mysqli, $que);
  $dre = mysqli_fetch_array($cre);
   $mysqli->query("INSERT INTO tbl_accounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, quotes, section, atype, year_created, is_disabled) VALUES ('$file', '$pass', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', '$quo', '$sec', '$acct', '$yerr', '$dist')") or die($mysqli->error());
  //step 2: insert for tbl_students
  $mysqli->query("INSERT INTO tbl_employees (eid, email) VALUES ('$idn', '$file')") or die($mysqli->error());
  //step 3: delete all from tbl_raccounts 
  $mysqli->query("DELETE FROM tbl_raccounts WHERE email = '$file'") or die($mysqli->error());
  header("Location: index2.php");
}
}

#edit btn(new)
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
  $dte = date("Y");
	$result = $mysqli->query("SELECT * FROM tbl_accounts WHERE email = '$id'") or die($mysqli->error());
	while($row = $result->fetch_assoc()){
		echo "<html>";
		echo "<head>";
		echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta charset='UTF-8'>
    <title>Edit Info</title>
    <link rel='stylesheet' type='text/css' href='style.css'>";
		echo "<style>";
		echo ".container{
          margin-top: 0;
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
        <div align="center" class="user-details">';
        echo "
          <div style='width:100%' class='input-box'>
            <span class='details'>Enabled?</span>
            <select name='title' style='width: 70%;' value='".$row['is_disabled']."'>
            <option value='Yes'><b>Yes</b></option>
            <option value='No'><b>No</b></option>
            </select>
          </div>
          </div>
          <center>
          <div class='button'>
            <input type='submit' name='save2' value='save'>
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
