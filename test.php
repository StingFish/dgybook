<?php
//kemero
    session_start();

    if(!isset($_SESSION['User2']))
    {
      echo "<script>alert('You must login as Student first.');window.location='logout3.php';</script>";
    }
    isset($_SESSION['User2']);
    isset($_SESSION['Users2']);
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Yearbook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="sty2.css">
<link rel="shortcut icon" href="CvSU/logo.ico">
<style>
body {margin:0;font-family:Oswald}

.topnav {
 display: inline-block;
    margin: 0 auto;
    width: 100%;
    max-width: 100%;
    box-shadow: none;
    background-color:#3a4af8;
    position: fixed;
    height: 53px!important;
    z-index: 10;
    opacity: 95%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  opacity: 100%;
}

.active {
  background-color: darkcyan;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: white;
  color: black;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.pic{
  width: 250px;
  height: 230px;
}

/* Media */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="display2.php" class="active">My Yearbook</a>
  <a href="latest.php">Latest</a>
  <a href="#forums">Forums</a>
  <div class="dropdown">
    <button class="dropbtn">About &#8711; 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="history.php">About the History</a>
      <a href="about.php">About the Developer</a>
    </div>
  </div> 
  <a href="logout3.php">Logout</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div>

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


<section>
   <div class="yb-php">
  <?php 
  $db=mysqli_connect('localhost','root','','filepaths');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT * FROM  front ORDER BY filename";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<div class='container'>";
            echo "<div class='card'>";
            echo "<div class='imgBx'>";
            echo '<img class="pic" src="CvSU/db.png"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 style='margin-top:0;'>".$row['filename']."</h2>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
</section>

 </div>

</body>
</html>
