<?php
session_start();

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Admin first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);

// variables
$db=mysqli_connect('localhost', 'root', '', 'tests');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Yearbook Testing</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=0.6, minimum-scale=0.1, maximum-scale=0.6"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="testing.css">
    <link rel="stylesheet" type="text/css" href="D1.css">

    <link rel='stylesheet' href='styles/animate.min.css'>
    <link rel='stylesheet' href='styles/jquery.fullPage.min.css'>
    <link rel="stylesheet" href="ms.css">
    <link rel="stylesheet" href="css/image-zoom.css">
    <link rel="stylesheet" href="css/zoom.css">
    <link rel="shortcut icon" href="CvSU/logo-removebg.png">
  </head>

  <body>
    <audio autoplay loop>
  <source src="track1.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  <div class="exit"><a href="path.php"><i class="fa-solid fa-circle-xmark fa-3x" style="color:#cefdff"></i></a></div>
    <!-- Slider main container -->
    <div class="swiper-container">
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
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php 
                    if (isset($_GET["call"])){
                        $goo = $_GET['call'];
                        $get = "SELECT * FROM tbl_addons WHERE addon_year = '$goo'";
                        $fet = mysqli_query($db, $get);

                        while ($fetch = mysqli_fetch_array($fet)){
                ?>
                <!-- YEARBOOK IMAGE --->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color1'] ?>;">
                <!-- <canvas id="world"></canvas> -->
                <script>
                    /**function() {
                    var COLORS, Confetti, NUM_CONFETTI, PI_2, canvas, confetti, context, drawCircle, i, range, resizeWindow, xpos;

                    NUM_CONFETTI = 350;

                    COLORS = [[85, 71, 106], [174, 61, 99], [219, 56, 83], [244, 92, 68], [248, 182, 70]];

                    PI_2 = 2 * Math.PI;

                    canvas = document.getElementById("world");

                    context = canvas.getContext("2d");

                    window.w = 0;

                    window.h = 0;

                    resizeWindow = function() {
                        window.w = canvas.width = window.innerWidth;
                        return window.h = canvas.height = window.innerHeight;
                    };

                    window.addEventListener('resize', resizeWindow, false);

                    window.onload = function() {
                        return setTimeout(resizeWindow, 0);
                    };

                    range = function(a, b) {
                        return (b - a) * Math.random() + a;
                    };

                    drawCircle = function(x, y, r, style) {
                        context.beginPath();
                        context.arc(x, y, r, 0, PI_2, false);
                        context.fillStyle = style;
                        return context.fill();
                    };

                    xpos = 0.5;

                    document.onmousemove = function(e) {
                        return xpos = e.pageX / w;
                    };

                    window.requestAnimationFrame = (function() {
                        return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function(callback) {
                        return window.setTimeout(callback, 1000 / 60);
                        };
                    })();

                    Confetti = (function() {
                        function Confetti() {
                        this.style = COLORS[~~range(0, 5)];
                        this.rgb = "rgba(" + this.style[0] + "," + this.style[1] + "," + this.style[2];
                        this.r = ~~range(2, 6);
                        this.r2 = 2 * this.r;
                        this.replace();
                        }

                        Confetti.prototype.replace = function() {
                        this.opacity = 0;
                        this.dop = 0.03 * range(1, 4);
                        this.x = range(-this.r2, w - this.r2);
                        this.y = range(-20, h - this.r2);
                        this.xmax = w - this.r;
                        this.ymax = h - this.r;
                        this.vx = range(0, 2) + 8 * xpos - 5;
                        return this.vy = 0.7 * this.r + range(-1, 1);
                        };

                        Confetti.prototype.draw = function() {
                        var _ref;
                        this.x += this.vx;
                        this.y += this.vy;
                        this.opacity += this.dop;
                        if (this.opacity > 1) {
                            this.opacity = 1;
                            this.dop *= -1;
                        }
                        if (this.opacity < 0 || this.y > this.ymax) {
                            this.replace();
                        }
                        if (!((0 < (_ref = this.x) && _ref < this.xmax))) {
                            this.x = (this.x + this.xmax) % this.xmax;
                        }
                        return drawCircle(~~this.x, ~~this.y, this.r, this.rgb + "," + this.opacity + ")");
                        };

                        return Confetti;

                    })();

                    confetti = (function() {
                        var _i, _results;
                        _results = [];
                        for (i = _i = 1; 1 <= NUM_CONFETTI ? _i <= NUM_CONFETTI : _i >= NUM_CONFETTI; i = 1 <= NUM_CONFETTI ? ++_i : --_i) {
                        _results.push(new Confetti);
                        }
                        return _results;
                    })();

                    window.step = function() {
                        var c, _i, _len, _results;
                        requestAnimationFrame(step);
                        context.clearRect(0, 0, w, h);
                        _results = [];
                        for (_i = 0, _len = confetti.length; _i < _len; _i++) {
                        c = confetti[_i];
                        _results.push(c.draw());
                        }
                        return _results;
                    };
                    step();

                    }).call(this); **/
                </script>
                    <?php 
                        $user_check_query = "SELECT * FROM folder2 WHERE year = '$goo' LIMIT 1";
                        $result = mysqli_query($db, $user_check_query);

                            while ($row = mysqli_fetch_array($result)){
                                echo '<img class="yearbookImage hithere" src="../../storage/EYearbook Database/FrontImage/'.$row['frontImage'].'"  style="width:30%; height:80%;vertical-align:middle">';
                        }
                    ?>
                </div>
                <!--- TITLE -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color1'] ?>;">
                    <h2 class="bounce-in-right theme"><?php echo $fetch['front_title'];?></h2>
                </div>
                <!--- MISSION -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color1'] ?>;">
                    <div class="missionvision vision">
                        <h2 class="missionv">MISSION</h2>
                        <p>Guided by its vision, the DFCAMCLP committed to: Motivate and develop competent, productive and ethical professionals, leaders and citizens of Las Piñas.</p>
                    </div>
                </div>
                <!-- VISION -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color1'] ?>;">
                    <div class="missionvision vision">
                        <h2 class="missionv" >VISION</h2>
                        <p>
                            The Dr. Filemon C. Aguilar Memorial College of Las Piñas (DFCAMCLP), as a public institution of higher learning, commits itself to educate and serve the less priviledge but deserving students of Las Piñas City.
                            Through quality tertiary education by emphasizing the importance of knowledge and skills honed through strong values fashioned from the best in human and Filipino tradition. It shall strive to achieve responsible service that will contribute to the common efforts towards community building, national development and global solidarity.
                        </p>
                    </div>
                </div>
                <!-- Message Photo --->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color1'] ?>;">
                    <?php
                        echo "<div class='yb-php' style='background:none;overflow-y: scroll;overflow-x: hidden;' id='text2'>";
                        echo '<center><img class="zoomE wow fadeInDown imahe" src="../../storage/Extras Database/uploads/'.$fetch["messages"].'" style="width:35%;height: 80%;"></center>
                        </div>';
                    ?>
                </div>
                <!--- ADMINISTRATIVE OFFICERS -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color2'] ?>;">
                    <div class="layout">
                        <h1 class="title">Administrative Officers</h1>
                        <div class="wrapping">
                            <?php 
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
                                        echo '<img class="zoomE" src="../../DB/'.$row['profile_image'].'"/>';
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
                    </div>   
                </div>
                <!--- ACADEMIC AFFAIRS -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color2'] ?>;">
                    <div class="layout">
                        <h1 class="title">Academic Affairs</h1>
                        <div class="wrapping">
                            <?php 
                                $user_check_query = "SELECT tbl_accounts.profile_image, tbl_eybook.elname, tbl_eybook.emname, tbl_eybook.efname, tbl_eybook.work_status, tbl_eybook.department, tbl_eybook.employee_year FROM tbl_eybook JOIN tbl_employees ON tbl_employees.eid=tbl_eybook.eid JOIN tbl_accounts on tbl_accounts.email=tbl_employees.email WHERE employee_year='$goo' AND department='Academic Affairs' ORDER BY elname";
                                $result = mysqli_query($db, $user_check_query);

                                    while ($row = mysqli_fetch_array($result)){
                                        echo "<div class='container'>";
                                        echo "<div class='card' style='height:350px;'>";
                                        echo "<div class='imgBx'>";
                                        echo '<img class="zoomE" src="../../DB/'.$row['profile_image'].'"/>';
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
                    </div>
                    
                </div>
                <!--- LATIN HONOR -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color3'] ?>;">
                    <div class="layout">
                        <h1 class="title">Latin Honors</h1>
                        <div class="latin">
                            <?php 
                                $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_students.honor, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE NOT honor='' AND school_year='$goo' ORDER BY slname";
                                $result = mysqli_query($db, $user_check_query);

                                    while ($row = mysqli_fetch_array($result)){
                                    echo "<div class='container'>";
                                        echo "<div class='card' style='height:350px;'>";
                                        echo "<div class='imgBx'>";
                                        echo '<img class="zoomE" src="../../DB/'.$row['profile_image'].'"/>';
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
                    </div>
               </div>
                <!--- GRADUATES CPE -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color4'] ?>;">

               <center>
                    <div class="layout" style="float: center;">
                    <h1 class="title">Computer Engineering</h1>
                    <div class="wrapping">
                        <?php 
                            $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='CPE' AND school_year='$goo' ORDER BY slname";
                            $result = mysqli_query($db, $user_check_query);

                            while ($row = mysqli_fetch_array($result)){
                                echo "<div class='container'>";
                                echo "<div class='card' style='height:400px;'>";
                                echo "<div class='imgBx'>";
                                echo '<img class="zoomE" src="../../DB/'.$row['profile_image'].'"/>';
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
                    </div>  

            </center>
                </div>
                <!--- GRADUATES BSIS -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color5'] ?>;">
                    <div class="layout">
                    <h1 class="title">BS Information Security</h1>
                    <div class="wrapping">
                        <?php 
                            $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='BSIS' AND school_year='$goo' ORDER BY slname";
                            $result = mysqli_query($db, $user_check_query);
          
                              while ($row = mysqli_fetch_array($result)){
                                  echo "<div class='container'>";
                                  echo "<div class='card' style='height:400px;'>";
                                  echo "<div class='imgBx'>";
                                  echo '<img class="zoomE" src="../../DB/'.$row['profile_image'].'"/>';
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
                    </div>  
                </div>
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background-color:<?php echo $fetch['color6'] ?>;">
                    <div class="layout">
                    <h1 class="title">Milestones </h1>
                    <div class="milestones">
                        <?php 
                          $user_check_query = "SELECT * FROM tbl_academic WHERE academic_year = '$goo'";
                          $result = mysqli_query($db, $user_check_query);
        
                          while ($row = mysqli_fetch_array($result)){
                          echo '<img class="zoomE" src="../../storage/Milestones & Activities/uploads/'.$row['academic_image'].'" alt="'.$row['academic_description'].'" style="width:50%; height:70%">';
                          echo '<p class="description">'.$row['academic_description'].'</p><br>';
                          }  
                        }
                    }
                            
                            ?>
                    </div>
                    </div>  
                </div>
            </div>
            
        <!-- If we need pagination -->
        <div class="swiper-pagination" align="center"></div>
        
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var menu = ['Yearbook Cover', 'Theme', 'Mission', 'Vision', 'Message', 'Admin Officer', 'Acad Affairs', 'Latin Honor', 'CPE - Graduates', 'BSIS - Graduates', 'Milestones']
        var mySwiper = new Swiper ('.swiper-container', {
        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (menu[index]) + '</span>';
            },
        },

        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    })
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/3211/jquery.parallax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.4/jquery.fullPage.min.js'></script>
  </body>
</html>
