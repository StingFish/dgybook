<?php
    session_start();

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Registrar first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Alumni Yearbook Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="assets/base.css">
<link rel="stylesheet" href="sty1.css">
<link rel="shortcut icon" href="CvSU/logo-removebg.png">
<script src="jquery-3.6.0.js"></script>
<style>
body{
  transition: background-color .5s;
  background-image: url("assets/tmp2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  
}
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(odd){background-color: #f2f2f2}
tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: yellow;}

th {
  background-color: #04AA6D;
  color: white;
}
hov:hover{
 background-color: white;
}
body{
  transition: background-color .5s;
  background-image: url("assets/tmp2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  
}
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(odd){background-color: #f2f2f2}
tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: yellow;}

th {
  background-color: #04AA6D;
  color: white;
}
hov:hover{
 background-color: white;
}
.logo {
    width: 45px;
    top: 2px;
    left: 2px;
    position: absolute;
}

.alert {
  padding: 20px;
  background-color: #green;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
.loc{
    float: center;
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  height: 30px;
  background-color: #5cb85c;
  color: white;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
.outer{
    width:100%;
    text-align: center;
}
.un {
  display: inline-block;
  background-image: linear-gradient(#fff, #fff);
  background-position: 0 100%; /*OR bottom left*/
  background-size: 0% 2px;
  background-repeat: no-repeat;
  transition:
    background-size 0.3s,
    background-position 0s 0.3s; /*change after the size immediately*/
}

.un:hover {
  background-position: 100% 100%; /*OR bottom right*/
  background-size: 100% 2px;
}
/* --------------------------------------------------------------------*/
.spantag{
  display: none;
  justify-content: center;
  align-items: center;
  margin-top: 15px;
}
.option{
  margin-left: 20px;
  background-color: none;
  outline:none;
  border-radius:50%;
  width: 50px;
  height: 50px;
}
.fa, .fas{
  color:  #4e4e4e;
}
fa-edit:before {
    content: "\f044";
    font-size: 12px;
    border-radius: 50%;
}
.pic{
  width: 250px;
  height: 290px;
  display:flex;
  margin:20px;
  margin-top:10px;
  margin-bottom: 0;
  border-radius: 10px;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

/* ---------------------------------Hover edit delete btn  -------------------*/
.img-wrapper:hover .spantag{
  display: table;
}
</style>
</head>
<body>

<header>
  <?php
  $db=mysqli_connect('localhost','root','','tests');
  $goo= $_SESSION['User'];
         $user_check_query = "SELECT * FROM tbl_accounts WHERE lname='$goo'";
         $result = mysqli_query($db, $user_check_query);
  ?>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
    while ($row = mysqli_fetch_array($result)){
    echo '<center><img src="../../DB/'.$row['profile_image'].'" style="margin-top:-10px;width:30%;margin-left:0px;border-radius:10%;margin-bottom:-10px"></center>';
 
  echo "<center><p style='margin-left:-10px;color:white;margin-bottom: -20px'>".$row['fname']." ".substr($row['mname'],0,1).". ".$row['lname']."</p><p style='color: #0276d8;margin-bottom: -15px'>Registrar</p></center>";
   }
  ?>
  <center>
  <p><a class="un" href="../../storage.php" style="float: left;font-size: 15px;display: block;">Dashboard</a></p>
  <p><a class="un" href="../../storage/Employees Database/index.php" style="float: left;font-size: 15px;display: block;">Employee's Table</a></p>
  <p><a class="un" href="../../storage/Students Database/path.php" style="float: left;font-size: 15px;display: block;">Alumni Table</a></p>
  <p><a class="un" href="../../storage/Milestones & Activities/path.php" style="float: left;font-size: 15px;display: block;">Milestones Table</a></p>
  <p><a class="un" href="../../storage/Extras Database/index.php" style="float: left;font-size: 15px;display: block;">Extras Table</a></p>
  <p><a class="un" href="../../storage/EYearbook Database/path.php" style="float: left;font-size: 15px;display: block;">Employee's Yearbook Table</a></p>
  <p><a class="un" href="../../storage/SYearbook Database/path.php" style="float: left;font-size: 15px;display: block;color: white;">Alumni Yearbook Table</a></p>
   <p><a class="un" href="../../storage/Job Hirings/index.php" style="float: left;font-size: 15px;display: block;">Job Hirings Table</a></p>
   <p><a class="un" href="../../storage/DYearbook/path.php" style="float: left;font-size: 15px;display: block;">View School Yearbook</a></p>
  <p><a class="un" href="../../logout.php" style="float: left;font-size: 15px;">Sign Out</a></p>
</center>
</div>

<div class="topnav" id="myTopnav" style="background-color: #0a0b5c; border-bottom: 5px solid #a3a3a3;">
  <div>
  <a href="javascript:void(0);" onclick="openNav()"><img src="CvSU/logo-removebg.png" alt="logo" class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_SESSION['User']; ?></b></i></a>
</div>
</div>
</header>
  <div>
<button id="myBtn" style="background-color:white;margin-right: 10px;margin-top:60px;padding: 10px;" class="loc">Add Data</button><br><br>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="max-width: 50%;">
    <div class="modal-header" style="background-color: #0276d8">
      <span class="close">&times;</span>
      <p>New Data</p>
    </div>
    <div class="modal-body">
        <form action="path.php" method="post" enctype="multipart/form-data">
          <input type="file" placeholder="File" name="file1" accept=".mp4, .png, .jpg" required><br>
        Data Year:
        <?php $goose=date("Y"); ?>
      <input type="number" min="2018" max="<?php echo $goose; ?>" name="f1" style="width:100%;border-bottom:1px solid black;outline:none;" onkeypress="return /[0-9]/i.test(event.key)">
    </div>
    <div class="modal-footer" style="background-color: #0276d8">
      <button class="loc" name="submit1" style="background-color:white;width:40px;height: 30px;display: inline-block;margin-left: 10px;">ADD</button>
      <!--<button class="loc" name="submit2" style="background-color:white;width:70px;height: 30px;display: inline-block;">DELETE</button>-->
   
</div>
</form>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<section>
<br>
<br>
<div class="yb-php">
     <?php
  $db=mysqli_connect('localhost','root','','tests');
  $goo= 2021;
         $user_check_query = "SELECT * FROM folder2 where type='B' ORDER BY year";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
          echo "<div class='img-wrapper' style='float:left;'>";
          echo "<center style='font-weight:bold;'>".$row["year"]."</center>";
          echo '<a href="path2.php?call='.$row["year"].'"><img name="nooo" class="pic" src="FrontImage/'.$row["frontImage"].'"/></a>';
          echo '<center><span class="spantag">
                    <button class="option">
                        <a href="regFunction.php?edit='.$row["id"].'">
                            <i class="fas fa-edit yb"></i>
                        </a>
                    </button>
                    <button class="option">
                        <a onclick="javascript:confirmationDelete($(this));return false;" href="regFunction.php?delete='.$row["id"].'">
                          <i class="fas fa-trash-alt yb"></i>
                        </a>
                    </button>
                </span></center>';
          echo "</div>";
    }
  ?>
</div>
</section>
</body>
</html>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
<?php
if (isset($_POST['submit1'])) {
    $db=mysqli_connect('localhost', 'root', '', 'tests');
    $target_dir = "FrontImage/";
    $target_dir2 = "../EYearbook Database/FrontImage/";
    $target_file = $target_dir.basename($_FILES["file1"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $yr= mysqli_real_escape_string($db, $_POST['f1']);

    if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file)) {
      $bars = htmlspecialchars( basename( $_FILES["file1"]["name"]));
      
      $user_check_query = "SELECT * FROM folder2 where year='$yr' AND type='B' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      if ($user) { // if user exists
        if ($user['year'] === $yr && $user['type'] === 'B') {
          echo "<script>alert('Database already exist!'); window.location='path.php';</script>";
        }
      }
      else{
        $checkSameYear = "SELECT * FROM folder2 WHERE year = '$yr' AND type = 'A' LIMIT 1";
        $ress= mysqli_query($db, $checkSameYear);
        $count = mysqli_fetch_array($ress);
        if($count){ //if year exist in type B folder2, update the same image
            $adds="INSERT INTO folder2 (frontImage, type, year) VALUES ('$bars','B', '$yr')";
            $alter1 = "UPDATE folder2 SET frontImage = '$bars' WHERE type = 'A' AND year = '$yr'";
            mysqli_query($db, $adds);
            mysqli_query($db, $alter1);
            echo "<script>window.location='path.php';</script>";
        }else{ //if year doesn't exist, insert new year in type B
            $insert2="INSERT INTO folder2 (frontImage, type, year) VALUES ('$bars','B', '$yr'), ('$bars','A', '$yr')";
            mysqli_query($db, $insert2);
            echo "<script>window.location='path.php';</script>";
        }
     }
    }
}

if (isset($_POST['submit2'])) {
    $db=mysqli_connect('localhost', 'root', '', 'tests');
    $yr= mysqli_real_escape_string($db, $_POST['f1']);
    
         $user_check_query = "DELETE FROM folder2 WHERE year='$yr' AND type='B'";
         $result = mysqli_query($db, $user_check_query);
         echo "<script>window.location='path.php';</script>";
}

?>

<script>
	function confirmationDelete(anchor)
	{
   var conf = confirm('Do you really want to delete these records? This process cannot be undone.');
   if(conf)
      window.location=anchor.attr("href");
	}	
</script>