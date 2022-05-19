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
    <title>Add Job Hiring</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel='shortcut icon' href='CvSU/logo-removebg.png'>
   </head>
<body>
  <div class="container">
    <div class="title">Add Job Hiring</div>
    <div class="content">
      <form action="edit.php" name="frmContact" method="post" enctype="multipart/form-data">
        <p><?php include('errors.php'); ?></p>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Poster Image</span>
            <input type="file" placeholder="file"  name="fileToUpload" id="fileToUpload" accept=".mp4,.png,.jpg,.avi" required>
          </div>
          <div class="input-box">
            <span class="details">Category</span>
            <select name="cat">
            <option value="IT Hardware"><b>IT Hardware</b></option>
            <option value="IT Software"><b>IT Software</b></option>
            <option value="IT Communication"><b>IT Communication</b></option>
            <option value="Multimedia"><b>Multimedia</b></option>
      </select>
      </select>
          </div>
          <div class="input-box">
            <span class="details">Company Name</span>
            <input class="input-field" type="text" value="<?php echo $company;?>" placeholder="Company Name" name="comp" required>
          </div>
          <div class="input-box">
            <span class="details">Job Type</span>
            <input type="text" onkeypress="return /[a-z- keyCode]/i.test(event.key)" value="<?php echo $job;?>" placeholder="Job Type" name="jtype" required>
          </div>
          <div class="input-box">
            <span class="details">Date Released</span>
            <input class="input-field" type="date" placeholder="Date Released" value="<?php echo $desc;?>" name="desc" required>
          </div>
          <div class="input-box">
            <span class="details">Job Link</span>
            <textarea value="<?php echo $link;?>" placeholder="Job Link" name="jlink" style="height: 100%;resize: none;" required></textarea>
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

