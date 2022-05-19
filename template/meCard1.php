<?php
//kemero
    session_start();

    if(!isset($_SESSION['User3']))
    {
      echo "<script>alert('You must login as Student first.');window.location='../landpage.php';</script>";
    }
    isset($_SESSION['User3']);
    isset($_SESSION['Users3']);
    isset($_SESSION['User3.0']);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="CvSU/logo-removebg.png">
    <title>Profile | About Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.6"/>
    <link rel="stylesheet" href="meCard1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php
    $db=mysqli_connect('localhost','root','','tests');
    $mee= $_SESSION['User3.0'];
    $user_check_query = "SELECT tbl_accounts.email, tbl_accounts.password, tbl_accounts.profile_image, tbl_accounts.year_created, tbl_accounts.lname, tbl_accounts.fname, tbl_accounts.mname, tbl_accounts.quotes, tbl_students.email, tbl_students.course FROM tbl_accounts INNER JOIN tbl_students ON tbl_students.email=tbl_accounts.email WHERE tbl_accounts.email= '$mee' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);

    if(isset($_POST['form-modal'])){
      $curPassword = mysqli_real_escape_string($db, $_POST['curr2']);
      $newPassword = mysqli_real_escape_string($db, $_POST['new1']);
      $confirmPassword = mysqli_real_escape_string($db, $_POST['new2']);

      $selectPassQ = "SELECT password FROM tbl_accounts WHERE email = '$mee'";
      $resultPassQ = mysqli_query($db, $selectPassQ);
      $row = mysqli_fetch_array($resultPassQ);
      if (md5($curPassword) != $row['password']) {
        echo "<script>alert('Your Current Password was not correct!');window.location='meCard1.php'</script>";
      }else{
      if($newPassword == $confirmPassword){
        $nPassword = md5($newPassword);
          $cha = mysqli_query($db, "UPDATE tbl_accounts set password='$nPassword' WHERE email='$mee'");

            $mes = "Hi " . $last . ", <br> We would like to acknowledge you that you have changed your account password successfully to access the Digital Yearbook of Dr. Filemon C. Aguilar Memorial College of Las Piñas City - IT Campus. The new information of the account are the following: <br><br> Email: " . $mee . "<br> Password Key: " . $newPassword . "<br><br> You can now sign in your account <a href='https://dfcamclp.it.ezyro.com/landpage.php'>here</a>. Thank you.";

require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "dfcamclpitmailbot@gmail.com";
    $mail->Password = "Abc_123456";
    $mail->SetFrom("dfcamclpitmailbot@gmail.com");
    $mail->Subject = "digital Yearbook Confirmation";
    $mail->Body = $mes;
    $mail->AddAddress($mee);

    if (!$mail->send()) {
    echo "<script>alert('Email Failed.');window.location='index.php';</script>";
    }else{
          echo "<script>alert('Updated Successfully!');window.location='meCard1.php'</script>";
            //$message = "Current Password is not correct";
        }
      }else{
        echo "<script>alert('New Password and Confirm Password do not match');window.location='meCard1.php'</script>";
      }
  }
}

    while ($row = mysqli_fetch_array($result)){
    $pass= $row['password'];
    ?>
    <h1>Personal Card User</h1>
    <div class="container">
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="our-team">
          <div class="picture">
            <?php
              echo '<img class="img-fluid" id="trc" src="../DB/'.$row['profile_image'].'" alt="IMAGE"></img>';
            ?><!--<img class="img-fluid" src="https://picsum.photos/130/130?image=1027">-->
          </div>
          <div class="team-content">
            <div class="team">
              <blockquote>
                <?php echo $row['quotes'];
               ?>
              </blockquote>
            </div>
            <h2 class="name"><?php echo $row['lname'].", ". $row['fname']."&nbsp;".$row['mname'];
            ?></h2>
            <h4 class="title">Batch <?php echo $row['year_created']; ?></h4>
            <h5 class="title" style="text-transform: lowercase;"><?php echo $row['email']; ?></h5>
          </div>
          <ul class="social">
            <h3 class="course"><?php echo $row['course']; }?></h3>
          </ul>
        </div>
      </div>
      <div>
        <span><a href="menu.php"><button class="button1" style="color:white">EXIT</button></a><button id="submit" class="button2" style="color:white;border:0">CHANGE PASSWORD</button></span>
          <div class="modal-bg">
  					<form class="modal" style="max-width:80%" action="meCard1.php" method="post">
  						<h2>Change Your Password</h2>
                    <input type="password" name="curr2" placeholder="your current password" style="height: 50px;width: 40%;outline: none;font-size: 16px;border-radius: 5px;padding-left: 15px;border: 1px solid #ccc;border-bottom-width: 2px;transition: all 0.3s ease;" required>

  			            <input type="password" name="new1" placeholder="New password" style="height: 50px;width: 40%;outline: none;font-size: 16px;border-radius: 5px;padding-left: 15px;border: 1px solid #ccc;border-bottom-width: 2px;transition: all 0.3s ease;" required>

  			            <input type="password" name="new2" placeholder="Confirm password" style="height: 50px;width: 40%;outline: none;font-size: 16px;border-radius: 5px;padding-left: 15px;border: 1px solid #ccc;border-bottom-width: 2px;transition: all 0.3s ease;" required>

  			            <button name="form-modal" class="button2" style="color:white;border:0">Submit</button>
  						<span class="modal-close">X</span>
  					</form>
  				</div>
      </div>
    </div>
  </body>
  <script>
    let modalBtn = document.querySelector('.button2');
    let modalBg = document.querySelector('.modal-bg');
    let modalClose = document.querySelector('.modal-close');

    modalBtn.addEventListener('click', function(){
      modalBg.classList.add('bg-active');
    });
    modalClose.addEventListener('click', function(){
      modalBg.classList.remove('bg-active');
    });
  </script>
  <?php
    /*while ($row = mysqli_fetch_array($resultPassQ)){
      //echo $row['password'];
      //echo "</br>";
    //  echo md5($cPassword);
    if(md5($_POST["curr2"]) === $row['password']){
      echo '<script>alert("true")</script>';
      if($newPassword === $confirmPassword){


        $confirmPassword = md5($confirmPassword);
        $query = "UPDATE tbl_accounts SET password='$confirmPassword' WHERE email = '$mee' ";
        $results = mysqli_query($db, $query);

      }else{
        echo "hnd pareho";
      }
    }
    else{
      echo "hnd pareho ang current";
    }
  }*/

  ?>
</html>
