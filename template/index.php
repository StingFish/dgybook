<?php
    session_start();

    if(!isset($_SESSION['User3']))
    {
    echo "<script>alert('You must login as Alumni first.');window.location='../landpage.php';</script>";
    }

    isset($_SESSION['User3']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Job Hirings</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="assets/base.css">
<link rel="stylesheet" href="sty1.css">

<link rel="shortcut icon" href="CvSU/logo-removebg.png">
<script src="jquery-3.6.0.js"></script>
<style>
body{
  background-image: url("assets/tmp2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  overflow-x: hidden;
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
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
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
  width: 40%;
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
  border: 2px solid black;
}

.button2:hover {
  background-color: black;
  color: white;
}
@media only screen and (max-width: 760px){
  tfoot tr{
  visibility: hidden;
  display: none;
          }
  }
.label-container{
  position:fixed;
  bottom:48px;
  right:105px;
  display:table;
  visibility: hidden;
}

.label-text{
  color:#FFF;
  background:rgba(51,51,51,0.5);
  display:table-cell;
  vertical-align:middle;
  padding:10px;
  border-radius:3px;
}

.label-arrow{
  display:table-cell;
  vertical-align:middle;
  color:#333;
  opacity:0.5;
}

.float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#06C;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  box-shadow: 2px 2px 3px #999;
}

.my-float{
  font-size:24px;
  margin-top:18px;
}

a.float + div.label-container {
  visibility: hidden;
  opacity: 0;
  transition: visibility 0s, opacity 0.5s ease;
}

a.float:hover + div.label-container{
  visibility: visible;
  opacity: 1;
}

@media only screen and (max-width: 999px) {
    .me{
        width: 40%;
    }
}
@media only screen and (max-width: 600px) {
    .me{
        width: 80%;
    }
}
  .buttons {
width: 40%;
margin: 0 auto;
display: inline;
}

    .action_btn {
width: 40%;
margin: 0 auto;
display: inline;
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
<?php
        $db = mysqli_connect('localhost', 'root', '', 'tests');
        $year = date("Y");
        ?>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
  $goo= $_SESSION['User3'];
    $user_check_query = "SELECT * FROM tbl_accounts WHERE lname='$goo'";
         $res = mysqli_query($db, $user_check_query);
    while ($rows = mysqli_fetch_array($res)){
    echo '<center><img src="../DB/'.$rows['profile_image'].'" style="margin-top:-10px;width:40%;margin-left:0px;border-radius:10%;margin-bottom:-10px"></center>';
 
  echo "<center><p style='margin-left:-10px;color:white;margin-bottom: -20px'>".$rows['fname']." ".substr($rows['mname'],0,1).". ".$rows['lname']."</p><p style='color: #0276d8;margin-bottom: -15px'>Alumni</p></center>";
   }
  ?>
  <center>
  <p><a class="un" href="menu.php" style="float: left;font-size: 15px;display: block;">Dashboard</a></p><br>
  <p><a class="un" href="main.php" style="float: left;font-size: 15px;display: block;">My Book</a></p><br>
  <p><a class="un" href="meCard1.php" style="float: left;font-size: 15px;display: block;">My Profile</a></p><br>
  <p><a class="un" href="index.php" style="float: left;font-size: 15px;display: block;">Job Hirings</a></p><br>
  <p><a class="un" href="../logout3.php" style="float: left;font-size: 15px;">Sign Out</a></p>
</center>
</div>

<div class="topnav" id="myTopnav" style="background-color: #0a0b5c; border-bottom: 5px solid #a3a3a3;">
  <div>
  <a href="javascript:void(0);" onclick="openNav()"><img src="CvSU/logo-removebg.png" alt="logo" class="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $_SESSION['User3']; ?></b></i></a>
</div>
<div>
</div>
</div>
<br>
<br>
<br>
<center>
<!--<select name="type2" id="mylist" class="text" onchange="myFunctions()">
      <option value="N/A"><b>N/A</b></option>
      <option value="IT Hardware"><b>IT Hardware</b></option>
      <option value="IT Software"><b>IT Software</b></option>
      <option value="IT Communication"><b>IT Communication</b></option>
      <option value="Multimedia"><b>Multimedia</b></option>
      </select><br>
  </center>-->
  <!--- Start here --->
  <div class="search-container">
    <div>
        <a href="edit.php" class="float add-btn-reg-a" style="display:none">
<i class="my-float" style="font-family: Oswald;font-size: 40px;font-style: normal;font-weight: bold;">+</i>
</a>
<div class="label-container">
<div class="label-text">Add</div>
<i class="fa label-arrow"></i>
</div>
        <div class="addMember-reg-a">
            <form action="#" class="me form" method="post"  enctype="multipart/form-data" style="overflow-y:scroll;">
                

            <center><div class="action_btn">

            <button name="submit" class="action_btn submit" type="submit" value="Save" style="background-color:green;margin-right: 5px;padding: 10px 10px;" onclick="myFunction()">Save</button>

            <button name="submit" class="action_btn cancel cancel-btn-reg-a" type="submit" style="background-color:green;padding: 10px 10px;"  value="Cancel" onclick="myFunction2()">Cancel</button>

            <p id="saved"></p>

            </div></center>

        </div>
              </div>
            </form>
        </div>
        <div class="input-icons">
          
        </div>
    </div>
      <br>
      
      <div id="result_affair" style="margin-top: -70px;"></div>
  </div>
<!-- end here -->
<script>
$(document).ready(function(){
      let addButtonRegA = document.querySelector('.add-btn-reg-a');
      let addMemberRegA = document.querySelector('.addMember-reg-a');
      let cancelButtonRegA = document.querySelector('.cancel-btn-reg-a');

      addButtonRegA.addEventListener('click', function(){
          addMemberRegA.classList.add('form-active');
      });
      cancelButtonRegA.addEventListener('click', function(){
          addMemberRegA.classList.remove('form-active');
      });

      load_data();
            function load_data(affair_query)
            {
              $.ajax({
                url:"regAffairFetch.php",
                method:"post",
                data:{affair_query:affair_query},
                success:function(data)
                {
                  $('#result_affair').html(data);
                }
              });
            }

            $('#search_text_affair').keyup(function(){
              var search = $(this).val();
              if(search != '')
              {
                load_data(search);
              }
              else
              {
                load_data();
              }
            });
});
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
function myFunctions() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("mylist");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
