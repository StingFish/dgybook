<?php
session_start();

    if(!isset($_SESSION['User2']))
    {
    echo "<script>alert('You must login as Admin first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User2']);

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
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="testing.css">
    <link rel="stylesheet" type="text/css" href="D1.css">
  </head>

  <body>
    
    <!-- Slider main container -->
    <div class="swiper-container">
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
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <?php 
                        $user_check_query = "SELECT * FROM folder2 WHERE year = '$goo' LIMIT 1";
                        $result = mysqli_query($db, $user_check_query);

                            while ($row = mysqli_fetch_array($result)){
                                echo '<img class="yearbookImage" src="../../storage/EYearbook Database/FrontImage/'.$row['frontImage'].'"  style="width:30%; height:80%;vertical-align:middle">';
                            }
                    ?>
                </div>
                <!--- TITLE -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <h2><?php echo $fetch['front_title'];?></h2>
                </div>
                <!--- MISSION -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="missionvision">
                        <h2>MISSION</h2>
                        <p>Guided by its vision, the DFCAMCLP committed to: Motivate and develop competent, productive and ethical professionals, leaders and citizens of Las Piñas.</p>
                    </div>
                </div>
                <!-- VISION -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="missionvision vision">
                        <h2>VISION</h2>
                        <p>
                            The Dr. Filemon C. Aguilar Memorial College of Las Piñas (DFCAMCLP), as a public institution of higher learning, commits itself to educate and serve the less priviledge but deserving students of Las Piñas City.
                            Through quality tertiary education by emphasizing the importance of knowledge and skills honed through strong values fashioned from the best in human and Filipino tradition. It shall strive to achieve responsible service that will contribute to the common efforts towards community building, national development and global solidarity.
                        </p>
                    </div>
                </div>
                <!-- Message Photo --->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <?php
                        echo "<div class='yb-php' style='background:none;overflow-y: scroll;overflow-x: hidden;' id='text2'>";
                        echo '<center><img class="wow fadeInDown imahe" src="../../storage/Extras Database/uploads/'.$fetch["messages"].'" style="width:35%;height: 80%;"></center>
                        </div>';
                    ?>
                </div>
                <!--- ADMINISTRATIVE OFFICERS -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                        <h1>ADMINISTRATIVE OFFICERS</h1>
                        <div class="wrapping">
                            <?php 
                                $db=mysqli_connect('localhost', 'root', '', 'tests');
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
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                        <h1>ACADEMIC AFFAIRS</h1>
                        <div class="wrapping">
                            <?php 
                                $db=mysqli_connect('localhost','root','','tests');
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
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                        <h1>LATIN HONORS</h1>
                        <div class="latin">
                            <?php 
                                $db=mysqli_connect('localhost', 'root', '', 'tests');
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
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                    <h1>CPE</h1>
                    <div class="wrapping">
                        <?php 
                            $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='CPE' AND school_year='$goo' ORDER BY slname";
                            $result = mysqli_query($db, $user_check_query);

                            while ($row = mysqli_fetch_array($result)){
                                echo "<div class='container'>";
                                echo "<div class='card' style='height:350px;'>";
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
                <!--- GRADUATES BSIS -->
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                    <h1>BSIS</h1>
                    <div class="wrapping">
                        <?php 
                            $user_check_query = "SELECT tbl_accounts.profile_image, tbl_students.course, tbl_sybook.slname, tbl_sybook.smname, tbl_sybook.sfname, tbl_sybook.quotes, tbl_sybook.YrSec, tbl_sybook.school_year FROM tbl_sybook JOIN tbl_students ON tbl_students.sid=tbl_sybook.sid JOIN tbl_accounts on tbl_accounts.email=tbl_students.email WHERE course='BSIS' AND school_year='$goo' ORDER BY slname";
                            $result = mysqli_query($db, $user_check_query);
          
                              while ($row = mysqli_fetch_array($result)){
                                  echo "<div class='container'>";
                                  echo "<div class='card' style='height:350px;'>";
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
                <div class="swiper-slide" style="overflow-y: auto;overflow-x: hidden;background: url('../../bground/<?php echo $fetch['background'] ?>');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
                    <div class="layout">
                    <h1>Milestones </h1>
                    <div class="milestones">
                        <?php 
                          $db=mysqli_connect('localhost','root','','tests');
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
        <div class="swiper-pagination"></div>
        
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
  </body>
</html>
