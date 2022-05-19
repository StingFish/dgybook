<?php 
session_start();

    if(!isset($_SESSION['User']))
    {
      echo "<script>alert('You must login first.');window.location='../../landpage.php';</script>";
    }
    else{
    isset($_SESSION['User']);
}
$mysqli = new mysqli('localhost', 'root', '', 'tests') or die(mysqli_error($mysqli));

#delete btn(new)

if(isset($_GET['email'])){
	$EMAIL = $_GET['email'];
	$mysqli->query("DELETE FROM tab3 WHERE email = '$EMAIL'") or die($mysqli->error());
  header("Location: Reg1.php");
}

#edit btn(new)
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
  $dte = date("Y");
	$result = $mysqli->query("SELECT tbl_accounts.profile_image, tbl_accounts.lname, tbl_accounts.fname, tbl_accounts.mname, tbl_students.sid FROM tbl_accounts JOIN tbl_students ON tbl_students.email = tbl_accounts.email WHERE sid = '$id'") or die($mysqli->error());
	while($row = $result->fetch_assoc()){
		echo "<html>";
		echo "<head>";
		echo "<meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'/>
    <link rel='shortcut icon' href='CvSU/logo-removebg.png'>
    <title>Add to Yearbook</title>";
		echo "<style>";
		echo "@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background-image: url('assets/tmp2.png');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  overflow: hidden;
}
::selection{
  background: rgba(26,188,156,0.3);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 100px auto;
}
.wrapper{
  width: 100%;
  height: 70%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: #16a085;
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
  height: 70%;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: #16a085;
  box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: #16a085;
  border: 1px solid #16a085;
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: #16a085;
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 15px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}";
echo "</style>";
		echo "</head>";
		echo "<body>";
		echo "<div class='container'>
      <div class='wrapper'>
        <div class='title'><span>Add to Yearbook</span></div>
        <form action='s.php' method='post' enctype='multipart/form-data' style='overflow-y:scroll;'>";
        echo '<center><img class="imahe" style="width:80px; height:100px;" src="../../DB/'.$row['profile_image'].'"/></center><br>';

        echo "<input type='text' name='id' value='".$id."' placeholder='Email or Phone' style='display:none;'>
          
          <div class='input-container'>
    <i class='fa fa-user icon'></i>
    <input class='input-field' type='text' onkeypress='return /[a-z keyCode-]/i.test(event.key)' placeholder='Last Name' value='".$row['lname']."' name='lname' required>
  </div>
          <div class='input-container'>
    <i class='fa fa-user icon'></i>
    <input class='input-field' type='text' onkeypress='return /[a-z keyCode-]/i.test(event.key)' placeholder='First Name' value='".$row['fname']."' name='fname' required>
  </div>

          <div class='input-container'>
    <i class='fa fa-user icon'></i>
    <input class='input-field' type='text' onkeypress='return /[a-z keyCode-]/i.test(event.key)' placeholder='Middle Name' value='".$row['mname']."' name='mname' required>
  </div>
          <div class='input-container'>
    <i class='fa icon'></i>
    <textarea class='input-field' type='text' placeholder='Quotes' name='quo' style='resize:none; font-size:13px' required></textarea>
  </div>

          <div class='input-container'>
    <i class='fa icon'></i>
    <input class='input-field' type='text' placeholder='Year & Section' name='sec' style='resize:none' required>
  </div>

          <div class='input-container'>
    <i class='fa fa-user icon'></i>
    <input class='input-field' type='number' name='yr' placeholder='Year' min='2018' max='".$dte."' oninput='javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);' maxlength='4' onkeypress='return /[0-9]/i.test(event.key)' required>
  </div>

          <div class='row button'>
            <button type='submit' name='save2' style='width: 100%;color: #fff;font-size: 20px;font-weight: 500;padding-left: 0px;background: #16a085;border: 1px solid #16a085;cursor: pointer;'>Save</button>
          </div>
          <div class='row button'>
            <a href='index.php' type='submit' style='text-decoration: none;width: 100%;color: #fff;font-size: 20px;font-weight: 500;padding: 4px;height: 35px;background: #16a085;border: 1px solid #16a085;cursor: pointer;display: inline-block;text-align: center;'> Cancel </a>
          </div>
        </form>
      </div>
    </div>";
		echo "</body>";
		echo "</html>";
	}
}
?>
