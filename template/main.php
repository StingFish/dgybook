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
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.6" /> 
  <title>My Yearbook</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:100'>
  <link rel="stylesheet" type="text/css" href="D1.css">
<link rel='stylesheet' href='styles/animate.min.css'>
<link rel='stylesheet' href='styles/jquery.fullPage.min.css'>
<link rel="stylesheet" href="ms.css">
<link rel="stylesheet" href="css/image-zoom.css">
<link rel="stylesheet" href="css/zoom.css">
<link rel="shortcut icon" href="CvSU/logo-removebg.png">
<style>
/* [IMAGE] */
.zoomD {
  width: 600px;
  height: auto;
  cursor: pointer;
}

/* [LIGHTBOX BACKGROUND] */
#lb-back {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, 0.5);
  z-index: 999;
  visibility: hidden;
  opacity: 0;
  transition: all ease 0.4s;
}
#lb-back.show {
  visibility: visible;
  opacity: 1;
}

/* [LIGHTBOX IMAGE] */
#lb-img {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
}
#lb-img img {
  /* You might want to play around with 
     width, height, max-width, max-height
     to fit portrait / landscape pictures properly. */
  width: 95%;
  height: 100%;
 
  /* ALTERNATE EXAMPLE
  width: 100%;
  max-width: 1200px;
  height: auto;
  margin: 0 auto; */
}

