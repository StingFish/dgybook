<!DOCTYPE html>
<html>
<head>
  <title>About - Yearbook</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

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

.column1 {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
  border-radius: 10px;
  
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="select.php">Login</a>
  <a href="gallery.php">Gallery</a>
  <div class="dropdown" style="background-color: #020cbd;">
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
  <center><p style="font-size: 30px; color:blue">About the Developers</p></center>
  <p align="center" style="font-size: 20px;">A digital yearbook or eYearbook has a developer who creates a system for the campus.<br>The developers of this system are the following:</p><br><br>

  <div class="row1">
  <div class="column1">
    <div class="card"style="width:95%; border: 2px solid #0000FF;">
  <img src="courses/maricar.jpg" alt="Avatar" style="width:100%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="container">
    <h3 style="color:blue" align="CENTER"><b>Maricar G. Cajote</b></h3> 
    <p align="justify">&nbsp;&nbsp;Maricar is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. She is the one who helps documentaries and the flow of the system.</p> 
  </div>
</div>
</div>

  <div class="column1">
    <div class="card" style="width:95%; border: 2px solid #0000FF;">
  <img src="courses/rod.jpg" alt="Avatar" style="width:100%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="container">
    <h3 style="color:blue" align="CENTER"><b>Rodney P. Arceño</b></h3> 
    <p align="justify">&nbsp;&nbsp;Rodney is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. He is the one who leads the group and also the one who codes and creates the entire system.</p> 
  </div>
</div>
</div>

  <div class="column1">
    <div class="card" style="width:95%; border: 2px solid #0000FF;">
  <img src="courses/jennifer.jpg" alt="Avatar" style="width:100%; border-top-left-radius: 9px; border-top-right-radius: 9px">
  <div class="container">
    <h3 style="color:blue" align="CENTER"><b>Jennifer E. Flores</b></h3> 
    <p align="justify">&nbsp;&nbsp;Jennifer is a third year Bachelor of Science in Information Technology student of Cavite state University - Bacoor City Campus. She is the one who helps coding and creating a system and making documentaries.</p>
  </div>
</div>
</div>
</div>
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
