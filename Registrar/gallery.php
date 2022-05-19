<!DOCTYPE html>
<html>
<head>
  <title>Gallery - Yearbook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}
.column1{
  box-sizing:border-box;
  float:left;
  width:33.33%;
  padding:10px;
  height:150px;
  margin-left:10px;
  border-radius: 15px;
}
.left1, .right1{
  width:30%;
}

.middle1{
  width:30%;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #020cbd;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: right;
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
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
  color: black;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

p{
  font-family: 'Ubuntu', sans-serif;
}
i{
  font-family: 'Lato';
}
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer-links{
 color:  #ffffff;
 margin: 20px 0 12px;
 padding: 0;
}
 
.footer-links a{
 display:inline-block;
 line-height: 1.5;
 text-decoration: none;
 color:  inherit;
 font-size: 20px;
}

.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="select.php">Login</a>
  <a href="gallery.php" class="active">Gallery</a>
  <div class="dropdown">
    <button class="dropbtn">About &#8711;
    </button>
    <div class="dropdown-content">
      <a href="history.php">About the History</a>
      <a href="about.php">About the Developer</a>
    </div>
  </div> 
  <a href="home.php">Home</a>
</div>

<img src="wide.jpg" style="width:100%; height: 20%"></br>
  <center><p style="font-size: 30px; color:green">The History</p>
  <iframe width="854" height="480" src="https://www.youtube.com/embed/OoPI-7mHO9s"></iframe>
</center>
  <br>
  <br>

  <center><p style="font-size: 30px; color:green">Virtual Tour</p>
  <iframe width="854" height="480" src="https://www.youtube.com/embed/bzDx6Q9KUOc"></iframe>
</center>
  <br>
  <br>

<center><p style="font-size: 30px; color:green">Campus Photos</p>
  <img src="CvSU/h1.jpg" style="width: 719px; height: 959px;">
</center>
  <br>
  <br>

  <center><p style="font-size: 30px; color:green">The New Academic Building</p>
  <img src="CvSU/h2.jpeg" style="width: 1024px; height: 768px;">
</center>
  <br>
  <br>

  <center><p style="font-size: 30px; color:green">The Main Building</p>
  <img src="CvSU/h3.jpeg" style="width: 1024px; height: 768px;">
</center>
  <br>
  <br>

  <footer>
    <div class="row">
  <div class="column" style="background-color:#333;">
    &nbsp;&nbsp;&nbsp;<img src="CvSU/unnameds.png" style="width: 220px; height: 271px;">
  </div>
  <div class="column" style="background-color:#333;">
     <h2 style="color:white">OTHER LINKS</h2>
     <p class="footer-links">
      •
 <a href="https://ched.gov.ph/">CHED</a><br>
 •
 <a href="https://www.gov.ph/">GovPH</a><br>
 •
 <a href="http://tuaf.edu.vn/en-Us">THAI NGUYEN UNIVERSITY</a><br>
 •
 <a href="https://www.tesda.gov.ph/">TESDA</a><br>
 </p>
  </div>
  <div class="column" style="background-color:#333;">
    <h2 style="color:white">FOLLOW US</h2>
    <a href="https://www.facebook.com/CvSUBacoorCityCampus/" class="fa fa-facebook"></a>
    <a href="https://www.youtube.com/channel/UCM7bcOjhtVVbBXMlS2ZwIxA" class="fa fa-youtube"></a><br>
    <p style="color:white;"><strong>Location:</strong>&nbsp;Dandelion St., Doña Manuela Subd.,Pamplona 3, Las Piñas City</p>
    <p style="color:white"><strong>Email:</strong>&nbsp;dfcamclpitgto@gmail.com<br>dfcaitti.registrar@yahoo.com.ph</p>
    <p style="color:white"><strong>Call:</strong>&nbsp;831 3681</p>
  </div>

</div>
  </footer>
</body>
</html>
