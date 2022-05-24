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
<title>Alumni Table</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
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
    float: right;
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
</style>
</head>
<body>

<header>
  <?php
        $db = mysqli_connect('localhost', 'root', '', 'tests');
        $year = date("Y");
        if (isset($_GET['call'])) {
        $Ys= mysqli_real_escape_string($db, $_GET['call']);
        $_SESSION['Use'] = $Ys;
      }
        ?>
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
  <p><a class="un" href="../../storage/Students Database/path.php" style="float: left;font-size: 15px;display: block;color: white;">Alumni Table</a></p>
  <p><a class="un" href="../../storage/Milestones & Activities/path.php" style="float: left;font-size: 15px;display: block;">Milestones Table</a></p>
  <p><a class="un" href="../../storage/Extras Database/index.php" style="float: left;font-size: 15px;display: block;">Extras Table</a></p>
  <p><a class="un" href="../../storage/EYearbook Database/path.php" style="float: left;font-size: 15px;display: block;">Employee's Yearbook Table</a></p>
  <p><a class="un" href="../../storage/SYearbook Database/path.php" style="float: left;font-size: 15px;display: block;">Alumni Yearbook Table</a></p>
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
<!---<button id="myBtn" style="background-color:white;margin-right: 10px;margin-top:60px;padding: 10px;" class="loc">Add Data</button><br><br>
</div>

<div id="myModal" class="modal">

  Modal content
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <p>New Data</p>
    </div>
    <div class="modal-body">
        <form action="path.php" method="post">
        Data Year:
        <?php $goose//=date("Y"); ?>
      <input type="number" min='2018' max="<?php //echo $goose; ?>" name="f1" style="width:100%;border-bottom:1px solid black;outline:none;">
    </div>
    <div class="modal-footer">
        <div>
      <button class="loc" name="submit1" style="background-color:white;width:40px;height: 30px;margin: 0px;">ADD</button>
      
    </div>
</div>
</form>
    </div>
  </div>
--->
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
  <div style="float:left;">
    <form action="" method="get">
      <div class="container" style="float:left;">
            <div class="imgBx" style="border:none;">
            <a href="index.php?cor=BSIS"><img name="nooo" class="pic" src="CvSU/db.png" style="width:300px;"/></a>
            
            <div class="contentt" style="margin-top: -30px;color:black;">
            <center style="font-weight:bold;">BSIS.xlsx</center>
            </div>
            </div>
            </div>
</form>
</div>
<div style="float:left;">
    <form action="" method="get">
      <div class="container" style="float:left;">
            <div class="imgBx" style="border:none;">
            <a href="index.php?cor=CPE"><img name="nooo" class="pic" src="CvSU/db.png" style="width:300px;"/></a>
            
            <div class="contentt" style="margin-top: -30px;color:black;">
            <center style="font-weight:bold;">CPE.xlsx</center>
            </div>
            </div>
            </div>
</form>
</div>
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