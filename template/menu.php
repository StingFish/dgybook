<?php
//kemero
    session_start();

    if(!isset($_SESSION['User3']))
    {
      echo "<script>alert('You must login as Student first.');window.location='../landpage.php';</script>";
    }
    isset($_SESSION['User3']);
    isset($_SESSION['Users3']);
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="shortcut icon" href="CvSU/logo-removebg.png">
<title>Student Panel</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background-image: url("CvSU/quad5.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  overflow: auto;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 70px auto;
}
.wrapper{
  width: 100%;
  height: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: dodgerblue;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
  height: 500px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}

.error {
  width: 100%; 
  margin: 0px auto;
  line-height: 20px;
  padding: 0; 
  border: 1px solid red; 
  color: white; 
  background: red; 
  text-align: left;
  font-family: 'Ubuntu', sans-serif;
  font-size: 12px;
  margin-bottom: 10px;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 15px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.text-box {
  margin-left: 30px;
}

.btn:link,
.btn:visited {
    text-transform: uppercase;
    text-decoration: none;
    padding: 15px 40px;
    display: inline-block;
    border-radius: 100px;
    transition: all .2s;
    position: absolute;
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

.btn:active {
    transform: translateY(-1px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.btn-white {
    background-color: #0276d8;
    color: white;
}

.btn::after {
    content: "";
    display: inline-block;
    height: 100%;
    width: 100%;
    border-radius: 100px;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    transition: all .4s;
}

.btn-white::after {
    background-color: #fff;
}

.btn:hover::after {
    transform: scaleX(1.4) scaleY(1.6);
    opacity: 0;
}

.btn-animated {
    animation: moveInBottom 5s ease-out;
    animation-fill-mode: backwards;
}

@keyframes moveInBottom {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }

    100% {
        opacity: 1;
        transform: translateY(0px);
    }
}
    </style>
    </head>
    <body>
    <div class="container">
      <div class="wrapper">
        <form action="edit.php" name="frmContact" method="post" enctype="multipart/form-data" style="overflow-y:auto;">
          
          <center><img src="CvSU/logo-removebg.png" style="width:150px;"></center>
          <div class="row button" style="">
            <div class="text-box">
            <a href="main.php" class="btn btn-white btn-animate" style="width: 80%;text-align:center;">MY BOOK</a>
          </div>
          <br>
          <br>
          <br>
              <div class="text-box">
            <a href="meCard1.php" class="btn btn-white btn-animate" style="width: 80%;text-align:center;">MY PROFILE</a>
          </div>
          <br>
          <br>
          <br>
          <div class="text-box">
            <a href="index.php" class="btn btn-white btn-animate" style="width: 80%;text-align:center;">JOB HIRINGS</a>
          </div>
          <br>
          <br>
          <br>
          <div class="text-box">
            <a href="../logout3.php" class="btn btn-white btn-animate" style="width: 80%;text-align:center;">SIGN OUT</a>
          </div>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>

<script>
function myFunc() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
