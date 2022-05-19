<?php
    include_once('connect.php');

    if(!isset($_SESSION['User']))
    {
    echo "<script>alert('You must login as Registrar first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Add Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel='shortcut icon' href='CvSU/logo-removebg.png'>
   </head>
<body>
  <div class="container">
    <div class="title">Add Photo</div>
    <div class="content">
      <form action="edit.php" name="frmContact" method="post" enctype="multipart/form-data">
        <p><?php include('errors.php'); ?></p>
        <div class="user-details">
          <div class="input-box">
            <span class="details">File</span>
            <input type="file" placeholder="file" name="f1" style="outline: 1px solid black;" accept=".mp4,.png,.jpg" required>
          </div>
          <div class="input-box">
            <span class="details">Description</span>
            <input type="text" placeholder="Description" value="<?php echo $desc;?>" name="desc" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input type="text" placeholder="Year" name="Year" value="<?php echo $year;?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return /[0-9]/i.test(event.key)" required>
          </div>
        </div>
        <center>
        <div class="button">
          <input type="submit" name="gett" value="Add">
          <a href='index.php'><input type='button' style='background-color:red' value='Cancel'></a>
        </div>
      </center>
      </form>
    </div>
  </div>
      <br>
      <br>
      <br>
      <br>
      <br>
</body>
</html>



