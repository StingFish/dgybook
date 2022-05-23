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
$color2 =  "";
$color3 =  "";
$color4 =  "";
$color5 =  "";
$color6 =  "";
$year = "";

$errors = array();

$db=mysqli_connect('localhost', 'root', '', 'tests');

if (isset($_POST["gett"])) {
$title = $_POST['title'];
$color = $_POST['color'];
$color2 = $_POST['color2'];
$color3 = $_POST['color3'];
$color4 = $_POST['color4'];
$color5 = $_POST['color5'];
$color6 = $_POST['color6'];
$year = $_POST['Year'];


  
  $target_dir = "uploads/";
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
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  array_push($errors, "Sorry, file not uploaded.");
// if everything is ok, try to upload file
} 
else {
  if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file)) {
     
  $user_check_query = "SELECT * FROM tbl_addons LIMIT 1";
  $resulta = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($resulta);
  
    if ($user['addon_year'] === $year) {
      array_push($errors, "Year Exist.");
    }
    else {
      $bars = htmlspecialchars( basename( $_FILES["f1"]["name"])); 
 $insertion = "INSERT INTO tbl_addons (addon_year, messages, front_title, color1, color2, color3, color4, color5, color6) VALUES ('$year', '$bars', '$title', '$color', '$color2', '$color3', '$color4', '$color5', '$color6')";
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