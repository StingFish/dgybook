<?php

    session_start();

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Registrar first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);
?>

<?php

$title = "";
$color =  "";
$year = "";

$errors = array();

$db=mysqli_connect('localhost', 'root', '', 'tests');

if (isset($_POST["gett"])) {
$title = $_POST['title'];
$year = $_POST['Year'];
 
$target_dir = "uploads/";
$target_dir2 = "../../bground/";
$target_file = $target_dir . basename($_FILES["f1"]["name"]);
$target_file2 = $target_dir2 . basename($_FILES["f2"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["f1"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
  $check = getimagesize($_FILES["f2"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file) || file_exists($target_file2)) {
  array_push($errors, "Sorry, file already exists.");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["f1"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} 
else {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["f2"]["tmp_name"], $target_file2)) {
     
  $user_check_query = "SELECT * FROM tbl_addons LIMIT 1";
  $resulta = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($resulta);
  
    if ($user['addon_year'] === $year) {
      array_push($errors, "Year Exist.");
    }
    else {
      $bars = htmlspecialchars( basename( $_FILES["f1"]["name"]));
      $bars2 = htmlspecialchars( basename( $_FILES["f2"]["name"])); 
 $insertion = "INSERT INTO tbl_addons (addon_year, messages, front_title, background) VALUES ('$year', '$bars', '$title', '$bars2')";
    $res = mysqli_query($db, $insertion);
    echo mysqli_error($db);
    if ($res){
    echo "<script>alert('Added Successfully to Extras.');window.location='index.php';</script>";
    }
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