.pic{
  width: 200px;
  height: 250px;
}
.picbig{
  position: absolute;
  width:0px;
  -webkit-transform: translate(-84%, -27%);
  transform: translate(-84%, -27%);
  z-index:1;
}
.pic:hover + .picbig{
  width:280px;
  height:350px;
}
@media screen and (max-width: 959px) and (min-width: 768px) {
 #text2{
    width: 100%;
    margin-top:60px;
 }
}
.button-59 {
  align-items: center;
  background-color: #fff;
  border: 2px solid #000;
  box-sizing: border-box;
  color: #000;
  cursor: pointer;
  display: inline-flex;
  fill: #000;
  font-family: Inter,sans-serif;
  font-size: 16px;
  font-weight: 600;
  height: 48px;
  justify-content: center;
  letter-spacing: -.8px;
  line-height: 24px;
  min-width: 140px;
  outline: 0;
  padding: 0 17px;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-59:focus {
  color: #171e29;
}

.button-59:hover {
  border-color: #06f;
  color: #06f;
  fill: #06f;
}

.button-59:active {
  border-color: #06f;
  color: #06f;
  fill: #06f;
}

@media (min-width: 768px) {
  .button-59 {
    min-width: 170px;
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
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {
  opacity: 0.7;
}

.modal {
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */
  padding-top: 100px;
  /* Location of the box */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: rgb(0, 0, 0);
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.9);
  /* Black w/ opacity */
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  height: 80%;
  max-height: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}
iframe{
text-decoration: none;
}
.modal-content,
#caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {
    transform: scale(0)
  }
  to {
    transform: scale(1)
  }
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

@media only screen and (max-width: 800px) {
  .modal-content {
    width: 100%;
  }
}
.wowslider ul li:nth-of-type(1) {background-image: url("#");display: block}
.wowslider ul li:nth-of-type(2) {background-image: url("#")}
.wowslider ul li:nth-of-type(3) {background-image: url("#")}
.wowslider ul li:nth-of-type(4) {background-image: url("#")}
.wowslider ul li:nth-of-type(5) {background-image: url("#")}
.wowslider ul li:nth-of-type(6) {background-image: url("#")}
.wowslider ul li:nth-of-type(7) {background-image: url("#")}
.wowslider ul li:nth-of-type(8) {background-image: url("#")}
.wowslider ul li:nth-of-type(9) {background-image: url("#")}
.wowslider ul li:nth-of-type(10) {background-image: url("#")}
</style>
</head>
<body>
    <audio autoplay loop>
  <source src="track1.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<!-- partial:index.partial.html -->
<!-- =============================== Start Slider =============================== --> 
                <?php 
                $db=mysqli_connect('localhost','root','','tests');
                $goo= $_SESSION['Users3'];
                $get = "SELECT * FROM tbl_addons WHERE addon_year = '$goo'";
                $fet = mysqli_query($db, $get);
                while ($fetch = mysqli_fetch_array($fet)){
            ?>
        <div class="wowslider section">
           
            <ul> 
                <li class="wow pulse wowactive" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Milestones --->
                <h2 class="wow fadeInDown board"style="font-family: 'Dancing Script', cursive; font-size: 50px; margin-top: 0;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">- Milestones & Activities -</h2>
                    <div class="wow fadeIn" style="background:none">
                <?php 
                    $db=mysqli_connect('localhost','root','','tests');
                $goo= $_SESSION['Users3'];
                $user_check_query = "SELECT * FROM tbl_academic WHERE academic_year = '$goo'";
                $result = mysqli_query($db, $user_check_query);

                while ($row = mysqli_fetch_array($result)){
                echo '<img class="zoomE" src="../storage/Milestones & Activities/uploads/'.$row['academic_image'].'" alt="'.$row['academic_description'].'" style="width:80%; height:100%"><p>'.$row['academic_description'].'</p><br>';
}
                ?>
<script>
window.onload = () => {
  //GET ALL IMAGES
  let all = document.getElementsByClassName("zoomE");
 
  //CLICK TO GO FULLSCREEN
  if (all.length>0) { 
    for (let i of all) {
    i.onclick = () => {
      //EXIT FULLSCREEN
      if (document.fullscreenElement != null || document.webkitFullscreenElement != null) {
        if (document.exitFullscreen) { document.exitFullscreen(); }
        else { document.webkitCancelFullScreen(); }
      }
 
      //ENTER FULLSCREEN
      else {
        if (i.requestFullscreen) { i.requestFullscreen(); }
        else { i.webkitRequestFullScreen(); }
      }
    };
  }}
};
</script>

            
                </div>
                </li>
                <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
   <div class="wow fadeInLeft yb-php2" style="background:none">
  <?php 
  $db=mysqli_connect('localhost', 'root', '', 'tests');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='BSIS' AND school_year='$goo' ORDER BY slname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
           echo "<div class='container'>";
            echo "<div class='card' style='height:350px;'>";
            echo "<div class='imgBx'>";
            echo '<img class="zoomE" src="../DB/'.$row['profile_image'].'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 class='unselectable' style='font-family: Oswald;'>".$row['sfname']."&nbsp;".substr($row['smname'],0,1).".&nbsp;".$row['slname']."</h2>";
            echo "<h3 class='unselectable' style='font-family: Oswald;'>".$row['course']."&nbsp;".$row['YrSec']."</h3>";
            echo "<h3 style='font-family: Oswald;'>&#10075;&#10075;".$row['quotes']."."."&#10076;&#10076;</h3>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
                </li>
                <li class="wow pulse" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
                    <div class="overlay">
                        <div class="text">
                            <center>
                            <p class="wow fadeInRight" style="justify-content: center;width:100%;font-size: 70px;font-family: 'Dancing Script', cursive;word-wrap: break-word;">THE GRADUATES<br><small>(BSIS)</small></p></center>
                        </div>
                    </div>
                </li>
                <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
   <div class="wow fadeInLeft yb-php2" style="background:none">
  <?php 
  $db=mysqli_connect('localhost', 'root', '', 'tests');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='CPE' AND school_year='$goo' ORDER BY slname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
           echo "<div class='container'>";
            echo "<div class='card' style='height:350px;'>";
            echo "<div class='imgBx'>";
            echo '<img class="zoomE" src="../DB/'.$row['profile_image'].'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 class='unselectable' style='font-family: Oswald;'>".$row['sfname']."&nbsp;".substr($row['smname'],0,1).".&nbsp;".$row['slname']."</h2>";
            echo "<h3 class='unselectable' style='font-family: Oswald;'>".$row['course']."&nbsp;".$row['YrSec']."</h3>";
            echo "<h3 style='font-family: Oswald;'>&#10075;&#10075;".$row['quotes']."."."&#10076;&#10076;</h3>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
                </li>
                <li class="wow pulse" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
                    <div class="overlay">
                        <div class="text">
                            <center>
                            <p class="wow fadeInRight" style="justify-content: center;width:100%;font-size: 70px;font-family: 'Dancing Script', cursive;word-wrap: break-word;">THE GRADUATES<br><small>(CPE)</small></p></center>
                        </div>
                    </div>
                </li>
                 <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
   <div class="wow fadeInLeft yb-php2" style="background:none">
  <?php 
  $db=mysqli_connect('localhost', 'root', '', 'tests');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_students.honor, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE NOT honor='' AND school_year='$goo' ORDER BY slname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
           echo "<div class='container'>";
            echo "<div class='card' style='height:350px;'>";
            echo "<div class='imgBx'>";
            echo '<img class="zoomE" src="../DB/'.$row['profile_image'].'"/>';
            echo "</div>";
            echo "<div class='contentt'>";
            echo "<h2 class='unselectable' style='font-family: Oswald;'>".$row['sfname']."&nbsp;".substr($row['smname'],0,1).".&nbsp;".$row['slname']."</h2>";
            echo "<h3 class='unselectable' style='font-family: Oswald;font-text:normal'>".$row['honor']."</h3>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
                </li>
                <li class="wow pulse" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
                    <div class="overlay">
                        <div class="text">
                            <center>
                            <p class="wow fadeInRight" style="justify-content: center;width:100%;font-size: 70px;font-family: 'Dancing Script', cursive;word-wrap: break-word;">LATIN HONORS<br></p></center>
                        </div>
                    </div>
                </li>
                 <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
   <div class="wow fadeInUp yb-php2" style="background:none">
  <?php 
  $db=mysqli_connect('localhost','root','','tests');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT tbl_accounts.profile_image, tbl_eybook.elname, tbl_eybook.emname, tbl_eybook.efname, tbl_eybook.work_status, tbl_eybook.department, tbl_eybook.employee_year FROM tbl_eybook JOIN tbl_employees ON tbl_employees.eid=tbl_eybook.eid JOIN tbl_accounts on tbl_accounts.email=tbl_employees.email WHERE employee_year='$goo' AND department='Academic Affairs' ORDER BY elname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            echo "<div class='container'>";
            echo "<div class='card' style='height:350px;'>";
            echo "<div class='imgBx'>";
            echo '<img class="zoomE" src="../DB/'.$row['profile_image'].'"/>';
            echo "</div>";
            echo "<div class='contentt' style='font-family: Oswald'>";
            echo "<h2 style='margin-top:0;font-family: Oswald;'>".$row['efname']."&nbsp;".substr($row['emname'],0,1).".&nbsp;".$row['elname']."</h2>";
            echo $row['work_status'];
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
                </li>
                <li class="wow pulse" > <!--- Academic --->
                    <div class="overlay" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="text">
                            <center>
                            <p class="wow fadeInRight" style="justify-content: center;width:100%;font-size: 70px;font-family: 'Dancing Script', cursive;word-wrap: break-word;">ACADEMIC AFFAIRS</p></center>
                        </div>
                    </div>
                </li>
                <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Administrative --->
   <div class="wow zoomIn yb-php2" style="background:none">
  <?php 
  $db=mysqli_connect('localhost', 'root', '', 'tests');
  $goo= $_SESSION['Users3'];
         $user_check_query = "SELECT tbl_accounts.profile_image, tbl_eybook.elname, tbl_eybook.emname, tbl_eybook.efname, tbl_eybook.titlename, tbl_eybook.work_status, tbl_eybook.department, tbl_eybook.employee_rank, tbl_eybook.employee_year FROM tbl_eybook JOIN tbl_employees ON tbl_employees.eid=tbl_eybook.eid JOIN tbl_accounts on tbl_accounts.email=tbl_employees.email WHERE employee_year='$goo' AND department='Administrative Officers' ORDER BY employee_rank,elname";
         $result = mysqli_query($db, $user_check_query);

         while ($row = mysqli_fetch_array($result)){
            $te = $row['titlename'];
            if (!empty($te)) {
                $tle = ", ".$row['titlename'];
            }else{
                $tle = "";
            }
            
            echo "<div class='container'>";
            echo "<div class='card' style='height:350px;'>";
            echo "<div class='imgBx'>";
            echo '<img class="zoomE" src="../DB/'.$row['profile_image'].'"/>';
            echo "</div>";
            echo "<div class='contentt'  style='font-family: Oswald;'>";
            echo "<h2 style='margin-top:0;font-family: Oswald;'>".$row['efname']."&nbsp;".substr($row['emname'],0,1).".&nbsp;".$row['elname'].$tle."</h2>";
            echo $row['work_status'];
            echo "</div>";
            echo "</div>";
            echo "</div>";
      }
  ?>
   </div>
                </li>
                <li class="wow pulse"> <!--- Administrative --->
                    <div class="overlay" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="text">
                            <center>
                            <p class="wow fadeInLeft" style="justify-content: center;width:100%;font-size: 70px;font-family: 'Dancing Script', cursive;word-wrap: break-word;">ADMINISTRATIVE OFFICERS</p></center>
                        </div>
                    </div>
                </li>
                    <li class="wow pulse" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Message --->
                    
                            <?php
                        echo "<div class='yb-php' style='background:none;overflow-y: scroll;overflow-x: hidden;' id='text2'>";
                        echo '<center><img class="wow fadeInDown imahe" src="../storage/Extras Database/uploads/'.$fetch["messages"].'" style="width:80%;height: 100%;"></center>
                        </div>';

                            ?>
                        
                    
                </li>
                <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Vision --->
                    <div class="overlay" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="text">
                            <div class="yb-php" style="background:none;" id="text2">
                            <center><h2 class="wow zoomIn"><b>VISION</b></h2>
                            <p class="wow fadeInLeft" style="justify-content: center;width:80%;font-family: Oswald;">The Dr. Filemon C. Aguilar Memorial College of Las Piñas (DFCAMCLP), as a public institution of higher learning, commits itself to educate and serve the less priviledge but deserving students of Las Piñas City.<br><br>
                            &nbsp;Through quality tertiary education by emphasizing the importance of knowledge and skills honed through strong values fashioned from the best in human and Filipino tradition. It shall strive to achieve responsible service that will contribute to the common efforts towards community building, national development and global solidarity.
                            </p></center>
                        </div>
                    </div>
                </div>
                </li>
                <li class="wow pulse"> <!--- Mission --->
                    <div class="overlay" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="text">
                            <center><h2 class="wow fadeInRight"><b>MISSION</b></h2>
                            <p class="wow fadeInLeft" style="justify-content: center;width:100%;font-size: 40px;font-family: Oswald;">Guided by its vision, the DFCAMCLP committed to: Motivate and develop competent, productive and ethical professionals, leaders and citizens of Las Piñas.</p></center>
                        </div>
                    </div>
                </li>
               
                <li class="wow pulse"> <!--- Title --->
                    <div class="overlay" style="background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                        <div class="text">
                            <center><strong><h2 class="wow zoomIn" data-wow-delay=".2s" style="font-family:Oswald;"><?php echo $fetch['front_title'];?></h2></strong></center>
                        </div>
                    </div>
                </li>
                <li class="wow pulse" style="overflow-y: auto;overflow-x: hidden;background: url('../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;"> <!--- Front Page --->
                    <div class="overlay">
                        <div class="text">
                            <center>
                            <p class="wow fadeInLeft" style="justify-content: center;width:100%;font-family: Oswald;"><?php 
                    $db=mysqli_connect('localhost','root','','tests');
                $goo= $_SESSION['Users3'];
                $user_check_query = "SELECT * FROM folder2 WHERE year = '$goo' LIMIT 1";
                $result = mysqli_query($db, $user_check_query);

                while ($row = mysqli_fetch_array($result)){
                echo '<img class="wow fadeInDown" src="../storage/EYearbook Database/FrontImage/'.$row['frontImage'].'"  style="width:80%; height:100%;vertical-align:middle">';
            }
                ?></center>
                        </div>
                    </div>
            </ul>
                <!--- Float Exit --->
                <a href="menu.php" class="float">
                <i class="my-float" style="font-family: Oswald;font-size: 40px;font-style: normal;">&#215;</i>
                </a>
                <div class="label-container">
                <div class="label-text">Exit</div>
                <i class="label-arrow"></i>
                </div>

            <div class="ctrl">
                <div class="ctrl-content">
                    <i class="fa fa-2x" style="font-size: 80px;"><</i>
                    <div class="image">
                        <h2></h2>
                    </div>
                </div>
                <div class="ctrl-content">
                    <i class="fa fa-2x" style="font-size: 80px;">></i>
                    <div class="image"></div>
                </div>
            </div>
            <?php 
        }
            ?>
        </div>
        <!-- =============================== End Slider =============================== -->
<!-- partial -->


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/jquery.parallax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>