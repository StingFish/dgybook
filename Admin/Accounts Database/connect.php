<?php

    session_start();

    if(!isset($_SESSION['User2']))
    {
    echo "<script>alert('You must login as Admin first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User2']);
?>

<?php

$email = "";
$pass =  "";
$last = "";
$first = "";
$mid = "";
$location = "";
$con = "";
$tel = "";
$yerr = "";
$acct = "";
$cour = "";
$sid = "";
$eid = "";
$dist = "";
$quo = "";
$sec = "";

$errors = array();

$db=mysqli_connect('localhost', 'root', '', 'tests');

if (isset($_POST["gett"])) {
$acct = $_POST['acc']; //account type
$sid = $_POST['sids']; //student id
$last = $_POST['Lname']; //lastname
$first = $_POST['Fname']; //firstname
$mid = $_POST['Mname']; //middlename
$location = $_POST['addr']; //address
$con = $_POST['contact']; //cellphone number
$tel = $_POST['mobile']; //telephone number
$quo = $_POST['quotes']; //quotes
$latin = $_POST['latin']; //latin honor
$cour = $_POST['course']; //course
$sec = $_POST['sec']; //Yr&section
$em = $_POST['mail'];  //email
$email = $em . "@gmail.com"; //email full
$pass = $_POST['psw']; //password
$yerr = $_POST['yrr']; //batch year number
$dist = $_POST['dis']; //accessibility

$mes = "Hi " . $last . ", <br> We would like to acknowledge you that you already have a new account to access the Digital Yearbook of Dr. Filemon C. Aguilar Memorial College of Las Piñas City - IT Campus. The information of the account are the following: <br><br> Email: " . $email . "<br> Password Key: " . $pass . "<br><br> You can now sign in your account <a href='https://dfcamclp.it.ezyro.com/landpage.php'>here</a>. Thank you.";

if ($acct=="Registrar/Employee") {
  $user_check_query = "SELECT tbl_accounts.email, tbl_employees.eid FROM tbl_employees INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_employees.email";
  $resulta = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($resulta);
  
    if ($user['email'] === $email && $user['eid'] === $sid) {
      array_push($errors, "Account Exist.");
    }
    else if ($user['email'] === $email && $user['eid'] !== $sid) {
      array_push($errors, "Account Email Exist.");
    }
    else if ($user['email'] !== $email && $user['eid'] === $sid) {
      array_push($errors, "Account SID Exist.");
    }
    
  else{
$target_dir = "../../DB/";
$target_file = $target_dir . basename($_FILES["f1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["f1"]["tmp_name"]);

  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  array_push($errors, "Sorry, file already exists.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["f1"]["size"] > 5000000) {
  array_push($errors, "Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  array_push($errors, "Sorry, only JPG, JPEG, & PNG files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file)) {
    $bars = htmlspecialchars( basename( $_FILES["f1"]["name"]));
    $passs = md5($pass);
 $insertion = "INSERT INTO tbl_accounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, quotes, section, atype, year_created, is_disabled) VALUES ('$email', '$passs', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', 'N/A', 'N/A', '$acct', '$yerr', '$dist')";
    $result = mysqli_query($db, $insertion);
    echo mysqli_error($db);

 
    $ins = "INSERT INTO tbl_employees (eid, email) VALUES ('$sid', '$email')";
    $res = mysqli_query($db, $ins);
    if ($res){

    
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
    $mail->AddAddress($email);

    if (!$mail->send()) {
    echo "<script>alert('Added failed to Employee.');window.location='index.php';</script>";
    }else{
      echo "<script>alert('Added Successfully to Employee.');window.location='index.php';</script>";
    }
  }
 }
}
}
}




else if($acct=="Alumni"){
  $check = "SELECT * FROM folder2 WHERE type = 'B' AND year = '$yerr'";
  $get = mysqli_query($db, $check);
  $fetch = mysqli_fetch_assoc($get);
  if (!$fetch) {
    echo "<script>alert('No School Year for this batch group in Alumni Yearbook Database. Please contact the Registrar for creating this year group.');window.location='index.php';</script>";
  }else{
    $user_check_query = "SELECT tbl_accounts.email, tbl_students.sid FROM tbl_students INNER JOIN tbl_accounts ON tbl_accounts.email = tbl_students.email";
  $resulta = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($resulta);
  
    if ($user['email'] === $email && $user['sid'] === $sid) {
      array_push($errors, "Account Exist.");
    }
    else if ($user['email'] === $email && $user['sid'] !== $sid) {
      array_push($errors, "Account Email Exist.");
    }
    else if ($user['email'] !== $email && $user['sid'] === $sid) {
      array_push($errors, "Account Email & SID Exist.");
    }
    
  else{
$target_dir = "../../DB/";
$target_file = $target_dir . basename($_FILES["f1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["f1"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check if file already exists
if (file_exists($target_file)) {
  array_push($errors, "Sorry, file already exists.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["f1"]["size"] > 50000000) {
  array_push($errors, "Sorry, your file is too large.");
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  array_push($errors, "Sorry, only JPG, JPEG, PNG files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} 

else {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file)) {
    $bars = htmlspecialchars( basename( $_FILES["f1"]["name"]));
    $pass = md5($pass);
 $insertion = "INSERT INTO tbl_accounts (email, password, lname, fname, mname, address, mobile, landline, profile_image, quotes, section, atype, year_created, is_disabled) VALUES ('$email', '$pass', '$last', '$first', '$mid', '$location', '$con', '$tel', '$bars', '$quo', '$sec', '$acct', '$yerr', '$dist')";
    $result = mysqli_query($db, $insertion);
    echo mysqli_error($db);

    $ins = "INSERT INTO tbl_students (sid, email, course, honor) VALUES ('$sid', '$email', '$cour', '$latin')";
    $res = mysqli_query($db, $ins);
    if ($res){
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
    $mail->AddAddress($email);

    if (!$mail->send()) {
    echo "<script>alert('Added failed to Alumni.');window.location='index.php';</script>";
    }else{
      echo "<script>alert('Added Successfully to Alumni.');window.location='index.php';</script>";
    }
    }
 }
}
}
}
}
}


if (isset($_POST['cancel'])) {
    header("Location : index.php");
    $email = "";
    $pass =  "";
$last = "";
$first = "";
$mid = "";
$location = "";
$con = "";
$tel = "";
$yerr = "";
$acct = "";
$cour = "";
$sid = "";
$eid = "";
$dist = "";
}
?>