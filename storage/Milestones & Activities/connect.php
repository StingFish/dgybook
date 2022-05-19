<?php

    session_start();

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Registrar first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);
?>

<?php

$desc= "";
$year = "";

$errors = array();

$db=mysqli_connect('localhost', 'root', '', 'tests');

if (isset($_POST["gett"])) {
$desc = $_POST['desc'];
$year = $_POST['Year'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["f1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["f1"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    array_push($errors, "File is not an image.");
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
  array_push($errors, "Sorry, only JPG, JPEG, PNG files are allowed.");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file)) {
    $bars = htmlspecialchars( basename( $_FILES["f1"]["name"]));
    $insertion = "INSERT INTO tbl_academic (academic_image, academic_description, academic_year) VALUES ('$bars', '$desc', '$year')";
    $res = mysqli_query($db, $insertion);
    echo mysqli_error($db);
    if ($res){
    echo "<script>alert('Added Successfully to Milestones and Academic.');window.location='index.php';</script>";
    }
 }
}
}

if (isset($_POST['cancel'])) {
    header("Location : index.php");
    $title = "";
    $color =  "";
    $year = "";
}
?>