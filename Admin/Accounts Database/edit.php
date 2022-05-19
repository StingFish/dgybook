<?php
    include_once('connect.php');
    if(!isset($_SESSION['User2']))
    {
    echo "<script>alert('You must login as Admin first.');window.location='../../landpage.php';</script>";
    }
    isset($_SESSION['User2']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Add Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
   </head>
<body>
  <div class="container">
    <div class="title">Add Account</div>
    <div class="content">
      <form action="edit.php" name="frmContact" method="post" enctype="multipart/form-data">
        <p><?php include('errors.php'); ?></p>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Account Type</span>
            <select name="acc" value="<?php echo $acct;?>" id="acc" onChange="return changeTextBox();">
            <option value="Registrar/Employee"><b>Registrar/Employee</b></option>
            <option value="Alumni"><b>Alumni</b></option>
      </select>
          </div>
          <div class="input-box">
            <span class="details">Image</span>
            <input type="file" placeholder="file" name="f1" accept=".mp4,.png,.jpg,.avi" required>
          </div>
          <div class="input-box">
            <span class="details">ID Number</span>
            <input type="text" placeholder="ID Number" id="sids" name="sids" onkeypress="return /[a-z 0-9]/i.test(event.key)" value="<?php echo $sid;?>" maxlength="9" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" onkeypress="return /[a-z- keyCode]/i.test(event.key)" value="<?php echo $last;?>" placeholder="Last Name" name="Lname" required>
          </div>
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" onkeypress="return /[a-z keyCode]/i.test(event.key)" placeholder="First Name" value="<?php echo $first;?>" name="Fname" required>
          </div>
          <div class="input-box">
            <span class="details">Middle Name</span>
            <input type="text" onkeypress="return /[a-z keyCode]/i.test(event.key)" placeholder="Middle Name" value="<?php echo $mid;?>" name="Mname" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input class="input-field" type="text" placeholder="Address" name="addr" value="<?php echo $location;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input id="num" type="number" placeholder="Contact No." name="contact" value="<?php echo $con;?>" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" required>
          </div>
          <script>
          var number = document.getElementById('num');
        number.onkeydown = function(e) {
        if(!((e.keyCode > 95 && e.keyCode < 106)
         || (e.keyCode > 47 && e.keyCode < 58) 
         || e.keyCode == 8)) {
         return false;
             }
           }
          </script>
          <div class="input-box">
            <span class="details">Telephone Number</span>
            <input onkeypress="return /[0-9-]/i.test(event.key)" type="tel" placeholder="Telephone No. (XXX-XXXX)" name="mobile" value="<?php echo $tel;?>" pattern="[0-9]{3}-[0-9]{4}" required><br>
          <span class="details">Course</span>
            <select name="course" value="<?php echo $cour;?>">
            <option value="BSIT"><b>BSIT</b></option>
            <option value="BSIS"><b>BSIS</b></option>
      </select>
          </div>
          <div class="input-box">
            <span class="details">Quotes</span>
            <textarea placeholder="Quotes" id="quotes" name="quotes" value="<?php echo $quo;?>" style="resize: none;height: 120px" required></textarea>
          </div>
          <div class="input-box">
            <span class="details">Latin Honor</span>
            <select name="latin" value="<?php echo $latin;?>">
              <option value=""><b>None</b></option>
            <option value="Cum laude"><b>Cum laude</b></option>
            <option value="Magna cum laude"><b>Magna cum laude</b></option>
            <option value="Summa cum laude"><b>Summa cum laude</b></option>
            <option value="Egregia cum laude"><b>Egregia cum laude</b></option>
            <option value="Maxima cum laude"><b>Maxima cum laude</b></option>
      </select>
          </div>
          <div class="input-box">
            <span class="details">Yr. & Section</span>
            <input onkeypress="return /[0-9-]/i.test(event.key)" type="text" placeholder="Ex. 4-1" id="sec" name="sec" value="<?php echo $sec;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Batch Year</span>
            <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeypress="return /[0-9]/i.test(event.key)" min="2018" maxlength="4" placeholder="Batch Year" name="yrr" value="<?php echo $yerr;?>" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="mail"  value="<?php echo $email;?>" style="width: 62%; display: inline-block;" onkeypress="return /[a-z&0-9.]/i.test(event.key)" onkeyup="if(this.value.length > 0) document.getElementById('generate').disabled = false; else document.getElementById('generate').disabled = true;" required>
            <h6 style="display: inline-block;font-size: 10px;float: right;">@dfcamclpit.edu.ph</h6>  
          </div>
          <div class="input-box">
            <span class="details">Password</span>
        <textarea style="resize: none;pointer-events: none;width: 85%;display:inline-block" value="<?php echo $pass;?>" type="text" id="pw" placeholder="Password" name="psw" required></textarea>
        <input id="generate" style="background-color: royalblue;border-radius: 5px;color:white;display:block;width: 15%;float: right;" value="&#9881;" readonly disabled>
        <input id="len" value="20" type="number" min="8" max="30" style="display:none;"> 
        <input id="upper" type="checkbox" style="display:none;" checked>
        <input id="lower" type="checkbox" style="display:none;" checked>
        <input id="number" type="checkbox" style="display:none;" checked>
        <input id="symbol" type="checkbox" style="display:none;" checked>
                <center>
            
              <script>
        var number = document.getElementById('pw');
        number.onkeydown = function(e) {
        if(((e.keyCode > 95 && e.keyCode < 106)
         || (e.keyCode > 47 && e.keyCode < 58)
         || (e.keyCode > 64 && e.keyCode < 91)
         || (e.keyCode > 7 && e.keyCode < 47)
         || (e.keyCode > 105 && e.keyCode < 223)
         || e.keyCode == 8)) {
         return false;
          }
        }
              </script>
              <script src="index.js"></script>
          </div>
          <div class="input-box">
            <span class="details">Status</span>
            <select name="dis" value="<?php echo $dist;?>">
            <option value="1"><b>On</b></option>
            <option value="0"><b>Off</b></option>
      </select>
          </div>
          </div>
        <center>
        <div class="button">
          <input type="submit" name="gett" value="Register">
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