<?php

    session_start();

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Registrar first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);
?>

<?php
$link = "";
$job = "";
$company = "";
$desc = "";

$errors = array();

$db=mysqli_connect('localhost', 'root', '', 'tests');





// Check if image file is a actual image or fake image
if(isset($_POST["gett"])) {
$link = $_POST['jlink'];
$job = $_POST['jtype'];
$cat = $_POST['cat'];
$company = $_POST['comp'];
$desc = $_POST['desc'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
if ($_FILES["fileToUpload"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $bars = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    $asd = "INSERT INTO tbl_jobs (filename, comp_name, link, category, jobtype, date_release) VALUES ('$bars','$company','$link','$cat','$job','$desc')";
    $result = mysqli_query($db, $asd);
    echo "<script>alert('The job entry has been added.');window.location='index.php';</script>";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>