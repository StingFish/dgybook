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
    <title>Add Extras</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   </head>
<body>
  <div class="container">
    <div class="title">Add Extras</div>
    <div class="content">
      <form action="edit.php" name="frmContact" method="post" enctype="multipart/form-data">
        <p><?php include('errors.php'); ?></p>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Message Photo</span>
            <input type="file" placeholder="file" name="f1" style="outline: 1px solid black;" accept=".mp4,.png,.jpg" required>
          </div>
          <div class="input-box">
            <span class="details">Title</span>
            <input type="text" placeholder="Title" value="<?php echo $title;?>" name="title" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 1<small> (Front to Message)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color;?>" name="color" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 2<small> (Admin to Acad)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color2;?>" name="color2" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 3<small> (Latin Honors)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color3;?>" name="color3" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 4<small> (CPE)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color4;?>" name="color4" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 5<small> (BSIS)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color5;?>" name="color5" required>
          </div>
          <div class="input-box">
            <span class="details">Color Theme 6<small> (Milestones)</small></span>
            <input type="color" style="height: 50px" value="<?php echo $color6;?>" name="color6" required>
          </div>
          <div class="input-box">
            <span class="details">Year</span>
            <input class="input-field" type="text" placeholder="Year" name="Year" value="<?php echo $year;?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" onkeypress="return /[0-9]/i.test(event.key)" required>
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



