<?php include('scripts.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="shortcut icon" href="CvSU/logo.ico">
    <title>Add Member</title>
<style>
  .button {
  border-radius: 25px;
  border:none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

select{
  height: 40px;
  width: 99%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
  font-family: 'Ubuntu', sans-serif;
}

.button1 {background: linear-gradient(to right, red, red);} /* Green */
.button2 {background: linear-gradient(to right, #9C27B0, #E040FB);} /* Blue */
}
</style>
</head>
<body>
    <div class="header">
    <h2>Add Member</h2>
  </div>
    <form action="" method="post"  enctype="multipart/form-data">
        <div class="card">
            <div class="container">
        <div class="input-group" align="center">
            <?php include('errors.php'); ?>
            <p align="left">&nbsp;Select Image</p>
      <input type="file" name="f1" required><br>
      <p align="left">&nbsp;Firstname</p>
      <input type="text" name="Fname"required><br>
      <p align="left">&nbsp;Middle Initial</p>
      <input type="text" name="Mname" maxlength="4" required><br>
      <p align="left">&nbsp;Lastname</p>
      <input type="text" name="Lname"required><br>
      <p align="left">&nbsp;Position</p>
      <input type="text" name="position"required><br>
      <p align="left">&nbsp;Year</p>
      <input type="text" name="year" maxlength="4" required><br>
      <input type="submit" name="submit1" class="button button1" value="Add">
            </div>
            </div>
            </form>
           <?php
      $db=mysqli_connect('localhost','root','','yearbook');

      if(isset($_POST["submit1"])){
         $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
         $firstName = $_POST['Fname'];
         $midName = $_POST['Mname'];
         $lastName = $_POST['Lname'];
         $course = $_POST['position'];
         $year = $_POST['year'];

         $user_check_query = "INSERT INTO tab5 (image1, fname, mname, lname, position, year) VALUES ('$image', '$firstName', '$midName', '$lastName', '$course', '$year')";
         $result = mysqli_query($db, $user_check_query);
         echo "<script>alert('Added Successfully!');window.location='tab5.php';</script>";
      }
?>
</body>
</html>