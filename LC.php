
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign In</title>
  <style>
      body{
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Jost', sans-serif;
    transition: background-color .5s;
  background-image: url("assets/tmp2.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
.main{
    width: 350px;
    height: 500px;
    background: red;
    overflow: hidden;
    background-color:#0275d8;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
}
#chk{
    display: none;
}
.signup{
    position: relative;
    width:100%;
    height: 100%;
}
label{
    color: #fff;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
}
input{
    width: 60%;
    height: 20px;
    background: #e0dede;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
}

button{
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background: #573b8a;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;
}
button:hover{
    background: #6d44b8;
}
.login{
    height: 460px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: .8s ease-in-out;
}
.login label{
    color: #573b8a;
    transform: scale(.6);
}

#chk:checked ~ .login{
    transform: translateY(-500px);
}
#chk:checked ~ .login label{
    transform: scale(1);
}
#chk:checked ~ .signup label{
    transform: scale(.6);
}
.error {
  width: 100%;
  margin: 0px auto;
  line-height: 20px;
  padding: 0;
  border: 1px solid red;
  color: white;
  background: red;
  font-family: 'Ubuntu', sans-serif;
  font-size: 12px;
  margin-top: -40px;
  margin-bottom: 10px;
}
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<?php
 include ('server.php');
if(isset($_SESSION['User'])) {
     header("Location: storage.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: admin.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: template/menu.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form action="LC.php">

                    <img src="CvSU/logo-removebg.png" style="padding: 10px 15px; margin-top:40px">
                </form>
            </div>

            <div class="login">
                <form action="LC.php" method="post">

                    <label for="chk" aria-hidden="true" style="color:#0275d8;">Sign in</label>
                    <center><?php include('errors.php');?></center>
                    <input type="email" name="username" placeholder="email" required>
                    <input type="password" name="password" id="myInput" placeholder="Password" required>
                   <input type="checkbox" onclick="myFunction()" style="float: left;height: 15px;display: inline-block;margin-top: -10px;margin-left: -20px;"><p style="margin-top: -13px;margin-left: -95px;display: block;float: left;font-size: 15px;">Show Password</p>
                    <script>
                    function myFunction() {
                    var x = document.getElementById("myInput");
                    if (x.type === "password") {
                    x.type = "text";
                    } else {
                    x.type = "password";
                    }
                }
                    </script>
                    <center><div class="g-recaptcha" data-sitekey="6LdRSfsaAAAAAE4xCA7pSS96P-WRCvVBY1jrdTW1"></div>
                    </center><br/>
                    <button name="lc" style="background-color:#0275d8;">Sign in</button>
                </form>
            </div>
    </div>
</body>
</html>
<!-- partial -->

</body>
</html>